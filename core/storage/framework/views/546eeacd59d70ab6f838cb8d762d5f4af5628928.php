<?php $__env->startSection('content'); ?>
    <style>
        body {
            overflow: hidden;
            background-image: url("<?php echo e(asset('assets/images/bg/mining-bg.jpg')); ?>");
            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #appCapsule {
            padding-top: 56px;
            padding-bottom: 150px;
            height: 100%;
            /* background: rgb(0, 168, 17); */
            background: rgba(255, 255, 255, 0);
        }
        .canvasjs-chart-credit{
            display: none;
        }
        .shadow-primary {
            box-shadow: 0px 0px 18px #00d094!important;
        }
    </style>



    <div id="appCapsule">
        <div class="container">
            <div class="card glass-bg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mb-0 text-light small-font">Current Balance</h6>
                            <h5 class="mb-0 text-primary small-font-lg userBalanceRound"><?php echo e(getAmount($user->balance)); ?> <?php echo e($general->cur_text); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--bottom-nav-->
    <nav class="navbar2 fixed-bottom2">
        <div class="container text-center mb-4">
            <button id="collectBtn" class="btn btn-primary rounded-circle shadow-primary border border-white border-3 collectProfit"
                style="width: 100px; height: 100px">
                <?php if(Carbon\Carbon::parse($user->collect_date) < Carbon\Carbon::today()): ?>
                Collect
                <?php else: ?>
                Collected
                <?php endif; ?>
            </button>
        </div>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        $(document).on('click', '.collectProfit', function(e) {
            e.preventDefault();
            $(this).removeClass('collectProfit');
            let timer = 1;
            $('#collectBtn').html(Spiner);
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('user.trading.profit')); ?>",
                success: function(res) {
                    if (res.cls == 'success') {
                        let myInterval = setInterval(() => {
                            $('#timer').html(timer);
                            timer = timer - 1;
                            console.log(timer);
                            if (timer === 0) {
                                $('#timer').html('Complete');
                                clearInterval(myInterval)
                                $.ajax({
                                    type: "post",
                                    url: "<?php echo e(route('user.collect.profit')); ?>",
                                    success: function(response) {
                                        // notifyMsgBig('Collected!', response.msg, response.cls);
                                        notify(response.cls, response.msg)
                                        userDataApi()
                                        $('#collectBtn').html('Collected');
                                        $('#collectBtn').addClass('collectProfit');
                                    }
                                });

                            }
                        }, 1000);
                    } else {
                        notifyGlass(res.cls, res.msg);
                        $('#collectBtn').html('Collected');
                        $('#collectBtn').addClass('collectProfit');
                    }
                }
            });
        });

        // $(document).on('click', '.collectProfit2', function(e) {
        //     e.preventDefault();
        //     $(this).removeClass('collectProfit');
        //     let timer = 5;
        //     $('.collectProfit').html(Spiner);
        // });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ethemest/DEMO/demo.viser.store/usdt-trading/core/resources/views/templates/basic/user/trading/index.blade.php ENDPATH**/ ?>