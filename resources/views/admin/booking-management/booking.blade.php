<x-app-layout>
    <x-slot name="dashbody">


        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">

                                <h4 class="page-title">All Bookings</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
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
                                                </tr><!--end tr-->
                                            </thead>

                                            <tbody>
                                                @foreach($bookings as $booking)
                                                <tr>
                                                    <td>{{ $booking?->name }}</td>
                                                    <td>{{ $booking?->email }}</td>
                                                    <td>{{ $booking?->admin_response }}</td>
                                                    <td>{{ $booking?->service_status }}</td>
                                                    <td>{{ $booking?->urgency }}</td>
                                                    <td>{{ $booking?->service_date }}</td>
                                                    <td>{{ $booking?->service_time }}</td>
                                                    <td>{{ $booking?->service->name }}</td>
                                                    <td>{{ $booking?->service_location }}</td>
                                                    <td>{{ $booking?->service_description }}</td>
                                                    <td class="text-right">
                                                        <a href="#" class="mr-2">
                                                            <i class="las la-pen text-secondary font-16"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="las la-trash-alt text-secondary font-16"></i>
                                                        </a>
                                                    </td>
                                                </tr><!--end tr-->
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="row">

                                        <div class="col-auto">
                                            <nav aria-label="...">

                                                <ul class="pagination pagination-sm mb-0">

                                                    <li class="page-item">
                                                {{ $bookings->links() }}

                                                    </li>

                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->
                                         </div> <!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->


                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

    </x-slot>
</x-app-layout>
