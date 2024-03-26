<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back_end/management_content/slider', [
            'title' => 'Content Management',
            'data' => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back_end/management_content/slider-add', [
            'title' => 'Content Management',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'headline' => 'required|max:255',
            'slug' => 'required',
            'body' => 'required|max:500',
            'image' => 'required|image|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sliders-images');
        }

        Slider::create($validatedData);

        return redirect('/Slider')->with('pesan', 'Slider berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Slider::where('id', $id)->first();
        return view('back_end/management_content/slider-edit', [
            'title' => 'Content Management',
            'slider' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'headline' => 'required|max:255',
            'body' => 'required|max:500',
            'image' => 'image|max:5120',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('sliders-images');
        }

        Slider::where('id', $id)
            ->update($validatedData);

        return redirect('/Slider')->with('pesan', 'Slider berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
