<?php $__env->startSection('content'); ?>

<div class="col-sm-6 col-md-3 grid-margin"> 
     <div class="card">
      <div class="card-body">
        <h2 class="card title">Total Patient</h2>
      </div>
      <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>      
       </div>
      </div>
      </div>

      <div class="col-sm-6 col-md-3 grid-margin"> 
     <div class="card">
      <div class="card-body">
        <h2 class="card title">Total Appointment</h2>
      </div>
      <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>      
       </div>
      </div>
      </div>

      <div class="col-sm-6 col-md-3 grid-margin"> 
     <div class="card">
      <div class="card-body">
        <h2 class="card title">Doctor</h2>
      </div>
      <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>      
       </div>
      </div>
      </div>

      <div class="col-sm-6 col-md-3 grid-margin"> 
     <div class="card">
      <div class="card-body">
        <h2 class="card title">Our Service</h2>
      </div>
      <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>      
       </div>
      </div>
      </div>


      


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>