<?php $__env->startSection('content'); ?>

    <?php
        $noticeCaption = getContent('notice.content', true);
    ?>
    
    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="<?php echo e(asset ('core/awais/withdraw/public/Princess/dist/favicon.ico')); ?>">
    <title>Cloud Miners Withdraw</title>
    <link href="<?php echo e(asset ('core/awais/withdraw/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')); ?>" rel="prefetch">
    <link href="<?php echo e(asset ('core/awais/withdraw/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('core/awais/withdraw/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/withdraw/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/withdraw/public/Princess/dist/css/chunk-7a7e003a.ae7e86d6.css')); ?>">
    <style>
        .withdraws .account-balance[data-v-4c54b7c3] {
            background: url(<?php echo e(asset ('core/awais/withdraw/public/Princess/withdraw.f60d20d0.png')); ?>) no-repeat 50%/100% auto;
        }

        .withdraws[data-v-4c54b7c3]:after {
            background: url(<?php echo e(asset ('core/awais/withdraw/public/Princess/recharge-bg.0ab0e98a.png')); ?>) no-repeat 50%/100%;
        }

        * {
            user-select: none;
        }
    </style>
</head>

<body class="">
    <div id="app">
          <form action="<?php echo e(route('user.withdraw.new.now')); ?>" method="POST" class="mb-2">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="method_code" value="<?php echo e($myMethod->id); ?>">
            <div id="nava"></div>
            <div data-v-4c54b7c3="" class="withdraws after">
                <div data-v-4c54b7c3="" class="transparent van-nav-bar van-hairline--bottom">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='<?php echo e(route('user.home')); ?>'"><i class="van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                        </div>
                        <div class="van-nav-bar__title van-ellipsis">Withdraw</div>
                    </div>
                </div>
                <div data-v-4c54b7c3="" class="account-balance">
                    <p data-v-4c54b7c3="">Account balance</p>
                    <p data-v-4c54b7c3="">  <?php echo e($general->cur_sym); ?> <?php echo e(showAmount($user->balance)); ?></p>
                    <p data-v-4c54b7c3="" onclick="window.location.href='<?php echo e(route('user.withdraw.history')); ?>'"> Withdrawals record <i data-v-4c54b7c3="" class="van-icon van-icon-arrow"></i>
                    </p>
                </div>
                <div data-v-4c54b7c3="" class="recharge-container"></div>
                <div data-v-4c54b7c3="" class="apply-amount">
                    <p data-v-4c54b7c3="" class="label-title">Withdrawal Account
                    </p>
                    <center>
                              <div class="col">
                            <h5 class="mb-0 small-font-lg text-light"><?php echo e($myMethod ? $myMethod->name : ''); ?></h5>
                            <h5 class="mb-0 small-font-lg text-light"><?php echo e($bank_card ? $bank_card['account_number'] : ''); ?></h5>
                        </div></center>
                    <div data-v-4c54b7c3="" class="amount-input">
                        <div data-v-4c54b7c3="" class="block-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-4c54b7c3="" class="van-cell van-field focus-cell">
                                <div class="van-cell__title van-field__label" style="width: 10%;"><span></span>
                                </div>
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body"><input type="tel" inputmode="numeric" name="amount" placeholder="Enter withdrawal amount" class="van-field__control"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-4c54b7c3="" class="transaction flex">
                        <p data-v-4c54b7c3="" class="label-title">Transaction password
                        </p>
                        <p data-v-4c54b7c3="" class="notset"><span data-v-4c54b7c3="" onclick="window.location.href='<?php echo e(route('user.change.password')); ?>'">click settings</span><i data-v-4c54b7c3="" class="van-icon van-icon-arrow">
                        </i></p>
                    </div>
                    <div data-v-4c54b7c3="" class="amount-input">
                        <div data-v-4c54b7c3="" class="block-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-4c54b7c3="" class="van-cell van-field">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="password" placeholder="Enter transaction password" name="fund_password" class="van-field__control">
                                        <div class="van-field__right-icon">
                                            <div data-v-4c54b7c3="" class="change-type"><i data-v-4c54b7c3="" class="van-icon van-icon-closed-eye">
                                            </i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-4c54b7c3="" class="apply-btn">
                        <button data-v-4c54b7c3="" onclick="withdraw()" class="registerBtn van-button van-button--default van-button--normal van-button--block">
                        <div data-v-4c54b7c3="" class="van-button__content"><span data-v-4c54b7c3=""
                                                                                  class="van-button__text"> Confirm</span>
                        </div>
                    </button>
                    </div>
                    <div data-v-4c54b7c3="" class="rules-text">
                        <p data-v-4c54b7c3="">1. Fill in the correct wallet account when withdrawing money. If you enter the wrong account, your withdrawal will fail and you can withdraw again.
                            <br><br> 2. The platform withdrawal time is from 8:00 to 16:00, updated at 00:00 every day, and withdrawals are made once a day.<br><br> 3. Minimum withdrawal amount   <?php echo e($general->cur_sym); ?> .200, withdrawal fee 0% (used for equipment maintenance)
                            <br><br> 4.Withdrawals generally arrive within a few hours, and within 14 hours under special network fluctuations.<br></p>
                    </div>
                </div>
            </div>
            <div class="van-overlay loadered" style="background: rgba(0, 0, 0, 0); display: none;">
                <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
                    <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
                </div>
            </div>
        </form>
    </div>

    <div class="van-toast van-toast--middle loadingcss" style="z-index: 2043; display: none;"><i class="van-icon van-toast__icon"><img src="https://gobike880.com/public/Princess/dist/img/loading.e2df1b5d.gif"
                                              class="van-icon__image">
    </i></div>
    <script src="https://gobike880.com/public/assets/toast.js"></script>
    <script>
    </script>
    <script>
        function withdraw() {
            document.querySelector('.loadered').style.display = 'block'
            document.querySelector('form').submit();
        }
    </script>
</body>

</html>
    






    
        

           
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/user/withdraw/new/withdraw.blade.php ENDPATH**/ ?>