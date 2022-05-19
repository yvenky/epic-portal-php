

<?php $__env->startSection('main-content'); ?>
<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Property Details</h6>
            <a href="<?php echo e(url('property-list-edit/'.$lists->ID)); ?>" title="Edit Property"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">
           
        <?php if( $lists->PROPERTY_ADDRESS ): ?>
                <div class="form-flex-box-text-item">
                    <span>Property Address</span>
                    <p><?php echo e($lists->PROPERTY_ADDRESS); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->GOOGLE_COORDINATES ): ?>
                <div class="form-flex-box-text-item">
                    <span>Google Coordinates</span>
                    <p><?php echo e($lists->GOOGLE_COORDINATES); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->ENTITY_COMPANY): ?>
                <div class="form-flex-box-text-item">
                    <span>Company</span>
                    <p><?php echo e($lists->entity_id->ENTITY_NAME); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->NO_OF_ACRES): ?>
                <div class="form-flex-box-text-item">
                    <span>Number Of Acres</span>
                    <p><?php echo e($lists->NO_OF_ACRES); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->MAP_URL ): ?>
            <div class="form-flex-box-text-item">
                <span>Map Right Url</span>
                <p><a href="<?php echo e($lists->MAP_URL); ?>" target="_blank" class="text-link-dark">Map Right Url</a></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->PROPERTY_DOCUMENTS ): ?>
                <div class="form-flex-box-text-item">
                    <span>Property Documents</span>
                    <p><a href="<?php echo e($lists->PROPERTY_DOCUMENTS); ?>" target="_blank" class="text-link-dark">Property Documents</a></p>
                </div>
            <?php endif; ?>

            

            <?php if( $lists->PURCHASE_PRICE): ?>
            <div class="form-flex-box-text-item">
                <span>Purchase Price</span>
                <p><?php echo e($lists->PURCHASE_PRICE); ?></p>
            </div>
            <?php endif; ?>

            
            <?php if( $lists->COST_PER_ACRE ): ?>
            <div class="form-flex-box-text-item">
                <span>Per Acre Cost</span>
                <p><?php echo e($lists->COST_PER_ACRE); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->POTENTIAL_PER_ACRE ): ?>
            <div class="form-flex-box-text-item">
                <span>Potential Per Acre</span>
                <p><?php echo e($lists->POTENTIAL_PER_ACRE); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->POTENTIAL_MARKET_VALUE ): ?>
            <div class="form-flex-box-text-item">
                <span>Potential Market Value</span>
                <p><?php echo e($lists->POTENTIAL_MARKET_VALUE); ?></p>
            </div>
            <?php endif; ?>

            
        </div>
        <div class="form-content">
            <div class="form-btn-flex-between pt-2">
                <a href="<?php echo e(url('property-list')); ?>" class="form-cancel-btn">Property List</a>
                <a href="<?php echo e(url('add-new-property')); ?>" class="form-submit-btn">Add Property</a>
             </div>
        </div>
    </div>  
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/property/property-submit-confirmation.blade.php ENDPATH**/ ?>