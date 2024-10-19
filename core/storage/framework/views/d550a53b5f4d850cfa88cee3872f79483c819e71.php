<?php
	$content = getContent('header.content', true);
?>
<!-- Header Top -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="list list--row header-menu">
                    <li>
                        <a href="tel:<?php echo e(__($content->data_values->phone)); ?>" class="header-menu__link">
                            <span class="header-menu__icon">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <span class="header-menu__text">
                                <?php echo e(__($content->data_values->phone)); ?>

                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?php echo e(__($content->data_values->email)); ?>" class="header-menu__link">
                            <span class="header-menu__icon">
                                <i class="far fa-envelope"></i>
                            </span>
                            <span class="header-menu__text">
                                <?php echo e(__($content->data_values->email)); ?>

                            </span>
                        </a>
                    </li>
                    <li class="header-menu__end">
                        <div class="select-lang--container">
							<?php if($general->multi_language): ?>
								<div class="select-lang">
									<span class="select-lang__icon">
										<i class="las la-globe"></i>
									</span>
									<select class="form-select langSel">
										<?php
											$langs = App\Models\Language::all();
										?>
										<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($lang->code); ?>" <?php if(Session::get('lang')===$lang->code): ?> selected
												<?php endif; ?>><?php echo e(__($lang->name)); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							<?php endif; ?>
                        </div>
                    </li>
                    <li>
						<?php if(auth()->guard()->guest()): ?>
							<a href="<?php echo e(route('user.login')); ?>" class="login-btn rounded-pill">
								<span class="login-btn__icon">
									<i class="las la-user"></i>
								</span>
								<span class="login-btn__text"><?php echo app('translator')->get('Login'); ?></span>
							</a>
						<?php else: ?>
							<a href="<?php echo e(route('user.home')); ?>" class="login-btn rounded-pill">
								<span class="login-btn__icon">
									<i class="las la-tachometer-alt"></i>
								</span>
								<span class="login-btn__text"><?php echo app('translator')->get('Dashboard'); ?></span>
							</a>
						<?php endif; ?>
                    </li>
                </ul>
			</div>
		</div>
	</div>
</div>
<!-- Header Top End -->
<!-- Header -->
<header class="header-primary <?php echo e(request()->routeIs('user.login') || request()->routeIs('user.register') ? 'header-primary--sticky' : 'header-primary--fixed'); ?>">
	<div class="container">
		<div class="header-primary__content">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<!-- Logo  -->
				<a href="<?php echo e(route('home')); ?>" class="logo">
					<img
						src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>"
						alt="site-logo"
						class="img-fluid logo__is"
					/>
				</a>
				<!-- Logo End -->
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarToggle"
					aria-expanded="false"
				>
					<span class="menu-toggle"></span>
				</button>
			</nav>
			<div class="collapse navbar-collapse" id="navbarToggle">
				<div class="nav-container">
					<!-- Primary Menu  -->
					<ul class="list primary-menu  justify-content-lg-end">
						<li class="nav-item">
							<a href="<?php echo e(route('home')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Home'); ?></a>
						</li>
						<?php
                            $pages = App\Models\Page::where('tempname',$activeTemplate)->where('is_default',Status::NO)->get();
                        ?>
						<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page->slug != 'home' && $page->slug != 'blog' && $page->slug != 'contact'): ?>
                                <li>
									<a href="<?php echo e(route('pages',$page->slug)); ?>" class="primary-menu__link"><?php echo e(__($page->name)); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a href="<?php echo e(route('plans')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Plans'); ?></a>
						</li>
                        <li>
							<a href="<?php echo e(route('blog')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Blog'); ?></a>
						</li>
						<li class="nav-item">
							<a href="<?php echo e(route('contact')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Contact'); ?></a>
						</li>
					</ul>
					<!-- Primary Menu End -->
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header End -->
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/partials/header.blade.php ENDPATH**/ ?>