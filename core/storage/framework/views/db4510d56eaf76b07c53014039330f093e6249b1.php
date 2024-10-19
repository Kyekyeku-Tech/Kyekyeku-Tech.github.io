<?php $__env->startSection('content'); ?>
    <!-- Top Nav -->
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="appCapsule">
        <div class="container mt-3">
            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-2">
                    <label class="form-label mb-0 mt-1"><?php echo app('translator')->get('Current Password'); ?></label>
                    <input type="password" class="form-control form-control-sm" name="current_password" required
                        autocomplete="current-password">
                </div>
                <div class="form-group mb-2">
                    <label class="form-label mb-0 mt-1"><?php echo app('translator')->get('Password'); ?></label>
                    <input type="password" class="form-control form-control-sm" name="password" required
                        autocomplete="current-password">
                </div>
                <div class="form-group mb-2">
                    <label class="form-label mb-0 mt-1"><?php echo app('translator')->get('Confirm Password'); ?></label>
                    <input type="password" class="form-control form-control-sm" name="password_confirmation" required
                        autocomplete="current-password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded-pill w-100 mt-3"><?php echo app('translator')->get('Submit'); ?></button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php if($general->secure_password): ?>
    <?php $__env->startPush('script-lib'); ?>
        <script src="<?php echo e(asset('assets/global/js/secure_password.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php $__env->startPush('style'); ?>
    <style>
        input:not([type="radio"]), .form-control {
            padding: 7px 20px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/password.blade.php ENDPATH**/ ?>