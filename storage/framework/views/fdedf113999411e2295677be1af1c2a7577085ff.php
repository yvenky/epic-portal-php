

<?php $__env->startSection('main-content'); ?>
<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Property Details</h6>
            <a href="<?php echo e(url('property-list-edit/'.$lists->id)); ?>" title="Edit Property"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">
           
        <?php if( $lists->property_address ): ?>
                <div class="form-flex-box-text-item">
                    <span>Property Address</span>
                    <p><?php echo e($lists->property_address); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->property_of_acres ): ?>
                <div class="form-flex-box-text-item">
                    <span># Of Acres</span>
                    <p><?php echo e($lists->property_of_acres); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->property_map_right_url ): ?>
            <div class="form-flex-box-text-item">
                <span>Map Right Url</span>
                <p><a href="https://<?php echo e($lists->property_map_right_url); ?>" target="_blank">Map Right Url</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->property_contract_url ): ?>
            <div class="form-flex-box-text-item">
                <span>Contract</span>
                <p><a href="https://<?php echo e($lists->property_contract_url); ?>" target="_blank">Contract</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->property_survey_url ): ?>
            <div class="form-flex-box-text-item">
                <span>Survey Url</span>
                <p><a href="https://<?php echo e($lists->property_survey_url); ?>" target="_blank">Survey Url</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->property_closing_documents ): ?>
            <div class="form-flex-box-text-item">
                <span>Closing Documents</span>
                <p><a href="https://<?php echo e($lists->property_closing_documents); ?>" target="_blank">Closing Documents</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->property_appraisal ): ?>
            <div class="form-flex-box-text-item">
                <span>Appraisal</span>
                <p><a href="https://<?php echo e($lists->property_appraisal); ?>" target="_blank">Appraisal</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->property_phase_env_inspection ): ?>
            <div class="form-flex-box-text-item">
                <span>Phase Env Inspection</span>
                <p><a href="https://<?php echo e($lists->property_phase_env_inspection); ?>" target="_blank">Phase Env Inspection</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->property_attorney_feedback ): ?>
            <div class="form-flex-box-text-item">
                <span>Attorney Feedback</span>
                <p><a href="https://<?php echo e($lists->property_attorney_feedback); ?>" target="_blank">Attorney Feedback</a></p>
            </div>
            <?php endif; ?>
        </div>
        <div class="form-content">
            <div class="form-btn-flex-between pt-2">
                <a href="<?php echo e(url()->previous()); ?>" class="form-cancel-btn">Cancel</a>
                <a href="<?php echo e(url('add-new-property')); ?>" class="form-submit-btn">Add Property</a>
             </div>
        </div>
    </div>  
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views\backend\template\property\property-view.blade.php ENDPATH**/ ?>