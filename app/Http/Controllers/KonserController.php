<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konser;
use App\Models\Ticket;
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
}
