<?php
    $testimonialCaption = getContent('testimonial.content',true);
    $testimonials = getContent('testimonial.element');
?>


    <!-- testimonial section start -->
    <section class="pt-150 pb-150">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title"><?php echo e(__($testimonialCaption->data_values->heading)); ?></h2>
              <p><?php echo e(__($testimonialCaption->data_values->subheading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="thumb"><img src="<?php echo e(getImage('assets/images/frontend/testimonial/'.$testimonial->data_values->image)); ?>" alt="image"></div>
                  <h5 class="name"><?php echo e(__($testimonial->data_values->name)); ?></h5>
                  <span class="designation"><?php echo e(__($testimonial->data_values->designation)); ?></span>
                  <p><?php echo e(__($testimonial->data_values->comment)); ?></p>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- testimonial-slider end -->
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial section end -->
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/sections/testimonial.blade.php ENDPATH**/ ?>