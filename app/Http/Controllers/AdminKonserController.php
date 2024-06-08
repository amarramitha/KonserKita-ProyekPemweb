<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminKonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.konsers.index', [
            'konsers' => Konser::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.konsers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'time' => 'required',
            'lokasi' => 'required',
            'slug' => 'required|unique:konsers',
            'image' => 'required',
        ]);

        Konser::create($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Konser baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konser $konser)
    {
        return view('admin.konsers.show',[
            'konser' => $konser,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konser $konser)
    {
        return view('admin.konsers.edit', [
            'konser' => $konser,
            'konsers' => Konser::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konser $konser)
    {
        $rules = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'time' => 'required',
            'lokasi' => 'required',
        ]);

        if($request->slug != $konser->slug){
            $rules['slug'] = 'required|unique:konsers';
        }

        Konser::where('id', $konser->id)
            ->update($rules);

        return redirect('/admin/dashboard/konsers')->with('success', 'Konser telah diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser)
    {
        Konser::destroy($konser->id);
        return redirect('/admin/dashboard/konsers')->with('success', 'Konser berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Konser::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

