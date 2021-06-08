@php $active = 'storage' @endphp
@extends('layout.main')
@section('title', 'Update Storage')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Update Storage Record
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="{{ URL::route('storage.update.save', $data->id) }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Building</label>
                            <input type="text" class="form-control" name="building" value="{{$data->building}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Floor</label>
                            <input type="text" class="form-control" name="floor" value="{{$data->floor}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Room</label>
                            <input type="text" class="form-control" name="room" value="{{$data->room}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Cabinet</label>
                            <input type="text" class="form-control" name="cabinet" value="{{$data->cabinet}}" required>
                        </div>
                        
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection