<?php $__env->startSection('content'); ?>
<?php
    $kycInfo = getContent('kyc_info.content',true);
?>
<div id="appCapsule">
    <!-- Profile Card -->
    <div class="bg-light" style="border-radius: 0px 0px 30px 30px;">
        <div class="py-3 px-2">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img style="width: 100px; height: 100px;" src="<?php echo e(asset('assets/images/avatar/cool-man-3.png')); ?>" alt="">
                </div>
                <div class="col">
                    <h6 class="mb-1 text-primary small-font">
                        <?php echo e('UID: '.$user->username); ?>

                        <span class="badge badge-success">
                            <?php if($user->plan): ?>
                                <?php echo e(__($user->plan->name)); ?> <?php if($user->expire_date < now()): ?> (<?php echo app('translator')->get('Expired'); ?>) <?php endif; ?>
                            <?php else: ?>
                                <?php echo app('translator')->get('No Plan'); ?>
                            <?php endif; ?>
                        </span>
                    </h6>
                    <h6 class="mb-0 text-primary small-font-sm"><?php echo e('Invite Code: '.$user->username); ?></h6>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-primary">
                        <i class="fas fa-angle-right" style="font-size: 20px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>

    </style>

    <div class="container">
        <div class="card bg-light mt-4 mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <p class="mb-0 small-font-sm text-primary">
                            Balance
                        </p>
                        <h6 class="mb-0 small-font-lg text-primary">
                            <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                        </h6>
                    </div>
                    <div class="col-6 px-0">
                        <div class="card bg-primary balance-card-2">
                            <div class="card-body text-end row align-items-center">
                                <div class="col-12">
                                    <p class="mb-0 small-font-sm text-white">
                                        Balance
                                    </p>
                                    <h6 class="mb-0 small-font-lg text-white">
                                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reports -->
        <div class="row">
            <div class="col-4 mb-2 pe-1">
                <div class="border border-primary rounded text-center py-2">
                    <p class="mb-0 text-primary small-font-sm">Today's Earning</p>
                    <h6 class="mb-0 small-font-lg text-primary">
                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                    </h6>
                </div>
            </div>
            <div class="col-4 mb-2 px-1">
                <div class="border border-primary rounded text-center py-2">
                    <p class="mb-0 text-primary small-font-sm">Today's Earning</p>
                    <h6 class="mb-0 small-font-lg text-primary">
                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                    </h6>
                </div>
            </div>
            <div class="col-4 mb-2 ps-1">
                <div class="border border-primary rounded text-center py-2">
                    <p class="mb-0 text-primary small-font-sm">Today's Earning</p>
                    <h6 class="mb-0 small-font-lg text-primary">
                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                    </h6>
                </div>
            </div>
            <div class="col-4 mb-2 pe-1">
                <div class="border border-primary rounded text-center py-2">
                    <p class="mb-0 text-primary small-font-sm">Today's Earning</p>
                    <h6 class="mb-0 small-font-lg text-primary">
                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                    </h6>
                </div>
            </div>
            <div class="col-4 mb-2 px-1">
                <div class="border border-primary rounded text-center py-2">
                    <p class="mb-0 text-primary small-font-sm">Today's Earning</p>
                    <h6 class="mb-0 small-font-lg text-primary">
                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                    </h6>
                </div>
            </div>
            <div class="col-4 mb-2 ps-1">
                <div class="border border-primary rounded text-center py-2">
                    <p class="mb-0 text-primary small-font-sm">Today's Earning</p>
                    <h6 class="mb-0 small-font-lg text-primary">
                        <?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->balance)); ?>

                    </h6>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-address-card"></i>
                </div>
                <span class="small-font-sm text-primary">PIA</span>
            </div>
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-donate"></i>
                </div>
                <span class="small-font-sm text-primary">Recharge</span>
            </div>
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-wallet"></i>
                </div>
                <span class="small-font-sm text-primary">Withdraw</span>
            </div>
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-random"></i>
                </div>
                <span class="small-font-sm text-primary">Transfer</span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <span class="small-font-sm text-primary">Reports</span>
            </div>
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-book"></i>
                </div>
                <span class="small-font-sm text-primary">Transaction</span>
            </div>
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-cog"></i>
                </div>
                <span class="small-font-sm text-primary">Setting</span>
            </div>
            <div class="col-3 text-center">
                <div class="card-box">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <span class="small-font-sm text-primary">Log Out</span>
            </div>
        </div>

    </div>

</div>






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
    // var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
    // chart.render();
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

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/whiteTrading/core/resources/views/templates/basic/user/dashboard.blade.php ENDPATH**/ ?>