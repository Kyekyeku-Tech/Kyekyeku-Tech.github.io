<?php $__env->startSection('content'); ?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="<?php echo e(asset ('core/awais/dep/public/Princess/dist/favicon.ico')); ?>">
    <title>Recharge</title>
    <link href="<?php echo e(asset ('core/awais/dep/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/dep/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('core/awais/dep/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/dep/public/Princess/dist/css/chunk-54d1bcd2.5e93f251.css')); ?>">
    <style>
        .recharge-page .account-balance[data-v-234136e3] {
            background: url(<?php echo e(asset ('core/awais/dep/public/Princess/balance2.a44a44c2.png')); ?>) no-repeat 50%/100% auto;
        }

        .recharge-page[data-v-234136e3]:after {
            width: 100%;
            height: 50.8vw;
            background: url(<?php echo e(asset ('core/awais/dep/public/Princess/recharge-bg.0ab0e98a.png')); ?>) no-repeat 50%/100%;
        }

        .active {
            background: #45e0e5 !important;
            color: #fff;
        }

        * {
            user-select: none;
        }
    </style>
</head>
    <form action="<?php echo e(route('user.deposit.insert')); ?>" method="post">
                 <?php echo csrf_field(); ?>
                    <input type="hidden" name="currency">
<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-234136e3="" class="recharge-page after">
            <div data-v-234136e3="" class="transparent van-nav-bar van-hairline--bottom">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left" onclick="window.location.href='<?php echo e(route ('user.home')); ?>'"><i class="van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                    </div>
                    <div class="van-nav-bar__title van-ellipsis">Recharge</div>
                </div>
            </div>
            
            

            
            <div data-v-234136e3="" class="account-balance">
                <p data-v-234136e3="">Account balance</p>
                <p data-v-234136e3=""><?php echo e($general->cur_text); ?> <?php echo e(showAmount(auth()->user()->deposit_wallet)); ?></p>
                <p data-v-234136e3="" onclick="window.location.href='<?php echo e(route('user.deposit.history')); ?>'"> Recharge record <i data-v-234136e3="" class="van-icon van-icon-arrow"></i></p>
            </div>
            <div data-v-234136e3="" class="recharge-container">
                <div data-v-234136e3="" class="amount-container box-style">
                    <div data-v-234136e3="" class="video">
                        <p data-v-234136e3="" class="leftvideo">Recharge amount (<?php echo e($general->cur_sym); ?>)</p>
                    </div>
                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 500)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">500</strong></p>
                    </div>
                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 1000)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">1000</strong></p>
                    </div>
                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 2000)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">2000</strong></p>
                    </div>
                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 3000)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">3000</strong></p>
                    </div>
                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 5000)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">5000</strong></p>
                    </div>
                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 10000)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">10000</strong></p>
                    </div>

                    <div data-v-234136e3="" class="amount-item" onclick="getAmount(this, 25000)">
                        <p data-v-234136e3=""><strong data-v-234136e3="">25000</strong></p>
                    </div>
                </div>
                <div data-v-234136e3="" class="amount-enter box-style">
                    <div data-v-234136e3="" class="amount-input">
                        <div data-v-234136e3="" class="block-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-234136e3="" class="van-cell van-field focus-cell">
                                <div class="van-field__left-icon"><span data-v-234136e3="" class="my-black"><?php echo e($general->cur_sym); ?></span></div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="tel" inputmode="numeric" name="amount" placeholder="Enter the recharge amount" class="van-field__control"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                    <div data-v-234136e3="" class="amount-enter box-style">
                    <div data-v-234136e3="" class="amount-input">
                        <div data-v-234136e3="" class="block-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-234136e3="" class="van-cell van-field focus-cell">
                                <div class="van-field__left-icon"></div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        
                                        
                                               <select class="van-field__control" name="gateway" required>
                                    <option value=""><?php echo app('translator')->get('Select One'); ?></option>
                                    <?php $__currentLoopData = $gatewayCurrency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->method_code); ?>" <?php if(old('gateway') == $data->method_code): echo 'selected'; endif; ?> data-gateway="<?php echo e($data); ?>"><?php echo e($data->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                        
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                <button data-v-234136e3="" onclick="payment()" class="registerBtn box-shadow van-button van-button--default van-button--normal van-button--block">
                <div data-v-234136e3="" class="van-button__content"><span data-v-234136e3="" class="van-button__text"> Confirm </span>
                </div>
            </button>
                <div data-v-234136e3="" class="rules-text">
                    <p data-v-234136e3="">1. When you pay on the APP, the amount you click to pay must be consistent with the actual payment amount.<br> 2.After the payment is completed, please be sure to upload a screenshot of the successful payment.<br> 3.If the payment
                        does not arrive within 30 minutes, please contact customer service and send a screenshot of successful payment and registration number.<br><br>Minimum recharge amount 742 <br><br>Note: Please do not share your payment success certificate
                        with others to avoid unnecessary losses. If you recharge according to the recharge video, your money will arrive soon.<br><br> If you encounter any problems in the APP, you can contact customer service to help you. </p>
                </div>
            </div>
        </div>
        <div class="van-overlay loader" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>

    <div class="van-toast van-toast--middle loadingcss" style="z-index: 2033; display: none;"><i class="van-icon van-toast__icon"><img src="https://gobike880.com/public/Princess/dist/img/loading.e2df1b5d.gif" class="van-icon__image">
    </i></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        function getAmount(_this, amount) {
            var elements = document.querySelectorAll('.amount-item');
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].classList.contains('active')) {
                    elements[i].classList.remove('active')
                }
            }
            _this.classList.add('active');
            document.querySelector('input[name="amount"]').value = amount;
        }
 function payment() {
            document.querySelector('.loader').style.display = 'block';
            var amount = document.querySelector('input[name="amount"]').value;
            $.ajax({
      
   
                headers: {
               
                },

                data: {
                    amount: amount
                },
       

                success: function(response) {
                    window.location.href = JSON.parse(response).data.paymentUrl
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    document.querySelector('.van-overlay').style.display = 'none';
                    console.log(errorThrown);
                }
            });
        }
    </script>
    <!--<script>-->
    <!--    window.onload = function() {-->
    <!--        $.ajax({-->
    <!--            url: "https://gobike880.com/onepay-payment-checker",-->
    <!--            type: 'GET',-->
    <!--            dataType: 'json',-->
    <!--            success: function(res) {-->
    <!--                console.log(res);-->
    <!--            }-->
    <!--        });-->
    <!--    };-->
    <!--</script>-->
