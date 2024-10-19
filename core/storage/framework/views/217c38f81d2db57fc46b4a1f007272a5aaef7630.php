<?php $__env->startSection('content'); ?>
<!-- Top Nav -->
<?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="appCapsule">
    <div class="container mt-3">

        <div class="text-end">
            <a href="<?php echo e(route('ticket.open')); ?>" class="btn btn-sm btn--base mb-2"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('New Ticket'); ?></a>
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $supports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $support): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="card glass-bg my-2">
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font fw-bold text-primary">
                                <?php echo e(__($support->subject)); ?>

                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-start small-font text-primary">
                                <a href="<?php echo e(route('ticket.view', $support->ticket)); ?>" class="btn btn-sm btn-primary px-4 rounded-pill">
                                    View
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font text-light">
                                Ticket No: #<?php echo e($support->ticket); ?>

                            </p>
                        </div>
                        <div class="col-auto">
                            <?php echo $support->statusBadge; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font-sm text-secondary">
                                <?php echo e(showDateTime($support->created_at)); ?> - <?php echo e(diffForHumans($support->created_at)); ?>

                            </p>
                        </div>
                        <div class="col-auto">
                            <?php if($support->priority == Status::PRIORITY_LOW): ?>
                                <span class="badge badge--dark"><?php echo app('translator')->get('Low'); ?></span>
                            <?php elseif($support->priority == Status::PRIORITY_MEDIUM): ?>
                                <span class="badge  badge--warning"><?php echo app('translator')->get('Medium'); ?></span>
                            <?php elseif($support->priority == Status::PRIORITY_HIGH): ?>
                                <span class="badge badge--danger"><?php echo app('translator')->get('High'); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="card glass-bg">
                <div class="card-body">
                    <h6 class="mb-0 text-center small-font-lg text-secondary">
                        Ops, No Support Ticket Found!
                    </h6>
                </div>
            </div>
        <?php endif; ?>

        <div class="d-flex justify-content-center mt-4">
            <?php echo e($supports->links()); ?>

        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/support/index.blade.php ENDPATH**/ ?>