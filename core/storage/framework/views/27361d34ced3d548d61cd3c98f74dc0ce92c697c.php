<?php $__env->startSection('content'); ?>
    <?php
        $policyPages = getContent('policy_pages.element', false, null, true);
        $registerCaption = getContent('register.content', true);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <img width="90px" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>"
                    alt="">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-auto">
                <h6 class="mb-0 small-font-lg text-light border-bottom border-2">Mobile Phone Registration</h6>
            </div>
        </div>

        <form action="<?php echo e(route('user.register')); ?>" method="POST" class="mt-4 form-login">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <p class="icon">+880</p>
                <input type="number" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Please enter the phone address">
            </div>
            <div class="mb-3">
                <p class="icon">
                    <i class="fas fa-lock"></i>
                </p>
                <input type="password" class="form-control" name="password" placeholder="Please enter your password">
            </div>
            <div class="mb-3">
                <p class="icon">
                    <i class="fas fa-lock"></i>
                </p>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Please enter your password again">
            </div>
            <div class="mb-3">
                <p class="icon">
                    <i class="fas fa-share-alt"></i>
                </p>
                <input type="text" class="form-control" name="referBy" value="<?php echo e(session()->get('inviteCode')); ?>" placeholder="Please enter invitation code">
            </div>
            <button type="submit" class="btn btn-lg btn-primary w-100 rounded-pill mt-5">Sign Up Now</button>
        </form>
        <a href="<?php echo e(route('user.login')); ?>" class="btn btn-lg btn-dark w-100 rounded-pill mt-2">Login</a>

    </div>





    <!-- ===============>> account start here <<================= -->
    
    <!-- ===============>> account end here <<================= -->


    


    <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle"
        aria-hidden="true">
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

        $('.eyeBtn').on('click', function() {
            let type = $('.password-show').attr('type');
            if (type == 'password') {
                $('.password-show').attr('type', 'text');
            } else {
                $('.password-show').attr('type', 'password');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/miningJs/core/resources/views/templates/basic/user/auth/register.blade.php ENDPATH**/ ?>