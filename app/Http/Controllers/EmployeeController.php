<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');

        if($employee->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extention;
            $file->move('uploads/', $filename);
            $employee->image = $filename;
        }

        $employee->status = $request->input('status') == true ? '1':'0';
        $employee->save();
        return redirect('employee')->with('status', 'Employee added succefully');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->status = $request->input('status') == true ? '1':'0';
        $employee->update();

        return redirect('employee')->with('status', 'Employee updated succefully');
    }

    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee')->with('status', 'Employee delete succefully');
    }
}
