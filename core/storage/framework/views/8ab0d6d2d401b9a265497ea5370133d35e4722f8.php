<?php $__env->startSection('content'); ?>
<?php
    $inportentLinks = getContent('links.content', true);
?>

<!-- Top Nav -->
<?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="appCapsule">
    <div class="container mt-3">

        <div class="card bg-gr-green-light-alt">
            <div class="card-body p-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img style="width: 50px" src="<?php echo e(asset('assets/images/3d-logo/support-24.png')); ?>" alt="">
                    </div>
                    <div class="col text-end">
                        <h5 class="mb-1 small-font-lg text-light">Customer Service</h5>
                        <a href="<?php echo e(@$inportentLinks->data_values->customer_service_telegram); ?>" class="btn btn-mini btn-light rounded-pill">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-gr-navy mt-3">
            <div class="card-body p-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img style="width: 50px" src="<?php echo e(asset('assets/images/3d-logo/telegram.png')); ?>" alt="">
                    </div>
                    <div class="col text-end">
                        <h5 class="mb-1 small-font-lg text-light">Telegram</h5>
                        <a href="<?php echo e(@$inportentLinks->data_values->telegram_group); ?>" class="btn btn-mini btn-light rounded-pill">
                            Join Group
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/support/online_service.blade.php ENDPATH**/ ?>