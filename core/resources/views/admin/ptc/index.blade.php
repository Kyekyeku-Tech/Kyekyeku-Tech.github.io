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
                            <th scope="col">@lang('Title')</th>
                            <th scope="col">@lang('Posted By')</th>
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
                                    @if($ptc->user)
                                        <span class="fw-bold">{{ $ptc->user->fullname }}</span>
                                        <br>
                                        <span class="small">
                                            <a href="{{ route('admin.users.detail',$ptc->user_id) }}"><span>@</span>{{ $ptc->user->username }}</a>
                                        </span>
                                    @else
                                        <span class="fw-bold">@lang('Admin')</span>
                                    @endif
                                </td>
                                <td>
                                    @php echo $ptc->typeBadge @endphp
                                </td>
                                <td>{{$ptc->duration}} @lang('Sec')</td>
                                <td>{{$ptc->max_show}}</td>
                                <td>{{$ptc->showed}}</td>
                                <td>{{$ptc->remain}}</td>

                                <td class="fw-bold">{{ showAmount($ptc->amount) }} {{$general->cur_text}}</td>

                                <td>
                                    @php echo $ptc->statusBadge @endphp
                                </td>
                                <td>
                                    <a href="{{ route('admin.ptc.engagement', $ptc->id) }}" class="btn btn-sm btn-outline--info">
                                        <i class="la la-eye"></i>@lang('Engagement')
                                    </a>
                                    <a class="btn btn-outline--primary btn-sm ms-1" href="{{route('admin.ptc.edit',$ptc->id)}}"><i class="la la-pen"></i> @lang('Edit')</a>
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
            {{ paginateLinks($ads) }}
        </div>
        @endif
    </div>
  </div>
</div>
@endsection
@push('breadcrumb-plugins')
    <a href="{{ route('admin.ptc.create') }}" class="btn btn-outline--primary btn-sm"><i class="las la-plus"></i> @lang('Add New')</a>
@endpush
