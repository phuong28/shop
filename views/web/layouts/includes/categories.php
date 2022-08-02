<?php require_once('app/Models/Categories.php') ?>
<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
    data-toggle="collapse"  href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
    <h6 class="m-0">Categories</h6>
    <i class="fa fa-angle-down text-dark"></i>
    <?php $categories = new Categories(); 
		$categoriess = $categories->findAll()->hydrate(); ?>
</a>
<nav class="collapse navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
    id="navbar-vertical">
    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
        
       
        <?php foreach($categoriess as $categories): ?>
			<div >
            <a href="<?php echo url("categories/showProducts&slug={$categories->slug}")?>" class="nav-item nav-link"><?php echo $categories->name ?></a>
            
			</div>
		<?php endforeach ?>
    </div>
</nav>
<!-- href="#navbar-vertical" -->