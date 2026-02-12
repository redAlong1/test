@include('layout.header')
<h3>Edit Trips</h3>

<form action="{{ route("trips.update", $Trips->id) }}" method="post">
    @csrf
    @method('PUT')
   <div class="form-group">
        <label for="">Trucks:</label>
        <select name="trucks_id" id="">
            @foreach ($trucks as $t)
                <option value="{{ $t->id }}" {{ $t->id == $Trips->trucks_id ? 'selected' : '' }}>{{ $t->license_plate }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Drivers:</label>
        <select name="drivers_id" id="">
            @foreach ($drivers as $d)
                <option value="{{ $d->id }}" {{ $d->id == $Trips->drivers_id ? 'selected' : '' }}>{{ $d->name }}</option>
            @endforeach
        </select>
    </div>
     <div class="form-group">
        <label for="">Start Location:</label>
        <input type="text" name="start_location" id="" value="{{ $Trips->start_location }}">
    </div> <div class="form-group">
        <label for="">End Location:</label>
        <input type="text" name="end_location" id="" value="{{ $Trips->end_location }}">
    </div> <div class="form-group">
        <label for="">Distance:</label>
        <input type="number" name="distance" id="" value="{{ $Trips->distance }}">
    </div>
    </div> <div class="form-group">
        <label for="">Trip Date:</label>
        <input type="date" name="trip_date" id="" value="{{ $Trips->trip_date }}" placeholder="Masukkan Trip Date">
    </div>
    <button type="submit" class="tombol">Edit</button>
</form>
@include('layout.footer')