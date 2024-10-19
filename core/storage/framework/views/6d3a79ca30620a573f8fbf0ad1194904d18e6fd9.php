<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">

            <div class="show-filter mb-3 text-end">
                <button type="button" class="btn btn-outline--primary showFilterBtn btn-sm"><i class="las la-filter"></i> <?php echo app('translator')->get('Filter'); ?></button>
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
                                <select class="form-control" name="type">
                                    <option value=""><?php echo app('translator')->get('Any'); ?></option>
                                    <option value="deposit_commission"><?php echo app('translator')->get('Deposit Commission'); ?></option>
                                    <option value="plan_subscribe_commission"><?php echo app('translator')->get('Plan Subscribe Commission'); ?></option>
                                    <option value="ptc_view_commission"><?php echo app('translator')->get('Advertisement View Commission'); ?></option>
                                </select>
                            </div>
                            <div class="flex-grow-1">
                                <label><?php echo app('translator')->get('Levels'); ?></label>
                                <select class="form-control" name="level">
                                    <option value=""><?php echo app('translator')->get('Any'); ?></option>
                                    <?php for($i = 1; $i <= $levels; $i++): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e(__(ordinal($i))); ?> <?php echo app('translator')->get('Level'); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="flex-grow-1">
                                <label><?php echo app('translator')->get('Date'); ?></label>
                                <input name="date" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" class="datepicker-here form-control" data-position='bottom right' placeholder="<?php echo app('translator')->get('Start date - End date'); ?>" autocomplete="off" value="<?php echo e(request()->date); ?>">
                            </div>
                            <div class="flex-grow-1 align-self-end">
                                <button class="btn btn--primary w-100 h-45"><i class="fas fa-filter"></i> <?php echo app('translator')->get('Filter'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('Date'); ?></th>
                                <th><?php echo app('translator')->get('User'); ?></th>
                                <th><?php echo app('translator')->get('Type - Transaction'); ?></th>
                                <th><?php echo app('translator')->get('Level - From'); ?></th>
                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                <th><?php echo app('translator')->get('Description'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e(showDateTime($data->created_at,'Y-m-d')); ?></td>
                                    <td>
                                        <span class="fw-bold"><?php echo e($data->userTo->fullname); ?></span>
                                        <br>
                                        <span class="small"> <a href="<?php echo e(route('admin.users.detail', $data->userTo->id)); ?>"><span>@</span><?php echo e($data->userTo->username); ?></a> </span>
                                    </td>
                                    <td>
                                        <?php if($data->type == 'deposit_commission'): ?>
                                            <span class="badge badge--success"><?php echo app('translator')->get('Deposit'); ?></span>
                                        <?php elseif($data->type == 'plan_subscribe_commission'): ?>
                                            <span class="badge badge--dark"><?php echo app('translator')->get('Plan Subscribe'); ?></span>
                                        <?php else: ?>
                                            <span class="badge badge--primary"><?php echo app('translator')->get('Ads View'); ?></span>
                                        <?php endif; ?>
                                        <br>
                                        <?php echo e(__($data->trx)); ?>

                                    </td>
                                    <td>
                                        <span class="fw-bold"><?php echo e(__(ordinal($data->level))); ?></span>
                                        <br>
                                        <span class="small"> <a href="<?php echo e(route('admin.users.detail', $data->userFrom->id)); ?>"><span>@</span><?php echo e($data->userFrom->username); ?></a> </span>
                                    </td>
                                    <td>
                                        <span class="fw-bold"><?php echo e(__($general->cur_sym)); ?><?php echo e(getAmount($data->amount)); ?></span>
                                    </td>
                                    <td>
                                        <?php echo e(__($data->details)); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                <?php if($commissions->hasPages()): ?>
                <div class="card-footer">
                    <?php echo e(paginateLinks($commissions)); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-lib'); ?>
  <script src="<?php echo e(asset('assets/admin/js/vendor/datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/js/vendor/datepicker.en.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
  <script>
    (function($){
        "use strict";
        if(!$('.datepicker-here').val()){
            $('.datepicker-here').datepicker();
        }
        $('[name=type]').val('<?php echo e(request()->type); ?>');
        $('[name=level]').val('<?php echo e(request()->level); ?>');
    })(jQuery)
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/admin/reports/commission.blade.php ENDPATH**/ ?>