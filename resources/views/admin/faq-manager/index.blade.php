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

                                <h4 class="page-title">Create Question/Answer</h4>
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
                                    <form action="{{ route('faq.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="question" class="form-label">Question:</label>
                                                    <input type="text" class="form-control" name="question" id="question"
                                                        placeholder="Enter the question" required>
                                                    @error('question')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label mt-2" for="answer">Answer:</label>
                                                <textarea class="form-control" name="answer" id="answer" rows="5"
                                                    placeholder="Write the answer here..." required></textarea>
                                                @error('answer')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-de-primary btn-sm">Create</button>
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

                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Faq list</h4>
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
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td>{{ $item?->question }}</td>
                                                <td>{{ $item?->answer }}</td>
                                                <td class="text-right">
                                                    <a title="Edit this FAQ" style="cursor: pointer"  data-bs-toggle="modal"
                                                    data-bs-target="#editFaq-{{$item?->id}}" data-animation="bounce" class="mr-2">
                                                        <i class="las la-pen text-secondary font-16"></i>
                                                    </a>
                                                    <a title="Delete this FAQ" href="{{ route('faq.delete', $item->id) }}">
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
                                            <!--end pagination-->
                                        </nav>
                                        <!--end nav-->
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
                </div>
                <!--end row-->
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

            <!-- Modal content for the booking details -->
            <div class="modal fade bs-example-modal-lg" id="editFaq-{{$item?->id}}" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title mt-0" id="myLargeModalLabel">Faqs Edit</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <form action="{{route('faq.update', $item?->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                        <label class="form-label" for="Name">Question</label>

                                        <input type="text" class="form-control" name="question" value="{{$item?->question}}">

                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label class="form-label" for="Name">Answer</label>

                                        <textarea name="answer" class="form-control" id="" cols="30" rows="10">
                                            {{$item?->answer}}
                                        </textarea>

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
        @endforeach

    </x-slot>
</x-app-layout>
