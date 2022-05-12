

<?php $__env->startSection('main-content'); ?>

<section class="panel-wrapper panel-center">
    <?php if(Session::has('success-message')): ?> 
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success-message')); ?>

      </div>
     <?php endif; ?> 
     <div class="form-wrapper">
        <div class="form-heading">
            <h6>Add New Property</h6>
        </div>
        <div class="form-content">
            <form action="<?php echo e(url('property-submit')); ?>" method="POST" id="add-new-property-form">
                <?php echo csrf_field(); ?>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_address">Property Address </label>
                            <input type="text" class="form-control" name="property_address" id="property_address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres"># Of Acres</label>
                            <input type="text" class="form-control" name="property_of_acres" id="property_of_acres">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Map Right Url</label>
                            <input type="text" class="form-control" name="property_map_right_url" id="property_map_right_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_contract_url">Contract</label>
                            <input type="text" class="form-control" name="property_contract_url" id="property_contract_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_survey_url">Survey Url</label>
                            <input type="text" class="form-control" name="property_survey_url" id="property_survey_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_closing_documents">Closing Documents</label>
                            <input type="text" class="form-control" name="property_closing_documents" id="property_closing_documents">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_appraisal">Appraisal</label>
                            <input type="text" class="form-control" name="property_appraisal" id="property_appraisal">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_phase_env_inspection">Phase Env Inspection</label>
                            <input type="text" class="form-control" name="property_phase_env_inspection" id="property_phase_env_inspection">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-flex-item-box">
                            <label for="property_attorney_feedback">Attorney Feedback</label>
                            <input type="text" class="form-control" name="property_attorney_feedback" id="property_attorney_feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-btn-flex-between">
                        <a href="<?php echo e(url()->previous()); ?>" class="form-cancel-btn">Cancel</a>
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/property/add-new-property.blade.php ENDPATH**/ ?>