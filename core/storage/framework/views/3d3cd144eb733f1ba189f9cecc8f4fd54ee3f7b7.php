<?php $__env->startSection('content'); ?>
    <style>
        input:not([type="radio"]),
        .form-control {
            padding: 5px 10px;
        }

        .input-group-text {
            background: #00D093;
        }

        label {
            color: #ffffff;
            margin-bottom: 1px;
            font-size: 13px;
        }
    </style>
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="appCapsule">
        <div class="container mt-3 mb-3">
            <form action="<?php echo e(route('user.withdraw.fund.pass.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Payment Password</label>
                    <input type="password" class="form-control" name="payment_password" value="<?php echo e($user->fund_pass); ?>" placeholder="Plese enter your payment password">
                </div>
                <button type="submit" class="btn btn-primary rounded-pill w-100">Submit</button>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/withdraw/fund_pass.blade.php ENDPATH**/ ?>