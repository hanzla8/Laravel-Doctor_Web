<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\appointment\appointmentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/department', [HomeController::class, 'department'])->name('department');
Route::get('/departmentSingle', [HomeController::class, 'singleDepartment'])->name('department-single');
Route::get('/doctors', [HomeController::class, 'doctors'])->name('doctor');
Route::get('/singledoctors', [HomeController::class, 'singleDoctors'])->name('single-doctor');
Route::get('/appoinment', [HomeController::class, 'appoinment'])->name('appoinment');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// index Appointment post
Route::post('/appoinment', [appointmentController::class, 'appoinmentInserted'])->name('appoinment-insert');

// contact page data post in database
Route::post('/contact', [appointmentController::class, 'contactInserted'])->name('contact-insert');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->usertype == 'admin'){
            return view('admin.index');
        }else{
            return view('index');
        }
    })->name('dashboard');
});

// Route::get('/adminpage', [adminController::class, 'adminPage'])->middleware('admin');

Route::middleware(['auth', 'admin'])->group(function(){
    
    Route::get('/adminpage', [adminController::class, 'adminPage']);
    // read Data
    Route::get('/adminpage', [adminController::class, 'userdetail'])->name('admin.userdetail');
    // user Data Deleted
    Route::get('/adminpage/{id}', [adminController::class, 'userDelete'])->name('admin.userDelete');


    // Form Input Data
    Route::get('/forms', [adminController::class, 'doctorPage'])->name('Doctor.page');
    Route::post('/forms', [adminController::class, 'doctorInsert'])->name('Doctor.inserted');
    Route::get('/forms/{id}', [adminController::class, 'deleteDoctor'])->name('doctor.delete');
    Route::get('/forms', [adminController::class, 'readDoctor'])->name('Doctor.read');

    Route::get('/editform/{id}', [adminController::class, 'editDoctor'])->name('Doctor.edit');
    Route::post('/forms/{id}', [adminController::class, 'updateDoctor'])->name('Doctor.update');


    
    // Table Input Data
    Route::get('/tables', [adminController::class, 'adminTables'])->name('admin.tables');
    
        




});




