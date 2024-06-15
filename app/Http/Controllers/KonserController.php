<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konser;
use App\Models\Ticket;
use App\Models\Purchase;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    public function show($slug)
    {
        // Mengambil konser berdasarkan slug dan tiket yang terkait
        $konser = Konser::with(['ticket', 'talent', 'syaratketentuan'])->where('slug', $slug)->firstOrFail();

        // Mengirim data ke view
        return view('konser', compact('konser'));
    }

    public function belitiket($slug)
    {
        $konser = Konser::with(['ticket'])->where('slug', $slug)->firstOrFail();
        // ddd($konser);
        return view('datatiket', compact('konser'));
    }

    public function process(Request $request)
    {
        //validasi input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'nik' => 'required|numeric', // Contoh validasi untuk NIK unik di tabel users
            'nohp' => 'nullable|numeric',
            'slug' => 'required',
        ]);
        
        // Cari user berdasarkan email atau NIK
        $user = User::where('email', $validatedData['email'])->orWhere('nik', $validatedData['nik'])->firstOrFail();
        // ddd($request);
        // Cari konser berdasarkan slug
        $konser = Konser::where('slug', $request->slug)->firstOrFail();
        
        // Cek apakah user sudah membeli tiket untuk konser ini
        $existingPurchase = Purchase::where('user_id', $user->id)
                                    ->whereHas('ticket', function ($query) use ($konser) {
                                        $query->where('konser_id', $konser->id);
                                    })
                                    ->where('status', 'success')
                                    ->first();

        if ($existingPurchase) {
            // Pengguna sudah membeli tiket untuk konser ini
            return back()->with('errortiket', 'Anda sudah membeli tiket untuk konser ini.');
        }

        $purchase = Purchase::create([
            'user_id' => auth()->user()->id,
            'ticket_id' => $request->id,
            'status' => 'pending',
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serveykey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => ($request->price+5000),
            ),
            'customer_details' => array(
                'name' => $request->name,
                'email' => $request->email,
                'nik' => $request->nik,
                'nohp' => $request->nohp,
            )
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $purchase->snap_token = $snapToken;
        $purchase->save();
        //ddd($purchase);
        return redirect()->route('checkout', $purchase->id);
    }

    public function checkout(Purchase $purchase)
    {
        $konser = Konser::with(['ticket'])->where('id', $purchase->ticket_id)->firstOrFail();
        $user = User::Where('id', $purchase->user_id)->firstOrFail();
        // ddd($user);
        return view('checkout', compact('konser', 'user', 'purchase'));
    }

    public function success(Purchase $purchase)
    {
        if ($purchase->status !== 'success') {

            // Pastikan bahwa pembelian belum ditandai sebagai sukses sebelumnya untuk menghindari pengurangan kuota berulang kali
            $purchase->status = 'success';
            $purchase->save();
    
            // Dapatkan tiket yang terkait dengan pembelian ini
            $ticket = Ticket::findOrFail($purchase->ticket_id);
    
            // Pastikan tiket masih memiliki kuota sebelum mengurangi
            if ($ticket->kuota > 0) {
                $ticket->kuota -= 1; // Kurangi kuota tiket
                $ticket->save();
            } else {
                // Opsional: Tangani kasus ketika tiket tidak memiliki kuota tersisa
                return back()->with('error', 'Maaf, tiket sudah habis.');
            }
    
            return view('success')->with('success', 'Tiket telah dibeli!');
        }
        return back()->with('info', 'Pembelian sudah berhasil sebelumnya.');
    }
}
