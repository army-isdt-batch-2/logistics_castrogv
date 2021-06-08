@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'Create Assets')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Add Assets
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="/asset/create/save" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Category</label>
                            <input type="text" class="form-control" name="contact_person" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Supplier</label>
                            <input type="text" class="form-control" name="category" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Storage</label>
                            <input type="text" class="form-control" name="category" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Total Stocks</label>
                            <input type="number" class="form-control" name="category" required>
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