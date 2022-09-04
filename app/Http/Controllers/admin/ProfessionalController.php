<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professionals = collect([]);

        return view('admin.professional.index')->with([
            'professionals' => $professionals
        ]);
    }

    public function create(Request $request)
    {
        return view('admin.professional.create');
    }
}
