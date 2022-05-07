

<?php $__env->startSection('main-content'); ?>
<!--// Main Area Start //-->
<section class="panel-wrapper panel-center">
    <?php if(Session::has('success-message')): ?> 
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success-message')); ?>

      </div>
     <?php endif; ?> 
    <div class="form-wrapper">
        <div class="form-heading">
            <h6>New Partner Entity Registration</h6>
        </div>
        <form action="<?php echo e(url('entity-submit')); ?>" method="POST" id="add-new-entity-partner-form">
            <?php echo csrf_field(); ?>
            <div class="form-content pb-0">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_name">Entity Name</label>
                            <input type="text" class="form-control" name="add_partner_entity_name" id="add_partner_entity_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_ein">EIN</label>
                            <input type="text" class="form-control" name="add_partner_entity_ein" id="add_partner_entity_ein">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="add_partner_managing_member_1">Managing Member 1</label>
                                <select name="add_partner_managing_member_1" class="form-select select-matcher-obj select2" id="add_partner_managing_member_1_select"  data-select2-id="managing-member-1_select"  aria-label="Default select example">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-1_select">
                                    <option value="">Please Select</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($user->partner_individual_first_name.' '.$user->partner_individual_last_name); ?>"><?php echo e($user->partner_individual_first_name." ".$user->partner_individual_last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 2</label>
                            <select name="add_partner_managing_member_2" class="form-select select-matcher-obj select2" id="add_partner_managing_member_2_select"  data-select2-id="managing-member-2_select"  aria-label="Default select example">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-2_select">
                                    <option value="">Please Select</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($user->partner_individual_first_name.' '.$user->partner_individual_last_name); ?>"><?php echo e($user->partner_individual_first_name." ".$user->partner_individual_last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_docs">Entity Docs</label>
                            <input type="text" class="form-control" name="add_partner_entity_docs" id="add_partner_entity_docs">
                        </div>
                    </div>
                </div>                                
            </div>
            <div class="form-heading pt-0">
                <h6>Address</h6>
            </div>
            <div class="form-content">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_street">Street</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_street" id="add_partner_entity_address_street">
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_city">City</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_city" id="add_partner_entity_address_city">
                        </div>
                    </div>
                    <div class="col-lg-6">                          
                        <div class="form-flex-item-box order-error-select">
                            <label for="add_partner_entity_address_state">State</label>
                                <select name="add_partner_entity_address_state" class="form-select select2 select-matcher-obj" id="add_partner_entity_address_state"  data-select2-id="add_partner_entity_address_state_select"  aria-label="Default select example">
                                <optgroup label="Please Select State" data-select2-id="add_partner_entity_address_state_select">
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
                        <div class="form-flex-item-box mb-0">
                            <label for="add_partner_entity_address_zipcode">Zip Code</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_zipcode" id="add_partner_entity_address_zipcode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-content pt-0">
                <div class="form-btn-flex-between">
                    <button type="button" class="form-cancel-btn"><a href="<?php echo e(url()->previous()); ?>" style="color:black">Cancel</a></button>
                    <button type="submit" class="form-submit-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
 </section>
 
<!--// Main Area End //-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity/add-new-entry.blade.php ENDPATH**/ ?>