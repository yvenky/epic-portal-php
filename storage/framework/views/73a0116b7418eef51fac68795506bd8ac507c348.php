

<?php $__env->startSection('main-content'); ?>

<div class="container">
       

    <div class="row">
        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mt-3">
            <div class="card">

                <div class="card-body">
                    <p><span>First name</span> <?php echo e($item->FIRST_NAME); ?></p>
            
            <p><span>last Name</span> <?php echo e($item->LAST_NAME); ?></p>
    
            <p><span>address id</span> <?php echo e($item->ADDRESS_ID); ?></p>

            <?php
            $get_address = DB::table('ADDRESS')
                        ->where('id', '=', $item->ADDRESS_ID)
                        ->get();
            ?>




              <?php $__currentLoopData = $get_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($adress->STREET_1); ?><br>
                  <?php echo e($adress->STREET_2); ?><br>
                  <?php echo e($adress->CITY); ?><br>
    
                  <?php echo e($adress->ZIP_CODE); ?><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              




            <p><span>email address</span> <?php echo e($item->EMAIL_ADDRESS); ?></p>
            <p><span>PHone Number</span> <?php echo e($item->PHONE_NUMBER); ?></p>
            <p><span>EMPLOYMENT STATUS</span> <?php echo e($item->EMPLOYMENT_STATUS); ?></p>
                </div>
            
             </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>


<div class="form-flex-box-text-item">




   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-dashboard\resources\views/test.blade.php ENDPATH**/ ?>