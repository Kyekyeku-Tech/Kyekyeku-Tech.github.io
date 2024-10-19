

<?php $__env->startSection('content'); ?>
<?php
    $banner = getContent('banner.content', true);
?>
<!-- Hero  -->
<section class="hero" style="background-image: url(<?php echo e(getImage('assets/images/frontend/banner/'.$banner->data_values->background_image, '1920x1280')); ?>), linear-gradient(45deg, hsl(var(--accent-dark)), hsl(var(--accent)));">
    <div class="hero__content">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-lg-7 col-xl-6 col-xxl-5 text-center text-lg-start">
                    <h1 class="hero__content-title section__title text-capitalize text--white" data-img-src="<?php echo e(asset($activeTemplateTrue . 'images/title-bg.svg')); ?>" s-break="-2"><?php echo e(__($banner->data_values->heading)); ?>

                    </h1>
                    <p class="hero__content-para text--white mx-auto ms-lg-0">
                        <?php echo e(__($banner->data_values->subheading)); ?>

                    </p>

                    <div class="hero__btn-group justify-content-center justify-content-lg-start mt-4">
                        <a href="<?php echo e(__($banner->data_values->button_link)); ?>" class="btn btn--xl btn--base rounded-pill">
                            <?php echo e(__($banner->data_values->button_name)); ?>

                        </a>
                        <a href="<?php echo e(__($banner->data_values->video_link)); ?>" class="btn btn--light btn--circle show-video">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 col-xxl-7">
                    <img src="<?php echo e(getImage('assets/images/frontend/banner/'.$banner->data_values->image, '1080x800')); ?>" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate.'sections.'.$sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/home.blade.php ENDPATH**/ ?>