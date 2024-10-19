
<?php $__env->startSection('panel'); ?>
        <?php echo $__env->make($activeTemplate.'partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(!request()->routeIs('home') && !request()->routeIs('user.login') && !request()->routeIs('user.register')): ?>
            <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/layouts/frontend.blade.php ENDPATH**/ ?>