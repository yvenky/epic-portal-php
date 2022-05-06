

<?php $__env->startSection('main-content'); ?>
<!--// Main Area Start //-->
<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <?php if(Session::has('success-message-edit')): ?> 
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success-message-edit')); ?>

          </div>
         <?php endif; ?> 
        <div class="form-heading">
            <h6>Your Details</h6>
        </div>
        
        <form action="<?php echo e(url('investor-list-update/'.$lists->id)); ?>" method="POST" id="investor-edit-form-modal">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
                <div class="form-content pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="partner_individual_first_name">First Name</label>
                                    <input type="text" class="form-control" name="partner_individual_first_name" value="<?php echo e($lists->partner_individual_first_name); ?>" id="partner_individual_first_name">
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="partner_individual_last_name">Last Name</label>
                                    <input type="text" class="form-control" name="partner_individual_last_name" value="<?php echo e($lists->partner_individual_last_name); ?>" id="partner_individual_last_name">
                                </fieldset>
                            </div>
                        </div>                                               
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_employment_status">Employment Status</label>
                                <select name="partner_individual_employment_status" class="form-select" value="<?php echo e($lists->partner_individual_employment_status); ?>"aria-label="Default select example">
                                    <option value="SE" <?php echo e($lists->partner_individual_employment_status == "SE" ? 'selected': ''); ?>>Self Employed</option>
                                    <option value="W2" <?php echo e($lists->partner_individual_employment_status == "W2" ? 'selected': ''); ?>>W2</option>
                                    <option value="HM" <?php echo e($lists->partner_individual_employment_status == "HM" ? 'selected': ''); ?>>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_household_income">Household Income</label>
                                <select name="partner_individual_household_income" class="form-select" value="<?php echo e($lists->partner_individual_household_income); ?>" aria-label="Default select example">
                                    <option value="0"<?php echo e($lists->partner_individual_household_income == "0" ? 'selected': ''); ?>>Upto 100000</option>
                                    <option value="1"<?php echo e($lists->partner_individual_household_income == "1" ? 'selected': ''); ?>>100000 to 200000</option>
                                    <option value="2"<?php echo e($lists->partner_individual_household_income == "2" ? 'selected': ''); ?>>200K to 300K</option>
                                    <option value="3"<?php echo e($lists->partner_individual_household_income == "3" ? 'selected': ''); ?>>300K to 400K</option>
                                    <option value="4"<?php echo e($lists->partner_individual_household_income == "4" ? 'selected': ''); ?>>400K to 500K</option>
                                    <option value="5"<?php echo e($lists->partner_individual_household_income == "5" ? 'selected': ''); ?>>More Than 500K</option>
                                </select>
                            </div>        
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_email_address">Email Address</label>
                                <input type="text" class="form-control required" name="partner_individual_email_address" value="<?php echo e($lists->partner_individual_email_address); ?>" id="partner_individual_email_address">
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="form-heading top-border">
                    <h6>Your Spouse Details</h6>
                </div>
                <div class="form-content mt-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_first_name">Spouse First Name</label>
                                <input type="text" class="form-control" placeholder="" name="partner_individual_spouse_first_name" value="<?php echo e($lists->partner_individual_spouse_first_name); ?>" id="partner_individual_spouse_first_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_last_name">Spouse Last Name</label>
                                <input type="text" class="form-control" name="partner_individual_spouse_last_name" value="<?php echo e($lists->partner_individual_spouse_last_name); ?>" id="partner_individual_spouse_last_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_employment_status_spouse">Employment Status</label>
                                <select name="partner_individual_employment_status_spouse" class="form-select" value="<?php echo e($lists->partner_individual_employment_status_spouse); ?>" aria-label="Default select example">
                                    <option value="SE" <?php echo e($lists->partner_individual_employment_status_spouse  == "SE" ? 'selected': ''); ?>>Self Employed</option>
                                    <option value="W2" <?php echo e($lists->partner_individual_employment_status_spouse  == "W2" ? 'selected': ''); ?>>W2</option>
                                    <option value="HM" <?php echo e($lists->partner_individual_employment_status_spouse  == "HM" ? 'selected': ''); ?>>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_email_address">Spouse Email Address</label>
                                <input type="text" class="form-control" name="partner_individual_spouse_email_address" value="<?php echo e($lists->partner_individual_spouse_email_address); ?>" id="partner_individual_spouse_email_address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-heading top-border">
                    <h6>Address</h6>
                </div>
                <div class="form-content mt-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_street_1">Street</label>
                                <input type="text" class="form-control" name="partner_individual_street" value="<?php echo e($lists->partner_individual_street); ?>" id="partner_individual_street">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_city">City</label>
                                <input type="text" class="form-control" name="partner_individual_city" value="<?php echo e($lists->partner_individual_city); ?>" id="partner_individual_city">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_state">State</label>
                                <select name="partner_individual_state" class="form-select select2 select-matcher-obj" id="partner_individual_state"  data-select2-id="partner_individual_state_select"  aria-label="Default select example">
                                    <optgroup label="Please Select State" data-select2-id="partner_individual_state_select">
                                        <option value="AA" <?php echo e($lists->partner_individual_state == "AA" ? 'selected': ''); ?>>Armed Forces America</option>
                                        <option value="AE" <?php echo e($lists->partner_individual_state == "AE" ? 'selected': ''); ?>>Armed Forces</option>
                                        <option value="AK" <?php echo e($lists->partner_individual_state  == "AK" ? 'selected': ''); ?>>Alaska</option>
                                        <option value="AL" <?php echo e($lists->partner_individual_state  == "AL" ? 'selected': ''); ?>>Alabama</option>
                                        <option value="AP" <?php echo e($lists->partner_individual_state  == "AP" ? 'selected': ''); ?>>Armed Forces Pacific</option>
                                        <option value="AR" <?php echo e($lists->partner_individual_state  == "AR" ? 'selected': ''); ?>>Arkansas</option>
                                        <option value="AZ" <?php echo e($lists->partner_individual_state  == "AZ" ? 'selected': ''); ?>>Arizona</option>
                                        <option value="CA" <?php echo e($lists->partner_individual_state == "CA" ? 'selected': ''); ?>>California</option>
                                        <option value="CO" <?php echo e($lists->partner_individual_state  == "CO" ? 'selected': ''); ?>>Colorado</option>
                                        <option value="CT" <?php echo e($lists->partner_individual_state  == "CT" ? 'selected': ''); ?>>Connecticut</option>
                                        <option value="DC" <?php echo e($lists->partner_individual_state  == "DC" ? 'selected': ''); ?>>Washington DC</option>
                                        <option value="DE" <?php echo e($lists->partner_individual_state  == "DE" ? 'selected': ''); ?>>Delaware</option>
                                        <option value="FL" <?php echo e($lists->partner_individual_state  == "FL" ? 'selected': ''); ?>>Florida</option>
                                        <option value="GA" <?php echo e($lists->partner_individual_state == "GA" ? 'selected': ''); ?>>Georgia</option>
                                        <option value="GU" <?php echo e($lists->partner_individual_state == "GU" ? 'selected': ''); ?>>Guam</option>
                                        <option value="HI" <?php echo e($lists->partner_individual_state == "HI" ? 'selected': ''); ?>>Hawaii</option>
                                        <option value="IA" <?php echo e($lists->partner_individual_state == "IA" ? 'selected': ''); ?>>Iowa</option>
                                        <option value="ID" <?php echo e($lists->partner_individual_state == "ID" ? 'selected': ''); ?>>Idaho</option>
                                        <option value="IL" <?php echo e($lists->partner_individual_state == "IL" ? 'selected': ''); ?>>Illinois</option>
                                        <option value="IN" <?php echo e($lists->partner_individual_state == "IN" ? 'selected': ''); ?>>Indiana</option>
                                        <option value="KS" <?php echo e($lists->partner_individual_state  == "KS" ? 'selected': ''); ?>>Kansas</option>
                                        <option value="KY" <?php echo e($lists->partner_individual_state  == "KY" ? 'selected': ''); ?>>Kentucky</option>
                                        <option value="LA" <?php echo e($lists->partner_individual_state  == "LA" ? 'selected': ''); ?>>Louisiana</option>
                                        <option value="MA" <?php echo e($lists->partner_individual_state  == "MA" ? 'selected': ''); ?>>Massachusetts</option>
                                        <option value="MD" <?php echo e($lists->partner_individual_state  == "MD" ? 'selected': ''); ?>>Maryland</option>
                                        <option value="ME" <?php echo e($lists->partner_individual_state == "ME" ? 'selected': ''); ?>>Maine</option>
                                        <option value="MI" <?php echo e($lists->partner_individual_state  == "MI" ? 'selected': ''); ?>>Michigan</option>
                                        <option value="MN" <?php echo e($lists->partner_individual_state  == "MN" ? 'selected': ''); ?>>Mississippi</option>
                                        <option value="MO" <?php echo e($lists->partner_individual_state  == "MO" ? 'selected': ''); ?>>Missouri</option>
                                        <option value="MS" <?php echo e($lists->partner_individual_state  == "MS" ? 'selected': ''); ?>>Mississippi</option>
                                        <option value="MT" <?php echo e($lists->partner_individual_state  == "MT" ? 'selected': ''); ?>>Montana</option>
                                        <option value="NC" <?php echo e($lists->partner_individual_state == "NC" ? 'selected': ''); ?>>North Carolina</option>
                                        <option value="ND" <?php echo e($lists->partner_individual_state == "ND" ? 'selected': ''); ?>>North Dakota</option>
                                        <option value="NE" <?php echo e($lists->partner_individual_state == "NE" ? 'selected': ''); ?>>Nebraska</option>
                                        <option value="NH" <?php echo e($lists->partner_individual_state == "NH" ? 'selected': ''); ?>>New Hampshire</option>
                                        <option value="NJ" <?php echo e($lists->partner_individual_state == "NJ" ? 'selected': ''); ?>>New Jersey</option>
                                        <option value="NM" <?php echo e($lists->partner_individual_state == "NM" ? 'selected': ''); ?>>New Mexico</option>
                                        <option value="NV" <?php echo e($lists->partner_individual_state  == "NV" ? 'selected': ''); ?>>Nevada</option>
                                        <option value="NY" <?php echo e($lists->partner_individual_state  == "NY" ? 'selected': ''); ?>>New York</option>
                                        <option value="OH" <?php echo e($lists->partner_individual_state  == "OH" ? 'selected': ''); ?>>Ohio</option>
                                        <option value="OK" <?php echo e($lists->partner_individual_state  == "OK" ? 'selected': ''); ?>>Oklahoma</option>
                                        <option value="OR" <?php echo e($lists->partner_individual_state  == "OR" ? 'selected': ''); ?>>Oregon</option>
                                        <option value="PA" <?php echo e($lists->partner_individual_state  == "PA" ? 'selected': ''); ?>>Pennsylvania</option>
                                        <option value="PR" <?php echo e($lists->partner_individual_state == "PR" ? 'selected': ''); ?>>Puerto Rico</option>
                                        <option value="RI" <?php echo e($lists->partner_individual_state  == "RI" ? 'selected': ''); ?>>Rhode Island</option>
                                        <option value="SC" <?php echo e($lists->partner_individual_state  == "SC" ? 'selected': ''); ?>>South Carolina</option>
                                        <option value="SD" <?php echo e($lists->partner_individual_state  == "SD" ? 'selected': ''); ?>>South Dakota</option>
                                        <option value="TN" <?php echo e($lists->partner_individual_state  == "TN" ? 'selected': ''); ?>>Tennessee</option>
                                        <option value="TX" <?php echo e($lists->partner_individual_state  == "TX" ? 'selected': ''); ?>>Texas</option>
                                        <option value="UT" <?php echo e($lists->partner_individual_state == "UT" ? 'selected': ''); ?>>Utah</option>
                                        <option value="VA" <?php echo e($lists->partner_individual_state == "VA" ? 'selected': ''); ?>>Virginia</option>
                                        <option value="VI" <?php echo e($lists->partner_individual_state == "VI" ? 'selected': ''); ?>>Virgin Islands</option>
                                        <option value="VT" <?php echo e($lists->partner_individual_state == "VT" ? 'selected': ''); ?>>Vermont</option>
                                        <option value="WA" <?php echo e($lists->partner_individual_state == "WA" ? 'selected': ''); ?>>Washington</option>
                                        <option value="WI" <?php echo e($lists->partner_individual_state == "WI" ? 'selected': ''); ?>>Wisconsin</option>
                                        <option value="WV" <?php echo e($lists->partner_individual_state == "WV" ? 'selected': ''); ?>>West Virginia</option>
                                        <option value="WY" <?php echo e($lists->partner_individual_state == "WY" ? 'selected': ''); ?>>Wyoming</option>
                                    </optgroup> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_zip_code">Zip Code</label>
                                <input type="text" class="form-control"  name="partner_individual_zip_code" value="<?php echo e($lists->partner_individual_zip_code); ?>" id="partner_individual_zip_code">
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-btn-flex-between">
                            <a href="<?php echo e(url()->previous()); ?>" class="form-cancel-btn">Cancel</a>
                            <button type="submit" class="form-submit-btn">Submit</button>
                        </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    
</section>

<!--// Main Area end //-->
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/newregistration/investor-list-edit.blade.php ENDPATH**/ ?>