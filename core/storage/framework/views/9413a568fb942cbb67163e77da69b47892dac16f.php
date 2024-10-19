<?php
	$content = getContent('footer.content', true);
	$socialIcons = getContent('social_icon.element', false, false, true);
	$links = getContent('policy_pages.element', false);
	$infos = getContent('contact.element');
?>
<!-- Footer  -->
<div class="section--sm pb-0">
	<footer class="footer">
		<div class="section">
			<div class="container">
				<div class="row g-4 justify-content-xl-between">
					<div class="col-md-10 col-xl-4">
						<h4 class="mt-0 footer__title"><?php echo e(__($content->data_values->heading)); ?></h4>
						<p class="footer__description text--white">
							<?php echo e(__($content->data_values->description)); ?>

						</p>
						<ul class="list list--row social-list">
							<?php $__currentLoopData = $socialIcons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<a href="<?php echo e(__($social->data_values->url)); ?>" target="_blank" class="t-link social-list__icon" title="<?php echo e(__($social->data_values->title)); ?>">
										<?php
											echo $social->data_values->icon
										?>
									</a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="col-md-4 col-xl-3">
						<h4 class="mt-0 footer__title"><?php echo app('translator')->get('Quick Link'); ?></h4>
						<ul class="list list--column" style="--gap: .5rem;">
							<?php
                            	$pages = App\Models\Page::where('tempname',$activeTemplate)->where('is_default', Status::NO)->get();
							?>
							<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('pages',$page->slug)); ?>" class="t-link t-link--base text--white d-inline-block sm-text"><?php echo e(__($page->name)); ?></a>
                                </li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a href="<?php echo e(route('plans')); ?>" class="t-link t-link--base text--white d-inline-block sm-text"><?php echo app('translator')->get('Plans'); ?></a>
							</li>
							<li>
								<a href="<?php echo e(route('blog')); ?>" class="t-link t-link--base text--white d-inline-block sm-text"><?php echo app('translator')->get('Blog'); ?></a>
							</li>
							<li class="nav-item">
								<a href="<?php echo e(route('contact')); ?>" class="t-link t-link--base text--white d-inline-block sm-text"><?php echo app('translator')->get('Contact'); ?></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 col-xl-3">
						<h4 class="mt-0 footer__title"><?php echo app('translator')->get('Privacy And Terms'); ?></h4>
						<ul class="list list--column" style="--gap: .5rem;">
							<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<a class="t-link t-link--base text--white d-inline-block sm-text" href="<?php echo e(route('policy.pages',[slug($link->data_values->title),$link->id])); ?>"><?php echo e(__($link->data_values->title)); ?></a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="col-md-4 col-xl-2">
						<h4 class="mt-0 footer__title"><?php echo app('translator')->get('Contact Info'); ?></h4>
						<ul class="list list--column" style="--gap: .5rem;">
							<?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="t-link t-link--base text--white d-inline-block sm-text">
									<span class="me-2"><?php echo $info->data_values->icon ?></span><?php echo e(__($info->data_values->content)); ?>

								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__copyright py-3">
			<p class="mb-0 sm-text text--white text-center">
				&copy; <?php echo e(date('Y')); ?>. <?php echo app('translator')->get('All Rights Reserved By'); ?>
				<a href="<?php echo e(route('home')); ?>" class="t-link t-link--base text--base"><?php echo e(__($general->site_name)); ?></a>
			</p>
		</div>
	</footer>
</div>
<!-- Footer End -->
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/partials/footer.blade.php ENDPATH**/ ?>