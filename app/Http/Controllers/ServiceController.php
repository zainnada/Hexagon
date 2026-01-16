<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index', [
            'services' => Service::with(['client','translations'])->get() // eagerLoading
        ]);
    }
    public function create()
    {
        return view('services.create');
    }

    public function store()
    {
        // validation
        $attributes = request()->validate([
            'service_name' => ['required', 'max:255'],
            'service_description' => ['required'],
            'service_price' => ['required','numeric','min:0'],
        ]);

        $client = auth()->user()->client;

        $client->services()->create($attributes);

        return redirect('/services');
    }
    public function show(Service $service){
        return view('services.show', ['service' => $service]);
    }

    public function edit(Service $service){
        return view('services.edit', ['service' => $service]);
    }

    public function update(Service $service){
        $attributes = request()->validate([
            'service_name' => ['required', 'max:255'],
            'service_description' => ['required'],
            'service_price' => ['required','numeric','min:0'],
        ]);

        $service->update($attributes);

        return redirect('/services/'.$service->id);
    }

    public function destroy(Service $service){
        $service->delete();
        return redirect('/services');
    }

}
