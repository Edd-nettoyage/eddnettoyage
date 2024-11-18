<!-- Page Title -->
<section class="page-title style-two centred" style="background-image: url(/onboarding/images/background/page-title-2.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>{{$service->name}}</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Services</li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- service-details -->
<section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div class="sidebar-widget category-widget">
                        <ul class="category-list clearfix">

                            @foreach ($services as $singleService)

                            <li><a href="{{route('a.service', $singleService->slug)}}">{{$singleService->name}}</a></li>

                            @endforeach
                            {{-- <li><a href="service-details-2.html" class="current">Municipalities</a></li> --}}

                        </ul>
                    </div>
                    <div class="sidebar-widget banner-widget">
                        <div class="widget-content" style="background-image: url(assets/images/resource/sidebar-banner-1.jpg);">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                            <div class="content-box">
                                <div class="icon-box">
                                    <i class="flaticon-cleaning"></i>
                                    <div class="icon-shape" style="background-image: url(assets/images/icons/star-7.png);"></div>
                                </div>
                                <h3>Start Your Service Today Itself...</h3>
                                <a href="contact.html" class="theme-btn-two">Get in Touch</a>
                            </div>
                        </div>
                        <div class="form-inner">
                            <h3>Consult With Expert</h3>
                            <form action="https://st.ourhtmldemo.com/new/Sanito1/contact.html" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <select class="wide">
                                       <option data-display="Residential Cleaning">Residential Cleaning</option>
                                       <option value="1">Hospitality & Hotel</option>
                                       <option value="2">Municipalities Claning</option>
                                       <option value="3">Education Centre</option>
                                       <option value="4">Office Buildings</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Text..."></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn-four thm-btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-one">
                        <figure class="image-box"><img src="/onboarding/images/service/service-11.jpg" alt=""></figure>
                        <h3>Cleaning Services That We Provide</h3>
                        <div class="text">
                            <p>Beguiled and demoralized by the charms of pleasure the moment, so blinded by desire that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their which is the same as saying through shrinking.</p>
                            <p>Foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail.</p>
                            <p>Charms of pleasure the moment, so blinded by desire that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their.</p>
                        </div>
                    </div>
                    <div class="content-two">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-office-building"></i></div>
                                        <h4>Office Building</h4>
                                        <p>Business will frequently occur the pleasures have  be repudiated annoyances accepted choice.</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-workplace"></i></div>
                                        <h4>Communal Area</h4>
                                        <p>Righteous indignation and dislike men who are so beguiled and by the of pleasure of the moment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <div class="image-box">
                                    <figure class="image"><img src="/onboarding/images/service/service-9.jpg" alt=""></figure>
                                    <div class="doc-content">
                                        <h6>Service Brochure</h6>
                                        <span>65 KB.pdf</span>
                                        <a href="service-details.html">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-three">
                        <div class="inner-box">
                            <figure class="image-box"><img src="/onboarding/images/service/service-10.jpg" alt=""></figure>
                            <div class="text">
                                <div class="shape" style="background-image: url(/onboarding/images/icons/star-6.png);"></div>
                                <h3>Our Service Includes</h3>
                                <p>Indignation and dislike men who  beguiled demoralized moment.</p>
                                <ul class="list clearfix">
                                    <li>Restroom Disinfection</li>
                                    <li>Waxing</li>
                                    <li>Carpet Cleaning</li>
                                    <li>Hard Wood Floor Care</li>
                                    <li>Carpet Cleaning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-four">
                        <h3>One-Time Cleaning Cost</h3>
                        <div class="cost-box clearfix">
                            <ul class="single-item">
                                <li class="title"><h5>Total Sq.ft (Approx)</h5></li>
                                <li>0–1000 square feet</li>
                                <li>1000–2000 square feet</li>
                                <li>3000–4000 square feet</li>
                                <li>5000–6000 square feet</li>
                            </ul>
                            <ul class="single-item">
                                <li class="title"><h5>Basic Cleaning</h5></li>
                                <li>$110</li>
                                <li>$150</li>
                                <li>$220</li>
                                <li>$290</li>
                            </ul>
                            <ul class="single-item">
                                <li class="title"><h5>Deep Cleaning</h5></li>
                                <li>$180</li>
                                <li>$230</li>
                                <li>$310</li>
                                <li>$370</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->
