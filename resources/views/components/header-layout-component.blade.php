     <!-- main header -->
     <header   class="main-header style-three">

        
        <!-- header-upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="upper-inner clearfix">
                    <div class="logo-box ">
                        <figure class="logo"><a href="#"><img style="height: 150px; width: 150px" src="/onboarding/logos/edd-no-bg-black.png" alt=""></a></figure>
                    </div>
                    <div style="float: right" class="right-column">
                        <ul class="info-list clearfix">

                            <li>

                                <i class="flaticon-location"></i>
                                <h6>Location</h6>
                                <h5>1, rue des Heulines, 95000, Cergy</h5>
                            </li>
                            <li>
                                <i class="flaticon-circular-clock"></i>
                                <h6>Open Hours</h6>
                                <h5>24 hrs</h5>
                            </li>
                            <li>
                                <i class="flaticon-cleaning"></i>
                                <h6>Established Since</h6>
                                <h5>2017</h5>
                            </li>
                            <li class="btn-box">
                                <a href="{{route('request.quote')}}" class="theme-btn-four thm-btn">Request a Quote</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- header-lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="main-box clearfix">
                        <div class="menu-area pull-left clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="#">Home</a>

                                        </li>
                                        <li class=""><a href="{{route('about.us')}}">About</a>

                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>

                                                @foreach ($services as $service)
                                                <li><a href="{{route('a.service', $service->slug)}}">{{$service->name}}</a></li>
                                                @endforeach

                                            </ul>
                                        </li>

                                        <li><a href="{{route('contact.us')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content pull-right clearfix">
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-loupe"></i></button>
                                    <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                        <div class="form-container">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content pull-right clearfix">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-loupe"></i></button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                    <div class="form-container">
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="#"><img src="/onboarding/logos/edd-no-bg-black.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>1, rue des Heulines, 95000, Cergy</li>

                </ul>
            </div>

        </nav>
    </div><!-- End Mobile Menu -->
