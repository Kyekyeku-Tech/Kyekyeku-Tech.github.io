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
                                    <label><?php echo app('translator')->get('TRX/Username'); ?></label>
                                    <input type="text" name="search" value="<?php echo e(request()->search); ?>" class="form-control">
                                </div>
                                <div class="flex-grow-1">
                                    <label><?php echo app('translator')->get('Remark'); ?></label>
                                    <select class="form-select form--select" name="remark">
                                        <option value=""><?php echo app('translator')->get('Any'); ?></option>
                                        <option value="deposit_commission"><?php echo app('translator')->get('Deposit Commission'); ?></option>
                                        <option value="plan_subscribe_commission"><?php echo app('translator')->get('Plan Subscribe Commission'); ?></option>
                                        <option value="ptc_view_commission"><?php echo app('translator')->get('Advertisement View Commission'); ?></option>
                                    </select>
                                </div>
                                <div class="flex-grow-1">
                                    <label><?php echo app('translator')->get('Levels'); ?></label>
                                    <select class="form-select form--select" name="level">
                                        <option value=""><?php echo app('translator')->get('Any'); ?></option>
                                        <?php for($i = 1; $i <= $levels; $i++): ?>
                                            <option value="<?php echo e($i); ?>"><?php echo e(__(ordinal($i))); ?> <?php echo app('translator')->get('Level'); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="flex-grow-1 align-self-end">
                                    <button class="btn btn--base w-100"><i class="las la-filter"></i> <?php echo app('translator')->get('Filter'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th><?php echo app('translator')->get('Transaction'); ?></th>
                                    <th><?php echo app('translator')->get('Commission From'); ?></th>
                                    <th><?php echo app('translator')->get('Commission Level'); ?></th>
                                    <th><?php echo app('translator')->get('Commission Type'); ?></th>
                                    <th><?php echo app('translator')->get('Amount'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($log->trx); ?></td>
                                        <td><?php echo e(__($log->userFrom->username)); ?></td>
                                        <td><?php echo e(ordinal($log->level)); ?></td>
                                        <td>
                                            <?php if($log->type == 'deposit_commission'): ?>
                                                <span class="badge badge--success"><?php echo app('translator')->get('Deposit'); ?></span>
                                            <?php elseif($log->type == 'plan_subscribe_commission'): ?>
                                                <span class="badge badge--dark"><?php echo app('translator')->get('Plan Subscribe'); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge--primary"><?php echo app('translator')->get('Ads View'); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(showAmount($log->amount)); ?> <?php echo e(__($general->cur_text)); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="100%" class="text-center"><?php echo e(__($emptyMessage)); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo e(paginateLinks($commissions)); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
<script>
    (function($){
    "use strict"
        $('[name=remark]').val('<?php echo e(request()->remark); ?>');
        $('[name=level]').val('<?php echo e(request()->level); ?>');
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/commissions.blade.php ENDPATH**/ ?>