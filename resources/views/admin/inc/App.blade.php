<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title') L-eCom</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/admin/images/favicon.ico') }}}" type="image/x-icon"/>
    <!-- notifications css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/notifications/css/lobibox.min.css') }}"/>
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/admin/css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('assets/admin/css/app-style.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap4-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

</head>

<body>

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
@include('admin.inc.sidebar')
<!--End sidebar-wrapper-->

    <!--Start topbar header-->
@include('admin.inc.topbar')
<!--End topbar header-->

    <div class="clearfix"></div>

    <!--Start content-wrapper-->
    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

            @yield('root-content')
            <!--End Dashboard Content-->

        </div>
        <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Bulona Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
            </ul>

        </div>
    </div>
    <!--end color cwitcher-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap4-toggle.min.js') }}"></script>
<!--notification js -->
<script src="{{ asset('assets/admin/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/notifications/js/notifications.min.js') }}"></script>

<!-- simplebar js -->
<script src="{{ asset('assets/admin/plugins/simplebar/js/simplebar.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/admin/js/sidebar-menu.js') }}"></script>
<!-- loader scripts -->
{{--<script src="assets/admin/js/jquery.loading-indicator.html"></script>--}}
<!-- Custom scripts -->
<script src="{{ asset('assets/admin/js/app-script.js') }}"></script>

@yield("JS")


<!-- Index js -->
<script src="{{ asset('assets/admin/js/index.js') }}"></script>

</body>

</html>
