<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allTrucks = Truck::all();
        return view('trucks.index', compact('allTrucks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('trucks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'license_plate' => 'required|string|max:255|unique:trucks',
            'exp_kir' => 'required|date',
            'model' => 'required|string|max:255',
            'capacity' => 'required|integer|min:0',
            'status' => 'nullable|string|max:50',
        ]);

        Truck::create($validatedData);
        return redirect()->route('trucks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        //
        return view('trucks.show', compact('truck'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Truck $truck)
    {
        //
        return view('trucks.edit', compact('truck'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Truck $truck)
    {
        //
        $validatedData = $request->validate([
            'license_plate' => 'required|string|max:255|unique:trucks,license_plate,' . $truck->id,
            'model' => 'required|string|max:255',
            'capacity' => 'required|integer|min:0',
        ]);

        $truck->update($validatedData);
        return redirect()->route('trucks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        //
        $truck->delete();
        return redirect()->route('trucks.index');
    }
}
