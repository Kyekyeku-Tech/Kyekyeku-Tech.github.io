<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                    <?php if($general->multi_language): ?>
                        <div class="language d-flex align-items-center">
                            <i class="las la-globe-europe"></i>
                            <select class="nic-select langSel">
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
                    <div class="right text-sm-end text-center">
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('user.login')); ?>" class="me-2"><i class="las la-sign-in-alt"></i>
                                <?php echo app('translator')->get('Login'); ?></a>
                            <a href="<?php echo e(route('user.register')); ?>"><i class="las la-user-plus"></i>
                                <?php echo app('translator')->get('Registration'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('user.home')); ?>"><i class="las la-user-plus"></i>
                                <?php echo app('translator')->get('Dashboard'); ?></a>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <a class="site-logo site-title" href="<?php echo e(route('home')); ?>"><img 
                        src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>"
                        alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ms-auto">
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                        <?php
                            $pages = App\Models\Page::where('tempname',$activeTemplate)->where('is_default', Status::NO)->get();
                        ?>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page->slug != 'home' && $page->slug != 'blog' && $page->slug != 'contact'): ?>
                                <li><a href="<?php echo e(route('pages',$page->slug)); ?>"><?php echo e(__($page->name)); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('plans')); ?>"><?php echo app('translator')->get('Plans'); ?></a></li>
                        <li><a href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>
                    </ul>
                    <div class="nav-right">
                        <a href="<?php echo e(route('contact')); ?>"
                            class="cmn-btn style--three"><?php echo app('translator')->get('Contact'); ?></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/partials/header.blade.php ENDPATH**/ ?>