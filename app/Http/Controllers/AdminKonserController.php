<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        //ddd($request);
        //return $request->file('image')->store('konser-images');
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'time' => 'required',
            'lokasi' => 'required',
            'slug' => 'required|unique:konsers',
            'image' => 'image|file|max:10048',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('konser-images');
        }

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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'time' => 'required',
            'lokasi' => 'required',
            'image' => 'image|file|max:10048',
        ]);

        if($request->slug != $konser->slug){
            $validatedData = $request->validate()['slug'] = 'required|unique:konsers';
        }

        if($request->file('image'))
        {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('konser-images');   
        }

        Konser::where('id', $konser->id)->update($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Konser telah diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser)
    {
        if($konser->image){
            Storage::delete($konser->image);
        }
        Konser::destroy($konser->id);
        return redirect('/admin/dashboard/konsers')->with('success', 'Konser berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Konser::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

}

