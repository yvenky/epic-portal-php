

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
                            <label for="property_address">Property Location </label>
                            <input type="text" class="form-control" name="property_address" id="property_address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="google_coordinates">Google Coordinates</label>
                            <input type="text" class="form-control" name="google_coordinates" id="google_coordinates">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres">Number Of Acres</label>
                            <input type="number" class="form-control" name="property_of_acres" id="property_of_acres">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Map Right Url</label>
                            <input type="text" class="form-control" name="property_map_right_url" id="property_map_right_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_company">Company</label>
                            <input type="text" class="form-control" name="property_company" id="property_company">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_documents_url">Property Documents</label>
                            <input type="url" class="form-control" name="property_documents_url" id="property_documents_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" class="form-control" name="purchase_price" id="purchase_price">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="per_acre_cost">Per Acre Cost</label>
                            <input type="number" class="form-control" name="per_acre_cost" id="per_acre_cost">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_per_acre">Potential Per Acre</label>
                            <input type="number" class="form-control" name="potential_per_acre" id="per_acre_cost">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_market_value">Potential Market Value</label>
                            <input type="number" class="form-control" name="potential_market_value" id="potential_market_value">
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