<?php
    $content = getContent('about.content', true);
?>
<div class="section about-section">
    <div class="container">
        <div class="row g-4 gy-lg-0 justify-content-between align-items-lg-center">
            <div class="col-lg-6">
                <img src="<?php echo e(getImage('assets/images/frontend/about/'.$content->data_values->image,'1024x970')); ?>" alt="image" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <span class="section__subtitle">
                    <?php echo e(__($content->data_values->subheading )); ?>

                </span>
                <h2 class="section__title mt-0" data-img-src="<?php echo e(asset($activeTemplateTrue . 'images/title-bg.svg')); ?>" s-break="-2">
                    <?php echo e(__($content->data_values->heading )); ?>

                </h2>

                <div>
                    <?php echo $content->data_values->description ?>
                </div>

            </div>
        </div>
    </div>
</div><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/about.blade.php ENDPATH**/ ?>