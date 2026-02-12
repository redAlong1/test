@include('layout.header')
<h3>Detail Trucks</h3>
<table>
    <tbody>
        <tr>
            <td width="150px">License Plate</td>
            <td width="2px">:</td>
            <td>{{ $Trucks->license_place }}</td>
        </tr>
        <tr>
            <td width="150px">Model</td>
            <td width="2px">:</td>
            <td>{{ $Trucks->model }}</td>
        </tr>
        <tr>
            <td width="150px">Capacity</td>
            <td width="2px">:</td>
            <td>{{ $Trucks->capacity }}</td>
        </tr>
        <tr>
            <td width="150px">Expired KIR</td>
            <td width="2px">:</td>
            <td>{{ $Trucks->expired_kir }}</td>
        </tr>
        <tr>
            <td width="150px">Status</td>
            <td width="2px">:</td>
            <td>{{ $Trucks->status == 1 ? 'Available' : 'Not Available' }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')