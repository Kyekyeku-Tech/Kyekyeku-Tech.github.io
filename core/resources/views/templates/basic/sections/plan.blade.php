@php
    $planCaption = getContent('plan.content', true);
    $gatewayCurrency = App\Models\GatewayCurrency::whereHas('method', function ($gate) {
        $gate->where('status', 1);
    })
        ->with('method')
        ->orderby('name')
        ->get();
    $plans = App\Models\Plan::where('status', 1)->get();
@endphp
<div class="ptb-150 price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="section-header text-center">
                    <h2 class="section-title">{{ __($planCaption->data_values->heading) }}</h2>
                    <p>{{ __($planCaption->data_values->subheading) }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row justify-content-center">
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
                                    <button class="buyBtn" data-plan="{{ $plan }}">@lang('Subscribe Now')</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal custom--modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="{{ route('user.buyPlan') }}">
                @csrf
                <input type="hidden" name="id">
                <div class="modal-header">
                    <strong class="modal-title"> @lang('Confirmation to purches  ')<span class="planName"></span></strong>

                    <button type="button" class="close btn btn-sm btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    @auth
                        <div class="form-group">
                            @if (auth()->user()->runningPlan)
                                <code class="d-block">@lang('If you subscribe to this one. Your old limitation will reset according to this package.')</code>
                            @endif

                            <h6 class="text-center dailyLimit"></h6>
                            <p class="text-center refLevel"></p>
                            <p class="text-center mt-1 validity"></p>

                            <label>@lang('Select Wallet')</label>
                            <select class="form-control  form-select" name="wallet_type" required>
                                <option value="">@lang('Select One')</option>
                                @if (auth()->user()->balance > 0)
                                    <option value="deposit_wallet">@lang('Deposit Wallet - ' . $general->cur_sym . showAmount(auth()->user()->balance))</option>
                                @endif

                                @foreach ($gatewayCurrency as $data)
                                    <option value="{{ $data->id }}" @selected(old('wallet_type') == $data->method_code) data-gateway="{{ $data }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                            <code class="gateway-info rate-info d-none">@lang('Rate'): 1 {{ $general->cur_text }}
                                = <span class="rate"></span> <span class="method_currency"></span></code>
                        </div>
                        <div class="form-group">
                            <label>@lang('Invest Amount')</label>
                            <div class="input-group">
                                <input type="number" step="any" class="form-control form--control" name="amount" required>
                                <span class="input-group-text text-white bg--base">{{ $general->cur_text }}</span>
                            </div>
                            <code class="gateway-info d-none">@lang('Charge'): <span class="charge"></span>
                                {{ $general->cur_text }}. @lang('Total amount'): <span class="total"></span>
                                {{ $general->cur_text }}</code>
                        </div>
                    @else
                        <p>@lang('Please login to subscribe plan')</p>
                    @endauth
                </div>
                <div class="modal-footer">
                    @auth
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('No')</button>
                        <button type="submit" class="btn btn--base">@lang('Yes')</button>
                    @else
                        <a href="{{ route('user.login') }}" class="btn btn--base w-100">@lang('Login')</a>
                    @endauth
                </div>

            </form>

        </div>
    </div>
</div>
@push('script')
    <script type="text/javascript">
        (function($) {
            "use strict";
            $('.buyBtn').click(function() {
                let symbol = '{{ $general->cur_sym }}';
                let currency = '{{ $general->cur_text }}';
                $('.gateway-info').addClass('d-none');
                let modal = $('#BuyModal');
                let plan = $(this).data('plan')
                modal.find('.planName').text(plan.name)
                modal.find('[name=id]').val(plan.id)
                let planPrice = parseFloat(plan.price).toFixed(2);
                modal.find('[name=amount]').val(planPrice);
                modal.find('[name=amount]').attr('readonly', true);

                modal.find('.dailyLimit').html(`Daily Ads Limit:<span class="text--danger"> ${plan.daily_limit}</span>`)
                modal.find('.refLevel').html(`Referral Level: <span class="text--danger">${plan.ref_level} </span>`)
                modal.find('.validity').html(`Plan Validity:  <span class="text--danger"> ${plan.validity} Days </span>`)

                $('[name=amount]').on('input', function() {
                    $('[name=wallet_type]').trigger('change');
                })

                $('[name=wallet_type]').change(function() {
                    var amount = $('[name=amount]').val();
                    if ($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount) {
                        var resource = $('select[name=wallet_type] option:selected').data('gateway');
                        var fixed_charge = parseFloat(resource.fixed_charge);
                        var percent_charge = parseFloat(resource.percent_charge);
                        var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                        $('.charge').text(charge);
                        $('.rate').text(parseFloat(resource.rate));
                        $('.gateway-info').removeClass('d-none');
                        if (resource.currency == '{{ $general->cur_text }}') {
                            $('.rate-info').addClass('d-none');
                        } else {
                            $('.rate-info').removeClass('d-none');
                        }
                        $('.method_currency').text(resource.currency);
                        $('.total').text(parseFloat(charge) + parseFloat(amount));
                    } else {
                        $('.gateway-info').addClass('d-none');
                    }
                });
                modal.find('input[name=id]').val(plan.id);
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush