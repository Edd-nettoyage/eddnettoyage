<x-guest-layout>

    <x-slot name="body">

        <!-- Page Title -->
        <section class="page-title contact-page style-two centred"
            style="background-image: url(/onboarding/images/background/page-title-2.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Review</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li>Review</li>
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
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>Location</h6>
                                    <p>1, rue des Heulines, 95000, Cergy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                                    <h6>Quick Contact</h6>
                                    <p>Phone : <a href="tel:#">Give me a contact number</a><br />Email : <a
                                            href="#">Give me a correct email</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>Open. Hours</h6>
                                    <p>24hrs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section -->


        <!-- contact-section -->
        <section class="page-bg contact-section sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h6>Enter your review</h6>
                    <h2>Drop a review for us.</h2>
                    <p>Feel free to be generous with your review, <br />Thanks!</p>
                </div>
                <div class="form-inner">
                    <form method="post" action="{{route('review.post')}}" id="review-form" class="default-form">
                        @csrf
                        <div class="row clearfix">
                            <!-- Full Name -->
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Full Name" required>
                            </div>

                            <!-- Role -->
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="role" placeholder="Your Role (e.g., Customer, Manager)" required>
                            </div>

                            <!-- Title -->
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="title" placeholder="Awesome work!" required>
                            </div>

                            <!-- Rating -->
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <select name="rating" required>
                                    <option value="" disabled selected>Rating (1-5)</option>
                                    <option value="1">1 - Poor</option>
                                    <option value="2">2 - Fair</option>
                                    <option value="3">3 - Good</option>
                                    <option value="4">4 - Very Good</option>
                                    <option value="5">5 - Excellent</option>
                                </select>
                            </div>

                            <!-- Review -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="review" placeholder="Write your review here..." rows="5" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn-three thm-btn" type="submit">Submit Review</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
        <!-- contact-section end -->

    </x-slot>

</x-guest-layout>
