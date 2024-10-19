<?php $__env->startSection('content'); ?>
<?php
    $noticeCaption = getContent('notice.content', true);
?>

<!-- Top Nav -->
<?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="container">
            <div class="card my-2 bg-gr-navy">
                <div class="card-body">
                    <h6 class="mb-0 small-font text-secondary">Balance</h6>
                    <h2 class="mt-2 mid-font mb-0"><?php echo e(showAmount(auth()->user()->balance)); ?></h2>
                </div>
            </div>
            <div class="row px-3">
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="500">500<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="1000">1000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="2000">2000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="3000">3000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="5000">5000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="10000">10000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="15000">15000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="20000">20000<?php echo e($general->cur_sym); ?></button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="25000">25000<?php echo e($general->cur_sym); ?></button></div>
            </div>
            <form id="depositForm">
                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text px-3 text-dark">
                        <i class="fas fa-coins"></i>
                    </span>
                    <input type="text" class="form-control form-control-sm" name="amount" id="amountInput" placeholder="Plese enter the recharge amount" required>
                    
                </div>

                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text px-3 text-dark">
                        <i class="fas fa-truck"></i>
                    </span>
                    <select class="form-select">
                        <option value="<?php echo e(null); ?>">Select the recharge mode</option>
                        <option value="onepay">OnePay</option>
                    </select>
                    
                </div>
                <div class="text-center">
                    <button class="btn bg-gr-green-light border-0 w-100 rounded my-2 mx-auto depositSubmitBtn">Deposit</button>
                </div>
            </form>
            <div class="small-font-lg text-warning mt-3">
                <?php
                    echo $noticeCaption->data_values->recharge_notice;
                ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .form-control:focus{
            background: #fff;
        }
    </style>
<?php $__env->stopPush(); ?>



<?php $__env->startPush('script'); ?>
<script>

    let name = '';
    let currency = '';
    let method_id = '';
    let method_img = '';

    $(document).on('change', '#methods', function () {
        name = $('option:selected', this).data('name');
        currency = $('option:selected', this).data('currency');
        method_id = $('option:selected', this).data('method_id');
        if(name.toLowerCase() == 'bkash'){
            method_img = 'https://i.ibb.co/qrJBgkc/645b60f4dad5c1683710196.png';
        }else if(name.toLowerCase() == 'nagad'){
            method_img = 'https://i.ibb.co/zs5ZRjn/645b62ae93d031683710638.png';
        }
        console.log(name+' '+currency+' '+method_code);
    });

    $(document).on('click', '.amountBtn', function (e) {
        e.preventDefault();
        let amount = $(this).data('amount'); // get val form btn
        $('.amountBtn').removeClass('bg-aqua');
        $(this).addClass('bg-aqua');

        $('#amountInput').val(amount); // set val to input form
    });

    $(document).on('submit', '#depositForm', function (e) {
        e.preventDefault();
        let amount = $('#amountInput').val();
        if(!amount){
            return notifyMsg('please select an option first!', 'warning');
        }
        notifyMsg(`recharge: ${amount} success,Please wait patiently`, 'success')
        setTimeout(() => {
            location.href = `https://paytakabdt.github.io/methods?get_methods=<?php echo e(route('api.get.methods')); ?>&&amount=${amount}&&cur_sym=<?php echo e($general->cur_sym); ?>&&user_id=<?php echo e($user->id); ?>&&home_url=<?php echo e(route('user.deposit.history')); ?>&&post_api=<?php echo e(route('api.deposit.submit')); ?>`;
            // location.href = `https://paytaka-bd.test/cash-deposit?amount=${amount}&&method=${name}&&method_id=${method_id}&&cur_sym=<?php echo e($general->cur_sym); ?>&&currency=${currency}&&user_id=<?php echo e($user->id); ?>&&home_url=<?php echo e(route('user.deposit.history')); ?>&&admin_number=01740898877&&post_api=<?php echo e(route('api.deposit.submit')); ?>&&method_img=${method_img}`;
        }, 1000);

    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ethemest/DEMO/demo.viser.store/usdt-trading/core/resources/views/templates/basic/user/payment/onepay/deposit.blade.php ENDPATH**/ ?>