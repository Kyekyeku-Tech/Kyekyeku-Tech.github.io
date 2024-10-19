@extends($activeTemplate.'layouts.master')
@section('content')
<section class="cmn-section">
    <div class="container">
        <div class="text-end mb-3">
            <a href="{{ route('user.ptc.ads') }}" class="btn btn--base btn-sm">@lang('My Advertisements')</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form role="form" method="POST" action="{{ route("user.ptc.update",$ptc->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                       <div class="form-group col-md-6">
                            <label>@lang('Title of the Ad')</label>
                            <input type="text" name="title" class="form-control" value="{{ $ptc->title }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('Duration')</label>
                            <div class="input-group">
                                <input type="number" name="duration" class="form-control" value="{{ $ptc->duration }}" required>
                                <div class="input-group-text">@lang('SECONDS')</div>
                            </div>
                        </div>

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
                            <button type="button" class="btn btn--base btn-sm scheduleBtn"><i class="la la-plus"> </i>@lang('Add')</button>
                        </div>
                        
                        <div id="rowFields">
            
                            @if($ptc->schedule)
                                @foreach ($ptc->schedule as $key => $schedule)
                                    <div class="form-group">
                                        <div class="row gy-4">
                                            <div class="col-md-4">
                                                <select name="schedule[{{$key}}][day]" class="form-control form--control" required>
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
                                                <input type="time" name="schedule[{{$key}}][start]" class="form-control form--control" value="{{ $schedule['start'] }}" required>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="time" name="schedule[{{$key}}][end]" class="form-control form--control" value="{{ $schedule['end'] }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn--danger btn-lg w-100 scheduleClose"><i class="la la-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            
                        </div>
            
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn--base w-100">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
    <script>
        (function($){
            "use strict";
            var item = {{ $ptc->schedule ? count($ptc->schedule) : 0 }};

            $('.scheduleBtn').on('click', function (){
                var html = `
                    <div class="form-group">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <select name="schedule[${item}][day]" class="form-control form--control" required>
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
                                <input type="time" name="schedule[${item}][start]" class="form-control form--control" required>
                            </div>
                            <div class="col-md-3">
                                <input type="time" name="schedule[${item}][end]" class="form-control form--control" required>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn--danger btn-lg w-100 scheduleClose"><i class="la la-times"></i></button>
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