@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="col-md-12 mt-4">
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
        <div class="card">
            <div class="card-header">update Employee
                <a href="{{ url('employee') }}" class="btn btn-primary float-end">back</a>
            </div>
                <div class="card-body">
                    
                    <form action="{{ url('update-employee/'.$employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}">
                            </div>

                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ $employee->email }}">
                            </div>

                            <div class="col-md-12">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}">
                            </div>

                            <div class="col-md-12">
                                <label>Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control" value="{{ $employee->designation }}">
                            </div>

                            <div class="col-md-12">
                                <label>Status</label>
                                <input type="checkbox" name="status" id="status" {{ $employee->status == 1 ? "checked":"" }} >
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