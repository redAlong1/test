@include('layout.header')
<h3>Detail Drivers</h3>
<table>
    <tbody>
        <tr>
            <td width="150px">Nama Drivers</td>
            <td width="2px">:</td>
            <td>{{ $Drivers->name }}</td>
        </tr>
        <tr>
            <td width="150px">License Number</td>
            <td width="2px">:</td>
            <td>{{ $Drivers->license_number }}</td>
        </tr>
        <tr>
            <td width="150px">Expired SIM</td>
            <td width="2px">:</td>
            <td>{{ $Drivers->expired_sim }}</td>
        </tr>
        <tr>
            <td width="150px">Experience</td>
            <td width="2px">:</td>
            <td>{{ $Drivers->experience }} tahun</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')