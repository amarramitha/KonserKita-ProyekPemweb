<?php

namespace App\Http\Controllers;

use App\Models\Konser;
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
}
