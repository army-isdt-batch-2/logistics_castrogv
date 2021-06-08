@php $active = 'deliveries' @endphp
@extends('layout.main')
@section('title', 'Create Deliveries')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Add Deliveries
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="/deliveries/create/save" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Distribution</label>
                            <input type="text" class="form-control" name="distribution" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Transportation</label>
                            <input type="text" class="form-control" name="transportation" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Date Distributed</label>
                            <input type="date" class="form-control" name="date_distributed" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputStat" class="form-label">Status</label>
                            <select name="status" class="form-select" >
                                <option selected>Choose...</option>
                                <option>Delivered</option>
                                <option>Returned</option>
                            </select>
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