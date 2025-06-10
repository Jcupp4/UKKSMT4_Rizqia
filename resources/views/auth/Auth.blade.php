<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mannatthemes.com/bullkit/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 02:09:27 GMT -->
<head>
    <!-- <meta charset="utf-8" />
        <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        App favicon
        <link rel="shortcut icon" href="assets_dashboard/images/favicon.ico"> -->

    <meta charset="utf-8" />
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_dashboard/images/favicon.ico') }}">



    <!-- App css -->
    <link href="{{ asset('assets_dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('assets_dashboard/images/p-1.html'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div class="container-md">
        @yield('form')
        <!--end row-->
    </div>
    <!--end container-->

    <!-- App js -->
    <script src="{{ asset('assets_dashboard/js/app.js') }}"></script>

</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/bullkit/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 02:09:27 GMT -->
</html>
