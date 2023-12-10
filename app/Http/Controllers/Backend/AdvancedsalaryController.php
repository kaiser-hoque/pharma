<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\advancedsalary ;
use App\Models\Employee;
use Illuminate\Http\Request;
use Exception;

class AdvancedsalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    { $advancedsalary = advancedsalary::get();
        return view('backend.advancedsalary.index', compact('advancedsalary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee = Employee::get();
        return view('backend.advancedsalary.create', compact(    'employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        try {

            $existingAdvancedSalary = AdvancedSalary::where('emp_id', $request->emp_id)
            ->where('month', $request->month)
            ->where('year', $request->year)
            ->first();

        if ($existingAdvancedSalary) {
            return redirect()->back()
                ->with('error', 'Employee has already received advanced salary for the selected month.');
        }





            $advancedsalary= new advancedsalary();
            $advancedsalary->emp_id = $request->emp_id;
            $advancedsalary->month = $request->month;

            $advancedsalary->year = $request->year;
            $advancedsalary->advanced_salary = $request->advanced_salary;

            $advancedsalary->save();
            $this->notice::success('advancedsalary data saved');
            return redirect()->route('advancedsalary.index');
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
    public function show(advancedsalary $advancedsalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(advancedsalary $advancedsalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, advancedsalary $advancedsalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(advancedsalary $advancedsalary)
    {
        //
    }
}
