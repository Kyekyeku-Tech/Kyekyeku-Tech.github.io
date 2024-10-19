<?php $__env->startSection('content'); ?>
            <?php
            $bank_card = json_decode($user->bank_card, true);

            $myMethod = null;
            if (@$bank_card['bank_id']) {
                $myMethod = App\Models\WithdrawMethod::where('id', $bank_card['bank_id'])->first();
            }

        ?>
    
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Cloud Miner ~ Bank Bind</title>
    <link href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/chunk-257feb4d.2bcb8493.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/bank/public/Princess/dist/css/chunk-6d0afc0e.099504fe.css')); ?>">

    <style>
        .bind-card .header[data-v-9ebdd7a8] {
            background: url(<?php echo e(asset ('core/awais/bank/public/Princess/SS.0baa227f.png')); ?>) no-repeat 50%/100% auto;
        }
        *{
            user-select: none;
        }
    </style>
</head>
  <?php if(!$user->bank_card): ?>
<body class="">
    
    <form action="<?php echo e(route('user.bank.card.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="bank_name" style="background-color: #041E42" >

    <div id="app">
        <div id="nava"></div>
        <div data-v-9ebdd7a8="" class="bind-card">
            <div data-v-9ebdd7a8="" class="header">
                <div data-v-9ebdd7a8="" class="van-nav-bar van-hairline--bottom">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='<?php echo e(route ('user.home')); ?>'"><i
                                class="van-icon van-icon-arrow-left van-nav-bar__arrow">
                            </i></div>
                        <div class="van-nav-bar__title van-ellipsis">Bind account</div>
                    </div>
                </div>
            </div>
            
            <div data-v-9ebdd7a8="" class="register-container" >
                <div data-v-9ebdd7a8="" class="register">
                    <div data-v-9ebdd7a8="" class="register-cell van-cell-group van-hairline--top-bottom"><span
                            data-v-9ebdd7a8="" class="h-label"><img data-v-9ebdd7a8=""
                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABHxJREFUWEfVmGnop1MUxz9jQtHYl8jYi8lSlpQmZSf78gIzgyimIZnhBUMRZXsxloRQZOeFZTCTfdQkmiw1Yy070VhGiEKWPjp3up6e57n3+S/1d179/8/v3nO/9yzfc86dxASXSWOAbwqwI7AhsA7wK/AD8CHw82j1jwTgWsARwDHA/sC2QJuev4FPgZeBJ4HFwO9DAQ8BuBFwPnAusPHQg4DvgVuAm4BVtftrAK4BzAauCjcm3VroHeBV4H3gm3Cvbt4M2BnYF9ilYWHdfylwO/BXCWgJoAfdDxySKfoSuDW+f1E6AJgKzALOAbbK1j8f371Yp/QB3Al4Ftgmdv8EXB7gBscSYOwK8gpgvdD5GXAY8EEXwi6AglsKbBobXwFOAWosVjKqFn0ImB4LvwX26wLZBlC3Lsssp4vPBP4onTzg9zWBu8LFbtOS+0Qc/0dNE6AJ8UwWc4I7DTAh+sQMl3I2B1YGtZQy1bPvzUAak4c3E6cJcE7EmGB06wEFyxlXZvd5wNrZDX4Dbo5s7YtXLbkkc7cxeltuiRygVpD9rQgmxK6FmJsMPB237rKu3jgK+LPH/Mbk25E4UpBVabX1c4Bm12WhaB5wY8GtFwALYo0V48rgRXlPPVYY5ULg+oKuucANsUY9ssW/kgDqqq+iQshzO1SUJUFJQd8BuwNfZyC2AJYDm0QCJLBdOD3/o+BJK86W6fwE8Djg8dh9CXBN4cYSbqIcraOVmqJ1tbKiG714n8wHro4FxwNP5BY05c+IbNUqJb6TJy1vysXAdS0nXwRcG98te51knF1CutFodwe1rXbxx8B2Eay7FW7qz+tGIOsa6eHQlj3PBV2ZxSbgLxV6V0RyfgJsnyxoP/djIL8TOLtCkUsWRsvl34aFVrT4y6VaL7nLVuvYSp13AGeFJ9e3n9ScewBvhoKajEtnma1WHLsXxVu/B0wLb/jN5tUKYddTIzkz7Am8JcADgRdj96nRpdQoc43M/0hW/PN9culJUZlq9dn13BeLDwJeEqBE+lR8PBF4rFZbrJMS5E3jMJU6409ek7qGyAnAo7HhaAvBaC045PCata0WHGkM1hw4dE1rDI4kiyXqvQErhlTTJVKMbn6jgqjV0ZrF/lDDg9LHjBic9uqY5LqA2q4J0oHpwZ5ZpJUHVVqqJNZSFTsEjVYcsryotTwXy2FnJemrxfKdNGSGKvZ6D8e8ouX9v0vsEa0Izh0nZz2jTa00kvNjby3u6mbsRnTN1oHAsibTe9OhYo23UqUJ8XPAULEbKnYzHtbWD9ryzwwk/n16zSzbg9w4vidr8x+Iv4v9oDqbHbVVYFHUVns7s3YsBifb/Nejh7R2H5lVo96OWpD5TCJFJAo5OCuHQ13btt74eyF+yM/pnUlc35zq/Ga8lTrikYBOHXnaWzXVubg5F5sk0stYuDeB0c3SjUmSjFA1FycFdsyvARvEh/F8WTDuNEBrx933NiP/mSTj/TbjW+O7XTHyv37dSpea0O+DueUn7AtrMzwm7Bt1VxyP6yv/P35WJzjIHma8AAAAAElFTkSuQmCC"
                                                                    alt=""> Holder name </span>
                        <div data-v-9ebdd7a8="" class="van-cell van-cell--large van-field van-field--label-left">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="text"
                                                                   name="real_name"
                                                                    placeholder="Please enter holder's full name"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                    </div>
                    <div data-v-9ebdd7a8="" class="register-cell van-cell-group van-hairline--top-bottom"><span
                            data-v-9ebdd7a8="" class="h-label"><img data-v-9ebdd7a8=""
                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAARNJREFUWEftmLsNwjAQhr9IFCxCAQ0lPQzAYwS2YAK2YAQeA0BPSQMFi1BQIEsOiqwQ2ZwjHehSJdH9d3++sxPHBcqPQrk/zKC0Q3UEB0BPmligvwPXUh8adOYuQEdQQCp9AsPSZGhwCuylFTLoZ8DB5WkyuAbOGYrFphgBKx8cZfAdFFtBGFftnhn8BqYR/IZaVZNMUOUsngNbKYoM+gWwq3sPqjdYHQcqW1w7UDO0LCZF8iSxL0mA1QjGjLOmmP8m2AU2QN8juAFLf55y/9GAUERwDByD5BN/nXL/1JZB9QSlEyBGL2pxTAFpjBk0go7AT61m1K8HpWNKov/4465+88g9tertN0lbWtHaFrAUq3qCL9phhCmXg4YPAAAAAElFTkSuQmCC"
                                                                    alt=""> Account number </span>
                        <div data-v-9ebdd7a8="" class="van-cell van-cell--large van-field van-field--label-left">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="tel" inputmode="numeric"
                                                                 name="account_number"
                                                                    placeholder="Please enter account number"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                    </div>
                    <div data-v-9ebdd7a8="" class="register-cell van-cell-group van-hairline--top-bottom"><span
                            data-v-9ebdd7a8="" class="h-label"><img data-v-9ebdd7a8=""
                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAVZJREFUWEft2DlLBEEQBeBvMRS8QgNdI8XczAtzwf+hmZnGhhrpDxH/gFdmLhp5BIZeYGSgNNigy7rsbM9Iy85EA1P16vFeTU9NNWR+NTLnpyaY6tB3BcP9HMZTQRPzH3CBj4ATCY7gCPOJ4GWln2MVz5HgPtbLQi8J5wAbkeAdJnCDzShvSYWKwAQ+e2jiHpOR4BOCzWdYLIJYQewpFoK9GK0J9qBwRwUvsd0DaJkpO5httfgFQ2VWKQHrFcOxB7MnGN/ibC2uj5kCPVmfgwXEahtaK1iJgo/hw4wg71JqhcT8k6+BJZwsY63jVni4nFggNf34S6Qf49ZtmL2QE8Ewozajgn1HcAArGOzg9zuCnW8tMdHiShUMI9NWF814iLWaYBulsre4C3d/DfmTHuw/gleYzuTHfRdTuMbMv1l9ZL88ipuubNdvKW9dpbn1CjhV3uwV/ASDdYApNEtJzAAAAABJRU5ErkJggg=="
                                                                    alt=""> Account type </span>
                        <div data-v-9ebdd7a8=""
                             class="van-cell van-cell--large van-field van-field--label-left focus-cell">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body">
                                           <select   class="van-field__control" name="bank_id">
                            <option selected value="<?php echo e(null); ?>">Please Select</option>
                            <?php $__currentLoopData = $withdrawMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-name="<?php echo e($item->name); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                                    
                         
                                    <div class="van-field__right-icon"><i data-v-9ebdd7a8=""
                                                                          class="van-icon van-icon-arrow"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-v-9ebdd7a8=""
                            onclick="submitBank()"
                            class="registerBtn van-button van-button--default van-button--normal van-button--block">
                        <div data-v-9ebdd7a8="" class="van-button__content"><span data-v-9ebdd7a8=""
                                                                                  class="van-button__text">Confirm</span>
                        </div>
                    </button>
                </div>


  <?php else: ?>
      <div id="app">
        <div id="nava"></div>
        <div data-v-9ebdd7a8="" class="bind-card">
            <div data-v-9ebdd7a8="" class="header">
                <div data-v-9ebdd7a8="" class="van-nav-bar van-hairline--bottom">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='<?php echo e(route ('user.home')); ?>"><i
                                class="van-icon van-icon-arrow-left van-nav-bar__arrow">
                            </i></div>
                        <div class="van-nav-bar__title van-ellipsis">Bind account</div>
                    </div>
                </div>
            </div>
  
            
            <button data-v-9ebdd7a8="" type="button" onclick="deleteBankCard()" class="registerBtn van-button van-button--default van-button--normal van-button--block"
                     >
                <div data-v-9ebdd7a8="" class="van-button__content" style="display: flex;align-content: center;">
                        <div>
                            <img style="width: 30px;"
                                 src="https://img.icons8.com/fluency/48/delete-forever.png" alt="">
                        </div>
                        <div style="color: #fff;font-size: 16px;font-weight: bold">Delete Card</div>
                    </span>
                </div>
            </button>
  

        <?php endif; ?>




    </div>


        </div>
        <div class="van-overlay loaderBox" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span
                        class="van-loading__spinner van-loading__spinner--spinner"
                        style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span
                        class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>
