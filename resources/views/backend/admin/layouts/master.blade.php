<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') || Foodistry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('ui/backend')}}/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('ui/backend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('ui/backend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('ui/backend')}}/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('backend/admin/layouts/partials/header')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->

            <!-- Left Sidebar End -->
            @include('backend/admin/layouts/partials/sidebar')
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                 <!-- content -->
                 @if(Session::has('success'))
                 <h4 class='text-center' style='color:green;'>{{Session::get('success')}}</h4>
                @endif
                 @if(Session::has('danger'))
                 <h4 class='text-center' style='color:red;'>{{Session::get('danger')}}</h4>
                @endif
                @yield('content')
                <!-- Footer Start -->
                @include('backend/admin/layouts/partials/footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->


        <!-- Vendor js -->
        <script src="{{asset('ui/backend')}}/js/vendor.min.js"></script>

    <script src="{{asset('ui/backend')}}/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="{{asset('ui/backend')}}/libs/peity/jquery.peity.min.js"></script>

        <!-- Sparkline charts -->
        <script src="{{asset('ui/backend')}}/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- init js -->
        <script src="{{asset('ui/backend')}}/js/pages/dashboard-1.init.js"></script>

        <!-- App js -->
        <script src="{{asset('ui/backend')}}/js/app.min.js"></script>
        @stack('js')

    </body>
</html>
