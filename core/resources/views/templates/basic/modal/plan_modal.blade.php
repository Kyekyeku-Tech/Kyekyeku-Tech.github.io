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
                            <select class="form--control  form-control form-select" name="wallet_type" required>
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
                        <button type="submit" class="trk-btn trk-btn--outline active">@lang('Yes')</button>
                    @else
                        <a href="{{ route('user.login') }}" class="trk-btn trk-btn--outline active">@lang('Login')</a>
                    @endauth
                </div>

            </form>

        </div>
    </div>
</div>
