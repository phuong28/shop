<?php include_once('views/admin/layouts/main.php') ?>
<?php require_once('app/Models/User.php') ?>
<?php require_once('app/Models/Product.php') ?>
<?php require_once('app/Models/Order.php') ?>
<?php startblock('thongke') ?>
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo url('admin/thongke/index') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col">
                    <div class="row">

                        <?php $order = new Order(); 
		                               ?>
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">number of orders </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php  $order->countOrder() ?></h6>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">Turnover</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php  $order->sumPrice();echo "  VND"; ?></h6>
                                            

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <?php $user = new User(); 
		                               ?>
                        <div class="col-xxl-3 col-md-6">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">number of users</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php  $user->countUser() ?></h6>
                                            
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <?php $product = new Product(); 
		                               ?>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">number product</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php  $product->countProduct()  ?></h6>
                                            

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Reports -->

                        <!-- Recent Sales -->
                        <!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->


                <!-- Recent Activity -->
                <!-- End activity item-->

            </div>

            </div>
            </div><!-- End Recent Activity -->

            <!-- Budget Report -->

            </div><!-- End Budget Report -->

            <!-- Website Traffic -->
            <!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
<?php endblock() ?>