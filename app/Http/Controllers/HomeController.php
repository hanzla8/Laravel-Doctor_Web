<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor\doctor;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function department()
    {
        return view('department');
    }

    public function singleDepartment()
    {
        return view('departmentSingle');
    }

    public function doctors()
    {
        $doctor = doctor::all();

        return view('doctor', compact('doctor'));
    }

    public function singleDoctors() 
    {
        return view('singledoctors');
    }

    public function appoinment()
    {
        return view('appoinment');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}
