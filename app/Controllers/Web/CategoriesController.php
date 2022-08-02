<?php 

require_once('app/Controllers/Web/WebController.php');
require_once('app/Models/Categories.php');
require_once('app/Models/Product.php');

class CategoriesController extends WebController
{
    private $product;
    private $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Categories();
    }

    public function showProducts()
    {
        $slug = $_GET['slug'];
        
        $foundCategory = $this->category->where(['slug' => $slug])->first();
        $products = $this->product->where(['categories_id' => $foundCategory['categories_id']])->hydrate();
        return $this->view('categories/show.php', ['products' => $products]);
    }
}