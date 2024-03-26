<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class USerController extends Controller
{


    public function index()
    {
        return view('back_end/user_management/user', [
            'title' => 'User Management',
            'data' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'role' => 'required',
            'jabatan' => 'required',
            'password' => 'required|min:6',
            'no_hp' => 'max:15',
            'image' => 'required|image|max:5120',
        ]);


        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/User')->with('pesan', 'User baru berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('back_end/user_management/user-edit', [
            'title' => 'User Management',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $id)
    {
        $userdata = $user::find($id);

        $rules = [
            'name' => 'required|max:255',
            'role' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'max:15',
            'image' => 'image|max:5120',
        ];

        if ($request->email != $userdata->email) {
            $rules['email'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        User::where('id', $userdata->id)
            ->update($validatedData);

        return redirect('/User')->with('pesan', 'Update successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $id)
    {
        $userdata = $user::find($id);
        if ($userdata->image) {
            Storage::delete($userdata->image);
        }

        User::destroy($userdata->id);

        return redirect('/User')->with('pesan', 'User deleted!');
    }
}
