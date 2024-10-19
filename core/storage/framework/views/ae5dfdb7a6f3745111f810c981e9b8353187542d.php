<?php $__env->startSection('content'); ?>
<?php
    $kycInfo = getContent('kyc_info.content',true);
?>
<section class="cmn-section">
    <div class="container">
        <div class="row cmn-text">
            <div class="col-md-12 mb-4">
                <?php if(auth()->user()->kv == 0): ?>
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading"><?php echo app('translator')->get('KYC Verification required'); ?></h4>
                        <hr>
                        <p class="mb-0"><?php echo e(__($kycInfo->data_values->verification_content)); ?> <a
                                href="<?php echo e(route('user.kyc.form')); ?>"><?php echo app('translator')->get('Click Here to Verify'); ?></a>
                        </p>
                    </div>
                <?php elseif(auth()->user()->kv == 2): ?>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading"><?php echo app('translator')->get('KYC Verification pending'); ?></h4>
                        <hr>
                        <p class="mb-0"><?php echo e(__($kycInfo->data_values->pending_content)); ?> <a
                                href="<?php echo e(route('user.kyc.data')); ?>"><?php echo app('translator')->get('See KYC Data'); ?></a></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6 mb-30">
                <div class="widget-two h-100 box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-dollar-sign overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="bal"><?php echo e(getAmount($user->balance)); ?> <?php echo e($general->cur_sym); ?></h2>
                        <div class="d-flex flex-wrap justify-content-between position-relative">
                            <p><?php echo app('translator')->get('My Balance'); ?></p>
                        <a href="<?php echo e(route('user.withdraw')); ?>"
                                class="btn cmn-btn"><?php echo app('translator')->get('Withdraw'); ?> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div><!-- widget-two end -->
            </div>
            <div class="col-md-6 mb-30">
                <div class="widget-two h-100 box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-gem overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2>
                            <?php if($user->plan): ?>
                                <?php echo e(__($user->plan->name)); ?> <?php if($user->expire_date < now()): ?> (<?php echo app('translator')->get('Expired'); ?>) <?php endif; ?>
                            <?php else: ?>
                                <?php echo app('translator')->get('No Plan'); ?>
                            <?php endif; ?>
                        </h2>
                        <div class="d-flex flex-wrap justify-content-between position-relative">
                            <p><?php echo app('translator')->get('My Plan'); ?></p>
                        <a href="<?php echo e(route('plans')); ?>" class="btn cmn-btn"><?php if($user->expire_date >= now()): ?> <?php echo app('translator')->get('Change Plan'); ?> <?php else: ?> <?php echo app('translator')->get('Plans'); ?> <?php endif; ?> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        <?php if($user->expire_date >= now()): ?>
                        <small class="text--danger"><?php echo app('translator')->get('expire in'); ?> <?php echo e(\Carbon\Carbon::parse($user->expire_date)->format('Y-m-d')); ?></small>
                        <?php endif; ?>
                    </div>
                </div><!-- widget-two end -->
            </div>
            <div class="col-6 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded bg--primary">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2><?php echo e(getAmount($user->deposits->sum('amount'))); ?> <?php echo e($general->cur_sym); ?></h2>
                        <p><?php echo app('translator')->get('Total Deposit'); ?></p>
                        <a href="<?php echo e(route('user.deposit.history')); ?>" class="btn cmn-btn mt-2"><?php echo app('translator')->get('Deposit Log '); ?><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded bg--primary">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2> <?php echo e(getAmount($user->withdrawals->where('status',1)->sum('amount'))); ?> <?php echo e($general->cur_sym); ?></h2>
                        <p><?php echo app('translator')->get('Total Withdraw'); ?></p>
                        <a href="<?php echo e(route('user.withdraw.history')); ?>" class="btn cmn-btn mt-2"><?php echo app('translator')->get('Withdraw Log '); ?><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            
            
            

            <a href="javascript:void(0)" class="col-lg-6 col-md-12 mb-30">
                <div class="widget bb--3 border--success b-radius--10 bg--white p-2 pt-3 box--shadow2">
                    <div class="widget__icon b-radius--rounded bg--success"><i class="fas fa-stopwatch"></i></div>
                    <div class="widget__content">
                        <p class="text-uppercase text-muted mb-0"><?php echo app('translator')->get('Next Reminder'); ?></p>
                        <h2 class="text--base fw-bold timer" id="counter"></h2>
                    </div>
                    <div class="widget__arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>

            <a href="<?php echo e(route('user.commissions')); ?>" class="col-lg-6 col-md-12 mb-30">
                <div class="widget bb--3 border--success b-radius--10 bg--white p-2 pt-3 box--shadow2">
                    <div class="widget__icon b-radius--rounded bg--success"><i class="fas fa-mouse-pointer"></i></div>
                    <div class="widget__content">
                        <p class="text-uppercase text-muted mb-0"><?php echo app('translator')->get('Referral Commissions'); ?></p>
                        <h2 class="text--base fw-bold">
                            <?php echo e(__($commissionCount)); ?> <?php echo e($general->cur_text); ?>

                        </h2>
                    </div>
                    <div class="widget__arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>

            

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('assets/admin/js/vendor/apexcharts.min.js')); ?>"></script>
<script>
(function ($) {
    "use strict";
    // apex-bar-chart js
    var options = {
      series: [{
      name: 'Clicks',
      data: [
        <?php $__currentLoopData = $chart['click']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $click): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($click); ?>,
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      ]
    }, {
      name: 'Earn Amount',
      data: [
            <?php $__currentLoopData = $chart['amount']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($amount); ?>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      ]
    }],
      chart: {
      type: 'bar',
      height: 580,
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
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
      categories: [
      <?php $__currentLoopData = $chart['amount']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                '<?php echo e($key); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ],
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val
        }
      }
    }
    };
    var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
    chart.render();
        function createCountDown(elementId, sec) {
            var tms = sec;
            var x = setInterval(function() {
                var distance = tms*1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "<?php echo e(__('COMPLETE')); ?>";
                }
                tms--;
            }, 1000);
        }
      createCountDown('counter', <?php echo e(\Carbon\Carbon::tomorrow()->diffInSeconds()); ?>);
})(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/user/dashboard.blade.php ENDPATH**/ ?>