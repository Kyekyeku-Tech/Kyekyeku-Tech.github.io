<?php
    $elements = getContent('brand.element', false);
?>
<div class="client-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="client-slider">
                    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="client-slider__item">
                            <img src="<?php echo e(getImage('assets/images/frontend/brand/'.$element->data_values->image, '400x150')); ?>" alt="image" class="client-slider__img">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/brand.blade.php ENDPATH**/ ?>