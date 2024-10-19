<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldPushContent('style'); ?>
</head>



<body>

    <!--top-nav-->
    


    <?php echo $__env->yieldContent('content'); ?>

   <div data-v-4ef1c8c9="" data-v-c6b9c18c="" class="bottom">
                <div data-v-4ef1c8c9="" class="item   active " onclick="window.location.href='<?php echo e(route ('user.home')); ?>'">
                    <img data-v-4ef1c8c9="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABKZJREFUaEPVWE1oXFUU/r43ScykZiRJJbY1muBGKBjBRagkUazWIkopihSqCKIFjdAYocZW7USthoJawbrQrYILQdSNKTYLLZUuBFMouJH8z+RvZupLk8nfe0feTN7kTWZe3k8mk8ndJXO+e77vnHPPufcRBV4X5+cbSD5JYbOA9YCAwKRQBkSkr6OqarSQLlmozb5MJttFR7dBHiKKzb46wT5RpPeNYPD3QvjetIALs8l2JcCzIvKYF0Ik+3VNejqrNyfEt4DPksk2aggD3ojnimS/BBDuCgb/8BIA09azgPNqsk2hhAmkIi7mDgKj1tPLaVdZo2rB9+vC8KmQNyFOrjKezqtqG5SysxA56CdSrjHk5RV9ped0KOQqI44CetVkKyhGqawRt0TQMdr5mLvC8zKE4e5Q8MpG4m0FfKQmWxXqxuF83HX01lWPlafbPayEDDzJ33RRet61EZIj4ExsvqGyXC4QOCqSqdDsui4EM7eK0iIMJj8uLLHzXF32HMkSEJ6dbVd0/iCQOz3sX0RTTosiz4WrqzMzJCPgTEx9OBDAJYC7isjIhyuZ0zQcOlcXupppeG+p6u4qjQNC2ZunTxvN0vJvS9905d6wLyyegsh8QJo/DYVmUmzeiatfg3jVsSXlIeyqoWwg1C9eBN98Uhs6wa5YrKE8UPEvRMot42WdS6/S1p/yLcCTy8va0n08FVffFkivq2ooMSOC3eyK/9cHyCHzDrC+Dztzzi6CIuMvsTOWiADc40y0FC0kypOxm4sCVJhx9Fqtpqxtwi+xYyaRGrd+hqtJfjvxfG06sTF3u5S4VbzFeJ6Yjmeo+Ckfv318fem5eUbkO4V8ZWpNQMpgO+vBh3++PBVzWwyl2IbAlyazBXjv49m6io3ni5MzOzsDxyd2uIBjE9PW7wmWerBLTL5Tnq9/FQfP56OGgJ27+Gx0ajUDAmbuA3aPkNzunYak7bcDz6MRQ8DOXTziR4BYNNPH/C4gnk+PT2ZlwKmPt1RWoOOOatQEAgVNW0LT8NXNWVxbXMrs66Y0+NSYVcAqxIiqzavw2/q6gpM3GRsiXpiYMT4E2fpP2VoL4PDYROpPt/f57+7ajdoCR98UENc0HDcEeFh8YjQtILMcvpocqKzAyZpQwUUY5L9IqPjTLCE39WP0v4OjUZemHsJSRFM+OrImwEc/yfvJygv/zb4n+MhIZEGA27w4LRVbgotsHYkMQ3BPqZDyxIMY4YHh6M+A/owJdJoDTg6Ki1d+YcvQ+OsALjoRK9HfO7j/xmhtcJcyTMjtaZJeH8X5Ln5eGps/PMFbc3P6vamMPzQU+UBEf69Eo5yXFql8+Ffj3vdTAhoHpbIG49cE8kDuRLOTtRpl2z7o1JT94wlcT2Bfy1ATFzJeHhyMNupYuQLBPi+Z2Gwf94wnxhWUtf7dtGfILPgM3/sHo41lov0kYs2EwzXD62vS2M6Jtc0RInl9hYEj/6ySzxFgllNQxk9DlzdB82B7yckW2ApuQVE+T3L546GmpgWrB9tCvfvGaG1VpRwjcBhgMyD1Is4TO2cOeGxqKTyxSHBSIAMC/Dq/wO/H9jfE84Xmf51tzcyT0dIXAAAAAElFTkSuQmCC"
                        alt="">
                    <p data-v-4ef1c8c9="">Home</p>
                </div>
                <div data-v-4ef1c8c9="" class="item " onclick="window.location.href='<?php echo e(route('user.runing.plans')); ?>'">
                    <img data-v-4ef1c8c9="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAz9JREFUaEPtWj2IE1EQ/mbvIDbKVUYLERWPaxQstFGQ86eT8xoLQYuAkMwKSgoLEWVRxMIiKLgvASGFgoXNedj5cwjaaCFocygqYuHF6vAaA96OrNyGTUjy3u69u5y4qUJ25pvvm3lvFmZCSPhRSh0DUAawF8D6hO69zBcAvAFQYebHSTApibFS6joRXRSRRH6mMYhIROQGM18y9jE1DDNPRNMrRT7isSRiwrQSxplUSj0DcMhU8DLtnjPzYROMJAJ+dpz5A8z8yiSIzkYptR/Ay5jdAjNv0PmFz3sKmJmZGZ6dnT1ORJNBEOwjotE4IDMbizchopSSuJ2IfHAc57WITI2NjT0aHx//3Q2nKwnf908AuElEW3sFX2kBHWK+Arjguu7DTj5tAjzPG87n8wrAGV3WVlNAjMvdRqPBnue1qtEmwPf9e0R0Skc+fD4gARCR+67rnm51rehLtVp1ReROB/mmiNQdx3kgIi9W8w4Q0cEgCE4SUQFALh6biM6WSiW/dYkrlcpILpf7QkQjMcPPjuNMFovF9+FvnZdspSsQ4ddqtV1BEEwB2B5xE5H5ZrO5rVwuz/89QkqpcwBuxduY4zh7isXip+i3QQkI49dqtR1BELztaOPnmfl2JOAJgCMxAVeY+Vq8bIMUsJTkywCuxjg9ZeajkYAGgI2ti0E0WiqVPq4lAdVqdWf4bohx+sHM+UhA2JaGooeNRmPI87xgLQnwPM/J5/OLMU6LzDwcCWh7C3a7oIM+Qr0aiVaA7/sTRFQDsMnk/WDRZk5Eiq7rTvdrJFoBSqnvAyAfcZ5j5s3/t4B//ghZPNPLhurWSLR3YNlRLQJkAiwmMxVUVoFUabPolFXAYjJTQWUVSJU2i05ZBSwmMxVUVoFUabPolFXAYjJTQWUVSJU2i079KqCdC1nkkQpKNxfSTuZSRbXopJvMaWejFrmkglJK9Z2NaqfTqaJactJOp032A5a4JIYx2g+EqLoNTS6Xe1coFOYTM0jhUK/XR5rN5m7jDU0UI8mOLAUvKy49d2QhepItpRU2yUH6byljldDuiZPHTu8hImZ74niIzk09gC1EtK7fdj89xTbP8B8rvwB8M9nU/wEl2WBPAaVnWAAAAABJRU5ErkJggg=="
                        alt="">
                    <p data-v-4ef1c8c9="">Income</p>
                </div>
                <div data-v-4ef1c8c9="" class="item invest " onclick="window.location.href='<?php echo e(route('plans')); ?>'"><img data-v-4ef1c8c9="" style="border-radius:50px;" src="https://gobike880.com/public/b.jpg" alt="">
                    <p data-v-4ef1c8c9="">Invest</p>
                </div>
                <div data-v-4ef1c8c9="" class="item " onclick="window.location.href='<?php echo e(route('user.teams')); ?>'">
                    <img data-v-4ef1c8c9="" src="data:image/png;base64,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"
                        alt="">
                    <p data-v-4ef1c8c9="">Team</p>
                </div>
                <div data-v-4ef1c8c9="" class="item " onclick="window.location.href='<?php echo e(route('user.profile.setting')); ?>'">
                    <img data-v-4ef1c8c9="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABkRJREFUaEPVWl1sFFUUPmd2t0zVFgK1q+KDSgJqEGI0/iD4R4wSRIx/iQIPEGr33taGVgwPRh01PhCxJbWdu6UEHhBN/IsIBohBVCqokRiRiJAUfRBka1Fp1S7d2TnmrjObyzjb3dnuRvc+ztxz7vede+6555wZhAofWAr8HR0dkyKRyG2aps1FxCuJaDoiRgHgfEf/n0SUQMRjRPS9bdt9qVTqk9bW1t/Hu37RBDo7OyeEQqGHNE1bBgDzASAcEIwFAHts296STqffbmlpORtQPjM9MIHNmzfryWSSEdFqRLykmEW9MkR0EhHX6bouli9fngyiMxAB0zQXIOKrADAtyCIB5vYT0ROc852FyhREwDAMPRqNtgNAzG/XEJGI6FvpEpqmHUin00dt2z4xODg4LIHU1dXVaJo2NRQKzbBt+2bpcoh4DRH5rU8AEE8kEm2GYeTdjbwEent7o5ZlfQAA1/lYRQLckEqlNrW0tHxXqNXkvM7OzqsjkcgKAHgcAGp8ZA+Gw+GFDQ0NibH0jkmgt7f3csuyPvS6DBFZmqZ1hcPhF1euXPlrEODeuRs3bpxsWdYztm03I6I3EPSHw+G7Ghoafsi1Rk4CjuU/8/H3owDwKGPs6/EA98oKIa4FgDcAYIbnnSRxS66d8CXg+Hyf122IaDsRPdbU1PRHKcG7urq7uy9AxNcRcZFH/8FEIjHX70z4EhBCmADAPEq2JBKJFYZhyPhdtmEYRjgajW4CAHm/qEMwxrh34X8RcEKlPLTZd9LyAwMDD5QbvAtOkqivr3/XsxMy0i30hthzCDiX1GGP38uQeH253CbXVkp30jTtK8+Z6Nd1faZ62Z1DQAjRCgAy3meGjDaIeEOpD2yh/icPNhF96YlObYyxDldHloDMbcLh8HE1PUDE9bFYTJL6z0Y8Hu8golWKUU9alnWFmztlCXR3dy/RNO01BelwJBK5bLxxfrzM5T2RSqV+VC8727aXNjU1bZW6swSEELsA4G5lwVcYY6vHC6AU8kKIdQDwpKJrN2PsniwBmc/ruv6LmxLL3GZ0dHRm0PSgFGD9dMi0o6qq6rCSO1nJZPJCWU9kdqCrq2txKBR6TxE+xBibXS5AxegVQnwDALNc2XQ6fX9zc/O2DAHTNF9GRNVdOhhjbcUsVC4ZIYSMjtmAQkTrOOdPZQgIIbYDwL3u4pqmPdLY2PhWucAUo7enp+dh27bfVGR3MMYWuTtwFBGnK6FqNuf8UDELlUvGNM1ZiCjdKDOI6BjnfIZL4Awi1ir+Vdfc3HzaC8Y0zfsQscdR0Mg5f78UgAvR29XVNSUUCg0qBIY45xNdF0qpRXkikZhgGMaoF5wQ4mcAuMh5fooxdnEpCBSi1zCMqmg0qhb+FmMsEpSALPEmuKBzEQ1CygfYWcaY7tWRj4Dsz0zM50JCiBMAkO1EENE0zvnxIIB93PIKROxXnp9kjE31zvO6EACcYYxNCnSITdP8CBHvcJUj4rJYLKamH4G5xOPxpUS0RfHtvZzzO32I5j7EhYZR0zSfR8RnFQK7YrHYgsCoFYF4PL6TiDJpgRMcXuCcP+fVmS+MFnSReUPZP9GM5nDOPy+GhGmaNyHifk/x5BvCx7zIgqQSpmnuQ8S5CuAjQ0NDN65ZsybTAyp0rF27tqa2tvYLALhKsX4f53yen44xU4kgyVw8Hr+ViD72WG3v8PDw4kJJSPA1NTXb1PMkdxMRb4/FYp96CeRN5qRAkHTaNM0eRJQNKXUcIaIV+dzJcRtZtGct7/j+Bs55Yw7rj51OS6EgBU17e3t1dXX1HgCQbUJ1SCvuBoCttm3vHxgY+Em+rK+vv1TTtDkAsISIZM3hbSYcGBkZmd/W1jbiJVBwQRO0pGxvb59cXV29w4dEocfAnXfA6Tb85idYcEnpuFGgol7uhK7r6xGxoYhWvYxgvclkcpWf5R08hRf1UqDYtoo82LZtv+SJTjl3goj6NE172u/AukJFtVWk8HgaW/KeAIAHAWAeIsoe5xQH0Gkikj3VfQDwTr5UvejGlsu+oluLkkTFN3cliYpur7uuVNEfOBQSlfuJySVR0R/51GBesZ9ZVRIV/aFbJVKxvxr45Qd+P3vI9gsinuekyn8BwKn/1c8eQVPOcs3/G6wm/15vfkcEAAAAAElFTkSuQmCC"
                        alt="">
                    <p data-v-4ef1c8c9="">Mine</p>
                </div>
            </div>
        </div>

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
<?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/layouts/mobile.blade.php ENDPATH**/ ?>