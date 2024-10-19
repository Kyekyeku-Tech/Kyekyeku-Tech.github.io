<!-- ===============>> Header section start here <<================= -->
<style>
    @media only screen and (min-width: 600px) {
        .mobile-view {
            display: none !important;
        }
    }
</style>
<header class="header-section header-section--style2">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="site-logo" src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu menu--style1">
                        <li><a href="{{ route('home') }}">@lang('Home')</a></li>
                        @php
                            $pages = App\Models\Page::where('tempname',$activeTemplate)->where('is_default', Status::NO)->get();
                        @endphp
                        @foreach($pages as $page)
                            @if($page->slug != 'home' && $page->slug != 'blog' && $page->slug != 'contact')
                                <li><a href="{{ route('pages',$page->slug) }}">{{ __($page->name) }}</a>
                                </li>
                            @endif
                        @endforeach

                        <li><a href="{{ route('plans') }}">@lang('Plans')</a></li>
                        <li><a href="{{ route('blog') }}">@lang('Blog')</a></li>
                        <li class="mobile-view" style="display: block"><a href="{{ route('user.login') }}">@lang('Login')</a></li>
                        <li class="mobile-view" style="display: block"><a href="{{ route('user.register') }}">@lang('Sign Up')</a></li>
                    </ul>

                </div>
                <div class="header-action">
                    <div class="menu-area">
                        <div class="header-btn">
                            @guest
                                <a href="{{ route('user.login') }}" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Login</span>
                                </a>
                                <a href="{{ route('user.register') }}" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Registration</span>
                                </a>
                            @else
                                <a href="{{ route('user.home') }}" class="trk-btn trk-btn--border trk-btn--primary">
                                    <span>Dashboard</span>
                                </a>
                            @endguest
                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none header-bar--style1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ===============>> Header section end here <<================= -->
