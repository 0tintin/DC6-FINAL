<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; 
use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return Inertia::render('Employee/Employee', ['employees' => $employees]);
    }

    public function show(Employee $employee)
    {
        // No need to fetch employee data again
        return Inertia::render('Employee/Show', ['employee' => $employee]);
    }
    

    public function create()
    {
        return Inertia::render('Employee/Create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'position' => 'required',
            'dateOfBirth' => 'required|date',
            'hireDate' => 'required|date',
        ]);
    
        $employee = Employee::create($request->all());
        return redirect()->route('employee')->with('success', 'Employee created successfully.');
   
    }
    
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return Inertia::render('Employee/Employee');
    }
    
    public function edit(Employee $employee)
    {
        return Inertia::render('Employee/Edit', ['employee' => $employee]);
    }
    
    public function update(Request $request, Employee $employee)
    {
        $fields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'position' => 'required',
            'dateOfBirth' => 'required|date',
            'hireDate' => 'required|date'
        ]);

        $employee->update($fields);

        return redirect('/employee')->with('success', 'Employee updated');
    }
}
