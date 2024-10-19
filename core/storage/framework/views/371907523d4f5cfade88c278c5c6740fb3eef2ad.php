<?php $__env->startSection('content'); ?>
    <?php
        $loginCaption = getContent('login.content', true);
    ?>
    


    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url(<?php echo e(asset('assets/images/header/1.png')); ?>)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Login Page</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1">
                    <img src="<?php echo e(asset('assets/images/header/2.png')); ?>" alt="shape-icon">
                </span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->


    <!-- ===============>> account start here <<================= -->
    <section class="account padding-top padding-bottom sec-bg-color2">
        <div class="container">
            <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="account__content account__content--style1">

                            <!-- account tittle -->
                            <div class="account__header">
                                <h2>Login Here</h2>
                                <p>
                                    Hey, You can Login Here.
                                </p>
                            </div>

                            <!-- account form -->
                            <form action="<?php echo e(route('user.login')); ?>" method="POST" class="account__form needs-validation" novalidate>
                                <?php echo csrf_field(); ?>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div>
                                            <label for="account-email" class="form-label">Email or Username</label>
                                            <input type="text" name="username" class="form-control" id="account-email" placeholder="Enter your email or username" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-pass">
                                            <label for="account-pass" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control showhide-pass" id="account-pass" placeholder="Password" required>
                                            <button type="button" id="btnToggle" class="form-pass__toggle"><i id="eyeIcon1" class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign In</button>
                            </form>


                            <div class="account__switch">
                                <p>Don't have any account? <a href="<?php echo e(route('user.register')); ?>">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="account__shape">
            <span class="account__shape-item account__shape-item--1"><img src="<?php echo e(asset('assets/images/contact/4.png')); ?>"
                    alt="shape-icon"></span>
        </div>
    </section>
    <!-- ===============>> account end here <<================= -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .btn {
            border: 1px solid transparent !important;
        }

        .content-area {
            z-index: -1;
            height: 100%;
        }

        .btn-outline-linkedin {
            border-color: #0077B5 !important;
            background-color: #0077B5;
            color: #ffff;
        }

        .btn-outline-linkedin:hover {
            border-color: #0077B5 !important;
            color: #fff !important;
            background-color: #0077B5;
        }

        .btn-outline-facebook {
            border-color: #395498 !important;
            background-color: #395498;
            color: #ffff;
        }

        .btn-outline-facebook:hover {
            border-color: #395498 !important;
            color: #fff !important;
            background-color: #395498;
        }

        .btn-outline-google {
            border-color: #D64937 !important;
            background-color: #D64937;
            color: #ffff;
        }

        .btn-outline-google:hover {
            border-color: #D64937;
            color: #fff !important;
            background-color: #D64937;
        }

        .row>* {
            padding-right: calc(var(--bs-gutter-x) * .0);
        }

        .socials-buttons .btn {
            width: calc(33% - 10px);
        }

        @media (max-width: 424px) {
            .socials-buttons .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $('.header-section').removeClass('header-section--style2').addClass('bg-color-3');
        $('#btnToggle').on('click', function () {
            let type = $('[name=password]').attr('type');
            if (type == 'password') {
                $('[name=password]').attr('type', 'text');
            } else {
                $('[name=password]').attr('type', 'password');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/user/auth/login.blade.php ENDPATH**/ ?>