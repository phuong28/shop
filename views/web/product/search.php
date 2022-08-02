<?php include_once('views/web/layouts/app.php') ?>
<?php require_once('app/Models/Product.php') ?>
<?php startblock('slider') ?>

<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="<?php echo asset('assets/web/img/carousel-1.jpg') ?>" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="<?php echo asset('assets/web/img/carousel-2.jpg') ?>" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
<?php endblock('slider') ?>
<?php startblock('content') ?>


<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <?php if (count($products) > 0) :?>
        <?php foreach($products as $product): ?>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="row px-xl-4 pb-3">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="<?php echo asset("storage/{$product->images}"); ?>" alt="">
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
                        <form action="<?php echo url("cart/add&product_id={$product->products_id}")?>" method="POST">
                            <button type="submit" class="btn btn-sm text-dark p-0"><i
                                    class="fas fa-shopping-cart text-primary mr-1"></i>Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <?php else: ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                No products found
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>



<?php endblock('content') ?>