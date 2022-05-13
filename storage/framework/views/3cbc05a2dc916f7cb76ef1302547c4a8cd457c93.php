

<?php $__env->startSection('main-content'); ?>

<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Entity Details</h6>
            <a href="<?php echo e(url('entity-edit/'.$lists->ID)); ?>" title="Edit Entity"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            <?php if( $lists->ENTITY_NAME ): ?>
                <div class="form-flex-box-text-item">
                    <span>Entity Name</span>
                    <p><?php echo e($lists->ENTITY_NAME); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->investor_mm_one->FIRST_NAME.' '.$lists->investor_mm_one->LAST_NAME): ?> 
                <div class="form-flex-box-text-item">
                    <span>Managing Member 1</span>
                    <p><?php echo e($lists->investor_mm_one->FIRST_NAME.' '.$lists->investor_mm_one->LAST_NAME); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->investor_mm_two->FIRST_NAME.' '.$lists->investor_mm_two->LAST_NAME ): ?>
            <div class="form-flex-box-text-item">
                <span>Managing Member 2</span>
                <p><?php echo e($lists->investor_mm_two->FIRST_NAME.' '.$lists->investor_mm_two->LAST_NAME); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->EIN ): ?>
            <div class="form-flex-box-text-item">
                <span>EIN</span>
                <p><?php echo e($lists->EIN); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->OPERATING_AGREEMENT ): ?>
            <div class="form-flex-box-text-item">
                <span>Entity Docs</span>
                <p><?php echo e($lists->OPERATING_AGREEMENT); ?></p>
            </div>
            <?php endif; ?>
        </div>
        <div class="form-heading top-border">
            <h6>Entity Address  Details</h6>
        </div>
        <div class="form-content">
            
            <?php if( $lists->address->STREET_1 ): ?>
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p><?php echo e($lists->address->STREET_1); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->address->CITY ): ?>
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p><?php echo e($lists->address->CITY); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->address->STATE ): ?>
            <div class="form-flex-box-text-item">
                <span>State</span>
                <?php if( $lists->address->STATE ==  "AA" ): ?>
                    <p>Armed Forces America</p>
                <?php elseif( $lists->address->STATE ==  "AE" ): ?> 
                    <p>Armed Forces</p>
                <?php elseif( $lists->address->STATE ==  "AK" ): ?>
                    <p>Alaska</p>
                <?php elseif( $lists->address->STATE ==  "AL" ): ?>
                    <p>Alabama</p>
                <?php elseif( $lists->address->STATE ==  "AP" ): ?>
                    <p>Armed Forces Pacific</p>
                <?php elseif( $lists->address->STATE ==  "AR" ): ?>
                    <p>Arkansas</p>
                <?php elseif( $lists->address->STATE ==  "AZ" ): ?>
                    <p>Arizona</p>
                <?php elseif( $lists->address->STATE ==  "CA" ): ?>
                    <p>California</p>
                <?php elseif( $lists->address->STATE ==  "CO" ): ?>
                    <p>Colorado</p>
                <?php elseif( $lists->address->STATE ==  "CT" ): ?>
                    <p>Connecticut</p>
                <?php elseif( $lists->address->STATE ==  "DC" ): ?>
                    <p>Washington DC</p>
                <?php elseif( $lists->address->STATE ==  "DE" ): ?>
                    <p>Delaware</p>
                <?php elseif( $lists->address->STATE ==  "FL" ): ?>
                    <p>Florida</p>
                <?php elseif( $lists->address->STATE ==  "GA" ): ?>
                    <p>Georgia</p>
                <?php elseif( $lists->address->STATE ==  "GU" ): ?>
                    <p>Guam</p>
                <?php elseif( $lists->address->STATE ==  "HI" ): ?>
                    <p>Hawaii</p>
                <?php elseif( $lists->address->STATE ==  "IA" ): ?>
                    <p>Iowa</p>
                <?php elseif( $lists->address->STATE ==  "ID" ): ?>
                    <p>Idaho</p>
                <?php elseif( $lists->address->STATE ==  "IL" ): ?>
                    <p>Illinois</p>
                <?php elseif( $lists->address->STATE ==  "IN" ): ?>
                    <p>Indiana</p>
                <?php elseif( $lists->address->STATE ==  "KS" ): ?>
                    <p>Kansas</p>
                <?php elseif( $lists->address->STATE ==  "KY" ): ?>
                    <p>Kentucky</p>
                <?php elseif( $lists->address->STATE ==  "LA" ): ?>
                    <p>Louisiana</p>
                <?php elseif( $lists->address->STATE ==  "MA" ): ?>
                    <p>Massachusetts</p>
                <?php elseif( $lists->address->STATE ==  "MD" ): ?>
                    <p>Maryland</p>
                <?php elseif( $lists->address->STATE ==  "ME" ): ?>
                    <p>Maine</p>
                <?php elseif( $lists->address->STATE ==  "MI" ): ?>
                    <p>Michigan</p>
                <?php elseif( $lists->address->STATE ==  "MN" ): ?>
                    <p>Mississippi</p>
                <?php elseif( $lists->address->STATE ==  "MO" ): ?>
                    <p>Missouri</p>
                <?php elseif( $lists->address->STATE ==  "MT" ): ?>
                    <p>Montana</p>
                <?php elseif( $lists->address->STATE ==  "NC" ): ?>
                    <p>North Carolina</p>
                <?php elseif( $lists->address->STATE ==  "ND" ): ?>
                    <p>North Dakota</p>
                <?php elseif( $lists->address->STATE ==  "NE" ): ?>
                    <p>Nebraska</p>
                <?php elseif( $lists->address->STATE ==  "NH" ): ?>
                    <p>New Hampshire</p>
                <?php elseif( $lists->address->STATE ==  "NJ" ): ?>
                    <p>New Jersey</p>
                <?php elseif( $lists->address->STATE ==  "NM" ): ?>
                    <p>New Mexico</p>
                <?php elseif( $lists->address->STATE ==  "NV" ): ?>
                    <p>Nevada</p>
                <?php elseif( $lists->address->STATE ==  "NY" ): ?>
                    <p>New York</p>
                <?php elseif( $lists->address->STATE ==  "OH" ): ?>
                    <p>Ohio</p>
                <?php elseif( $lists->address->STATE ==  "OK" ): ?>
                    <p>Oklahoma</p>
                <?php elseif( $lists->address->STATE ==  "OR" ): ?>
                    <p>Oregon</p>
                <?php elseif( $lists->address->STATE ==  "PA" ): ?>
                    <p>Pennsylvania</p>
                <?php elseif( $lists->address->STATE ==  "PR" ): ?>
                    <p>Puerto Rico</p>
                <?php elseif( $lists->address->STATE ==  "RI" ): ?>
                    <p>Rhode Island</p>
                <?php elseif( $lists->address->STATE ==  "RI" ): ?>
                    <p>South Carolina</p>
                <?php elseif( $lists->address->STATE ==  "SD" ): ?>
                    <p>South Dakota</p>
                <?php elseif( $lists->address->STATE ==  "TN" ): ?>
                    <p>Tennessee</p>
                <?php elseif( $lists->address->STATE ==  "TX" ): ?>
                    <p>Texas</p>
                <?php elseif( $lists->address->STATE ==  "UT" ): ?>
                    <p>Utah</p>
                <?php elseif( $lists->address->STATE ==  "VA" ): ?>
                    <p>Virginia</p>
                <?php elseif( $lists->address->STATE ==  "VI" ): ?>
                    <p>Virgin Islands</p>
                <?php elseif( $lists->address->STATE ==  "VT" ): ?>
                    <p>Vermont</p>
                <?php elseif( $lists->address->STATE ==  "WA" ): ?>
                    <p>Washington</p>
                <?php elseif( $lists->address->STATE ==  "WI" ): ?>
                    <p>Wisconsin</p>
                <?php elseif( $lists->address->STATE ==  "WV" ): ?>
                    <p>West Virginia</p>
                <?php elseif( $lists->address->STATE ==  "WY" ): ?>
                    <p>Wyoming</p>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if( $lists->address->ZIP_CODE ): ?>
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p><?php echo e($lists->address->ZIP_CODE); ?></p>
            </div>
            <?php endif; ?>

            <div class="form-btn-flex-between pt-4">
                <a href="<?php echo e(url('entity-list')); ?>" class="form-cancel-btn">Home</a>
                 <a href="<?php echo e(url('add-new-entry')); ?>" class="form-submit-btn">Add Entity</a>
             </div>
        </div>
    </div>  
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity/entity-view.blade.php ENDPATH**/ ?>