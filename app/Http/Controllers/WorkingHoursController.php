<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Working_hours;
use App\Models\Clinic;
use App\Http\Requests\StoreWorking_hoursRequest;
use App\Http\Requests\UpdateWorking_hoursRequest;
use Auth;

class WorkingHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $working_hours = Working_hours::with('clinic')->get();
        $clinic=Clinic::all();
        return view('Admin.working_hours.index', compact('working_hours' , 'clinic'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                $clinic = Clinic::all();
                $user= User::find(1);
                // $id=Auth::user()->id;
                // $user= User::find($id);
                return view('Admin.working_hours.create', compact('user', 'clinic'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorking_hoursRequest $request)
    {
        $request->validate([
           
            'day' => ['required', 'max:20'],
            'start_at' => ['required', 'max:20'],
            'ends_at' => ['required', 'max:20'],
        ]);

       
        $working_hours = new Working_hours();

       
        $working_hours->day = $request->day;
        $working_hours->clinic_id = $request->clinic_id;
        $working_hours->start_at = $request->start_at;
        $working_hours->ends_at = $request->ends_at;

        $working_hours->save();
        
        // toastr('Created Successfully!', 'success');
        return redirect('workHours');
    }

    /**
     * Display the specified resource.
     */
    public function show(Working_hours $working_hours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $working_hours =  Working_hours::find($id);
        $clinic = Clinic::all();
        $user= User::find(1);
        // $id=Auth::user()->id;
        // $user= User::find($id);
        return view('Admin.working_hours.edit', compact('working_hours','user', 'clinic'));

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorking_hoursRequest $request,  $id)
    {
        {
            $working_hours['day'] = $request->day;
            $working_hours['start_at'] = $request->start_at;
            $working_hours['ends_at'] = $request->ends_at;
           

   
            Working_hours::where(['id' => $id])->update( $working_hours);
           return redirect('workHours')->with('flash_message', 'clinic Updated!'); 
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Working_hours::destroy($id);
        return redirect ('workHours')->with('flash_message', 'Working Hours deleted!'); 
    }
}
