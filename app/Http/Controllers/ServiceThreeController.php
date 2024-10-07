<?php

namespace App\Http\Controllers;

use App\Models\ServicesThree;
use Illuminate\Http\Request;

class ServiceThreeController extends Controller
{
    public function index()
    {
        $services_3 = ServicesThree::all();
        return view('pages.details.services.service3', compact('services_3'));
    }

    public function show($id)
    {
        $serviceOne = ServicesThree::findOrFail($id);
        return view('service_ones.show', compact('serviceOne'));
    }
}

