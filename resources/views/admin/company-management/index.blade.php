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

                                <h4 class="page-title">Create Affiliate</h4>
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
                                    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-2">
                                            <label for="logo">Logo:</label>
                                            <input type="file" class="form-control" name="logo" id="logo" required>
                                            @error('logo')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control " name="name" id="name" placeholder="Enter company name" required>
                                            @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="name">Link to you website or socials:</label>
                                            <input type="text" class="form-control" name="link"  placeholder="https://eddsnettoyage.fr/" >
                                            @error('link')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-2">Save Company</button>
                                    </form>


                                </div>

                                <!--end col-->

                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Affiliate List</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Logo</th>
                                                    <th>Company Name</th>
                                                    <th>Website Link</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($items as $item)
                                                <tr>
                                                    <td>
                                                        <img src="{{ $item->logo }}" alt="Company Logo" width="50" height="50">
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a title="Edit this Company" style="cursor: pointer" data-bs-toggle="modal"
                                                        data-bs-target="#editCompany-{{$item->id}}" data-animation="bounce" class="mr-2">
                                                            <i class="las la-pen text-secondary font-16"></i>
                                                        </a>
                                                        <a title="Delete this Company" href="{{ route('affiliate.delete', $item->id) }}">
                                                            <i class="las la-trash-alt text-secondary font-16"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-auto">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item">
                                                        {{-- {{ $items->links() }} --}}
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>

                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->

        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <x-slot name="dashfooter">

            <x-dash-footer-component />

        </x-slot>
        <!-- end Footer -->
        <!--end footer-->
        </div>
        <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        @foreach ($items as $item)
        <div class="col-lg-4 align-self-center">
            <!-- Modal content for the company details -->
            <div class="modal fade bs-example-modal-lg" id="editCompany-{{$item->id}}" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title mt-0" id="myLargeModalLabel">Edit Affiliate</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('affiliate.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    <!-- Logo Upload -->
                                    <div class="col-md-6 mt-4">
                                        <label class="form-label" for="Logo">Affiliate Logo</label>
                                        <input type="file" class="form-control" name="logo" accept="image/*">
                                        <div class="mt-2">
                                            <img src="{{ $item->logo }}" alt="Company Logo" width="100">
                                        </div>
                                    </div>

                                    <!-- Company Name -->
                                    <div class="col-md-6 mt-4">
                                        <label class="form-label" for="Name">Affiliate Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
                                    </div>

                                    <!-- Website Link -->
                                    <div class="col-md-12 mt-4">
                                        <label class="form-label" for="Link">Website Link</label>
                                        <input type="url" class="form-control" name="link" value="{{ $item->link }}" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-4">Update</button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div><!-- end col-->
    @endforeach



    </x-slot>
</x-app-layout>
