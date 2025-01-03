<!-- Top Bar Start -->
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">
                <ul class="list-unstyled topbar-nav float-end mb-0">
                    {{-- <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="/dash/images/flags/french_flag.jpg" alt="" class="thumb-xxs rounded-circle">
                    </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="#"><img src="/dash/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                            <a class="dropdown-item" href="#"><img src="/dash/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                        </div>
                    </li><!--end topbar-language--> --}}

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Emails <span class="badge bg-soft-primary badge-pill">Latest 3</span>
                            </h6>
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->

                                @foreach ($bookings->take(3) as $b)

                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">{{$b?->created_at->diffForHumans()}}</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="/dash/logos/edd-no-bg-black.png" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Admin</h6>
                                            <small class="text-muted mb-0">{!! Str::limit( $b?->admin_response, 30 , '...') !!}</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                @endforeach

                                <!-- item-->

                            </div>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            @if (!$bookings->where('service_status', 'Pending')->isEmpty())
                            <span class="alert-badge"></span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge bg-soft-primary badge-pill">Latest 3</span>
                            </h6>
                            <div class="notification-menu" data-simplebar>

                                @foreach ($bookings->where('service_status', 'Pending') as $b)

                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">{{$b?->created_at->diffForHumans()}}</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-chart-arcs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">{{$b?->email}}</h6>
                                            <small class="text-muted mb-0">{{ Str::limit($b?->service_description, 30 , '...')}}</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                @endforeach
                                <!-- item-->

                                <!-- item-->

                            </div>
                            <!-- All-->
                            <a href="{{route('all.booking.view')}}" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="/dash/logos/edd-no-bg-black.png" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">Admin</small>
                                    <span class="d-none d-md-block fw-semibold font-12">Edd Nettoyage<i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            {{-- <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a> --}}
                            <div class="dropdown-divider mb-0"></div>
                            <sapn class="dropdown-item">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <i class="ti ti-power font-16 me-1 align-text-bottom"></i>
                                    <button style="border: none;" type="submit">Logout</button>
                                </form>
                            </span>
                        </div>
                    </li><!--end topbar-profile-->
                    {{-- <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-settings ti-spin"></i>
                        </a>
                    </li> --}}
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <!-- Top Bar End -->
