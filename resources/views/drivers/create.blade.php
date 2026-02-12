@include('layout.header')
<h3>Buat Drivers</h3>

<form action="{{ route("drivers.store") }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Nama Drivers:</label>
        <input type="text" name="name" id="" placeholder="Masukkan Nama Drivers">
    </div>
    <div class="form-group">
        <label for="">License Number:</label>
        <input type="text" name="license_number" id="" placeholder="Masukkan License Number">
    </div>
     <div class="form-group">
        <label for="">Expired SIM:</label>
        <input type="date" name="exp_sim" id="" placeholder="Masukkan Expired SIM">
    </div>
     <div class="form-group">
        <label for="">Experience:</label>
        <input type="number" name="experience_years" id="" placeholder="Masukkan Experience">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')