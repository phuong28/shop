<?php include_once('views/admin/layouts/main.php') ?>
<?php require_once('app/Models/Categories.php') ?>
<?php startblock('categories') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>categories table</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo url('admin/thongke/index') ?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category Table</h5>


                        <!-- Table with stripped rows -->

                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <form method="POST" action="<?php echo url('admin/categories/searchCategories') ?>">
                                    <div class="dataTable-search">
                                        <input class="dataTable-input" placeholder="Search..." type="text"
                                            name="search">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="dataTable-container">
                                <table class="table datatable dataTable-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-sortable="" style="width: 5.72082%;"><a href="#"
                                                    class="dataTable-sorter">Id</a></th>
                                            <th scope="col" data-sortable="" style="width: 28.032%;"><a href="#"
                                                    class="dataTable-sorter">Name Category</a></th>
                                            <th scope="col" data-sortable="" style="width:10%;"><a href="#"
                                                    class="dataTable-sorter">slug</a></th>
                                            <th scope="col" data-sortable="" style="width: 28.032%;"><a href="#"
                                                    class="dataTable-sorter">Ation Edit</a></th>

                                            <th scope="col" data-sortable="" style="width: 20.032%;"><a href="#"
                                                    class="dataTable-sorter">Action Delete</a></th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if (count($categories) > 0) :?>
                                        <?php foreach($categories as $category): ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $category->categories_id?>

                                            </th>
                                            <td><?php echo $category->name?></td>
                                            <td><?php echo $category->slug?></td>
                                            <td>

                                                <a
                                                    href="<?php echo url("admin/categories/edit&categories_id={$category->categories_id}") ?>">
                                                    <i class="fa-solid fa-user-pen"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a
                                                    href="<?php echo url("admin/categories/delete&categories_id={$category->categories_id}") ?>">
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
                            <div class="dataTable-bottom">

                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<?php endblock() ?>