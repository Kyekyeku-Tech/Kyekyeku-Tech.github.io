@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form role="form" method="POST" action="{{ route("admin.ptc.update",$ptc->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                       <div class="form-group col-md-8">
                        <label>@lang('Title of the Ad')</label>
                        <input type="text" name="title" class="form-control" value="{{ $ptc->title }}" placeholder="@lang('Title')" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>@lang('Amount')</label>
                        <div class="input-group">
                            <input type="number" step="any" name="amount" class="form-control" value="{{ getAmount($ptc->amount) }}" placeholder="@lang('User will get ...')" required>
                            <div class="input-group-text"> {{ $general->cur_text }} </div>
                        </div>
                    </div>


                    <div class="form-group col-md-4">
                        <label>@lang('Duration')</label>
                        <div class="input-group">
                            <input type="number" name="duration" class="form-control" value="{{ $ptc->duration }}" placeholder="@lang('Duration')" required>
                            <div class="input-group-text">@lang('SECONDS')</div>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label>@lang('Maximum Show')</label>
                        <div class="input-group">
                            <input type="number" name="max_show" class="form-control" value="{{ $ptc->max_show }}" placeholder="@lang('Maximum Show') " required>
                            <div class="input-group-text">@lang('Times')</div>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label>@lang('Status')</label>
                        <select class="form-control" name="status" @disabled($ptc->status == 3) required>
                            <option value="">@lang('Select One')</option>
                            <option value="1">@lang('Active / Approve')</option>
                            <option value="2">@lang('Pending / Under Review')</option>
                            <option value="0">@lang('Inactive')</option>
                            <option value="3">@lang('Reject')</option>
                        </select>
                        @if($ptc->status == 3) <input type="hidden" name="status" value="3"> @endif
                    </div>

                    <div class="form-group col-md-4 d-none" id="rejectReason">
                        <label>@lang('Reject Reason')</label>
                        <div class="input-group">
                            <textarea name="reject_reason" class="form-control">{{ $ptc->reject_reason }}</textarea>
                        </div>
                    </div>

                </div>


                <div class="row pt-5 mt-5 border-top">
                    <div class="form-group col-md-4">
                        <label for="ads_type">@lang('Advertisement Type')</label>
                        <input type="hidden" name="ads_type" value="{{$ptc->ads_type}}">
                        <div class="pt-3">
                            @php echo $ptc->typeBadge @endphp
                        </div>
                    </div>
                    @if($ptc->ads_type == 1)

                    <div class="form-group col-md-8">
                        <label>@lang('Link') <span class="text-danger">*</span></label>
                        <input type="text" name="website_link" class="form-control" value="{{ $ptc->ads_body }}" placeholder="@lang('http://example.com')">
                    </div>
                    @elseif($ptc->ads_type == 2)

                    <div class="form-group col-md-4 ">
                        <label>@lang('Banner')</label>
                        <input type="file" class="form-control"  name="banner_image">
                    </div>

                       <div class="form-group col-md-4 ">

                        <label>@lang('Current Banner') <span class="text-danger">*</span></label>
                        <img src="{{ getImage(getFilePath('ptc').'/'.$ptc->ads_body) }}" class="w-100">

                    </div>

                    @elseif($ptc->ads_type == 3)

                    <div class="form-group col-md-8">
                        <label>@lang('Script') <span class="text-danger">*</span></label>
                        <textarea  name="script" class="form-control">{{ $ptc->ads_body }}</textarea>
                    </div>

                    @else
                        <div class="form-group col-md-8">
                            <label>@lang('Youtube Embaded Link') <span class="text-danger">*</span></label>
                            <input type="text" name="youtube" class="form-control" value="{{ $ptc->ads_body }}">
                        </div>
                    @endif
                </div>

                <div class="pt-5 mt-5 border-top">

                    <div class="d-flex justify-content-between mb-4">
                        <h5>@lang('Ad Sechule')</h5>
                        <button type="button" class="btn btn-outline--primary btn-sm scheduleBtn"><i class="la la-plus"> </i>@lang('Add')</button>
                    </div>
                    
                    <div id="rowFields">

                        @if($ptc->schedule)
                            @foreach ($ptc->schedule as $key => $schedule)
                                <div class="form-group">
                                    <div class="row gy-4">
                                        <div class="col-md-4">
                                            <select name="schedule[{{$key}}][day]" class="form-control" required>
                                                <option value="sunday" @selected($schedule['day'] == 'sunday')>@lang("Sunday")</option>
                                                <option value="monday" @selected($schedule['day'] == 'monday')>@lang("Monday")</option>
                                                <option value="tuesday" @selected($schedule['day'] == 'tuesday')>@lang("Tuesday")</option>
                                                <option value="wednesday" @selected($schedule['day'] == 'wednesday')>@lang("Wednesday")</option>
                                                <option value="thursday" @selected($schedule['day'] == 'thursday')>@lang("Thursday")</option>
                                                <option value="friday" @selected($schedule['day'] == 'friday')>@lang("Friday")</option>
                                                <option value="saturday" @selected($schedule['day'] == 'saturday')>@lang("Saturday")</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="time" name="schedule[{{$key}}][start]" class="form-control" value="{{ $schedule['start'] }}" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="time" name="schedule[{{$key}}][end]" class="form-control" value="{{ $schedule['end'] }}" required>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn--danger w-100 h-45 scheduleClose"><i class="la la-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        
                    </div>

                </div>

                <div class="form-group col-md-12 mt-5">
                    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@push('breadcrumb-plugins')
