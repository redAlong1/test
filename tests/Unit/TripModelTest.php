<?php

namespace Tests\Unit;

use App\Models\Drivers;
use Tests\TestCase;
use App\Models\Trip;
use App\Models\Truck;
use App\Models\Driver;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TripModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_trip_dapat_dibuat_dengan_sukses()
    {
        $truck = Truck::factory()->create();
        $driver = Drivers::factory()->create();

        $data = [
            'truck_id' => $truck->id,
            'driver_id' => $driver->id,
            'start_location' => 'Jakarta',
            'end_location' => 'Bandung',
            'distance' => 150,
            'trip_date' => now()->format('Y-m-d'),
        ];

        $trip = Trip::create($data);

        $this->assertInstanceOf(Trip::class, $trip);
        $this->assertEquals($data['truck_id'], $trip->truck_id);
        $this->assertDatabaseHas('trips', $data);
    }

    public function test_trip_gagal_dibuat_ketika_truck_id_atau_driver_id_tidak_valid()
    {
        $data = [
            'truck_id' => 9999,
            'driver_id' => 9999,
            'start_location' => 'Jakarta',
            'end_location' => 'Bandung',
            'distance' => 150,
            'trip_date' => now()->format('Y-m-d'),
        ];

        $this->expectException(\Illuminate\Database\QueryException::class);

        Trip::create($data);
    }
}