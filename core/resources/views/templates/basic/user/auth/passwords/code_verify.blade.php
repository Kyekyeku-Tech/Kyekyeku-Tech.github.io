@extends($activeTemplate.'layouts.mobile')
@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-5">
                <div class="d-flex justify-content-center">
                    <div class="verification-code-wrapper glass-bg">
                        <div class="verification-area">
                            <h5 class="pb-3 text-center border-bottom">@lang('Verify Email Address')</h5>
                            <form action="{{ route('user.password.verify.code') }}" method="POST" class="submit-form">
                                @csrf
                                <p class="verification-text">@lang('A 6 digit verification code sent to your email address') :  {{ showEmailAddress($email) }}</p>
                                <input type="hidden" name="email" value="{{ $email }}">
                                @include($activeTemplate.'partials.verification_code')
                                <div class="form-group">
                                    <button type="submit" class="btn btn--base w-100">@lang('Submit')</button>
                                </div>
                                <div class="form-group text-light mt-3">
                                    @lang('Please check including your Junk/Spam Folder. if not found, you can')
                                    <a class="text-primary" href="{{ route('user.password.request') }}">@lang('Try to send again')</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('style')
<style>
    .verification-code::after {
        background-color: #fff0;
    }
    .verification-code-wrapper {
        background: rgba( 0, 208, 148, 0% );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 6px );
        -webkit-backdrop-filter: blur( 6px );
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
</style>
@endpush
