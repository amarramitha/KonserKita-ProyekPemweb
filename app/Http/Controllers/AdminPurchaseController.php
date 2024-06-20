<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\Purchase;
use Illuminate\Http\Request;

class AdminPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsers = Konser::with(['ticket.purchase'])->get()->map(function ($konser) {
            // Menghitung total tiket yang terjual untuk konser ini
            $totalTicketsSold = $konser->ticket->reduce(function ($carry, $ticket) {
                return $carry + $ticket->purchase->count();
            }, 0);
    
            // Menghitung total pemasukan dari penjualan tiket untuk konser ini
            $totalIncome = $konser->ticket->reduce(function ($carry, $ticket) {
                return $carry + $ticket->purchase->count() * $ticket->price;
            }, 0);
    
            // Menambahkan properti baru ke objek konser untuk total tiket terjual dan total pemasukan
            $konser->totalTicketsSold = $totalTicketsSold;
            $konser->totalIncome = $totalIncome;
    
            return $konser;
        });
        // dd($konsers);
        return view('admin.purchase.index', [
            'konsers' => $konsers,
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Asumsi bahwa 'slug' adalah parameter unik untuk mengidentifikasi konser.
        // Ganti '$slug' dengan '$id' jika Anda menggunakan ID numerik.
        $konser = Konser::with(['ticket.purchase.user'])->where('slug', $slug)->get();

        if (!$konser) {
            // Handle jika konser tidak ditemukan, misalnya dengan redirect atau menampilkan error.
            return redirect()->back()->withErrors(['message' => 'Konser tidak ditemukan.']);
        }

        // Debugging: untuk melihat output data
        // dd($konser);

        // Anda bisa return view atau data sesuai kebutuhan Anda
        return view('admin.purchase.show', [
            'konser' => $konser,
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
