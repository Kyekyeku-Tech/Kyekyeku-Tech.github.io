<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <?php echo $__env->make('templates.basic.layouts.custom.mobile_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
</head>



<body>

    <!--top-nav-->
    <nav class="navbar fixed-top navbar-dark bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                        <img class="site-logo" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="logo">
                    </a>
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <div class="col-auto">
                        <div class="btn btn-sm btn-primary rounded-pill">
                            <img width="20px" height="20px" style="margin-top: -2px" src="<?php echo e(asset('assets/images/3d-icon/coin.png')); ?>" alt="">
                            <span class="badge bg-white text-dark userBalance rounded-pill" style="padding-top: 2px; padding-bottom: 2px;">
                                <b><?php echo e($general->cur_sym); ?><?php echo e(showAmount(auth()->user()->balance)); ?></b>
                            </span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>


    <?php echo $__env->yieldContent('content'); ?>


    
    <!-- Bottom Nav -->
    <nav class="navbar fixed-bottom navbar-dark bg-light">
        <div class="container-fluid">
            <div class="row mx-auto" style="justify-content: space-evenly">
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('user.deposit.index')); ?>">
                        <i class="fas fa-credit-card"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon middle active">
                    <a href="<?php echo e(route('user.trading')); ?>">
                        <i class="fas fa-chart-bar"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('user.withdraw')); ?>">
                        <i class="fas fa-wallet"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('user.home')); ?>">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>





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

</body>

</html>
<?php /**PATH /Users/mrorko/Sites/whiteTrading/core/resources/views/templates/basic/layouts/mobile.blade.php ENDPATH**/ ?>