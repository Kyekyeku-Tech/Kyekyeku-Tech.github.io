<?php $__env->startSection('panel'); ?>

<style>
    .widget-two__btn {
        z-index: 1;
    }
</style>

<?php if(@json_decode($general->system_info)->version > systemDetails()['version']): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo app('translator')->get('New Version Available'); ?> <button
                            class="btn btn--dark float-end"><?php echo app('translator')->get('Version'); ?>
                            <?php echo e(json_decode($general->system_info)->version); ?></button> </h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-dark"><?php echo app('translator')->get('What is the Update ?'); ?></h5>
                    <p>
                        <pre class="f-size--24"><?php echo e(json_decode($general->system_info)->details); ?></pre>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(@json_decode($general->system_info)->message): ?>
    <div class="row">
        <?php $__currentLoopData = json_decode($general->system_info)->message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12">
                <div class="alert border border--primary" role="alert">
                    <div class="alert__icon bg--primary"><i class="far fa-bell"></i></div>
                    <p class="alert__message"><?php echo $msg; ?></p>
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<div class="row gy-4">
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['link' => ''.e(route('admin.users.all')).'','image' => ''.e(asset('assets/images/3d-logo/team-3.png')).'','title' => 'Total Users','value' => ''.e($widget['total_users']).'','bg' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.users.all')).'','image' => ''.e(asset('assets/images/3d-logo/team-3.png')).'','title' => 'Total Users','value' => ''.e($widget['total_users']).'','bg' => 'warning']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['link' => ''.e(route('admin.users.active')).'','image' => ''.e(asset('assets/images/3d-logo/user-6.png')).'','title' => 'Plan Active Users','value' => ''.e($widget['verified_users']).'','bg' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.users.active')).'','image' => ''.e(asset('assets/images/3d-logo/user-6.png')).'','title' => 'Plan Active Users','value' => ''.e($widget['verified_users']).'','bg' => 'success']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div><!-- dashboard-w1 end -->
    
</div><!-- row end-->

<div class="row gy-4 mt-2">
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.deposit.list')).'','icon' => 'fas fa-hand-holding-usd','image' => ''.e(asset('assets/images/3d-logo/deposit.png')).'','iconStyle' => 'false','title' => 'Total Deposited','value' => ''.e($general->cur_sym).''.e(showAmount($deposit['total_deposit_amount'])).'','color' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.deposit.list')).'','icon' => 'fas fa-hand-holding-usd','image' => ''.e(asset('assets/images/3d-logo/deposit.png')).'','icon_style' => 'false','title' => 'Total Deposited','value' => ''.e($general->cur_sym).''.e(showAmount($deposit['total_deposit_amount'])).'','color' => 'success']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.deposit.pending')).'','icon' => 'fas fa-spinner','image' => ''.e(asset('assets/images/3d-logo/clock-3.png')).'','iconStyle' => 'false','title' => 'Pending Deposits','value' => ''.e($deposit['total_deposit_pending']).'','color' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.deposit.pending')).'','icon' => 'fas fa-spinner','image' => ''.e(asset('assets/images/3d-logo/clock-3.png')).'','icon_style' => 'false','title' => 'Pending Deposits','value' => ''.e($deposit['total_deposit_pending']).'','color' => 'warning']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.deposit.rejected')).'','icon' => 'fas fa-ban','image' => ''.e(asset('assets/images/3d-logo/lose.png')).'','iconStyle' => 'false','title' => 'Rejected Deposits','value' => ''.e($deposit['total_deposit_rejected']).'','color' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.deposit.rejected')).'','icon' => 'fas fa-ban','image' => ''.e(asset('assets/images/3d-logo/lose.png')).'','icon_style' => 'false','title' => 'Rejected Deposits','value' => ''.e($deposit['total_deposit_rejected']).'','color' => 'warning']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.deposit.list')).'','icon' => 'fas fa-percentage','image' => ''.e(asset('assets/images/3d-logo/percent.png')).'','iconStyle' => 'false','title' => 'Deposited Charge','value' => ''.e($general->cur_sym).''.e(showAmount($deposit['total_deposit_charge'])).'','color' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.deposit.list')).'','icon' => 'fas fa-percentage','image' => ''.e(asset('assets/images/3d-logo/percent.png')).'','icon_style' => 'false','title' => 'Deposited Charge','value' => ''.e($general->cur_sym).''.e(showAmount($deposit['total_deposit_charge'])).'','color' => 'primary']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div><!-- dashboard-w1 end -->
</div><!-- row end-->