</form>
<div class="van-toast van-toast--middle loadingcss" style="z-index: 2012; display: none;"><i
        class="van-icon van-toast__icon"><img src="<?php echo e(asset ('core/awais/bank/public/Princess/dist/img/loading.e2df1b5d.gif')); ?>"
                                              class="van-icon__image">
    </i></div>
<script src="<?php echo e(asset ('core/awais/bank/public/assets/toast.js')); ?>"></script>
<script>
    
    
    
    </script>
<script>
    function selectMethod(payMethod){
        document.querySelector('.mmmethod').style.display = 'none';
        document.querySelector('.mmmBox').style.display = 'none';
        document.querySelector('input[name="gateway_method"]').value = payMethod;
    }

    function submitBank(){
        document.querySelector('.loaderBox').style.display = 'block';
        document.querySelector('form').submit();
    }

    function getMethod(){
        document.querySelector('.mmmethod').style.display = 'block';
        document.querySelector('.mmmBox').style.display = 'block';
    }
    function cancelGetMethod(){
        document.querySelector('.mmmethod').style.display = 'none';
        document.querySelector('.mmmBox').style.display = 'none';
    }

    function deleteBankCard(){
        window.location.href = '<?php echo e(route('user.bank.card.remove')); ?>'
    }
</script>
</body>
</html>

    
    
    
    
    
    
    
    
    
    
    
    
    





















      
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style type="text/css">
        .copytextDiv {
            border: 1px solid #00000021;
            cursor: pointer;
        }

        #referralURL {
            border-right: 1px solid #00000021;
        }

        .bg-success-custom {
            background-color: #28a7456e !important;
        }

        .brd-success-custom {
            border: 1px dashed #28a745;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script>

        $(document).on('change', '[name=bank_id]', function () {
            let bankName = $('option:selected', this).data('name');
            $('[name=bank_name]').val(bankName);
        });

        // remove
        $(document).on('click', '.rmvBtn', function () {
            iziToast.question({
                timeout: 200000,
                close: false,
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                message: 'Are you sure to remove?',
                position: 'center',
                progressBar: false,
                color: 'orange',
                buttons: [
                    ['<button><b>YES</b></button>', function () {
                        location.href = ""
                    }],
                    ['<button>NO</button>', function (instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }],
                ]
            });
        });



    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.awais', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/user/bank_card.blade.php ENDPATH**/ ?>