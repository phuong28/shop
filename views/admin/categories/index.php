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
                                    <?php $categories = new Categories(); 
		                                $categoriess = $categories->findAll()->hydrate(); 
                                        $limit =5;
                                        if (isset($_GET["page"])) {
                                            $page  = $_GET["page"]; 
                                            
                                            } 
                                            else{ 
                                            $page=1;
                                            
                                            };  
                                           
                                        $start = ($page-1) * $limit;  
                                        $result = $categories->list($start,$limit)->hydrate();
                                        ?>
                                    <tbody>

                                        <?php foreach($result as $categories): ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $categories->categories_id?>
                                            </th>
                                            <td><?php echo $categories->name?></td>
                                            <td><?php echo $categories->slug?></td>
                                            <td>

                                                <a
                                                    href="<?php echo url("admin/categories/edit&categories_id={$categories->categories_id}") ?>">
                                                    <i class="fa-solid fa-user-pen"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a
                                                    href="<?php echo url("admin/categories/delete&categories_id={$categories->categories_id}") ?>">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>

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
                
                    <li class="page-item "   ><a class="page-link" href="<?php echo url("admin/categories/index&page={$i}") ?>"><?php echo $i?> </a></li><?php 
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
    </section>


</main>
<?php endblock() ?>