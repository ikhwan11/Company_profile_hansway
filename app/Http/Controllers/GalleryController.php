<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{

    public function index()
    {
        return view('back_end/Gallery/gallery', [
            'title' => 'Gallery',
            'data' => Gallery::all(),
            'kategori' => GalleryCategory::latest()->get()
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'id_kategori' => 'required',
            'slug' => 'required|unique:galleries',
            'image' => 'required|image|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Gallery-image');
        }

        Gallery::create($validatedData);

        return redirect('/Gallery')->with('pesan', 'Foto berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('back_end/Gallery/gallery_list', [
            'title' => 'Gallery',
            'data' => Gallery::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }

        Gallery::destroy($gallery->id);

        return redirect('/Gallery')->with('pesan', 'Photo deleted!');
    }
}
