<x-guest-layout>



    <x-slot name="body">
        <!-- Page Title -->
     <section class="page-title style-two centred" style="background-image: url(/onboarding/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Register Admin</h1>
                </div>

            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- myaccount-section -->
    <section class="myaccount-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div style="margin: auto" class="col-lg-6 col-md-12 col-sm-12 column">
                    <div class="register-inner">
                        <h3>Register</h3>
                        <form action="#" method="post" class="register-form">
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Your Name*" required="">
                            </div>
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input type="email" name="email" placeholder="Emai Address*" required="">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-lock-open"></i>
                                <input type="password" name="password" placeholder="Enter Password" required="">
                            </div>
                            <div class="form-group btn-box">
                                <button type="submit" class="theme-btn-four thm-btn">Register</button>
                            </div>
                        </form>
                        <div class="text"><p><span>*</span>This registeration is just for the admin.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- myaccount-section end -->
    </x-slot>




</x-guest-layout>
