@extends($activeTemplate . 'layouts.awais')
@section('content')
   
   <html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="{{asset ('core/awais/plans/public/Princess/dist/favicon.ico')}}">
    <title>Cloud Miners~ Plans</title>
    <link href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/plans/public/Princess/dist/css/app.b95358ff.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="stylesheet">
    <link href="{{asset ('core/awais/plans/public/Princess/dist/css/app.b95358ff.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-4ae9c30d.e371b257.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/plans/public/Princess/dist/css/chunk-cccbd0e0.a2ba22eb.css')}}">
    <style>
        .about-us .hall-crad-box .team-assets .content .content-bom .left[data-v-68654d19] {
            background: linear-gradient(#00000045, #00000045), url({{asset ('core/awais/plans/public/2.jpeg')}}) no-repeat 50%/100% auto;
        }

        .about-us .hall-crad-box .team-assets .content .content-bom .right[data-v-68654d19] {
            background: linear-gradient(#00000045, #00000045), url({{asset ('core/awais/plans/public/9.jpg')}}) no-repeat 50%/100% auto;
        }

        .about-us .hall-bottom .hall-bottom-box .hall-bottom-card .hall-bottom-btn[data-v-68654d19] {
            width: unset;
            height: 6.933333vw;
            line-height: 6.933333vw;
            background: #0cd2ef;
            font-weight: 600;
            color: #fff;
            font-size: 4vw;
            padding: 0 7px;
            border-radius: 3px;
        }

        .about-us .index-page-title[data-v-68654d19] {
            padding: 6px;
            background: #0cd2ef;
            position: fixed;
            width: 100%;
            z-index: 9;
        }

        * {
            user-select: none;
        }
    </style>
</head>

<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-68654d19="" class="about-us">
            <div data-v-68654d19="" class="index-page-title">Invest Hall</div>
            <div style="height: 40px"></div>
            <div data-v-68654d19="" class="hall-crad-box">
                <div data-v-68654d19="" class="team-assets flex">
                    <div data-v-68654d19="" class="content">
                        <div data-v-68654d19="" class="content-bom flex">
                            <div data-v-68654d19="" class="item left"><span data-v-68654d19="">My cruise</span>
                                <p data-v-68654d19="">    </p>
                            </div>
                            <div data-v-68654d19="" class="item right"><span data-v-68654d19="">My income</span>
                                <p data-v-68654d19=""></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-68654d19="" class="hall-bottom">
@foreach ($plans as $plan)
                <div data-v-68654d19="" class="hall-bottom-box after">
                    <div data-v-68654d19="" class="hall-bottom-card">
                        <div data-v-68654d19="" class="flex flex-top">
                            <div data-v-68654d19="" class="hall-bottom-img van-image"><img src="{{asset('assets/images/plan/' . $plan->image)}}" class="van-image__img"></div>
                            <div data-v-68654d19="" class="product-right">
                                <p data-v-68654d19="" class="hall-bottom-div-one">{{ __($plan->name) }}</p>
                                <div data-v-68654d19="" class="flex">
                                    <div data-v-68654d19="" class="bom-product-item"><span data-v-68654d19="">Price:</span>
                                        <p data-v-68654d19="">{{ __($general->cur_text) }} {{ __(getAmount($plan->price)) }}</p>
                                    </div>
                                      <form action="{{ route('user.buy.plan.new') }}" method="post">
                    @csrf
                                    <input type="hidden" name="id" value="{{ __($plan->id) }}">
                                                    <input type="hidden" name="wallet_type" value="deposit_wallet">
                                                    <input type="hidden" name="amount"
                                                        value="{{ getAmount($plan->fixed_amount, 0) }}">
                                    
                                    <button data-v-68654d19="" class="hall-bottom-btn" > Lease</button>
</form>
                                </div>
                            </div>
                        </div>
                        <div data-v-68654d19="" class="flex">
                            <div data-v-68654d19="" class="product-item">
                                <p data-v-68654d19="">{{ $general->cur_text }} {{ $plan->daily_profit }} </p><span data-v-68654d19="">Daily income</span></div>
                            <div data-v-68654d19="" class="product-item">
                                <p data-v-68654d19="">{{ $general->cur_text }} {{ $plan->daily_profit * $plan->validity }}</p><span data-v-68654d19="">Total income</span></div>
                            <div data-v-68654d19="" class="product-item">
                                <p data-v-68654d19="">{{ $plan->validity }} days</p><span data-v-68654d19="">Cycle</span></div>
                        </div>
                    </div>
                </div>


 

@endforeach








            <div data-v-68654d19=""></div>
            <div data-v-68654d19="" style="height: 50px;"></div>


           


        <div class="van-overlay loaderCustom" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>
    <script src="https://gobike880.com/public/assets/toast.js"></script>
    <script>
    </script>
    <script>
        function popoPakcage(elementLayId, elementBoxId) {
            document.querySelector('#' + elementLayId).style.display = 'block';
            document.querySelector('#' + elementBoxId).style.display = 'block';
        }

        function popoPakcageClose(elementLayId, elementBoxId) {
            document.querySelector('#' + elementLayId).style.display = 'none';
            document.querySelector('#' + elementBoxId).style.display = 'none';
        }

        function buyPackage(elementLayId, elementBoxId, URL) {
            document.querySelector('#' + elementLayId).style.display = 'none';
            document.querySelector('#' + elementBoxId).style.display = 'none';
            document.querySelector('.loaderCustom').style.display = 'block';
            window.location.href = URL;
        }
    </script>
</body>

</html>
   
   
   
   
   
   
   
   
   
   
   
   
   
@endsection

