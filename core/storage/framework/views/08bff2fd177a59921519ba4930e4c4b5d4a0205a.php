<link rel="stylesheet" href="<?php echo e(asset('assets/global/css/iziToast.min.css')); ?>">
<script src="<?php echo e(asset('assets/global/js/iziToast.min.js')); ?>"></script>

<style>
    .iziToast {
        font-size: 14px;
        padding: 4px 39px 4px 0;
        border-radius: 10px;
        width: fit-content;
        min-height: 40px;
    }
    .iziToast>.iziToast-body .iziToast-icon {
        font-size: 22px;
        line-height: 18px;
        margin-top: -10px;
        width: 20px;
        height: 20px;
    }
    .iziToast>.iziToast-close {
        opacity: 1;
        width: 35px;
        background-size: 10px;
    }
    .iziToast.iziToast-color-green {
        background: rgba(96, 255, 186, 0.95);
        border-color: rgba(96, 255, 186, 0.9);
    }
    .iziToast.iziToast-color-red {
        background: rgba(253, 191, 158, 0.95);
        border-color: rgba(253, 191, 158, 0.9);
    }
    .iziToast.iziToast-color-orange {
        background: rgba(254, 229, 137, 0.95);
        border-color: rgba(255,207,165,.9);
    }
    .iziToast.iziToast-color-purple {
        background: rgba(236, 137, 254, 0.95);
        border-color: rgba(236, 137, 254, 0.95);
    }
    .iziToast.iziToast-color-glass {
        background: rgba( 0, 0, 0, 0.5 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 2px );
        -webkit-backdrop-filter: blur( 2px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }

</style>

<?php if(session()->has('notify')): ?>
    <?php $__currentLoopData = session('notify'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            "use strict";
            iziToast.<?php echo e($msg[0]); ?>({
                message: "<?php echo e(__($msg[1])); ?>",
                position: "center",
                progressBar: false,
                color: 'glass',
                messageColor: '#fff',
                icon: false,
                close: false,
                timeout: 1500
            });
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(isset($errors) && $errors->any()): ?>
    <?php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    ?>

    <script>
        "use strict";
        <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            iziToast.error({
                message: '<?php echo e(__($error)); ?>',
                position: "center",
                progressBar: false,
                color: 'glass',
                messageColor: '#fff',
                icon: false,
                close: false,
                timeout: 1500
            });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>
<script>
    "use strict";

    // function notify(status, message) {
    //     if (typeof message == 'string') {
    //         iziToast[status]({
    //             message: message,
    //             position: "center",
    //             progressBar: false,
    //             timeout: 1500
    //         });
    //     } else {
    //         $.each(message, function(i, val) {
    //             iziToast[status]({
    //                 message: val,
    //                 position: "center",
    //                 progressBar: false,
    //                 timeout: 1500
    //             });
    //         });
    //     }
    // }

    function notify(status, message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "center",
                progressBar: false,
                color: 'glass',
                messageColor: '#fff',
                icon: false,
                close: false,
                timeout: 1500
            });
        } else {
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "center",
                    progressBar: false,
                    color: 'glass',
                    messageColor: '#fff',
                    icon: false,
                    close: false,
                    timeout: 1500
                });
            });
        }
    }

    function notifyGlass(status, message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "center",
                progressBar: false,
                color: 'glass',
                messageColor: '#fff',
                icon: false,
                close: false,
                timeout: 1500
            });
        } else {
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "center",
                    progressBar: false,
                    color: 'glass',
                    messageColor: '#fff',
                    icon: false,
                    close: false,
                    timeout: 1500
                });
            });
        }
    }
</script>
<?php /**PATH /home/ethemest/DEMO/demo.viser.store/usdt-trading/core/resources/views/partials/notify.blade.php ENDPATH**/ ?>