@extends('layout')
@section('content')


          <!-- partial -->
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Patient_Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Symptoms</th>
                          <th>Date</th>
                          <th>Department</th>
                          <th>Gender</th>
                          <th>Time</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_patient_info as $v_patient)
                      <tr>
                          <td>{{$v_patient->patient_name}}</td>
                          <td>{{$v_patient->patient_phone}}</td>
                          <td>{{$v_patient->patient_email}}</td>
                          <td>{{$v_patient->patient_symptoms}}</td>
                          <td>{{$v_patient->patient_date}}</td>
                          <td>{{$v_patient->patient_department}}</td>
                          <td>{{$v_patient->patient_gender}}</td>
                          <td>{{$v_patient->patient_time}}</td>
                          
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

@endsection