<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Bootstrap CSS -->
    

    

    

    




    

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />



    <!-- main css for template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <?php echo $__env->make('templates.basic.layouts.custom.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(auth()->guard()->check()): ?>
        <?php echo $__env->make('templates.basic.layouts.custom.css_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <style>
        .site-logo {
            height: 30px;
        }
    </style>
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="<?php echo e(asset('assets/images/logo/preloader.png')); ?>" alt="preloader icon">
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    <!-- ===============>> light&dark switch start here <<================= -->
    <div class="lightdark-switch d-none">
        <span class="dark-btn" id="btnSwitch">
            <img src="<?php echo e(asset('assets/images/icon/moon.svg')); ?>" alt="light-dark-switchbtn" class="swtich-icon">
        </span>
    </div>
    <!-- ===============>> light&dark switch start here <<================= -->





    <!-- ===============>> Header section start here <<================= -->
    <?php if(auth()->guard()->check()): ?>
        <?php echo $__env->make('templates.basic.partials.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('templates.basic.partials.home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- ===============>> Header section end here <<================= -->


    <?php echo $__env->yieldContent('content'); ?>


    <!-- ===============>> footer start here <<================= -->
    <?php if(auth()->guard()->check()): ?>
        <?php echo $__env->make('templates.basic.partials.home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('templates.basic.partials.home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- ===============>> footer end here <<================= -->





    <!-- ===============>> scrollToTop start here <<================= -->
    
    <!-- ===============>> scrollToTop ending here <<================= -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- lightcase plugin -->
    <script src="<?php echo e(asset($activeTemplateTrue . '/js/vendor/lightcase.js')); ?>"></script>
    <!-- custom select js -->
    <script src="<?php echo e(asset($activeTemplateTrue . '/js/vendor/jquery.nice-select.min.js')); ?>"></script>
    <!-- slick slider js -->
    <script src="<?php echo e(asset($activeTemplateTrue . '/js/vendor/slick.min.js')); ?>"></script>
    <!-- scroll animation -->
    <script src="<?php echo e(asset($activeTemplateTrue . '/js/vendor/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . '/js/app.js')); ?>"></script>

    <!-- vendor plugins -->
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fslightbox.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/purecounter_vanilla.js')); ?>"></script>



    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script-lib'); ?>
    <?php echo $__env->yieldPushContent('script'); ?>
    <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script type="text/javascript">
        (function($) {
            "use strict";
            $('.buyBtn').click(function() {

                let symbol = '<?php echo e($general->cur_sym); ?>';
                let currency = '<?php echo e($general->cur_text); ?>';
                $('.gateway-info').addClass('d-none');
                let modal = $('#BuyModal');
                let plan = $(this).data('plan')
                modal.find('.planName').text(plan.name)
                modal.find('[name=id]').val(plan.id)
                let planPrice = parseFloat(plan.price).toFixed(2);
                modal.find('[name=amount]').val(planPrice);
                modal.find('[name=amount]').attr('readonly', true);

                modal.find('.dailyLimit').html(`Daily Ads Limit: <span class="text--danger"> ${plan.daily_limit}</span>`)
                modal.find('.refLevel').html(`Referral Level: <span class="text--danger"> ${plan.ref_level} </span>`)
                modal.find('.validity').html(`Plan Validity:  <span class="text--danger"> ${plan.validity} Days </span>`)

                $('[name=amount]').on('input', function() {
                    $('[name=wallet_type]').trigger('change');
                })

                $('[name=wallet_type]').change(function() {
                    var amount = $('[name=amount]').val();
                    if ($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount) {
                        var resource = $('select[name=wallet_type] option:selected').data('gateway');
                        var fixed_charge = parseFloat(resource.fixed_charge);
                        var percent_charge = parseFloat(resource.percent_charge);
                        var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                        $('.charge').text(charge);
                        $('.rate').text(parseFloat(resource.rate));
                        $('.gateway-info').removeClass('d-none');
                        if (resource.currency == '<?php echo e($general->cur_text); ?>') {
                            $('.rate-info').addClass('d-none');
                        } else {
                            $('.rate-info').removeClass('d-none');
                        }
                        $('.method_currency').text(resource.currency);
                        $('.total').text(parseFloat(charge) + parseFloat(amount));
                    } else {
                        $('.gateway-info').addClass('d-none');
                    }
                });
                modal.find('input[name=id]').val(plan.id);
                modal.modal('show');
            });
        })(jQuery);
    </script>

</body>

</html>
<?php /**PATH /home/afearnin/skymarketingpk.online/core/resources/views/templates/basic/layouts/home.blade.php ENDPATH**/ ?>