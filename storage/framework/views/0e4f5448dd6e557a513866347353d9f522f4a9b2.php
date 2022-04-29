

<?php $__env->startSection('main-content'); ?>


<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Investor Details</h6>
            <a href="<?php echo e(url('investor-list-edit/'.$lists->id)); ?>" title="Edit Investor"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">
            <div class="form-flex-box-text-item">
                <span>Full Name</span>
                <p><?php echo e($lists->partner_individual_first_name.' '.$lists->partner_individual_last_name); ?></p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Employment Status</span>
                <?php if( $lists->partner_individual_employment_status ==  "SE" ): ?>
                    <p>Self Employed</p>
                <?php elseif( $lists->partner_individual_employment_status ==  "W2" ): ?> 
                    <p>W2</p>
                <?php elseif( $lists->partner_individual_employment_status ==  "HM" ): ?>
                    <p>Home Maker</p>
                <?php endif; ?>
            </div>
            <div class="form-flex-box-text-item">
                <span>Household Income</span>
                <?php if( $lists->partner_individual_household_income ==  "0" ): ?>
                    <p>Upto 100000</p>
                <?php elseif( $lists->partner_individual_household_income ==  "1" ): ?> 
                    <p>100000 to 200000</p>
                <?php elseif( $lists->partner_individual_household_income ==  "2" ): ?>
                    <p>200K to 300K</p>
                <?php elseif( $lists->partner_individual_household_income ==  "3" ): ?>
                    <p>300K to 400K</p>
                <?php elseif( $lists->partner_individual_household_income ==  "4" ): ?>
                    <p>400K to 500K</p>
                <?php elseif( $lists->partner_individual_household_income ==  "5" ): ?>
                    <p>More Than 500K</p>
                <?php endif; ?>
            </div>
            <div class="form-flex-box-text-item">
                <span>Email Address</span>
                <p><?php echo e($lists->partner_individual_email_address); ?></p>
            </div>
        </div>

        <div class="form-heading top-border">
            <h6>Investor Spouse  Details</h6>
        </div>
        <div class="form-content">
            <div class="form-flex-box-text-item">
                <span>Spouse Full Name</span>
                <p><?php echo e($lists->partner_individual_spouse_first_name.' '.$lists->partner_individual_spouse_last_name); ?></p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Spouse Employment Status</span>
                <?php if( $lists->partner_individual_employment_status_spouse ==  "SE" ): ?>
                    <p>Self Employed</p>
                <?php elseif( $lists->partner_individual_employment_status_spouse ==  "W2" ): ?> 
                    <p>W2</p>
                <?php elseif( $lists->partner_individual_employment_status_spouse ==  "HM" ): ?>
                    <p>Home Maker</p>
                <?php endif; ?>
            </div>
            <div class="form-flex-box-text-item">
                <span>Spouse Email Address</span>
                <p><?php echo e($lists->partner_individual_spouse_email_address); ?></p>
            </div>
            
        </div>
        <div class="form-heading top-border">
            <h6>Investor Address  Details</h6>
        </div>
        <div class="form-content">
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p><?php echo e($lists->partner_individual_street); ?></p>
            </div>
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p><?php echo e($lists->partner_individual_city); ?></p>
            </div>
            <div class="form-flex-box-text-item">
                <span>State</span>
                <?php if( $lists->partner_individual_state ==  "AA" ): ?>
                    <p>Armed Forces America</p>
                <?php elseif( $lists->partner_individual_state ==  "AE" ): ?> 
                    <p>Armed Forces</p>
                <?php elseif( $lists->partner_individual_state ==  "AK" ): ?>
                    <p>Alaska</p>
                <?php elseif( $lists->partner_individual_state ==  "AL" ): ?>
                    <p>Alabama</p>
                <?php elseif( $lists->partner_individual_state ==  "AP" ): ?>
                    <p>Armed Forces Pacific</p>
                <?php elseif( $lists->partner_individual_state ==  "AR" ): ?>
                    <p>Arkansas</p>
                <?php elseif( $lists->partner_individual_state ==  "AZ" ): ?>
                    <p>Arizona</p>
                <?php elseif( $lists->partner_individual_state ==  "CA" ): ?>
                    <p>California</p>
                <?php elseif( $lists->partner_individual_state ==  "CO" ): ?>
                    <p>Colorado</p>
                <?php elseif( $lists->partner_individual_state ==  "CT" ): ?>
                    <p>Connecticut</p>
                <?php elseif( $lists->partner_individual_state ==  "DC" ): ?>
                    <p>Washington DC</p>
                <?php elseif( $lists->partner_individual_state ==  "DE" ): ?>
                    <p>Delaware</p>
                <?php elseif( $lists->partner_individual_state ==  "FL" ): ?>
                    <p>Florida</p>
                <?php elseif( $lists->partner_individual_state ==  "GA" ): ?>
                    <p>Georgia</p>
                <?php elseif( $lists->partner_individual_state ==  "GU" ): ?>
                    <p>Guam</p>
                <?php elseif( $lists->partner_individual_state ==  "HI" ): ?>
                    <p>Hawaii</p>
                <?php elseif( $lists->partner_individual_state ==  "IA" ): ?>
                    <p>Iowa</p>
                <?php elseif( $lists->partner_individual_state ==  "ID" ): ?>
                    <p>Idaho</p>
                <?php elseif( $lists->partner_individual_state ==  "IL" ): ?>
                    <p>Illinois</p>
                <?php elseif( $lists->partner_individual_state ==  "IN" ): ?>
                    <p>Indiana</p>
                <?php elseif( $lists->partner_individual_state ==  "KS" ): ?>
                    <p>Kansas</p>
                <?php elseif( $lists->partner_individual_state ==  "KY" ): ?>
                    <p>Kentucky</p>
                <?php elseif( $lists->partner_individual_state ==  "LA" ): ?>
                    <p>Louisiana</p>
                <?php elseif( $lists->partner_individual_state ==  "MA" ): ?>
                    <p>Massachusetts</p>
                <?php elseif( $lists->partner_individual_state ==  "MD" ): ?>
                    <p>Maryland</p>
                <?php elseif( $lists->partner_individual_state ==  "ME" ): ?>
                    <p>Maine</p>
                <?php elseif( $lists->partner_individual_state ==  "MI" ): ?>
                    <p>Michigan</p>
                <?php elseif( $lists->partner_individual_state ==  "MN" ): ?>
                    <p>Mississippi</p>
                <?php elseif( $lists->partner_individual_state ==  "MO" ): ?>
                    <p>Missouri</p>
                <?php elseif( $lists->partner_individual_state ==  "MT" ): ?>
                    <p>Montana</p>
                <?php elseif( $lists->partner_individual_state ==  "NC" ): ?>
                    <p>North Carolina</p>
                <?php elseif( $lists->partner_individual_state ==  "ND" ): ?>
                    <p>North Dakota</p>
                <?php elseif( $lists->partner_individual_state ==  "NE" ): ?>
                    <p>Nebraska</p>
                <?php elseif( $lists->partner_individual_state ==  "NH" ): ?>
                    <p>New Hampshire</p>
                <?php elseif( $lists->partner_individual_state ==  "NJ" ): ?>
                    <p>New Jersey</p>
                <?php elseif( $lists->partner_individual_state ==  "NM" ): ?>
                    <p>New Mexico</p>
                <?php elseif( $lists->partner_individual_state ==  "NV" ): ?>
                    <p>Nevada</p>
                <?php elseif( $lists->partner_individual_state ==  "NY" ): ?>
                    <p>New York</p>
                <?php elseif( $lists->partner_individual_state ==  "OH" ): ?>
                    <p>Ohio</p>
                <?php elseif( $lists->partner_individual_state ==  "OK" ): ?>
                    <p>Oklahoma</p>
                <?php elseif( $lists->partner_individual_state ==  "OR" ): ?>
                    <p>Oregon</p>
                <?php elseif( $lists->partner_individual_state ==  "PA" ): ?>
                    <p>Pennsylvania</p>
                <?php elseif( $lists->partner_individual_state ==  "PR" ): ?>
                    <p>Puerto Rico</p>
                <?php elseif( $lists->partner_individual_state ==  "RI" ): ?>
                    <p>Rhode Island</p>
                <?php elseif( $lists->partner_individual_state ==  "RI" ): ?>
                    <p>South Carolina</p>
                <?php elseif( $lists->partner_individual_state ==  "SD" ): ?>
                    <p>South Dakota</p>
                <?php elseif( $lists->partner_individual_state ==  "TN" ): ?>
                    <p>Tennessee</p>
                <?php elseif( $lists->partner_individual_state ==  "TX" ): ?>
                    <p>Texas</p>
                <?php elseif( $lists->partner_individual_state ==  "UT" ): ?>
                    <p>Utah</p>
                <?php elseif( $lists->partner_individual_state ==  "VA" ): ?>
                    <p>Virginia</p>
                <?php elseif( $lists->partner_individual_state ==  "VI" ): ?>
                    <p>Virgin Islands</p>
                <?php elseif( $lists->partner_individual_state ==  "VT" ): ?>
                    <p>Vermont</p>
                <?php elseif( $lists->partner_individual_state ==  "WA" ): ?>
                    <p>Washington</p>
                <?php elseif( $lists->partner_individual_state ==  "WI" ): ?>
                    <p>Wisconsin</p>
                <?php elseif( $lists->partner_individual_state ==  "WV" ): ?>
                    <p>West Virginia</p>
                <?php elseif( $lists->partner_individual_state ==  "WY" ): ?>
                    <p>Wyoming</p>
                <?php endif; ?>
            </div>
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p><?php echo e($lists->partner_individual_zip_code); ?></p>
            </div>
            <div class="form-btn-flex-between pt-2">
                <a href="<?php echo e(url('investor-list')); ?>" class="form-cancel-btn">Home</a>
                <a href="<?php echo e(url('new-partner-registration')); ?>" class="form-submit-btn">Add Investor</a>
             </div>
        </div>
    </div>  
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/newregistration/investor-view.blade.php ENDPATH**/ ?>