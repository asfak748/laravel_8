@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">Add Employee
                <a href="{{ url('employee') }}" class="btn btn-primary float-end">back</a>
            </div>
                <div class="card-body">
                    
                    <form action="{{ url('store-employee') }}" method="POST" enctype="multipart/form-data">
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
                                <label>Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label>Status</label>
                                <input type="checkbox" name="status" id="status">
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