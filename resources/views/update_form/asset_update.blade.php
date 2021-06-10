@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'Update Assets')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Update Assets
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="{{ URL::route('asset.update.save', $data->id) }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" >
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" >{{$data->description}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" value="{{$data->category}}" >
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Supplier</label>
                          <select  class="form-control" name="suppliers_id"required>
                            @foreach ($suppliers as $x)
                            <option value="{{$x->id}}" {{ $x->id == $data->suppliers_id ? 'selected' : '' }}>{{$x->name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Storage</label>
                          <select  class="form-control" name="storage_id" required>
                            @foreach ($storage as $x)
                            <option value="{{$x->id}}" {{ $x->id == $data->storage_id ? 'selected' : '' }}>{{$x->name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Total Stocks</label>
                            <input type="number" class="form-control" name="total_stocks" value="{{$data->total_stocks}}" required>
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