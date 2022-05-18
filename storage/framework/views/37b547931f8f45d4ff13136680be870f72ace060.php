

<?php $__env->startSection('main-content'); ?>

<section class="panel-wrapper panel-center">
    <?php if(Session::has('success-message')): ?> 
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success-message')); ?>

      </div>
     <?php endif; ?> 
     <div class="form-wrapper">
        <div class="form-heading">
            <h6>Add New Property</h6>
        </div>
        <div class="form-content">
            <form action="<?php echo e(url('property-submit')); ?>" method="POST" id="add-new-property-form">
                <?php echo csrf_field(); ?>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_address">Property Address </label>
                            <input type="text" class="form-control" name="PROPERTY_ADDRESS" id="PROPERTY_ADDRESS">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="google_coordinates">Google Coordinates</label>
                            <input type="text" class="form-control" name="GOOGLE_COORDINATES" id="GOOGLE_COORDINATES">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="property_company">Entity Company</label>
                                <select name="ENTITY_COMPANY" class="form-select select-matcher-obj select2" id="property_company_select"  data-select2-id="property_company_select"  aria-label="Default select example">
                                <optgroup label="Please Select Member" data-select2-id="property_company_select">
                                    <option value="">Please Select</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($user->ID); ?>"><?php echo e($user->ENTITY_NAME); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres">Number Of Acres</label>
                            <input type="number" class="form-control" name="NO_OF_ACRES" id="NO_OF_ACRES">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Map Right Url</label>
                            <input type="text" class="form-control" name="MAP_URL" id="MAP_URL">
                        </div>
                    </div>
                  

                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_documents">Property Documents</label>
                            <input type="url" class="form-control" name="PROPERTY_DOCUMENTS" id="PROPERTY_DOCUMENTS">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" class="form-control" name="PURCHASE_PRICE" id="PURCHASE_PRICE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="per_acre_cost">Per Acre Cost</label>
                            <input type="number" class="form-control" name="COST_PER_ACRE" id="COST_PER_ACRE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_per_acre">Potential Per Acre</label>
                            <input type="number" class="form-control" name="POTENTIAL_PER_ACRE" id="POTENTIAL_PER_ACRE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_market_value">Potential Market Value</label>
                            <input type="number" class="form-control" name="POTENTIAL_MARKET_VALUE" id="POTENTIAL_MARKET_VALUE">
                        </div>
                    </div>

                   
                    
        
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-btn-flex-between">
                        <a href="<?php echo e(url()->previous()); ?>" class="form-cancel-btn">Cancel</a>
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/property/add-new-property.blade.php ENDPATH**/ ?>