<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function index()
    {
        return view('back_end/clients/clients', [
            'title' => 'Clients',
            'data' => Client::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_client' => 'required|max:255',
            'image' => 'required|image|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('client-logo');
        }

        Client::create($validatedData);

        return redirect('/Clients')->with('pesan', 'Client berhasil ditambah');
    }

    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        if ($client->image) {
            Storage::delete($client->image);
        }

        Client::destroy($client->id);

        return redirect('/Clients')->with('pesan', 'Client deleted!');
    }
}
