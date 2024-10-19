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
<div id="appCapsule">
    <div class="container mt-3 mb-3">
        {{showUserLevel($user->id, $lev)}}
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
