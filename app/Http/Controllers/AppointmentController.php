<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
 Session_start();

class AppointmentController extends Controller
{
    public function appointment(){

    	return view('admin.appointment');
    }

    // appointment save part here..............

    public function save_appointment(request $request){
    $data=array();
    	$data['patient_name']=$request->patient_name;
    	$data['patient_phone']=$request->patient_phone;
    	$data['patient_email']=$request->patient_email;
    	$data['patient_symptoms']=$request->patient_symptoms;
    	$data['patient_date']=$request->patient_date;
    	$data['patient_department']=$request->patient_department;
    	$data['patient_gender']=$request->patient_gender;
    	$data['patient_time']=$request->patient_time;
    	
    
    	DB::table('appointment_tbl')->insert($data);
    	Session::put('exception','appointment added successfully!!');
    	return Redirect::to('/appointment');


    	DB::table('appointment_tbl')->insert($data);
    	Session::put('exception','appointment added successfully!!');
    	return Redirect::to('/appointment');

    	
    }

}
