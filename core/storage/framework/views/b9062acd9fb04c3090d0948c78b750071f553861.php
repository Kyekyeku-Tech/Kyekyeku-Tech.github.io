<?php $__env->startSection('content'); ?>
    <!-- ===============>> Service section start here <<================= -->
    <section class="service padding-top padding-bottom">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5"><span>Our</span> News</h2>
        </div>
        <div class="container">
            <div class="row mb-none-30 justify-content-center">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="blog-post hover--effect-1 has-link">
                            <a href="<?php echo e(route('blogDetail', $blog->id)); ?>" class="item-link"></a>
                            <div class="blog-post__thumb">
                                <img src="<?php echo e(getImage('assets/images/frontend/blog/' . $blog->data_values->image)); ?>"
                                    alt="image" class="w-100">
                            </div>
                            <div class="blog-post__content">
                                <h4 class="blog-post__title"><?php echo e(__($blog->data_values->title)); ?></h4>
                                <p><?php echo e(strLimit(strip_tags($blog->data_values->description), 80)); ?></p>
                                <i class="blog-post__icon las la-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <?php echo e(paginateLinks($blogs)); ?>

            </div>
        </div>
    </section>
    <!-- ===============>> Service section start here <<================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/blog/blogs.blade.php ENDPATH**/ ?>