

<?php $__env->startSection('main-content'); ?>


<section class="panel-wrapper panel-center">
   <div class="form-wrapper">
      <?php if(Session::has('success-message-edit')): ?> 
      <div class="alert alert-success" role="alert">
          <?php echo e(Session::get('success-message-edit')); ?>

        </div>
       <?php endif; ?> 
   <div class="form-wrapper">
        <div class="form-heading">
            <h6>Edit Entity</h6>
        </div>
        <form action="<?php echo e(url('entity-update/'.$lists->id)); ?>" id="add-new-entity-partner-edit-form" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-content">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_name">Entity Name </label>
                            <input type="text" class="form-control" name="add_partner_entity_name" value="<?php echo e($lists->add_partner_entity_name); ?>" id="add_partner_entity_name">
                        </div>
                    </div>             
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 1</label>
                            <select class="form-control select2 select-matcher-obj" name="add_partner_managing_member_1" data-select2-id="managing-member-1-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-1-select">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($user->partner_individual_first_name.' '.$user->partner_individual_last_name); ?>" <?php echo e($user->partner_individual_first_name == $lists->add_partner_managing_member_2 ? "selected": ""); ?>  ><?php echo e($user->partner_individual_first_name." ".$user->partner_individual_last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 2</label>
                            <select class="form-control select2 select-matcher-obj"  name="add_partner_managing_member_2" data-select2-id="managing-member-2-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-2-select">  
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($user->partner_individual_first_name.' '.$user->partner_individual_last_name); ?>" <?php echo e($user->partner_individual_first_name == $lists->add_partner_managing_member_2 ? "selected": ""); ?>  ><?php echo e($user->partner_individual_first_name." ".$user->partner_individual_last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_ein">EIN</label>
                            <input type="text" class="form-control" name="add_partner_entity_ein" value="<?php echo e($lists->add_partner_entity_ein); ?>" id="add_partner_entity_ein">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_docs">Entity Docs</label>
                            <input type="text" class="form-control" name="add_partner_entity_docs" value="<?php echo e($lists->add_partner_entity_docs); ?>" id="add_partner_entity_docs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-heading pt-0">
                <h6>Address</h6>
            </div>  
            <div class="form-content">
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_street">Street</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_street" value="<?php echo e($lists->add_partner_entity_address_street); ?>" id="add_partner_entity_address_street">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_city">City</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_city" value="<?php echo e($lists->add_partner_entity_address_city); ?>" id="add_partner_entity_address_city">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="add_partner_entity_address_state">State</label>
                            <select name="add_partner_entity_address_state" value="<?php echo e($lists->add_partner_entity_address_state); ?>" class="form-select select2 select-matcher-obj" id="add_partner_entity_address_state_edit"  data-select2-id="add_partner_entity_address_state_edit_select"  aria-label="Default select example">
                                <optgroup label="Please Select State" data-select2-id="add_partner_entity_address_state_edit_select">
                                    <option value="AA" <?php echo e($lists->add_partner_entity_address_state == "AA" ? 'selected': ''); ?>>Armed Forces America</option>
                                    <option value="AE" <?php echo e($lists->add_partner_entity_address_state == "AE" ? 'selected': ''); ?>>Armed Forces</option>
                                    <option value="AK" <?php echo e($lists->add_partner_entity_address_state  == "AK" ? 'selected': ''); ?>>Alaska</option>
                                    <option value="AL" <?php echo e($lists->add_partner_entity_address_state  == "AL" ? 'selected': ''); ?>>Alabama</option>
                                    <option value="AP" <?php echo e($lists->add_partner_entity_address_state  == "AP" ? 'selected': ''); ?>>Armed Forces Pacific</option>
                                    <option value="AR" <?php echo e($lists->add_partner_entity_address_state  == "AR" ? 'selected': ''); ?>>Arkansas</option>
                                    <option value="AZ" <?php echo e($lists->add_partner_entity_address_state  == "AZ" ? 'selected': ''); ?>>Arizona</option>
                                    <option value="CA" <?php echo e($lists->add_partner_entity_address_state == "CA" ? 'selected': ''); ?>>California</option>
                                    <option value="CO" <?php echo e($lists->add_partner_entity_address_state  == "CO" ? 'selected': ''); ?>>Colorado</option>
                                    <option value="CT" <?php echo e($lists->add_partner_entity_address_state  == "CT" ? 'selected': ''); ?>>Connecticut</option>
                                    <option value="DC" <?php echo e($lists->add_partner_entity_address_state  == "DC" ? 'selected': ''); ?>>Washington DC</option>
                                    <option value="DE" <?php echo e($lists->add_partner_entity_address_state  == "DE" ? 'selected': ''); ?>>Delaware</option>
                                    <option value="FL" <?php echo e($lists->add_partner_entity_address_state  == "FL" ? 'selected': ''); ?>>Florida</option>
                                    <option value="GA" <?php echo e($lists->add_partner_entity_address_state == "GA" ? 'selected': ''); ?>>Georgia</option>
                                    <option value="GU" <?php echo e($lists->add_partner_entity_address_state == "GU" ? 'selected': ''); ?>>Guam</option>
                                    <option value="HI" <?php echo e($lists->add_partner_entity_address_state == "HI" ? 'selected': ''); ?>>Hawaii</option>
                                    <option value="IA" <?php echo e($lists->add_partner_entity_address_state == "IA" ? 'selected': ''); ?>>Iowa</option>
                                    <option value="ID" <?php echo e($lists->add_partner_entity_address_state == "ID" ? 'selected': ''); ?>>Idaho</option>
                                    <option value="IL" <?php echo e($lists->add_partner_entity_address_state == "IL" ? 'selected': ''); ?>>Illinois</option>
                                    <option value="IN" <?php echo e($lists->add_partner_entity_address_state == "IN" ? 'selected': ''); ?>>Indiana</option>
                                    <option value="KS" <?php echo e($lists->add_partner_entity_address_state  == "KS" ? 'selected': ''); ?>>Kansas</option>
                                    <option value="KY" <?php echo e($lists->add_partner_entity_address_state  == "KY" ? 'selected': ''); ?>>Kentucky</option>
                                    <option value="LA" <?php echo e($lists->add_partner_entity_address_state  == "LA" ? 'selected': ''); ?>>Louisiana</option>
                                    <option value="MA" <?php echo e($lists->add_partner_entity_address_state  == "MA" ? 'selected': ''); ?>>Massachusetts</option>
                                    <option value="MD" <?php echo e($lists->add_partner_entity_address_state  == "MD" ? 'selected': ''); ?>>Maryland</option>
                                    <option value="ME" <?php echo e($lists->add_partner_entity_address_state == "ME" ? 'selected': ''); ?>>Maine</option>
                                    <option value="MI" <?php echo e($lists->add_partner_entity_address_state  == "MI" ? 'selected': ''); ?>>Michigan</option>
                                    <option value="MN" <?php echo e($lists->add_partner_entity_address_state  == "MN" ? 'selected': ''); ?>>Mississippi</option>
                                    <option value="MO" <?php echo e($lists->add_partner_entity_address_state  == "MO" ? 'selected': ''); ?>>Missouri</option>
                                    <option value="MS" <?php echo e($lists->add_partner_entity_address_state  == "MS" ? 'selected': ''); ?>>Mississippi</option>
                                    <option value="MT" <?php echo e($lists->add_partner_entity_address_state  == "MT" ? 'selected': ''); ?>>Montana</option>
                                    <option value="NC" <?php echo e($lists->add_partner_entity_address_state == "NC" ? 'selected': ''); ?>>North Carolina</option>
                                    <option value="ND" <?php echo e($lists->add_partner_entity_address_state == "ND" ? 'selected': ''); ?>>North Dakota</option>
                                    <option value="NE" <?php echo e($lists->add_partner_entity_address_state == "NE" ? 'selected': ''); ?>>Nebraska</option>
                                    <option value="NH" <?php echo e($lists->add_partner_entity_address_state == "NH" ? 'selected': ''); ?>>New Hampshire</option>
                                    <option value="NJ" <?php echo e($lists->add_partner_entity_address_state == "NJ" ? 'selected': ''); ?>>New Jersey</option>
                                    <option value="NM" <?php echo e($lists->add_partner_entity_address_state == "NM" ? 'selected': ''); ?>>New Mexico</option>
                                    <option value="NV" <?php echo e($lists->add_partner_entity_address_state  == "NV" ? 'selected': ''); ?>>Nevada</option>
                                    <option value="NY" <?php echo e($lists->add_partner_entity_address_state  == "NY" ? 'selected': ''); ?>>New York</option>
                                    <option value="OH" <?php echo e($lists->add_partner_entity_address_state  == "OH" ? 'selected': ''); ?>>Ohio</option>
                                    <option value="OK" <?php echo e($lists->add_partner_entity_address_state  == "OK" ? 'selected': ''); ?>>Oklahoma</option>
                                    <option value="OR" <?php echo e($lists->add_partner_entity_address_state  == "OR" ? 'selected': ''); ?>>Oregon</option>
                                    <option value="PA" <?php echo e($lists->add_partner_entity_address_state  == "PA" ? 'selected': ''); ?>>Pennsylvania</option>
                                    <option value="PR" <?php echo e($lists->add_partner_entity_address_state == "PR" ? 'selected': ''); ?>>Puerto Rico</option>
                                    <option value="RI" <?php echo e($lists->add_partner_entity_address_state  == "RI" ? 'selected': ''); ?>>Rhode Island</option>
                                    <option value="SC" <?php echo e($lists->add_partner_entity_address_state  == "SC" ? 'selected': ''); ?>>South Carolina</option>
                                    <option value="SD" <?php echo e($lists->add_partner_entity_address_state  == "SD" ? 'selected': ''); ?>>South Dakota</option>
                                    <option value="TN" <?php echo e($lists->add_partner_entity_address_state  == "TN" ? 'selected': ''); ?>>Tennessee</option>
                                    <option value="TX" <?php echo e($lists->add_partner_entity_address_state  == "TX" ? 'selected': ''); ?>>Texas</option>
                                    <option value="UT" <?php echo e($lists->add_partner_entity_address_state == "UT" ? 'selected': ''); ?>>Utah</option>
                                    <option value="VA" <?php echo e($lists->add_partner_entity_address_state == "VA" ? 'selected': ''); ?>>Virginia</option>
                                    <option value="VI" <?php echo e($lists->add_partner_entity_address_state == "VI" ? 'selected': ''); ?>>Virgin Islands</option>
                                    <option value="VT" <?php echo e($lists->add_partner_entity_address_state == "VT" ? 'selected': ''); ?>>Vermont</option>
                                    <option value="WA" <?php echo e($lists->add_partner_entity_address_state == "WA" ? 'selected': ''); ?>>Washington</option>
                                    <option value="WI" <?php echo e($lists->add_partner_entity_address_state == "WI" ? 'selected': ''); ?>>Wisconsin</option>
                                    <option value="WV" <?php echo e($lists->add_partner_entity_address_state == "WV" ? 'selected': ''); ?>>West Virginia</option>
                                    <option value="WY" <?php echo e($lists->add_partner_entity_address_state == "WY" ? 'selected': ''); ?>>Wyoming</option>
                                </optgroup> 
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_zipcode">Zip Code</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_zipcode" value="<?php echo e($lists->add_partner_entity_address_zipcode); ?>" id="add_partner_entity_address_zipcode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-content">
                <div class="form-btn-flex-between">
                    <a class="form-cancel-btn" href="<?php echo e(url('entity-list')); ?>">Cancel</a>
                    <button type="submit" class="form-submit-btn">Submit</button>
                </div>
            </div>
        </form>
   </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity/entity-edit.blade.php ENDPATH**/ ?>