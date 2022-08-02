<?php include_once('views/web/layouts/app.php') ?>
<?php require_once('app/Models/User.php');
require_once('app/Models/Order.php');
require_once('app/Models/OrderDetail.php'); 
require_once('core/Auth.php');?>
<?php startblock('content') ?>
<div class="container-fluid bg-secondary mb-5">
    <main id="main" class="main">

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">


                            <h2><?php echo $user->name?></h2>
                            <h5><?php echo $user->email?></h5>

                        </div>

                    </div>
                    <?php if (Flash::has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo Flash::get('error') ?>
                    </div>
                    <?php endif ?>

                    <p class="text-danger"><?php echo isset($resetErrors['password']) ? $resetErrors['password'] : '' ?>
                    </p>
                    <p class="text-danger">
                        <?php echo isset($resetErrors['newpassword']) ? $resetErrors['newpassword'] : '' ?></p>
                    <p class="text-danger">
                        <?php echo isset($resetErrors['renewpassword']) ? $resetErrors['renewpassword'] : '' ?></p>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Thông tin khách hàng</button>

                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Đơn
                                        hàng đã mua </button>
                                </li>

                                <!-- <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-settings">Settings</button>
                        </li> -->

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Thank you for registering as a member of E-shopper, wish
                                        you a successful shopping season.</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $user->name?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?php echo  $user->email ?></div>
                                    </div>



                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <div class="card">
                                        <div class="card-body">



                                            <!-- Table with stripped rows -->

                                            <div
                                                class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">

                                                <div class="dataTable-container">
                                                    <table class="table datatable dataTable-table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" data-sortable=""
                                                                    style="width: 5.72082%;"><a href="#"
                                                                        class="dataTable-sorter">Name</a></th>
                                                                <th scope="col" data-sortable=""
                                                                    style="width: 28.032%;"><a href="#"
                                                                        class="dataTable-sorter">product name</a></th>
                                                                <th scope="col" data-sortable="" style="width:10%;"><a
                                                                        href="#" class="dataTable-sorter">quantity</a></th>
                                                                <th scope="col" data-sortable="" style="width:10%;"><a
                                                                        href="#" class="dataTable-sorter">total</a></th>
                                                                <th scope="col" data-sortable="" style="width:10%;"><a
                                                                        href="#" class="dataTable-sorter">Payment</a></th>

                                                            </tr>
                                                        </thead>
                                                        <?php $user = new User(); 
                                                        $order=new Order();

                                                        $order_detail = new OrderDetail();
		                                $users = $user->findAll()->hydrate(); 
                                        $limit =5;
                                        if (isset($_GET["page"])) {
                                            $page  = $_GET["page"]; 
                                            
                                            } 
                                            else{ 
                                            $page=1;
                                            
                                            };  
                                           
                                        $start = ($page-1) * $limit; 
                                        $id=Auth::getUser('user')['users_id'];
                                        $result = $user->listPay($id,$start,$limit)->hydrate();
                                        print_r($result);
                                        ?>
                                                        <tbody>

                                                            <?php foreach($result as $key): ?>
                                                            <tr>
                                                                <th scope="row">
                                                                    <?php echo $key->name?>
                                                                </th>
                                                                <td><?php echo $key->product_name?></td>
                                                                <td><?php echo $key->quantity?></td>
                                                                <td><?php echo $key->subtotal?></td>
                                                                <td><?php echo $key->payment?></td>
                                                            </tr>
                                                            <?php endforeach ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="dataTable-bottom">
                                                    <?php $categories = new Categories(); 
		                                $categoriess = $categories->findAll()->hydrate();
                                        $cnt = count($categoriess);
                                        $limit = 5; 
                                        $total_pages=ceil($cnt/$limit);
                                        ?>
                                                    <div class="col-12 pb-1">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination justify-content-center mb-3">
                                                                <!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                                                <?php for ($i=1; $i<=$total_pages; $i++) {
                                               
                 // $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li>";   
                 ?>

                                                                <li class="page-item "><a class="page-link"
                                                                        href="<?php echo url("admin/categories/index&page={$i}") ?>"><?php echo $i?>
                                                                    </a></li><?php 
                 }
                
                
    
     ?>
                                                            </ul>
                                                        </nav>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Table with stripped rows -->

                                        </div>
                                    </div>




                                </div>



                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form method="POST" action="<?php echo url('user/change') ?>">

                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button name="reset" type="submit" class="btn btn-primary">Change
                                                Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>
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
<?php endblock() ?>