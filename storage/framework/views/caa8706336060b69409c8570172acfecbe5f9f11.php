

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
            <h6>Property List</h6>
            <a href="<?php echo e(url('/add-new-property')); ?>" class="dark-grey-btn">
                Add Property
            </a>  
        </div>
        <div class="container-fluid table-container-wrap">
            <div class="table-responsive">
                <table id="expense_datatable" class="table table-striped table-bordered table-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Property Address</th>
                            <th>Google Coordinates</th>
                            <th>Entity Company</th>
                            <th>Number Of Acres</th>
                            <th>Map Right Url</th>
                            <th>Property Documents</th>
                            <th>Purchase Price</th>
                            <th>Per Acre Cost</th>
                            <th>Potential Per Acre</th>
                            <th>Potential Market Value</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody class="view-icon-table">
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($list->PROPERTY_ADDRESS); ?></td>
                            <td><?php echo e($list->GOOGLE_COORDINATES); ?></td>
                            <td><?php echo e($list->entity_id->ENTITY_NAME); ?></td>
                            <td><?php echo e($list->NO_OF_ACRES); ?></td>
                            <td><a href="<?php echo e($list->MAP_URL); ?>" class="text-link-dark">URL</a></td>
                            <td><a href="<?php echo e($list->PROPERTY_DOCUMENTS); ?>"  class="text-link-dark">URL</a></td>
                            <td><?php echo e($list->PURCHASE_PRICE); ?></td>
                            <td><?php echo e($list->COST_PER_ACRE); ?></td>
                            <td><?php echo e($list->POTENTIAL_PER_ACRE); ?></td>
                            <td><?php echo e($list->POTENTIAL_MARKET_VALUE); ?></td>
                            <td>
                                <a href="<?php echo e(url('property-view/'.$list->ID)); ?>" class="table-view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>                                 
                                <a href="<?php echo e(url('property-list-edit/'.$list->ID)); ?>" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-property-modal-<?php echo e($list->ID); ?>">
                                    <i class="fa fa-trash"></i>
                                </a>                    
                                <div class="modal fade" id="delete-property-modal-<?php echo e($list->ID); ?>" tabindex="-1" aria-labelledby="delete-property-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content ">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                            <div class="modal-body">
                                                <div class="modal-trash-icon">
                                                    <i class="fa fa-trash"></i>
                                                </div>
                                                <p>
                                                    Are you sure want to delete  <br> <?php echo e($list->PROPERTY_ADDRESS); ?> ? 
                                                </p>
                                            </div>
                                            <div class="modal-footer form-btn-flex-between">
                                                <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                <a href="<?php echo e(url('property-list-delete/'.$list->ID)); ?>" ><button type="button" class="form-submit-btn">Yes</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/property/property-list.blade.php ENDPATH**/ ?>