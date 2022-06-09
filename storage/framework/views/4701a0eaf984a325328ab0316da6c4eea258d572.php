

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
                <h6>Entity New Partner Add</h6>
            </div>
            <form action="<?php echo e(url('entity-newpartner-add-submit')); ?>" method="POST" id="entity-newpartner-add-form">
                <?php echo csrf_field(); ?>
                <!-- start--->
                <div class="form-content pb-0">
                    <div class="row mt-4">
                        <!-- from entity properties-->
                        <div class="col-lg-12">
                            <div class="form-flex-item-box order-error-select">
                                <label for="entity_select-list">Select Entity</label>
                                <select name="ENTITY_SELECT" class="form-select select-matcher-obj select2"
                                    id="entity_select-list" data-select2-id="entity_select-list_select"
                                    aria-label="Default select example">
                                    <optgroup label="Please Select Member" data-select2-id="entity_select-list_select"
                                        disabled>
                                        <option value="">Please Select</option>
                                        <?php $__currentLoopData = $entitys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($entity->ID == session()->get('entity', 'default') ? 'selected' : ''); ?>

                                                value="<?php echo e($entity->ID); ?>"><?php echo e($entity->ENTITY_NAME); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-flex-item-box order-error-select">
                                <label for="PROPERTY_SELECT">Select Property</label>
                                <select disabled name="PROPERTY_SELECT[]" class="form-select select-matcher-obj select2"
                                    id="property_select-list" data-select2-id="property_select-list_select"
                                    aria-label="Default select example" multiple="multiple">
                                    <optgroup label="Please Select Member" data-select2-id="property_select-list_select"
                                        disabled>
                                        <option value="">Please Select</option>
                                        <?php $__currentLoopData = $propertys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e(Str::contains(session()->get('property', 'default'), $property->ID) ? 'selected' : ''); ?>

                                                value="<?php echo e($property->ID); ?>"
                                                data-price="<?php echo e($property->PURCHASE_PRICE); ?>">
                                                <?php echo e($property->PROPERTY_ADDRESS); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-flex-item-box">
                                <label for="total_value">Total Value</label>
                                <input value="<?php echo e(session()->get('total', 'default')); ?>" type="text" class="form-control tpval" name="TOTAL_PROPERTIES_VALUE"
                                    id="TOTAL_PROPERTIES_VALUE"  readonly>
                            </div>
                        </div>
                        <!-- Add partner-->
                        <div class="col-lg-12">
                            <div class="form-flex-item-box order-error-select">
                                <label for="entity_select-list">Select Partner</label>
                                <select name="INVESTOR_ID" class="form-select select-matcher-obj select2"
                                    id="investor_select-list" data-select2-id="investor_select_list_select"
                                    aria-label="Default select example">
                                    <optgroup label="Please Select Investor" data-select2-id="investor_select-list_select">
                                        <option value="">Please Select Investor</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->ID); ?>" data-first="<?php echo e($user->FIRST_NAME); ?>"
                                                data-Last="<?php echo e($user->LAST_NAME); ?>">
                                                <?php echo e($user->FIRST_NAME . ' ' . $user->LAST_NAME); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control fname" name="FIRST_NAME"
                                    value="<?php echo e($user->FIRST_NAME); ?>" id="FIRST_NAME" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control lname" name="LAST_NAME"
                                    value="<?php echo e($user->LAST_NAME); ?>" id="LAST_NAME" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Total Share">Total Share</label>
                                <input type="text" class="form-control" name="TOTAL_SHARE" id="TOTAL_SHARE">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Cash">Cash</label>
                                <input type="text" class="form-control getvalue" value="" name="CASH" id="CASH">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Loan">Loan</label>
                                <input type="text" class="form-control" name="LOAN" id="LOAN">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Shareholding">Shareholding</label>
                                <input type="text" step="any" class="form-control" name="SHAREHOLDING" id="SHAREHOLDING"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Finder Fees">Finder Fees</label>
                                <input type="text" class="form-control getvalue" value="" name="FINDER_FEES"
                                    id="FINDER_FEES">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Closing Fees">Closing Fees</label>
                                <input type="text" class="form-control getvalue" value="" name="CLOSING_FEES"
                                    id="CLOSING_FEES">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Total Cash">Total Cash</label>
                                <input type="text" class="form-control" name="TOTAL_CASH" id="TOTAL_CASH" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-content pt-0">
                    <div class="form-btn-flex-between">
                        <button type="button" class="form-cancel-btn"><a href="<?php echo e(url()->previous()); ?>"
                                style="color:black">Cancel</a></button>
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!--// Main Area End //-->
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity-shareholding/entity-newpartner-add.blade.php ENDPATH**/ ?>