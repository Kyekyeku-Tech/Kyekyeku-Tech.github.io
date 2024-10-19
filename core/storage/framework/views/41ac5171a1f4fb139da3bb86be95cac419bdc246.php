<?php
    $faqCaption = getContent('faq.content',true);
    $faqs = getContent('faq.element');
?>
<div class="section faq-section">
	<div class="section__head">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-xl-6">
					<div class="text-center">
						<span class="section__subtitle"><?php echo e(__($faqCaption->data_values->subheading)); ?></span>
						<h2 class="section__title m-0"><?php echo e(__($faqCaption->data_values->heading)); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-xl-8">
				<div class="accordion custom--accordion" id="faq">
					<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button
									class="accordion-button collapsed"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#collapse<?php echo e($key); ?>"
									aria-expanded="false"
								>
									<?php echo e(__($faq->data_values->question)); ?>

								</button>
							</h2>
							<div
								id="collapse<?php echo e($key); ?>"
								class="accordion-collapse collapse"
								data-bs-parent="#faq"
							>
								<div class="accordion-body">
									<?php echo e(__($faq->data_values->answer)); ?>

								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/faq.blade.php ENDPATH**/ ?>