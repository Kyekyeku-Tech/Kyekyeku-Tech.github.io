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
        <?php
            $bank_card = json_decode($user->bank_card, true);

            $myMethod = null;
            if (@$bank_card['bank_id']) {
                $myMethod = App\Models\WithdrawMethod::where('id', $bank_card['bank_id'])->first();
            }

        ?>

        <style>
            .rmvBtn{
                font-size: 30px;
                opacity: 40%;
            }
            .rmvBtn:hover, .rmvBtn:focus {
                font-size: 30px;
                opacity: 100%;
            }
        </style>

        <?php if(!$user->bank_card): ?>
            <div class="container mt-3 mb-3">
                <form action="<?php echo e(route('user.bank.card.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="bank_name">
                    <div class="mb-3">
                        <label class="form-label">Bank Account</label>
                        <select class="form-select" name="bank_id">
                            <option selected value="<?php echo e(null); ?>">Please Select</option>
                            <?php $__currentLoopData = $withdrawMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-name="<?php echo e($item->name); ?>" value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Actual Name</label>
                        <input type="text" class="form-control" name="real_name" placeholder="Plese enter your real name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Account Number</label>
                        <input type="text" class="form-control" name="account_number" placeholder="Plese enter your account number">
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill w-100">Submit</button>
                </form>
            </div>
        <?php else: ?>
            <div class="container mt-3 mb-3">
                <div class="card glass-bg">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-secondary small-font-sm">
                                    Bank Name:
                                </h5>
                                <h6 class="text-primary small-font-lg">
                                    <?php echo e($myMethod ? $myMethod->name : 'N/A'); ?>

                                </h6>
                                <h6 class="text-secondary small-font-sm mt-2">
                                    Account Number:
                                </h6>
                                <h6 class="text-primary small-font-lg"><?php echo e($bank_card['account_number']); ?></h6>
                            </div>
                            <div class="col-auto btn">
                                <i class="fas fa-times-circle text-red rmvBtn "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>




    </div>
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
                        location.href = "<?php echo e(route('user.bank.card.remove')); ?>"
                    }],
                    ['<button>NO</button>', function (instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }],
                ]
            });
        });



    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/bank_card.blade.php ENDPATH**/ ?>