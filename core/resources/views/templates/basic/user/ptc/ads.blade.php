@extends($activeTemplate.'layouts.master')
@section('content')
<section class="cmn-section">
    <div class="container">
        <div class="text-end mb-3">
            <a href="{{ route('user.ptc.create') }}" class="btn btn--base btn-sm">@lang('Create Advertisement')</a>
        </div>
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive--sm">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">@lang('Title')</th>
                                <th scope="col">@lang('Type')</th>
                                <th scope="col">@lang('Duration')</th>
                                <th scope="col">@lang('Maximum View')</th>
                                <th scope="col">@lang('Viewed')</th>
                                <th scope="col">@lang('Remain')</th>
                                <th scope="col">@lang('Amount')</th>
                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ads as $ptc)
                            <tr>
                                <td>{{strLimit($ptc->title,20)}}</td>
                                <td>
                                    @php echo $ptc->typeBadge @endphp
                                </td>
                                <td>{{$ptc->duration}} @lang('Sec')</td>
                                <td>{{$ptc->max_show}}</td>
                                <td>{{$ptc->showed}}</td>
                                <td>{{$ptc->remain}}</td>


                                <td class="fw-bold">{{ showAmount($ptc->amount) }} {{$general->cur_text}}</td>

                                <td>
                                    @php echo $ptc->statusBadge; @endphp
                                </td>
                                <td>
                                    @if ($ptc->status == 3)
                                        <button class="btn btn--base btn-sm" disabled><i class="la la-pen"></i></button>
                                    @else
                                        <a class="btn btn--base btn-sm" href="{{route('user.ptc.edit',$ptc->id)}}"><i class="la la-pen"></i></a>
                                    @endif
                                    @if($ptc->status == 1 || $ptc->status == 0)
                                        @if($ptc->status == 1)
                                            <a class="btn btn--danger btn-sm" href="{{route('user.ptc.status',$ptc->id)}}"><i class="la la-eye-slash"></i></a>
                                        @else
                                            <a class="btn btn--success btn-sm" href="{{route('user.ptc.status',$ptc->id)}}"><i class="la la-eye"></i></a>
                                        @endif
                                    @else
                                        <button class="btn btn--danger btn-sm" disabled><i class="la la-eye-slash"></i></button>
                                    @endif
                                    <a href="javascript:void(0)" class="btn btn--primary btn-sm detailBtn" data-title="{{strLimit($ptc->title,20)}}" data-duration="{{$ptc->duration}} @lang('Sec')" data-max_show="{{$ptc->max_show}}" data-viewed="{{$ptc->showed}}" data-remain="{{$ptc->remain}}" data-amount="{{ showAmount($ptc->amount) }} {{$general->cur_text}}" data-status="{{$ptc->status}}" @if($ptc->status == 3) data-reject_reason="{{ $ptc->reject_reason }}" @endif>
                                        <i class="la la-desktop"></i>
                                    </a>
                                </td>
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
            @if($ads->hasPages())
            <div class="card-footer">
                {{ $ads->links() }}
            </div>
            @endif
        </div>
    </div>
</section>
<div id="detailModal" class="modal custom--modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('Details')</h5>
                <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </span>
            </div>
            <div class="modal-body">
                <ul class="list-group adData mb-2">

                </ul>
                <div class="feedback"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">@lang('Close')</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script>
        (function ($) {
            "use strict";
            $('.detailBtn').on('click', function () {
                var modal = $('#detailModal');
                var html = '';

                var title = $(this).data('title');
                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Title')</span>
                        <span">${title}</span>
                    </li>`;
                
                var duration = $(this).data('duration');
                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Duration')</span>
                        <span">${duration}</span>
                    </li>`;
                
                var maxShow = $(this).data('max_show');
                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Maximum Show')</span>
                        <span">${maxShow}</span>
                    </li>`;
                
                var viewed = $(this).data('viewed');
                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Viewed')</span>
                        <span">${viewed}</span>
                    </li>`;

                var remain = $(this).data('remain');
                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Remain')</span>
                        <span">${remain}</span>
                    </li>`;

                var amount = $(this).data('amount');
                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Amount')</span>
                        <span">${amount}</span>
                    </li>`;

                var status = $(this).data('status');
                if(status == 3){
                    var reject_reason = $(this).data('reject_reason');
                    html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>@lang('Reject Reason')</span>
                        <span">${reject_reason}</span>
                    </li>`;
                }
                modal.find('.adData').html(html);
                modal.modal('show');
            });
        })(jQuery);

    </script>
@endpush