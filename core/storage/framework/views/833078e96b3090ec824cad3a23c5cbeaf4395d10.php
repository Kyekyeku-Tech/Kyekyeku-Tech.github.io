<?php $__env->startSection('content'); ?>
    <div class="cmn-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="show-filter mb-3 text-end">
                        <button type="button" class="btn btn--base showFilterBtn btn-sm"><i class="las la-filter"></i> <?php echo app('translator')->get('Filter'); ?></button>
                    </div>
                    <div class="card responsive-filter-card mb-4">
                        <div class="card-body">
                            <form action="">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="flex-grow-1">
                                        <label><?php echo app('translator')->get('Transaction Number'); ?></label>
                                        <input type="text" name="search" value="<?php echo e(request()->search); ?>" class="form-control form--control">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label><?php echo app('translator')->get('Type'); ?></label>
                                        <select name="trx_type" class="form-select form--select">
                                            <option value=""><?php echo app('translator')->get('All'); ?></option>
                                            <option value="+" <?php if(request()->trx_type == '+'): echo 'selected'; endif; ?>><?php echo app('translator')->get('Plus'); ?></option>
                                            <option value="-" <?php if(request()->trx_type == '-'): echo 'selected'; endif; ?>><?php echo app('translator')->get('Minus'); ?></option>
                                        </select>
                                    </div>
                                    <div class="flex-grow-1">
                                        <label><?php echo app('translator')->get('Remark'); ?></label>
                                        <select class="form-select form--select" name="remark">
                                            <option value=""><?php echo app('translator')->get('Any'); ?></option>
                                            <?php $__currentLoopData = $remarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($remark->remark); ?>" <?php if(request()->remark == $remark->remark): echo 'selected'; endif; ?>><?php echo e(__(keyToTitle($remark->remark))); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="flex-grow-1 align-self-end">
                                        <button class="btn btn--base w-100"><i class="las la-filter"></i> <?php echo app('translator')->get('Filter'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card custom--card">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th><?php echo app('translator')->get('Trx'); ?></th>
                                            <th><?php echo app('translator')->get('Transacted'); ?></th>
                                            <th><?php echo app('translator')->get('Amount'); ?></th>
                                            <th><?php echo app('translator')->get('Post Balance'); ?></th>
                                            <th><?php echo app('translator')->get('Detail'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td>
                                                    <strong><?php echo e($trx->trx); ?></strong>
                                                </td>

                                                <td>
                                                    <?php echo e(showDateTime($trx->created_at)); ?><br><?php echo e(diffForHumans($trx->created_at)); ?>

                                                </td>

                                                <td class="budget">
                                                    <span class="fw-bold <?php if($trx->trx_type == '+'): ?> text--success <?php else: ?> text--danger <?php endif; ?>">
                                                        <?php echo e($trx->trx_type); ?> <?php echo e(showAmount($trx->amount)); ?> <?php echo e($general->cur_text); ?>

                                                    </span>
                                                </td>

                                                <td class="budget">
                                                    <?php echo e(showAmount($trx->post_balance)); ?> <?php echo e(__($general->cur_text)); ?>

                                                </td>


                                                <td><?php echo e(__($trx->details)); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <?php echo e($transactions->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/transactions.blade.php ENDPATH**/ ?>