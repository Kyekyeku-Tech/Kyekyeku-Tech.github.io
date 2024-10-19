@php
    $aboutCaption = getContent('about.content',true);
@endphp

<!-- ===============>> Story section start here <<================= -->
<div class="story padding-top bg-color-3">
    <div class="container">
        <div class="story__wrapper">
            <div class="story__thumb">
                <div class="story__thumb-inner" data-aos="fade-up" data-aos-duration="800">
                    <img src="assets/images/about/4.png" alt="story-image">
                    <div class="story__thumb-playbtn">
                        <a href="{{ __($aboutCaption->data_values->video_url) }}" data-fslightbox>
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="story__shape">
        <span class="story__shape-item story__shape-item--1"><span></span> </span>
    </div>
</div>
<!-- ===============>> Story section end here <<================= -->





<!-- ===============>> About section start here <<================= -->
<section class="about about--style1 ">
    <div class="container">
        <div class="about__wrapper">
            <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
                <div class="col-lg-6">
                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                        <div class="about__thumb-inner">
                            <div class="about__thumb-image floating-content">
                                <img class="" src="{{ getImage('assets/images/frontend/about/'.$aboutCaption->data_values->image) }}" alt="about-image">
                                <div class="floating-content__top-left">
                                    <div class="floating-content__item">
                                        <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="10">30</span> Years
                                        </h3>
                                        <p>Consulting Experience</p>
                                    </div>
                                </div>
                                <div class="floating-content__bottom-right">
                                    <div class="floating-content__item">
                                        <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">25K</span>K+
                                        </h3>
                                        <p>Satisfied Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content" data-aos="fade-left" data-aos-duration="800">
                        <div class="about__content-inner">
                            <h2>{{ __($aboutCaption->data_values->heading) }}</h2>

                            <p class="mb-0">@php echo $aboutCaption->data_values->description @endphp </p>
                            <a href="javascript:void(0)" class="trk-btn trk-btn--border trk-btn--primary">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===============>> About section start here <<================= -->





<!-- ========== Roadmap Section start Here========== -->
<section class="roadmap roadmap--style1 padding-top  padding-bottom bg-color" id="roadmap">
    <div class="container">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5">Product <span> roadmap</span></h2>
            <p>A product roadmap shows the path ahead, helps teams plan, and guides the delivery of the product.</p>
        </div>
        <div class="roadmap__wrapper">
            <div class="row gy-4 gy-md-0 gx-5">
                <div class="col-md-6 offset-md-6">
                    <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                        <div class="roadmap__item-inner">
                            <div class="roadmap__item-content">
                                <div class="roadmap__item-header">
                                    <h3>project research</h3>
                                    <span>P1</span>
                                </div>
                                <p>Project research is the backbone of any successful project. It involves gathering information, setting objectives, and analyzing data to ensure the project is achievable. Without proper research, projects can fail due
                                    to lack of knowledge.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                        <div class="roadmap__item-inner">
                            <div class="roadmap__item-content">
                                <div class="roadmap__item-header">
                                    <h3>framing idea</h3>
                                    <span>P2</span>
                                </div>
                                <p>Hey there! Just wanted to throw out a framing idea for our upcoming project. Let's start with the big picture and then work our way down to the details. This way we ensure our vision stays on track while also ironing
                                    out.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
                        <div class="roadmap__item-inner">
                            <div class="roadmap__item-content">
                                <div class="roadmap__item-header">
                                    <h3>Design first draft</h3>
                                    <span>P3</span>
                                </div>
                                <p>Hey guys, just wanted to share my design first draft! I went for a minimalist look with a pop of color. What do you think? Open to any suggestions or feedback. Can't wait to see how this turns out over all kind of success!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init" data-aos="fade-right" data-aos-duration="800">
                        <div class="roadmap__item-inner">
                            <div class="roadmap__item-content">
                                <div class="roadmap__item-header">
                                    <h3>Final design</h3>
                                    <span>P4</span>
                                </div>
                                <p>So after lots of reiterations, and endless tweaking, we finally landed on the final design. It's slick, it's modern, and it perfectly captures the essence of what we were aiming for. We couldn't be more excited to launch
                                    it!</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
                        <div class="roadmap__item-inner">
                            <div class="roadmap__item-content">
                                <div class="roadmap__item-header">
                                    <h3>Project development</h3>
                                    <span>P5</span>
                                </div>
                                <p>So we're deep in project development here, and things are coming along nicely. We've got a solid plan in place and our team is firing on all cylinders. There's still work to be done, but we're excited about what we're
                                    building.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init" data-aos="fade-right" data-aos-duration="800">
                        <div class="roadmap__item-inner">
                            <div class="roadmap__item-content">
                                <div class="roadmap__item-header">
                                    <h3>Launch project</h3>
                                    <span>P6</span>
                                </div>
                                <p>Alright folks, it's time to get this project off the ground! We've been talking about it for weeks, and now it's time to launch. We've got all the pieces in place, so let's get to work and make this thing happen!</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="roadmap__shape">
        <span class="roadmap__shape-item roadmap__shape-item--1"> <span></span> </span>
        <span class="roadmap__shape-item roadmap__shape-item--2"> <img src="assets/images/icon/1.png" alt="shape-icon">
  </span>
    </div>
</section>
<!-- ========== Roadmap Section Ends Here========== -->






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
                                <img src="assets/images/team/1.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/2.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/3.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/4.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/5.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/6.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/7.png" alt="Team Image" class="dark">
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
                                <img src="assets/images/team/8.png" alt="Team Image" class="dark">
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
                <div class="text-center">
                    <a href="team.html" class="trk-btn trk-btn--border trk-btn--primary mt-25">View more </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===============>> Team section start here <<================= -->






<!-- ===============>> cta section start here <<================= -->
<section class="cta padding-top padding-bottom  bg-color">
    <div class="container">
        <div class="cta__wrapper">
            <div class="cta__newsletter justify-content-center">
                <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cta__thumb">
                        <img src="assets/images/cta/3.png" alt="cta-thumb">
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
                <span class="cta__shape-item cta__shape-item--1"><img src="assets/images/cta/2.png" alt="shape icon"></span>
                <span class="cta__shape-item cta__shape-item--2"><img src="assets/images/cta/4.png" alt="shape icon"></span>
                <span class="cta__shape-item cta__shape-item--3"><img src="assets/images/cta/5.png" alt="shape icon"></span>
            </div>
        </div>
    </div>
</section>
<!-- ===============>> cta section start here <<================= -->
