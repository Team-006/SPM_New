<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">INTERN’S DAILY DIARY</div>
                
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <b>Intern’s Information </b> 
                    <form  method="post" action="<?php echo e(url('store')); ?>">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="form-group">
                          <label for="name">Intern’s Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="sid">Student ID</label>
                            <input type="text" class="form-control" name="id" id="sid" placeholder="Enter id" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Intern’s Private Address</label>
                            <input type="text" class="form-control" name= "address" id="address" placeholder="Enter address" required>
                        </div>

                        <div class="form-group">
                            <label for="sid">Student ID</label>
                            <input type="text" class="form-control" name="sid" id="sid" placeholder="Enter id" required>
                        </div> 
                        <div class="form-group">
                          <label for="number">Contact Number </label>
                          <input type="number" class="form-control" name="number" id="number" placeholder="Contact Number" required>
                        </div>
                        <div class="form-group">
                          
                          <label for="email">E-mail Addresses</label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter id" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>