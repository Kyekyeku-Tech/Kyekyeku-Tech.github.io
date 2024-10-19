<?php $__env->startSection('content'); ?>
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card custom--card">
                    <div class="card-body">
                        <h3 class="text-center text-danger"><?php echo app('translator')->get('You are banned'); ?></h3>
                        <p class="fw-bold mb-1"><?php echo app('translator')->get('Reason'); ?>:</p>
                        <p><?php echo e($user->ban_reason); ?></p>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate .'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oregoazi/public_html/core/resources/views/templates/basic/user/auth/authorization/ban.blade.php ENDPATH**/ ?>