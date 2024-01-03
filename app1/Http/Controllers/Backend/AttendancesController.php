<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Attendances;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class AttendancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $attendances = Attendances::all();
        return view('backend.attendances.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
         return view('backend.attendances.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
            $attendances = new Attendances();
            $attendances->user_id= $request->user_id;
            $attendances->attendance_date = $request->attendance_date;
            $attendances->status = $request->status;
            if ($attendances->save())
                $this->notice::success('Successfully saved');
            return redirect()->route('attendances.index');
        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendances $attendances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendances $attendances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendances $attendances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendances $attendances)
    {
        //
    }
}
