@include('layout.header')
<h3>Buat Trips</h3>

<form action="{{ route("trips.store") }}" method="post">
    @csrf
   <div class="form-group">
        <label for="">Trucks:</label>
        <select name="trucks_id" id="">
            @foreach ($trucks as $t)
                <option value="{{ $t->id }}">{{ $t->license_plate }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Drivers:</label>
        <select name="drivers_id" id="">
            @foreach ($drivers as $d)
                <option value="{{ $d->id }}">{{ $d->name }}</option>
            @endforeach
        </select>
    </div>
     <div class="form-group">
        <label for="">Start Location:</label>
        <input type="text" name="start_location" id="" placeholder="Masukkan Start Location">
    </div> <div class="form-group">
        <label for="">End Location:</label>
        <input type="text" name="end_location" id="" placeholder="Masukkan End Location">
    </div> <div class="form-group">
        <label for="">Distance:</label>
        <input type="number" name="distance" id="" placeholder="Masukkan Distance">
    </div>
    </div> <div class="form-group">
        <label for="">Trip Date:</label>
        <input type="date" name="trip_date" id="" placeholder="Masukkan Trip Date">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')