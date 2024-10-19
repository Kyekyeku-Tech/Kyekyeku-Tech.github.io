<!-- ===============>> Header section start here <<================= -->
<header class="header-section bg-color-3">
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
                        <li>
                            <a href="{{route('user.home')}}">Dashboard</a>
                        </li>
                        <li><a href="{{ route('user.trading') }}">@lang('Trading')</a></li>
                        <li class="menu-item-has-children">
                            <a href="#0">Deposit</a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.deposit.index') }}">@lang('Deposit Now')</a>
                                </li>
                                <li><a href="{{ route('user.deposit.history') }}">@lang('Deposit History')</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#0">@lang('Withdraw')</a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.withdraw') }}">@lang('Withdraw Now')</a>
                                </li>
                                <li><a href="{{ route('user.withdraw.history') }}">@lang('Withdraw History')</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('plans') }}">@lang('Plans')</a></li>

                        {{-- <li class="menu-item-has-children"><a href="#0">@lang('PTC')</a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.ptc.index') }}">@lang('Ads')</a></li>
                                @if($general->user_ads_post)
                                <li><a href="{{ route('user.ptc.ads') }}">@lang('My Ads')</a></li>
                                @endif
                                <li><a href="{{ route('user.ptc.clicks') }}">@lang('Clicks')</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('user.transactions') }}">@lang('Transactions')</a></li>

                        <li class="menu-item-has-children"><a href="#0">@lang('Referral')</a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.commissions') }}">@lang('Commissions')</a>
                                </li>
                                <li><a href="{{ route('user.referred') }}">@lang('Referred Users')</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children"><a href="#0">@lang('Account')</a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.profile.setting') }}">@lang('Profile')</a></li>
                                <li><a href="{{ route('user.change.password') }}">@lang('Change
                                        Password')</a></li>
                                @if($general->balance_transfer)
                                <li><a href="{{ route('user.transfer.balance') }}">@lang('Balance Transfer')</a></li>
                                @endif
                                <li><a href="{{ route('ticket.index') }}">@lang('Support Ticket')</a></li>
                                <li><a href="{{ route('user.twofactor') }}">@lang('Two Factor')</a>
                                </li>
                                <li><a href="{{ route('user.logout') }}">@lang('Logout')</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="header-action">
                    <div class="menu-area">
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
