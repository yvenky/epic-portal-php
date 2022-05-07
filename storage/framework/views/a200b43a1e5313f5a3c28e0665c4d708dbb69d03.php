

<?php $__env->startSection('main-content'); ?>

<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading">
            <h6>Investor Invidual Registration</h6>
        </div>
        <form id="new-partner-invidual-registration-form" action="<?php echo e(url('new-partner-registration-submit')); ?>" method="POST" accept-charset="UTF-8">
           <?php echo e(csrf_field()); ?>

            <div class="step-wrapper">
                <span class="step">Your Details</span>
                <span class="step">Your Spouse Details</span>
                <span class="step">Address</span>
            </div>
            <div class="tab">
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-6">                                                 
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="partner_individual_first_name">First Name</label>
                                    <input type="text" class="form-control" name="partner_individual_first_name" id="partner_individual_first_name">
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="partner_individual_last_name">Last Name</label>
                                    <input type="text" class="form-control" name="partner_individual_last_name" id="partner_individual_last_name">
                                </fieldset>
                            </div>
                        </div>                                               
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_employment_status">Employment Status</label>
                                <select name="partner_individual_employment_status" class="form-select select-dropdown-obj select2" id="partner_individual_employment_status" aria-label="Default select example">
                                    <option value="">Please Select</option>
                                    <option value="SE">Self Employed</option>
                                    <option value="W2">W2</option>
                                    <option value="HM">Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_household_income">Household Income</label>
                                <select name="partner_individual_household_income" class="form-select select-dropdown-obj select2" id="partner_individual_household_income" aria-label="Default select example">
                                    <option value="">Please Select</option>
                                    <option value="0">Upto 100000</option>
                                    <option value="1">100000 to 200000</option>
                                    <option value="2">200K to 300K</option>
                                    <option value="3">300K to 400K</option>
                                    <option value="4">400K to 500K</option>
                                    <option value="5">More Than 500K</option>
                                </select>
                            </div>        
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_email_address">Email Address</label>
                                <input type="text" class="form-control required" name="partner_individual_email_address" id="partner_individual_email_address">
                            </div>
                        </div>
                    </div>
                </div>
            </div>                      
            <div class="tab">
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_first_name">Spouse First Name</label>
                                <input type="text" class="form-control" placeholder="" name="partner_individual_spouse_first_name" id="partner_individual_spouse_first_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_last_name">Spouse Last Name</label>
                                <input type="text" class="form-control" name="partner_individual_spouse_last_name" id="partner_individual_spouse_last_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_employment_status_spouse">Employment Status</label>
                                <select name="partner_individual_employment_status_spouse" class="form-select select-dropdown-obj" id="partner_individual_employment_status_spouse"  aria-label="Default select example">
                                    <option value="">Please Select</option>
                                    <option value="SE">Self Employed</option>
                                    <option value="W2">W2</option>
                                    <option value="HM">Home Maker</option> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_email_address">Email Address</label>
                                <input type="text" class="form-control" name="partner_individual_spouse_email_address" id="partner_individual_spouse_email_address">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab">
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_street_1">Street</label>
                                <input type="text" class="form-control" name="partner_individual_street" id="partner_individual_street_1">
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_city">City</label>
                                <input type="text" class="form-control" name="partner_individual_city" id="partner_individual_city">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_state">State</label>
                                <select name="partner_individual_state" class="form-select select2 select-matcher-obj" id="partner_individual_state"  data-select2-id="partner_individual_state_select"  aria-label="Default select example">
                                    <optgroup label="Please Select State" data-select2-id="partner_individual_state_select">
                                        <option value="">Please Select</option>
                                        <option value="AA">Armed Forces America</option>
                                        <option value="AE">Armed Forces</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AP">Armed Forces Pacific</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DC">Washington DC</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="GU">Guam</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="IA">Iowa</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MD">Maryland</option>
                                        <option value="ME">Maine</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MT">Montana</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NY">New York</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VA">Virginia</option>
                                        <option value="VI">Virgin Islands</option>
                                        <option value="VT">Vermont</option>
                                        <option value="WA">Washington</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                </select>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_zip_code">Zip Code</label>
                                <input type="text" class="form-control"  name="partner_individual_zip_code" id="partner_individual_zip_code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-content pt-0">
                <div class="form-btn-flex-between">
                    <div class="form-left-btn">
                        <button type="button" class="previous form-prev-btn">Previous</button>
                    </div>
                    <div class="form-right-btn">
                        <button type="button" class="next form-next-btn" id="step-form-next-btn">Next</button>
                        <button type="button" class="submit form-next-btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/investor/investor-registration.blade.php ENDPATH**/ ?>