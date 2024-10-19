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
        .form-check-input:checked {
            background-color: #00d094;
            border-color: #00d094;
        }

        input:not([type="radio"]), .form-control {
            color: #f6f6f6;
            background: rgba( 0, 208, 148, 0% );
            box-shadow: 3px 2px 9px 0 rgb(31 38 135 / 20%);
            backdrop-filter: blur( 6px );
            -webkit-backdrop-filter: blur( 6px );
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        input:not([type="radio"]):hover,
        input:not([type="radio"]):focus,
        .form-control:hover,
        .form-control:focus {
            color: #f6f6f6;
            background: rgba( 0, 208, 148, 0% ) !important;
            box-shadow: 3px 2px 9px 0 rgb(31 38 135 / 20%) !important;
            backdrop-filter: blur( 6px ) !important;
            -webkit-backdrop-filter: blur( 6px ) !important;
            border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
        }
    </style>
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
        $noticeCaption = getContent('notice.content', true);
    ?>
    <div id="appCapsule">

        <div class="container mt-3 mb-3">

            <div class="card glass-bg my-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0 small-font-lg text-light"><?php echo e($myMethod ? $myMethod->name : ''); ?></h5>
                            <h5 class="mb-0 small-font-lg text-light"><?php echo e($bank_card ? $bank_card['account_number'] : ''); ?></h5>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wallet text-primary" style="font-size: 40px; opacity: 30%;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <p class="mb-0 small-font text-light">Total Asset</p>
                    <h6 class="mb-0 small-font-lg text-light"><?php echo e(showAmount($user->balance)); ?></h6>
                </div>
            </div>

            <div class="card my-2 rounded glass-bg">
                <div class="card-body p-2">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="bank" checked>
                                <label class="form-check-label text-primary" for="bank">
                                  Bank
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="<?php echo e(route('user.withdraw.new.now')); ?>" method="POST" class="mb-2">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="method_code" value="<?php echo e($myMethod->id); ?>">
                <div class="mb-3">
                    <label class="form-label">Plese enter the withdrawal amount</label>
                    <input type="number" class="form-control glass-bg" name="amount" placeholder="Plese enter the withdrawal amount" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Plese enter the fund password</label>
                    <input type="text" class="form-control glass-bg" name="fund_password" placeholder="Plese enter the fund password" required>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill w-100">Submit</button>
            </form>

            <div class="card rounded glass-bg mt-5">
                <div class="card-header border-secondary py-1">
                    <p>Warm Tips</p>
                </div>
                <div class="card-body">
                    <p class="small-font text-light">
                        <?php
                            echo $noticeCaption->data_values->withdraw_notice;
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/withdraw/new/withdraw.blade.php ENDPATH**/ ?>