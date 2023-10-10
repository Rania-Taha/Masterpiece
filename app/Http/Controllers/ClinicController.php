<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\Clinic;
use App\Models\Working_hours;
use App\Models\Clinic_Service;
use App\Models\Clinic_vet;
use App\Models\Category;
use App\Models\Booking;
use App\Models\Schedule;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\UpdateClinicRequest;

class ClinicController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
                $clinic = Clinic::all();
                return view('Admin.clinics.index')->with('clinic', $clinic);
            } elseif ($role == 'provider') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinicuser = $user->clinic_id;
                // dd($clinicuser);
                $clinic = Clinic::where('id', $clinicuser)->get();
                // dd($clinic);
                return view('provider.clinic.index')->with('clinic', $clinic);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinicRequest $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'description' => ['required', 'max:1000'],
            'about' => ['required', 'max:1000'],
            'location' => ['required', 'max:1000'],
            'location_map' => ['required', 'max:1000'],

        ]);
 
        $clinic = new Clinic();
        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        $clinic->image =  $imagePath;
        $clinic->name = $request->name;
        $clinic->description = htmlspecialchars($request->description);
        $clinic->location = htmlspecialchars($request->location);
        $clinic->location_map = htmlspecialchars($request->location_map);
        $clinic->about = htmlspecialchars($request->about);
        $clinic->save();
        // toastr('Created Successfully!', 'success');
        return redirect('clinic');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category = Category::all();
        $all_clinics = Clinic::all();
        return view('frontend.clinics.clinics', compact('all_clinics', 'category'));
    }
   
    public function show1($id)
{
    $all_clinics = Clinic::find($id);
    $id1 = Auth::user()->id;
    $user = User::find($id1);
    $work_hour = Working_hours::where('clinic_id', $id)->get(); // Use get() to retrieve results
    $clinic_service = Clinic_Service::where('clinic_id', $id)->get(); // Use get() to retrieve results
    $clinic_vet = Clinic_vet::where('clinic_id', $id)->get(); // Use get() to retrieve results
    $schedule = Schedule::where('clinic_id', $id)->get(); // Use get() to retrieve results
    return view('frontend.clinics.single_clinic', compact('all_clinics', 'work_hour', 'clinic_service', 'clinic_vet', 'schedule', 'user'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function  edit($id)

    {
        $clinic =  Clinic::find($id);
        return view ('Admin.clinics.edit')->with('clinic',  $clinic);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicRequest $request,  $id)
    {
             $clinic['name'] = $request->name;
             $clinic['description'] = $request->description;
             $clinic['about'] = $request->about;
             $clinic['location'] = $request->location;
             $clinic['location_map'] = $request->location_map;

    
            $filename = '';
    
            if ($request->hasFile('image')) {
                $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('/assets/img/'), $filename);
                 $clinic['image'] = $filename;
            } else {
                unset( $clinic['image']);
            }
           

             Clinic::where(['id' => $id])->update( $clinic);
            return redirect('clinic')->with('flash_message', 'clinic Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinic::destroy($id);
        return redirect('clinic')->with('flash_message', 'Clinic deleted!'); 
    }
}