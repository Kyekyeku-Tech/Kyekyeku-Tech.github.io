<?php $__env->startSection('panel'); ?>
    <div class="section mm-section flex-column justify-content-center d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 text-center">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h4 class="text--danger"><?php echo app('translator')->get('THE SITE IS UNDER MAINTENANCE'); ?></h4>
                        </div>
                        <div class="col-sm-6 col-8 mt-4">
                            <img src="<?php echo e(asset('assets/images/maintenance.png')); ?>" alt="<?php echo app('translator')->get('image'); ?>" class="img-fluid mx-auto mb-5">
                        </div>
                    </div>
                    <p class="mx-auto text-center"><?php echo $maintenance->data_values->description ?></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .mm-section{
            height: 100vh;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/upagexy3/ye-sundemoweb.pro/v68/core/resources/views/templates/basic/maintenance.blade.php ENDPATH**/ ?>