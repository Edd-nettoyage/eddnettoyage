<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


    <meta charset="utf-8" />
    <title>Edd Nettoyage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Edd Nettoyage" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/onboarding/logos/edd-no-bg-black.png">



    <!-- App css -->
    <link href="/dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/dash/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/dash/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/onboarding/css/flaticon.css" rel="stylesheet">


</head>

<body id="body">
    @include('sweetalert::alert')


    <x-dash-sidebar-component />


    <x-dash-header-component />


    {{$dashbody}}
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="/dash/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dash/libs/simplebar/simplebar.min.js"></script>
    <script src="/dash/libs/feather-icons/feather.min.js"></script>
    <script src="/dash/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/dash/js/pages/hospital-index.init.js"></script>
    <!-- App js -->
    <script src="/dash/js/app.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editorCreate' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/metrica/default/hospital-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 17:23:02 GMT -->

</html>
