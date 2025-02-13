<x-guest-layout>

    <x-slot name="body">
        <!-- Page Title -->
        <section class="page-title style-two centred"
            style="background-image: url(/onboarding/images/background/cleaner.webp);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>About-Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li>About-us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-section -->
        <section class="about-section page-bg">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title text-left">
                                    <h6>Who we Are</h6>
                                    <h2>Disinfection <br />Services & Deep Cleaning Professionals</h2>
                                </div>
                                <div class="text">
                                    <p>Edd Nettoyage is your trusted partner for top-quality cleaning services. We
                                        specialize in residential, commercial, and industrial cleaning, ensuring
                                        spotless and sanitized spaces. Our expert team uses eco-friendly products and
                                        advanced techniques to deliver exceptional results. Whether it's office
                                        maintenance, deep cleaning, or post-construction cleanup, Edd Nettoyage
                                        guarantees efficiency and reliability. Book our services today and experience a
                                        cleaner, healthier environment! </p>
                                </div>
                                <div class="inner-box clearfix">
                                    <ul class="left-column pull-left">
                                        <li>
                                            <h6>We Are</h6>
                                            <h4>Professional Team</h4>
                                        </li>
                                        {{-- <li>
                                            <h6>We Are</h6>
                                            <h4>Professional Team</h4>
                                        </li> --}}
                                    </ul>
                                    <ul class="right-column pull-right">
                                        <li>
                                            <i class="flaticon-check-mark"></i>
                                            <p>Request our service on this site.<br />Get a response in a second.  </p>
                                        </li>
                                        <li>
                                            <i class="flaticon-check-mark"></i>
                                            <p>Test our services<br />Return for more.</p>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="btn-box">
                                    <a href="#" style="color: black" class="theme-btn-three thm-btn">Read More</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1"><img src="/onboarding/images/resource/about-1.png" alt="">
                                </figure>
                                <figure class="image image-2"><img src="/onboarding/images/resource/about-2.png" alt="">
                                </figure>
                                <div class="image-3-bg"></div>
                                <figure class="image image-3 rotate-me"><img
                                        src="/onboarding/images/resource/about-4.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->



        <!-- chooseus-section -->
        <section class="chooseus-section sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h6>Choose-Us</h6>
                    <h2>Unrivalled Cleaning Experience</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box centred">
                        <ul class="tab-btns-one tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                <div class="icon-box"><i class="flaticon-save-the-world"></i></div>
                                <h5>Green Cleaning</h5>
                            </li>
                            <li class="tab-btn" data-tab="#tab-2">
                                <div class="icon-box"><i class="flaticon-life-insurance"></i></div>
                                <h5>Bonded & Insured</h5>
                            </li>
                            <li class="tab-btn" data-tab="#tab-3">
                                <div class="icon-box"><i class="flaticon-calculator"></i></div>
                                <h5>Free Quotations</h5>
                            </li>
                        </ul>
                        <ul class="tab-btns-two tab-buttons clearfix">
                            <li class="tab-btn" data-tab="#tab-4">
                                <div class="icon-box"><i class="flaticon-man"></i></div>
                                <h5>Trained Employees</h5>
                            </li>
                            <li class="tab-btn" data-tab="#tab-5">
                                <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                <h5>Locally Owned</h5>
                            </li>
                            <li class="tab-btn" data-tab="#tab-6">
                                <div class="icon-box"><i class="flaticon-rating"></i></div>
                                <h5>Satisfaction Gurante</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="tabs-inner">
                                <figure class="image-box"><img src="/onboarding/images/resource/choose-1.jpg" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Green Cleaning</h3>
                                    <p>We deliver as read. book us today.</p>
                                    {{-- <a href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="tabs-inner">
                                <figure class="image-box"><img src="/onboarding/images/resource/choose-1.jpg" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Bonded & Insured</h3>
                                    <p>We deliver as read. book us today.</p>
                                    {{-- <a href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="tabs-inner">
                                <figure class="image-box"><img src="/onboarding/images/resource/choose-1.jpg" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Free Quotations</h3>
                                    <p>We deliver as read. book us today.</p>
                                    {{-- <a href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-4">
                            <div class="tabs-inner">
                                <figure class="image-box"><img src="/onboarding/images/resource/choose-1.jpg" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Trained Employees</h3>
                                    <p>We deliver as read. book us today.</p>
                                    {{-- <a href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-5">
                            <div class="tabs-inner">
                                <figure class="image-box"><img src="/onboarding/images/resource/choose-1.jpg" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Locally Owned</h3>
                                    <p>We deliver as read. book us today.</p>
                                    {{-- <a href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-6">
                            <div class="tabs-inner">
                                <figure class="image-box"><img src="/onboarding/images/resource/choose-1.jpg" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Satisfaction Gurante</h3>
                                    <p>We deliver as read. book us today.</p>
                                    {{-- <a href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->

    </x-slot>

</x-guest-layout>
