<?php include_once('views/admin/layouts/main.php') ?>
<?php require_once('app/Models/Product.php') ?>
<?php require_once('app/Models/Categories.php') ?>
<?php startblock('createproducts') ?>
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

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                <?php if (Flash::has('create_success')): ?>
                                    <div  class="alert alert-success" role="alert">
                                        <?php echo Flash::get('create_success') ?>
                                    </div>
                                    <?php endif ?>
                    <form action="<?php echo url("admin/products/create") ?>" method="POST"
                        enctype="multipart/form-data" style="text-align:center">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <p class="text-danger">
                                                        <?php echo isset($productsErrors['name']) ? $productsErrors['name'] : '' ?>
                                                    </p>
                        </div>
                        <div class="row mb-3">
                            <label for="in_category" class="col-sm-2 col-form-label">slug</label>
                            <select style="width: 82%;" class="form-select col-sm-10" id="in_categories"
                                name="slug">

                                <?php
                                            $category = new Categories();
                                            $categories = $category->findAll()->hydrate();
                                        ?>
                                <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->slug ?>"><?php echo $category->slug?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="floatingInput" class="col-sm-2 col-form-label">Image</label>
                            <input type="file" class="form-group col-sm-10" id="floatingInput" name="upload"
                                placeholder="name@example.com">

                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descrption" name="description">
                            </div>
                            <p class="text-danger">
                                                        <?php echo isset($productsErrors['description']) ? $productsErrors['description'] : '' ?>
                                                    </p>
                        </div>
                        <div class="row mb-3">
                            <label for="rate" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                                <!-- <input type="number" step="0.1" class="form-control" id="rate" name="rate"> -->
                                <input    type="text" class="form-control" name="size" id="size">
                                <p class="text-danger">
                                                        <?php echo isset($productsErrors['size']) ? $productsErrors['size'] : '' ?>
                                                    </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="color" name="color">
                            </div>
                            <p class="text-danger">
                                                        <?php echo isset($productsErrors['color']) ? $productsErrors['color'] : '' ?>
                                                    </p>
                        </div>
                        <div class="row mb-3">
                            <label for="weight" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" step="20000" class="form-control" id="price" name="price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="weight" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" step="1" class="form-control" id="price" name="quantity">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="weight" class="col-sm-2 col-form-label">addtional_information</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="addtional_information" name="addtional_information">
                            </div>
                            <p class="text-danger">
                                                        <?php echo isset($productsErrors['addtional_information']) ? $productsErrors['addtional_information'] : '' ?>
                                                    </p>
                        </div>
                        <div class="row mb-3">
                            <label for="in_category" class="col-sm-2 col-form-label">In Category</label>
                            <select style="width: 82%;" class="form-select col-sm-10" id="in_categories"
                                name="categories_id">

                                <?php
                                            $category = new Categories();
                                            $categories = $category->findAll()->hydrate();
                                        ?>
                                <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->categories_id ?>"><?php echo $category->name ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="btn btn-primary btn-sm">
                                    <input type="submit" value="Create" class="btn btn-primary" id="btn">
                                    <!-- <button type="submit" class="btn btn-primary"> create</button> -->
                                </div>
                                <div class="btn btn-danger btn-sm"> 
                                    <a   href="<?php echo url('admin/thongke/index') ?>">
                                        <input value="Back Homepage Admin" class="btn btn-danger">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</main>

<?php endblock() ?>