@extends($activeTemplate.'layouts.awais')
@section('content')



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="{{asset ('core/awais/profile/public/Princess/dist/favicon.ico')}}">
    <title>Cloud Miners~Mine</title>
    <link href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')}}" rel="prefetch">
    <link href="{{asset ('core/awais/profile/public/Princess/dist/css/app.b95358ff.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="stylesheet">
    <link href="{{asset ('core/awais/profile/public/Princess/dist/css/app.b95358ff.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-a17cb2fa.966c6e7b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-d0b03eac.88dbcc9b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-4ae9c30d.e371b257.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-cccbd0e0.a2ba22eb.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-3edebb94.2fda8665.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/profile/public/Princess/dist/css/chunk-688be4ee.288632ff.css')}}">
    <style>
        .tc-user .account-detail-wrap .assets-left[data-v-bbc645c6],
        .tc-user .account-detail-wrap .assets-right[data-v-bbc645c6] {
            background: url({{asset ('core/awais/profile/public/Princess/bg-left.3087db89.png')}}) no-repeat top/100% auto;
        }

        .tc-user .user-header[data-v-bbc645c6] {
            background: url({{asset ('core/awais/profile/public/Princess/mine.1b459986.png')}}) no-repeat 50%/100% auto;
        }

        .tc-user .account-detail-wrap .assets-right[data-v-bbc645c6] {
            background: url({{asset ('core/awais/profile/public/Princess/bg-right.ef759ec9.png')}}) no-repeat top/100% auto;
        }

        * {
            user-select: none;
        }
    </style>
</head>

<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-bbc645c6="" class="tc-user">
            <div data-v-bbc645c6="" class="user-header flex">
                <div data-v-bbc645c6="" class="flex" style="margin-top: -60px;"><img data-v-bbc645c6="" src="{{asset ('core/awais/profile/public/b.jpg')}}" alt="" class="avatar">
                    <div data-v-bbc645c6="" class="detail">
                        <div data-v-bbc645c6="" class="name-wrap flex">
                            <p data-v-bbc645c6=""> {{ $user->username }} </p>
                            <p data-v-bbc645c6=""> ID:22373417145 <img data-v-bbc645c6="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAGKADAAQAAAABAAAAGAAAAADiNXWtAAABqElEQVRIDe2VzysEYRjHZ9aPcEE5SDlwcFF7cKSUEycXB/+BclP+icUmN1cpSdwXOVBKKXGQJBdKJGlLIrTj8+h9pp1p3tnZ3Tl66jvv8/P7vPPMOzOOYxHP81rBErgF1UiR5ALIWqgdh2AGHIJ65JPirBvVhcAU/h0Tu2QtgJKxKy19JEh9A9iLTKZBzmxddtEVmRTjpGbb1Bczlrxd/M9gxXXdF0tOnPvOBNv9EdFxEOco6I6rLIv9oF+BfTbxVuaXZ5jHnvd9OJZBCdQi9xQN+2Qo2HklEmNGjTrWB2o7tAm630CewawJyKxHQEtCdJK3AER6wOSfFr7Q7cvsfDUcq2RTJy+jjnZR8/EF7qDJBN41IenKw/0gV9+P5qg62zGNyq3J99/ANjb5Dol4qY+IEzQAsR7Zm1QbQL4O+TXoByIbqTaAcALo920LPdfIJU0Zh0w+mKe8IydCnGoDSM/hFPgiI3oy1pDvTagwc/nv6olRnkC13MERmAZjFBywnoEk0kaS/BpVjlUJrJD2gldQj6wFSMMGzNJkEzxW0eWb3AswB6yn8Rc6tS2mmVSyAAAAAABJRU5ErkJggg=="
                                    onclick="copyLink('22373417145')" alt="" class="my-copy-btn"></p>
                        </div>
                    </div>
                    <div data-v-bbc645c6="" style="margin-left: 10px;" onclick="window.location.href='#'"><img data-v-bbc645c6="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAMKADAAQAAAABAAAAMAAAAADbN2wMAAADBElEQVRoBe2av2sUQRTHb0VIwNgICbE6bEQ7BXsbBdEihUoqIVgK+TfyBwSbaGFhqe0Ff6QWAkJs0ohg0tjZJZBCPD/vmJE3s7N7O3Nz3i7ewLudefPed77fmdm5Y/eKnirD4fARzTvYTWxJdbWhegKJA2yvKIq3DiGIL2MDrCtFuC6LiEI+aAy43Jd6h8ouK/GggLxsmzce8WPap55v1s0LEOh7JB7L7O9guqx7Qa1pQnJdE6W+IwL2lfOoNWwriMD1SPHdP0ecPm3atm1CMjTHJRHQ6dJ5AedTp599eJHc0TGciqHyfnMkyhdVdIkWAPErjPIOuxo9Wk0CuF/pvoeQ7zVhpa6ULfQMlKzkDSvBFOyokiLgW9QIccHR2NFbCD4vDadbXHPdA0OwPitsM0SDC3vvELPlsEHKTEMg6vBN2UIzFeAPPhfgz4hts9Sr2Atjq9af+5pyEzfl8JzAhyb4Elf52Z69THMLXVdsr6l61uo0BWiiuY5bjTmq/ysBpYFzOeYCcs1kKs58BVJnLlfe/7cCfLOuYHvYMfZ00pkUDIMlmCvReCQ5v+7GARC/hemyGcohYCwuMZsaiPpWCEv7fNyULfRTA1LfFiKeb2zT5Gx7gT621x1o+ooCIY6L+AXsPeYXRwSdlStAnz/zgiWYC85ggQYxLm7JEUjyXeQsYrUiqnDxV5Ff9McJtUu4JUcoK+Ajr1ZECBffROSFRgm35AiQrXKRWynCx6U9MfnsAgxglYgfkLZF161PtmCjbaMnkBznHkg5hTRejwdRZzjWsA9OR693WbV1XdwSu2ZyVVh8dWIBMmSNiBCjbOQFPIsAAWooIiv5rAIaiMhOPrsAT8QnaZsi9Sx73gLa61SeSsh24rS4zSBPzECv8f2yg+a8TkWAEDSEX+UkG8KSm1i/WJBXmW0vmuOJCPiiGPdZ+la/ZoVrX/E96PyL7tEDJ2Z9gKpO/tXAfpFtIGBXLU3bq8J1Q0g6j/xYCXkAexe7gekX4DRnXuSwkfv1Iyfc37/b/AGVy+7hvqSs8QAAAABJRU5ErkJggg=="
                            alt="" class="dowload">
                        <p data-v-bbc645c6="" style="font-weight: 500; color: rgb(255, 255, 255); width: 160px;">Download app
                        </p>
                    </div>
                </div>
            </div>
            @php
  $authUser = Auth::user();
  $userCount = App\Models\User::where('ref_by', $authUser->id)->count();
    $referralCommission = App\Models\Transaction::where('user_id', $authUser->id)
                                    ->where('remark', 'referral_commission')
                                    ->sum('amount');
