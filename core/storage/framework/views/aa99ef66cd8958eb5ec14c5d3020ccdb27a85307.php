<?php $__env->startSection('content'); ?>
    <?php
        $kycInfo = getContent('kyc_info.content', true);
        $inportentLinks = getContent('links.content', true);
    ?>
    <style>
        .bg-profile {
            height: 270px;
            background: url("<?php echo e(asset('assets/images/bg/profile.png')); ?>") no-repeat;
            background-size: 100% 100%;
            padding-top: 0;
        }
        .list-group-item {
            background-color: #061412b3;
        }
    </style>
    <div id="appCapsule">
        <div class="bg-profile p-2">
            <div class="row align-items-center pt-5">
                <div class="col-auto">
                    <img style="width: 80px; height: 80px;" src="<?php echo e(asset('assets/images/avatar/man-2.png')); ?>" alt="">
                </div>
                <div class="col-auto ps-0">
                    <h6 class="mb-0 bg-secondary rounded-pill w-auto text-white small-font p-1 text-center think-font">
                        <?php echo e($user->username); ?>

                    </h6>
                    <h6 class="mb-0 mt-1 bg-secondary rounded-pill w-auto text-white small-font p-1 px-3 text-center think-font">
                        CODE: <span id="refCode"><?php echo e(refCode_encode($user->id)); ?></span> <i onclick="copyTxt('refCode')" class="fas fa-copy text-warning"></i>
                    </h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card border border-1 border-secondary glass-bg">
                        <div class="card-body py-1">
                            <h6 class="mb-1 small-font-sm text-white think-font">Current Balance</h6>
                            <h5 class="mb-0 small-font text-white think-font"><?php echo e(getAmount($user->balance)); ?>

                                <?php echo e($general->cur_text); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border border-1 border-secondary glass-bg">
                        <div class="card-body py-1 text-end">
                            <h6 class="mb-1 small-font-sm text-white think-font">Today Earning</h6>
                            <h5 class="mb-0 small-font text-white think-font">
                                <?php echo e(getAmount($today['earning'])); ?> <?php echo e($general->cur_text); ?>

                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: -50px">


            <ul class="list-group">
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.bank.card')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/bank-card-back-side.png" alt="bank-card-back-side"/>
                        <span class="think-font" style="font-size: 13px">Bank Card</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.change.password')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/key-security.png" alt="key-security"/>
                        <span class="think-font" style="font-size: 13px">Password</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.transactions')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/bill.png" alt="bill"/>
                        <span class="think-font" style="font-size: 13px">Balance Record</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.deposit.history')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/order-history.png" alt="order-history"/>
                        <span class="think-font" style="font-size: 13px">Recharge Record</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.withdraw.history')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/edit-property--v2.png" alt="edit-property--v2"/>
                        <span class="think-font" style="font-size: 13px">Withdrawal Record</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.withdraw.fund.pass')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/password-window.png" alt="password-window"/>
                        <span class="think-font" style="font-size: 13px">Payment Password</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(@$inportentLinks->data_values->apps_link); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/download.png" alt="download"/>
                        <span class="think-font" style="font-size: 13px">Download App</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <li class="list-group-item link-li d-flex justify-content-between align-items-center px-2">
                    <a href="<?php echo e(route('user.logout')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/exit--v1.png" alt="exit--v1"/>
                        <span class="think-font" style="font-size: 13px">Logout</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
            </ul>
        </div>



        <!-- Profile Card -->
        



        

    </div>





    
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .link-li{
            cursor: pointer;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/admin/js/vendor/apexcharts.min.js')); ?>"></script>
    <script>
        (function($) {
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
                        formatter: function(val) {
                            return val
                        }
                    }
                }
            };
            // var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
            // chart.render();

            // function createCountDown(elementId, sec) {
            //     var tms = sec;
            //     var x = setInterval(function() {
            //         var distance = tms * 1000;
            //         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            //         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            //         document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes +
            //             "m " + seconds + "s ";
            //         if (distance < 0) {
            //             clearInterval(x);
            //             document.getElementById(elementId).innerHTML = "<?php echo e(__('COMPLETE')); ?>";
            //         }
            //         tms--;
            //     }, 1000);
            // }
            // createCountDown('counter', <?php echo e(\Carbon\Carbon::tomorrow()->diffInSeconds()); ?>);
        })(jQuery);
    </script>

    <script>
        $(document).on('click', 'li.link-li', function () {
            let link = $(this).find('a').attr('href');
            // console.log(link);
            window.location.href = link;
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/dashboard.blade.php ENDPATH**/ ?>