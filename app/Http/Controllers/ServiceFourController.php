<?php

namespace App\Http\Controllers;

use App\Models\ServicesFour;
use Illuminate\Http\Request;

class ServiceFourController extends Controller
{
    public function index()
    {
        $services_4 = ServicesFour::all();
        return view('pages.details.services.service4', compact('services_4'));
    }

    public function show($id)
    {
        $serviceOne = ServicesFour::findOrFail($id);
        return view('service_ones.show', compact('serviceOne'));
    }
}

