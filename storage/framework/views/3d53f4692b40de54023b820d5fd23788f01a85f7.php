

<?php $__env->startSection('main-content'); ?>
        
        <!--// Main Area Start //-->
        <main class="main-area" role="main">
            <h5>Add partners to Entity</h5>
        </main>
        <!--// Main Area End //-->


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
                    <h6>Entity Shareholding Partner List</h6>
                    <a href="#" class="dark-grey-btn">
                        Add Partner
                    </a>  
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
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody class="view-icon-table">
                              
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                 
                                    <td>
                                        <a href="#" class="table-view-btn">
                                            <i class="fa fa-eye"></i>
                                        </a>  
                                        <a href="#" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-entity-partners-modal-id">
                                            <i class="fa fa-trash"></i>
                                        </a>                                                                     
                                        <div class="modal fade" id="delete-entity-partners-modal-id" tabindex="-1" aria-labelledby="delete-entity-partners-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content ">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                                    <div class="modal-body">
                                                        <div class="modal-trash-icon">
                                                            <i class="fa fa-trash"></i>
                                                        </div>
                                                        <p>
                                                            Are you sure want to delete  <br>  ? 
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer form-btn-flex-between">
                                                        <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="#" ><button type="button" class="form-submit-btn">Yes</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity-shareholding/entityshareholding-index.blade.php ENDPATH**/ ?>