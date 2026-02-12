@include('layout.header')
<h3>Edit Drivers</h3>

<form action="{{ route("drivers.update", $Drivers->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nama Drivers:</label>
        <input type="text" name="name" id="" value="{{ $Drivers->name }}" placeholder="Masukkan Nama Drivers">
    </div>
    <div class="form-group">
        <label for="">License Number:</label>
        <input type="text" name="license_number" id="" value="{{ $Drivers->license_number }}" placeholder="Masukkan License Number">
    </div>
     <div class="form-group">
        <label for="">Expired SIM:</label>
        <input type="date" name="exp_sim" id="" value="{{ $Drivers->expired_sim }}" placeholder="Masukkan Expired SIM">
    </div>
     <div class="form-group">
        <label for="">Experience:</label>
        <input type="number" name="experience_years" id="" value="{{ $Drivers->experience_years }}" placeholder="Masukkan Experience">
    </div>
    <button type="submit" class="tombol">Edit</button>
</form>
@include('layout.footer')