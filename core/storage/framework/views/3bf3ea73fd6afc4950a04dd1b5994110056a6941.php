<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        #appCapsule {
            padding-top: 48px;
            padding-bottom: 150px;
        }

        .site-logo {
            height: 30px;
        }

        .bg-dark {
            background-color: #00160f !important;
        }

        .btn-primary{
            color:#fff!important ;
            background-color: #0A9981;
            border-color: #0A9981;
        }
        .btn-primary:hover, .btn-primary:active, .btn-primary:focus {
            color:#fff!important ;
            background-color: #0A9981;
            border-color: #0A9981;
        }

        body {
            background-color: #001e14 !important;
            overflow: hidden;
        }

        div:where(.swal2-container) div:where(.swal2-popup) {
            border: 1px solid #0A9981 !important;
            background: #001e14 !important;
            color: #f2f2f2 !important;
        }
        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
            background-color: #0A9981 !important;
            box-shadow: 0 0 0 0px rgba(0,0,0,0) !important;
            width: 120px !important;
        }

        .nav-icon i {
            color: #fff;
            font-size: 26px;
            padding-left: 2px;
            padding-right: 2px;
            padding-top: 5px;
            padding-bottom: 5px;
            transition: 0.3s;
        }

        .active i,
        .nav-icon i:hover,
        .nav-icon i:focus,
        .nav-icon i:active {
            color: #00D094;
            margin-top: -10px;
            font-size: 32px;
        }

        html,
        body {
            height: 100% !important;
        }

        #appCapsule {
            height: 100%;
        }
        .navbar2 {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding-top: .5rem;
            padding-bottom: .5rem;
        }
        .fixed-bottom2 {
            position: fixed;
            right: 0;
            bottom: 52px;
            left: 0;
            z-index: 1030;
        }

        .bottom-nav {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding-top: .5rem;
            padding-bottom: .5rem;
        }
        .navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl {
            display: initial;
            justify-content: space-evenly;
            align-items: center;
            align-content: center;
        }
    </style>
</head>

<body>
    <!--top-nav-->
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                        <img class="site-logo" src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="logo">
                    </a>
                </div>
                <div class="col-auto">
                    <div class="btn btn-sm btn-primary">
                        Balance:
                        <span class="badge bg-light text-dark userBalance">
                            <?php echo e($general->cur_sym); ?><?php echo e(showAmount($user->balance)); ?>

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="appCapsule">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="height: 100%">
            <div id="tradingview_1d6c8" style="height: 100%"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget({
                    "autosize": true,
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "1",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "1",
                    "locale": "en",
                    "enable_publishing": false,
                    "backgroundColor": "#001e14",
                    "hide_top_toolbar": true,
                    "hide_legend": true,
                    "save_image": false,
                    "container_id": "tradingview_1d6c8"
                });
            </script>
        </div>
        <!-- TradingView Widget END -->
        
    </div>

    <!--bottom-nav-->
    <nav class="navbar2 fixed-bottom2">
        <div class="container">
            <div class="row mt-3">
                <div class="col-6">
                    <div class="border border-secondary border-1 rounded text-center text-white w-100">
                        <span id="timer">24h</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border border-secondary border-1 rounded text-center text-white w-100">
                        <?php echo e($user->plan_id ? @$user->plan->name : 'No Plan'); ?>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <a href="#" class="btn btn-danger btn-sm w-100">Trade</a>
                </div>
                <div class="col-6">
                    <?php if(\Carbon\Carbon::parse($user->collect_date) >= \Carbon\Carbon::today()): ?>
                        <a href="#" id="collectBtn" class="btn btn-success btn-sm w-100 collectProfit">Profit</a>
                    <?php else: ?>
                        <a href="#" id="collectBtn" class="btn btn-success btn-sm w-100 collectProfit">Collect - <?php echo e($general->cur_sym); ?><?php echo e($user->plan->daily_profit); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="row mx-auto" style="justify-content: space-evenly">
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('user.deposit.index')); ?>">
                        <i class="fas fa-credit-card"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon middle active">
                    <a href="<?php echo e(route('user.trading')); ?>">
                        <i class="fas fa-chart-bar"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('user.withdraw')); ?>">
                        <i class="fas fa-wallet"></i>
                    </a>
                </div>
                <div class="col-auto px-2 nav-icon">
                    <a href="<?php echo e(route('user.home')); ?>">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>





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
        const userDataApi = () => {
            $.ajax({
                type: "get",
                url: "<?php echo e(route('user.data.api')); ?>",
                success: function (res) {
                    $('.userBalance').html('<?php echo e($general->cur_sym); ?>'+(parseFloat(res.user.balance).toFixed(2)))
                }
            });
        }
        userDataApi()

        $(document).on('click', '.collectProfit', function(e) {
            e.preventDefault();
            $(this).removeClass('collectProfit');
            let timer = 5;
            $('#collectBtn').html(Spiner);
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('user.trading.profit')); ?>",
                success: function (res) {
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
                                        success: function (response) {
                                            notifyMsgBig('Collected!', response.msg, response.cls);
                                            userDataApi()
                                            $('#collectBtn').html('Profit');
                                            $('#collectBtn').addClass('collectProfit');
                                        }
                                    });

                                }
                            }, 1000);
                    } else {
                        notifyMsg(res.msg, res.cls);
                        $('#collectBtn').html('Profit');
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

</body>

</html>
<?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/user/trading/index.blade.php ENDPATH**/ ?>