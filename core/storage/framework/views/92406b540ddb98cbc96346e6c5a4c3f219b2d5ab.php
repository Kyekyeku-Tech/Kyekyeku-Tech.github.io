<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <?php echo $__env->make('templates.basic.layouts.custom.mobile_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .form-control{
            border-radius: 20px !important;
            background: #000 !important;
            border: 1px solid #939393 !important;
            color: #fff !important;
            padding-left: 48px !important;
        }
        .form-login p.icon{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 8px;
            width: fit-content;
        }
        .form-login p.icon>i{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 10px;
            width: fit-content;
        }
        .form-control:focus{
            border-radius: 20px !important;
            background: #000 !important;
            border: 1px solid #939393 !important;
            color: #fff !important;
            padding-left: 48px !important;
        }
        .form-login p.icon:focus{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 8px;
            width: fit-content;
        }
        .form-login p.icon>i:focus{
            color: #fff;
            margin-bottom: -36px;
            margin-left: 10px;
            width: fit-content;
        }
    </style>
    <?php echo $__env->yieldPushContent('style'); ?>

</head>



<body>

    <?php echo $__env->yieldContent('content'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    const Spiner = `<div class="spinner-border spinner-border-sm" role="status"></div>`;
    //-- Notify --//
    const notifyMsgBig = (headline, msg, cls) => {
        Swal.fire(
            headline,msg,cls
        )
    }
    const notifyMsg = (msg,cls) => {
        Swal.fire({
            position: 'top-end',
            icon: cls,
            title: msg,
            toast:true,
            showConfirmButton: false,
            timer: 2500
        })
    }

    const userDataApi = () => {
        $.ajax({
            type: "get",
            url: "<?php echo e(route('user.data.api')); ?>",
            success: function (res) {
                $('.userBalance').html('<?php echo e($general->cur_sym); ?>'+(parseFloat(res.user.balance).toFixed(2)))
            }
        });
    }
    userDataApi()

</script>

<script>
    const currentUrl = $(location).attr('href');
    // active Class System Jquery
    $('.nav-icon a').each(function(index,item){
        let navLink = item['href'];
        if (currentUrl == navLink){
            $('.nav-icon').removeClass('active');
            $(this).addClass('active');
        }
    });

</script>

<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/layouts/mobile_auth.blade.php ENDPATH**/ ?>