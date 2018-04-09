<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// logout
Route::get('/logout','AdminController@logout');



Route::get('/', function () {
    return view('patient_login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});

//admin login
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/veiwprofile','AdminController@veiwprofile');
Route::get('/setting','AdminController@setting');

// Appointment
Route::get('/appointment','AppointmentController@appointment');
Route::post('/save_appointment','AppointmentController@save_appointment');

//Total patient
Route::get('/totalpatient','TotalpatientController@totalpatient');

//Doctor
Route::get('/doctor','DoctorController@Doctor');