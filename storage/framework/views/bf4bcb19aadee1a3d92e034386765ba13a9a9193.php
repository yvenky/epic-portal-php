

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
        <!-- <?php echo e($lists->SPOUSE_EMPLOYMENT_STATUS); ?> -->
        <form action="<?php echo e(url('investor-update/'.$lists->ID)); ?>" method="POST" id="investor-edit-form-modal">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
                <div class="form-content pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="FIRST_NAME">First Name</label>
                                    <input type="text" class="form-control" name="FIRST_NAME" value="<?php echo e($lists->FIRST_NAME); ?>" id="FIRST_NAME">
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="LAST_NAME">Last Name</label>
                                    <input type="text" class="form-control" name="LAST_NAME" value="<?php echo e($lists->LAST_NAME); ?>" id="LAST_NAME">
                                </fieldset>
                            </div>
                        </div>                                               
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="EMPLOYMENT_STATUS">Employment Status</label>
                                <select name="EMPLOYMENT_STATUS" class="form-select" value="<?php echo e($lists->EMPLOYMENT_STATUS); ?>"aria-label="Default select example">
                                    <option value="SE" <?php echo e($lists->EMPLOYMENT_STATUS == "SE" ? 'selected': ''); ?>>Self Employed</option>
                                    <option value="W2" <?php echo e($lists->EMPLOYMENT_STATUS == "W2" ? 'selected': ''); ?>>W2</option>
                                    <option value="HM" <?php echo e($lists->EMPLOYMENT_STATUS == "HM" ? 'selected': ''); ?>>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="HOUSEHOLD_INCOME">Household Income</label>
                                <select name="HOUSEHOLD_INCOME" class="form-select" value="<?php echo e($lists->HOUSEHOLD_INCOME); ?>" aria-label="Default select example">
                                    <option value="0"<?php echo e($lists->HOUSEHOLD_INCOME == "0" ? 'selected': ''); ?>>Upto 100000</option>
                                    <option value="1"<?php echo e($lists->HOUSEHOLD_INCOME == "1" ? 'selected': ''); ?>>100000 to 200000</option>
                                    <option value="2"<?php echo e($lists->HOUSEHOLD_INCOME == "2" ? 'selected': ''); ?>>200K to 300K</option>
                                    <option value="3"<?php echo e($lists->HOUSEHOLD_INCOME == "3" ? 'selected': ''); ?>>300K to 400K</option>
                                    <option value="4"<?php echo e($lists->HOUSEHOLD_INCOME == "4" ? 'selected': ''); ?>>400K to 500K</option>
                                    <option value="5"<?php echo e($lists->HOUSEHOLD_INCOME == "5" ? 'selected': ''); ?>>More Than 500K</option>
                                </select>
                            </div>        
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="EMAIL_ADDRESS">Email Address</label>
                                <input type="text" class="form-control required" name="EMAIL_ADDRESS" value="<?php echo e($lists->EMAIL_ADDRESS); ?>" id="EMAIL_ADDRESS">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="PHONE_NUMBER">Phone Number</label>
                                <input type="text" class="form-control required" name="PHONE_NUMBER" value="<?php echo e($lists->PHONE_NUMBER); ?>" id="PHONE_NUMBER">
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
                                <label for="SPOUSE_FIRSTNAME">Spouse First Name</label>
                                <input type="text" class="form-control" name="SPOUSE_FIRSTNAME" value="<?php echo e($lists->SPOUSE_FIRSTNAME); ?>" id="SPOUSE_FIRSTNAME">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_LASTNAME">Spouse Last Name</label>
                                <input type="text" class="form-control" name="SPOUSE_LASTNAME" value="<?php echo e($lists->SPOUSE_LASTNAME); ?>" id="SPOUSE_LASTNAME">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_EMPLOYMENT_STATUS">Employment Status</label>
                                <select name="SPOUSE_EMPLOYMENT_STATUS" class="form-select" value="<?php echo e($lists->SPOUSE_EMPLOYMENT_STATUS); ?>" aria-label="Default select example">
                                    <option value="SE" <?php echo e($lists->SPOUSE_EMPLOYMENT_STATUS  == "SE" ? 'selected': ''); ?>>Self Employed</option>
                                    <option value="W2" <?php echo e($lists->SPOUSE_EMPLOYMENT_STATUS  == "W2" ? 'selected': ''); ?>>W2</option>
                                    <option value="HM" <?php echo e($lists->SPOUSE_EMPLOYMENT_STATUS  == "HM" ? 'selected': ''); ?>>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_EMAIL">Spouse Email Address</label>
                                <input type="text" class="form-control" name="SPOUSE_EMAIL" value="<?php echo e($lists->SPOUSE_EMAIL); ?>" id="SPOUSE_EMAIL">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_PHONE_NO">Spouse Phone Number</label>
                                <input type="text" class="form-control required" name="SPOUSE_PHONE_NO" value="<?php echo e($lists->SPOUSE_PHONE_NO); ?>" id="SPOUSE_PHONE_NO">
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
                                <input type="text" class="form-control" name="partner_individual_street" value="<?php echo e($lists->address->STREET_1); ?>" id="partner_individual_street">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_city">City</label>
                                <input type="text" class="form-control" name="partner_individual_city" value="<?php echo e($lists->address->CITY); ?>" id="partner_individual_city">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_state">State</label>
                                <select name="partner_individual_state" class="form-select select2 select-matcher-obj" id="partner_individual_state"  data-select2-id="partner_individual_state_select"  aria-label="Default select example">
                                    <optgroup label="Please Select State" data-select2-id="partner_individual_state_select">
                                        <option value="AA" <?php echo e($lists->address->STATE == "AA" ? 'selected': ''); ?>>Armed Forces America</option>
                                        <option value="AE" <?php echo e($lists->address->STATE == "AE" ? 'selected': ''); ?>>Armed Forces</option>
                                        <option value="AK" <?php echo e($lists->address->STATE  == "AK" ? 'selected': ''); ?>>Alaska</option>
                                        <option value="AL" <?php echo e($lists->address->STATE  == "AL" ? 'selected': ''); ?>>Alabama</option>
                                        <option value="AP" <?php echo e($lists->address->STATE  == "AP" ? 'selected': ''); ?>>Armed Forces Pacific</option>
                                        <option value="AR" <?php echo e($lists->address->STATE  == "AR" ? 'selected': ''); ?>>Arkansas</option>
                                        <option value="AZ" <?php echo e($lists->address->STATE  == "AZ" ? 'selected': ''); ?>>Arizona</option>
                                        <option value="CA" <?php echo e($lists->address->STATE == "CA" ? 'selected': ''); ?>>California</option>
                                        <option value="CO" <?php echo e($lists->address->STATE  == "CO" ? 'selected': ''); ?>>Colorado</option>
                                        <option value="CT" <?php echo e($lists->address->STATE  == "CT" ? 'selected': ''); ?>>Connecticut</option>
                                        <option value="DC" <?php echo e($lists->address->STATE  == "DC" ? 'selected': ''); ?>>Washington DC</option>
                                        <option value="DE" <?php echo e($lists->address->STATE  == "DE" ? 'selected': ''); ?>>Delaware</option>
                                        <option value="FL" <?php echo e($lists->address->STATE  == "FL" ? 'selected': ''); ?>>Florida</option>
                                        <option value="GA" <?php echo e($lists->address->STATE == "GA" ? 'selected': ''); ?>>Georgia</option>
                                        <option value="GU" <?php echo e($lists->address->STATE == "GU" ? 'selected': ''); ?>>Guam</option>
                                        <option value="HI" <?php echo e($lists->address->STATE == "HI" ? 'selected': ''); ?>>Hawaii</option>
                                        <option value="IA" <?php echo e($lists->address->STATE == "IA" ? 'selected': ''); ?>>Iowa</option>
                                        <option value="ID" <?php echo e($lists->address->STATE == "ID" ? 'selected': ''); ?>>Idaho</option>
                                        <option value="IL" <?php echo e($lists->address->STATE == "IL" ? 'selected': ''); ?>>Illinois</option>
                                        <option value="IN" <?php echo e($lists->address->STATE == "IN" ? 'selected': ''); ?>>Indiana</option>
                                        <option value="KS" <?php echo e($lists->address->STATE  == "KS" ? 'selected': ''); ?>>Kansas</option>
                                        <option value="KY" <?php echo e($lists->address->STATE  == "KY" ? 'selected': ''); ?>>Kentucky</option>
                                        <option value="LA" <?php echo e($lists->address->STATE  == "LA" ? 'selected': ''); ?>>Louisiana</option>
                                        <option value="MA" <?php echo e($lists->address->STATE  == "MA" ? 'selected': ''); ?>>Massachusetts</option>
                                        <option value="MD" <?php echo e($lists->address->STATE  == "MD" ? 'selected': ''); ?>>Maryland</option>
                                        <option value="ME" <?php echo e($lists->address->STATE == "ME" ? 'selected': ''); ?>>Maine</option>
                                        <option value="MI" <?php echo e($lists->address->STATE  == "MI" ? 'selected': ''); ?>>Michigan</option>
                                        <option value="MN" <?php echo e($lists->address->STATE  == "MN" ? 'selected': ''); ?>>Mississippi</option>
                                        <option value="MO" <?php echo e($lists->address->STATE  == "MO" ? 'selected': ''); ?>>Missouri</option>
                                        <option value="MS" <?php echo e($lists->address->STATE  == "MS" ? 'selected': ''); ?>>Mississippi</option>
                                        <option value="MT" <?php echo e($lists->address->STATE  == "MT" ? 'selected': ''); ?>>Montana</option>
                                        <option value="NC" <?php echo e($lists->address->STATE == "NC" ? 'selected': ''); ?>>North Carolina</option>
                                        <option value="ND" <?php echo e($lists->address->STATE == "ND" ? 'selected': ''); ?>>North Dakota</option>
                                        <option value="NE" <?php echo e($lists->address->STATE == "NE" ? 'selected': ''); ?>>Nebraska</option>
                                        <option value="NH" <?php echo e($lists->address->STATE == "NH" ? 'selected': ''); ?>>New Hampshire</option>
                                        <option value="NJ" <?php echo e($lists->address->STATE == "NJ" ? 'selected': ''); ?>>New Jersey</option>
                                        <option value="NM" <?php echo e($lists->address->STATE == "NM" ? 'selected': ''); ?>>New Mexico</option>
                                        <option value="NV" <?php echo e($lists->address->STATE  == "NV" ? 'selected': ''); ?>>Nevada</option>
                                        <option value="NY" <?php echo e($lists->address->STATE  == "NY" ? 'selected': ''); ?>>New York</option>
                                        <option value="OH" <?php echo e($lists->address->STATE  == "OH" ? 'selected': ''); ?>>Ohio</option>
                                        <option value="OK" <?php echo e($lists->address->STATE  == "OK" ? 'selected': ''); ?>>Oklahoma</option>
                                        <option value="OR" <?php echo e($lists->address->STATE  == "OR" ? 'selected': ''); ?>>Oregon</option>
                                        <option value="PA" <?php echo e($lists->address->STATE  == "PA" ? 'selected': ''); ?>>Pennsylvania</option>
                                        <option value="PR" <?php echo e($lists->address->STATE == "PR" ? 'selected': ''); ?>>Puerto Rico</option>
                                        <option value="RI" <?php echo e($lists->address->STATE  == "RI" ? 'selected': ''); ?>>Rhode Island</option>
                                        <option value="SC" <?php echo e($lists->address->STATE  == "SC" ? 'selected': ''); ?>>South Carolina</option>
                                        <option value="SD" <?php echo e($lists->address->STATE  == "SD" ? 'selected': ''); ?>>South Dakota</option>
                                        <option value="TN" <?php echo e($lists->address->STATE  == "TN" ? 'selected': ''); ?>>Tennessee</option>
                                        <option value="TX" <?php echo e($lists->address->STATE  == "TX" ? 'selected': ''); ?>>Texas</option>
                                        <option value="UT" <?php echo e($lists->address->STATE == "UT" ? 'selected': ''); ?>>Utah</option>
                                        <option value="VA" <?php echo e($lists->address->STATE == "VA" ? 'selected': ''); ?>>Virginia</option>
                                        <option value="VI" <?php echo e($lists->address->STATE == "VI" ? 'selected': ''); ?>>Virgin Islands</option>
                                        <option value="VT" <?php echo e($lists->address->STATE == "VT" ? 'selected': ''); ?>>Vermont</option>
                                        <option value="WA" <?php echo e($lists->address->STATE == "WA" ? 'selected': ''); ?>>Washington</option>
                                        <option value="WI" <?php echo e($lists->address->STATE == "WI" ? 'selected': ''); ?>>Wisconsin</option>
                                        <option value="WV" <?php echo e($lists->address->STATE == "WV" ? 'selected': ''); ?>>West Virginia</option>
                                        <option value="WY" <?php echo e($lists->address->STATE == "WY" ? 'selected': ''); ?>>Wyoming</option>
                                    </optgroup> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_zip_code">Zip Code</label>
                                <input type="text" class="form-control"  name="partner_individual_zip_code" value="<?php echo e($lists->address->ZIP_CODE); ?>" id="partner_individual_zip_code">
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
    
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/investor/investor-edit.blade.php ENDPATH**/ ?>