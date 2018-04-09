<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class TotalpatientController extends Controller
{
    public function totalpatient(){

    	$allpatient_info=DB::table('appointment_tbl')
   	                 ->get();

   	 $manage_patient=view('admin.totalpatient')  
   	                 ->with('all_patient_info', $allpatient_info);
   	     return view('layout')
   	                 ->with('totalpatient', $manage_patient);                       


    	//return view('admin.totalpatient');
    }
}
