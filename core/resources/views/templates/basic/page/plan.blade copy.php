@foreach ($plans as $plan)
    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
        <div class="single-price">
            @if ($plan->highlight)
                <div class="popular-badge">
                    <span class="badge badge--primary">@lang('Popular')</span>
                </div>
            @endif
            <div class="part-top">
                <h3>{{ __($plan->name) }}</h3>
                <h4>{{ __(showAmount($plan->price)) }} {{ $general->cur_text }}<br></h4>
            </div>
            <div class="part-bottom">
                <ul>
                    <li>@lang('Plan Details')</li>
                    <li>@lang('Daily Limit') : {{ $plan->daily_limit }} @lang('PTC')</li>
                    <li>@lang('Referral Bonus') : @lang('Upto') {{ $plan->ref_level }} @lang('Level')</li>
                    <li>@lang('Plan Price') : {{ showAmount($plan->price) }} {{ __($general->cur_text) }}</li>
                    <li>@lang('Validity') : {{ $plan->validity }} @lang('Days')</li>
                </ul>

                @if (@auth()->user()->runningPlan && @auth()->user()->plan_id == $plan->id)
                    <button class="package-disabled">@lang('Current Package')</button>
                @else
                    <button class="buyBtn" data-plan="{{ $plan }}">@lang('Subscribe Now')</button>
                @endif
            </div>
        </div>
    </div>
@endforeach
