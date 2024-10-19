<?php $__env->startSection('content'); ?>
    <?php
        $loginCaption = getContent('login.content', true);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <img width="90px" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-auto">
                <h6 class="mb-0 small-font-lg text-light border-bottom border-2">Mobile Login</h6>
            </div>
        </div>
        <form action="<?php echo e(route('user.login')); ?>" method="POST" class="mt-4 form-login">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <p class="icon">+880</p>
                <input type="number" class="form-control" name="username" placeholder="Please enter the phone address">
            </div>
            <div class="mb-5">
                <p class="icon">
                    <i class="fas fa-lock"></i>
                </p>
                <input type="password" class="form-control" name="password" placeholder="Please enter user password">
            </div>
            <button type="submit" class="btn btn-lg btn-primary w-100 rounded-pill mt-5">Login</button>
        </form>
        <div class="row mt-5">
            <div class="col-6 text-start">
                <a class="text-light" href="<?php echo e(route('user.register')); ?>">Register Now</a>
            </div>
            <div class="col-6 text-end">
                <a class="text-light" href="<?php echo e(route('user.password.request')); ?>">Forget Password?</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $('.header-section').removeClass('header-section--style2').addClass('bg-color-3');
        $('#btnToggle').on('click', function () {
            let type = $('[name=password]').attr('type');
            if (type == 'password') {
                $('[name=password]').attr('type', 'text');
            } else {
                $('[name=password]').attr('type', 'password');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/auth/login.blade.php ENDPATH**/ ?>