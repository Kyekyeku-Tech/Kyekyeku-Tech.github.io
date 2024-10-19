<!-- ===============>> Header section start here <<================= -->
<style>
    @media only screen and (min-width: 600px) {
        .mobile-view {
            display: none !important;
        }
    }
</style>
<header class="header-section header-section--style2">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <img class="site-logo" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu menu--style1">
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
                        <li class="mobile-view" style="display: block"><a href="<?php echo e(route('user.login')); ?>"><?php echo app('translator')->get('Login'); ?></a></li>
                        <li class="mobile-view" style="display: block"><a href="<?php echo e(route('user.register')); ?>"><?php echo app('translator')->get('Sign Up'); ?></a></li>
                    </ul>

                </div>
                <div class="header-action">
                    <div class="menu-area">
                        <div class="header-btn">
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('user.login')); ?>" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Login</span>
                                </a>
                                <a href="<?php echo e(route('user.register')); ?>" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Registration</span>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(route('user.home')); ?>" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Dashboard</span>
                                </a>
                            <?php endif; ?>
                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none header-bar--style1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ===============>> Header section end here <<================= -->
<?php /**PATH /home/ethemest/DEMO/script.viser.store/usdt/core/resources/views/templates/basic/partials/home/header.blade.php ENDPATH**/ ?>