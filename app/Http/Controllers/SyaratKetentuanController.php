<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;
use App\Models\Syaratketentuan;

class SyaratKetentuanController extends Controller
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
        return view('admin.syaratketentuans.create', compact('konser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'konser_id' => 'required',
            'syaratketentuan' => 'required',
        ]);

        Syaratketentuan::create($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Syarat dan ketentuan baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Syaratketentuan $syaratketentuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konser $konser, Syaratketentuan $syaratketentuan)
    {
        // dd($syaratketentuan);
        return view('admin.syaratketentuans.edit', [
            'sk' => $syaratketentuan,
            'konser' => $konser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konser $konser, Syaratketentuan $syaratketentuan)
    {
        $validatedData = $request->validate([
            'syaratketentuan' => 'required',
        ]);

        Syaratketentuan::where('id', $syaratketentuan->id)->update($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Syarat dan ketentuan telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser, Syaratketentuan $syaratketentuan)
    {
        Syaratketentuan::destroy($syaratketentuan->id);
        return redirect('/admin/dashboard/konsers')->with('success', 'Syarat dan Ketentuan berhasil dihapus!');
    }
}
