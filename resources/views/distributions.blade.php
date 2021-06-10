@extends('layout.main')
@section('title', 'Distributions')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                         Distributions List
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{ URL::route('distribution.create') }}" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">Requestor Name</th>
                                <th class="text-muted" scope="col">Requestor Contact</th>
                                <th class="text-muted" scope="col">Purpose</th>
                                <th class="text-muted" scope="col">Asset</th>
                                <th class="text-muted" scope="col">Quantity</th>
                                <th class="text-muted" scope="col">Status</th>
                                <th class="text-muted" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $x=> $distribution)
                            <tr>
                                <th scope="col">{{++$x}}</th>
                                <th scope="row">{{ $distribution->requestor_name }}</th>
                                <th scope="row">{{ $distribution->requestor_contact }}</th>
                                <th scope="row">{{ $distribution->purpose }}</th>
                                <th scope="row">{{ $distribution->assets->name }}</th>
                                <th scope="row">{{ $distribution->quantity }}</th>
                                <th scope="row">{{ $distribution->status }}</th>
                                <th scope="row">
                                    <a href="{{ URL::route('distribution.update', $distribution->id) }}" class="btn btn-success btn-sm">Update</a>
                                    <a href="{{ URL::route('distribution.delete', $distribution->id) }}" class="btn btn-danger btn-sm">Delete</a>
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