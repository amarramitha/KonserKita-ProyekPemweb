<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();

        view('dashboard', compact('konsers'));
    }
}
