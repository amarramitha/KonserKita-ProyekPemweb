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
        return view('tiket', compact('datastring', 'purchase'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $dataString = $request->input('dataString');
        // dd($datastring);
        $data = json_decode($dataString, true);
        // dd($data);
        // cek data
        // Mencari data purchase berdasarkan kriteria tertentu
    $purchase = Purchase::whereHas('user', function ($query) use ($data) {
        $query->where('name', $data['name']);
    })->whereHas('ticket', function ($query) use ($data) {
        $query->where('title', $data['ticket']);
    })->whereHas('ticket.konser', function ($query) use ($data) {
        $query->where('title', $data['konser']);
    })->where('snap_token', $data['kode'])->first();

    if (!$purchase) {
        // Jika data purchase tidak ditemukan, kembalikan error
        return redirect('/scanner')->with('error', 'Login gagal, silahkan coba lagi.');
    }

    // Cek apakah sudah ada di Absen
    $absenExists = Absen::where([
        'name' => $data['name'],
        'ticket' => $data['ticket'],
        'konser' => $data['konser'],
        'kode' => $data['kode'],
        'tanggal' => date('Y-m-d'),
    ])->exists();

    if ($absenExists) {
        // Jika sudah ada di Absen, kembalikan error
        return redirect('/scanner')->with('error', 'Anda sudah melakukan absen, selamat menikmati konser !');
    }

    // Jika belum ada, buat data Absen baru
    Absen::create([
        'name' => $data['name'],
        'ticket' => $data['ticket'],
        'konser' => $data['konser'],
        'kode' => $data['kode'],
        'tanggal' => date('Y-m-d'),
    ]);

    return redirect('/scanner')->with('success', 'Absen berhasil, silahkan masuk!');
        // if($validatedData){
        //     return redirect('/scanner')->with('error', 'Login gagal, Silahkan coba lagi!');
        // }

        // Absen::create([
        //     'name' => $data['name'],
        //     'ticket' => $data['ticket'],
        //     'konser' => $data['konser'],
        //     'kode' => $data['kode'],
        //     'tanggal' => date('Y-m-d'),
        // ]);

        // // return redirect()->route('scanner',compact('absen'))->with('success', 'Silahkan Masuk !');
        // return redirect('/scanner')->with('success', 'Silahkan Masuk !');
    }
}
