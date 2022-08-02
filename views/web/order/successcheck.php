

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
    <?php defineblock('css') ?>
</head>



<?php startblock('content')?> 
<style>
.center {
    text-align: center;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="center">
            <h2>Order Success</h2>
        </div>
    </div>
</div>
<div class="card border-secondary mb-5">
    <div class="card-header bg-secondary border-0">
        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
    </div>
    <?php
                                        $sum = 0;
                                        foreach($cartItems as $key => $cartItem):?>
    <div class="card-body">
        <h5 class="font-weight-medium mb-3">Products</h5>
        <div class="d-flex justify-content-between">
            <p><?php echo $cartItems[$key]['name'] ?></p>
            <p><?php echo number_format($cartItems[$key]['price'], 0, ".", ",")." VND";?></p>
        </div>

        <hr class="mt-0">
        <div class="d-flex justify-content-between mb-3 pt-1">
            <h6 class="font-weight-medium">Subtotal</h6>
            <h6 class="font-weight-medium"><?php 
                                                        $cartItemTotalPrice = $cartItems[$key]['price'] * $cartItems[$key]['quantity']; 
                                                        $sum += $cartItemTotalPrice;
                                                ?>
                <?php echo number_format($cartItemTotalPrice, 0, ".", ",") ?> VND</h6>
        </div>
        <div class="d-flex justify-content-between">
            <h6 class="font-weight-medium">Shipping</h6>
            <h6 class="font-weight-medium">10000VND</h6>
        </div>
    </div>
    <?php endforeach ?>
    <div class="card-footer border-secondary bg-transparent">
        <div class="d-flex justify-content-between mt-2">
            <h5 class="font-weight-bold">Total</h5>
            <h5 class="font-weight-bold"><span><?php echo number_format($sum-40000, 0, ".", ",")?> VND</span>
            </h5>
        </div>
    </div>
</div>
<div class="btn btn-danger btn-sm">
    <a href="<?php echo url('order/backhome') ?>">
        <input value="Back shop" class="btn btn-danger">
    </a>
</div>
<?php endblock()?> 