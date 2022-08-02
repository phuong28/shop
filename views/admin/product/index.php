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
                                        <?php 
                                        $product = new Product(); 
                                        $products = $product->findAll()->hydrate();
                                        $limit =2;
                                        if (isset($_GET["page"])) {
                                            $page  = $_GET["page"]; 
                                            
                                            } 
                                            else{ 
                                            $page=1;
                                            
                                            };  
                                           
                                        $start = ($page-1) * $limit;  
                                        $result = $product->list($start,$limit)->hydrate();
                                        ?>

                                        <tr>
                                            <?php foreach($result as $product): ?>
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
                                                <a
                                                    href="<?php echo url("admin/products/delete&products_id={$product->products_id}") ?>">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="dataTable-bottom">
                                    <?php $product = new Product(); 
		                                $products = $product->findAll()->hydrate();
                                        $cnt = count($products);
                                        $limit = 2; 
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
                                                        href="<?php echo url("admin/products/index&page={$i}") ?>"><?php echo $i?>
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
            </div>
        </div>
    </section>

</main>
<?php endblock() ?>