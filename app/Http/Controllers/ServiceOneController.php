<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicesOne;
use Illuminate\Http\Request;

class ServiceOneController extends Controller
{
    public function index()
    {
        $services_1 = ServicesOne::all();
        return view('pages.details.services.service1', compact('services_1'));
    }
}
