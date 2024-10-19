@extends($activeTemplate . 'layouts.home')
@section('content')
@php
    $pageTitle = "Teams";
@endphp
<style>
    h1>a, h2>a, h3>a, h4>a, h5>a, h6>a {
        color: #ffffff;
    }
</style>

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url({{asset('assets/images/header/1.png')}})">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Team</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img src="{{asset('assets/images/header/2.png')}}"
            alt="shape-icon"></span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->




    <!-- ===============>> Team section start here <<================= -->
    <section class="team padding-top padding-bottom bg-color">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5">Meet our <span>advisers</span></h2>
            <p>Hey everyone, meet our amazing advisers! They're here to help and guide us through anything.</p>
        </div>
        <div class="container">
            <div class="team__wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/1.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Dianne Russell</a> </h6>
                                            <p class="mb-0">Trade Captain</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/2.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Theresa Webb</a> </h6>
                                            <p class="mb-0">Strategic Advisor</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/3.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Courtney Henry</a> </h6>
                                            <p class="mb-0">Management Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/4.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Albert Flores</a> </h6>
                                            <p class="mb-0">Development Specialist</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/5.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Darrell Steward</a> </h6>
                                            <p class="mb-0">Growth Strategist</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/6.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Wade Warren</a> </h6>
                                            <p class="mb-0">Trade Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/7.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Cody Fisher</a> </h6>
                                            <p class="mb-0">HR Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/8.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Bessie Cooper</a> </h6>
                                            <p class="mb-0">Financial Advisor</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/1.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Dianne Russell</a> </h6>
                                            <p class="mb-0">Trade Captain</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/2.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Theresa Webb</a> </h6>
                                            <p class="mb-0">Strategic Advisor</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/3.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Courtney Henry</a> </h6>
                                            <p class="mb-0">Management Consultant</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
                            <div class="team__item-inner team__item-inner--shape">
                                <div class="team__item-thumb team__item-thumb--style1">
                                    <img src="{{asset('assets/images/team/4.png')}}" alt="Team Image" class="dark">
                                </div>
                                <div class="team__item-content team__item-content--style1">
                                    <div class="team__item-author team__item-author--style1">
                                        <div class="team__item-authorinfo">
                                            <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Albert Flores</a> </h6>
                                            <p class="mb-0">Development Specialist</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Team section start here <<================= -->




    <!-- ===============>> cta section start here <<================= -->
    {{-- <section class="cta padding-top padding-bottom  bg-color">
        <div class="container">
            <div class="cta__wrapper">
                <div class="cta__newsletter justify-content-center">
                    <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
                        <div class="cta__thumb">
                            <img src="{{asset('assets/images/cta/3.png')}}" alt="cta-thumb">
                        </div>
                        <div class="cta__subscribe">
                            <h2> <span>Subscribe</span> our news</h2>
                            <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
                            <form class="cta-form cta-form--style2 form-subscribe" action="#">
                                <div class="cta-form__inner d-sm-flex align-items-center">
                                    <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0" placeholder="Email Address">
                                    <button class="trk-btn  trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cta__shape">
                    <span class="cta__shape-item cta__shape-item--1"><img src="{{asset('assets/images/cta/2.png')}}" alt="shape icon"></span>
                    <span class="cta__shape-item cta__shape-item--2"><img src="{{asset('assets/images/cta/4.png')}}" alt="shape icon"></span>
                    <span class="cta__shape-item cta__shape-item--3"><img src="{{asset('assets/images/cta/5.png')}}" alt="shape icon"></span>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===============>> cta section start here <<================= -->



@endsection
