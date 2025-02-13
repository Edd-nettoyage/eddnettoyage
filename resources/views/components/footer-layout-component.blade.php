  <!-- main-footer -->
  <footer class="footer-style-three">
    <div class="auto-container">
        <div class="footer-top-three">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="logo-inner clearfix">
                        <figure class="footer-logo"><a href="#"><img style="height: 200px; width: 200px;" src="/onboarding/logos/edd-no-bg-white.png" alt=""></a></figure>
                        {{-- <figure class="footer-logo"><a href="#"><img src="" alt="Logo"></a></figure> --}}
                        <div class="call">
                            <i class="flaticon-phone-call"></i>
                            <h6>Make a Call</h6>
                            <h5><a href="tel:+33605649907">+336 0564 9907</a></h5>
                        </div>
                        <div class="call">
                            <i class="fas fa-envelope"></i>
                            <h6>Mail</h6>
                            <h5><a>eddnettoyage@gmail.com</a></h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="form-inner">
                        <form action="#" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your email address ..." required="">
                                <button type="submit" class="theme-btn-four thm-btn">Subscribe Us</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="{{route('about.us')}}">About us</a></li>
                                <li><a href="{{route('contact.us')}}">Contact us</a></li>
                                <li><a href="{{route('request.quote')}}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h4>Popular Request</h4>
                        </div>
                        <div class="post-inner">
                            @foreach ($coverage as $c)

                            <div class="post">
                                <figure class="post-thumb"><a href="{{$c?->image}}"><img src="{{$c?->image}}" alt=""></a></figure>
                                <h6>{{$c?->title}}</h6>
                                {{-- <h5><a href="#">Your Need-To-Know Guide For Infection Control</a></h5> --}}
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom-three clearfix">
            <div class="copyright pull-left">
                <p>&copy; 2024 By <a href="#" style="color: green">codeBrown</a> </p>
            </div>

        </div>
    </div>
</footer>
<!-- main-footer end -->
