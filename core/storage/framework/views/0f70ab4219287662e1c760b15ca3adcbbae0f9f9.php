<?php $__env->startSection('content'); ?>
<style>
    input:not([type="radio"]), .form-control {
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
        <div class="card glass-bg">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label><?php echo app('translator')->get('Referral Code'); ?></label>
                    <div class="input-group">
                        <input type="text" value="<?php echo e($user->username); ?>"
                        class="form-control" id="referralCode"
                        readonly>
                        <button class="input-group-text copytext px-3 text--base" id="copyBoard2"> <i class="fa fa-copy"></i></button>
                    </div>
                </div>
                <div class="form-group">
                    <label><?php echo app('translator')->get('Referral Link'); ?></label>
                    <div class="input-group">
                        <input type="text" value="<?php echo e(route('home')); ?>?reference=<?php echo e($user->username); ?>"
                        class="form-control" id="referralURL"
                        readonly>
                        <button class="input-group-text copytext px-3 text--base" id="copyBoard"> <i class="fa fa-copy"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card glass-bg mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 text-center">
                        <h6 class="mb-0 small-font-sm text-light">Team Size</h6>
                        <h5 class="mb-0 small-font-lg text-primary fw-bold"><?php echo e(refTotalCount($user->id)); ?></h5>
                    </div>
                    <div class="col-4 text-center">
                        <h6 class="mb-0 small-font-sm text-light">Team Recharge</h6>
                        <h5 class="mb-0 small-font-lg text-primary fw-bold"><?php echo e(getAmount(refTotalDeposit($user->id))); ?></h5>
                    </div>
                    <div class="col-4 text-center">
                        <h6 class="mb-0 small-font-sm text-light">Team Withdraw</h6>
                        <h5 class="mb-0 small-font-lg text-primary fw-bold"><?php echo e(getAmount(refTotalWithdraw($user->id))); ?></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 bg-gr-orange">
            <div class="card-body">
                <h3 class="mb-0">
                    <i class="fas fa-medal"></i> LEV 1
                </h3>
                <div class="row mt-3">
                    <div class="col-6 text-center">
                        <h6 class="mb-0 text-light small-font-lg">Team Size</h6>
                        <h5 class="mb-0 text-light mid-font-sm fw-bold"><?php echo e(teamSize($user->id, 1)); ?></h5>
                    </div>
                    <div class="col-6 text-center">
                        <h6 class="mb-0 text-light small-font-lg">Profit Amount</h6>
                        <h5 class="mb-0 text-light mid-font-sm fw-bold"><?php echo e(getAmount(profitAmount($user->id, 1))); ?></h5>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a href="#" class="btn btn-sm btn-light rounded-pill px-5">Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3 bg-gr-green-light">
            <div class="card-body">
                <h3 class="mb-0">
                    <i class="fas fa-medal"></i> LEV 2
                </h3>
                <div class="row mt-3">
                    <div class="col-6 text-center">
                        <h6 class="mb-0 text-light small-font-lg">Team Size</h6>
                        <h5 class="mb-0 text-light mid-font-sm fw-bold"><?php echo e(teamSize($user->id, 2)); ?></h5>
                    </div>
                    <div class="col-6 text-center">
                        <h6 class="mb-0 text-light small-font-lg">Profit Amount</h6>
                        <h5 class="mb-0 text-light mid-font-sm fw-bold"><?php echo e(getAmount(profitAmount($user->id, 2))); ?></h5>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a href="#" class="btn btn-sm btn-light rounded-pill px-5">Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3 bg-gr-violet">
            <div class="card-body">
                <h3 class="mb-0">
                    <i class="fas fa-medal"></i> LEV 3
                </h3>
                <div class="row mt-3">
                    <div class="col-6 text-center">
                        <h6 class="mb-0 text-light small-font-lg">Team Size</h6>
                        <h5 class="mb-0 text-light mid-font-sm fw-bold"><?php echo e(teamSize($user->id, 3)); ?></h5>
                    </div>
                    <div class="col-6 text-center">
                        <h6 class="mb-0 text-light small-font-lg">Profit Amount</h6>
                        <h5 class="mb-0 text-light mid-font-sm fw-bold"><?php echo e(getAmount(profitAmount($user->id, 3))); ?></h5>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a href="#" class="btn btn-sm btn-light rounded-pill px-5">Details</a>
                    </div>
                </div>
            </div>
        </div>



        

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style type="text/css">
    .copytextDiv{
        border:1px solid #00000021;
        cursor: pointer;
    }
    #referralURL{
        border-right: 1px solid #00000021;
    }
    .bg-success-custom{
        background-color: #28a7456e!important;
    }
    .brd-success-custom{
        border: 1px dashed #28a745;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard').click(function(){
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            // notifyMsg("Copied: " + copyText.value, 'success')
            notifyGlass('success','Copy Success!')
        });
    })(jQuery);
</script>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard2').click(function(){
            var copyText = document.getElementById("referralCode");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            // notifyMsg("Copied: " + copyText.value, 'success')
            notifyGlass('success','Copy Success!')
        });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/referred.blade.php ENDPATH**/ ?>