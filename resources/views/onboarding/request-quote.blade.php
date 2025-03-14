<x-guest-layout>

    <x-slot name="body">


        <!-- Page Title -->
        <section class="page-title style-two centred"
        style="background-image: url(/onboarding/images/background/kitchen.webp);">

            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Book Nettoyage Services</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('welcome')}}">Welcome</a></li>
                        <li>Request Quote</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- faq-section -->
        <section class="faq-section sec-pad bg-color-3">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content_block_14">
                            <div class="content-box">
                                <div class="sec-title text-left">
                                    <h6>Request Quote</h6>
                                    <h2>Choose a service</h2>
                                </div>
                                <ul class="accordion-box">

                                    @foreach ($services as $service)

                                    <li class="accordion block active-block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-sort-down"></i></div>
                                            <h5>{{$service->name}}</h5>
                                        </div>
                                        <div class="acc-content">
                                            <x-service-form-component />
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section end -->
    </x-slot>

</x-guest-layout>
