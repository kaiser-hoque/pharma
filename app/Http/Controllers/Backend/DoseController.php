<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Dose;
use Illuminate\Http\Request;
use Exception;
class DoseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dose=Dose::all();
        return view ('backend.dose.index', compact('dose'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('backend.dose.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $dose= new Dose();
            $dose->dose_description = $request->dose_description;



         if($dose->save())
                    $this->notice::success('Successfully saved');
                    return redirect()->route('dose.index');
                }
        catch(Exception $e){
                // dd($e);
                 $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dose $dose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dose = Dose::findOrFail(encryptor('decrypt',$id));
        return view('backend.dose.edit',compact('dose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $dose = Dose::findOrFail(encryptor('decrypt',$id));
           $dose->dose_description = $request->dose_description;
            if($dose->save())
                $this->notice::success('Successfully updated');
                return redirect()->route('dose.index');
        }catch(Exception $e){
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dose $id)
    {
        try {
            $decryptedId = decrypt($id);
            $dose = Dose::findOrFail($decryptedId);
            $dose->delete();

            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }


    }
}
