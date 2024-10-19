@extends('admin.layouts.app')
@section('panel')
<div class="row">
  <div class="col-md-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive--sm">
                <table class="table table--light style--two">
                    <thead>
                        <tr>
                            <th scope="col">@lang('User')</th>
                            <th scope="col">@lang('Type')</th>
                            <th scope="col">@lang('Ad Title')</th>
                            <th scope="col">@lang('Description')</th>
                            <th scope="col">@lang('Action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reports as $report)
                            <tr>
                                <td>
                                    <span class="fw-bold">{{ $report->user->fullname }}</span>
                                    <br>
                                    <span class="small">
                                        <a href="{{ route('admin.users.detail', $report->user_id) }}"><span>@</span>{{ $report->user->username }}</a>
                                    </span>
                                </td>
                                <td>{{ $report->type->name }}</td>
                                <td>{{ $report->ptc->title }}</td>
                                <td>{{ strLimit($report->description, 50) }}</td>
                                <td>
                                    <a href="{{ route('admin.ptc.edit', $report->ptc_id) }}" class="btn btn-outline--info">
                                        <i class="la la-eye"></i>@lang('View Ad')
                                    </a>
                                    <button type="button" class="btn btn-outline--primary ms-1 detailBtn" data-description="{{ $report->description }}">
                                        <i class="la la-desktop"></i> @lang('Details')
                                    </button>
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
        @if($reports->hasPages())
        <div class="card-footer">
            {{ paginateLinks($reports) }}
        </div>
        @endif
    </div>
  </div>
</div>

<div class="modal fade" id="detailModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('Report Description')</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        (function($){
            "use strict";
            $('.detailBtn').on('click', function() {
                var modal = $('#detailModal');
                modal.find('.modal-body').text( $(this).data('description') );
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush

@push('breadcrumb-plugins')
    <x-search-form placeholder="Ad title or Type"/>
@endpush