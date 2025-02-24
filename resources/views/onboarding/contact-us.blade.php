<x-guest-layout>

    <x-slot name="body">

        <!-- Page Title -->
        <section class="page-title contact-page style-two centred"
            style="background-image: url(/onboarding/images/background/cleaner.webp);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('welcome')}}">Welcome</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-info-section -->
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>Location</h6>
                                    <p>1, rue des Heulines, 95000, Cergy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                                    <h6>Quick Contact</h6>
                                    <p>Phone : <a href="tel:+06 0564 9907">+06 0564 9907</a><br/></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-envelope"></i></div>
                                    <h6>Quick Contact</h6>
                                    <p>Email : <a href="tel:+06 0564 9907">eddnettoyage@gmail.com</a><br/></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>24 Hours</h6>
                                    <p>Mon - Sun : open</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section -->


        <!-- contact-section -->
        <section class="contact-section page-bg sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h6>Send Your Message</h6>
                    <h2>Drop us Message for any Query</h2>
                    <p>Please feel free to get in touch using the form below. We'd love to hear your <br />thoughts &
                        answer any questions you may have!</p>
                </div>
                <div class="form-inner">
                    <form method="post" action="{{route('contact')}}" id="contact-form" class="default-form">
                        @csrf
                        <div class="row clearfix">


                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn-three thm-btn" type="submit" name="submit-form">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- area-section -->
        <section class="area-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <h4>Areas We Cover</h4>
                                    <p>We provide our cleaning services to given areas.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 area-column">
                                <div class="single-area-box">
                                    <h6>Val-d'Oise, Île-de-France</h6>
                                    <ul class="area-list clearfix">
                                        <li>France</li>

                                        <li>France</li>

                                        <li>France</li>

                                        <li>France</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 area-column">
                                <div class="single-area-box">
                                    <h6>Val-d'Oise, Île-de-France</h6>
                                    <ul class="area-list clearfix">
                                        <li>France</li>
                                        <li>France</li>
                                        <li>France</li>
                                        <li>France</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <h4>Areas We Cover</h4>
                                    <p>We provide our cleaning services to given areas.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 area-column">
                                <div class="single-area-box">
                                    <h6>Val-d'Oise, Île-de-France</h6>
                                    <ul class="area-list clearfix">
                                        <li>France</li>

                                        <li>France</li>

                                        <li>France</li>

                                        <li>France</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 area-column">
                                <div class="single-area-box">
                                    <h6>Val-d'Oise, Île-de-France</h6>
                                    <ul class="area-list clearfix">
                                        <li>France</li>
                                        <li>France</li>
                                        <li>France</li>
                                        <li>France</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <h4>Areas We Cover</h4>
                                    <p>We provide our cleaning services to given areas.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 area-column">
                                <div class="single-area-box">
                                    <h6>Cergy</h6>
                                    <ul class="area-list clearfix">
                                        <li>France</li>

                                        <li>France</li>

                                        <li>France</li>

                                        <li>France</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 area-column">
                                <div class="single-area-box">
                                    <h6>Cergy</h6>
                                    <ul class="area-list clearfix">
                                        <li>France</li>
                                        <li>France</li>
                                        <li>France</li>
                                        <li>France</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- area-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <div class="google-map" id="contact-google-map" data-map-lat="49.0667" data-map-lng="2.0833"
                    data-icon-path="/onboarding/images/icons/map-marker.png" data-map-title="Val-d'Oise, Île-de-France"
                    data-map-zoom="12" data-markers='{
                    "marker-1": [49.0667, 2.0833, "<h4>Main Office</h4><p>Val-d Oise, Île-de-France</p>","/onboarding/images/icons/map-marker.png"]
                }'>
                </div>
            </div>
        </section>
        <!-- google-map-section end -->

    </x-slot>

</x-guest-layout>
