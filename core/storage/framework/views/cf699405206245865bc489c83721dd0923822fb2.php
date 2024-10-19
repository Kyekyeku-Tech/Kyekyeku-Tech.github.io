<?php
    $featureCaption = getContent('features.content',true);
    $features = getContent('features.element');
?>


    <!-- feature section start -->
    <section class="pt-150 pb-150 section--bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title"><?php echo e(__($featureCaption->data_values->heading)); ?></h2>
              <p><?php echo e(__($featureCaption->data_values->subheading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row mb-none-30">
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp text-md-left text-center" data-wow-duration="0.3s" data-wow-delay="0.3s">
            <div class="feature-card">
              <div class="feature-card__icon"><?php echo $feature->data_values->icon ?></div>
              <div class="feature-card__content">
                <h4 class="title"><?php echo e(__($feature->data_values->title)); ?></h4>
                <p><?php echo e(__($feature->data_values->content)); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <!-- feature section end -->
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/sections/features.blade.php ENDPATH**/ ?>