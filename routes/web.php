<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TripApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('trucks', App\Http\Controllers\TruckController::class);
Route::resource('trips', App\Http\Controllers\TripController::class);
Route::resource('drivers', App\Http\Controllers\DriversController::class);
Route::get('api/trips', [TripApiController::class, 'getAllTrips']);
