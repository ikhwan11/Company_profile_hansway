<?php

namespace App\Http\Controllers;

use App\Models\Service_text;
use App\Models\Service_why;
use Illuminate\Http\Request;

class ServiceTextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back_end/management_content/service-text', [
            'title' => 'Content Management',
            'text' => Service_text::all(),
            'why' => Service_why::all(),
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service_text $service_text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service_text $service_text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required'
        ]);

        Service_text::where('id', 1)
            ->update($validatedData);

        return redirect('/Service-text')->with('pesan', 'Berhasil diupdate!');
    }

    public function update_text_why(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'customer_focus' => 'required',
            'emphaty' => 'required',
            'professionalism' => 'required',
            'acuracy_trustworthy' => 'required',
        ]);

        Service_why::where('id', 1)
            ->update($validatedData);

        return redirect('/Service-text')->with('pesan', 'Berhasil diupdate!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service_text $service_text)
    {
        //
    }
}
