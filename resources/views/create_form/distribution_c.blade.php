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
                    <form action="/storage/create/save" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Requestor Name</label>
                            <input type="text" class="form-control" name="requestor_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Requestor Contact</label>
                            <input type="tel" class="form-control" name="contact" required>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Purpose</label>
                            <textarea class="form-control" name="purpose" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Asset</label>
                            <input type="text" class="form-control" name="contact_person" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="category" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputStat" class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Processing</option>
                                <option>Declined</option>
                                <option>Distributed</option>
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