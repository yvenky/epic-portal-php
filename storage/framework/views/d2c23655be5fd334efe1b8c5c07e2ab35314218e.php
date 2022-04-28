

<?php $__env->startSection('main-content'); ?>

<section class="panel-wrapper panel-center">

    <?php if(Session::has('success-message')): ?> 
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success-message')); ?>

      </div>
     <?php endif; ?> 
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Entity Details</h6>
            <a href="<?php echo e(url('entity-edit/'.$lists->id)); ?>" title="Edit Entity"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            <?php if( $lists->add_partner_entity_name ): ?>
                <div class="form-flex-box-text-item">
                    <span>Entity Name</span>
                    <p><?php echo e($lists->add_partner_entity_name); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_managing_member_1 ): ?>
                <div class="form-flex-box-text-item">
                    <span>Managing Member 1</span>
                    <p><?php echo e($lists->add_partner_managing_member_1); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_managing_member_2 ): ?>
            <div class="form-flex-box-text-item">
                <span>Managing Member 2</span>
                <p><?php echo e($lists->add_partner_managing_member_2); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_ein ): ?>
            <div class="form-flex-box-text-item">
                <span>EIN</span>
                <p><?php echo e($lists->add_partner_entity_ein); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_docs ): ?>
            <div class="form-flex-box-text-item">
                <span>Entity Docs</span>
                <p><?php echo e($lists->add_partner_entity_docs); ?></p>
            </div>
            <?php endif; ?>
        </div>
        <div class="form-heading top-border">
            <h6>Entity Address  Details</h6>
        </div>
        <div class="form-content">
            
            <?php if( $lists->add_partner_entity_address_street ): ?>
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p><?php echo e($lists->add_partner_entity_address_street); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_address_city ): ?>
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p><?php echo e($lists->add_partner_entity_address_city); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_address_state ): ?>
            <div class="form-flex-box-text-item">
                <span>State</span>
                <p><?php echo e($lists->add_partner_entity_address_state); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_address_zipcode ): ?>
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p><?php echo e($lists->add_partner_entity_address_zipcode); ?></p>
            </div>
            <?php endif; ?>

            <div class="form-btn-flex-between pt-4">
                <button type="button" class="form-cancel-btn"><a href="<?php echo e(url('entity-list')); ?>" style="color:black">Home</a></button>
                 <button type="button" class="form-submit-btn"><a href="<?php echo e(url('add-new-entry')); ?>" style="color:black">Add New Entity</a></button>
             </div>
        </div>
    </div>  
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity/entity-submit-confirmation.blade.php ENDPATH**/ ?>