<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Exception;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee=Employee::paginate(10);
        return view ('backend.employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $employee= new Employee();
            $employee->name = $request->name;
            $employee->contact_num = $request->contact_num;
            $employee->email = $request->email;
            $employee->gender = $request->gender;
            $employee->joindate = $request->joindate;
            $employee->address = $request->address;
            $employee->status = $request->status;
            $employee->description = $request->description;
            $employee->save();

            $this->notice::success('employee data saved');
            return redirect()->route('employee.index');
           }
           catch(Exception $e){
            $this->notice::error('Please try again');
             dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $id)
    {
        $employee=Employee::findOrFail(encryptor('decrypt',$id));
        return view('backend.employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        try {
            $employee=Employee::find(encryptor('decrypt',$id));
            $employee->name = $request->name;
            $employee->contact_num = $request->contact_num;
            $employee->email = $request->email;
            $employee->gender = $request->gender;
            $employee->joindate = $request->joindate;
            $employee->address = $request->address;
            $employee->status = $request->status;
            $employee->description = $request->description;
            $employee->save();

            $this->notice::success('employee data saved');
            return redirect()->route('employee.index');
           }
           catch(Exception $e){
            $this->notice::error('Please try again');
            // dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $decryptedId = decrypt($id);
            $employee = Employee::findOrFail($decryptedId);
            $employee->delete();

            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }
    }
}
