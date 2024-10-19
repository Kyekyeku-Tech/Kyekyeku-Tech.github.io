<!-- ===============>> footer start here <<================= -->
<footer class="footer brand-1">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__top footer__top--style1">
                <div class="row gy-5 gx-4">
                    <div class="col-md-6">
                        <div class="footer__about">
                            <a href="<?php echo e(route('home')); ?>" class="footer__about-logo">
                                <img class="site-logo" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>"
                                    alt="logo">
                            </a>
                            <p class="footer__about-moto ">Welcome to our trading site! We offer the best, most
                                affordable products and services around. Shop now and start finding great deals!</p>
                            <div class="footer__app">
                                <div class="footer__app-item footer__app-item--apple">
                                    <div class="footer__app-inner">
                                        <div class="footer__app-thumb">
                                            <a href="https://www.apple.com/app-store/" target="_blank"
                                                class="stretched-link">
                                                <img src="<?php echo e(asset('assets/images/footer/apple.png')); ?>" alt="apple-icon">
                                            </a>
                                        </div>
                                        <div class="footer__app-content">
                                            <span>Download on the</span>
                                            <p class="mb-0 text-dark">App Store</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer__app-item footer__app-item--playstore">
                                    <div class="footer__app-inner">
                                        <div class="footer__app-thumb">
                                            <a href="https://play.google.com/store" target="_blank"
                                                class="stretched-link">
                                                <img src="<?php echo e(asset('assets/images/footer/play.png')); ?>" alt="playstore-icon">
                                            </a>
                                        </div>
                                        <div class="footer__app-content">
                                            <span>GET IT ON</span>
                                            <p class="mb-0 text-light">Google Play</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h6>Quick links</h6>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <?php
                                        $pages = App\Models\Page::where('tempname',$activeTemplate)->where('is_default', Status::NO)->get();
                                    ?>
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($page->slug != 'home' && $page->slug != 'blog' && $page->slug != 'contact'): ?>
                                            <li class="footer__linklist-item"><a href="<?php echo e(route('pages',$page->slug)); ?>"><?php echo e(__($page->name)); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li class="footer__linklist-item"> <a href="<?php echo e(route('all.teams')); ?>">Teams</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h6>Support</h6>
                            </div>
                            <div class="footer__links-content">
                                <?php
                                    $links = getContent('policy_pages.element');
                                ?>
                                <ul class="footer__linklist">
                                    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="footer__linklist-item">
                                            <a
                                                href="<?php echo e(route('policy.pages', [slug($link->data_values->title), $link->id])); ?>"><?php echo e(__($link->data_values->title)); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__end">
                    <div class="footer__end-copyright">
                        <p class=" mb-0">© <?php echo e(date('Y')); ?> All Rights Reserved By <a href="<?php echo e(route('home')); ?>"
                                target="_blank"><?php echo e($general->site_name); ?></a> </p>
                    </div>
                    <div>
                        <ul class="social">
                            <li class="social__item">
                                <a href="#" class="social__link social__link--style22"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link social__link--style22 "><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link social__link--style22"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link social__link--style22"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link social__link--style22 "><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__shape">
        <span class="footer__shape-item footer__shape-item--1"><img src="<?php echo e(asset('assets/images/footer/1.png')); ?>"
                alt="shape icon"></span>
        <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
    </div>
</footer>
<!-- ===============>> footer end here <<================= -->
<?php /**PATH /home/ethemest/DEMO/demo.viser.store/miningjs/core/resources/views/templates/basic/partials/home/footer.blade.php ENDPATH**/ ?>