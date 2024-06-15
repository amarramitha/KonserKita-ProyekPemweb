<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Konser $konser)
    {
        return view('admin.tikets.create', compact('konser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'konser_id' => 'required',
            'title' => 'required|max:255',
            'price' => 'required|numeric|min:1000',
            'kuota' => 'required|numeric',
            'status' => 'required',
        ]);

        Ticket::create($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Tiket baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konser $konser, Ticket $ticket)
    {
        return view('admin.tikets.edit', [
            'ticket' => $ticket,
            'tickets' => $konser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konser $konser, Ticket $ticket)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric|min:1000',
            'kuota' => 'required|numeric',
            // 'status' => 'required',
        ]);

        Ticket::where('id', $ticket->id)->update($validatedData);

        if($validatedData['kuota'] == 0)
        {
            Ticket::where('id', $ticket->id)->update(['status' => 'Sold Out']);
        }

        return redirect('/admin/dashboard/konsers')->with('success', 'Tiket telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser,Ticket $ticket)
    {
        Ticket::destroy($ticket->id);
        return redirect('/admin/dashboard/konsers')->with('success', 'Konser berhasil dihapus!');
    }
}