<div class="row gy-4 mt-2">
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.withdraw.log')).'','icon' => 'lar la-credit-card','image' => ''.e(asset('assets/images/3d-logo/wallet.png')).'','title' => 'Total Withdrawn','value' => ''.e($general->cur_sym).''.e(showAmount($withdrawals['total_withdraw_amount'])).'','color' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.withdraw.log')).'','icon' => 'lar la-credit-card','image' => ''.e(asset('assets/images/3d-logo/wallet.png')).'','title' => 'Total Withdrawn','value' => ''.e($general->cur_sym).''.e(showAmount($withdrawals['total_withdraw_amount'])).'','color' => 'success']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.withdraw.pending')).'','icon' => 'las la-sync','image' => ''.e(asset('assets/images/3d-logo/clock.png')).'','title' => 'Pending Withdrawals','value' => ''.e($withdrawals['total_withdraw_pending']).'','color' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.withdraw.pending')).'','icon' => 'las la-sync','image' => ''.e(asset('assets/images/3d-logo/clock.png')).'','title' => 'Pending Withdrawals','value' => ''.e($withdrawals['total_withdraw_pending']).'','color' => 'warning']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.withdraw.rejected')).'','icon' => 'las la-times-circle','image' => ''.e(asset('assets/images/3d-logo/payment-failed.png')).'','title' => 'Rejected Withdrawals','value' => ''.e($withdrawals['total_withdraw_rejected']).'','color' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.withdraw.rejected')).'','icon' => 'las la-times-circle','image' => ''.e(asset('assets/images/3d-logo/payment-failed.png')).'','title' => 'Rejected Withdrawals','value' => ''.e($withdrawals['total_withdraw_rejected']).'','color' => 'danger']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <div class="col-xxl-6 col-sm-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.widget','data' => ['style' => '2','link' => ''.e(route('admin.withdraw.log')).'','image' => ''.e(asset('assets/images/3d-logo/percent.png')).'','icon' => 'las la-percent','title' => 'Withdrawal Charge','value' => ''.e($general->cur_sym).''.e(showAmount($withdrawals['total_withdraw_charge'])).'','color' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => '2','link' => ''.e(route('admin.withdraw.log')).'','image' => ''.e(asset('assets/images/3d-logo/percent.png')).'','icon' => 'las la-percent','title' => 'Withdrawal Charge','value' => ''.e($general->cur_sym).''.e(showAmount($withdrawals['total_withdraw_charge'])).'','color' => 'primary']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</div><!-- row end-->






<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script src="<?php echo e(asset('assets/admin/js/vendor/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/vendor/chart.js.2.8.0.js')); ?>"></script>

    <script>
        "use strict";
        var options = {
            series: [{
                name: 'Total Deposit',
                data: [
                  <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(getAmount(@$depositsMonth->where('months',$month)->first()->depositAmount)); ?>,
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            }, {
                name: 'Total Withdraw',
                data: [
                  <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(getAmount(@$withdrawalMonth->where('months',$month)->first()->withdrawAmount)); ?>,
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            }],
            chart: {
                type: 'bar',
                height: 450,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: <?php echo json_encode($months, 15, 512) ?>,
            },
            yaxis: {
                title: {
                    text: "<?php echo e(__($general->cur_sym)); ?>",
                    style: {
                        color: '#7c97bb'
                    }
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "<?php echo e(__($general->cur_sym)); ?>" + val + " "
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();
        var ctx = document.getElementById('userBrowserChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_browser_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_browser_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                maintainAspectRatio: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
        var ctx = document.getElementById('userOsChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_os_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_os_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 0.05)'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            },
        });
        // Donut chart
        var ctx = document.getElementById('userCountryChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_country_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_country_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
        // apex-line chart
        var options = {
        chart: {
            height: 450,
            type: "area",
            toolbar: {
            show: false
            },
            dropShadow: {
            enabled: true,
            enabledSeries: [0],
            top: -2,
            left: 0,
            blur: 10,
            opacity: 0.08
            },
            animations: {
            enabled: true,
            easing: 'linear',
            dynamicAnimation: {
                speed: 1000
            }
            },
        },
        dataLabels: {
            enabled: false
        },
        series: [
            {
            name: "Plus Transactions",
            data: [
                <?php $__currentLoopData = $trxReport['date']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trxDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(@$plusTrx->where('date',$trxDate)->first()->amount ?? 0); ?>,
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
            },
            {
            name: "Minus Transactions",
            data: [
                    <?php $__currentLoopData = $trxReport['date']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trxDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(@$minusTrx->where('date',$trxDate)->first()->amount ?? 0); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            }
        ],
        fill: {
            type: "gradient",
            gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100]
            }
        },
        xaxis: {
            categories: [
                <?php $__currentLoopData = $trxReport['date']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trxDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    "<?php echo e($trxDate); ?>",
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        },
        grid: {
            padding: {
            left: 5,
            right: 5
            },
            xaxis: {
            lines: {
                show: false
            }
            },
            yaxis: {
            lines: {
                show: false
            }
            },
        },
        };
        var chart = new ApexCharts(document.querySelector("#apex-line"), options);
        chart.render();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>