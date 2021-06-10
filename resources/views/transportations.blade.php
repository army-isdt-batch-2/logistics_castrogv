@extends('layout.main')
@section('title', 'Transportation')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Transportation List
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{ URL::route('transportation.create') }}" class="btn btn-dark pull-right">Create</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="col-12">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Plate Number</th>
                                <th class="text-muted" scope="col">Driver Name</th>
                                <th class="text-muted" scope="col">Driver Contact</th>
                                <th class="text-muted" scope="col">Notes</th>
                                <th class="text-muted" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $x)
                            <tr>
                            <th scope="col">{{++$x}}</th>
                                <th scope="row">{{ $x->plate_number }}</th>
                                <th scope="row">{{ $x->driver_name }}</th>
                                <th scope="row">{{ $x->driver_contact }}</th>
                                <th scope="row">{{ $x->notes }}</th>
                                <th scope="row">
                                    <a href="" class="btn btn-success btn-sm">Update</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </th> 
                            </tr>
                        @endforeach    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection