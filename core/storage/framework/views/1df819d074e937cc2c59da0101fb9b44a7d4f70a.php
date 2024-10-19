<?php
    $counterCaption = getContent('counter.content',true);
    $counters = getContent('counter.element');
?>
    <section>
      <div class="row g-0">
        <div class="col-xl-6 bg_img video-thumb-two min-height--block d-none d-xl-block" data-background="<?php echo e(getImage('assets/images/frontend/counter/'.$counterCaption->data_values->image)); ?>">
        </div>
        <div class="col-xl-6 pt-120 pb-120 bg--base text-md-left text-center">
          <div class="overview-area">
            <h2 class="section-title"><?php echo e(__($counterCaption->data_values->heading)); ?></h2>
            <p><?php echo e(__($counterCaption->data_values->sub_heading)); ?></p>
            <div class="row mb-none-30 mt-50">
                <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-3 col-6 mb-30">
                <div class="counter-card">
                  <div class="counter-card__icon text-white">
                    <?php echo $counter->data_values->icon ?>
                  </div>
                  <div class="counter-card__content">
                    <span class="count-num text-white"><?php echo e(__($counter->data_values->number)); ?></span>
                    <p class="para-white"><?php echo e(__($counter->data_values->title)); ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/sections/counter.blade.php ENDPATH**/ ?>