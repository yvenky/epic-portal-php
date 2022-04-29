

<?php $__env->startSection('main-content'); ?>

<section class="panel-wrapper panel-center">

    <?php if(Session::has('success-message')): ?> 
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success-message')); ?>

      </div>
     <?php endif; ?> 
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Entity Details</h6>
            <a href="<?php echo e(url('entity-edit/'.$lists->id)); ?>" title="Edit Entity"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            <?php if( $lists->add_partner_entity_name ): ?>
                <div class="form-flex-box-text-item">
                    <span>Entity Name</span>
                    <p><?php echo e($lists->add_partner_entity_name); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_managing_member_1 ): ?>
                <div class="form-flex-box-text-item">
                    <span>Managing Member 1</span>
                    <p><?php echo e($lists->add_partner_managing_member_1); ?></p>
                </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_managing_member_2 ): ?>
            <div class="form-flex-box-text-item">
                <span>Managing Member 2</span>
                <p><?php echo e($lists->add_partner_managing_member_2); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_ein ): ?>
            <div class="form-flex-box-text-item">
                <span>EIN</span>
                <p><?php echo e($lists->add_partner_entity_ein); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_docs ): ?>
            <div class="form-flex-box-text-item">
                <span>Entity Docs</span>
                <p><?php echo e($lists->add_partner_entity_docs); ?></p>
            </div>
            <?php endif; ?>
        </div>
        <div class="form-heading top-border">
            <h6>Entity Address  Details</h6>
        </div>
        <div class="form-content">
            
            <?php if( $lists->add_partner_entity_address_street ): ?>
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p><?php echo e($lists->add_partner_entity_address_street); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_address_city ): ?>
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p><?php echo e($lists->add_partner_entity_address_city); ?></p>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_address_state ): ?>

            <div class="form-flex-box-text-item">
                <span>State</span>
                <?php if( $lists->add_partner_entity_address_state ==  "AA" ): ?>
                    <p>Armed Forces America</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "AE" ): ?> 
                    <p>Armed Forces</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "AK" ): ?>
                    <p>Alaska</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "AL" ): ?>
                    <p>Alabama</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "AP" ): ?>
                    <p>Armed Forces Pacific</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "AR" ): ?>
                    <p>Arkansas</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "AZ" ): ?>
                    <p>Arizona</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "CA" ): ?>
                    <p>California</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "CO" ): ?>
                    <p>Colorado</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "CT" ): ?>
                    <p>Connecticut</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "DC" ): ?>
                    <p>Washington DC</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "DE" ): ?>
                    <p>Delaware</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "FL" ): ?>
                    <p>Florida</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "GA" ): ?>
                    <p>Georgia</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "GU" ): ?>
                    <p>Guam</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "HI" ): ?>
                    <p>Hawaii</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "IA" ): ?>
                    <p>Iowa</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "ID" ): ?>
                    <p>Idaho</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "IL" ): ?>
                    <p>Illinois</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "IN" ): ?>
                    <p>Indiana</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "KS" ): ?>
                    <p>Kansas</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "KY" ): ?>
                    <p>Kentucky</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "LA" ): ?>
                    <p>Louisiana</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "MA" ): ?>
                    <p>Massachusetts</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "MD" ): ?>
                    <p>Maryland</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "ME" ): ?>
                    <p>Maine</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "MI" ): ?>
                    <p>Michigan</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "MN" ): ?>
                    <p>Mississippi</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "MO" ): ?>
                    <p>Missouri</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "MT" ): ?>
                    <p>Montana</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NC" ): ?>
                    <p>North Carolina</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "ND" ): ?>
                    <p>North Dakota</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NE" ): ?>
                    <p>Nebraska</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NH" ): ?>
                    <p>New Hampshire</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NJ" ): ?>
                    <p>New Jersey</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NM" ): ?>
                    <p>New Mexico</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NV" ): ?>
                    <p>Nevada</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "NY" ): ?>
                    <p>New York</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "OH" ): ?>
                    <p>Ohio</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "OK" ): ?>
                    <p>Oklahoma</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "OR" ): ?>
                    <p>Oregon</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "PA" ): ?>
                    <p>Pennsylvania</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "PR" ): ?>
                    <p>Puerto Rico</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "RI" ): ?>
                    <p>Rhode Island</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "RI" ): ?>
                    <p>South Carolina</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "SD" ): ?>
                    <p>South Dakota</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "TN" ): ?>
                    <p>Tennessee</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "TX" ): ?>
                    <p>Texas</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "UT" ): ?>
                    <p>Utah</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "VA" ): ?>
                    <p>Virginia</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "VI" ): ?>
                    <p>Virgin Islands</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "VT" ): ?>
                    <p>Vermont</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "WA" ): ?>
                    <p>Washington</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "WI" ): ?>
                    <p>Wisconsin</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "WV" ): ?>
                    <p>West Virginia</p>
                <?php elseif( $lists->add_partner_entity_address_state ==  "WY" ): ?>
                    <p>Wyoming</p>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if( $lists->add_partner_entity_address_zipcode ): ?>
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p><?php echo e($lists->add_partner_entity_address_zipcode); ?></p>
            </div>
            <?php endif; ?>

            <div class="form-btn-flex-between pt-4">
                <a href="<?php echo e(url('entity-list')); ?>" class="form-cancel-btn">Home</a>
                 <a href="<?php echo e(url('add-new-entry')); ?>" class="form-submit-btn">Add Entity</a>
             </div>
        </div>
    </div>  
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/backend/template/entity/entity-submit-confirmation.blade.php ENDPATH**/ ?>