<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo asset('assets/admin/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/admin/vendor/quill/quill.snow.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/admin/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/admin/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/admin/vendor/simple-datatables/style.css')?>" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="<?php echo asset('assets/admin/css/style.css')?>" rel="stylesheet">
    
    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

    <!-- ======= Header ======= -->
    <!-- End Icons Navigation -->
    <?php include_once('views/admin/layouts/includes/header.php') ?>
    <!-- End Header -->
    
    <!-- ======= Sidebar ======= -->
    <?php include_once('views/admin/layouts/includes/sidebar.php') ?>
    <!-- End Sidebar-->
    <?php defineblock('profile') ?>
    <?php defineblock('thongke') ?>
    <?php defineblock('doanhthu') ?>
    <?php defineblock('categories') ?>
    <?php defineblock('products')?>
    <?php defineblock('createproducts') ?>
    <?php defineblock('orders') ?>

    <?php include_once('views/admin/layouts/includes/footer.php') ?>
    <!-- ======= Footer ======= -->
    

    <!-- Vendor JS Files -->
    <script src="<?php echo asset('assets/admin/vendor/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?php echo asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo asset('assets/admin/vendor/chart.js/chart.min.js')?>"></script>
    <script src="<?php echo asset('assets/admin/vendor/echarts/echarts.min.js')?>"></script>
    <script src="<?php echo asset('assets/admin/vendor/quill/quill.min.js')?>"></script>
    <script src="<?php echo asset('assets/admin/vendor/simple-datatables/simple-datatables.js')?>"></script>
    <script src="<?php echo asset('as0sets/admin/vendor/tinymce/tinymce.min.js')?>"></script>
    <script src="<?php echo asset('assets/admin/vendor/php-email-form/validate.js')?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo asset('assets/admin/js/main.js')?>"></script>
    
</body>

</html>

