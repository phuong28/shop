<?php require_once('app/Models/Product.php') ?>
<?php
                    $product = new Product();
                    
                    
                   
                    $limit =4; 
                       
                    $start = ($page-1) * $limit;  
                    $result = $product->list($start,$limit)->hydrate();
                ?>
                

<?php foreach($result as $product): ?>
<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
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
                <button type="submit"  class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1" ></i>Add to Cart</button>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>