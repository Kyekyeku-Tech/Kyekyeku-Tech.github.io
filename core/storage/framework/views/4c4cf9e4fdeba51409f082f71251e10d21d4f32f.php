
<?php $__env->startSection('content'); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="<?php echo e(asset ('core/awais/device/public/Princess/dist/favicon.ico')); ?>">
    <title>cloud miner device </title>
    <link href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')); ?>" rel="prefetch">
    <link href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')); ?>" rel="prefetch">
    <link href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-4ae9c30d.e371b257.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/device/public/Princess/dist/css/chunk-cccbd0e0.a2ba22eb.css')); ?>">
    <style>
        .about-us .hall-crad-box .team-assets .content .content-bom .left[data-v-68654d19] {
            background: linear-gradient(#00000045, #00000045), url(<?php echo e(asset ('core/awais/device/public/2.jpeg')); ?>) no-repeat 50%/100% auto;
        }

        .about-us .hall-crad-box .team-assets .content .content-bom .right[data-v-68654d19] {
            background: linear-gradient(#00000045, #00000045), url(<?php echo e(asset ('core/awais/device/public/9.jpg')); ?>) no-repeat 50%/100% auto;
        }

        .about-us .hall-bottom .hall-bottom-box .hall-bottom-card .hall-bottom-btn[data-v-68654d19] {
            width: unset;
            height: 6.933333vw;
            line-height: 6.933333vw;
            background: #0cd2ef;
            font-weight: 600;
            color: #fff;
            font-size: 4vw;
            padding: 0 7px;
            border-radius: 3px;
        }

        .about-us .index-page-title[data-v-68654d19] {
            padding: 6px;
            background: #0cd2ef;
            position: fixed;
            width: 100%;
            z-index: 9;
        }

        * {
            user-select: none;
        }
    </style>
</head>













<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-68654d19="" class="about-us">
            <div data-v-68654d19="" class="index-page-title">My Invest Hall</div>
            <div style="height: 40px"></div>
            <div data-v-68654d19="" class="hall-crad-box">
                <div data-v-68654d19="" class="team-assets flex">
                    <div data-v-68654d19="" class="content">
                        <div data-v-68654d19="" class="content-bom flex">
                            <div data-v-68654d19="" class="item left"><span data-v-68654d19="">My cruise</span>
                                <p data-v-68654d19="">
                                      <?php if($user->plan): ?>
                                   
                                    <?php echo e(__($user->plan->name)); ?>

                                <?php else: ?>
                                    <?php echo app('translator')->get('No Plan'); ?>
                                <?php endif; ?>
                                </p>
                            </div>
                            <div data-v-68654d19="" class="item right"><span data-v-68654d19="">Regular income</span>
                                <p data-v-68654d19=""><?php echo e($general->cur_text); ?> <?php echo e(getAmount($user->balance)); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-68654d19="" class="hall-bottom">
            </div>
   
                
            <button  id="collectBtn" class=" collectProfit" >
                <?php if(Carbon\Carbon::parse($user->collect_date) < Carbon\Carbon::today()): ?>
                Collect
                <?php else: ?>
                Collect
                <?php endif; ?>
            </button>
           </form>
            
            <center> <h6 class=" text-light small-font">Don't forget Collect your profit every day</h6>
        
        
        
        
        
        
            
                        
<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-68654d19="" class="about-us">



    
        <div data-v-68654d19="" class="hall-bottom">
  <?php $__empty_1 = true; $__currentLoopData = $runingPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div data-v-68654d19="" class="hall-bottom-box after">
                    <div data-v-68654d19="" class="hall-bottom-card">
                        <div data-v-68654d19="" class="flex flex-top">
                            <div data-v-68654d19="" class="hall-bottom-img van-image">
                                <img src="<?php echo e(asset ('vip.png')); ?>" class="van-image__img"> 
                          
                            </div>
                            <div data-v-68654d19="" class="product-right">
                                <p data-v-68654d19="" class="hall-bottom-div-one">   <?php echo e($item->plan->name); ?></p>
                                <div data-v-68654d19="" class="flex">
                                    <div data-v-68654d19="" class="bom-product-item"><span data-v-68654d19="">Plan Status:</span>
                                        <p data-v-68654d19="">{ <?php if($item->status == 1): ?>
                                        <span class="badge bg-gr-green-light">Running</span>
                                    <?php else: ?>
                                        <span class="badge bg-gr-red">Expired</span>
                                    <?php endif; ?></p>
                                    </div>
                           
      
                                    
                                    <button data-v-68654d19="" class="hall-bottom-btn" >Activated</button>

                                </div>
                            </div>
                        </div>
                        <div data-v-68654d19="" class="flex">
                            <div data-v-68654d19="" class="product-item">
                                <p data-v-68654d19="">    <?php echo e($general->cur_text); ?> <?php echo e($item->plan->daily_profit); ?>  </p><span data-v-68654d19="">Daily income</span></div>
                            <div data-v-68654d19="" class="product-item">
                              
                              
                                <p data-v-68654d19="">      <?php echo e(date_format(date_create($item->created_at), 'd M Y')); ?></p><span data-v-68654d19="">Purchase Date</span></div>
                                
                             

                                                                
 

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

               
                        <h6 class="mb-0 text-center small-font-lg text-secondary">
                            Ops, No Running Plans!
                        </h6>
              

            <?php endif; ?>     
                       

 


        
        
        
        
        
        
        
        
        
        
        
        
        
        
                    </div>
                </div>
            </div>
            
            
            

    
    
    
        </div>
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

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/user/runing_plans.blade.php ENDPATH**/ ?>