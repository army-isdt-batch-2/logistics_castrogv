@php $active = 'returns' @endphp
@extends('layout.main')
@section('title', 'Create returns')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Add Returns Record
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                </div>

                <div class="col-12">
                    <form action="/returns/create/save" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Asset</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Returned By</label>
                            <input type="text" class="form-control" name="contact" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Returned By Contact</label>
                            <input type="tel" class="form-control" name="contact" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputContact" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="contact_person" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Reason</label>
                            <textarea class="form-control" name="description" rows="3" required></textarea>
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