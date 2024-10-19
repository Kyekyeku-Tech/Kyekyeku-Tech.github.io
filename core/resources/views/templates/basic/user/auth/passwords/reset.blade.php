@extends($activeTemplate.'layouts.mobile')
@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-7">
                <div class="password-area">
                    <h3 class="title mb-2">{{ __($pageTitle) }}</h3>
                    <div class="mb-4">
                        <p class="text-light">@lang('Your account is verified successfully. Now you can change your password. Please enter a strong password and don\'t share it with anyone.')</p>
                    </div>
                    <form method="POST" action="{{ route('user.password.update') }}">
                        @csrf
                        <input type="hidden" name="email" value="{{ $email }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label class="form-label">@lang('Password')</label>
                            <input type="password" class="form-control form--control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">@lang('Confirm Password')</label>
                            <input type="password" class="form-control form--control" name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn--base w-100 mt-3"> @lang('Submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@if($general->secure_password)
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif
