<?php
    $blogCaption = getContent('blog.content',true);
    $blogs = getContent('blog.element',false,3);
?>
<div class="section--sm blog-section">
    <div class="section__head">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-xl-6 col-xxl-5">
					<div class="text-center">
						<span class="section__subtitle"><?php echo e(__($blogCaption->data_values->subheading)); ?></span>
						<h2 class="section__title m-0"><?php echo e(__($blogCaption->data_values->heading)); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container-xl">
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <a href="<?php echo e(route('blogDetail',$blog->id)); ?>" class="blog-post__img">
                            <img src="<?php echo e(getImage('assets/images/frontend/blog/thumb_'.$blog->data_values->image, '415x250')); ?>" alt="image" class="blog-post__img-is">
                        </a>
                        <div class="blog-post__body">
                            <ul class="list list--row align-items-center blog-post__info-list">
                                <li>
                                    <span class="blog-post__info">
                                        <?php echo e(showDateTime($blog->created_at, 'F j, Y')); ?>

                                    </span>
                                </li>
                                <li>
                                    <span class="blog-post__info">
                                        <span class="blog-post__info-icon">
                                            <i class="lar la-clock"></i>
                                        </span>
                                        <?php echo e(diffForHumans($blog->created_at)); ?>

                                    </span>
                                </li>
                            </ul>
                            <h5 class="blog-post__title">
                                <a href="<?php echo e(route('blogDetail',$blog->id)); ?>" class="blog-post__link">
                                    <?php echo e(__($blog->data_values->title)); ?>

                                </a>
                            </h5>
                            <p class="blog-post__description">
                                <?php echo e(strLimit(strip_tags($blog->data_values->description),80)); ?>

                            </p>
                            <a href="<?php echo e(route('blogDetail',$blog->id)); ?>" class="blog-post__btn">
                                <?php echo app('translator')->get('Read Now'); ?>
                                <span class="blog-post__arrow">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/blog.blade.php ENDPATH**/ ?>