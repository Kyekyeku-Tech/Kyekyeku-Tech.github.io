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

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/lightcase.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/vendor/animate.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/vendor/nice-select.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/vendor/slick.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/main.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/custom.css')); ?>">
    <?php echo $__env->yieldPushContent('style-lib'); ?>

    <?php echo $__env->yieldPushContent('style'); ?>

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/color.php')); ?>?color1=<?php echo e($general->base_color); ?>&color2=<?php echo e($general->secondary_color); ?>">
</head>

<body>

    <?php echo $__env->yieldPushContent('fbComment'); ?>


    <div class="preloader">
        <div class="dl">
            <div class="dl__container">
                <div class="dl__corner--top"></div>
                <div class="dl__corner--bottom"></div>
            </div>
            <div class="dl__square"></div>
        </div>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <?php echo $__env->yieldContent('panel'); ?>


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
    <!-- dashboard custom js -->
    <script src="<?php echo e(asset($activeTemplateTrue . '/js/app.js')); ?>"></script>

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

                var elementType = $(element);
                if(elementType.attr('type') != 'checkbox'){
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
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
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/layouts/app.blade.php ENDPATH**/ ?>