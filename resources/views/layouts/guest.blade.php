<!DOCTYPE html>
<html lang="en">

<?php
        setcookie('googtrans', '/en/fr');
        // setcookie('googtrans', '/en/en');
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <meta
        content="Edd Nettoyage offers top-tier cleaning services for homes, offices, and commercial spaces. Our expert team ensures a spotless environment with eco-friendly solutions and professional care. Book a cleaning service with us today for a fresh and healthy space."
        name="description" />

    <meta property="og:title" content="Edd Nettoyage - Professional Cleaning Services" />
    <meta property="og:description"
        content="Expert cleaning services for homes and businesses. Edd Nettoyage ensures quality, efficiency, and a pristine environment with top professionals." />
    <meta property="og:image" content="https://edd-nettoyage.fr/onboarding/logos/edd-no-bg-black.png" />
    <meta property="og:url" content="https://edd-nettoyage.fr" />
    <meta property="og:type" content="website" />
    <meta content="Edd Nettoyage - Professional Cleaning Services" property="twitter:title" />
    <meta
        content="Edd Nettoyage provides top-tier cleaning solutions for homes and businesses, ensuring a spotless and hygienic environment with expert care."
        property="twitter:description" />
    <meta content="https://edd-nettoyage.fr/onboarding/logos/edd-no-bg-black.png" property="twitter:image" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    <title>EddNettoyage</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/onboarding/logos/edd-no-bg-black.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    {{-- Google maps are locator --}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&libraries=places" async
        defer></script>


    {{-- sombories api key --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    --}}

    {{--
    <meta name="google-site-verification" content="U0tOs2aOP6gkSxHNhPSx6F79z6qjrYnXsHlQb_dfCPo" /> --}}


    <meta name="google-site-verification" content="87A1d8XGNqqv4mSoNrujouRGBpw5GaSLWbSbVJ4EG98" />

    <!-- Stylesheets -->
    <link href="/onboarding/css/font-awesome-all.css" rel="stylesheet">
    <link href="/onboarding/css/flaticon.css" rel="stylesheet">
    <link href="/onboarding/css/owl.css" rel="stylesheet">
    <link href="/onboarding/css/bootstrap.css" rel="stylesheet">
    <link href="/onboarding/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/onboarding/css/animate.css" rel="stylesheet">
    <link href="/onboarding/css/nice-select.css" rel="stylesheet">
    <link href="/onboarding/css/color.css" rel="stylesheet">
    <link href="/onboarding/css/style.css" rel="stylesheet">
    <link href="/onboarding/css/responsive.css" rel="stylesheet">
    <style>
        /* Hide the Google Translate iframe banner */
        iframe.goog-te-banner-frame {
            display: none !important;
        }

        /* Ensure no layout shift occurs */
        body {
            top: 0 !important;
        }

        /* Hide Google Translate's inline menu frame */
        .goog-te-menu-frame {
            display: none !important;
        }

        .goog-te-banner-frame {
            z-index: 1 !important;
            /* Force toolbar to a lower layer */
        }

        #my-content {
            position: relative;
            /* Or absolute/fixed if necessary */
            z-index: 99999999;
            /* Very high value to bring it to the front */
        }
    </style>



    <style>
        .page-bg {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #ffffff, #ffffff);
            z-index: -1;
        }
    </style>



    @yield('hide')

</head>




<!-- page wrapper -->

