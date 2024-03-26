<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Oasis_landing_page extends Controller
{
    public function index()
    {
        return view('oasis_mas/oasis_landing_page', [
            'title' => 'Oasis Mas Cluster',
        ]);
    }
}
