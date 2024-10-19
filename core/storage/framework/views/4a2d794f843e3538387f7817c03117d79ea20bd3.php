<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar__main-logo"><img src="<?php echo e(getImage(getFilePath('logoIcon') . '/logo.png')); ?>" alt="<?php echo app('translator')->get('image'); ?>"></a>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item <?php echo e(menuActive('admin.dashboard')); ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Dashboard'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.frontend.sections*',3)); ?>">
                        <i class="menu-icon la la-tools"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Frontend Items'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.frontend.sections*',2)); ?> ">
                        <ul>
                            <?php
                               $lastSegment =  collect(request()->segments())->last();
                            ?>
                            <li class="sidebar-menu-item <?php echo e(request()->path() == 'admin/frontend/frontend-sections/notice' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.frontend.sections', 'notice')); ?>" class="nav-link ">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Notice Board'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(request()->path() == 'admin/frontend/frontend-sections/popup' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.frontend.sections', 'popup')); ?>" class="nav-link ">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Popup Notice'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(request()->path() == 'admin/frontend/frontend-sections/banner' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.frontend.sections', 'banner')); ?>" class="nav-link ">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Sliding Banner'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(request()->path() == 'admin/frontend/frontend-sections/links' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.frontend.sections', 'links')); ?>" class="nav-link ">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Importent Links'); ?></span>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.referrals.*')); ?>">
                    <a href="<?php echo e(route('admin.referrals.index')); ?>" class="nav-link ">
                        <i class="menu-icon las la-link"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Referral Commissions'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.plan.*')); ?>">
                    <a href="<?php echo e(route('admin.plan.index')); ?>" class="nav-link">
                        <i class="menu-icon las la-bars"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Subscription Plan'); ?></span>
                    </a>
                </li>

                

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.users*', 3)); ?>">
                        <i class="menu-icon las la-users"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Users'); ?></span>

                        <?php if($bannedUsersCount > 0 || $emailUnverifiedUsersCount > 0 || $mobileUnverifiedUsersCount > 0 || $kycUnverifiedUsersCount > 0 || $kycPendingUsersCount > 0): ?>
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.users*', 2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.active')); ?> ">
                                <a href="<?php echo e(route('admin.users.active')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Plan Active Users'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.banned')); ?> ">
                                <a href="<?php echo e(route('admin.users.banned')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Banned Users'); ?></span>
                                    <?php if($bannedUsersCount): ?>
                                        <span class="menu-badge pill bg--danger ms-auto"><?php echo e($bannedUsersCount); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.with.balance')); ?>">
                                <a href="<?php echo e(route('admin.users.with.balance')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('With Balance'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.all')); ?> ">
                                <a href="<?php echo e(route('admin.users.all')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Users'); ?></span>
                                </a>
                            </li>


                            

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.gateway*', 3)); ?>">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Payment Gateways'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.gateway*', 2)); ?> ">
                        <ul>

                            
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.gateway.manual.*')); ?> ">
                                <a href="<?php echo e(route('admin.gateway.manual.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Manual Gateways'); ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.deposit*', 3)); ?>">
                        <i class="menu-icon las la-file-invoice-dollar"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Deposits'); ?></span>
                        <?php if(0 < $pendingDepositsCount): ?>
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.deposit*', 2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.pending')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Deposits'); ?></span>
                                    <?php if($pendingDepositsCount): ?>
                                        <span class="menu-badge pill bg--danger ms-auto"><?php echo e($pendingDepositsCount); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.approved')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.approved')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Approved Deposits'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.successful')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.successful')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Successful Deposits'); ?></span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.rejected')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Deposits'); ?></span>
                                </a>
                            </li>


                            

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.list')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.list')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Deposits'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.withdraw*', 3)); ?>">
                        <i class="menu-icon la la-bank"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Withdrawals'); ?> </span>
                        <?php if(0 < $pendingWithdrawCount): ?>
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.withdraw*', 2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.method.*')); ?>">
                                <a href="<?php echo e(route('admin.withdraw.method.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Withdrawal Methods'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.pending')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Withdrawals'); ?></span>

                                    <?php if($pendingWithdrawCount): ?>
                                        <span class="menu-badge pill bg--danger ms-auto"><?php echo e($pendingWithdrawCount); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.approved')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.approved')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Approved Withdrawals'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.rejected')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Withdrawals'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.log')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Withdrawals'); ?></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>

                


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.report*', 3)); ?>">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Report'); ?> </span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.report*', 2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.transaction', 'admin.report.transaction.search'])); ?>">
                                <a href="<?php echo e(route('admin.report.transaction')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Transaction Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.login.history', 'admin.report.login.ipHistory'])); ?>">
                                <a href="<?php echo e(route('admin.report.login.history')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Login History'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.report.notification.history')); ?>">
                                <a href="<?php echo e(route('admin.report.notification.history')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Notification History'); ?></span>
                                </a>
                            </li>

                            

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.report.commissions')); ?>">
                                <a href="<?php echo e(route('admin.report.commissions')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Referral Commissions'); ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar__menu-header"><?php echo app('translator')->get('Settings'); ?></li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.index')); ?>">
                    <a href="<?php echo e(route('admin.setting.index')); ?>" class="nav-link">
                        <i class="menu-icon las la-life-ring"></i>
                        <span class="menu-title"><?php echo app('translator')->get('General Setting'); ?></span>
                    </a>
                </li>

                

                

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.logo.icon')); ?>">
                    <a href="<?php echo e(route('admin.setting.logo.icon')); ?>" class="nav-link">
                        <i class="menu-icon las la-images"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Logo & Favicon'); ?></span>
                    </a>
                </li>

                

                

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.seo')); ?>">
                    <a href="<?php echo e(route('admin.seo')); ?>" class="nav-link">
                        <i class="menu-icon las la-globe"></i>
                        <span class="menu-title"><?php echo app('translator')->get('SEO Manager'); ?></span>
                    </a>
                </li>

                

                


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.setting.notification*', 3)); ?>">
                        <i class="menu-icon las la-bell"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Notification Setting'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.setting.notification*', 2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.notification.global')); ?> ">
                                <a href="<?php echo e(route('admin.setting.notification.global')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Global Template'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.notification.email')); ?> ">
                                <a href="<?php echo e(route('admin.setting.notification.email')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Setting'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.notification.sms')); ?> ">
                                <a href="<?php echo e(route('admin.setting.notification.sms')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Setting'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.notification.templates')); ?> ">
                                <a href="<?php echo e(route('admin.setting.notification.templates')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Notification Templates'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                

                

                <li class="sidebar__menu-header"><?php echo app('translator')->get('Extra'); ?></li>


                <li class="sidebar-menu-item <?php echo e(menuActive('admin.maintenance.mode')); ?>">
                    <a href="<?php echo e(route('admin.maintenance.mode')); ?>" class="nav-link">
                        <i class="menu-icon las la-robot"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Maintenance Mode'); ?></span>
                    </a>
                </li>

                

                

                

                
            </ul>
            
        </div>
    </div>
</div>
<!-- sidebar end -->

<?php $__env->startPush('script'); ?>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/admin/partials/sidenav.blade.php ENDPATH**/ ?>