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

                                <h4 class="page-title">Create Services</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label for="projectName" class="form-label">Service Name :</label>
                                                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter service name">
                                                </div><!--end form-group-->
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                            <label class="form-label mt-2" for="pro-start-date">Project Start Date</label>
                                                            <input type="text" class="form-control" id="pro-start-date" placeholder="Enter start date">
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                            <label class="form-label mt-2" for="pro-end-date">Project End Date</label>
                                                            <input type="text" class="form-control" id="pro-end-date" placeholder="Enter end date">
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6">
                                                            <label class="form-label mt-2" for="pro-rate">Rate/Hr</label>
                                                            <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                                                        </div><!--end col-->
                                                        {{-- <div class="col-lg-3 col-6">
                                                            <label class="form-label mt-2" for="pro-end-date">Price Type</label>
                                                            <select class="form-select">
                                                                <option>Hourly</option>
                                                                <option>Daily</option>
                                                                <option>Fix</option>
                                                            </select>
                                                        </div><!--end col--> --}}
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <label class="form-label mt-2" for="pro-end-date">Category</label>
                                                            <select class="form-select">
                                                                <option>--Select--</option>
                                                                <option>UI/UX Design</option>
                                                                <option>Payment System </option>
                                                                <option>Android 10</option>
                                                            </select>
                                                        </div><!--end col-->

                                                        <div class="col-lg-3 col-6">
                                                            <label class="form-label mt-2" for="pro-end-date">Priority</label>
                                                            <select class="form-select">
                                                                <option>-- select --</option>
                                                                <option>High</option>
                                                                <option>Medium</option>
                                                                <option>Low</option>
                                                            </select>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class="form-group mb-3">
                                                    <label class="form-label mt-2" for="pro-message">Description</label>
                                                    {{-- <div id="editor"></div> --}}
                                                    <textarea class="form-control" id="editor" rows="5" id="pro-message"  placeholder="writing here.."></textarea>
                                                </div><!--end form-group-->

                                                <button type="submit" class="btn btn-de-primary btn-sm">Create Service</button>
                                            </form>  <!--end form-->
                                        </div><!--end col-->
                                        <div class="col-lg-5 ms-auto align-self-center">
                                            <form>
                                                <div class="form-group">
                                                    <label for="pro-avatar">Service Image</label>
                                                    <img src="/dash/images/small/project-3.jpg" alt="" class="thumb-lg rounded mx-3">
                                                    <label class="btn btn-de-primary btn-sm text-light">
                                                        Insert Image <input type="file" hidden>
                                                    </label>
                                                </div><!--end form-group-->

                                            </form>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
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
                <x-slot name="dashfooter">

                    <x-dash-footer-component/>

                </x-slot>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->






    </x-slot>
</x-app-layout>
