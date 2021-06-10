@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'Update Distribution')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Update Distribution Record
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12"> 
                    <form action="{{ URL::route('distribution.update.save', $data->id) }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Requestor Name</label>
                            <input type="text" class="form-control" name="requestor_name" value="{{$data->requestor_name}}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Requestor Contact</label>
                            <input type="number" class="form-control" name="requestor_contact" value="{{$data->requestor_contact}}" >
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Purpose</label>
                            <textarea class="form-control" name="purpose" rows="3">{{$data->purpose}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Asset</label>
                          <select  class="form-control" name="assets_id" >
                            @foreach ($assets as $x)
                            <option value="{{$x->id}}" {{ $x->id == $data->assets_id ? 'selected' : '' }}>{{$x->name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Status</label>
                         <select  class="form-control" name="status">
                         <option {{ $data->status == 'processing'? 'selected' : '' }}>processing</option>
                         <option {{ $data->status == 'declined'? 'selected' : '' }}>declined</option>
                         <option {{ $data->status == 'destributed'? 'selected' : '' }}>destributed</option>
                          </select>
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