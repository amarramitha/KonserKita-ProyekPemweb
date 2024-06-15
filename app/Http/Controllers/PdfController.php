<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function generatePdf($id)
    {
        $purchase = Purchase::with(['user', 'ticket.konser'])->findOrFail($id);
        // Mempersiapkan data untuk dikirim ke view
        $data = [
            'purchase' => $purchase,
            'user' => $purchase->user,
            'ticket' => $purchase->ticket,
            'konser' => $purchase->ticket->konser, // Mengakses konser melalui tiket
        ];
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadview('tiket');
        return $pdf->stream();
    }
}
