<?php $__env->startSection('content'); ?>
<div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="text-end">
                    <a href="<?php echo e(route('ticket.open')); ?>" class="btn btn-sm btn--base mb-2"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('New Ticket'); ?></a>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th><?php echo app('translator')->get('Subject'); ?></th>
                                        <th><?php echo app('translator')->get('Status'); ?></th>
                                        <th><?php echo app('translator')->get('Priority'); ?></th>
                                        <th><?php echo app('translator')->get('Last Reply'); ?></th>
                                        <th><?php echo app('translator')->get('Action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $supports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $support): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td> <a href="<?php echo e(route('ticket.view', $support->ticket)); ?>" class="fw-bold"> [<?php echo app('translator')->get('Ticket'); ?>#<?php echo e($support->ticket); ?>] <?php echo e(__($support->subject)); ?> </a></td>
                                            <td>
                                                <?php echo $support->statusBadge; ?>
                                            </td>
                                            <td>
                                                <?php if($support->priority == Status::PRIORITY_LOW): ?>
                                                    <span class="badge badge--dark"><?php echo app('translator')->get('Low'); ?></span>
                                                <?php elseif($support->priority == Status::PRIORITY_MEDIUM): ?>
                                                    <span class="badge  badge--warning"><?php echo app('translator')->get('Medium'); ?></span>
                                                <?php elseif($support->priority == Status::PRIORITY_HIGH): ?>
                                                    <span class="badge badge--danger"><?php echo app('translator')->get('High'); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e(\Carbon\Carbon::parse($support->last_reply)->diffForHumans()); ?> </td>

                                            <td>
                                                <a href="<?php echo e(route('ticket.view', $support->ticket)); ?>" class="btn btn--base btn-sm">
                                                    <i class="fa fa-desktop"></i>
                                                </a>
                                            </td>
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
                <?php echo e($supports->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/support/index.blade.php ENDPATH**/ ?>