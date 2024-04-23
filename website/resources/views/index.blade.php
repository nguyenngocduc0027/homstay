<!DOCTYPE html>
<html lang="vi">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Resido - Residence & Real Estate HTML Template</title>

        <!-- Custom CSS -->
        <link href="/css/styles.css" rel="stylesheet">

		<!-- Custom Color Option -->
		<link href="/css/colors.css" rel="stylesheet">

    </head>

    <body class="blue-skin">

		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
            <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        @include('home.elements.header')
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        @yield('content')


        <!-- ============================ Footer Start ================================== -->
        @include('home.elements.footer')
        <!-- ============================ Footer End ================================== -->

        <!-- Log In Modal -->
        @include('home.elements.loginmodal')
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/rangeslider.js"></script>
		<script src="/js/select2.min.js"></script>
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<script src="/js/slick.js"></script>
		<script src="/js/slider-bg.js"></script>
		<script src="/js/lightbox.js"></script>
		<script src="/js/imagesloaded.js"></script>

		<script src="/js/custom.js"></script>


		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>
