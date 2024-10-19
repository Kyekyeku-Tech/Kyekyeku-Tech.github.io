@extends($activeTemplate.'layouts.mobile')
@section('content')
<style>
    input:not([type="radio"]), .form-control {
        padding: 5px 10px;
    }
    .input-group-text {
        background: #00D093;
    }
    label {
        color: #ffffff;
        margin-bottom: 1px;
        font-size: 13px;
    }
</style>
@include('templates.basic.layouts.mobile.top_nav_mini')
@php
    $noticeCaption = getContent('notice.content', true);
@endphp
<div id="appCapsule">
    <div class="container mt-3 mb-3">
        <div class="text-center mb-2">
            <img width="250px" src="{{asset('assets/images/3d-icon/ticket.png')}}" alt="">
            <div class="row align-items-center mx-auto mb-5" style="width: 250px; margin-top: -55px">
                <div class="col text-start ps-5">
                    <h5 class="text-dark small-font-sm">Invite Code</h5>
                    <h5 id="refCode" class="text-dark small-font-lg">{{ refCode_encode($user->id) }}</h5>
                </div>
                <div class="col-auto" style="padding-right: 37px">
                    <h5 onclick="copyTxt('refCode')" class="text-dark small-font-lg">Copy</h5>
                </div>
            </div>
        </div>
        <div class="card glass-bg">
            <div class="card-body">
                <div class="border border-secondary border-2 p-2">
                    <p class="mb-0 small-font-lg text-light">
                        <span id="randomTxt">
                            @php
                                echo $noticeCaption->data_values->invite_notice;
                            @endphp
                        </span>
                        <span id="refLink">
                            {{ route('user.register') }}?inviteCode={{ refCode_encode($user->id) }}
                        </span>
                    </p>
                </div>
                <div class="row mt-2">
                    <div class="col-6 text-start">
                        <button onclick="copyTxt('randomTxt')" class="btn btn-sm btn-outline-light border border-2 border-secondary">Copy Text</button>
                    </div>
                    <div class="col-6 text-end">
                        <button onclick="copyTxt('refLink')" class="btn btn-sm btn-outline-light border border-2 border-secondary">Copy Link</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card glass-bg mt-3">
            <div class="card-body">
                <h5 class="small-font-lg text-light">
                    @php
                        echo $noticeCaption->data_values->invite_page_notice;
                    @endphp
                </h5>
            </div>
        </div>



        {{-- <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-4">
                    <label>@lang('Referral Link')</label>
                    <div class="input-group">
                        <input type="text" value="{{ route('home') }}?reference={{ $user->username }}"
                        class="form-control form-control-lg" id="referralURL"
                        readonly>
                        <button class="input-group-text copytext px-3 text--base" id="copyBoard"> <i class="fa fa-copy"></i></button>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>
@endsection
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
            notifyMsg("Copied: " + copyText.value, 'success')
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
            notifyMsg("Copied: " + copyText.value, 'success')
        });
    })(jQuery);
</script>
@endpush
