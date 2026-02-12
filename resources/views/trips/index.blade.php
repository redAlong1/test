@include('layout.header')

<div style="margin-bottom: 20px;">
    <h3>Dashboard Monitoring</h3>
    <div style="display: flex; gap: 20px;">
        <div style="background-color: #f8f9fa; border: 1px solid #ddd; padding: 15px; border-radius: 8px; flex: 1; text-align: center;">
            <h4 style="margin: 0; font-size: 14px; color: #666;">Total Trip Hari Ini</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0 0 0; color: #2c3e50;">
                {{ $totalTripsToday }}
            </p>
        </div>

        <div style="background-color: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 8px; flex: 1; text-align: center;">
            <h4 style="margin: 0; font-size: 14px; color: #856404;">Truck Expired (30 Hari)</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0 0 0; color: #856404;">
                {{ $expiringKIR }} <span style="font-size: 12px; font-weight: normal;">Unit</span>
            </p>
        </div>

        <div style="background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 15px; border-radius: 8px; flex: 1; text-align: center;">
            <h4 style="margin: 0; font-size: 14px; color: #721c24;">SIM Driver Expired (30 Hari)</h4>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0 0 0; color: #721c24;">
                {{ $expiringSims }} <span style="font-size: 12px; font-weight: normal;">Orang</span>
            </p>
        </div>
    </div>
</div>

<h3>Daftar Trips</h3>
<a href="{{ route('trips.create') }}" class="tombol" style="margin-bottom: 15px; display: inline-block;">Tambah Trips</a>

<table>
    <thead>
            <th>No</th>
            <th>Tanggal</th>
            <th>Truck</th>
            <th>Driver</th>
            <th>Rute</th>
            <th>Jarak</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allTrips as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ \Carbon\Carbon::parse($r->trip_date)->format('d M Y') }}</td>
                <td>{{ $r->truck->plate_number ?? '-' }}</td>
                <td>{{ $r->driver->name ?? '-' }}</td>
                <td>{{ $r->start_location }} - {{ $r->end_location }}</td>
                <td>{{ $r->distance }} km</td>
                <td>
                    <form action="{{ route('trips.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('trips.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('trips.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer')