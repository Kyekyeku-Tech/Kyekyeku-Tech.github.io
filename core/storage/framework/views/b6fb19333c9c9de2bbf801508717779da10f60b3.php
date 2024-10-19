<?php $__env->startSection('content'); ?>
<div class="cmn-section">
    <div class="container">
        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?php echo app('translator')->get('Username'); ?></label>
                    <input type="text" name="username" class="form-control checkUser">
                    <small class="text-danger usernameExist"></small>
                </div>
                <div class="form-group">
                    <label><?php echo app('translator')->get('Amount'); ?> <small class="text--success">( <?php echo app('translator')->get('Charge'); ?>: <?php echo e(getAmount($general->bt_fixed)); ?> <?php echo e($general->cur_text); ?> + <?php echo e(getAmount($general->bt_percent)); ?>% )</small></label>
                    <div class="input-group">
                        <input type="number" step="any" name="amount" value="<?php echo e(old('username')); ?>" class="form-control">
                        <span class="input-group-text"><?php echo e($general->cur_text); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label><?php echo app('translator')->get('Amount Will Cut From Your Account'); ?></label>
                    <div class="input-group">
                        <input type="text" class="form-control calculation" readonly>
                        <span class="input-group-text"><?php echo e($general->cur_text); ?></span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn--base w-100"><?php echo app('translator')->get('Transfer'); ?></button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script type="text/javascript">
    $('input[name=amount]').on('input',function(){
        var amo = parseFloat($(this).val());
        var calculation = amo + ( parseFloat(<?php echo e($general->bt_fixed); ?>) + ( amo * parseFloat(<?php echo e($general->bt_percent); ?>) ) / 100 );
        $('.calculation').val(calculation);
    });

    $('.checkUser').on('focusout',function(e){
        var url = '<?php echo e(route('user.checkUser')); ?>';
        var value = $(this).val();
        var token = '<?php echo e(csrf_token()); ?>';
        var data = {username:value,_token:token}
        $.post(url,data,function(response) {
            if(response.data != false){
                $(`.${response.type}Exist`).text('');
            }else{
                $(`.${response.type}Exist`).text(`${response.type} not found`);
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/transfer_balance.blade.php ENDPATH**/ ?>