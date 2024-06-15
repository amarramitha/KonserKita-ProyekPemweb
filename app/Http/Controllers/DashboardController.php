<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\Purchase;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();

        view('dashboard', compact('konsers'));
    }

    public function transaksi()
    {
        $purchase = Purchase::with('ticket.konser', 'user')->where('user_id', auth()->user()->id)->get();
        // ddd($purchase);
        return view('transaksi', compact('purchase'));
    }
}
