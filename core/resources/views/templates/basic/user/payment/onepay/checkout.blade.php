@php
    $get_amount = @$_GET['amount'];
    $get_id = @$_GET['id'];
    $get_name = @$_GET['name'];
    $get_number = @$_GET['number'];
    $get_rate = @$_GET['rate'];
    $get_trx = @$_GET['trx'];
    $get_currency = @$_GET['currency'];
    $get_method_code = @$_GET['method_code'];
    $get_minAmount = @$_GET['minAmount'];
    $get_maxAmount = @$_GET['maxAmount'];
    $get_fixCharge = @$_GET['fixCharge'];
    $get_percentCharge = @$_GET['percentCharge'];
    $get_final_amo = ($get_amount*$get_rate)+$get_fixCharge;
@endphp
<!DOCTYPE html>
<html lang="en">
    <!-- Include Head -->
    @include('templates.basic.includes.frontend.head')
    <style>
        .copy_btn{
            cursor: pointer;
        }
    </style>
<body>
    <!-- App Header -->
<div class="appHeader bg-blue">
    <div class="pageTitle">
        @if (strtolower($get_currency) == 'usdt')
            <h3 class="mb-0 text-white times-font">Payment Informations</h3>
        @else
            <h3 class="mb-0 text-white">পেমেন্ট তথ্য</h3>
        @endif
    </div>
