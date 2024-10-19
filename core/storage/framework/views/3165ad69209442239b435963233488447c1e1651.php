<?php $__env->startSection('content'); ?>
    <?php
        $policyPages = getContent('policy_pages.element', false, null, true);
        $registerCaption = getContent('register.content', true);
    ?>
    
    <style>

#rele div {
    padding-top: 2px;
    color: #340c99;
    height: 43px;
    line-height: 43px;
    margin: 0 5px;
    border: 1px solid #757575;
    border-radius: 5px;
    box-shadow: 0 0 5px rgb(0 0 0 / 46%);
}
#rele #rel1{background-color:#094ae0; cursor:pointer;}
#rele #rel2{background-color:#094ae0; cursor:pointer;}

#rele #rel1:hover{ background-color:#340c99; color:#340c99}
#rele #rel2:hover{ background-color:#340c99; color:#340c99}


#rele div2 {
	-webkit-transform: skewX(-30deg); /* ÐÐ»Ñ Safari Ð¸ Chrome */
    -moz-transform: skewX(-30deg); /* ÐÐ»Ñ Firefox */
    -o-transform: skewX(-30deg); /* ÐÐ»Ñ Opera */
    -ms-transform: skewX(-30deg); /* ÐÐ»Ñ IE */
    transform: skewX(-30deg); /* CSS3 */
}
	
#rele span2{
	display:block;
	-webkit-transform: skewX(30deg); /* ÐÐ»Ñ Safari Ð¸ Chrome */
    -moz-transform: skewX(30deg); /* ÐÐ»Ñ Firefox */
    -o-transform: skewX(30deg); /* ÐÐ»Ñ Opera */
    -ms-transform: skewX(30deg); /* ÐÐ»Ñ IE */
    transform: skewX(30deg); /* CSS3 */
}

#reles div {
    color: #FFFFFF;
    height: 43px;
    line-height: 43px;
    margin: 0 5px;
    border: 1px solid #757575;
    border-radius: 5px;
    box-shadow: 0 0 5px rgb(0 0 0 / 46%);
}
#reles #rels1{background-color:#808080; cursor:pointer;}
#reles #rels2{background-color:#735cfc; cursor:pointer;}

#reles #rels1:hover{ background-color:#FFFFFF; color:#333333}
#reles #rels2:hover{ background-color:#FFFFFF; color:#333333}


#reles div2 {
	-webkit-transform: skewX(-30deg); /* ÐÐ»Ñ Safari Ð¸ Chrome */
    -moz-transform: skewX(-30deg); /* ÐÐ»Ñ Firefox */
    -o-transform: skewX(-30deg); /* ÐÐ»Ñ Opera */
    -ms-transform: skewX(-30deg); /* ÐÐ»Ñ IE */
    transform: skewX(-30deg); /* CSS3 */
}
	
#reles span2{
	display:block;
	-webkit-transform: skewX(30deg); /* ÐÐ»Ñ Safari Ð¸ Chrome */
    -moz-transform: skewX(30deg); /* ÐÐ»Ñ Firefox */
    -o-transform: skewX(30deg); /* ÐÐ»Ñ Opera */
    -ms-transform: skewX(30deg); /* ÐÐ»Ñ IE */
    transform: skewX(30deg); /* CSS3 */
}


    </style>



    <div class="container">
        
       <div class="row">
        
            <div class="col-12 text-center mt-1">
                <img width="150px" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>"
                    alt="">
                    
                    
        </div>   
        </div>
          <table width="100%"  style="padding-top:35px;">
<tr align="center">
<td width="40%"> <a href="<?php echo e(route('user.register')); ?>" class="btn btn-lg bg-gr-orange btn-primary w-100 rounded-pill mt-2"style="line-height:35px;">Register</a></td>
<td width="40%"> <a href="<?php echo e(route('user.login')); ?>" class="btn btn-lg btn-dark w-100 rounded-pill mt-2" style="line-height:35px;">Login</a></td>
</tr>
</table>

                <h6 class="" style="padding-top:35px;">Mobile Phone Registration</h6>
            
        
        
       

        <form action="<?php echo e(route('user.register')); ?>" method="POST" class="mt-4 form-login">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <p class="icon"><i class="fa fa-phone fa-rotate-90"></i> +</p>
                <input type="number" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Please enter the phone number">
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
             <?php if(session()->get('inviteCode') != null): ?>
             
             <div class="mb-1">
                <p class="icon">
                    <i class="fas fa-share-alt"></i>
                </p>
                <input type="text" class="form-control" name="referBy" value="<?php echo e(session()->get('inviteCode')); ?>" required readonly placeholder="Please enter invitation code">
            </div>
            
                                        
                                    <?php endif; ?>
                                    
                
            <button type="submit" class="btn btn-lg bg-gr-orange btn-primary w-100 rounded-pill mt-4">Sign Up Now</button>
        </form>
       

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

<?php echo $__env->make($activeTemplate . 'layouts.mobile_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suntechp/ye.suntech.pw/h25/core/resources/views/templates/basic/user/auth/register.blade.php ENDPATH**/ ?>