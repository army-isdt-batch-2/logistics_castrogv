@extends('layout.main')
@section('title', 'Storage')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Storage List
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{ URL::route('storage.create') }}" class="btn btn-dark pull-right">Create</a>
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
                                <th class="text-muted" scope="col">Building</th>
                                <th class="text-muted" scope="col">Floor</th>
                                <th class="text-muted" scope="col">Room</th>
                                <th class="text-muted" scope="col">Cabinet</th>
                                <th class="text-muted" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->name }}</th>
                                <th scope="row">{{ $x->building }}</th>
                                <th scope="row">{{ $x->floor }}</th>
                                <th scope="row">{{ $x->room }}</th>
                                <th scope="row">{{ $x->cabinet }}</th>
                                <th scope="row"></th>
                                <th scope="row">
                                    <a href="{{ URL::route('storage.update', $x->id) }}" class="btn btn-success btn-sm">Update</a>
                                    <a href="{{ URL::route('storage.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
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