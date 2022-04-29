

<?php $__env->startSection('main-content'); ?>

<div class="container box">
  
    <div class="container">
        <h2>Laravel 8 Country State City Dropdown</h2>
        <form>
            <div class="form-group">
    
            <select id="country" class="form-control" >
                <option value="">Select Country</option>
                <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($list->id); ?>"><?php echo e($list->country); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
            <br/>
            <select id="state" class="form-control" >
                <option value="">Select State</option>
            </select>
            <br/>
            
            <select id="city" class="form-control" >
                <option value="">Select City</option>
            </select>
    
    
            </div>
          </form>
        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    
            <script>
            jQuery(document).ready(function(){
                jQuery('#country').change(function(){
                    let cid=jQuery(this).val();
                    jQuery('#city').html('<option value="">Select City</option>')
                    jQuery.ajax({
                        url:'/getState',
                        type:'post',
                        data:'cid='+cid+'&_token=<?php echo e(csrf_token()); ?>',
                        success:function(result){
                            jQuery('#state').html(result)
                        }
                    });
                });
                
                jQuery('#state').change(function(){
                    let sid=jQuery(this).val();
                    jQuery.ajax({
                        url:'/getCity',
                        type:'post',
                        data:'sid='+sid+'&_token=<?php echo e(csrf_token()); ?>',
                        success:function(result){
                            jQuery('#city').html(result)
                        }
                    });
                });
                
            });
                
            </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views\test.blade.php ENDPATH**/ ?>