</div>
<!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="row align-items-center mt-3">
                        <div class="col-12 text-center mb-1">
                            <img class="rounded-circle" width="70px" src="{{asset('assets/images/site-icons/onepay.png')}}" alt="">
                        </div>
                        <h2 class="col-12 text-center times-font mb-0">
                            ONE PAY
                        </h2>
                    </div>
                </div>
                <h3 class="col-auto mt-4px times-font mb-0 text-center rounded border">
                    <span id="minutes">59</span>:<span id="seconds">59</span>
                </h3>
            </div>

            <div class="card my-3">
                <div class="card-header bg-blue" style="border-bottom: 5px solid #fff;">
                    @if (strtolower($get_currency) == 'usdt')
                        <h4 class="mb-0 times-font text-white">Step 1.Copy {{$get_name}} Informations</h4>
                    @else
                        <h4 class="mb-0 times-font text-white">স্টেপ ১.কপি {{$get_name}} ইনফরমেশন</h4>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row pb-1" style="border-bottom: 1px dashed #dee2e6!important;">
                        <div class="col">
                            @if (strtolower($get_currency) == 'usdt')
                                <span class="small-font">{{$get_name}} Address:</span>
                            @else
                                <span class="small-font">{{$get_name}} একাউন্ট:</span>
                            @endif
                        </div>
                        <div class="col-auto">
                            <span class="small-font-lg fw-bold copy_btn"><b id="numberCopy">{{$get_number}}</b> <i class="far fa-copy"></i></span>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            @if (strtolower($get_currency) == 'usdt')
                                <h4 class="mb-0 fw-bold">Amount</h4>
                            @else
                                <h4 class="mb-0 fw-bold">পরিমাণ</h4>
                            @endif
                        </div>
                        <div class="col-auto">
                            <h2 class="mb-0 text-danger times-font fw-bold">{{$get_final_amo}} {{ $get_currency }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-header bg-blue" style="border-bottom: 5px solid #fff;">
                    @if (strtolower($get_currency) == 'usdt')
                        <h4 class="mb-0 times-font text-white">Step 2. Send {{$get_currency}} from your wallet to our {{$get_name}} Address</h4>
                    @else
                        <h4 class="mb-0 times-font text-white">ধাপ 2. {{$get_name}} ট্রান্সফারের মাধ্যমে আপনি যে পরিমাণ রিচার্জ করতে চান তা আমাদের কাছে ট্রান্সফার করুন।</h4>
                    @endif
                </div>
                <div class="card-body py-1">
                    <div class="row pb-1">
                        <div class="col">
                            @if (strtolower($get_currency) == 'usdt')
                                <span class="small-font-lg"><span class="text-danger">*</span> Please, copy your [Transaction ID] after payment</span>
                            @else
                                <span class="small-font-lg"><span class="text-danger">*</span> অর্থপ্রদানের পরে অনুগ্রহ করে আপনার [লেনদেন আইডি] অনুলিপি করুন</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-header bg-blue" style="border-bottom: 5px solid #fff;">
                    @if (strtolower($get_currency) == 'usdt')
                        <h4 class="mb-0 times-font text-white">Step 3. To complete your Deposit, Enter your Transaction ID.</h4>
                    @else
                        <h4 class="mb-0 times-font text-white">ধাপ 3. রিচার্জ সম্পূর্ণ করতে অনুগ্রহ করে লেনদেন আইডি লিখুন</h4>
                    @endif
                </div>
                <div class="card-body py-1">
                    <div class="row pb-1 justify-content-center">
                        @if (strtolower($get_name) === 'bkash')
                            <div class="col-5">
                                <img width="100%" src="{{asset('assets/images/onepay/onepay-asset.png')}}" alt="">
                            </div>
                            <div class="col-5">
                                <img width="100%" src="{{asset('assets/images/onepay/onepay-asset-2.png')}}" alt="">
                            </div>
                        @endif
                        <div class="col-12 mt-1">
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    @if (strtolower($get_currency) == 'usdt')
                                        <input type="text" class="form-control border border-dark" id="transaction" name="transaction" placeholder="Enter Your Transaction Id" required>
                                    @else
                                        <input type="text" class="form-control border border-dark" id="transaction" name="transaction" placeholder="লেনদেন আইডি লিখুন" required>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="btnBody">
                <div class="input-group mb-3 justify-content-center w-100 ">
                    @if (strtolower($get_currency) == 'usdt')
                        <a href="{{route('home')}}" class="btn btn-lg btn-light" style="border-radius: 25px 0px 0px 25px">Cancel</a>
                        <button class="btn btn-lg btn-purple checkoutConfirmBtn" style="border-radius: 0px 25px 25px 0px" type="button" id="button-addon1">Confirmn Payment</button>
                    @else
                        <a href="{{route('home')}}" class="btn btn-lg btn-light" style="border-radius: 25px 0px 0px 25px">আদেশ বাতিল</a>
                        <button class="btn btn-lg btn-purple checkoutConfirmBtn" style="border-radius: 0px 25px 25px 0px" type="button" id="button-addon1">পেমেন্ট নিশ্চিত করুন</button>
                    @endif
                </div>
            </div>

        </div>
    </div>


    <!-- Include Script -->
    @include('templates.basic.includes.frontend.script')
    <script>

        //-- copy text --//
        $(document).on('click', '.copy_btn', function (e) {
            e.preventDefault();
            copy_password()
        });
        function copy_password() {
            var copyText = document.getElementById("numberCopy");
            var textArea = document.createElement("textarea");
            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("Copy");
            textArea.remove();
            notifyMsg('copied: '+textArea.value, 'success')
        }

        //--timer start--//
        function n(n){
            return n > 9 ? "" + n: "0" + n;
        }

        let minutes = 59;
        let seconds = 60;

        let timerInterval = setInterval(() => {
            seconds--;
            // console.log(seconds);
            $('#seconds').html(n(seconds));
            if (seconds == 0) {
                seconds = 60;
                setTimeout(() => {
                    minutes = minutes-1;
                    $('#minutes').html(n(minutes));
                }, 1000);
            }
            if (seconds == 1 && minutes == 0) {
                clearInterval(timerInterval);
                window.location.href="{{ route('user.onepay.order.cancel') }}";
            }
            console.log(seconds+' '+minutes);
        }, 1000);

        //-- Timer End --//


        //check out submit
        $(document).on('click', '.checkoutConfirmBtn', function (e) {
            e.preventDefault();

            let method_code = "{{$get_method_code}}";
            let amount = "{{$get_amount}}";
            let method_currency = "{{$get_currency}}";
            let charge = "{{$get_fixCharge}}";
            let rate = "{{$get_rate}}";
            let trx = "{{$get_trx}}";
            let final_amo = "{{$get_final_amo}}";
            let transaction_id = $('#transaction').val();

            if (!transaction_id) {
                return notifyMsg('অনুগ্রহ করে আপনার ট্রানজেকশন আইডি লিখুন!', 'warning');
            }

            $('.checkoutConfirmBtn').attr('disabled', 'disabled');

            // console.log(charge);
            $.ajax({
                type: "POST",
                url: "{{route('user.onepay.checkout.confirm')}}",
                data: {
                    _token : '{{csrf_token()}}',
                    method_code:method_code,
                    amount:amount,
                    method_currency:method_currency,
                    charge:charge,
                    rate:rate,
                    final_amo:final_amo,
                    trx:trx,
                    transaction_id:transaction_id
                },
                success: function (res) {
                    console.log(res);
                    if (res.cls == 'success') {
                        $('#btnBody').html('');
                        notifyMsg(res.msg, res.cls)
                        setTimeout(() => {
                            location.href = "{{route('user.records')}}"
                        }, 1500);
                    }
                }
            });

        });
    </script>
</body>
</html>
