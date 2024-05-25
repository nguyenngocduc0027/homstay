<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/libs/css/style.css">
    <link rel="stylesheet" href="/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/admin/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/admin/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/admin/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>DINGDONG - Admin Dashboard</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .preview {
            display: inline-block;
            margin: 10px;
        }

        .preview img {
            width: 180px;
            height: 100px;
            margin-right: 10px;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('admin.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('admin.navbar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @yield('contentadmin')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            {{-- <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2024 DingDong. All rights reserved. Dashboard by <a
                                href="https://www.facebook.com/Duckynocirclek/">Ducky</a>.
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    @include('admin.modal.addacc')
    @include('admin.modal.viewacc')
    @include('admin.modal.deleteacc')
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/admin/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/admin/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="/admin/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/admin/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/admin/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/admin/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/admin/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/admin/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/admin/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/admin/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
