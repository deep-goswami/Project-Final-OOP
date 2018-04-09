<?php $__env->startSection('content'); ?>


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
                    	<?php $__currentLoopData = $all_patient_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($v_patient->patient_name); ?></td>
                          <td><?php echo e($v_patient->patient_phone); ?></td>
                          <td><?php echo e($v_patient->patient_email); ?></td>
                          <td><?php echo e($v_patient->patient_symptoms); ?></td>
                          <td><?php echo e($v_patient->patient_date); ?></td>
                          <td><?php echo e($v_patient->patient_department); ?></td>
                          <td><?php echo e($v_patient->patient_gender); ?></td>
                          <td><?php echo e($v_patient->patient_time); ?></td>
                          
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>