@endphp
            <div data-v-bbc645c6="" class="top-nav-wrap flex">
                <div data-v-bbc645c6="" class="top-nav-item">
                    <p data-v-bbc645c6="" class="price">     {{ $general->cur_sym }}{{ getAmount($user->balance) }} </p>
                    <p data-v-bbc645c6="" class="label">Account balance</p>
                </div>
                <div data-v-bbc645c6="" class="top-nav-item">
                 <p data-v-bbc645c6="" class="price">     {{ $general->cur_sym }}{{ getAmount($user->balance) }} </p>
                    <p data-v-bbc645c6="" class="label">Total Recharge</p>
                </div>
                <div data-v-bbc645c6="" class="top-nav-item">
                    <p data-v-bbc645c6="" class="price">
                       {{ $userCount }}     
                    </p>
                    <p data-v-bbc645c6="" class="label">Total Team</p>
                </div>
            </div>
            <div data-v-bbc645c6="" class="account-detail-wrap">
                <div data-v-bbc645c6="" class="assets-left" onclick="window.location.href='{{route('user.bank.card')}}'">
                    <p data-v-bbc645c6="">Bank Account</p><img data-v-bbc645c6="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAAAXNSR0IArs4c6QAAA7lJREFUWEfNmEuoVVUYx3//rj0wK0wKvBU9rpB4a1ADRSLogRSVlx4QCGkoqGiDrGiQhtJ7VNbApIKCHjTqQUEU0QMkBAdOMijQLJIGhYVFQUZ98afvxL777HPO3mef4Kzh3utb67e+91qi5YiI04BFwHxgLvA78DNwUNKvbZZXU+GIOAm4AZgBrgIuAKrWCeAb4FPgHeA9Sceb7FcbLiLOBO4G7gIWNNkk5x4FdgHPSPqpjvxAuIg4AdgIPJam66xrzXwB7AW+BH5Ik9q0ZwOLgeXAdEmzNvk24DlJf/eD7AsXEd7kVWBFYZEjwLP+Lum7QRqIiPOAO4DNwLmF+R/6uyQfqnL0hIuIi4EPgPNT8hdgh8Ga+o7l01cN+BBweq75LXCdpK+q6CrhEmwPcFYKfQasqqOpmpp8Hbgi5/4IXFkF2AWXptxX0JjNuk7Sn4M2rvs/Ik4EXkxzW8waXFo28Sy4dP73Cz5msDWS7PwjHRHhvV8uANoHry8GSRluUzq7QWzKq0epsfLpUoOfFEy8WdLuzrz/4DKPHcx0Yee/pImPRcQkcLKkw01UnNF8IIPEaWZRJw8W4RxF23PheyQ9XXeTiDgHcMS5eqyV9Fpd2YzkLcDOlHlYkrPCv2Unw/z7zPzOY1NN0kVETGUingP8BdzZBDD3P5R50JVk0vt34G4G3kryrZKeaHLyPOCajMCJIQEfAB7PfW+R9HYHzmG91kp0Cmnia8VDRMTQgOl7TilmeknSug7c18CFwAFJlzbV2ggBP3cgAoclXaTsx44l8QuSNrSBa2PiiHgeWJ8WPMNwlwH7E+g+SU+1hRsWMCLuBZ7M/S833DXAR/lhtSRXha6R9XZZj8ay13luz8bU/x3FLoOuCpUjIty9vJI/rzXcTcC7+eE2SW+WJSNiHuBU45a8zXD/Ni3J/V+VAm4F3sgfK2tpLiJOARw0C9uQAX+4CZXk9r0KrktztXwuItyal7vaQaz3AzfmJF98ZiR1XKgKrsvnbKqRRqt3jYgHgUcKYCslfdzvNF3RmguNLM8NC5Zys/NcfhxJhWgJ5rtGZYVoXVvbgKVsz9rqVmforiQX93Xv0SY+1vG/vl1JLt6mn1viupwJ2lE50PmLgRERvfu5hPONfqhOONOMnflUwO1O36gsgdnX+nfCCTj0HSIT9YSk3wYlv4I5fQsbfIdIOD89jOftKwH9BDF+99aCuv0UMX43/hLg+L2VFADH85WpADie73OlfDR+L5vlnDWWb8K9Euv/+Zr+D1GXEH1Oc0XNAAAAAElFTkSuQmCC"
                        alt=""></div>
                <div data-v-bbc645c6="" class="assets-right" onclick="window.location.href='{{route ('user.deposit.history')}}'">
                    <p data-v-bbc645c6="">My bill</p><img data-v-bbc645c6="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAAAXNSR0IArs4c6QAAA7lJREFUWEfNmEuoVVUYx3//rj0wK0wKvBU9rpB4a1ADRSLogRSVlx4QCGkoqGiDrGiQhtJ7VNbApIKCHjTqQUEU0QMkBAdOMijQLJIGhYVFQUZ98afvxL777HPO3mef4Kzh3utb67e+91qi5YiI04BFwHxgLvA78DNwUNKvbZZXU+GIOAm4AZgBrgIuAKrWCeAb4FPgHeA9Sceb7FcbLiLOBO4G7gIWNNkk5x4FdgHPSPqpjvxAuIg4AdgIPJam66xrzXwB7AW+BH5Ik9q0ZwOLgeXAdEmzNvk24DlJf/eD7AsXEd7kVWBFYZEjwLP+Lum7QRqIiPOAO4DNwLmF+R/6uyQfqnL0hIuIi4EPgPNT8hdgh8Ga+o7l01cN+BBweq75LXCdpK+q6CrhEmwPcFYKfQasqqOpmpp8Hbgi5/4IXFkF2AWXptxX0JjNuk7Sn4M2rvs/Ik4EXkxzW8waXFo28Sy4dP73Cz5msDWS7PwjHRHhvV8uANoHry8GSRluUzq7QWzKq0epsfLpUoOfFEy8WdLuzrz/4DKPHcx0Yee/pImPRcQkcLKkw01UnNF8IIPEaWZRJw8W4RxF23PheyQ9XXeTiDgHcMS5eqyV9Fpd2YzkLcDOlHlYkrPCv2Unw/z7zPzOY1NN0kVETGUingP8BdzZBDD3P5R50JVk0vt34G4G3kryrZKeaHLyPOCajMCJIQEfAB7PfW+R9HYHzmG91kp0Cmnia8VDRMTQgOl7TilmeknSug7c18CFwAFJlzbV2ggBP3cgAoclXaTsx44l8QuSNrSBa2PiiHgeWJ8WPMNwlwH7E+g+SU+1hRsWMCLuBZ7M/S833DXAR/lhtSRXha6R9XZZj8ay13luz8bU/x3FLoOuCpUjIty9vJI/rzXcTcC7+eE2SW+WJSNiHuBU45a8zXD/Ni3J/V+VAm4F3sgfK2tpLiJOARw0C9uQAX+4CZXk9r0KrktztXwuItyal7vaQaz3AzfmJF98ZiR1XKgKrsvnbKqRRqt3jYgHgUcKYCslfdzvNF3RmguNLM8NC5Zys/NcfhxJhWgJ5rtGZYVoXVvbgKVsz9rqVmforiQX93Xv0SY+1vG/vl1JLt6mn1viupwJ2lE50PmLgRERvfu5hPONfqhOONOMnflUwO1O36gsgdnX+nfCCTj0HSIT9YSk3wYlv4I5fQsbfIdIOD89jOftKwH9BDF+99aCuv0UMX43/hLg+L2VFADH85WpADie73OlfDR+L5vlnDWWb8K9Euv/+Zr+D1GXEH1Oc0XNAAAAAElFTkSuQmCC"
                        alt=""></div>
            </div>
            <div data-v-bbc645c6="" class="nav-list flex-wrap">
                <div data-v-bbc645c6="" class="nav-item" onclick="window.location.href='https://t.me/'">
                    <div data-v-bbc645c6="" class="nav-item-left"><img data-v-bbc645c6="" src="data:image/png;base64,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"
                            alt="">
                        <p data-v-bbc645c6="">Telegram Chat Group</p>
                    </div>
                    <i data-v-bbc645c6="" class="van-icon van-icon-arrow"></i></div>
                <div data-v-bbc645c6="" class="nav-item" onclick="window.location.href='{{route ('online.service')}}'">
                    <div data-v-bbc645c6="" class="nav-item-left"><img data-v-bbc645c6="" src="data:image/png;base64,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"
                            alt="">
                        <p data-v-bbc645c6="">Customer Service</p>
                    </div>
                    <i data-v-bbc645c6="" class="van-icon van-icon-arrow"></i></div>
                <div data-v-bbc645c6="" class="nav-item" onclick="window.location.href='{{route('user.withdraw.fund.pass')}}'">
                    <div data-v-bbc645c6="" class="nav-item-left"><img data-v-bbc645c6="" src="data:image/png;base64,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"
                            alt="">
                        <p data-v-bbc645c6="">Transaction password</p>
                    </div>
                    <i data-v-bbc645c6="" class="van-icon van-icon-arrow"></i></div>
                <div data-v-bbc645c6="" class="nav-item" onclick="window.location.href='{{route('user.change.password')}}'">
                    <div data-v-bbc645c6="" class="nav-item-left"><img data-v-bbc645c6="" src="https://gobike880.com/public/Princess/dist/img/ic_mine11.fff129e1.png" alt="">
                        <p data-v-bbc645c6="">Change password</p>
                    </div>
                    <i data-v-bbc645c6="" class="van-icon van-icon-arrow"></i></div>
                <div data-v-bbc645c6="" class="nav-item" onclick="logoutAuth()">
                    <div data-v-bbc645c6="" class="nav-item-left"><img data-v-bbc645c6="" src="data:image/png;base64,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"
                            alt="">
                        <p data-v-bbc645c6="">Sign out</p>
                    </div>
                    <i data-v-bbc645c6="" class="van-icon van-icon-arrow"></i></div>
            </div>
            <div data-v-bbc645c6="" style="height: 100px;"></div>
 
        <div class="van-overlay" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>
    <script>
        function logoutAuth() {
            document.querySelector('.van-overlay').style.display = 'block'
            window.location.href = 'logout';
        }
    </script>

    <script src=""></script>
    <script>
    </script>
    <script>
        function copyLink(text) {
            var loader = document.querySelector('.van-overlay');
            const body = document.body;
            const input = document.createElement("input");
            body.append(input);
            input.style.opacity = 0;
            input.value = text.replaceAll(' ', '');
            input.select();
            input.setSelectionRange(0, input.value.length);
            document.execCommand("Copy");
            input.blur();
            input.remove();
            loader.style.display = 'block';
            setTimeout(function() {
                loader.style.display = 'none';
                message('Success')
            }, 500)
        }
    </script>
</body>

</html>






@endsection
