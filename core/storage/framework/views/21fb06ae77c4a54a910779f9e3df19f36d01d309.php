<?php $__env->startSection('content'); ?>
<div class="ptb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $policy->data_values->details ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $(window).on('load', function () {
        $('.header-section').removeClass('header-section--style2').addClass('bg-color-3');
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/policy.blade.php ENDPATH**/ ?>