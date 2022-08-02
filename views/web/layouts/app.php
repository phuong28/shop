<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo asset('vendors/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo asset('assets/web/css/style.min.css') ?>" rel="stylesheet">
    <!--  myacoutn -->
   
    <?php defineblock('css') ?>
</head>

<body>

<?php include_once('views/web/layouts/includes/topbar-start.php') ?>

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
            <?php include_once('views/web/layouts/includes/categories.php') ?>
            </div>
            <div class="col-lg-9">
                <?php include_once('views/web/layouts/includes/nav.php') ?>
                <?php defineblock('slider') ?>
                
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    
    <?php defineblock('content') ?>

    <?php include_once('views/web/layouts/includes/footer.php') ?>
    

    
</body>

</html>