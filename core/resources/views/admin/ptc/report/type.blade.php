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
                            <th scope="col">@lang('Name')</th>
                            <th scope="col">@lang('Status')</th>
                            <th scope="col">@lang('Action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($types as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>@php echo $type->statusBadge @endphp</td>
                                <td>
                                    <button class="btn btn-outline--primary btn-sm typeBtn" data-id="{{ $type->id }}" data-name="{{ $type->name }}" data-act="Edit Ptc Report Type">
                                        <i class="la la-pencil"></i> @lang('Edit')
                                    </button>
                                    @if($type->status == Status::ENABLE)
                                        <button class="btn btn-sm btn-outline--danger ms-1 confirmationBtn" data-question="@lang('Are you sure to disable this type?')" data-action="{{ route('admin.ptcreport.type.status', $type->id) }}">
                                            <i class="la la-eye-slash"></i> @lang('Disable')
                                        </button>
                                    @else
                                        <button class="btn btn-sm btn-outline--success ms-1 confirmationBtn" data-question="@lang('Are you sure to enable this type?')" data-action="{{ route('admin.ptcreport.type.status', $type->id) }}">
                                            <i class="la la-eye"></i> @lang('Enable')
                                        </button>
                                    @endif
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
        @if($types->hasPages())
        <div class="card-footer">
            {{ paginateLinks($types) }}
        </div>
        @endif
    </div>
  </div>
</div>

<div class="modal fade" id="typeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">@lang('PTC Report Type')</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i class="las la-times"></i>
            </button>
            </div>
            <form action="{{ route('admin.ptcreport.type.save') }}" method="post">
                @csrf
                <input type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">@lang('Name') </label>
                        <input type="text" class="form-control" name="name" placeholder="@lang('Plan Name')" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn--primary w-100 h-45">@lang('Submit')</button>
                </div>
            </form>
        </div>
    </div>
</div>

<x-confirmation-modal />

@endsection

@push('breadcrumb-plugins')
    <button type="button" class="btn btn-outline--primary typeBtn" data-id="0" data-act="@lang('Add PTC Report Type')"><i class="las la-plus"></i> @lang('Add New')</button>
@endpush

@push('script')
    <script>
        (function($){
            "use strict";
            $('.typeBtn').on('click', function() {
                var modal = $('#typeModal');
                modal.find('.modal-title').text($(this).data('act'));
                modal.find('input[name=id]').val($(this).data('id'));
                modal.find('input[name=name]').val($(this).data('name'));
                if($(this).data('id') == 0){
                    modal.find('form')[0].reset();
                }
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush