<?php
	$testimonialCaption = getContent('testimonial.content',true);
    $testimonials = getContent('testimonial.element');
?>
<div class="section--sm">
	<div class="section__head">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-xl-6 col-xxl-5">
					<div class="text-center">
						<span class="section__subtitle"><?php echo e(__($testimonialCaption->data_values->subheading)); ?></span>
						<h2 class="section__title m-0"><?php echo e(__($testimonialCaption->data_values->heading)); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="testimonial-slider">
					<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="testimonial-slider__item">
							<div class="testimonial">
								<div class="testimonial__head">
									<h5 class="testimonial__subject"><?php echo e(__($testimonial->data_values->reason)); ?></h5>
									<div class="testimonial__quote">
										<i class="fas fa-quote-left"></i>
									</div>
								</div>
								<div class="testimonial__body">
									<p class="testimonial__text">
										<?php echo e(__($testimonial->data_values->comment)); ?>

									</p>
								</div>
								<div class="testimonial__footer">
									<div class="testimonial__user">
										<div class="testimonial__img">
											<img
												src="<?php echo e(getImage('assets/images/frontend/testimonial/'.$testimonial->data_values->image)); ?>"
												alt="image"
												class="testimonial__img-is"
											/>
										</div>
										<div class="testimonial__content">
											<h5 class="testimonial__title"><?php echo e(__($testimonial->data_values->name)); ?></h5>
											<span class="testimonial__sub-title"><?php echo e(__($testimonial->data_values->designation)); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/testimonial.blade.php ENDPATH**/ ?>