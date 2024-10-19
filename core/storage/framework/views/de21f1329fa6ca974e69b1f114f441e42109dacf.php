<?php $__env->startSection('content'); ?>
    <?php
        $kycInfo = getContent('kyc_info.content', true);
        $inportentLinks = getContent('links.content', true);
    ?>
    <style>
        .bg-profile {
            height: 270px;
            background: url("https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRGTgTqC1aPgfeiqdf9u8_A4J49xsXd8JW2WSraoSDxROoaAAFT") no-repeat;
            background-size: 100% 100%;
            padding-top: 0;
        }
        .list-group-item {
            background-color: #041E42
        }
    </style>
    <div id="appCapsule">
        <div class="bg-profile p-2">
            <div class="row align-items-center pt-5">
                <div class="col-auto">
                    <img style="width: 70px; height: 70px;" src="<?php echo e(asset('assets/images/avatar/vestasprof.png')); ?>" alt="">
                </div>
                <div class="col-auto ps-0" style="background-color: #041E42">
                    <h6 class="mb-0 bg-secondary rounded-pill w-auto text-white small-font p-1 text-center think-font">
                        LOGIN: <?php echo e($user->username); ?>

                    </h6>
                    <h6 class="mb-0 mt-1 bg-secondary rounded-pill w-auto text-white small-font p-1 px-3 text-center think-font">
                        My Cloud Machine
                    </h6>
                </div>
            </div>
            <div class="row mt-2" style="background-color: #041E42">
                <div class="col-6" style="background-color: #041E42">
                    <div class="card border border-1 border-secondary glass-bg" style="background-color: #041E42">
                        <div class="card-body py-1" style="background-color: #041E42">
                            <center>
                            <h6 class="mb-1 small-font-sm text-white think-font">Current Balance</h6>
                            <h5 class="mb-0 small-font text-white think-font"><?php echo e($general->cur_sym); ?> <?php echo e(getAmount($user->balance)); ?>

                                </h5>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border border-1 border-secondary glass-bg">
                        <div class="card-body py-1 text-end" style="background-color: #041E42">
                            <center>
                            <h6 class="mb-1 small-font-sm text-white think-font"style="background-color: #041E42">Today Earning</h6>
                            <h5 class="mb-0 small-font text-white think-font">
                                <?php echo e($general->cur_sym); ?> <?php echo e(getAmount($today['earning'])); ?> 
                            </h5>
                             </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: -70px" style="background-color: #041E42">

<div class="card border border-0 border-secondary glass-bg" style="background-color: #041E42">
            <div class="row py-2" style="background-color: #041E42">
                <a href="<?php echo e(route('user.deposit.index')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="https://img.icons8.com/?size=48&id=36950&format=png" alt="">
                    <p class="mb-0 small-font-sm text-light">Recharge</p>
                </a>
                <a href="<?php echo e(route('user.withdraw.new')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="https://img.icons8.com/?size=48&id=39897&format=png" alt="">
                    <p class="mb-0 small-font-sm text-light">Withdraw</p>
                </a>
                <a href="<?php echo e(route('user.runing.plans')); ?>" class="col-3 px-0 text-center">
                    <img width="25px" src="https://img.icons8.com/?size=48&id=12132&format=png" alt="">
                    <p class="mb-0 small-font-sm text-light">Device</p>
                </a>
                <a href="<?php echo e(route('online.service')); ?>" class="col-3 px-0 text-center">
                      <img width="30px" src="https://i.ibb.co/M2n8rBZ/image-removebg-preview-2.png" alt="">
                    <p class="mb-0 small-font-sm text-light">Online service</p>
                </a>
            </div>
        </div>

    
                    </a>
                    <span><i class=""></i></span>
                </li>
                
                
                <div style="background-color: #041E42">
                    
                <li style="background-color: #041E42" 
                
                
                class=" link-li d-flex justify-content-between align-items-center px-2" 
                
                
                style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;" style="background-color: #041E42">
                    
                    
                    
                    <a href="<?php echo e(route('user.bank.card')); ?>" class="ms-2 me-auto text-white" >
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/bank-card-back-side.png" alt="bank-card-back-side"/>
                        <span  class="think-font" style="font-size: 13px">Banking Details</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                
                <br>
                
                
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.change.password')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/key-security.png" alt="key-security"/>
                        <span class="think-font" style="font-size: 13px">Password</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <br>
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.transactions')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/bill.png" alt="bill"/>
                        <span class="think-font" style="font-size: 13px">Balance Record</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <br>
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.deposit.history')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/order-history.png" alt="order-history"/>
                        <span class="think-font" style="font-size: 13px">Recharge Record</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <br>
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.withdraw.history')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/edit-property--v2.png" alt="edit-property--v2"/>
                        <span class="think-font" style="font-size: 13px">Withdrawal Record</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <br>
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(route('user.withdraw.fund.pass')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/password-window.png" alt="password-window"/>
                        <span class="think-font" style="font-size: 13px">Payment Password</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <br>
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2" style="border-bottom: 1px solid rgb(255 255 255 / 50%) !important;">
                    <a href="<?php echo e(@$inportentLinks->data_values->apps_link); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/download.png" alt="download"/>
                        <span class="think-font" style="font-size: 13px">Download App</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
                <br>
                <li style="background-color: #041E42"  class=" d-flex justify-content-between align-items-center px-2">
                    <a href="<?php echo e(route('user.logout')); ?>" class="ms-2 me-auto text-white">
                        
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/exit--v1.png" alt="exit--v1"/>
                        <span class="think-font" style="font-size: 13px">Logout</span>
                    </a>
                    <span><i class="fas fa-angle-right"></i></span>
                </li>
            </ul>
        </div>

</div>

        <!-- Profile Card -->
        



        

    </div>

 <footer>
<style type="text/css">
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
.skiptranslate {display:none !important;}
#google_translate_element2 {display:none!important;}
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

<script type="text/javascript">
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
</script>
<div class="clearfix fixed-bottom"></div>
</footer>



    
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

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oregoazi/public_html/core/resources/views/templates/basic/user/dashboard.blade.php ENDPATH**/ ?>