<?php $__env->startSection('content'); ?>
    <?php
        $loginCaption = getContent('login.content', true);
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
#rele #rel1{background-color:#041E42; cursor:pointer;}
#rele #rel2{background-color:#094ae0; cursor:pointer;}

#rele #rel1:hover{ background-color:#041E42; color:#340c99}
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
#reles #rels1{background-color:#041E42; cursor:pointer;}
#reles #rels2{background-color:#041E42; cursor:pointer;}

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

    <div class="container" style="background-color: #041E42">
         
        <div class="row" style="background-color: #041E42">
            
         

            <div class="col-12 text-center mt-1">
                <img width="150px" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="">
            </div>
        </div>
        
        <table width="100%"  style="padding-top:35px;">
<tr align="center">
    <td width="40%"> <a href="<?php echo e(route('user.register')); ?>" class="btn btn-lg btn-dark w-100 rounded-pill mt-3" style="line-height:35px;">Register</a></td>
<td width="40%"> <a href="<?php echo e(route('user.login')); ?>" class="btn btn-lg bg-gr-orange btn-primary w-100 rounded-pill mt-3"style="line-height:35px;">Login</a></td>

</tr>
</table>

        
                <h6 class="" style="padding-top:55px;">Mobile Login</h6>

        <form action="<?php echo e(route('user.login')); ?>" method="POST" class="mt-4 form-login">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <p class="icon"><i class="fa fa-phone fa-rotate-90"></i> +</p>
                <input type="number" class="form-control" name="username" placeholder="Please enter the phone number">
            </div>
            <div class="mb-3">
                <p class="icon">
                    <i class="fas fa-lock"></i>
                </p>
                <input type="password" class="form-control" name="password" placeholder="Please enter user password">
            </div>
            
            <div class="row mt-2">
            <div class="col-6 text-start">
                <a class="text-light" href=""></a>
            </div>
            <div class="col-6 text-end">
                <a class="text-light" href="https://t.me/">Forget Password?</a>
            </div>
        </div>
    </div>
    
            <center style="background-color: #041E42"><button type="submit" class="btn btn-lg bg-gr-orange btn-primary w-50 rounded-pill mt-4">Login</button></center>
        </form>
        
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
    background-color: #041E42
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

<?php echo $__env->make($activeTemplate . 'layouts.mobile_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/core/resources/views/templates/basic/user/auth/login.blade.php ENDPATH**/ ?>