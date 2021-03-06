@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'Create Distribution')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Add Distribution Record
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="{{ URL::route('distribution.create.save') }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Requestor Name</label>
                            <input type="text" class="form-control" name="requestor_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Requestor Contact</label>
                            <input type="number" class="form-control" name="requestor_contact" required>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Purpose</label>
                            <textarea class="form-control" name="purpose" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Asset</label>
                          <select  class="form-control" name="assets_id"required>
                          <option value="" selected>--Select Assets--</option>
                            @foreach ($assets as $x)
                            <option value="{{$x->id}}">{{$x->name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputStat" class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option selected>--Select Status--</option>
                                <option>processing</option>  
                                <option>declined</option>
                                <option>destributed</option>
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