<?php $__env->startSection('content'); ?>
<?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="appCapsule">
    <div class="container mt-3">
        <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="card glass-bg my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto ps-1">
                            <p class="text-light mb-0 small-font">
                                <?php echo e($k+1); ?>.
                            </p>
                        </div>
                        <div class="col pe-1">
                            <div class="row">
                                <div class="col pe-1">
                                    <p class="text-light mb-0 small-font">
                                        <?php echo e($deposit->created_at); ?>

                                        <?php if($deposit->status == 1): ?>
                                            <span class="ps-2 text-success">Success</span>
                                        <?php elseif($deposit->status == 2): ?>
                                            <span class="ps-2 text-warning">Processing</span>
                                        <?php elseif($deposit->status == 3): ?>
                                            <span class="ps-2 text-danger">Failed</span>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div class="col-auto ps-0">
                                    <h5 class="mb-0 text-start small-font text-light fw-bold">
                                        <?php echo e(getAmount($deposit->amount )); ?> <?php echo e(__($general->cur_text)); ?>

                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 pe-1">
                                    <p class="text-light mb-0 small-font">
                                        Order Number: <span class="fw-bold"><?php echo e($deposit->trx); ?></span>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="text-light mb-0 small-font">
                                        <span class="fw-bold">OnlinePayment</span>
                                    </p>
                                </div>
                            </div>
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
            <?php echo e($deposits->links()); ?>

        </div>
    </div>
</div>




<div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo app('translator')->get('Details'); ?></h5>
                <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </span>
            </div>
            <div class="modal-body">
                <ul class="list-group userData mb-2">
                </ul>
                <div class="feedback"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $('.detailBtn').on('click', function () {
                var modal = $('#detailModal');

                var userData = $(this).data('info');
                var html = '';
                if(userData){
                    userData.forEach(element => {
                        if(element.type != 'file'){
                            html += `
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>${element.name}</span>
                                <span">${element.value}</span>
                            </li>`;
                        }
                    });
                }

                modal.find('.userData').html(html);

                if($(this).data('admin_feedback') != undefined){
                    var adminFeedback = `
                        <div class="my-3">
                            <strong><?php echo app('translator')->get('Admin Feedback'); ?></strong>
                            <p>${$(this).data('admin_feedback')}</p>
                        </div>
                    `;
                }else{
                    var adminFeedback = '';
                }

                modal.find('.feedback').html(adminFeedback);


                modal.modal('show');
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/deposit_history.blade.php ENDPATH**/ ?>