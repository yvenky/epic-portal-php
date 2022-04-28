

<?php $__env->startSection('main-content'); ?>
        
        <!--// Main Area Start //-->
        <main class="main-area" role="main">
            <h1>Welcome to Epic Estates Dashboard</h1>
            <div class="breadcrumb-wrap">
                <div class="container-fluid p-0">
                    <div class="breadcrumb-links">
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('entity-list')); ?>">Entity List</a></li>
                            <li><a href="<?php echo e(url('add-new-entry')); ?>">Add New Entity</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </main>
        <!--// Main Area End //-->


<?php $__env->stopSection(); ?>
      
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/index.blade.php ENDPATH**/ ?>