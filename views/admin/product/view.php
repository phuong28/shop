<?php include_once('views/admin/layouts/main.php') ?>
<?php require_once('app/Models/Product.php') ?>
<?php startblock('products') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo url('admin/thongke/index') ?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Table</h5>


                        <!-- Table with stripped rows -->
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">

                                <form method="POST" action="<?php echo url('admin/products/searchProducts') ?>">
                                    <div class="dataTable-search">
                                        <input class="dataTable-input" placeholder="Search..." type="text"
                                            name="search">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">slug</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">size</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">price</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">addtional_information</th>
                                            <th scope="col" style="text-align: center;">In Category</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($products)>0) :?>
                                        <?php foreach ($products as $product) :?>


                                        <tr>
                                            <th scope="row"><?php echo $product->products_id ?></th>
                                            <td><?php echo $product->name; ?></td>
                                            <td><?php echo $product->slug; ?></td>
                                            <td><img style="width:100px;height:100px;"
                                                    src="<?php echo asset("storage/{$product->images}"); ?>"
                                                    alt="There's no image"></td>
                                            <td><?php echo $product->description ?></td>
                                            <td><?php echo $product->size ?></td>
                                            <td style="text-align: center;"><?php echo $product->color?></td>
                                            <td><?php echo $product->price ?></td>
                                            <td><?php echo $product->quantity ?></td>
                                            <td><?php echo $product->addtional_information?></td>
                                            <td style="text-align: center;"><?php echo $product->categories_id ?></td>
                                            <td>
                                                <a
                                                    href="<?php echo url("admin/products/showEdit&products_id={$product->products_id}") ?>">
                                                    <i class="fa-solid fa-user-pen"></i>
                                                </a>
                                                <a href="<?php echo url("admin/products/delete&products_id={$product->products_id}") ?>"
                                                    onclick="return confirm('Are you delete products this?')">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                        <?php else: ?>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                No products found
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php endblock() ?>