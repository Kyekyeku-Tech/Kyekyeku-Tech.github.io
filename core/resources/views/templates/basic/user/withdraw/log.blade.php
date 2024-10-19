@extends($activeTemplate.'layouts.awais')
@section('content')

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Cloud Miner Bills</title>
    <link href="{{asset ('core/awais/deposit/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/deposit/public/Princess/dist/css/app.b95358ff.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/deposit/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="stylesheet">
    <link href="{{asset ('core/awais/deposit/public/Princess/dist/css/app.b95358ff.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/deposit/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/deposit/public/Princess/dist/css/chunk-7a7e003a.ae7e86d6.css')}}">
    <style>
        .recharge-record .wrap[data-v-0aef213b] {
            background: url({{asset ('core/awais/deposit/public/Princess/record.559e8c16.png')}}) no-repeat top/100% auto;
        }

        .qs-bg .qs-bg-img {
            background: url({{asset ('core/awais/deposit/public/Princess/33b676e4.png')}}) no-repeat top/100%;
        }

        * {
            user-select: none;
        }

        .tabMenuItem {
            position: relative;
        }

        .van-tab--active::after {
            position: absolute;
            content: "";
            width: 48px;
            height: 2px;
            background: #0fbaff;
            bottom: 0;
        }
    </style>
</head>
<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-0aef213b="" class="recharge-record">
            <div data-v-0aef213b="" class="van-nav-bar van-hairline--bottom">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left" onclick="window.location.href='{{route ('user.home')}}'"><i class="van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                    </div>
                    <div class="van-nav-bar__title van-ellipsis">My Withdraw</div>
                </div>
            </div>
            <div data-v-0aef213b="" class="wrap">
                <div data-v-0aef213b="" class="wrap-top">
                    <p data-v-0aef213b="">Total Recharge</p>
                    <p data-v-0aef213b="">{{ $general->cur_text }}  </p>
                </div>
                <div data-v-0aef213b="" class="wrap-bottom">
                    <p data-v-0aef213b="" onclick="window.location.href='{{route ('user.deposit.index')}}'"> Recharge<i data-v-0aef213b="" class="van-icon van-icon-arrow"></i></p>
                    <span data-v-0aef213b=""></span>
                    <p data-v-0aef213b="" onclick="window.location.href='{{route ('user.withdraw')}}"> Withdraw<i data-v-0aef213b="" class="van-icon van-icon-arrow"></i></p>
                </div>
            </div>
            <div data-v-0aef213b="" class="van-tabs van-tabs--line">
                <div class="van-tabs__wrap">
                    <div role="tablist" class="van-tabs__nav van-tabs__nav--line">
                      
                        <div role="tab" class="van-tab tabMenuItem" onclick="window.location.href='{{route ('user.deposit.history')}}'"><span class="van-tab__text van-tab__text--ellipsis">Recharge</span></div>
                        <div role="tab" class="van-tab tabMenuItem" onclick="window.location.href='{{route ('user.withdraw.history')}}'"><span class="van-tab__text van-tab__text--ellipsis">Withdraw</span></div>
                        <div role="tab" class="van-tab tabMenuItem" onclick="window.location.href='{{route ('plans')}}'"><span class="van-tab__text van-tab__text--ellipsis">Invest</span></div>
                    </div>
                </div>

                <style>
                    .history_box ul li {
                        display: flex;
                        justify-content: space-between;
                        margin: 0 25px;
                        align-items: center;
                        padding-bottom: 13px;
                    }

                    .history_box ul li h3 {
                        margin-bottom: 3px;
                        text-align: left;
                    }
                </style>


         

                <div class="history_container">
                    <div class="history_box withdraw" style="display: none;">
                        <ul>
                        </ul>
                    </div>
                </div>

                <div class="history_container">
                    <div class="history_box deposit" style="display: block;">
                        <ul>
                            
                            
                               
                            
                            
                                 @forelse($withdraws as $withdraw)
                       
                            <li>
                                <div>
                                    <h3>withdraw</h3>
                                    <p> {{ showDateTime($withdraw->created_at) }}                                          </td>
                                       </td>
</p>
                                </div>
                                <div>
                                    <h3>      {{ getAmount($withdraw->amount ) }} {{ __($general->cur_text) }}</h3>
                                    <p>
                                                    @php echo $withdraw->statusBadge @endphp
                                    </p>
                                </div>
                            </li>
   
   
   
       @empty
                                        <div data-v-0aef213b="" class="qs-bg-img"></div>
                                <span data-v-0aef213b="">No more record yet!</span></div>
                            <div class="van-list__placeholder"></div>
                                    @endforelse
   
   
                        </ul>
                    </div>
                </div>

                <div class="history_container">
                    <div class="history_box reward" style="display: none;">
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="van-tabs__content">
                <div data-v-0aef213b="" role="tabpanel" class="van-tab__pane" style="">
                    <div data-v-0aef213b="" class="order-box">
                        <div data-v-0aef213b="" role="feed" class="van-list">
                            <div data-v-0aef213b="" class="qs-bg">
                                <div data-v-0aef213b="" class="qs-bg-img"></div>
                                <span data-v-0aef213b="">No more record yet!</span></div>
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                </div>
                <div data-v-0aef213b="" role="tabpanel" class="van-tab__pane" style="display: none;"></div>
                <div data-v-0aef213b="" role="tabpanel" class="van-tab__pane" style="display: none;"></div>
                <div data-v-0aef213b="" role="tabpanel" class="van-tab__pane" style="display: none;"></div>
            </div>
        </div>
        <div class="van-overlay" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>

    <script>
        function tabMenu(_this, menuType) {
            var elements = document.querySelectorAll('.tabMenuItem');
            for (let i = 0; i < elements.length; i++) {
                if (elements[i].classList.contains('van-tab--active')) {
                    elements[i].classList.remove('van-tab--active');
                }
            }
            _this.classList.add('van-tab--active');

            var all = document.querySelector('.all');
            var withdraw = document.querySelector('.withdraw');
            var deposit = document.querySelector('.deposit');
            var reward = document.querySelector('.reward');

            if (menuType == 'all') {
                all.style.display = 'block';
                withdraw.style.display = 'none';
                deposit.style.display = 'none';
                reward.style.display = 'none';
            }

            if (menuType == 'withdraw') {
                all.style.display = 'none';
                withdraw.style.display = 'block';
                deposit.style.display = 'none';
                reward.style.display = 'none';
            }

            if (menuType == 'recharge') {
                all.style.display = 'none';
                withdraw.style.display = 'none';
                deposit.style.display = 'block';
                reward.style.display = 'none';
            }

            if (menuType == 'reword') {
                all.style.display = 'none';
                withdraw.style.display = 'none';
                deposit.style.display = 'none';
                reward.style.display = 'block';
            }

        }
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        window.onload = function() {
            $.ajax({
                url: "https://gobike880.com/onepay-payment-checker",
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                }
            });
        };
    </script>
</body>





     


@endsection


  