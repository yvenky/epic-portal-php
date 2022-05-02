

<?php $__env->startSection('main-content'); ?>

<div class="form-wrapper">
    <div class="form-heading details-view-edit-wrap">
        <h6>Investor Details</h6>
        <a href="<?php echo e(url('investor-list-edit/')); ?>" title="Edit Investor"><i class="fa fa-edit"></i></a>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
        
            <span>Full Name</span>
            <p><?php echo e($list->FIRST_NAME.' '.$list->LAST_NAME); ?></p>
            
        </div>
        <div class="form-flex-box-text-item">
            <span>Employment Status</span>
            <?php if( $list->EMPLOYMENT_STATUS ==  "SE" ): ?>
                <p>Self Employed</p>
            <?php elseif( $list->EMPLOYMENT_STATUS ==  "W2" ): ?> 
                <p>W2</p>
            <?php elseif( $list->EMPLOYMENT_STATUS ==  "HM" ): ?>
                <p>Home Maker</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Household Income</span>
            <?php if( $list->HOUSEHOLD_INCOME ==  "0" ): ?>
                <p>Upto 100000</p>
            <?php elseif( $list->HOUSEHOLD_INCOME ==  "1" ): ?> 
                <p>100000 to 200000</p>
            <?php elseif( $list->HOUSEHOLD_INCOME ==  "2" ): ?>
                <p>200K to 300K</p>
            <?php elseif( $list->HOUSEHOLD_INCOME ==  "3" ): ?>
                <p>300K to 400K</p>
            <?php elseif( $list->HOUSEHOLD_INCOME ==  "4" ): ?>
                <p>400K to 500K</p>
            <?php elseif( $list->HOUSEHOLD_INCOME ==  "5" ): ?>
                <p>More Than 500K</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Email Address</span>
            <p><?php echo e($list->EMAIL_ADDRESS); ?></p>
        </div>
    </div>

    <div class="form-heading top-border">
        <h6>Investor Spouse  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Spouse Full Name</span>
            <p><?php echo e($list->SPOUSE_FIRSTNAME.' '.$list->SPOUSE_LASTNAME); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Employment Status</span>
            <?php if( $list->SPOUSE_EMPLOYMENT_STATUS ==  "SE" ): ?>
                <p>Self Employed</p>
            <?php elseif( $list->SPOUSE_EMPLOYMENT_STATUS ==  "W2" ): ?> 
                <p>W2</p>
            <?php elseif( $list->SPOUSE_EMPLOYMENT_STATUS ==  "F" ): ?> 
                <p>F</p>
            <?php elseif( $list->SPOUSE_EMPLOYMENT_STATUS ==  "HM" ): ?>
                <p>Home Maker</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Email Address</span>
            <p><?php echo e($list->SPOUSE_EMAIL); ?></p>
        </div>
        
    </div>
    <div class="form-heading top-border">
        <h6>Investor Address  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Street</span>
            <p><?php echo e($list->address->STREET_1); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>City</span>
            <p><?php echo e($list->partner_individual_city); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>State</span>
            <?php if( $list->address->STATE ==  "AA" ): ?>
                <p>Armed Forces America</p>
            <?php elseif( $list->address->STATE ==  "AE" ): ?> 
                <p>Armed Forces</p>
            <?php elseif( $list->address->STATE ==  "AK" ): ?>
                <p>Alaska</p>
            <?php elseif( $list->address->STATE ==  "AL" ): ?>
                <p>Alabama</p>
            <?php elseif( $list->address->STATE ==  "AP" ): ?>
                <p>Armed Forces Pacific</p>
            <?php elseif( $list->address->STATE ==  "AR" ): ?>
                <p>Arkansas</p>
            <?php elseif( $list->address->STATE ==  "AZ" ): ?>
                <p>Arizona</p>
            <?php elseif( $list->address->STATE ==  "CA" ): ?>
                <p>California</p>
            <?php elseif( $list->address->STATE ==  "CO" ): ?>
                <p>Colorado</p>
            <?php elseif( $list->address->STATE ==  "CT" ): ?>
                <p>Connecticut</p>
            <?php elseif( $list->address->STATE ==  "DC" ): ?>
                <p>Washington DC</p>
            <?php elseif( $list->address->STATE ==  "DE" ): ?>
                <p>Delaware</p>
            <?php elseif( $list->address->STATE ==  "FL" ): ?>
                <p>Florida</p>
            <?php elseif( $list->address->STATE ==  "GA" ): ?>
                <p>Georgia</p>
            <?php elseif( $list->address->STATE ==  "GU" ): ?>
                <p>Guam</p>
            <?php elseif( $list->address->STATE ==  "HI" ): ?>
                <p>Hawaii</p>
            <?php elseif( $list->address->STATE ==  "IA" ): ?>
                <p>Iowa</p>
            <?php elseif( $list->address->STATE ==  "ID" ): ?>
                <p>Idaho</p>
            <?php elseif( $list->address->STATE ==  "IL" ): ?>
                <p>Illinois</p>
            <?php elseif( $list->address->STATE ==  "IN" ): ?>
                <p>Indiana</p>
            <?php elseif( $list->address->STATE ==  "KS" ): ?>
                <p>Kansas</p>
            <?php elseif( $list->address->STATE ==  "KY" ): ?>
                <p>Kentucky</p>
            <?php elseif( $list->address->STATE ==  "LA" ): ?>
                <p>Louisiana</p>
            <?php elseif( $list->address->STATE ==  "MA" ): ?>
                <p>Massachusetts</p>
            <?php elseif( $list->address->STATE ==  "MD" ): ?>
                <p>Maryland</p>
            <?php elseif( $list->address->STATE ==  "ME" ): ?>
                <p>Maine</p>
            <?php elseif( $list->address->STATE ==  "MI" ): ?>
                <p>Michigan</p>
            <?php elseif( $list->address->STATE ==  "MN" ): ?>
                <p>Mississippi</p>
            <?php elseif( $list->address->STATE ==  "MO" ): ?>
                <p>Missouri</p>
            <?php elseif( $list->address->STATE ==  "MT" ): ?>
                <p>Montana</p>
            <?php elseif( $list->address->STATE ==  "NC" ): ?>
                <p>North Carolina</p>
            <?php elseif( $list->address->STATE ==  "ND" ): ?>
                <p>North Dakota</p>
            <?php elseif( $list->address->STATE ==  "NE" ): ?>
                <p>Nebraska</p>
            <?php elseif( $list->address->STATE ==  "NH" ): ?>
                <p>New Hampshire</p>
            <?php elseif( $list->address->STATE ==  "NJ" ): ?>
                <p>New Jersey</p>
            <?php elseif( $list->address->STATE ==  "NM" ): ?>
                <p>New Mexico</p>
            <?php elseif( $list->address->STATE ==  "NV" ): ?>
                <p>Nevada</p>
            <?php elseif( $list->address->STATE ==  "NY" ): ?>
                <p>New York</p>
            <?php elseif( $list->address->STATE ==  "OH" ): ?>
                <p>Ohio</p>
            <?php elseif( $list->address->STATE ==  "OK" ): ?>
                <p>Oklahoma</p>
            <?php elseif( $list->address->STATE ==  "OR" ): ?>
                <p>Oregon</p>
            <?php elseif( $list->address->STATE ==  "PA" ): ?>
                <p>Pennsylvania</p>
            <?php elseif( $list->address->STATE ==  "PR" ): ?>
                <p>Puerto Rico</p>
            <?php elseif( $list->address->STATE ==  "RI" ): ?>
                <p>Rhode Island</p>
            <?php elseif( $list->address->STATE ==  "RI" ): ?>
                <p>South Carolina</p>
            <?php elseif( $list->address->STATE ==  "SD" ): ?>
                <p>South Dakota</p>
            <?php elseif( $list->address->STATE ==  "TN" ): ?>
                <p>Tennessee</p>
            <?php elseif( $list->address->STATE ==  "TX" ): ?>
                <p>Texas</p>
            <?php elseif( $list->address->STATE ==  "UT" ): ?>
                <p>Utah</p>
            <?php elseif( $list->address->STATE ==  "VA" ): ?>
                <p>Virginia</p>
            <?php elseif( $list->address->STATE ==  "VI" ): ?>
                <p>Virgin Islands</p>
            <?php elseif( $list->address->STATE ==  "VT" ): ?>
                <p>Vermont</p>
            <?php elseif( $list->address->STATE ==  "WA" ): ?>
                <p>Washington</p>
            <?php elseif( $list->address->STATE ==  "WI" ): ?>
                <p>Wisconsin</p>
            <?php elseif( $list->address->STATE ==  "WV" ): ?>
                <p>West Virginia</p>
            <?php elseif( $list->address->STATE ==  "WY" ): ?>
                <p>Wyoming</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Zip Code</span>
            <p><?php echo e($list->address->ZIP_CODE); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="form-btn-flex-between pt-2">
            <a href="<?php echo e(url('investor-list')); ?>" class="form-cancel-btn">Home</a>
            <a href="<?php echo e(url('new-partner-registration')); ?>" class="form-submit-btn">Add Investor</a>
         </div>
    </div>
</div>  

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/test.blade.php ENDPATH**/ ?>