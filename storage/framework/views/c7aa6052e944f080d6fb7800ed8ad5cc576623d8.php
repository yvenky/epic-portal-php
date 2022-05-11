

<?php $__env->startSection('main-content'); ?>
<section class="panel-wrapper panel-center">
 <div class="form-wrapper">
    <div class="form-heading details-view-edit-wrap">
        <h6>Investor Details</h6>
        <a href="<?php echo e(url('investor-edit/'.$lists->ID)); ?>" title="Edit Investor"><i class="fa fa-edit"></i></a>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Full Name</span>
            <p><?php echo e($lists->FIRST_NAME.' '.$lists->LAST_NAME); ?></p>
            
        </div>
        <div class="form-flex-box-text-item">
            <span>Employment Status</span>
            <?php if( $lists->EMPLOYMENT_STATUS ==  "S" ): ?>
                <p>Self Employed</p>
            <?php elseif( $lists->EMPLOYMENT_STATUS ==  "W2" ): ?> 
                <p>W2</p>
            <?php elseif( $lists->EMPLOYMENT_STATUS ==  "F" ): ?> 
                <p>F</p>
            <?php elseif( $lists->EMPLOYMENT_STATUS ==  "H" ): ?>
                <p>Home Maker</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Household Income</span>
            <?php if( $lists->HOUSEHOLD_INCOME ==  "0" ): ?>
                <p>Upto 100000</p>
            <?php elseif( $lists->HOUSEHOLD_INCOME ==  "1" ): ?> 
                <p>100000 to 200000</p>
            <?php elseif( $lists->HOUSEHOLD_INCOME ==  "2" ): ?>
                <p>200K to 300K</p>
            <?php elseif( $lists->HOUSEHOLD_INCOME ==  "3" ): ?>
                <p>300K to 400K</p>
            <?php elseif( $lists->HOUSEHOLD_INCOME ==  "4" ): ?>
                <p>400K to 500K</p>
            <?php elseif( $lists->HOUSEHOLD_INCOME ==  "5" ): ?>
                <p>More Than 500K</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Email Address</span>
            <p><?php echo e($lists->EMAIL_ADDRESS); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Phone Number</span>
            <p><?php echo e($lists->PHONE_NUMBER); ?></p>
        </div>
    </div>

    <div class="form-heading top-border">
        <h6>Investor Spouse  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Spouse Full Name</span>
            <p><?php echo e($lists->SPOUSE_FIRSTNAME.' '.$lists->SPOUSE_LASTNAME); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Employment Status</span>
            <?php if( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "S" ): ?>
                <p>Self Employed</p>
            <?php elseif( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "W2" ): ?> 
                <p>W2</p>
            <?php elseif( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "F" ): ?> 
                <p>F</p>
            <?php elseif( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "H" ): ?>
                <p>Home Maker</p>
            <?php endif; ?>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Email Address</span>
            <p><?php echo e($lists->SPOUSE_EMAIL); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Phone Number</span>
            <p><?php echo e($lists->SPOUSE_PHONE_NO); ?></p>
        </div>
    </div>
    <div class="form-heading top-border">
        <h6>Investor Address  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Street</span>
            <p><?php echo e($lists->address->STREET_1); ?></p>
        </div>
        <div class="form-flex-box-text-item">
            <span>City</span>
            <p><?php echo e($lists->address->CITY); ?></p>
        </div>
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
        <div class="form-flex-box-text-item">
            <span>Zip Code</span>
            <p><?php echo e($lists->address->ZIP_CODE); ?></p>
        </div>
        
        <div class="form-btn-flex-between pt-2">
            <a href="<?php echo e(url('/')); ?>" class="form-cancel-btn">Home</a>
            <a href="<?php echo e(url('new-partner-registration')); ?>" class="form-submit-btn">Add Investor</a>
         </div>
    </div>
    
 </div>  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/investor/investor-view.blade.php ENDPATH**/ ?>