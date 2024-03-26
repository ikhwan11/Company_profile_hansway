<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use Illuminate\Support\Facades\Storage;

class ApplicantController extends Controller
{
    public function index()
    {
        return view('back_end/career/applicants/applicants', [
            'title' => 'Career Management',
            'data' => Applicant::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    public function showcv(Applicant $applicant)
    {

        $cvPath = public_path('storage/' . $applicant->cv);

        if (Storage::exists($cvPath)) {
            abort(404);
        }

        return response()->file($cvPath);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicantRequest $request)
    {
        //
    }


    public function show(Applicant $applicant)
    {
        return view('back_end/career/applicants/applicants-preview', [
            'title' => 'Career Management',
            'data' => $applicant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        if ($applicant->cv) {
            Storage::delete($applicant->cv);
        }

        Applicant::destroy($applicant->id);

        return redirect('/Applicants-management')->with('pesan', 'Pelamar telah dihapus!');
    }
}
