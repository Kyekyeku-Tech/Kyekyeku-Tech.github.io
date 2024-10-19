<?php $__env->startSection('content'); ?>
    <!-- Top Nav -->
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>

        #appCapsule {
            padding-top: 56px;
            padding-bottom: 150px;
            height: 100%;
            /* background: rgb(0, 168, 17); */
            background: rgba(255, 255, 255, 0);
        }
        .canvasjs-chart-credit{
            display: none;
        }
        .shadow-primary {
            box-shadow: 0px 0px 18px #00d094!important;
        }
     </style>
    <div id="appCapsule">
        
        <div class="container">
            <div class="card glass-bg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <center><h6 class="mb-0 text-light small-font">Current Balance</h6>
                            <h5 class="mb-0 text-primary small-font-lg userBalanceRound"><?php echo e(getAmount($user->balance)); ?> <?php echo e($general->cur_text); ?></h5></center>
                            
                        </div>
                        <br><br>
            <button id="collectBtn" class=" btn-lg btn-primary w-50 bg-gr-orange rounded-pill mt-0 shadow-primary border border-white border-2 collectProfit" >
                <?php if(Carbon\Carbon::parse($user->collect_date) < Carbon\Carbon::today()): ?>
                Collect
                <?php else: ?>
                Collect
                <?php endif; ?>
            </button>
            <center> <h6 class=" text-light small-font">Don't forget Collect your profit every day</h6>
        
                    </div>
                </div>
            </div>
            
        </div>
    
    
        
    
    
        <div class="container mt-3">
            <?php $__empty_1 = true; $__currentLoopData = $runingPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div class="card glass-bg my-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="mb-0 text-start small-font-lg text-primary">
                                    <?php echo e($item->plan->name); ?>

                                </h6>
                            </div>
                            <div class="col-auto">
                                <h6 class="mb-0 small-font">
                                    <?php if($item->status == 1): ?>
                                        <span class="badge bg-gr-green-light">Running</span>
                                    <?php else: ?>
                                        <span class="badge bg-gr-red">Expired</span>
                                    <?php endif; ?>
                                </h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0 text-start small-font text-light">
                                    Daily Earn:
                                </p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-start small-font text-primary">
                                    <?php echo e($item->plan->daily_profit); ?> <?php echo e($general->cur_text); ?>

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="mb-0 text-start small-font text-light">
                                    Purchase Date:
                                </p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-start small-font text-warning">
                                    <?php echo e(date_format(date_create($item->created_at), 'd M Y')); ?>

                                </p>
                            </div>
                        </div>
                        <?php if($item->status == 1): ?>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0 text-start small-font text-light">
                                        Expire Date:
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="mb-0 text-start small-font text-info">
                                        <?php echo e(date_format(date_create($item->validity), 'd M Y')); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div class="card glass-bg">
                    <div class="card-body">
                        <h6 class="mb-0 text-center small-font-lg text-secondary">
                            Ops, No Running Plan!
                        </h6>
                    </div>
                </div>

            <?php endif; ?>
        </div>
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
<?php $__env->startPush('script'); ?>
    <script>
        $(document).on('click', '.collectProfit', function(e) {
            e.preventDefault();
            $(this).removeClass('collectProfit');
            let timer = 1;
            $('#collectBtn').html(Spiner);
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('user.trading.profit')); ?>",
                success: function(res) {
                    if (res.cls == 'success') {
                        let myInterval = setInterval(() => {
                            $('#timer').html(timer);
                            timer = timer - 1;
                            console.log(timer);
                            if (timer === 0) {
                                $('#timer').html('Complete');
                                clearInterval(myInterval)
                                $.ajax({
                                    type: "post",
                                    url: "<?php echo e(route('user.collect.profit')); ?>",
                                    success: function(response) {
                                        // notifyMsgBig('Collected!', response.msg, response.cls);
                                        notify(response.cls, response.msg)
                                        userDataApi()
                                        $('#collectBtn').html('Collected');
                                        $('#collectBtn').addClass('collectProfit');
                                    }
                                });

                            }
                        }, 1000);
                    } else {
                        notifyGlass(res.cls, res.msg);
                        $('#collectBtn').html('Collected');
                        $('#collectBtn').addClass('collectProfit');
                    }
                }
            });
        });

        // $(document).on('click', '.collectProfit2', function(e) {
        //     e.preventDefault();
        //     $(this).removeClass('collectProfit');
        //     let timer = 5;
        //     $('.collectProfit').html(Spiner);
        // });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suntechp/ye.suntech.pw/h25/core/resources/views/templates/basic/user/runing_plans.blade.php ENDPATH**/ ?>