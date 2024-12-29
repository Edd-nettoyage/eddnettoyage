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

                                <h4 class="page-title">Service</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">{{$service?->name}}</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-md-auto">
                                                    <div id="apex_radialbar4" class="apex-charts"></div>
                                                </div><!--end col-->
                                                <div class="col-md align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">{{$service?->name}}</h4>
                                                    <p class="text-muted mb-md-0">{!! Str::limit($service?->description, 30, ' (see more)') !!}
                                                    </p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!-- end col-->

                                    </div><!-- end row -->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center me-3 rounded-circle" src="{{$service?->image}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-1 font-15">Image</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        {{-- <li class="list-inline-item me-2"><span></span>{{$service?->name}}</li> --}}
                                                    </ul>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-end">
                                                <span><i class="mdi mdi-circle text-success me-1  font-10"></i></span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editImage" data-animation="bounce" class=""><i class="las la-pen text-secondary font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->


                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                {{-- <img class="d-flex align-self-center me-3 rounded-circle" src="/dash/images/small/opp-1.png" alt="" height="50"> --}}
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-1 font-15">Name</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item me-2"><span></span>{{$service?->name}}</li>
                                                    </ul>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-end">
                                                <span><i class="mdi mdi-circle text-success me-1  font-10"></i></span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editName" data-animation="bounce" class=""><i class="las la-pen text-secondary font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->


                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                {{-- <img class="d-flex align-self-center me-3 rounded-circle" src="/dash/images/small/opp-1.png" alt="" height="50"> --}}
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-1 font-15">Meta Title</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item me-2"><span></span>{{$service?->meta_title}}</li>
                                                    </ul>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-end">
                                                <span><i class="mdi mdi-circle text-success me-1  font-10"></i></span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editMetaDets" data-animation="bounce" class=""><i class="las la-pen text-secondary font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->


                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                {{-- <img class="d-flex align-self-center me-3 rounded-circle" src="/dash/images/small/opp-1.png" alt="" height="50"> --}}
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-1 font-15">Meta Description</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item me-2"><span></span>{{$service?->meta_description}}</li>
                                                    </ul>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-end">
                                                <span><i class="mdi mdi-circle text-success me-1  font-10"></i></span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editMetaDets" data-animation="bounce" class=""><i class="las la-pen text-secondary font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->


                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                {{-- <img class="d-flex align-self-center me-3 rounded-circle" src="/dash/images/small/opp-1.png" alt="" height="50"> --}}
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-1 font-15">Description</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item me-2"><span></span>{!!$service?->description!!}</li>
                                                    </ul>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-end">
                                                <span><i class="mdi mdi-circle text-success me-1  font-10"></i></span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editDescription" data-animation="bounce" class=""><i class="las la-pen text-secondary font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->


                        </div><!--end col-->


                    </div><!--end row-->

                </div><!-- container -->

                {{-- Modals Edit --}}

                {{-- Edit image --}}
                <div class="col-lg-4 align-self-center">

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" id="editImage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title mt-0" id="myLargeModalLabel">Edit Image</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('edit.service', $service?->id)}}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="Image">Image</label>
                                                <input type="file" accept="image/*" class="form-control form-control-sm" name="image"  required>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Edit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- end col-->
                {{-- Edit name --}}
                <div class="col-lg-4 align-self-center">

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" id="editName" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title mt-0" id="myLargeModalLabel">Edit Name</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('edit.service', $service?->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="Name">Name</label>
                                                <input type="text" class="form-control form-control-sm" name="name" value="{{$service?->name}}" required>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Edit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- end col-->

                {{-- Edit meta_dets --}}
                <div class="col-lg-4 align-self-center">

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" id="editMetaDets" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title mt-0" id="myLargeModalLabel">Edit Meta Details</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('edit.service', $service?->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="Name">Meta Title</label>
                                                <input type="text" class="form-control form-control-sm" name="meta_title" value="{{$service?->meta_title}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="Name">Meta Description</label>
                                                <input type="text" class="form-control form-control-sm" name="meta_description" value="{{$service?->meta_description}}" required>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Edit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- end col-->

                {{-- Edit description --}}
                <div class="col-lg-4 align-self-center">

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" id="editDescription" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title mt-0" id="myLargeModalLabel">Edit Description</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('edit.service', $service?->id)}}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-12">
                                                <label class="form-label" for="Name">Description</label>
                                                <textarea class="form-control" id="editor" name="description" rows="5" id="pro-message" required>
                                                    {!!$service?->description!!}
                                                </textarea>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Edit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- end col-->

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

        <script src="/dash/libs/apexcharts/apexcharts.min.js"></script>
        <script>
            var options = {
                chart: {
                    height: 170,
                    type: 'radialBar',
                    toolbar: {
                    show: false
                    }
                },
                plotOptions: {
                    radialBar: {
                    hollow: {
                        margin: 0,
                        size: "70%",
                        background: 'transparent',
                    },

                    dataLabels: {
                        name: {
                        offsetY: -5,
                        fontSize: "13px",
                        },
                        value: {
                        offsetY: 5,
                        fontSize: "18px",
                        show: true
                        }
                    }
                    }
                },
                colors:['#2c74de'],
                series: [10],
                stroke: {
                    lineCap: 'round'
                },
                labels: ['Request On this Service'],

            }

            var chart = new ApexCharts(
                document.querySelector("#apex_radialbar4"),
                options
            );

            chart.render();
        </script>
    </x-slot>
</x-app-layout>
