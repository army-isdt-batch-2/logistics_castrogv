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
                            <th class="text-muted" scope="col">#</th>
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
                            @foreach($data as $x=> $asset)
                                <tr>
                                    <th scope="col">{{++$x}}</th>
                                    <th scope="row">{{ $asset->name }}</th>
                                    <th scope="row">{{ $asset->description }}</th>
                                    <th scope="row">{{ $asset->category }}</th>
                                    <th scope="row">{{ $asset->suppliers->name }}</th>
                                    <th scope="row">{{ $asset->storage->name }}</th>
                                    <th scope="row">{{ $asset->total_stocks }}</th>
                                    <th scope="row">
                                        <a href="{{ URL::route('asset.update', $asset->id) }}" class="btn btn-success btn-sm">Update</a>
                                        <a href="{{ URL::route('asset.delete', $asset->id) }}" class="btn btn-danger btn-sm">Delete</a>
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