<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Http\Resources\TripResource;
use App\Models\Truck;
use App\Models\Drivers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TripApiController extends Controller
{
    // Mengambil semua data trip
   public function getAllTrips()
{
    // Eager loading tetap diperlukan agar efisien
    $trips = Trip::with(['truck', 'driver'])->orderBy('trip_date', 'desc')->get();

    // Menggunakan TripResource::collection
    return TripResource::collection($trips);
}
}