<!-- ===============>> Header section start here <<================= -->
<header class="header-section bg-color-3">
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
                        <li>
                            <a href="<?php echo e(route('user.home')); ?>">Dashboard</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#0">Deposit</a>
                            <ul class="submenu">
                                <li><a href="<?php echo e(route('user.deposit.index')); ?>"><?php echo app('translator')->get('Deposit Now'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.deposit.history')); ?>"><?php echo app('translator')->get('Deposit History'); ?></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#0"><?php echo app('translator')->get('Withdraw'); ?></a>
                            <ul class="submenu">
                                <li><a href="<?php echo e(route('user.withdraw')); ?>"><?php echo app('translator')->get('Withdraw Now'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.withdraw.history')); ?>"><?php echo app('translator')->get('Withdraw History'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('plans')); ?>"><?php echo app('translator')->get('Plans'); ?></a></li>

                        <li class="menu-item-has-children"><a href="#0"><?php echo app('translator')->get('PTC'); ?></a>
                            <ul class="submenu">
                                <li><a href="<?php echo e(route('user.ptc.index')); ?>"><?php echo app('translator')->get('Ads'); ?></a></li>
                                <?php if($general->user_ads_post): ?>
                                <li><a href="<?php echo e(route('user.ptc.ads')); ?>"><?php echo app('translator')->get('My Ads'); ?></a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo e(route('user.ptc.clicks')); ?>"><?php echo app('translator')->get('Clicks'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('user.transactions')); ?>"><?php echo app('translator')->get('Transactions'); ?></a></li>

                        <li class="menu-item-has-children"><a href="#0"><?php echo app('translator')->get('Referral'); ?></a>
                            <ul class="submenu">
                                <li><a href="<?php echo e(route('user.commissions')); ?>"><?php echo app('translator')->get('Commissions'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('user.referred')); ?>"><?php echo app('translator')->get('Referred Users'); ?></a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children"><a href="#0"><?php echo app('translator')->get('Account'); ?></a>
                            <ul class="submenu">
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
                <div class="header-action">
                    <div class="menu-area">
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
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/partials/user/header.blade.php ENDPATH**/ ?>