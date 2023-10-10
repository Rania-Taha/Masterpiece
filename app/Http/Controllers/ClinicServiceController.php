<?php

namespace App\Http\Controllers;

use App\Models\Clinic_Service;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreClinic_ServiceRequest;
use App\Http\Requests\UpdateClinic_ServiceRequest;

class ClinicServiceController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinic_service = Clinic_Service::all();
        return view ('Admin.clinic_service.index')->with('clinic_service', $clinic_service);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.clinic_service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinic_ServiceRequest $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'service_name' => ['required', 'max:20'],
            'description' => ['required', 'max:500'],
        ]);

       
        $clinic_service = new Clinic_Service();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $clinic_service->image =  $imagePath;
        $clinic_service->service_name = $request->service_name;
        $clinic_service->description = htmlspecialchars($request->description);

        $clinic_service->save();
        
       
        
        // toastr('Created Successfully!', 'success');
        return redirect('clinicService');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic_Service $clinic_Service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clinic_service = Clinic_Service::find($id);
        return view ('Admin.clinic_service.edit')->with('clinic_service', $clinic_service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinic_ServiceRequest $request, $id)
    {
        $clinic_service['service_name'] = $request->service_name;
        $clinic_service['description'] = $request->description;


        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $clinic_service['image'] = $filename;
        } else {
            unset($clinic_service['image']);
        }
       

        Clinic_Service::where(['id' => $id])->update($clinic_service);
        return redirect('clinicService')->with('flash_message', 'Service Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinic_Service::destroy($id);
        return redirect ('clinicService')->with('flash_message', 'Service deleted!');
    }
}
