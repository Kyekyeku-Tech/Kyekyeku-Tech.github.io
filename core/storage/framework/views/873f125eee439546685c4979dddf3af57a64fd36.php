<?php $__env->startSection('content'); ?>
    <section class="cmn-section price">
        <div class="container">
            <div class="row justify-content-center">
                <?php echo $__env->make('templates.basic.sections.home.plan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </section>
    <?php echo $__env->make('templates.basic.modal.plan_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .package-disabled {
            opacity: 0.5;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/plans.blade.php ENDPATH**/ ?>