<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('assets/global/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/global/css/all.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('assets/global/css/line-awesome.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/lib/custom-icon.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/lib/slick.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/lib/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/lib/simplebar.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/main.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/custom.css')); ?>">
    <?php echo $__env->yieldPushContent('style-lib'); ?>

    <?php echo $__env->yieldPushContent('style'); ?>

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/color.php')); ?>?color=<?php echo e($general->base_color); ?>&secondColor=<?php echo e($general->secondary_color); ?>">
</head>

<body>

    <?php echo $__env->yieldPushContent('fbComment'); ?>


    <!-- preloader start -->
	<div class="preloader">
		<div class="preloader__img">
			<img src="<?php echo e(getImage(getFilePath('logoIcon') .'/favicon.png')); ?>" alt="image" />
		</div>
	</div>
	<!-- preloader end -->

    <!-- Back To Top -->
	<div class="back-to-top">
		<span class="back-top">
			<i class="las la-angle-double-up"></i>
		</span>
	</div>
	<!-- Back To Top End -->

    <?php echo $__env->yieldContent('panel'); ?>

    <?php if(!request()->routeIs('maintenance') ): ?>
        <?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php
        $cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
    ?>
    <?php if($cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie')): ?>
        <!-- cookies dark version start -->
        <div class="cookies-card text-center hide">
            <div class="cookies-card__icon bg--base">
                <i class="las la-cookie-bite"></i>
            </div>
            <p class="mt-4 cookies-card__content"><?php echo e($cookie->data_values->short_desc); ?> <a href="<?php echo e(route('cookie.policy')); ?>" target="_blank"><?php echo app('translator')->get('learn more'); ?></a></p>
            <div class="cookies-card__btn mt-4">
                <a href="javascript:void(0)" class="btn cmn-btn w-100 policy btn--base btn-lg"><?php echo app('translator')->get('Allow'); ?></a>
            </div>
        </div>
        <!-- cookies dark version end -->
    <?php endif; ?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- slick slider js -->
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/lib/slick.js')); ?>"></script>

    <!-- magnific popup plugin -->
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/lib/jquery.magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/lib/simplebar.min.js')); ?>"></script>

    <!-- dashboard custom js -->
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/app.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script-lib'); ?>

    <?php echo $__env->yieldPushContent('script'); ?>

    <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "<?php echo e(route('home')); ?>/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                var type = element.attr('type');
                if (type != 'checkbox') {
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('<?php echo e(route('cookie.accept')); ?>', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            $.each($('input, select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                    Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                        colum.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>

</body>

</html>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/layouts/app.blade.php ENDPATH**/ ?>