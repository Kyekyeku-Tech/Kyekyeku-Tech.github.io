@extends($activeTemplate . 'layouts.mobile')

@section('content')
@php
    $noticeCaption = getContent('notice.content', true);
@endphp

<!-- Top Nav -->
@include('templates.basic.layouts.mobile.top_nav_mini')


    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="container">
            <div class="card my-2 bg-gr-navy">
                <div class="card-body">
                    <h6 class="mb-0 small-font text-secondary">Balance</h6>
                    <h2 class="mt-2 mid-font mb-0">{{ showAmount(auth()->user()->balance) }}</h2>
                </div>
            </div>
            <div class="row px-3">
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="500">500{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="1000">1000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="2000">2000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="3000">3000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="5000">5000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="10000">10000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="15000">15000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="20000">20000{{$general->cur_sym}}</button></div>
                <div class="col-4"><button class="amountBtn btn glass-bg text-light w-100 mb-2" data-amount="25000">25000{{$general->cur_sym}}</button></div>
            </div>
            <form id="depositForm">
                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text px-3 text-dark">
                        <i class="fas fa-coins"></i>
                    </span>
                    <input type="text" class="form-control form-control-sm" name="amount" id="amountInput" placeholder="Plese enter the recharge amount" required>
                    {{-- <span class="input-group-text px-3">{{$general->cur_text}}</span> --}}
                </div>

                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text px-3 text-dark">
                        <i class="fas fa-truck"></i>
                    </span>
                    <select class="form-select">
                        <option value="{{null}}">Select the recharge mode</option>
                        <option value="onepay">OnePay</option>
                    </select>
                    {{-- <select id="methods" class="form-select" required>
                        <option value="{{null}}">Select the recharge method</option>
                        @foreach ($methods as $item)
                            <option data-id="{{$item->id}}"
                                data-name="{{$item->name}}"
                                data-currency="{{$item->currency}}"
                                data-method_id="{{$item->method_code}}"
                                value="{{$item->method_code}}">
                                {{$item->name}}
                            </option>
                        @endforeach
                    </select> --}}
                </div>
                <div class="text-center">
                    <button class="btn bg-gr-green-light border-0 w-100 rounded my-2 mx-auto depositSubmitBtn">Deposit</button>
                </div>
            </form>
            <div class="small-font-lg text-warning mt-3">
                @php
                    echo $noticeCaption->data_values->recharge_notice;
                @endphp
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        .form-control:focus{
            background: #fff;
        }
    </style>
@endpush

{{-- http://paytaka-gateway.test/cash-deposit?amount=350.00&&method=bkash&&method_id=1000&&cur_sym=$&&cur_text=Taka&&user_id=1&&admin_number=01740898877&&post_api=https://miningjs.test/api/deposit-sumbit&&method_img=https://seeklogo.com/images/B/bkash-logo-FBB258B90F-seeklogo.com.png --}}

@push('script')
<script>

    let name = '';
    let currency = '';
    let method_id = '';
    let method_img = '';

    $(document).on('change', '#methods', function () {
        name = $('option:selected', this).data('name');
        currency = $('option:selected', this).data('currency');
        method_id = $('option:selected', this).data('method_id');
        if(name.toLowerCase() == 'bkash'){
            method_img = 'https://i.ibb.co/qrJBgkc/645b60f4dad5c1683710196.png';
        }else if(name.toLowerCase() == 'nagad'){
            method_img = 'https://i.ibb.co/zs5ZRjn/645b62ae93d031683710638.png';
        }
        console.log(name+' '+currency+' '+method_code);
    });

    $(document).on('click', '.amountBtn', function (e) {
        e.preventDefault();
        let amount = $(this).data('amount'); // get val form btn
        $('.amountBtn').removeClass('bg-aqua');
        $(this).addClass('bg-aqua');

        $('#amountInput').val(amount); // set val to input form
    });

    $(document).on('submit', '#depositForm', function (e) {
        e.preventDefault();
        let amount = $('#amountInput').val();
        if(!amount){
            return notifyMsg('please select an option first!', 'warning');
        }
        notifyMsg(`recharge: ${amount} success,Please wait patiently`, 'success')
        setTimeout(() => {
            location.href = `https://paytakabdt.github.io/methods?get_methods={{route('api.get.methods')}}&&amount=${amount}&&cur_sym={{$general->cur_sym}}&&user_id={{$user->id}}&&home_url={{route('user.deposit.history')}}&&post_api={{route('api.deposit.submit')}}`;
            // location.href = `https://paytaka-bd.test/cash-deposit?amount=${amount}&&method=${name}&&method_id=${method_id}&&cur_sym={{$general->cur_sym}}&&currency=${currency}&&user_id={{$user->id}}&&home_url={{route('user.deposit.history')}}&&admin_number=01740898877&&post_api={{route('api.deposit.submit')}}&&method_img=${method_img}`;
        }, 1000);

    });
</script>
@endpush
