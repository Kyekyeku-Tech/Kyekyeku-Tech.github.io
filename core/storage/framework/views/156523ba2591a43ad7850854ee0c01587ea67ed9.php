<?php $__env->startSection('content'); ?>
<style>
    input:not([type="radio"]), .form-control {
        padding: 5px 10px;
    }
    .input-group-text {
        background: #00D093;
    }
    label {
        color: #ffffff;
        margin-bottom: 1px;
        font-size: 13px;
    }
</style>
<?php echo $__env->make('templates.basic.layouts.mobile.top_nav_mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="appCapsule">
    <div class="container mt-3 mb-3">
        <?php echo e(showUserLevel($user->id, $lev)); ?>

    </div>
</div>
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
            // notifyMsg("Copied: " + copyText.value, 'success')
            notifyGlass('success','Copy Success!')
        });
    })(jQuery);
</script>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard2').click(function(){
            var copyText = document.getElementById("referralCode");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            // notifyMsg("Copied: " + copyText.value, 'success')
            notifyGlass('success','Copy Success!')
        });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hemelmridha/public_html/miningjs.demo4k.xyz/core/resources/views/templates/basic/user/referred_users.blade.php ENDPATH**/ ?>