<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <?php if($general->multi_language): ?>
                    <div class="language  d-flex align-items-center">
                        <i class="las la-globe-europe"></i>
                        <select class="nic-select langSel">
                            <?php
                                $langs = App\Models\Language::all();
                            ?>
                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lang->code); ?>" <?php if(Session::get('lang')===$lang->code): ?> selected <?php endif; ?>><?php echo e(__($lang->name)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                <?php endif; ?>
            <div class="right text-sm-end text-center d-flex gap-2">
                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('user.login')); ?>"><i class="las la-sign-in-alt"></i> <?php echo app('translator')->get('Login'); ?></a>
                    <a href="<?php echo e(route('user.register')); ?>"><i class="las la-user-plus"></i> <?php echo app('translator')->get('Registration'); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(route('user.home')); ?>"><i class="las la-user-plus"></i> <?php echo app('translator')->get('Dashboard'); ?></a>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <a class="site-logo site-title" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ms-auto">
                        
                        <li><a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a></li>

                        <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('Deposit'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('user.deposit.index')); ?>"><?php echo app('translator')->get('Deposit Now'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.deposit.history')); ?>"><?php echo app('translator')->get('Deposit History'); ?></a></li>
                            </ul>
                        </li>
                        <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('Withdraw'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('user.withdraw')); ?>"><?php echo app('translator')->get('Withdraw Now'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.withdraw.history')); ?>"><?php echo app('translator')->get('Withdraw History'); ?></a></li>
                            </ul>
                        </li>
                        
                        <li><a href="<?php echo e(route('plans')); ?>"><?php echo app('translator')->get('Plans'); ?></a></li>

                        <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('PTC'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('user.ptc.index')); ?>"><?php echo app('translator')->get('Ads'); ?></a></li>
                                <?php if($general->user_ads_post): ?>
                                <li><a href="<?php echo e(route('user.ptc.ads')); ?>"><?php echo app('translator')->get('My Ads'); ?></a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo e(route('user.ptc.clicks')); ?>"><?php echo app('translator')->get('Clicks'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('user.transactions')); ?>"><?php echo app('translator')->get('Transactions'); ?></a></li>

                        <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('Referral'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('user.commissions')); ?>"><?php echo app('translator')->get('Commissions'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.referred')); ?>"><?php echo app('translator')->get('Referred Users'); ?></a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('Account'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('user.profile.setting')); ?>"><?php echo app('translator')->get('Profile'); ?></a></li>
                                <li><a href="<?php echo e(route('user.change.password')); ?>"><?php echo app('translator')->get('Change
                                        Password'); ?></a></li>
                                <?php if($general->balance_transfer): ?>
                                <li><a href="<?php echo e(route('user.transfer.balance')); ?>"><?php echo app('translator')->get('Balance Transfer'); ?></a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo e(route('ticket.index')); ?>"><?php echo app('translator')->get('Support Ticket'); ?></a></li>
                                <li><a href="<?php echo e(route('user.twofactor')); ?>"><?php echo app('translator')->get('Two Factor'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/partials/user_header.blade.php ENDPATH**/ ?>