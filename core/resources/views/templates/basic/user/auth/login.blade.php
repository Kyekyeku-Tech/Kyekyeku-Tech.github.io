

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="{{asset ('core/awais/login/public/Princess/dist/favicon.ico')}}">
    <title>cloud miners ~ Login</title>
    <link href="{{asset ('core/awais/login/public/Princess/dist/css/app.b95358ff.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/login/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/login/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="stylesheet">
    <link href="{{asset ('core/awais/login/public/Princess/dist/css/app.b95358ff.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/login/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')}}">
    <style>
        #app .loading-box-h {
            width: 29.333333vw;
            height: 26.333333vw;
        }

        * {
            user-select: none;
        }
    </style>
</head>

<body class="">
    <form action="{{route ('user.login')}}" method="post">
@csrf
        <div id="app">
            <div id="nava"></div>
            <div data-v-e1c7962c="" class="login">
                <div data-v-e1c7962c="" class="top-bg-wrap"><img data-v-e1c7962c="" src="{{asset ('core/awais/login/public/l.jpg')}}" alt="" class="bg"></div>
                <div data-v-e1c7962c="" class="wrap-body">
                    <p data-v-e1c7962c="" class="login-title">Login to your account</p>
                    <div data-v-e1c7962c="" class="login-form form-box">
                        <div data-v-e1c7962c="" class="login-one-box">
                            <div data-v-e1c7962c="" class="login-tip"><img data-v-e1c7962c="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAVJJREFUWEft2DtLxEAUBeBvxcJG0MbSRrASW3sbRRAfreBP8Mf4EwRbVxF8NPbWWgk2ljYKNhaiMpCFEPNadhPDMlNm7tx7cuaeTOb0FI85rGGmJGYcU5+4x3tesl5BhV2cYHYcCGrk+MAhzrOxeQADcy8tghtgCiAXs0zmAdzEdbLqGHc1GBglZB1HSYJQ+zadLA/gTorqsNUXo1Svsba0XgQYGYw9SBRJDR2UhkQGI4NZBuJRl2EkiiSKJIqkogcmWySXeB5VBRXrl7CdxPy5YuT98u/hrGFQRen30R/m0tQ2zloMppv2AFcNo9zC6TBbHM/i/ziLVxAcgoHofhJH4rFGezT+HZzGK+YzYN6wgK8ufKgfEFhMj/BstQsMBgzBQ1zGVALoG08I3l/VaHyLqwBUzU8ewA3cJK/dSX+w8w5rIK/THvWgqTvt8lcpr7X5XzJnnSkdxA0+AAAAAElFTkSuQmCC"
                                    alt=""><span data-v-e1c7962c="">Phone number</span>
                            </div>
                            <div data-v-e1c7962c="" class="register-cell van-cell-group van-hairline--top-bottom">
                                <div data-v-e1c7962c="" class="van-cell van-cell--large van-field van-field--label-left focus-cell">
                                    <div class="van-field__left-icon">
                                        <div data-v-e1c7962c="" class="areacode">
                                            <p data-v-e1c7962c="">+92</p>
                                        </div>
                                    </div>
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body"><input type="tel" inputmode="numeric" name="username" placeholder="Please enter phone number" class="van-field__control"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-e1c7962c="" class="login-tip" style="margin-top: 20px;"><img data-v-e1c7962c="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAApJJREFUWEft2EvITVEUB/DfR4kBeaRMRBiIFEoeUYqiEAkpQ8VMJibKRGSihFImBh4T79eAkoGJR4pkIuQZySMjzzxaX/vWubf7ufvcBwZ31x2ce9b+r//5773XXmv1+M9HT5v4DcEkjMA3PMUj/GoVvxWC/bEWGzEH8Vwcb3Ace/CkWaLNEgy1jmB6huOv2Jl+PzPsq0yaITgf5zE4IX3BRVzDKwzCZKzAxIK300nx72VIliUYyt0okDuJTXhdx2lgr8EBDE/vD2F9pwjGHrtVWNZd2JrhbAKuYnSyXYkzGfN6TcoouA5HE3AotzrXSfqo6xiAB+nEZ+3HMgRjj81D7LlxfSzrnzjvTdshbBYkVRt+Yy7BiHMfUigpq16FRByc++lhN7Y0ZFdiiWchlihGHIr9OeB1bN6lYH4Zi3MwchVckkJJYK7CqRzwOjb3MAW3MSMHI5fgcpxNgBHfzuWA17G5g6m4i2k5GF2CNSp1FQxB/vkeXJgC6cDC8ozHsvR8AY9zNngdm7iNRuItjhXeR974Aofxvjiv9pBEWpRzvzbJr+G0yIYit3xWsSwSHJuy4NrEsyFqmw2qMp4iwaWI5YuxASdqHFdsW03jQ4AfdbAjU4rMpyqIFwm2Kxg3K2jdENQlWELOjisYNUpkOjdxpQSximnHCW7DdnzG0FQfl+HZcYJR/25OjIbhYxl26BLsKthqoP7vFYzr8SBeYgyy6t7CQer4IQlfc/EQ0dkqO/4KwbKkivZdgq2oF3MbKrgIl5KXfbm9k1ZZpfn9UptuVGrvza6XUcf9+bzQ+2uT79IwOxD3eu+orUmiYovCpdI9LY3e4oTo2UT/8FNfBOP/UHImilVdi34bTq9UdbEPq8Zv66a1KaHaZvAAAAAASUVORK5CYII="
                                    alt=""><span data-v-e1c7962c="">Password</span></div>
                            <div data-v-e1c7962c="" class="register-cell van-cell-group van-hairline--top-bottom">
                                <div data-v-e1c7962c="" class="van-cell van-cell--large van-field">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body"><input type="password" placeholder="Please enter password" name="password" class="van-field__control">
                                            <div class="van-field__right-icon">
                                                <div data-v-e1c7962c="" class="change-type"><i data-v-e1c7962c="" class="van-icon van-icon-closed-eye">
                                                </i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-e1c7962c="" class="btn-box">
                                <button data-v-e1c7962c="" onclick="loginAuth()" class="registerBtn van-button van-button--default van-button--normal van-button--block">
                                <div data-v-e1c7962c="" class="van-button__content"><span data-v-e1c7962c=""
                                                                                          class="van-button__text">Login</span>
                                </div>
                            </button>
                            </div>
                            <div data-v-e1c7962c="" class="flex-start to-login"> Don't have an account yet? <a data-v-e1c7962c="" href="{{route('user.register')}}" class="" style="margin-left: 10px;">To
                                register</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="van-overlay" style="background: rgba(0, 0, 0, 0); display: none;">
                <div class="loading-box-h">
                    <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
                </div>
            </div>
        </div>
    </form>


    <div class="van-toast van-toast--middle loadingcss" style="z-index: 2001; display: none;"><i class="van-icon van-toast__icon"><img src="https://gobike880.com/public/Princess/dist/img/loading.e2df1b5d.gif" class="van-icon__image">
    </i></div>

    <script>
        function loginAuth() {
            document.querySelector('.van-overlay').style.display = 'block'
            document.querySelector('form').submit();
        }
    </script>
</body>
@include('partials.notify')
</html>