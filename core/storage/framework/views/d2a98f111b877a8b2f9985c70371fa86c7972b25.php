<?php $__env->startSection('content'); ?>
<section class="cmn-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-4">
                    <label><?php echo app('translator')->get('Referral Link'); ?></label>
                    <div class="input-group">
                        <input type="text" value="<?php echo e(route('home')); ?>?reference=<?php echo e($user->username); ?>"
                        class="form-control form-control-lg" id="referralURL"
                        readonly>
                        <button class="input-group-text copytext px-3 text--base" id="copyBoard"> <i class="fa fa-copy"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-30">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th><?php echo app('translator')->get('Full Name'); ?></th>
                                    <th><?php echo app('translator')->get('User Name'); ?></th>
                                    <th><?php echo app('translator')->get('Email'); ?></th>
                                    <th><?php echo app('translator')->get('Mobile'); ?></th>
                                    <th><?php echo app('translator')->get('Plan'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $refUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e(__($log->fullname)); ?></td>
                                        <td><?php echo e(__($log->username)); ?></td>
                                        <td><?php echo e($log->email); ?></td>
                                        <td><?php echo e($log->mobile); ?></td>
                                        <td><?php echo e(__($log->plan ? $log->plan->name : "No Plan")); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="100%" class="text-center"> <?php echo e(__($emptyMessage)); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo e(paginateLinks($refUsers)); ?>

            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style type="text/css">
    .copytextDiv{
        border:1px solid #00000021;
        cursor: pointer;
    }
    #referralURL{
        border-right: 1px solid #00000021;
    }
    .bg-success-custom{
        background-color: #28a7456e!important;
    }
    .brd-success-custom{
        border: 1px dashed #28a745;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard').click(function(){
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
        });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/referred.blade.php ENDPATH**/ ?>