<?php 

require_once('app/Controllers/Admin/BackendController.php');
require_once('app/Models/Product.php');
require_once('core/Flash.php');
require_once('app/Requests/ProductsRequest.php');
require_once('core/Storage.php');
class ProductsController extends BackendController{
    private $products;
    private $key ='products';
    public function __construct(){
        $this->products= new Product();
    }
    public function index()
    {
        return $this->view('product/index.php');
    }
    public function showCreate(){
        return $this->view('product/create.php');
    }
    public function showEdit(){
        $id = $_GET['products_id'];
        
        $products = $this->products->find($id)->hydrate();
        return $this->view('product/edit.php',['products'=>$products]);
    }
    public function create(){
        if($_FILES['upload']['error']>0){
            $_POST['images'] = '';
        } else{
            $storage = new Storage();
            $upload = $storage->upload($_FILES, 'images');
            $_POST['images'] = 'images/'.$_FILES['upload']['name'];
        }
        $productsRequest = new ProductsRequest();
        $productsRequest->validateProducts($_POST);

        if($productsRequest->countErrors()==0){
            $products =new Product();
            $this->products->create($_POST);
            
            return redirect('admin/products/index');
        }
        return $this->view('product/create.php',['productsErrors'=> $productsRequest->getErrors()]);
        
       
    }
    public function update(){
        $id = $_GET['products_id'];
        if($_FILES['upload']['error']>0){
            $_POST['images'] = '';
        } else{
            $storage = new Storage();
            $upload = $storage->upload($_FILES, 'images');
            $_POST['images'] = 'images/'.$_FILES['upload']['name'];
        }
        $productsRequest = new ProductsRequest();
        $productsRequest->validateProducts($_POST);

        if($productsRequest->countErrors()==0){
            $products =new Product();
            $this->products->update($_POST, $id);
            
            return redirect('admin/products/index');
        }
        return $this->view('product/edit.php',['productsErrors'=> $productsRequest->getErrors()]);
    }
    public function delete (){
        $id = $_GET['products_id'];
        $this->products->delete($id);
       
        return redirect('admin/products/index');
    }
    public function searchProducts(){
        $product= new Product();
        $listP =$product->search($_POST['search'])->hydrate();
        
        return $this->view("product/view.php",['products'=>$listP]);
    }

}
?>