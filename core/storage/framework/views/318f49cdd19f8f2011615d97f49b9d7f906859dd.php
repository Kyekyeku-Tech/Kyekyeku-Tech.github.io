<?php $__env->startSection('content'); ?>
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-7">
                <div class="password-area">
                    <h3 class="title mb-2"><?php echo e(__($pageTitle)); ?></h3>
                    <div class="mb-4">
                        <p class="text-light"><?php echo app('translator')->get('Your account is verified successfully. Now you can change your password. Please enter a strong password and don\'t share it with anyone.'); ?></p>
                    </div>
                    <form method="POST" action="<?php echo e(route('user.password.update')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="email" value="<?php echo e($email); ?>">
                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
                        <div class="form-group">
                            <label class="form-label"><?php echo app('translator')->get('Password'); ?></label>
                            <input type="password" class="form-control form--control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><?php echo app('translator')->get('Confirm Password'); ?></label>
                            <input type="password" class="form-control form--control" name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn--base w-100"> <?php echo app('translator')->get('Submit'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php if($general->secure_password): ?>
    <?php $__env->startPush('script-lib'); ?>
        <script src="<?php echo e(asset('assets/global/js/secure_password.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/auth/passwords/reset.blade.php ENDPATH**/ ?>