<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Clinic;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Booking::all();
        $schedule = Schedule::all();
        $user = User::all();
        return view('Admin.bookings.index', compact('user', 'schedule', 'book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Booking::all();
        $schedule = Schedule::all();
        $user = User::all();
        return view('Admin.bookings.create', compact('schedule', 'user', 'book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $book = new Booking();
        $book->date = $request->input('date');
        $selectedValue = $request->input('time');
         list($id, $time) = explode('|', $selectedValue);
         $idonly=$id;
         $timeonly=$time;
         $book->schedule_id=$idonly;
         $book->time=$timeonly;
        $book->user_id = $request->user_id;
        $book->save();
        
        Schedule::find('schedule_id')->get();
        Alert::success('Success Title', 'Success Message');
        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Booking::find($id);
        $schedule = Schedule::all();
        $user = User::all();
        
        return view('Admin.bookings.edit', compact('user', 'schedule', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, $id)
    {
        $book['date'] = $request->date;
        $book['time'] = $request->time;
        $book['schedule_id'] = $request->schedule_id;
        $book['user_id'] = $request->user_id;

        Booking::where(['id' => $id])->update($book);
       return redirect('book')->with('flash_message', 'book Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect ('book')->with('flash_message', 'Bokking deleted!');
    }
}
