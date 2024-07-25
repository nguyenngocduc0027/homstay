<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/admin/img/60x60.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/admin/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
  <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.2/js/dataTables.bootstrap5.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.bootstrap5.css">


  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
  <script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>

</head>

<body>

    @include('admin.component.header')
    @include('admin.component.navigationbar')




  <main id="main" class="main">

    @yield('contentadmindashboard')

  </main><!-- End #main -->

@include('admin.component.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/admin/vendor/chart.js/chart.umd.js"></script>
  <script src="/admin/vendor/echarts/echarts.min.js"></script>
  <script src="/admin/vendor/quill/quill.js"></script>
  <script src="/admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="/admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/admin/js/main.js"></script>

</body>

</html>
