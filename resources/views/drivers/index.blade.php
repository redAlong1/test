@include('layout.header')
<h3>Drivers</h3>
<a href="{{ route('drivers.create') }}" class="tombol">Tambah Drivers</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Drivers</th>
            <th>No SIM</th>
            <th>Expired SIM</th>
            <th>Pengalaman</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allDrivers as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nama_Drivers }}</td>
                <td>{{ $r->license_number }}</td>
                <td>{{ \Carbon\Carbon::parse($r->exp_sim)->format('d M Y') }}</td>
                <td>{{ $r->experience_years }} tahun</td>

                <td>
                    <form action="{{ route('drivers.destroy', $r->id) }}" method="POST">
                        <a href="{{ route("drivers.show", $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('drivers.edit', $r->id) }}" class="tombol">Edit</a>
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