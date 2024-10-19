@extends($activeTemplate.'layouts.home')
@section('content')
<div class="ptb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php echo $policy->data_values->details @endphp
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $(window).on('load', function () {
        $('.header-section').removeClass('header-section--style2').addClass('bg-color-3');
    });
</script>
@endpush
