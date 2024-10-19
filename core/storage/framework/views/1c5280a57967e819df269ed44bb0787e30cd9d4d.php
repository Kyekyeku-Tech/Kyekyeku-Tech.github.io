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

    <?php echo $__env->yieldPushContent('style'); ?>
</head>



<body>

    <!--top-nav-->
    


    <?php echo $__env->yieldContent('content'); ?>

    <!-- Bottom Nav -->
    <nav class="navbar fixed-bottom navbar-dark bg-dark-alt">
        <div class="container-fluid">
            <div class="row mx-auto" style="justify-content: space-evenly">
                <div class="col-auto px-2 nav-icon">
                    <a class="text-center" href="<?php echo e(route('home')); ?>">
                        <i class="fas fa-home"></i>
                        <p class="small-font-sm text-white think-font">Home</p>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a class="text-center" href="<?php echo e(route('user.runing.plans')); ?>">
                        <i class="fas fa-glass-cheers"></i>
                        <p class="small-font-sm text-white think-font">Runing</p>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon middle">
                    <a class="text-center" href="<?php echo e(route('user.trading')); ?>">
                        <i class="fas fa-hammer"></i>
                        <p class="small-font-sm text-white think-font">Work</p>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a class="text-center" href="<?php echo e(route('user.teams')); ?>">
                        <i class="fas fa-users"></i>
                        <p class="small-font-sm text-white think-font">Team</p>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a class="text-center" href="<?php echo e(route('user.home')); ?>">
                        <i class="fas fa-user"></i>
                        <p class="small-font-sm text-white think-font">My</p>
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

    let auth_user = null;

    // const getUserDataNow = () => {
    //     $.ajax({
    //         type: "get",
    //         url: "<?php echo e(route('user.data.api')); ?>",
    //         success: function (res) {
    //             auth_user = res.user;
    //             return auth_user;
    //         }
    //     });
    // }
    // getUserDataNow()

    const userDataApi = () => {
        $.ajax({
            type: "get",
            url: "<?php echo e(route('user.data.api')); ?>",
            success: function (res) {
                $('.userBalance').html('<?php echo e($general->cur_sym); ?>'+(parseFloat(res.user.balance).toFixed(2)))
                $('.userBalanceRound').html(Math.round(parseFloat(res.user.balance).toFixed(2)) + ' <?php echo e($general->cur_text); ?>')
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
        }else{
            $('.nav-icon').removeClass('active');
        }
    });

</script>
<script>
    const copyTxt = (id) =>{
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
        notifyGlass('success','Copy Success!')
    }
</script>

<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/layouts/mobile.blade.php ENDPATH**/ ?>