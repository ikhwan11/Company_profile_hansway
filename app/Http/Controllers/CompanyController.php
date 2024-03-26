<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{

    public function index()
    {
        return view('back_end/companies/company', [
            'title' => 'Companies',
            'data' => Company::all()
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
            'slug' => 'required|max:255',
            'link' => 'required|max:255',
            'about' => 'required',
            'image' => 'required|image|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('company-logo');
        }

        Company::create($validatedData);

        return redirect('/Company')->with('pesan', 'Company berhasil ditambah');
    }


    public function show(Company $company)
    {
        return view('back_end/companies/company-preview', [
            'title' => 'Companies',
            'data' => $company
        ]);
    }

    public function edit(Company $company)
    {
        return view('back_end/companies/company-edit', [
            'title' => 'Companies',
            'data' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
            'link' => 'required|max:255',
            'about' => 'required',
            'image' => 'image|max:5120',
        ]);

        if ($request->slug != $company->slug) {
            $rules['slug'] = 'required|max:255|unique:companies';
        }

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('company-logo');
        }

        Company::where('id', $company->id)
            ->update($validatedData);

        return redirect('/Company')->with('pesan', 'Company berhasil diupdate');
    }


    public function destroy(Company $company)
    {
        if ($company->image) {
            Storage::delete($company->image);
        }

        company::destroy($company->id);

        return redirect('/Company')->with('pesan', 'Company deleted!');
    }
}
