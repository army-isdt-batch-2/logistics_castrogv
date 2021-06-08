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
                            <tr>
                                <th scope="row"></th>
                                <th scope="row"></th>
                                <th scope="row"></th>
                                <th scope="row"></th>
                                <th scope="row"></th>
                                <th scope="row"></th>
                                <th scope="row">
                                    <a href="" class="btn btn-success btn-sm">Update</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </th> 
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection