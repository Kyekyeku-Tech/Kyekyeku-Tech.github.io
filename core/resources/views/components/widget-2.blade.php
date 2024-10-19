@props([
    'link' => '',
    'title' => '',
    'value' => '',
    'icon' => '',
    'image' => '',
    'bg' => 'white',
    'color' => 'primary',
    'icon_style' => 'outline',
    'overlay_icon' => 1,
])

<div class="widget-two box--shadow2 b-radius--5 bg--{{ $bg }} border border-2 border--primary" >
    @if ((bool) $overlay_icon)
        {{-- <i class="{{ $icon }} overlay-icon text--{{ $color }}"></i> --}}
        <img class="overlay-icon" style="height: 100%; width: 100%; max-width: 100px" src="{{ $image }}" alt="">
    @endif

    <div class="widget-two__icon b-radius--5">
        <img style="height: 100%; width: 100%; max-width: 100px" src="{{ $image }}" alt="">
    </div>
    {{-- <div class="widget-two__icon b-radius--5  @if ($icon_style == 'outline') border border--{{ $color }} text--{{ $color }} @else bg--{{ $color }} @endif ">
        <i class="{{ $icon }}"></i>
    </div> --}}

    <div class="widget-two__content">
        <h3>{{ $value }}</h3>
        <p>{{ __($title) }}</p>
    </div>

    @if ($link)
        <a href="{{ $link }}" class="widget-two__btn btn btn-outline--{{ $color }}">@lang('View All')</a>
    @endif
</div>