</body>

</html>
                    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $('select[name=gateway]').change(function(){
                if(!$('select[name=gateway]').val()){
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=gateway] option:selected').data('gateway');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                if(resource.method.crypto == 1){
                    var toFixedDigit = 8;
                    $('.crypto_currency').removeClass('d-none');
                }else{
                    var toFixedDigit = 2;
                    $('.crypto_currency').addClass('d-none');
                }
                $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                $('.max').text(parseFloat(resource.max_amount).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());
                if (!amount) {
                    amount = 0;
                }
                if(amount <= 0){
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                $('.preview-details').removeClass('d-none');
                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                $('.payable').text(payable);
                var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge)))*rate).toFixed(toFixedDigit);
                $('.final_amo').text(final_amo);
                if (resource.currency != '<?php echo e($general->cur_text); ?>') {
                    var rateElement = `<span class="fw-bold"><?php echo app('translator')->get('Conversion Rate'); ?></span> <span><span  class="fw-bold">1 <?php echo e(__($general->cur_text)); ?> = <span class="rate">${rate}</span>  <span class="method_currency">${resource.currency}</span></span></span>`;
                    $('.rate-element').html(rateElement)
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                }else{
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                $('.base-currency').text(resource.currency);
                $('.method_currency').text(resource.currency);
                $('input[name=currency]').val(resource.currency);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input',function(){
                $('select[name=gateway]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>













<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






                    
                    
                    
                    
                    
                    

<?php echo $__env->make($activeTemplate.'layouts.awais', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/user/payment/deposit.blade.php ENDPATH**/ ?>