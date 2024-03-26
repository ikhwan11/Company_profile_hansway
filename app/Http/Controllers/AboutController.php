<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function index()
    {
        return view('back_end/management_content/about-edit', [
            'title' => 'Content Management',
            'data' => About::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'vision' => 'required',
        //     'slug' => 'required',
        //     'mission' => 'required',
        //     'image' => 'image|file|max:5120',
        //     'about_text' => 'required',
        // ]);

        // // store file image
        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('about-images');
        // }

        // About::create($validatedData);

        // return redirect('/About')->with('pesan', 'Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $rules = ([
            'title' => 'required|max:255',
            'vision' => 'required',
            'mission' => 'required',
            'image' => 'image|file|max:5120',
            'about_text' => 'required',
        ]);

        $validatedData = $request->validate($rules);

        // store file image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('about-images');
        }

        About::where('id', 1)
            ->update($validatedData);

        return redirect('/About')->with('pesan', 'Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
