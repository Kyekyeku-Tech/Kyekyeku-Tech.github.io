<?php
    $faqCaption = getContent('faq.content',true);
    $faqs = getContent('faq.element');
?>


    <section class="pt-150 pb-150 section--bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title"><?php echo e(__($faqCaption->data_values->heading)); ?></h2>
              <p><?php echo e(__($faqCaption->data_values->subheading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="accordion cmn-accordion" id="accordionExample">
              <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faql): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card">
                <div class="card-header" id="heading<?php echo e($key); ?>">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($key); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($key); ?>">
                    <i class="las la-question-circle"></i>
                    <span><?php echo e(__($faql->data_values->question)); ?></span>
                  </button>
                </div>

                <div id="collapse<?php echo e($key); ?>" class="collapse <?php if($loop->first): ?> show <?php endif; ?>" aria-labelledby="heading<?php echo e($key); ?>" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p><?php echo e(__($faql->data_values->answer)); ?></p>
                  </div>
                </div>
              </div><!-- card end -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/sections/faq.blade.php ENDPATH**/ ?>