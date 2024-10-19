<?php
    $counterCaption = getContent('counter.content',true);
    $counters = getContent('counter.element');
?>
<div class="section--sm">
    <div class="section fact-section" style="background-image: url(<?php echo e(getImage('assets/images/frontend/counter/'.$counterCaption->data_values->background_image,'1920x500')); ?>)">
        <div class="container">
            <div class="row g-4 gy-lg-0 align-items-lg-end">
                <div class="col-lg-6 col-xl-5">
                    <span class="section__subtitle">
                        <?php echo e(__($counterCaption->data_values->subheading)); ?>

                    </span>
                    <h2 class="section__title mt-0" data-img-src="<?php echo e(asset($activeTemplateTrue . 'images/title-bg.svg')); ?>" s-break="-2">
                        <?php echo e(__($counterCaption->data_values->heading)); ?>

                    </h2>
                    <p class="mb-0">
                        <?php echo e(__($counterCaption->data_values->description)); ?>

                    </p>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <ul class="list facts">
                        <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="facts-content">
                                <span class="facts-content__title">
                                    <?php echo e(__($counter->data_values->number)); ?>

                                    <span class="facts-content__title-tail">
                                        <?php echo e(__($counter->data_values->range)); ?>

                                    </span>
                                </span>
                                <span class="facts-content__sub-title">
                                    <?php echo e(__($counter->data_values->title)); ?>

                                </span>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/counter.blade.php ENDPATH**/ ?>