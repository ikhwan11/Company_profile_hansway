<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function index()
    {
        return view('back_end/career/career', [
            'title' => 'Career Management',
            'data' => Career::latest()->filter(request(['search']))->paginate(3)->withQueryString()
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
            'position' => 'required|max:255',
            'slug' => 'required|max:255|unique:careers',
            'qualification' => 'required',
            'salary_offer' => 'max:255',
        ]);

        Career::create($validatedData);

        return redirect('/Career-management')->with('pesan', 'Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        return view('back_end/career/career-preview', [
            'title' => 'Career Management',
            'data' => $career
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        return view('back_end/career/career-edit', [
            'title' => 'Career Management',
            'data' => $career
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        $rules = [
            'position' => 'required|max:255',
            'qualification' => 'required',
            'salary_offer' => 'max:255',
        ];

        if ($request->slug != $career->slug) {
            $rules['slug'] = 'required|max:255|unique:careers';
        }

        $validatedData = $request->validate($rules);

        Career::where('id', $career->id)
            ->update($validatedData);

        return redirect('/Career-management')->with('pesan', 'Edit Successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        Career::destroy($career->id);
        return redirect('/Career-management')->with('pesan', 'Career deleted!');
    }
}
