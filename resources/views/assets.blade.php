@extends('layout.main')
@section('title', 'Assets')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Assets List
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{ URL::route('asset.create') }}" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">Description</th>
                                <th class="text-muted" scope="col">Category</th>
                                <th class="text-muted" scope="col">Supplier</th>
                                <th class="text-muted" scope="col">Storage</th>
                                <th class="text-muted" scope="col">Total Stocks</th>
                                <th class="text-muted" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                                <tr>
                                    <th scope="row">{{ $x->name }}</th>
                                    <th scope="row">{{ $x->description }}</th>
                                    <th scope="row">{{ $x->category }}</th>
                                    <th scope="row">{{ $x->suppliers_id}}</th>
                                    <th scope="row">{{ $x->storage_id}}</th>
                                    <th scope="row">{{ $x->total_stocks}}</th>
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