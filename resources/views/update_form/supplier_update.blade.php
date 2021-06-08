@php $active = 'suppliers' @endphp
@extends('layout.main')
@section('title', 'Update Supplier')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Update Supplier
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="{{ URL::route('update.save', $data->id) }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{$data->contact}}" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3" required>{{$data->address}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" name="contact_person" value="{{$data->contact_person}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" value="{{$data->category}}" required>
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