<?php include_once('views/web/layouts/app.php') ?>

<?php startblock('content') ?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Checkout</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Checkout Start -->
<form action="<?php echo url('order/createcheck') ?>" method="POST">
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label> Name</label>
                            <input class="form-control" type="text" placeholder="John" name="name" required>
                        </div>

                        
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name="phone_number" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="address_street" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select" name="address">
                                <option selected>Hà nội</option>
                                <option>Ninh Bình</option>
                                <option>Nam Định</option>
                                <option>Thái Bình</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
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
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <select name="payment" required="">
                                    <option value="cod">
                                    Payment on delivery (COD)
                                    </option>
                                    <option value="online">
                                    Payment online
                                    </option>
                        </select>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" name="order" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Checkout End -->


<?php endblock()?>