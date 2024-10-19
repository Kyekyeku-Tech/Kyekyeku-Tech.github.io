<?php $__env->startSection('content'); ?>
<?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="appCapsule">
    <div class="container mt-3">
        <div class="card glass-bg mb-4">
            <div class="card-body pb-1">
                <form action="">
                    <div class="d-flex flex-wrap gap-1">
                        <div class="flex-grow-1">
                            <label><?php echo app('translator')->get('Transaction Number'); ?></label>
                            <input type="text" name="search" value="<?php echo e(request()->search); ?>" class="form-control form-control-sm">
                        </div>
                        <div class="flex-grow-1">
                            <label><?php echo app('translator')->get('Type'); ?></label>
                            <select name="trx_type" class="form-select form-control-sm">
                                <option value=""><?php echo app('translator')->get('All'); ?></option>
                                <option value="+" <?php if(request()->trx_type == '+'): echo 'selected'; endif; ?>><?php echo app('translator')->get('Plus'); ?></option>
                                <option value="-" <?php if(request()->trx_type == '-'): echo 'selected'; endif; ?>><?php echo app('translator')->get('Minus'); ?></option>
                            </select>
                        </div>
                        <div class="flex-grow-1">
                            <label><?php echo app('translator')->get('Remark'); ?></label>
                            <select class="form-select form-control-sm" name="remark">
                                <option value=""><?php echo app('translator')->get('Any'); ?></option>
                                <?php $__currentLoopData = $remarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($remark->remark); ?>" <?php if(request()->remark == $remark->remark): echo 'selected'; endif; ?>><?php echo e(__(keyToTitle($remark->remark))); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="flex-grow-1 align-self-end">
                            <button class="btn btn-sm btn-primary w-100 filterBtn"><i class="las la-filter"></i> <?php echo app('translator')->get('Filter'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="card glass-bg my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-start small-font-lg text-primary">
                                <?php echo e(__($trx->details)); ?>

                            </h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font text-light">
                                Amount:
                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-start small-font text-primary">
                                <span class="fw-bold <?php if($trx->trx_type == '+'): ?> text--success <?php else: ?> text--danger <?php endif; ?>">
                                    <?php echo e($trx->trx_type); ?> <?php echo e(showAmount($trx->amount)); ?> <?php echo e($general->cur_text); ?>

                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font text-light">
                                Transaction:
                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-start small-font-sm text-warning">
                                <?php echo e($trx->trx); ?>

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font-sm text-secondary">
                                <?php echo e(showDateTime($trx->created_at)); ?> - <?php echo e(diffForHumans($trx->created_at)); ?>

                            </p>
                        </div>
                    </div>

                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="card glass-bg">
                <div class="card-body">
                    <h6 class="mb-0 text-center small-font-lg text-secondary">
                        Ops, No Withdraw Record Found!
                    </h6>
                </div>
            </div>
        <?php endif; ?>

        <div class="d-flex justify-content-center mt-4">
            <?php echo e($transactions->links()); ?>

        </div>

    </div>
</div>




    
<?php $__env->stopSection(); ?>
@
<?php $__env->startPush('style'); ?>
<style>
    input:not([type="radio"]), .form-control {
        padding: 7px 20px;
    }
    .filterBtn{
        min-height: 38px !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/transactions.blade.php ENDPATH**/ ?>