<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back_end/service/service', [
            'title' => 'Service & Project Management',
            'data' => Service::latest()->filter(request(['search']))->paginate(5)->withQueryString()
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
            'slug' => 'required|max:255|unique:services',
            'category' => 'required',
            'about_services' => 'required',
            'image' => 'required|image|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Services-images');
        }

        $validatedData['excerpt'] = Str::limit(Strip_tags($request->about_services), 200);

        Service::create($validatedData);

        return redirect('/Service-management')->with('pesan', 'Sucessfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('back_end/service/service-edit', [
            'title' => 'Service & Project Management',
            'data' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $rules = [
            'name' => 'required|max:255',
            'category' => 'required',
            'about_services' => 'required',
            'image' => 'required|image|max:5120',
        ];

        if ($request->slug != $service->slug) {
            $rules['slug'] = 'required|max:255|unique:services';
        }

        $validatedData['excerpt'] = Str::limit(Strip_tags($request->about_services), 200);
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('Services-images');
        }

        $validatedData['excerpt'] = Str::limit(Strip_tags($request->about_services), 200);

        Service::where('id', $service->id)
            ->update($validatedData);

        return redirect('/Service-management')->with('pesan', 'Update Sucessfull');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete($service->image);
        }

        Service::destroy($service->id);

        return redirect('/Service-management')->with('pesan', 'Service deleted!');
    }
}