<a href="{{ route('admin.ptc.index') }}" class="btn btn-outline--primary btn-sm"><i class="las la-undo"></i> @lang('Back') </a>
@endpush


@push('script')
<script>
    (function($){
        "use strict";
        $('#ads_type').change(function(){
            var adType = $(this).val();
            if (adType == 1) {
                $("#websiteLink").removeClass('d-none');
                $("#bannerImage").addClass('d-none');
                $("#script").addClass('d-none');
                $("#youtube").addClass('d-none');
            } else if (adType == 2) {
                $("#bannerImage").removeClass('d-none');
                $("#websiteLink").addClass('d-none');
                $("#script").addClass('d-none');
                $("#youtube").addClass('d-none');
            } else if(adType == 3) {
                $("#bannerImage").addClass('d-none');
                $("#websiteLink").addClass('d-none');
                $("#script").removeClass('d-none');
                $("#youtube").addClass('d-none');
            } else {
                $("#bannerImage").addClass('d-none');
                $("#websiteLink").addClass('d-none');
                $("#script").addClass('d-none');
                $("#youtube").removeClass('d-none');
            }
        }).change();

        $('[name=status]').change(function(){
            var status = $(this).val();
            if( status == 3){
                $('#rejectReason').removeClass('d-none');
            } else {
                $('#rejectReason').addClass('d-none');
            }
        }).change();

        $('[name=status]').val('{{ $ptc->status }}');

        var item = {{ $ptc->schedule ? count($ptc->schedule) : 0 }};

        $('.scheduleBtn').on('click', function (){
            var html = `
                <div class="form-group">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <select name="schedule[${item}][day]" class="form-control" required>
                                <option value="sunday">@lang("Sunday")</option>
                                <option value="monday">@lang("Monday")</option>
                                <option value="tuesday">@lang("Tuesday")</option>
                                <option value="wednesday">@lang("Wednesday")</option>
                                <option value="thursday">@lang("Thursday")</option>
                                <option value="friday">@lang("Friday")</option>
                                <option value="saturday">@lang("Saturday")</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="schedule[${item}][start]" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="schedule[${item}][end]" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn--danger w-100 h-45 scheduleClose"><i class="la la-times"></i></button>
                        </div>
                    </div>
                </div>
            `;

            item += 1;

            $('#rowFields').append(html);
        });

        $(document).on('click', '.scheduleClose', function (){
            $(this).closest('.form-group').remove();            
        });

    })(jQuery);
</script>
@endpush
