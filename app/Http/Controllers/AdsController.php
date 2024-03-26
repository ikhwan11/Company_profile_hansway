<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back_end/ads/advertisement', [
            'title' => 'Advertisement Management',
            'data' => Ads::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|max:255',
            'tipe' => 'required|max:255',
            'status' => 'required|max:255',
            'image' => 'required|image|max:5120',
        ]);


        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Ads-image');
        }

        Ads::create($validatedData);

        return redirect('/Ads')->with('pesan', 'Ads berhasil ditambah');
    }



    /**
     * Display the specified resource.
     */
    public function show(Ads $ads)
    {
        return view('back_end/ads/advertisement-preview', [
            'title' => 'Advertisement Management',
            'data' => $ads
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ads $ads)
    {
        $validatedData = $request->validate([
            'status' => 'required',
        ]);

        Ads::where('id', $ads->id)
            ->update($validatedData);

        return redirect('/Ads')->with('pesan', 'Status updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ads $ads)
    {
        if ($ads->image) {
            Storage::delete($ads->image);
        }

        Ads::destroy($ads->id);

        return redirect('/Ads')->with('pesan', 'Ads deleted!');
    }
}
