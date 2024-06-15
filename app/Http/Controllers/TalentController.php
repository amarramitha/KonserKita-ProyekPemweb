<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TalentController extends Controller
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
        return view('admin.talents.create', compact('konser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'konser_id' => 'required',
            'name' => 'required|max:255',
            'image' => 'image|file|max:10048',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('talent-badge');
        }

        Talent::create($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Talent baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Talent $talent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konser $konser, Talent $talent)
    {
        return view('admin.talents.edit', [
            'talent' => $talent,
            'konser' => $konser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konser $konser, Talent $talent)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:10048',
        ]);

        if($request->file('image'))
        {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('talent-badge');   
        }

        Talent::where('id', $talent->id)->update($validatedData);

        return redirect('/admin/dashboard/konsers')->with('success', 'Talent telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser, Talent $talent)
    {
        if($talent->image){
            Storage::delete($talent->image);
        }
        Talent::destroy($talent->id);
        return redirect('/admin/dashboard/konsers')->with('success', 'Talent berhasil dihapus!');
    }
}
