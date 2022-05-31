@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">Employee list
                <a href="{{ url('add-employee') }}" class="btn btn-primary float-end">Add Emp</a>
            </div>
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $emp)               
                        <tr>
                            <td>{{$emp->id}}</td>
                            <td>{{$emp->name}}</td>
                            <td>{{$emp->email}}</td>
                            <td>{{$emp->phone}}</td>
                            <td>{{$emp->designation}}</td>
                            <td>{{$emp->status}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
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