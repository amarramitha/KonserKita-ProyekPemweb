<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class QrcodeController extends Controller
{
    public function generateQrcode($id)
    {
        $purchase = Purchase::with(['user', 'ticket.konser'])->findOrFail($id);
        // Mempersiapkan data untuk dikirim ke view
        $data = [
            'name' => $purchase->user->name,
            'ticket' => $purchase->ticket->title,
            'konser' => $purchase->ticket->konser->title, // Mengakses konser melalui tiket
            'kode' => $purchase->snap_token,
        ];

        $datastring = json_encode($data);
        // dd($datastring);
        return view('tiket', compact('datastring'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $dataString = $request->input('dataString');
        // dd($datastring);
        $data = json_decode($dataString, true);
        // dd($data);
        // cek data
        $validatedData = Absen::where([
            'name' => $data['name'],
            'ticket' => $data['ticket'],
            'konser' => $data['konser'],
            'kode' => $data['kode'],
            'tanggal' => date('Y-m-d'),
        ])->first();

        if($validatedData){
            return redirect('/scanner')->with('error', 'Login gagal, Silahkan coba lagi!');
        }

        Absen::create([
            'name' => $data['name'],
            'ticket' => $data['ticket'],
            'konser' => $data['konser'],
            'kode' => $data['kode'],
            'tanggal' => date('Y-m-d'),
        ]);

        return redirect('/scanner')->with('success', 'Silahkan Masuk !');
    }
}
