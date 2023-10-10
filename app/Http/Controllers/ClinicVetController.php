<?php

namespace App\Http\Controllers;

use App\Models\Clinic_vet;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreClinic_vetRequest;
use App\Http\Requests\UpdateClinic_vetRequest;

class ClinicVetController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinic_vet = Clinic_vet::all();
        return view ('Admin.clinic_vet.index')->with('clinic_vet', $clinic_vet);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.clinic_vet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinic_vetRequest $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'position' => ['required', 'max:500'],
        ]);

       
        $clinic_vet = new Clinic_vet();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $clinic_vet->image =  $imagePath;
        $clinic_vet->name = $request->name;
        $clinic_vet->position = htmlspecialchars($request->position);

        $clinic_vet->save();
        
       
        
        // toastr('Created Successfully!', 'success');
        return redirect('clinicVet');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic_vet $clinic_vet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clinic_vet = Clinic_vet::find($id);
        return view ('Admin.clinic_vet.edit')->with('clinic_vet', $clinic_vet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinic_vetRequest $request, $id)
    {
        $clinic_vet['name'] = $request->name;
        $clinic_vet['position'] = $request->position;


        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $clinic_vet['image'] = $filename;
        } else {
            unset($clinic_vet['image']);
        }
       

        Clinic_vet::where(['id' => $id])->update($clinic_vet);
        return redirect('clinicVet')->with('flash_message', 'Vet Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinic_vet::destroy($id);
        return redirect ('clinicVet')->with('flash_message', 'Vet deleted!');
    }
}
