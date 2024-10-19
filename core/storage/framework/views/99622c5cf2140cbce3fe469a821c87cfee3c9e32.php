<?php $__env->startSection('panel'); ?>
    <div class="page-wrapper">
        <?php echo $__env->make($activeTemplate.'partials.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php
            $cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
        ?>
        <?php if($cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie')): ?>
            <!-- cookies dark version start -->
            <div class="cookies-card text-center hide">
                <div class="cookies-card__icon bg--base">
                    <i class="las la-cookie-bite"></i>
                </div>
                <p class="mt-4 cookies-card__content"><?php echo e($cookie->data_values->short_desc); ?> <a href="<?php echo e(route('cookie.policy')); ?>" target="_blank"><?php echo app('translator')->get('learn more'); ?></a></p>
                <div class="cookies-card__btn mt-4">
                    <a href="javascript:void(0)" class="btn cmn-btn w-100 policy"><?php echo app('translator')->get('Allow'); ?></a>
                </div>
            </div>
            <!-- cookies dark version end -->
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/layouts/master.blade.php ENDPATH**/ ?>