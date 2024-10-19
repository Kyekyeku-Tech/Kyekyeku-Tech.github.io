@extends($activeTemplate.'layouts.mobile')
@section('content')
<!-- Top Nav -->
@include('templates.basic.layouts.mobile.top_nav_mini')

<div id="appCapsule">
    <div class="container mt-3">

        <div class="text-end">
            <a href="{{route('ticket.open') }}" class="btn btn-sm btn--base mb-2"> <i class="fa fa-plus"></i> @lang('New Ticket')</a>
        </div>

        @forelse ($supports as $support)

            <div class="card glass-bg my-2">
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font fw-bold text-primary">
                                {{ __($support->subject) }}
                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0 text-start small-font text-primary">
                                <a href="{{ route('ticket.view', $support->ticket) }}" class="btn btn-sm btn-primary px-4 rounded-pill">
                                    View
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font text-light">
                                Ticket No: #{{ $support->ticket }}
                            </p>
                        </div>
                        <div class="col-auto">
                            @php echo $support->statusBadge; @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0 text-start small-font-sm text-secondary">
                                {{ showDateTime($support->created_at) }} - {{ diffForHumans($support->created_at) }}
                            </p>
                        </div>
                        <div class="col-auto">
                            @if($support->priority == Status::PRIORITY_LOW)
                                <span class="badge badge--dark">@lang('Low')</span>
                            @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                <span class="badge  badge--warning">@lang('Medium')</span>
                            @elseif($support->priority == Status::PRIORITY_HIGH)
                                <span class="badge badge--danger">@lang('High')</span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        @empty
            <div class="card glass-bg">
                <div class="card-body">
                    <h6 class="mb-0 text-center small-font-lg text-secondary">
                        Ops, No Support Ticket Found!
                    </h6>
                </div>
            </div>
        @endforelse

        <div class="d-flex justify-content-center mt-4">
            {{ $supports->links() }}
        </div>

    </div>
</div>

{{-- <div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="text-end">
                    <a href="{{route('ticket.open') }}" class="btn btn-sm btn--base mb-2"> <i class="fa fa-plus"></i> @lang('New Ticket')</a>
                </div>
                <div class="card glass-bg">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>@lang('Subject')</th>
                                        <th>@lang('Status')</th>
                                        <th>@lang('Priority')</th>
                                        <th>@lang('Last Reply')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($supports as $support)
                                        <tr>
                                            <td> <a href="{{ route('ticket.view', $support->ticket) }}" class="fw-bold"> [@lang('Ticket')#{{ $support->ticket }}] {{ __($support->subject) }} </a></td>
                                            <td>
                                                @php echo $support->statusBadge; @endphp
                                            </td>
                                            <td>
                                                @if($support->priority == Status::PRIORITY_LOW)
                                                    <span class="badge badge--dark">@lang('Low')</span>
                                                @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                                    <span class="badge  badge--warning">@lang('Medium')</span>
                                                @elseif($support->priority == Status::PRIORITY_HIGH)
                                                    <span class="badge badge--danger">@lang('High')</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($support->last_reply)->diffForHumans() }} </td>

                                            <td>
                                                <a href="{{ route('ticket.view', $support->ticket) }}" class="btn btn--base btn-sm">
                                                    <i class="fa fa-desktop"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{$supports->links()}}
            </div>
        </div>
    </div>
</div> --}}
@endsection
