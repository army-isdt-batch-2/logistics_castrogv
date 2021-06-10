@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title', 'Update Transportation')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Update Transportation
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="{{ URL::route('transportation.update.save', $data->id) }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Plate Number</label>
                            <input type="text" class="form-control" name="plate_number" value="{{$data->plate_number}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Driver Name</label>
                            <input type="text" class="form-control" name="driver_name" value="{{$data->driver_name}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Driver Contact</label>
                            <input type="tel" class="form-control" name="driver_contact" value="{{$data->driver_contact}}" required>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" rows="3" value="{{$data->notes}}" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection