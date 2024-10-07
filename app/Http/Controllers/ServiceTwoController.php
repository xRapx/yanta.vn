<?php

namespace App\Http\Controllers;

use App\Models\ServicesTwo;
use Illuminate\Http\Request;

class ServiceTwoController extends Controller
{
    public function index()
    {
        $services_2 = ServicesTwo::all();
        return view('pages.details.services.service2', compact('services_2'));
    }
}
