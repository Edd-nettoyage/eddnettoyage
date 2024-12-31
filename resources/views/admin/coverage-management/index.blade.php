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

                                <h4 class="page-title">Add Coverage </h4>
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
                                    <form action="{{ route('coverage.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Enter title" required>
                                            @error('title')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Image:</label>
                                            <input type="file" class="form-control" name="image" id="image" required>
                                            @error('image')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit"
                                            class="btn btn-sm btn-de-primary btn-sm mt-2">Upload</button>
                                    </form>


                                </div>

                                <!--end col-->

                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="page-title">Coverage List</h4>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <img src="{{ $item->image }}" alt="Coverage Image" width="60"
                                                        height="60">
                                                </td>
                                                <td class="text-right">
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#editCoverage-{{$item->id}}"
                                                        title="Edit Coverage">
                                                        <i class="las la-pen text-secondary font-16"></i>
                                                    </a>
                                                    <a href="{{ route('coverage.delete', $item->id) }}"
                                                        title="Delete Coverage">
                                                        <i class="las la-trash-alt text-secondary font-16"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <!-- Modal for Editing -->
                                            {{-- <div class="modal fade" id="editCoverage-{{$item->id}}" tabindex="-1"
                                                aria-labelledby="editCoverageLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Coverage</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('coverage.update', $item->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="title">Title</label>
                                                                        <input type="text" name="title"
                                                                            class="form-control"
                                                                            value="{{ $item->title }}" required>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="image">Change Image
                                                                            (Optional)</label>
                                                                        <input type="file" name="image"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pagination justify-content-end">
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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


        <div class="modal fade" id="editCoverage-{{$item->id}}" tabindex="-1" aria-labelledby="editCoverageLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Coverage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('coverage.update', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $item->title }}"
                                        required>


                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="image">Change Image (Optional)</label>
                                    <input type="file" name="image" accept="image/*" class="form-control">
                                    <div class="mt-2">
                                        <img src="{{ $item?->image }}" alt="Company Logo" width="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-4">Update</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        @endforeach


    </x-slot>
</x-app-layout>
