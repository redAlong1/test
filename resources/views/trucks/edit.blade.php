@include('layout.header')
<h3>Edit Trucks</h3>

<form action="{{ route("trucks.update", $Trucks->id) }}" method="post">
    @csrf
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="">License Place:</label>
        <input type="text" name="license_place" id="" value="{{ $Trucks->license_place }}" placeholder="Masukkan License Place">
    </div>
    <div class="form-group">
        <label for="">Model:</label>
        <input type="text" name="model" id="" value="{{ $Trucks->model }}" placeholder="Masukkan Model">
    </div>
    <div class="form-group">
        <label for="">Capacity:</label>
        <input type="number" name="capacity" id="" value="{{ $Trucks->capacity }}" placeholder="Masukkan Capacity">
    </div>
    <div class="form-group">
        <label for="">Expired KIR:</label>
        <input type="date" name="expired_kir" id="" value="{{ $Trucks->expired_kir }}" placeholder="Masukkan Expired KIR">
    </div>
        <div class="form-group">
            <label for="">Status Available:</label>
            <select name="status" id="">
                <option value="1" {{ $Trucks->status == 1 ? 'selected' : '' }}>Available</option>
                <option value="0" {{ $Trucks->status == 0 ? 'selected' : '' }}>Not Available</option>
            </select>
        </div>
    <button type="submit" class="tombol">Edit</button>
</form>
@include('layout.footer')