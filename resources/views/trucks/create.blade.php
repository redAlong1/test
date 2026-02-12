@include('layout.header')
<h3>Buat Trucks</h3>

<form action="{{ route("trucks.store") }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">License plate:</label>
        <input type="text" name="license_plate" id="" placeholder="Masukkan License Plate">
    </div>
    <div class="form-group">
        <label for="">Model:</label>
        <input type="text" name="model" id="" placeholder="Masukkan Model">
    </div>
    <div class="form-group">
        <label for="">Capacity:</label>
        <input type="number" name="capacity" id="" placeholder="Masukkan Capacity">
    </div>
    <div class="form-group">
        <label for="">Expired KIR:</label>
        <input type="date" name="exp_kir" id="" placeholder="Masukkan Expired KIR">
    </div>
        <div class="form-group">
            <label for="">Status Available:</label>
            <select name="status" id="">
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')