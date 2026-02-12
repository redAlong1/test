<?php

namespace App\Http\Controllers;

use App\Models\Drivers;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allDrivers = Drivers::all();
        return view('drivers.index', compact('allDrivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'license_number' => 'required|string|max:255|unique:drivers',
            'exp_sim' => 'required|date',
            'experience_years' => 'required|integer|min:0',
        ]);

        $driver = Drivers::create($validatedData);
        return redirect()->route('drivers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drivers $drivers)
    {
        //
        return view('drivers.show', compact('drivers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drivers $drivers)
    {
        //
        return view('drivers.edit', compact('drivers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drivers $drivers)
    {
        //
          $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'license_number' => 'required|string|max:255|unique:drivers',
            'exp_sim' => 'required|date',
            'experience_years' => 'required|integer|min:0',
        ]);

        $drivers->update($validatedData);
        return redirect()->route('drivers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drivers $drivers)
    {
        //
        $drivers->delete();
        return redirect()->route('drivers.index');
    }
}
