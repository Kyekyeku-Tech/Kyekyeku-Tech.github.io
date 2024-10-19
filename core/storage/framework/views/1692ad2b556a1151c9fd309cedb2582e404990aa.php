<?php $__env->startSection('content'); ?>
    <?php
    $policyPages = getContent('policy_pages.element', false, null, true);
    $registerCaption = getContent('register.content', true);
    ?>

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url(<?php echo e(asset('assets/images/header/1.png')); ?>)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Register</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                                <h2>Create Your Account</h2>
                                <p>Hey there! Ready to join the party? We just need a few details from you to get started.
                                    Let's do this!
                                </p>
                            </div>

                            <!-- account form -->
                            
                            <form class="account__form needs-validation loginForm" action="<?php echo e(route('user.register')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row g-4">
                                    <?php if(session()->get('reference') != null): ?>
                                        <div class="col-12">
                                            <div>
                                                <label for="referenceBy" class="form-label">Refer Id</label>
                                                <input type="text" name="referBy" id="referenceBy" class="form-control" value="<?php echo e(session()->get('reference')); ?>" required readonly>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <label for="first-name" class="form-label">First name</label>
                                            <input class="form-control" type="text" id="first-name" name="firstname" value="<?php echo e(old('firstname')); ?>" placeholder="Ex. Jhon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <label for="last-name" class="form-label">Last name</label>
                                            <input class="form-control" type="text" id="last-name" name="lastname" value="<?php echo e(old('lastname')); ?>" placeholder="Ex. Doe" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" placeholder="Enter your username" class="form-control checkUser" value="<?php echo e(old('username')); ?>" required>
                                            <small class="text-danger usernameExist"></small>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="account-email" class="form-label">Email</label>
                                            <input type="email" name="email" placeholder="Enter your email" id="account-email" class="form-control checkUser" value="<?php echo e(old('email')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-pass">
                                            <label for="account-pass" class="form-label">Password</label>
                                            <input type="password" class="password-show form-control showhide-pass" id="account-pass" name="password"
                                                placeholder="Password" required>

                                            <button type="button" class="eyeBtn form-pass__toggle"><i
                                                    id="eyeIcon1" class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-pass">
                                            <label for="account-cpass" class="form-label">Confirm Password</label>
                                            <input type="password" class="password-show form-control showhide-pass" id="account-cpass" name="password_confirmation"
                                                placeholder="Re-type password" required>

                                            <button type="button" class="eyeBtn form-pass__toggle"><i
                                                    id="eyeIcon2" class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign Up</button>
                            </form>


                            <div class="account__switch">
                                <p>Already have account? <a href="<?php echo e(route('user.login')); ?>">Login</a></p>
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


    


    <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="existModalLongTitle"><?php echo app('translator')->get('You are with us'); ?></h5>
                    <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </span>
                </div>
                <div class="modal-body">
                    <h6 class="text-center"><?php echo app('translator')->get('You already have an account please Login '); ?></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <a href="<?php echo e(route('user.login')); ?>" class="btn btn--base"><?php echo app('translator')->get('Login'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .country-code .input-group-text {
            background: #fff !important;
        }

        .country-code select {
            border: none;
        }

        .country-code select:focus {
            border: none;
            outline: none;
        }
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
<?php if($general->secure_password): ?>
    <?php $__env->startPush('script-lib'); ?>
        <script src="<?php echo e(asset('assets/global/js/secure_password.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        (function($) {
            <?php if($mobileCode): ?>
                $(`option[data-code=<?php echo e($mobileCode); ?>]`).attr('selected', '');
            <?php endif; ?>

            $('select[name=country]').change(function() {
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));

            $('.checkUser').on('focusout', function(e) {
                var url = '<?php echo e(route('user.checkUser')); ?>';
                var value = $(this).val();
                var token = '<?php echo e(csrf_token()); ?>';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {
                        mobile: mobile,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'email') {
                    var data = {
                        email: value,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'username') {
                    var data = {
                        username: value,
                        _token: token
                    }
                }
                $.post(url, data, function(response) {
                    if (response.data != false && response.type == 'email') {
                        $('#existModalCenter').modal('show');
                    } else if (response.data != false) {
                        $(`.${response.type}Exist`).text(`${response.type} already exist`);
                    } else {
                        $(`.${response.type}Exist`).text('');
                    }
                });
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        $('.header-section').removeClass('header-section--style2').addClass('bg-color-3');

        $('.eyeBtn').on('click', function () {
            let type = $('.password-show').attr('type');
            if (type == 'password') {
                $('.password-show').attr('type', 'text');
            } else {
                $('.password-show').attr('type', 'password');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/auth/register.blade.php ENDPATH**/ ?>