<body>

    @include('sweetalert::alert')


    {{-- <div id="google_translate_element"> --}}


        <div id="my-content" class="boxed_wrapper green-color">


            {{-- <div id="google_translate_element"></div> --}}

            <!-- preloader -->
            <div class="loader-wrap">
                <div class="preloader green-color">
                    <div class="preloader-close">Preloader Close</div>
                    <div id="handle-preloader" class="handle-preloader">
                        <div class="animation-preloader">
                            <div class="spinner"></div>
                            <div class="txt-loading">
                                <span data-text-preloader="E" class="letters-loading">
                                    E
                                </span>
                                <span data-text-preloader="d" class="letters-loading">
                                    d
                                </span>
                                <span data-text-preloader="d" class="letters-loading">
                                    d
                                </span>
                                <span data-text-preloader="n" class="letters-loading">
                                    n
                                </span>
                                <span data-text-preloader="e" class="letters-loading">
                                    e
                                </span>
                                <span data-text-preloader="t" class="letters-loading">
                                    t
                                </span>
                                <span data-text-preloader="t" class="letters-loading">
                                    t
                                </span>
                                <span data-text-preloader="o" class="letters-loading">
                                    o
                                </span>
                                <span data-text-preloader="y" class="letters-loading">
                                    y
                                </span>
                                <span data-text-preloader="a" class="letters-loading">
                                    a
                                </span>
                                <span data-text-preloader="g" class="letters-loading">
                                    g
                                </span>
                                <span data-text-preloader="e" class="letters-loading">
                                    e
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- preloader end -->


            <x-header-layout-component />



            {{$body}}



            <x-footer-layout-component />


            <!--Scroll to top-->
            <button class="scroll-top scroll-to-target" data-target="html">
                <span class="flaticon-up-arrow"></span>
            </button>
        </div>

        <!-- jequery plugins -->
        <script src="/onboarding/js/jquery.js"></script>
        <script src="/onboarding/js/popper.min.js"></script>
        <script src="/onboarding/js/bootstrap.min.js"></script>
        <script src="/onboarding/js/owl.js"></script>
        <script src="/onboarding/js/wow.js"></script>
        <script src="/onboarding/js/validation.js"></script>
        <script src="/onboarding/js/jquery.fancybox.js"></script>
        <script src="/onboarding/js/appear.js"></script>
        <script src="/onboarding/js/jquery.countTo.js"></script>
        <script src="/onboarding/js/scrollbar.js"></script>
        <script src="/onboarding/js/jquery.nice-select.min.js"></script>
        <script src="/onboarding/js/bxslider.js"></script>

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function () {
            var interval = setInterval(function () {
                var banner = document.querySelector('iframe.goog-te-banner-frame');
                if (banner) {
                    banner.style.display = 'none';
                    clearInterval(interval);
                }
            }, 500);
        });

        </script> --}}

        <script type="text/javascript">
            function initializeGoogleTranslateElement() {
            new google.translate.TranslateElement({
              pageLanguage: "en"
            }, "google_translate_element");
        }
        </script>
        <script type="text/javascript"
            src="//translate.google.com/translate_a/element.js?cb=initializeGoogleTranslateElement"></script>


        <!-- main-js -->
        <script src="/onboarding/js/script.js"></script>

        {{-- <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: 'fr', includedLanguages: 'en,fr,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE },
                'google_translate_element'
            );
        }
        </script> --}}

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function () {
        const interval = setInterval(() => {
            const iframe = document.querySelector('iframe.goog-te-menu-frame');
            if (iframe) {
                const innerDoc = iframe.contentDocument || iframe.contentWindow.document;
                const frenchOption = innerDoc.querySelector('.goog-te-menu2-item span:contains("French")');
                if (frenchOption) {
                    frenchOption.click();
                    clearInterval(interval);
                }
            }
        }, 500); // Check every 500ms
    });
        </script>

        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}


        <script>
            function initAutocomplete() {
    // Initialize Autocomplete for each input
    const inputP = document.getElementById('autocompleteP');
    const autocompleteP = new google.maps.places.Autocomplete(inputP, { types: ['geocode'] });

    // Event listener for autocompleteP
    autocompleteP.addListener('place_changed', function () {
        const place = autocompleteP.getPlace();
        if (place.geometry) {
        console.log('Place P details:', place);
        } else {
        console.log('No details available for input P: ' + inputP.value);
        }
    });


    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function () {
    if (typeof google !== 'undefined' && google.maps && google.maps.places) {
        initAutocomplete();
    } else {
        // Retry if Google Maps hasn't loaded yet
        const retryInit = setInterval(() => {
        if (typeof google !== 'undefined' && google.maps && google.maps.places) {
            initAutocomplete();
            clearInterval(retryInit);
        }
        }, 100); // Retry every 100 ms until loaded
    }
    });

        </script>

        <script src="/onboarding/js/gmaps.js"></script>
        <script src="/onboarding/js/map-helper.js"></script>



</body><!-- End of .page_wrapper -->

</html>
