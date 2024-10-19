<?php
    $blogCaption = getContent('blog.content',true);
    $blogs = getContent('blog.element',false,3);
?>

    <section class="pb-150">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title"><?php echo e(__($blogCaption->data_values->heading)); ?></h2>
              <p><?php echo e(__($blogCaption->data_values->subheading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row mb-none-30 justify-content-center">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
            <div class="blog-post hover--effect-1 has-link">
              <a href="<?php echo e(route('blogDetail',$blog->id)); ?>" class="item-link"></a>
              <div class="blog-post__thumb">
                <img src="<?php echo e(getImage('assets/images/frontend/blog/'.$blog->data_values->image)); ?>" alt="image" class="w-100">
              </div>
              <div class="blog-post__content">
                <h4 class="blog-post__title"><?php echo e(__($blog->data_values->title)); ?></h4>
                <p><?php echo e(strLimit(strip_tags($blog->data_values->description),80)); ?></p>
                <i class="blog-post__icon las la-arrow-right"></i>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/sections/blog.blade.php ENDPATH**/ ?>