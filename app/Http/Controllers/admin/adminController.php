<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\doctor\doctor;
use App\Models\contact\contact;
use App\Http\Controllers\Controller;
use App\Models\appointment\appointment;
use Illuminate\Support\Facades\Redirect;

class adminController extends Controller
{
    public function adminPage() {
        return view ('admin.index');
    }

    // Admin User view
    public function userdetail() {
        $data = User::all();
        return view('admin.index', compact('data'));
    }

    // Admin User Delete
    public function userDelete($id) {
        
        $data = User::find($id);
        
        $data->delete();

        return redirect()->back();
    }


    // Form page doctorInsert
    public function doctorPage() 
    {
        return view ('admin.forms');
    }

    // insert Doctor History
    public function doctorInsert(Request $request) 
    {
        $doctor = new doctor();

        $doctor->name           =   $request->name;
        $doctor->email          =   $request->email;
        $doctor->number         =   $request->number;
        $doctor->description    =   $request->description;

        $image                  =   $request->image;

        $imagename = time() .'.'.$image->getClientOriginalExtension();
        $request->image->move('doctor', $imagename);
        $doctor->image = $imagename;

        $doctor->save();
        return redirect()->back();
    }

    // read doctors
    public function readDoctor() {
        $doctor = doctor::all();
        
        return view('admin.forms', compact('doctor'));
    }

    // delete doctor
    public function deleteDoctor($id) {
        $doctor = doctor::find($id);

        $doctor->delete();

        return redirect()->back();
    }

    // edit Doctor
    public function editDoctor($id) {

        $doctor = doctor::find($id);

        return view('admin.editform', compact('doctor'));
    }

    // update Doctor
    public function updateDoctor(Request $request, $id) {

        $doctor = doctor::find($id);

        $doctor->name           =   $request->name;
        $doctor->email          =   $request->email;
        $doctor->number         =   $request->number;
        $doctor->description    =   $request->description;

        $image                  =   $request->image;

        $imagename = time() .'.'.$image->getClientOriginalExtension();
        $request->image->move('doctor', $imagename);
        $doctor->image = $imagename;

        $doctor->save();

        return redirect()->route('Doctor.page')->with('success', 'Doctor information updated successfully');
        // return redirect()->back();

    }

    
    // admin tables
    public function adminTables() 
    {
        $appointment = appointment::all();
        $contact = contact::all();
        $user = User::all();
        $doctor = doctor::all();

        return view('admin.tables', compact('appointment', 'contact', 'user', 'doctor'));
    }

    

}
