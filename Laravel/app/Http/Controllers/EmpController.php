<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmpController extends Controller
{

    public function index()
    {
        $employees = employee::latest()->paginate(5);
        return view('employees.index',compact('employees'))->with('i',
            (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'emp_name' => 'required',
            'emp_add' => 'required',
            'emp_phone' => 'required',
            'emp_email' => 'required',
            'emp_salary' => 'required',
        ]);

        employee::create($request->all());
        return redirect()->route('employees.index')->with('success','Created Successfully.');
    }


    public function show(employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    public function edit(employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }


    public function update(Request $request, employee $employee)
    {
        $request->validate([
            'emp_name' => 'required',
            'emp_add' => 'required',
            'emp_phone' => 'required',
            'emp_email' => 'required',
            'emp_salary' => 'required',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success','Updated Successfully.');
    }


    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success','Deleted Successfully.');
    }
}
