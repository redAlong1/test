@include('layout.header')
<h3>Trucks</h3>
<a href="{{ route('trucks.create') }}" class="tombol">Tambah Trucks</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>License Plate</th>
            <th>Model</th>
            <th>Capacity</th>
            <th>Expired KIR</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allTrucks as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->license_plate }}</td>
                <td>{{ $r->model }}</td>
                <td>{{ $r->capacity }}</td>
                <td>{{ \Carbon\Carbon::parse($r->exp_kir)->format('d M Y') }}</td>
                <td>{{ $r->status == 1 ? 'Available' : 'Not Available' }}</td>
                <td>
                    <form action="{{ route('trucks.destroy', $r->id) }}" method="POST">
                        <a href="{{ route("trucks.show", $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('trucks.edit', $r->id) }}" class="tombol">Edit</a>
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