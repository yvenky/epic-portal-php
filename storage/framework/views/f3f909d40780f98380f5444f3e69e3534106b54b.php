

<?php $__env->startSection('main-content'); ?>
        
      
        <!--// Main Area Start //-->
     <main class="main-area" role="main">
            <section class="panel-wrapper panel-full-width">
                <div class="form-wrapper bg-transparent">
                    <div class="breadcrumb-wrap">
                        <div class="container-fluid p-0">
                            <div class="breadcrumb-links">
                                <p>Welcome, <strong>Rajeshwar Vadheraju</strong></p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="form-wrapper">
                    <div class="form-content pb-0">
                        <div class="row">
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Your Land Bank Is</p>
                                    <h5>187 Acres</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Total Investment</p>
                                    <h5>$1,200,000</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Current Market Value</p>
                                    <h5>$3,200,000</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Net EMI</p>
                                    <h5>$1,700</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="form-content pb-0">
                        <div class="row">
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Total Cash</p>
                                    <h5>$400,000</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Total Loan</p>
                                    <h5>$800,000</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Total EMI</p>
                                    <h5>$3,200</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="form-text-box-item">
                                    <p>Total Income</p>
                                    <h5>$1,700</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper p-0">
                    <div class="form-heading d-flex justify-content-between align-items-center">
                        <h6>Your Investments</h6>
                        <a href="#" class="dark-grey-btn" data-bs-toggle="modal" data-bs-target="#add-invesment-modal">
                            Add Investor
                        </a>  
                    </div>
                    <div class="container-fluid table-container-wrap">
                        <div class="table-responsive">
                            <table id="investment_datatable" class="table table-striped table-bordered table-data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Entity</th>
                                        <th>Property Address</th>
                                        <th>Investment</th>
                                        <th>Cash</th>
                                        <th>Loan</th>
                                        <th>EMI</th>
                                        <th># Of Acres</th>
                                        <th>Income</th>
                                        <th>Net EMI</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="view-icon-table">
                                    <?php ($i=1); ?>
                                        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><a href="<?php echo e(url('customer-entity-view/'.$list->entity_id->ID)); ?>" class="link-warning"><?php echo e($list->entity_id->ENTITY_NAME); ?></a></td>
                                        <td><?php echo e($list->PROPERTY_ADDRESS); ?></td>
                                        <td><?php echo e($sum_total_investment); ?></td>
                                        <td>$175,000.00</td>
                                        <td>$325,000.00</td>
                                        <td>$1,495.00</td>
                                        <td>45</td>
                                        <td>$1,125.00</td>
                                        <td>$370.00</td>
                                        <td>
                                            <a href="#" class="table-view-btn" title="View Investor">
                                                <i class="fa fa-eye"></i>
                                            </a> 
                                            <a href="#" class="table-edit-btn" title="Edit Investor" data-bs-toggle="modal" data-bs-target="#edit-investment-modal">
                                                <i class="fa fa-edit"></i>
                                            </a>  
                                            <a href="#" class="table-delete-btn" title="Delete Investor" data-bs-toggle="modal" data-bs-target="#delete-investment-modal">
                                                <i class="fa fa-trash"></i>
                                            </a>                                          
                                        </td>
                                    </tr> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th class="table-text-right">Total:</th>
                                        <th>$2,100,000.00</th>
                                        <th>$705,000.00</th>
                                        <th>$1,395,000.00</th>
                                        <th>$42,000.00</th>
                                        <th>$21,000.00</th>
                                        <th>$2,163,000.00</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
    </main>

        <!-- Delete Modal -->
    <div class="modal fade" id="delete-investment-modal" tabindex="-1" aria-labelledby="delete-investment-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content ">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                <div class="modal-body">
                    <div class="modal-trash-icon">
                        <i class="fa fa-trash"></i>
                    </div>
                    <p>
                        Are you sure want to delete  <br> Epic Estates 2 ? 
                    </p>
                </div>
                <div class="modal-footer form-btn-flex-between">
                    <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="form-submit-btn">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade custom-edit-modal" id="edit-investment-modal" tabindex="-1" aria-labelledby="edit-investment-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                    <h6>Edit Investment</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_entity_edit">Entity </label>
                                    <input type="text" class="form-control" name="investment_entity_edit" value="Epic Estates 2" id="investment_entity_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_property_address_edit">Property Address </label>
                                    <input type="text" class="form-control" name="investment_property_address_edit" value="Vero Beach Phase - 1" id="investment_property_address_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_value_edit">Investment </label>
                                    <input type="text" class="form-control" name="investment_value_edit" value="$500,000.00" id="investment_value_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_cash_edit">Cash </label>
                                    <input type="text" class="form-control" name="investment_cash_edit" value="$175,000.00" id="investment_cash_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_loan_edit">Loan </label>
                                    <input type="text" class="form-control" name="investment_loan_edit" value="$325,000.00" id="investment_loan_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_emi_edit">EMI </label>
                                    <input type="text" class="form-control" name="investment_emi_edit" value="$1,495.00" id="investment_emi_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_of_acres_edit"># Of Acres </label>
                                    <input type="text" class="form-control" name="investment_of_acres_edit" value="45" id="investment_of_acres_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_income_edit">Income </label>
                                    <input type="text" class="form-control" name="investment_income_edit" value="$1,125.00" id="investment_income_edit">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_net_emi_edit">Income </label>
                                    <input type="text" class="form-control" name="investment_net_emi_edit" value="$370.00" id="investment_net_emi_edit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer form-btn-flex-between">
                    <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="form-submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade custom-add-modal" id="add-invesment-modal" tabindex="-1" aria-labelledby="add-invesment-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                    <h6>Add Investor</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_entity">Entity </label>
                                    <input type="text" class="form-control" name="investment_entity" id="investment_entity">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_property_address">Property Address </label>
                                    <input type="text" class="form-control" name="investment_property_address" id="investment_property_address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_value">Investment </label>
                                    <input type="text" class="form-control" name="investment_value" id="investment_value">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_cash">Cash </label>
                                    <input type="text" class="form-control" name="investment_cash" id="investment_cash">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_loan">Loan </label>
                                    <input type="text" class="form-control" name="investment_loan" id="investment_loan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_emi">EMI </label>
                                    <input type="text" class="form-control" name="investment_emi" id="investment_emi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_of_acres"># Of Acres </label>
                                    <input type="text" class="form-control" name="investment_of_acres" id="investment_of_acres">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_income">Income </label>
                                    <input type="text" class="form-control" name="investment_income" id="investment_income">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="investment_net_emi">Net EMI </label>
                                    <input type="text" class="form-control" name="investment_net_emi" id="investment_net_emi">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer form-btn-flex-between">
                    <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="form-submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
      
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/customer-profile/customer-profile-index.blade.php ENDPATH**/ ?>