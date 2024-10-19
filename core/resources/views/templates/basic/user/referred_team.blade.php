@extends($activeTemplate.'layouts.awais')
@section('content')



    <link href="{{asset ('core/awais/team/public/Princess/dist/css/app.b95358ff.css')}}" rel="preload" as="style">
    <link href="{{asset ('core/awais/team/public/Princess/dist/css/chunk-vendors.a206291a.css')}}" rel="stylesheet">
    <link href="{{asset ('core/awais/team/public/Princess/dist/css/app.b95358ff.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('core/awais/team/public/Princess/dist/css/chunk-3edebb94.2fda8665.css')}}">
    <style>
        .index-share .team-wrap .team-assets[data-v-1559a522] {
            width: 100%;
            height: 30.933333vw;
            background: url({{asset ('core/awais/team/public/Princess/share.c3f8cbe5.png')}}) no-repeat 50%/100% auto;
            border-radius: 2.666667vw;
            position: relative;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin-top: 1.333333vw;
        }

        .index-share .rewardsu[data-v-1559a522] {
            width: 100%;
            height: 29.066667vw;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 1.733333vw 2.666667vw;
            margin-top: 5.333333vw;
            background: url({{asset ('core/awais/team/public/Princess/invite-bg.cb7a419a.png')}}) no-repeat;
            background-size: cover;
        }

        * {
            user-select: none;
        }
    </style>
</head>
<style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
	<div style="display:none;">
