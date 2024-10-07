<?php

namespace App\Http\Controllers;

use App\Models\ServicesFive;
use Illuminate\Http\Request;

class ServiceFiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services_5 = ServicesFive::all();
        return view('pages.details.services.service5', compact('services_5'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicesFive $servicesFive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServicesFive $servicesFive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServicesFive $servicesFive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicesFive $servicesFive)
    {
        //
    }
}
