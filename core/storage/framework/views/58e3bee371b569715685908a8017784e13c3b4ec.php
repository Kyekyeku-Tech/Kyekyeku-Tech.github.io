<?php $__env->startSection('content'); ?>
<?php
    $pageTitle = "Page Not Found";
?>
    <!-- ================> 404 section start here <================== -->
    <div class="error padding-top padding-bottom sec-bg-color2">
        <div class="container">
            <div class="error__wrapper">
                <div class="error__inner" data-aos="fade-up" data-aos-duration="800">
                    <div class="error__thumb text-center">
                        <img src="<?php echo e(asset('assets/images/others/error.png')); ?>" alt="404 image">
                    </div>
                    <div class="error__content text-center">
                        <h2><span>ooops!</span> page not found</h2>
                        <p>Oops! It looks like you're lost. The page you were looking for couldn't be found. Don't
                            worry, it happens to the best of us.</p>
                        <a href="<?php echo e(route('home')); ?>" class="trk-btn trk-btn--border trk-btn--primary">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> 404 section end here <================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ethemest/DEMO/script.viser.store/usdt/core/resources/views/errors/404.blade.php ENDPATH**/ ?>