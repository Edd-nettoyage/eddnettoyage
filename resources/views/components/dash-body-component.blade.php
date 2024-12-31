<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">

                <!--end col-->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">{{$services->count()}}</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Services</h6>
                                </div>
                                <!--end col-->
                                <div class="col-auto position-reletive">
                                    <i
                                        class="las la-bed display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div>
                                <!--end col-->
                            </div> <!-- end row -->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">{{$bookings?->count()}}</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Bookings</h6>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-phone  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div>
                                <!--end col-->
                            </div> <!-- end row -->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">{{$affiliates?->count()}}</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Affiliates</h6>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-stethoscope  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div>
                                <!--end col-->
                            </div> <!-- end row -->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">{{$reviews?->count()}}</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Reviews</h6>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-user-nurse  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div>
                                <!--end col-->
                            </div> <!-- end row -->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>

            </div>
            <!--end row-->


            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Bookings</h4>
                        </div>

                        <div class="col-auto">
                            <a href="{{route('all.booking.view')}}">View all</a>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Admin Response</th>
                                                <th>Service Status</th>
                                                <th>Urgency</th>
                                                <th>Service Date</th>
                                                <th>Service Time</th>
                                                <th>Service Name</th>
                                                <th>Service Location</th>
                                                <th>Service Description</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>

                                        <tbody>
                                            @foreach($bookings->take(4) as $booking)
                                            <tr>
                                                <td>{{ $booking?->name }}</td>
                                                <td>{{ $booking?->email }}</td>
                                                <td>{!!  Str::limit( $booking?->admin_response, 30, ' (see more)') !!}</td>
                                                <td>{{ $booking?->service_status }}</td>
                                                <td>{{ $booking?->urgency }}</td>
                                                <td>{{ $booking?->service_date }}</td>
                                                <td>{{ $booking?->service_time }}</td>
                                                <td>{{ $booking?->service->name }}</td>
                                                <td>{{ $booking?->service_location }}</td>
                                                <td>{{ Str::limit($booking?->service_description, 30, ' (see more)')}}</td>
                                                <td class="text-right">
                                                    <a title="See this request Fully." data-bs-toggle="modal"
                                                        data-bs-target="#viewBooking-{{$booking->id}}" data-animation="bounce"
                                                        href="#" class="mr-2">
                                                        <i class="las la-eye text-secondary font-16"></i>
                                                    </a>
                                                    <a title="Respond to this request" data-bs-toggle="modal"
                                                    data-bs-target="#mailBooker-{{$booking->id}}" data-animation="bounce">
                                                        <i class="las la-envelope text-secondary font-16"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!--end tr-->
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


            </div><!-- container -->

            <div class="row">

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                {{-- <div class="col">
                                    <h4 class="card-title">Today available Doctors</h4>
                                </div> --}}
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        {{-- <div class="card-body dash-info-carousel">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <h6 class="mt-0 text-start">Edd Nettoyage</h6>
                                                <div class="media mt-3">
                                                    <img src="/dash/images/users/dr-1.jpg" alt="" height="70"
                                                        class="rounded-circle">
                                                    <div class="media-body align-self-center ms-3">
                                                        <h5 class="mt-0 mb-1 font-15"></h5>
                                                        <p class="text-muted mb-0"><span
                                                                class="me-2 text-secondary">MS Cardiology</span>
                                                            11:00am to 03:00pm</p>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item m-0"><i
                                                                    class="mdi mdi-star text-warning font-16"></i>
                                                            </li>
                                                            <li class="list-inline-item m-0"><i
                                                                    class="mdi mdi-star text-warning font-16"></i>
                                                            </li>
                                                            <li class="list-inline-item m-0"><i
                                                                    class="mdi mdi-star text-warning font-16"></i>
                                                            </li>
                                                            <li class="list-inline-item m-0"><i
                                                                    class="mdi mdi-star text-warning font-16"></i>
                                                            </li>
                                                            <li class="list-inline-item m-0"><i
                                                                    class="mdi mdi-star-half text-warning font-16"></i>
                                                            </li>
                                                            <li class="list-inline-item m-0"><small
                                                                    class="text-muted">4.91/5 (1021 reviews)</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end media-body-->
                                                </div>
                                                <!--end media-->
                                                <hr class="hr-dashed">
                                                <div class="p-2 bg-light">
                                                    <div class="media">
                                                        <h3>68</h3>
                                                        <div class="media-body align-self-center ms-3">
                                                            <p
                                                                class="mb-0 font-weight-semibold text-uppercase text-dark-alt">
                                                                Appointments</p>
                                                            <p class="mb-0 text-muted">Last Saturday 52 Appointments
                                                            </p>
                                                        </div>
                                                        <!--end media-body-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->

                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div> --}}
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>

                <!-- end col-->

                @foreach ($bookings as $booking)

                <div class="col-lg-4 align-self-center">

                    <!-- Modal content for the booking details -->
                    <div class="modal fade bs-example-modal-lg" id="viewBooking-{{$booking?->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title mt-0" id="myLargeModalLabel">Booking Details</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Booking Information Display -->

                                    <div class="row">
                                        <div class="col-md-6 mt-4">

                                            <strong>Name:</strong> <span class="form-control">{{ $booking?->name }}</span>
                                        </div>
                                        <div class="col-md-6 mt-4">

                                            <strong class="mt-4">Email:</strong> <span class="form-control">{{ $booking?->email }}</span>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 mt-4">

                                            <strong class="mt-4">Admin Response:</strong> <span class="form-control">{!!  Str::limit( $booking?->admin_response, 30, ' (see more)') !!}</span>

                                        </div>
                                        <div class="col-md-6 mt-4">

                                            <strong class="mt-4">Service Status:</strong> <span class="form-control">{{ $booking?->service_status }}</span>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 mt-4">
                                            <strong class="mt-4">Urgency:</strong> <span class="form-control">{{ $booking?->urgency }}</span>

                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <strong class="mt-4">Service Location:</strong> <span class="form-control">{{ $booking?->service_location }}</span>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 mt-4">

                                            <strong class="mt-4">Service Date:</strong> <span class="form-control">{{ $booking?->service_date }}</span>

                                        </div>
                                        <div class="col-md-6 mt-4">

                                            <strong class="mt-4">Service Time:</strong> <span class="form-control">{{ $booking?->service_time }}</span>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-12 mt-4">

                                            <strong class="mt-4">Service Description:</strong> <span class="form-control">{{ $booking?->service_description
                                                }}</span>
                                        </div>


                                    </div>

                                    <form action="{{route('update.booking.status', $booking->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mt-4">
                                                <label class="form-label" for="Name">Service Status</label>

                                                <select name="service_status" class="form-control form-control-sm" id="">
                                                    <option selected disabled>--Select--</option>
                                                    <option value="Seen">Seen</option>
                                                    <option value="Booked">Booked</option>
                                                    <option value="Done">Done</option>
                                                </select>

                                                {{-- <input type="text" class="form-control form-control-sm" name="name" value="{{$service?->name}}" required> --}}
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Update</button>
                                    </form>
                                    <!-- End of booking information -->
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- end col-->
                <div class="col-lg-4 align-self-center">

                    <!-- Modal content for the booking details -->
                    <div class="modal fade bs-example-modal-lg" id="mailBooker-{{$booking?->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title mt-0" id="myLargeModalLabel">Mailer</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Booking Information Display -->

                                    <form action="{{route('reply.booker.mail', $booking?->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mt-4">
                                                <label class="form-label" for="Name">Message</label>

                                                <input type="hidden" value="{{$booking?->email}}" name="email">
                                                <textarea name="admin_response" class="form-control" id="editor" cols="30" rows="10"></textarea>

                                                {{-- <input type="text" class="form-control form-control-sm" name="name" value="{{$service?->name}}" required> --}}
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Mail</button>
                                    </form>
                                    <!-- End of booking information -->
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- end col-->
                @endforeach


            </div>
        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center"
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
            </div>
            <!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        {{$dashfooter}}
    </div>
    <!-- end page content -->



</div>
