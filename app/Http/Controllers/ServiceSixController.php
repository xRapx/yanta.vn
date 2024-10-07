<?php

namespace App\Http\Controllers;

use App\Models\ServicesSix;
use Illuminate\Http\Request;

class ServiceSixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services_6 = ServicesSix::all();
        return view('pages.details.services.service6', compact('services_6'));
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
    public function show(ServicesSix $servicesSix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServicesSix $servicesSix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServicesSix $servicesSix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicesSix $servicesSix)
    {
        //
    }
}
