<?php $__env->startSection('content'); ?>





<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/favicon.ico')); ?>">
    <title>Cloud Mner Account Password</title>
    <link href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')); ?>" rel="prefetch">
    <link href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')); ?>" rel="prefetch">
    <link href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-4ae9c30d.e371b257.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-cccbd0e0.a2ba22eb.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-3edebb94.2fda8665.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-688be4ee.288632ff.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/payment/public/Princess/dist/css/chunk-2f3a69cf.aa8e71ff.css')); ?>">
    <style>
        *{
            user-select: none;
        }
    </style>
</head>

<body class="">
<div id="app">
  <form action="" method="POST">
                <?php echo csrf_field(); ?>
        <div id="nava"></div>
        <div data-v-365a147f="" class="about-us">
            <div data-v-365a147f="" class="transparent van-nav-bar van-hairline--bottom">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left" onclick="window.location.href='<?php echo e(route ('user.home')); ?>">
                        <i class="van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                    </div>
                    <div class="van-nav-bar__title van-ellipsis">Account safety</div>
                </div>
            </div>
            <div data-v-365a147f="" class="wrap">
                <p data-v-365a147f="" class="left" onclick="window.location.href='<?php echo e(route('user.withdraw.fund.pass')); ?>'">Transaction password</p>
                <p data-v-365a147f="" class="right actives" onclick="window.location.href='<?php echo e(route('user.change.password')); ?>'">Login password</p>
            </div>
            <div data-v-365a147f="" class="my-password">
                <div data-v-365a147f="" class="my-password-box">
                    <div data-v-365a147f="" class="my-password-top"><p data-v-365a147f="">  old password</p></div>
                    <div data-v-365a147f="" class="van-cell-group van-hairline--top-bottom">
                        <div data-v-365a147f="" class="van-cell van-cell--large van-field focus-cell">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="password"
                                                                    name="current_password" value=""
                                                                    placeholder="Enter Old password"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
               
    
                    <div data-v-365a147f="" class="my-password-top"><p data-v-365a147f=""> New password</p></div>
                    <div data-v-365a147f="" class="van-cell-group van-hairline--top-bottom">
                        <div data-v-365a147f="" class="van-cell van-cell--large van-field focus-cell">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="password"
                                                                    name="current_password" value=""
                                                                    placeholder="Enter password"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                     </div>
                    
                    
                    
                    
        
               
                    <div data-v-365a147f="" class="my-password-top"><p data-v-365a147f=""> Confirm password</p></div>
                    <div data-v-365a147f="" class="van-cell-group van-hairline--top-bottom">
                        <div data-v-365a147f="" class="van-cell van-cell--large van-field focus-cell">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="password_confirmation"
                                                                    name="current_password" value=""
                                                                    placeholder="Confirm password"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                       </div>
                    
                    
                    
                    
                    
                    
                   

                </div>
            </div>
            <button data-v-365a147f="" type="button" onclick="chnagePassword()" class="main-btn van-button van-button--default van-button--normal">
                <div data-v-365a147f="" class="van-button__content"><span data-v-365a147f="" class="van-button__text">Confirm</span></div>
            </button>
        </div>
    </form>

    <div class="van-overlay loader" style="background: rgba(0, 0, 0, 0); display: none;">
        <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
            <div class="van-loading van-loading--spinner van-loading--vertical"><span
                    class="van-loading__spinner van-loading__spinner--spinner"
                    style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span
                    class="van-loading__text">Loading...</span></div>
        </div>
    </div>
</div>

<div class="van-toast van-toast--middle loadingcss" style="z-index: 2013; display: none;"><i
        class="van-icon van-toast__icon"><img src="<?php echo e(asset ('core/awais/payment/public/Princess/dist/img/loading.e2df1b5d.gif')); ?>" class="van-icon__image">
    </i></div>

<script src="<?php echo e(asset ('core/awais/payment/public/assets/toast.js')); ?>"></script>
<script>
    
    
    
    </script>
<script>
    function chnagePassword(){
        document.querySelector('.loader').style.display='block';
        document.querySelector('form').submit();
    }
</script>
</body>
</html>











<?php $__env->stopSection(); ?>


























<?php echo $__env->make($activeTemplate . 'layouts.awais', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/user/password.blade.php ENDPATH**/ ?>