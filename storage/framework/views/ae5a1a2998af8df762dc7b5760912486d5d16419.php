

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
        <form action="<?php echo e(url('entity-update/'.$lists->ID)); ?>" id="add-new-entity-partner-edit-form" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-content">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_name">Entity Name </label>
                            <input type="text" class="form-control" name="ENTITY_NAME" value="<?php echo e($lists->ENTITY_NAME); ?>" id="add_partner_entity_name">
                        </div>
                    </div>             
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 1</label>
                            <select class="form-control select2 select-matcher-obj" name="MANAGING_MEMBER_1" data-select2-id="managing-member-1-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-1-select">
                                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($user->FIRST_NAME.' '.$user->LAST_NAME); ?>" <?php echo e($user->FIRST_NAME == $user->LAST_NAME ? "selected": ""); ?>  ><?php echo e($user->FIRST_NAME." ".$user->LAST_NAME); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 2</label>
                            <select class="form-control select2 select-matcher-obj"  name="MANAGING_MEMBER_2" data-select2-id="managing-member-2-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-2-select">  
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($user->FIRST_NAME.' '.$user->LAST_NAME); ?>" <?php echo e($user->FIRST_NAME == $user->LAST_NAME ? "selected": ""); ?>  ><?php echo e($user->FIRST_NAME." ".$user->LAST_NAME); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_ein">EIN</label>
                            <input type="text" class="form-control" name="EIN" value="<?php echo e($lists->EIN); ?>" id="add_partner_entity_ein">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_docs">Entity Docs</label>
                            <input type="text" class="form-control" name="OPERATING_AGREEMENT" value="<?php echo e($lists->OPERATING_AGREEMENT); ?>" id="add_partner_entity_docs">
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
                            <input type="text" class="form-control" name="STREET_1" value="<?php echo e($lists->address->STREET_1); ?>" id="add_partner_entity_address_street">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_city">City</label>
                            <input type="text" class="form-control" name="CITY" value="<?php echo e($lists->address->CITY); ?>" id="add_partner_entity_address_city">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="add_partner_entity_address_state">State</label>
                            <select name="STATE" value="<?php echo e($lists->address->STATE); ?>" class="form-select select2 select-matcher-obj" id="add_partner_entity_address_state_edit"  data-select2-id="add_partner_entity_address_state_edit_select"  aria-label="Default select example">
                                <optgroup label="Please Select State" data-select2-id="add_partner_entity_address_state_edit_select">
                                    <option value="AA" <?php echo e($lists->address->STATE== "AA" ? 'selected': ''); ?>>Armed Forces America</option>
                                    <option value="AE" <?php echo e($lists->address->STATE== "AE" ? 'selected': ''); ?>>Armed Forces</option>
                                    <option value="AK" <?php echo e($lists->address->STATE == "AK" ? 'selected': ''); ?>>Alaska</option>
                                    <option value="AL" <?php echo e($lists->address->STATE == "AL" ? 'selected': ''); ?>>Alabama</option>
                                    <option value="AP" <?php echo e($lists->address->STATE == "AP" ? 'selected': ''); ?>>Armed Forces Pacific</option>
                                    <option value="AR" <?php echo e($lists->address->STATE == "AR" ? 'selected': ''); ?>>Arkansas</option>
                                    <option value="AZ" <?php echo e($lists->address->STATE == "AZ" ? 'selected': ''); ?>>Arizona</option>
                                    <option value="CA" <?php echo e($lists->address->STATE== "CA" ? 'selected': ''); ?>>California</option>
                                    <option value="CO" <?php echo e($lists->address->STATE == "CO" ? 'selected': ''); ?>>Colorado</option>
                                    <option value="CT" <?php echo e($lists->address->STATE == "CT" ? 'selected': ''); ?>>Connecticut</option>
                                    <option value="DC" <?php echo e($lists->address->STATE == "DC" ? 'selected': ''); ?>>Washington DC</option>
                                    <option value="DE" <?php echo e($lists->address->STATE == "DE" ? 'selected': ''); ?>>Delaware</option>
                                    <option value="FL" <?php echo e($lists->address->STATE == "FL" ? 'selected': ''); ?>>Florida</option>
                                    <option value="GA" <?php echo e($lists->address->STATE== "GA" ? 'selected': ''); ?>>Georgia</option>
                                    <option value="GU" <?php echo e($lists->address->STATE== "GU" ? 'selected': ''); ?>>Guam</option>
                                    <option value="HI" <?php echo e($lists->address->STATE== "HI" ? 'selected': ''); ?>>Hawaii</option>
                                    <option value="IA" <?php echo e($lists->address->STATE== "IA" ? 'selected': ''); ?>>Iowa</option>
                                    <option value="ID" <?php echo e($lists->address->STATE== "ID" ? 'selected': ''); ?>>Idaho</option>
                                    <option value="IL" <?php echo e($lists->address->STATE== "IL" ? 'selected': ''); ?>>Illinois</option>
                                    <option value="IN" <?php echo e($lists->address->STATE== "IN" ? 'selected': ''); ?>>Indiana</option>
                                    <option value="KS" <?php echo e($lists->address->STATE == "KS" ? 'selected': ''); ?>>Kansas</option>
                                    <option value="KY" <?php echo e($lists->address->STATE == "KY" ? 'selected': ''); ?>>Kentucky</option>
                                    <option value="LA" <?php echo e($lists->address->STATE == "LA" ? 'selected': ''); ?>>Louisiana</option>
                                    <option value="MA" <?php echo e($lists->address->STATE == "MA" ? 'selected': ''); ?>>Massachusetts</option>
                                    <option value="MD" <?php echo e($lists->address->STATE == "MD" ? 'selected': ''); ?>>Maryland</option>
                                    <option value="ME" <?php echo e($lists->address->STATE== "ME" ? 'selected': ''); ?>>Maine</option>
                                    <option value="MI" <?php echo e($lists->address->STATE == "MI" ? 'selected': ''); ?>>Michigan</option>
                                    <option value="MN" <?php echo e($lists->address->STATE == "MN" ? 'selected': ''); ?>>Mississippi</option>
                                    <option value="MO" <?php echo e($lists->address->STATE == "MO" ? 'selected': ''); ?>>Missouri</option>
                                    <option value="MS" <?php echo e($lists->address->STATE == "MS" ? 'selected': ''); ?>>Mississippi</option>
                                    <option value="MT" <?php echo e($lists->address->STATE == "MT" ? 'selected': ''); ?>>Montana</option>
                                    <option value="NC" <?php echo e($lists->address->STATE== "NC" ? 'selected': ''); ?>>North Carolina</option>
                                    <option value="ND" <?php echo e($lists->address->STATE== "ND" ? 'selected': ''); ?>>North Dakota</option>
                                    <option value="NE" <?php echo e($lists->address->STATE== "NE" ? 'selected': ''); ?>>Nebraska</option>
                                    <option value="NH" <?php echo e($lists->address->STATE== "NH" ? 'selected': ''); ?>>New Hampshire</option>
                                    <option value="NJ" <?php echo e($lists->address->STATE== "NJ" ? 'selected': ''); ?>>New Jersey</option>
                                    <option value="NM" <?php echo e($lists->address->STATE== "NM" ? 'selected': ''); ?>>New Mexico</option>
                                    <option value="NV" <?php echo e($lists->address->STATE == "NV" ? 'selected': ''); ?>>Nevada</option>
                                    <option value="NY" <?php echo e($lists->address->STATE == "NY" ? 'selected': ''); ?>>New York</option>
                                    <option value="OH" <?php echo e($lists->address->STATE == "OH" ? 'selected': ''); ?>>Ohio</option>
                                    <option value="OK" <?php echo e($lists->address->STATE == "OK" ? 'selected': ''); ?>>Oklahoma</option>
                                    <option value="OR" <?php echo e($lists->address->STATE == "OR" ? 'selected': ''); ?>>Oregon</option>
                                    <option value="PA" <?php echo e($lists->address->STATE == "PA" ? 'selected': ''); ?>>Pennsylvania</option>
                                    <option value="PR" <?php echo e($lists->address->STATE== "PR" ? 'selected': ''); ?>>Puerto Rico</option>
                                    <option value="RI" <?php echo e($lists->address->STATE == "RI" ? 'selected': ''); ?>>Rhode Island</option>
                                    <option value="SC" <?php echo e($lists->address->STATE == "SC" ? 'selected': ''); ?>>South Carolina</option>
                                    <option value="SD" <?php echo e($lists->address->STATE == "SD" ? 'selected': ''); ?>>South Dakota</option>
                                    <option value="TN" <?php echo e($lists->address->STATE == "TN" ? 'selected': ''); ?>>Tennessee</option>
                                    <option value="TX" <?php echo e($lists->address->STATE == "TX" ? 'selected': ''); ?>>Texas</option>
                                    <option value="UT" <?php echo e($lists->address->STATE== "UT" ? 'selected': ''); ?>>Utah</option>
                                    <option value="VA" <?php echo e($lists->address->STATE== "VA" ? 'selected': ''); ?>>Virginia</option>
                                    <option value="VI" <?php echo e($lists->address->STATE== "VI" ? 'selected': ''); ?>>Virgin Islands</option>
                                    <option value="VT" <?php echo e($lists->address->STATE== "VT" ? 'selected': ''); ?>>Vermont</option>
                                    <option value="WA" <?php echo e($lists->address->STATE== "WA" ? 'selected': ''); ?>>Washington</option>
                                    <option value="WI" <?php echo e($lists->address->STATE== "WI" ? 'selected': ''); ?>>Wisconsin</option>
                                    <option value="WV" <?php echo e($lists->address->STATE== "WV" ? 'selected': ''); ?>>West Virginia</option>
                                    <option value="WY" <?php echo e($lists->address->STATE== "WY" ? 'selected': ''); ?>>Wyoming</option>
                                </optgroup> 
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_zipcode">Zip Code</label>
                            <input type="text" class="form-control" name="ZIP_CODE" value="<?php echo e($lists->address->ZIP_CODE); ?>" id="add_partner_entity_address_zipcode">
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