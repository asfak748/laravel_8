@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="col-md-12 mt-4">
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
        <div class="card">
            <div class="card-header">Add Employee
                <a href="{{ url('employee') }}" class="btn btn-primary float-end">back</a>
            </div>
                <div class="card-body">
                    
                    <form action="{{ url('store-employee') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label>Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label>Status</label>
                                <input type="text" name="status" id="status" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>

@endsection