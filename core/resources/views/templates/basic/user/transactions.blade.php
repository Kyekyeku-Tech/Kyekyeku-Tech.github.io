@extends($activeTemplate . 'layouts.mobile')
@section('content')
@include('templates.basic.layouts.mobile.top_nav_mini')


<div id="appCapsule">
    <div class="container mt-3" style="background-color: #041E42">
        <div class="card glass-bg mb-4" style="background-color: #041E42">
            <div class="card-body pb-1" style="background-color: #041E42">
                <form action="">
                    <div class="d-flex flex-wrap gap-1">
                        <div class="flex-grow-1">
                            <label>@lang('Transaction Number')</label>
                            <input type="text" name="search" value="{{ request()->search }}" class="form-control form-control-sm">
                        </div>
                        <div class="flex-grow-1">
                            <label>@lang('Type')</label>
                            <select name="trx_type" class="form-select form-control-sm">
                                <option value="">@lang('All')</option>
                                <option value="+" @selected(request()->trx_type == '+')>@lang('Plus')</option>
                                <option value="-" @selected(request()->trx_type == '-')>@lang('Minus')</option>
                            </select>
                        </div>
                        <div class="flex-grow-1">
                            <label>@lang('Remark')</label>
                            <select class="form-select form-control-sm" name="remark">
                                <option value="">@lang('Any')</option>
                                @foreach ($remarks as $remark)
                                    <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>{{ __(keyToTitle($remark->remark)) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex-grow-1 align-self-end">
                            <button class="btn btn-sm btn-primary w-100 filterBtn"><i class="las la-filter"></i> @lang('Filter')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @forelse ($transactions as $trx)

            <div class="card glass-bg my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-start small-font-lg text-primary">
                                {{ __($trx->details) }}
                            </h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font text-light">
                                Amount:
                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-start small-font text-primary">
                                <span class="fw-bold @if ($trx->trx_type == '+') text--success @else text--danger @endif">
                                    {{ $trx->trx_type }} {{ showAmount($trx->amount) }} {{ $general->cur_text }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font text-light">
                                Transaction:
                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-start small-font-sm text-warning">
                                {{ $trx->trx }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font-sm text-secondary">
                                {{ showDateTime($trx->created_at) }} - {{ diffForHumans($trx->created_at) }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        @empty
            <div class="card glass-bg">
                <div class="card-body">
                    <h6 class="mb-0 text-center small-font-lg text-secondary">
                        Ops, No Withdraw Record Found!
                    </h6>
                </div>
            </div>
        @endforelse

        <div class="d-flex justify-content-center mt-4">
            {{ $transactions->links() }}
        </div>

    </div>
</div>




    {{-- <div class="cmn-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="show-filter mb-3 text-end">
                        <button type="button" class="btn btn--base showFilterBtn btn-sm"><i class="las la-filter"></i> @lang('Filter')</button>
                    </div>
                    <div class="card responsive-filter-card mb-4">
                        <div class="card-body">
                            <form action="">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="flex-grow-1">
                                        <label>@lang('Transaction Number')</label>
                                        <input type="text" name="search" value="{{ request()->search }}" class="form-control form--control">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label>@lang('Type')</label>
                                        <select name="trx_type" class="form-select form--select">
                                            <option value="">@lang('All')</option>
                                            <option value="+" @selected(request()->trx_type == '+')>@lang('Plus')</option>
                                            <option value="-" @selected(request()->trx_type == '-')>@lang('Minus')</option>
                                        </select>
                                    </div>
                                    <div class="flex-grow-1">
                                        <label>@lang('Remark')</label>
                                        <select class="form-select form--select" name="remark">
                                            <option value="">@lang('Any')</option>
                                            @foreach ($remarks as $remark)
                                                <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>{{ __(keyToTitle($remark->remark)) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex-grow-1 align-self-end">
                                        <button class="btn btn--base w-100"><i class="las la-filter"></i> @lang('Filter')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card custom--card">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>@lang('Trx')</th>
                                            <th>@lang('Transacted')</th>
                                            <th>@lang('Amount')</th>
                                            <th>@lang('Post Balance')</th>
                                            <th>@lang('Detail')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($transactions as $trx)
                                            <tr>
                                                <td>
                                                    <strong>{{ $trx->trx }}</strong>
                                                </td>

                                                <td>
                                                    {{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}
                                                </td>

                                                <td class="budget">
                                                    <span class="fw-bold @if ($trx->trx_type == '+') text--success @else text--danger @endif">
                                                        {{ $trx->trx_type }} {{ showAmount($trx->amount) }} {{ $general->cur_text }}
                                                    </span>
                                                </td>

                                                <td class="budget">
                                                    {{ showAmount($trx->post_balance) }} {{ __($general->cur_text) }}
                                                </td>


                                                <td>{{ __($trx->details) }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@
@push('style')
<style>
    input:not([type="radio"]), .form-control {
        padding: 7px 20px;
    }
    .filterBtn{
        min-height: 38px !important;
    }
</style>
@endpush
