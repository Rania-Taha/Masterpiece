<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Clinic;
use App\Models\User;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = Schedule::with('clinic')->get();
        $clinic=Clinic::all();
        return view('Admin.schedule.index', compact('schedule' , 'clinic'));
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
        return view('Admin.schedule.create', compact('user', 'clinic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        
        $request->validate([
           
            'time' => ['required', 'max:20'],
            'status' => ['required'],
           
        ]);

       
        $schedule = new Schedule();

       
        $schedule->time = $request->time;
        $schedule->status = $request->status;
        $schedule->clinic_id = $request->clinic_id;
       

        $schedule->save();
        
        // toastr('Created Successfully!', 'success');
        return redirect('schedule');

    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $schedule =  Schedule::find($id);
        $clinic = Clinic::all();
        $user= User::find(1);
        // $id=Auth::user()->id;
        // $user= User::find($id);
        return view('Admin.schedule.edit', compact('schedule','user', 'clinic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, $id)
    {
        $schedule['time'] = $request->time;
        $schedule['status'] = $request->status;
        
    
        Schedule::where(['id' => $id])->update( $schedule);
       return redirect('schedule')->with('flash_message', 'Schedule Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Schedule::destroy($id);
        return redirect ('schedule')->with('flash_message', 'Schedule deleted!'); 
    }
}
