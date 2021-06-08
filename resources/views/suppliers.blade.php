@extends('layout.main')
@section('title', 'Suppliers')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        List of All Suppliers
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{ URL::route('supplier.create') }}" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">Name</th>
                                <th class="text-muted" scope="col">Contact</th>
                                <th class="text-muted" scope="col">Address</th>
                                <th class="text-muted" scope="col">Contact Person</th>
                                <th class="text-muted" scope="col">Category</th>
                                <th class="text-muted" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                                <tr>
                                    <th scope="row">{{ $x->name }}</th>
                                    <th scope="row">{{ $x->contact }}</th>
                                    <th scope="row">{{ $x->address }}</th>
                                    <th scope="row">{{ $x->contact_person }}</th>
                                    <th scope="row">{{ $x->category }}</th>
                                    <th scope="row">
                                        <a href="{{ URL::route('update', $x->id) }}" class="btn btn-success btn-sm">Update</a>
                                        <a href="{{ URL::route('delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
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