<?php require_once('app/Models/Product.php') ?>
<?php
$product = new Product();
$product=$product->findAll()->hydrate();

?>
<?php include_once('views/web/layouts/app.php') ?>
<?php require_once('app/Models/Product.php') ?>
<?php
                    $product = new Product();
                    $products=$product->findAll()->hydrate();
                    $limit =3;
                    if (isset($_GET["page"])) {
                        $page  = $_GET["page"]; 
                        
                        } 
                        else{ 
                        $page=1;
                        
                        };  
                       
                    $start = ($page-1) * $limit;  
                    $result = $product->list($start,$limit)->hydrate();
                ?>

<?php startblock('content') ?>


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->

        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->

        <!-- <div class="col-lg-9 col-md-12"> -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="row pb-3">



                    <?php foreach($result as $product): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo asset("storage/{$product->images}"); ?>"
                                    alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $product->name ?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6 class="text-muted ml-2">$ <?php echo $product->price ?></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="<?php echo url("product/show&product_id={$product->products_id}") ?>"
                                    class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                                    Detail</a>
                                <!--  -->
                                <form action="<?php echo url("cart/add&product_id={$product->products_id}")?>"
                                    method="POST">
                                    <button type="submit" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

        </div>
        <div class="col-12 pb-1">
        <?php $product = new Product(); 
		                                $products = $product->findAll()->hydrate();
                                        $cnt = count($products);
                                        $limit = 3; 
                                        $total_pages=ceil($cnt/$limit);
                                        ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mb-3">
                    <!-- <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li> -->
                    <?php 
                        

                        for($i=1 ; $i<=$total_pages;$i++){
                            
                              ?>  <li class="page-item "   ><a class="page-link" href="<?php echo url("shop/index&page={$i}") ?>"><?php echo $i?> </a></li><?php 
                            
                            
                            
                        }

                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Shop Product End -->
    <!-- </div> -->
</div>
<!-- Shop End -->
<?php endblock('content') ?>