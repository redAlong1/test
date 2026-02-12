<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'trip_id' => $this->id,
            'truck' => [
                'license_plate' => $this->truck->plate_number ?? '-',
                'model' => $this->truck->brand ?? '-', // Asumsi model menggunakan kolom brand
            ],
            'driver' => [
                'name' => $this->driver->name ?? '-',
            ],
            'start_location' => $this->start_location,
            'end_location' => $this->end_location,
            'distance' => $this->distance,
            'trip_date' => $this->trip_date,
        ];
    }
}
