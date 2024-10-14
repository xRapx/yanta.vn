<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function home()
    {
        $services = Service::all();
        Log::info($services);
        return view('admin.content.services', compact('services'));
    }

    public function details($id)
    {
        $service = Service::findOrFail($id);
        return view('pages.details.service', compact('service'));
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
        $service = new Service();
        $service->title = $request->title;
        $service->content = $request->quantity;
        $service->status = $request->status;
        $service->save();

        return redirect()->route('services.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return redirect()->route('services.show', $service->id)->with('success', 'Services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
