<?php

namespace App\Http\Controllers\appointment;

use Illuminate\Http\Request;
use App\Models\contact\contact;
use App\Http\Controllers\Controller;
use App\Models\appointment\appointment;

class appointmentController extends Controller
{
    // Ye index page ka appointment section hai, jagha se tum apointment ko bhejta ho database main user page se
    public function appoinmentInserted(Request $request) {

        if (auth()->check())  //ye Cheak krne ke liye hai, wo tb tk message nahi bhje skta, jb tk login na kre
        {
        $data = new appointment();
        
        $data->department   = $request->department;
        $data->doctor       =   $request->doctor;
        $data->date         =   $request->date;
        $data->time         =   $request->time;
        $data->name         =   $request->name;
        $data->number       =   $request->number;
        $data->message      =   $request->message;

        $data->save();

        return redirect()->back()->with('message', 'Your appointment has been submited');
        } else {
            return redirect()->route('login')->with('error', 'Please log in to submit the form.');
        }

    }

    // Contact page data
    public function contactInserted(Request $request) {

        if (auth()->check())  
        {
        $contact = new contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->topic = $request->topic;
        $contact->number = $request->number;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message', 'Your appointment has been submited');
        } else {
            return redirect()->route('login')->with('error', 'Please log in to submit the form.');
        }

    }

    public function adminIndex() 
    {
        return view('admin.index');
    }
}
