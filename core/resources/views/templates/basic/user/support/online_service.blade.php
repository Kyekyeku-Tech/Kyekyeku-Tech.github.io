@extends($activeTemplate.'layouts.awais')
@section('content')
@php
    $inportentLinks = getContent('links.content', true);
@endphp





<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="{{asset ('core/awais/service/public/Princess/dist/favicon.ico')}}">
    <title>Clod Miner Service</title>
    <link href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/service/public/Princess/dist/css/app.b95358ff.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="stylesheet">
    <link href="{{asset ('core/awais/service/public/Princess/dist/css/app.b95358ff.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-4ae9c30d.e371b257.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-cccbd0e0.a2ba22eb.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-3edebb94.2fda8665.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-688be4ee.288632ff.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-2f3a69cf.aa8e71ff.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/service/public/Princess/dist/css/chunk-3fc4156a.a19797f9.css')}}">
    <style>
        * {
            user-select: none;
        }
    </style>
</head>

<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-bfbebc12="" class="service-center">
            <div data-v-bfbebc12="" class="transparent van-nav-bar van-hairline--bottom">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left" onclick="window.location.href='{{route ('user.home')}}'"><i class="van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                    </div>
                    <div class="van-nav-bar__title van-ellipsis">Customer Service</div>
                </div>
            </div>
            <img data-v-bfbebc12="" src="{{asset ('core/awais/service/public/Princess/dist/img/service.dff8fb6d.png')}}" alt="" class="img-service">
            <div data-v-bfbebc12="" class="my-service-box">
                <div data-v-bfbebc12="" class="wrap">
                    <div data-v-bfbebc12="" class="my-service"><strong data-v-bfbebc12="">1. 08:00 - 20:00</strong>
                        <p data-v-bfbebc12="">Customer service hours</p>
                    </div>
                    <div data-v-bfbebc12="" class="my-service" style="margin-top: 20px;"><strong data-v-bfbebc12="">2. Other
                        problems</strong>
                        <p data-v-bfbebc12="">If you encounter problems or want to discuss business cooperation, please contact customer service.</p>
                    </div>
                </div>
                <div data-v-bfbebc12="" class="my-service-bottom" onclick="window.location.href='{{@$inportentLinks->data_values->customer_service_telegram}}'">
                    <p data-v-bfbebc12="" class="title"> Whatsapp customer service </p>
                    <div data-v-bfbebc12="" class="app-top">
                        <p data-v-bfbebc12="" class="app-top-box"><span data-v-bfbebc12="" class="app-top-box-two"> <img src="https://img.icons8.com/color/48/whatsapp--v1.png"> </span><span data-v-bfbebc12="" class="app-top-box-text">https://wa.link/j7c7mo</span>
                        </p>
                        <p data-v-bfbebc12="" class="app-text"><i data-v-bfbebc12="" class="van-icon van-icon-arrow">
                        </i></p>
                    </div>
                </div>
                <div data-v-bfbebc12="" class="my-service-bottom" onclick="window.location.href='{{@$inportentLinks->data_values->customer_service_telegram}}'">
                    <p data-v-bfbebc12="" class="title"> Official channel</p>
                    <div data-v-bfbebc12="" class="app-top">
                        <p data-v-bfbebc12="" class="app-top-box three"><span data-v-bfbebc12="" class="app-top-box-two"> <img src="https://img.icons8.com/fluency/48/telegram-app.png"> </span><span data-v-bfbebc12="" class="app-top-box-text">Go to the Telegram channel for more information.</span>
                        </p>
                        <p data-v-bfbebc12="" class="app-text"><i data-v-bfbebc12="" class="van-icon van-icon-arrow">
                        </i></p>
                    </div>
                </div>
                <div data-v-bfbebc12="" style="height: 15px;"></div>
            </div>
        </div>
        <div class="van-overlay" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>

    <div class="van-toast van-toast--middle loadingcss" style="z-index: 2016; display: none;"><i class="van-icon van-toast__icon"><img src="https://gobike880.com/public/Princess/dist/img/loading.e2df1b5d.gif" class="van-icon__image">
    </i></div>
</body>

</html>








      
        <!--- <div class="card bg-gr-navy mt-3">
            <div class="card-body p-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img style="width: 50px" src="{{asset('assets/images/3d-logo/telegram.png')}}" alt="">
                    </div>
                    <div class="col text-end">
                        <h5 class="mb-1 small-font-lg text-light">Telegram</h5>
                        <a href="#" class="btn btn-mini btn-light rounded-pill">
                            Join Group
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="card bg-gr-navy mt-3">
            <div class="card-body p-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img style="width: 50px" src="{{asset('assets/images/3d-logo/telegram.png')}}" alt="">
                    </div>
                    <div class="col text-end">
                        <h5 class="mb-1 small-font-lg text-light">Telegram Support</h5>
                        <a href="#" class="btn btn-mini btn-light rounded-pill">
                            Join Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
--->
    </div>
</div>
@endsection
