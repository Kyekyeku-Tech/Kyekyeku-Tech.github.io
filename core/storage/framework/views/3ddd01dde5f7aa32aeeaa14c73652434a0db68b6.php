<?php $__env->startSection('panel'); ?>
<div class="row">
    <?php $__currentLoopData = $commissionTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 mb-4">
        <div class="card border--primary parent">
            <div class="card-header bg--primary">
                <h5 class="text-white float-start"><?php echo e(__($type)); ?></h5>
                <?php if($general->$key == 0): ?>
                <a href="<?php echo e(route('admin.referrals.status',$key)); ?>" class="btn btn--success btn-sm float-end"><i class="las la-toggle-on"></i> <?php echo app('translator')->get('Enable Now'); ?></a>
                <?php else: ?>
                <a href="<?php echo e(route('admin.referrals.status',$key)); ?>" class="btn btn--danger btn-sm float-end"><i class="las la-toggle-off"></i> <?php echo app('translator')->get('Disable Now'); ?></a>
                <?php endif; ?>
            </div>

            <div class="card-body">

                <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $referrals->where('commission_type',$key); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex flex-wrap justify-content-between">
                        <span class="fw-bold"><?php echo app('translator')->get('Level'); ?> <?php echo e($referral->level); ?></span>
                        <span class="fw-bold"><?php echo e($referral->percent); ?>%</span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>


                <div class="border-line-area mt-3">
                    <h6 class="border-line-title"><?php echo app('translator')->get('Update Setting'); ?></h6>
                </div>

                <div class="form-group">
                    <label><?php echo app('translator')->get('Number of Level'); ?></label>
                    <div class="input-group">
                        <input type="number" name="level" min="1" value="3" placeholder="Type a number & hit ENTER ↵" class="form-control" readonly>
                        <button type="button" class="btn btn--primary generate"><?php echo app('translator')->get('Generate'); ?></button>
                    </div>
                    <span class="text--danger required-message d-none"><?php echo app('translator')->get('Please enter a number'); ?></span>
                </div>

                <form action="<?php echo e(route('admin.referrals.update')); ?>" method="post" class="d-none levelForm">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="commission_type" value="<?php echo e($key); ?>">
                        <h6 class="text--danger mb-3"><?php echo app('translator')->get('The Old setting will be removed after generating new'); ?></h6>
                        <div class="form-group">
                            <div class="referralLevels"></div>
                        </div>
                    <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .border-line-area {
            position: relative;
            text-align: center;
            z-index: 1;
        }
        .border-line-area::before {
            position: absolute;
            content: '';
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #e5e5e5;
            z-index: -1;
        }
        .border-line-title {
            display: inline-block;
            padding: 3px 10px;
            background-color: #fff;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script>
    (function($){
        "use strict"

        $('[name="level"]').on('focus', function(){
            $(this).on('keyup', function(e){
                if(e.which == 13){
                    generrateLevels($(this));
                }
            });
        });

        $(".generate").on('click', function () {
            let $this = $(this).parents('.card-body').find('[name="level"]');
            generrateLevels($this);
        });

        $(document).on('click', '.deleteBtn', function () {
            $(this).closest('.input-group').remove();
        });

        function generrateLevels($this){
            let numberOfLevel = $this.val();
            let parent = $this.parents('.card-body');
            let html = '';
            if (numberOfLevel && numberOfLevel > 0){
                parent.find('.levelForm').removeClass('d-none');
                parent.find('.required-message').addClass('d-none');

                for (i = 1; i <= numberOfLevel; i++){
                    html += `
                    <div class="input-group mb-3">
                        <span class="input-group-text justify-content-center"><?php echo app('translator')->get('Level'); ?> ${i}</span>
                        <input type="hidden" name="level[]" value="${i}" required>
                        <input name="percent[]" class="form-control col-10" type="text" required placeholder="<?php echo app('translator')->get('Commission Percentage'); ?>">
                        <button class="btn btn--danger input-group-text deleteBtn" type="button"><i class=\'la la-times\'></i></button>
                    </div>`
                }

                parent.find('.referralLevels').html(html);
            }else {
                parent.find('.levelForm').addClass('d-none');
                parent.find('.required-message').removeClass('d-none');
            }
        }

    })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/afearnin/skymarketingpk.online/core/resources/views/admin/referral_setting.blade.php ENDPATH**/ ?>