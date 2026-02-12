<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Truck;
use App\Models\Drivers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $totalTripsToday = Trip::whereDate('trip_date', Carbon::today())->count();

        $expiringKIR = Truck::where('exp_kir', '>=', Carbon::today())
            ->where('exp_kir', '<=', Carbon::today()->addDays(30))
            ->count();

        $expiringSims = Drivers::where('exp_sim', '>=', Carbon::today())
            ->where('exp_sim', '<=', Carbon::today()->addDays(30))
            ->count();

        $allTrips = Trip::with(['truck', 'driver'])->orderBy('trip_date', 'desc')->get();

        return view('trips.index', compact('allTrips', 'totalTripsToday', 'expiringKIR', 'expiringSims'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'truck_id' => 'required|exists:trucks,id',
            'driver_id' => 'required|exists:drivers,id',
            'start_location' => 'required|string|max:255',
            'end_location' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Trip::create($validatedData);
        return redirect()->route('trips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
        return view('trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
        return view('trips.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        //
        $validatedData = $request->validate([
            'truck_id' => 'required|exists:trucks,id',
            'driver_id' => 'required|exists:drivers,id',
            'start_location' => 'required|string|max:255',
            'end_location' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $trip->update($validatedData);
        return redirect()->route('trips.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        //
        $trip->delete();
        return redirect()->route('trips.index');
    }
}
