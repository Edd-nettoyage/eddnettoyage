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

                                <h4 class="page-title">Create </h4>
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
                                    <form action="{{ route('work.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Enter title">
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Icons:</label>

                                            <select name="icon" id="" class="form-control">
                                                <option selected> --Select --</option>
                                                <option value="chat"> flaticon-chat </option>
                                                <option value="calculator"> flaticon-calculator </option>
                                                <option value="brush"> flaticon-brush </option>
                                                <option value="virus"> flaticon-virus </option>
                                            </select>
                                            @error('icon')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="summary">Summary:</label>
                                            <input type="text" class="form-control" id="summary" name="summary"
                                                placeholder="Enter summary">
                                            @error('summary')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-4">Submit</button>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="page-title">Works List</h4>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Title</th>
                                                <th>Summary</th>
                                                <th>Icon</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td>{{ $item?->title }}</td>
                                                <td>{{ Str::limit($item?->summary, 60) }}</td>
                                                <td>
                                                    {{$item?->icon}}
                                                </td>
                                                <td class="text-right">
                                                    <a data-bs-toggle="modal" data-bs-target="#editWork-{{$item?->id}}"
                                                        title="Edit Work">
                                                        <i class="las la-pen text-secondary font-16"></i>
                                                    </a>
                                                    <a href="{{ route('works.delete', $item?->id) }}"
                                                        title="Delete Work">
                                                        <i class="las la-trash-alt text-secondary font-16"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <!-- Modal for Editing -->
                                            <div class="modal fade" id="editWork-{{$item->id}}" tabindex="-1"
                                                aria-labelledby="editWorkLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Work</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('works.update', $item->id) }}"
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
                                                                        <label for="summary">Summary</label>
                                                                        <textarea name="summary" class="form-control"
                                                                            rows="4"
                                                                            required>{{ $item->summary }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="icon">Change Icon (Optional)</label>

                                                                        <label for="title">Icons:</label>

                                                                        <select name="icon" id="" class="form-control">
                                                                            <option value="{{$item?->icon}}"> {{$item?->icon}}</option>
                                                                            <option value="chat"> flaticon-chat
                                                                            </option>
                                                                            <option value="calculator">
                                                                                flaticon-calculator </option>
                                                                            <option value="brush"> flaticon-brush
                                                                            </option>
                                                                            <option value="virus"> flaticon-virus
                                                                            </option>
                                                                        </select>

                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-de-primary btn-sm mt-4">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- <div class="pagination justify-content-end">
                                    {{ $items->links() }}
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <!--end col-->
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Create commitment </h4>
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
                                    <form action="{{ route('commitment.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Enter title">
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-de-primary btn-sm mt-4">Submit</button>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="page-title">Commitments List</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Title</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($coms as $com)
                                                <tr>
                                                    <td>{{ $com->title }}</td>
                                                    <td class="text-right">
                                                        <a data-bs-toggle="modal" data-bs-target="#editCommitment-{{$com->id}}"
                                                           title="Edit Commitment">
                                                            <i class="las la-pen text-secondary font-16"></i>
                                                        </a>
                                                        <a href="{{ route('commitment.delete', $com->id) }}"
                                                           title="Delete Commitment">
                                                            <i class="las la-trash-alt text-secondary font-16"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <!-- Modal for Editing -->
                                                <div class="modal fade" id="editCommitment-{{$com->id}}" tabindex="-1"
                                                     aria-labelledby="editCommitmentLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Commitment</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('commitment.update', $com->id) }}" method="POST">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <label for="title">Title</label>
                                                                            <input type="text" name="title" class="form-control"
                                                                                   value="{{ $com->title }}" required>
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
                                                </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- <div class="pagination justify-content-end">
                                        {{ $coms->links() }}
                                    </div> --}}
                                </div>
                            </div>
                        </div>
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

    </x-slot>
</x-app-layout>
