<?php
require_once('app/controllers/Web/WebController.php');
require_once('app/Models/Product.php');

class ProductController extends WebController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function show()
    {
        $id = $_GET['product_id'];

        $product = $this->product->find($id)->hydrate();
        return $this->view('product/show.php', ['product' => $product]);
    }
    public function search(){
        $searchP= new Product();
        $listP =$searchP->search($_POST['search'])->hydrate();
        
        return $this->view("product/search.php",['products'=>$listP]);
    }
}

?>