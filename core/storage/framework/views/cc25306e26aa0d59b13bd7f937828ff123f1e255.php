<?php $__env->startSection('content'); ?>
    <!-- Top Nav -->
    <?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="appCapsule">
        <div class="container mt-3">
            <?php $__empty_1 = true; $__currentLoopData = $runingPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div class="card glass-bg my-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="mb-0 text-start small-font-lg text-primary">
                                    <?php echo e($item->plan->name); ?>

                                </h6>
                            </div>
                            <div class="col-auto">
                                <h6 class="mb-0 small-font">
                                    <?php if($item->status == 1): ?>
                                        <span class="badge bg-gr-green-light">Running</span>
                                    <?php else: ?>
                                        <span class="badge bg-gr-red">Expired</span>
                                    <?php endif; ?>
                                </h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="mb-0 text-start small-font text-light">
                                    Daily Earn:
                                </p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-start small-font text-primary">
                                    <?php echo e($item->plan->daily_profit); ?> <?php echo e($general->cur_text); ?>

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="mb-0 text-start small-font text-light">
                                    Purchase Date:
                                </p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-start small-font text-warning">
                                    <?php echo e(date_format(date_create($item->created_at), 'd M Y')); ?>

                                </p>
                            </div>
                        </div>
                        <?php if($item->status == 1): ?>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0 text-start small-font text-light">
                                        Expire Date:
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="mb-0 text-start small-font text-info">
                                        <?php echo e(date_format(date_create($item->validity), 'd M Y')); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div class="card glass-bg">
                    <div class="card-body">
                        <h6 class="mb-0 text-center small-font-lg text-secondary">
                            Ops, No Runung Plan!
                        </h6>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/afearnin/skymarketingpk.online/core/resources/views/templates/basic/user/runing_plans.blade.php ENDPATH**/ ?>