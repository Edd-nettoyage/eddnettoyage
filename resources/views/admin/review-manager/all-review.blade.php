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

                                <h4 class="page-title">Review</h4>
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
                                                    <th>No.</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Review</th>
                                                    <th>Rating</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                                <!--end tr-->
                                            </thead>

                                            <tbody>
                                                @foreach ($reviews as $r)


                                                <tr>
                                                    <td>{{$loop->index += 1 }}</td>
                                                    <td>
                                                        <a>{{$r?->name}}</a>
                                                    </td>
                                                    <td>{{$r?->role}}</td>
                                                    <td>{{ Str::limit($r?->review, 30, ' (see more)') }}</td>
                                                    <td>{{$r?->rating}}</td>
                                                    <td>{{$r?->title}}</td>
                                                    <td>
                                                        @if ($r->approved == true)

                                                        <span title="This means its live." class="badge badge-soft-success">Approved</span>
                                                        @else
                                                        <span title="This means its not yet live." class="badge badge-soft-danger">Pending</span>
                                                        @endif
                                                    </td>

                                                    <td>{{$r?->created_at->diffForHumans()}}</td>
                                                    <td>

                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#viewReview-{{$r?->id}}" data-animation="bounce" class=""><i class="las la-eye text-secondary font-16"></i></a>

                                                        <a href="{{route('delete.review', $r?->id)}}"><i
                                                                class="las la-trash-alt text-secondary font-16"></i></a>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">

                                        <!--end col-->
                                        {{-- <div class="col-auto">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2 <span
                                                                class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                                <!--end pagination-->
                                            </nav>
                                            <!--end nav-->
                                        </div> --}}
                                        <!--end col-->
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

        <div class="col-lg-4 align-self-center">

            @foreach ($reviews as $r)

            <!--  Modal content for the above example -->
            <div class="modal fade bs-example-modal-lg" id="viewReview-{{$r?->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title mt-0" id="myLargeModalLabel">Edit Meta Details</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label mt-4" for="Name">Reviewer Name</label>
                                        <span class="form-control">{{$r?->name}}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label mt-4" for="Name">Reviewer Role</label>
                                        <span class="form-control">{{$r?->role}}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label mt-4" for="Name">Reviewer Title</label>
                                        <span class="form-control">{{$r?->title}}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label mt-4" for="Name">Reviewer Rating</label>
                                        <span class="form-control">{{$r?->rating}}</span>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label mt-4" for="Name">Review</label>
                                        <span class="form-control">{{$r?->review}}</span>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label mt-4" for="Name">Review</label>
                                        <span class="form-control">{{$r?->review}}</span>
                                    </div>

                                    @if ($r?->approved != true)

                                    <form action="{{route('status.review', $r?->id)}}" method="POST">

                                        @csrf
                                        <label class="form-label mt-4" for="Name">Change Status</label>

                                        <select name="status" id="" class="form-control">
                                            <option selected disabled> --Select--</option>
                                            <option value="1">Approve</option>
                                        </select>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Approve</button>

                                    </form>
                                    @else
                                    <form action="{{route('status.review', $r?->id)}}" method="POST">

                                        @csrf
                                        <label class="form-label mt-4" for="Name">Change Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option selected disabled> --Select--</option>
                                            <option value="0">Disapprove</option>
                                        </select>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Disapprove</button>

                                    </form>
                                    @endif

                                </div>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            @endforeach

        </div><!-- end col-->
    </x-slot>
</x-app-layout>
