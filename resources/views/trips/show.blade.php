@include('layout.header')
<h3>Detail Trips</h3>
<table>
    <tbody>
        <tr>
            <td width="150px">Driver</td>
            <td width="2px">:</td>
            <td>{{ $Trips->driver->name }}</td>
        </tr>
        <tr>
            <td width="150px">Trucs</td>
            <td width="2px">:</td>
            <td>{{ $Trips->trucks->license_plate }}</td>
        </tr>
        <tr>
            <td width="150px">Start Location</td>
            <td width="2px">:</td>
            <td>{{ $Trips->start_location }}</td>
        </tr>
        <tr>
            <td width="150px">End Location</td>
            <td width="2px">:</td>
            <td>{{ $Trips->end_location }}</td>
        </tr>
        <tr>
            <td width="150px">Distance</td>
            <td width="2px">:</td>
            <td>{{ $Trips->distance }}</td>
        </tr>
        <tr>
            <td width="150px">Trip Date</td>
            <td width="2px">:</td>
            <td>{{ $Trips->trip_date }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')