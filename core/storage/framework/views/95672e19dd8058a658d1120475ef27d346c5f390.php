<?php $__env->startSection('content'); ?>
<?php
    $banners = getContent('banner.element');
?>

<style>
    #appCapsule {
        padding-top: 47px;
    }
</style>

    <!-- Top Nav -->
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="appCapsule">
        <div class="swiper rounded">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <img width="100%" style="height: 150px;" src="<?php echo e(asset('assets/images/frontend/banner/' . $item->data_values->image)); ?>" alt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="container">
            <div class="bg-dark-alt rounded-pill p-1 mt-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-volume-up text-light"></i>
                    </div>
                    <div class="col ps-0">
                        <marquee class="small-font text-light" behavior="scroll" direction="left">Here is some scrolling text... right to left!</marquee>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-2 bg-dark-alt">
            <div class="row py-2">
                <a href="<?php echo e(route('user.deposit.index')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="<?php echo e(asset('assets/images/3d-icon/deposit.png')); ?>" alt="">
                    <p class="mb-0 small-font-sm text-light">Recharge</p>
                </a>
                <a href="<?php echo e(route('user.withdraw.new')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="<?php echo e(asset('assets/images/3d-icon/withdraw.png')); ?>" alt="">
                    <p class="mb-0 small-font-sm text-light">Withdraw</p>
                </a>
                <a href="<?php echo e(route('user.invite')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="<?php echo e(asset('assets/images/3d-icon/invite.png')); ?>" alt="">
                    <p class="mb-0 small-font-sm text-light">Invite</p>
                </a>
                <a href="<?php echo e(route('online.service')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="<?php echo e(asset('assets/images/3d-icon/support.png')); ?>" alt="">
                    <p class="mb-0 small-font-sm text-light">Online service</p>
                </a>
            </div>
        </div>

        <!-- Plans -->
        <div class="container">
            <?php echo $__env->make('templates.basic.sections.home.plan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Popup modal -->
        <?php echo $__env->make('templates.basic.modal.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>

    <?php if(!session()->has('notify')): ?>
        <script>
            var popupModal = new bootstrap.Modal($('#popupModal'));
            setTimeout(() => {
                popupModal.show();
            }, 500);
        </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/afearnin/skymarketingpk.online/core/resources/views/templates/basic/home.blade.php ENDPATH**/ ?>