<?php $__env->startSection('content'); ?>


<!--background-->
    <div class="bg-agile">
	<div class="book-appointment">
	<h1> Medical Appointment Form </h1>
	<!--invalid showuo-->
            <p class="alert-success "> 
              <?php
              $exception=Session::get('exception');

              if($exception){
                echo $exception;
                Session::put('exception' ,null);
              }
            ?></p>



			<form method="post" action="<?php echo e(URL::to('/save_appointment')); ?>">
				<?php echo e(csrf_field()); ?>

			
			<div class="gaps">
				<p>Patient Name</p>
					<input type="text" name="patient_name" placeholder="Patient Name"/>
			</div>	
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="patient_phone" placeholder="Patient Phone"/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="patient_email" placeholder="Patient Email"/>
				</div>	
				<div class="gaps">
				<p>Symptoms</p>
						<textarea name="patient_symptoms" placeholder="Patient Symptoms" ></textarea>
				</div>
			
			
			<div class="gaps">
				<p>Select Date</p>		
						<input type="date" name="patient_date" placeholder="Patient Date">
			</div>
			<div class="gaps">
				<p>Department</p>	
					<select class="form-control" name="patient_department">
						<option></option>
						<option>Cardiology</option>
						<option>Ophthalmology</option>
						<option>Neurology</option>
						<option>Psychology</option>
						<option>Dermatology</option>
					</select>
			</div>
			<div class="gaps">
				<p>Gender</p>	
					<select class="form-control" name="patient_gender">
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			<div class="gaps">
				<p>Time</p>		
					<input type="time" id="timepicker" name="patient_time" class="timepicker form-control" value="">	
			</div>

			
			<input type="submit" value="Make an appointment">
			</form>
		</div>
   </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>