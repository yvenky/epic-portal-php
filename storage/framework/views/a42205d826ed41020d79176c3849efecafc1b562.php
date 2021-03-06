

<?php $__env->startSection('main-content'); ?>
<!--// Main Area Start //-->

<section class="panel-wrapper panel-full-width mt-resp-top">
    <div class="form-wrapper">
        <?php if(Session::has('success-message-edit')): ?> 
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success-message-edit')); ?> 
          </div>
         <?php endif; ?> 
         <?php if(Session::has('success-message')): ?> 
         <div class="alert alert-success" role="alert">
             <?php echo e(Session::get('success-message')); ?>

           </div>
          <?php endif; ?> 
          <?php if(Session::has('success-message-delete')): ?> 
          <div class="alert alert-success" role="alert">
              <?php echo e(Session::get('success-message-delete')); ?>

            </div>
           <?php endif; ?> 

           <div class="form-heading d-flex justify-content-between align-items-center">

             <h6>Entity Shareholding Partner Under of This ENTITY</h6>
           </div>
        <div class="container-fluid table-container-wrap">
            <div class="table-responsive">
                <table id="expense_datatable" class="table table-striped table-bordered table-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Partner Name</th>
                            <th>Total Share</th>
                            <th>Share holding</th>
                            <th>Cash</th>
                            <th>Loan</th>
                            <th>Finder Fees</th>
                            <th>Closing Costs</th>
                            <th>Total Cash</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody class="view-icon-table" id="todos-list">   
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($file->FIRST_NAME.' '.$file->LAST_NAME); ?></td>
                            <td><?php echo e($file->TOTAL_SHARE); ?></td>
                            <td><?php echo e(number_format($file->SHAREHOLDING, 4)); ?>%</td> 
                            <td><?php echo e($file->CASH); ?></td>
                            <td><?php echo e($file->LOAN); ?></td>
                            <td><?php echo e($file->FINDER_FEES); ?></td>
                            <td><?php echo e($file->CLOSING_FEES); ?></td>
                            <td><?php echo e($file->TOTAL_CASH); ?></td>                               
                            <td>
                                <a href="#" class="table-view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>  
                                <a href="<?php echo e(url('entity-shareholding-edit/'.$file->ID)); ?>" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-entity-partners-modal-<?php echo e($file->ID); ?>">
                                    <i class="fa fa-trash"></i>
                                </a>                                                                     
                                <div class="modal fade" id="delete-entity-partners-modal-<?php echo e($file->ID); ?>" tabindex="-1" aria-labelledby="delete-entity-partners-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content ">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                            <div class="modal-body">
                                                <div class="modal-trash-icon">
                                                    <i class="fa fa-trash"></i>
                                                </div>
                                                <p>
                                                    Are you sure want to delete  <br>  <?php echo e($file->FIRST_NAME.' '.$file->LAST_NAME); ?> Entity Partner ?
                                                </p>
                                            </div>
                                            <div class="modal-footer form-btn-flex-between">
                                                <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                <a href="<?php echo e(url('entity-shareholding/'.$file->ID)); ?>"  ><button type="button" class="form-submit-btn">Yes</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th class="table-text-right">Total:</th>
                            <th><?php echo e(number_format($sum_total_share, 4)); ?></th>
                            <th><?php echo e(number_format($sum_total_shareholding, 4)); ?>%</th>
                            <th><?php echo e(number_format($sum_total_cash, 4)); ?></th>
                            <th><?php echo e(number_format($sum_total_loan, 4)); ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
              <!--  tota tble-->
            </div>   
      </div>
   </div>
</section>
         

                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/customer-profile/customer-entity-view.blade.php ENDPATH**/ ?>