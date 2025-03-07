<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="index.html" class="logo logo-metrica d-block text-center">
            <span>
                <img style="height: 50px; width: 50px" src="/dash/logos/edd-no-bg-black.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home "></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Booking" data-bs-trigger="hover">
                        <a href="#MetricaBooking" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-ticket "></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Services" data-bs-trigger="hover">
                        <a href="#MetricaServices" id="apps-tab" class="nav-link">
                            <i class="ti ti-briefcase "></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Website Builder" data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link">
                            <i class="ti ti-apps "></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->


                    {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Faqs" data-bs-trigger="hover">
                        <a href="#Faq" id="apps-tab" class="nav-link">
                            <i class="ti ti-question-mark menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Company" data-bs-trigger="hover">
                        <a href="#Company" id="apps-tab" class="nav-link">
                            <i class="ti ti-box menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Coverage" data-bs-trigger="hover">
                        <a href="#Work" id="apps-tab" class="nav-link">
                            <i class="ti ti-receipt menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item--> --}}

                    {{--

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit" data-bs-trigger="hover">
                        <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                            <i class="ti ti-planet menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="ti ti-files menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" data-bs-trigger="hover">
                        <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                            <i class="ti ti-shield-lock menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item--> --}}
                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->

    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="#" class="logo">
                <span>

                    EDD NETTOYAGE
                    {{-- <img style="height: 100px; width: 100px" src="/dash/logos/edd-no-bg-black.png" alt="logo-large" class="logo-lg logo-dark">
                    <img style="height: 100px; width: 100px" src="/dash/logos/edd-no-bg-black.png" alt="logo-large" class="logo-lg logo-light"> --}}
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>

                    </h6>
                </div>
            </div><!-- end Dashboards -->
            <div id="MetricaBooking" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Booking</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('all.booking.view')}}">All Booking</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('seen.booking.view')}}">Seen Booking</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('booked.booking.view')}}">Booked Booking</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('done.booking.view')}}">Done Booking</a>
                        </li><!--end nav-item-->


                    </ul><!--end nav-->
                </div>
            </div><!-- end Dashboards -->
            <div id="MetricaServices" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Services</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('create.service.view')}}">Create Services</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('all.service.view')}}">All Services</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('create.category.view')}}">Create Category</a>
                        </li><!--end nav-item-->
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Active Services</a>
                        </li><!--end nav-item--> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="crm-index.html">CRM</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="projects-index.html">Project</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="helpdesk-index.html">Helpdesk</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="hospital-index.html">Hospital</a>
                        </li><!--end nav-item--> --}}
                    </ul><!--end nav-->
                </div>
            </div><!-- end Dashboards -->
            <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage FAQ's</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faq.view')}}">Create Question/Answers</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                    <h6 class="menu-title">Manage Company</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('company.view')}}">Create Company</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                    <h6 class="menu-title">Manage Coverage</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('coverage.view')}}">Create Coverage</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                    <h6 class="menu-title">Manage How It works section</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('work.view')}}">Create Work</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                    <h6 class="menu-title">Manage Reviews</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('all.review.view')}}">All reviews</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                </div>
            </div><!-- end Dashboards -->
            {{-- <div id="Company" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Company</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('company.view')}}">Create Company</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                </div>
            </div><!-- end Dashboards -->
            <div id="Coverage" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Coverage</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('coverage.view')}}">Create Coverage</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                </div>
            </div><!-- end Dashboards -->
            <div id="Work" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage How It works section</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('work.view')}}">Create Work</a>
                        </li><!--end nav-item-->

                    </ul><!--end nav-->
                </div>
            </div><!-- end Dashboards --> --}}

        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end leftbar-tab-menu-->