<input type="text" value=" {{ route('user.register') }}?inviteCode={{ refCode_encode($user->id) }}" id="myInput">
</div>



	
	
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied "  ;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy";
}
</script>
<body class="">
    <div id="app">
        <div id="nava"></div>
        <div data-v-1559a522="" class="index-share">
            <div data-v-1559a522="" class="index-page-title">My team</div>
            <div data-v-1559a522="" class="team-wrap">
                <div data-v-1559a522="" class="team-assets flex">
                    <div data-v-1559a522="" class="content">
                        <p data-v-1559a522="">My Team</p>
                        <div data-v-1559a522="" class="content-bom flex">
                            <div data-v-1559a522="" class="item">
                                <p data-v-1559a522="">{{refTotalCount($user->id)}}</p><span data-v-1559a522="">Total people</span>
                            </div>
                            <div data-v-1559a522="" class="item">
                                <p data-v-1559a522="">{{getAmount(refTotalDeposit($user->id))}}</p><span data-v-1559a522="">Total investment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-v-1559a522="" class="team-level-wrap">
                    <div data-v-1559a522="" class="team-level-item">
                        <div data-v-1559a522="" class="head flex after">
                            <div data-v-1559a522="" class="head-top"><img data-v-1559a522="" src="{{asset ('core/awais/team/public/Princess/dist/img/one.7fef3a82.png')}}" alt="">
                                <p data-v-1559a522="">Level 1 interest commission: (8%)</p>
                            </div>
                        </div>
                        <div data-v-1559a522="" class="content flex">
                            <div data-v-1559a522="" class="val">
                                <p data-v-1559a522="" class="people"> {{teamSize($user->id, 1)}}</p><span data-v-1559a522="">Total people</span></div>
                            <p data-v-1559a522="" class="line"></p>
                            <div data-v-1559a522="" class="val">
                                <p data-v-1559a522="" class="comm">{{getAmount(profitAmount($user->id, 1))}}</p><span data-v-1559a522="">Comission</span></div>

                            <p data-v-1559a522="" class="line"></p>
                            <div data-v-1559a522="" class="val">
                                <p data-v-1559a522="" class="comm">{{getAmount(refTotalWithdraw($user->id))}}</p><span data-v-1559a522="">Refer Total Withdraws</span></div>
                        </div>
                    </div>
                    <div data-v-1559a522="" class="my-copy after">
                        <p data-v-1559a522="" class="copy-title">Copy invitation code and link</p>
                        <div data-v-1559a522="" class="my-copy-div">
                            <div data-v-1559a522="" class="my-copy-div-box"><img data-v-1559a522="" onclick="copyLink('{{ refCode_encode($user->id) }}')" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAAAXNSR0IArs4c6QAAAtxJREFUaEPtmb9rU1EUxz8nTQexvHTp4lA3HbTYCl1UikWbQkWog2DtIOhgBwf/Atv6H4iCHezoD3BoQRSSViKFdqlopXVQcNBBlC59z0qHhHfkxdc0JGnfy000Ud6FN93zPff7Pnk5h3uvUM3IaFsiyyhKL8L+aqQ1xm4oLDitPKVfcl4uCZvQmtdeXGYFDoTV1D1OWJUY5zfOyOdQxtteaEcsznuBjrqbqTahsGrHOR7KuJXWSYFb22soLAl8qXbNGuKPAt6THwqXQxlPzGkG5bSvmrUH5UINJqqXZjSeyPK2yPxUOONp9UTd+bcVJpwBmax+9doUibQ+Bi75WZ6EM57SFYRjkXED+P8fcb/k3RChD6UdLarxwiFgX/5TUb4JfDeAVlGiwibwWnLctYfk0255KxL3m8vzBtfpLRdGfyRlppL5cuMZbbOyfGhoR9xxukWOrkrky4wn5vU6LlMFrTKrMVbq9SkE5RGXThWuCLT4zeWOk5Sbpbpy4yl9gHDNFy05STkZtFi95xMpnUa46ntYdJJyKth4SWG3kzJSb2NB+aw5HRdlwu/M7+xByTe74lFOPDIexHX3+Yi4OTszZUTcjJu5KiJuzs5MGRE342auioibszNTRsTNuJmrIuLm7MyUEXEzbuaqMMSttC4KnPB3SdNSuiVq9NbNO7chVrR59w7xXboRhovQjDWd8aDfTeGr08rhf8q4wjoxzjlnZbkZjW+hfCyQl/xh4IYqC26Oe5tDsu7NNZ9xpeLxROknFBkP+lPtNR+mHDY/cVixk9ITBML7VO4DY37gmt1Kz/YlaJC4XvOJlM4U6rTwyh6Q/qDcYqV1ROBRUeAa4D1/ZSh0Fjri76vA205SxoMWF7yruBxvULqCgv/0vFen3RxHtkveXuvlb93aX+pBdXnWSPNeRyTGsNdcwgDauS7MaNzKclGgz3uXMOK6xCg/aWHZbuEh/eLdB4UavwBca1qfQGattgAAAABJRU5ErkJggg=="
                                    alt="" class="my-copy-btn">
                                <p data-v-1559a522="" class="my-copy-div-bottom invitecode"> {{ refCode_encode($user->id) }}</p>
                            </div>
                        </div>
                        <div data-v-1559a522="" class="my-copy-div">
                            <div data-v-1559a522="" id="myTooltip"      onclick="myFunction()" onmouseout="outFunc()"   class="my-copy-div-box"><img data-v-1559a522=""    src="data:image/png;base64,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"
                                    alt="" class="my-copy-btn">
                                <p data-v-1559a522="" class="my-copy-div-bottom invitelink">
                                    {{ route('user.register') }}?inviteCode={{ refCode_encode($user->id) }} </p>
                            </div>
                        </div>
                    </div>
                    <div data-v-1559a522="" class="wrap-level">
                        <div data-v-1559a522="" class="team-level-item two">
                            <div data-v-1559a522="" class="head flex after">
                                <div data-v-1559a522="" class="head-top"><img data-v-1559a522="" src="{{asset ('core/awais/team/public/Princess/dist/img/two.3a695b6e.png')}}" alt="">
                                    <p data-v-1559a522="">Level 2 ineterest commission: (5%)</p>
                                </div>
                            </div>
                            <div data-v-1559a522="" class="content flex">
                                <div data-v-1559a522="" class="val"><span data-v-1559a522="">Total people</span>
                                    <p data-v-1559a522="" class="people">{{teamSize($user->id, 2)}} /{{teamSize($user->id, 2)}}</p>
                                </div>

                                <div data-v-1559a522="" class="val"><span data-v-1559a522="">Profit Amount</span>
                                    <p data-v-1559a522="" class="people">{{getAmount(profitAmount($user->id, 2))}}</p>
                                </div>

                          
                            </div>
                        </div>
                        <div data-v-1559a522="" class="team-level-item two">
                            <div data-v-1559a522="" class="head flex after">
                                <div data-v-1559a522="" class="head-top"><img data-v-1559a522="" src="{{asset ('core/awais/team/public/Princess/dist/img/three.4184368e.png')}}" alt="">
                                    <p data-v-1559a522="">Level 3 interest commission: (3%)</p>
                                </div>
                            </div>
                            <div data-v-1559a522="" class="content flex">
                                <div data-v-1559a522="" class="val"><span data-v-1559a522="">Total people</span>
                                    <p data-v-1559a522="" class="people">{{teamSize($user->id, 3)}}/ {{teamSize($user->id, 3)}}</p>
                                </div>

                                <div data-v-1559a522="" class="val"><span data-v-1559a522="">Profit Amount</span>
                                    <p data-v-1559a522="" class="people">{{getAmount(profitAmount($user->id, 3))}}</p>
                                </div>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-1559a522="" class="rewardsu flex" onclick="window.location.href='{{route ('plans')}}'">
                <div data-v-1559a522="" class="left"></div>
            </div>
            <div data-v-1559a522="" class="invite-box">
                <div data-v-1559a522="" class="as-container">
                    <div data-v-1559a522="" class="as-titles">
                        <p data-v-1559a522=""></p>
                    </div>
                    <div data-v-1559a522="" class="as-contents">
                        <div data-v-1559a522="">
                            <p><span style="font-size: 14px;">Invite friends to participate and earn more commissions</span>
                            </p>
                            <p><span style="font-size: 14px;">You can invite your friends to register and recharge to become a platform agent. Agents can receive additional commission incentives from the platform.
                                Commission rewards are divided into three levels of income commission rewards. The income commission reward is: 8% for the first level and 5% for the second level. Level 3 3%.</span>
                            </p>
                            <p><span style="font-size: 14px;">You can also share the link on YouTube, Telegram or various other social media platforms to grow your team and earn more commissions.</span>
                            </p>
                            <p><br></p>
                            <p><br></p>
                        </div>
                    </div>
                </div>
            </div>
   
        <div class="van-overlay loadersBox" style="background: rgba(0, 0, 0, 0); display: none;">
            <div class="loading-box-h" style="width: 29.333333vw;height: 26.333333vw;">
                <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
            </div>
        </div>
    </div>







      
@endsection


    <script src=""></script>
    <script>
    </script>
    <script>
        function copyLink(text) {
            var loader = document.querySelector('.loadersBox');
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





@push('style')
<style type="text/css">
    .copytextDiv{
        border:1px solid #00000021;
        cursor: pointer;
    }
    #referralURL{
        border-right: 1px solid #00000021;
    }
    .bg-success-custom{
        background-color: #28a7456e!important;
    }
    .brd-success-custom{
        border: 1px dashed #28a745;
    }
</style>
@endpush
@push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard').click(function(){
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            // notifyMsg("Copied: " + copyText.value, 'success')
            notifyGlass('success','Copy Success!')
        });
    })(jQuery);
</script>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard2').click(function(){
            var copyText = document.getElementById("referralCode");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            // notifyMsg("Copied: " + copyText.value, 'success')
            notifyGlass('success','Copy Success!')
        });
    })(jQuery);
</script>
@endpush
