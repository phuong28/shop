<?php 

require_once('app/Controllers/Admin/BackendController.php');
require_once('app/Models/Categories.php');
require_once('core/Flash.php');
require_once('app/Requests/CategoriesRequest.php');

class CategoriesController extends BackendController
{
    public function index()
    {
        return $this->view('categories/index.php');
    }
    public function create(){
        return $this->view('categories/create.php');
        

    }
    public function edit(){
        // return $this->view('categories/edit.php');
        $id = $_GET['categories_id'];
        
        $categories = $this->categories->find($id)->hydrate();
        return $this->view('categories/edit.php',['categories'=>$categories]);
        //return $this->view('products/show.php', ['product' => $product]);
    }
    public function delete(){
        $id = $_GET['categories_id'];
        
        $categories = $this->categories->find($id)->hydrate();
        return $this->view('categories/delete.php',['categories'=>$categories]);
    }
    public function update(){
        $id = $_GET['categories_id'];
        $this->categories->update($_POST, $id);
        return redirect('admin/categories/index');
    }
    public function delete1(){
        $id = $_GET['categories_id'];
        $this->categories->delete($id);
        return redirect('admin/categories/index');
    }


    private $categories;
    private $key ='categories';
    public function __construct(){
        $this->categories= new Categories();
    }
    public function createCategories(){
        $categoriesRequest = new CategoriesRequest();
        $categoriesRequest->validateCategories($_POST);
        $flag=0;
        if($categoriesRequest->countErrors()==0){
            $categories = new Categories();
            $foundCategories = $this->categories->where(['name' => $_POST['name']])->get();
            if(count($foundCategories)==0){
                $isCreated = $categories->create($_POST);
                if($isCreated){
                    $categories =$this->categories->where(['name' => $_POST['name']])->first();
                    // return redirect('admin/thongke/index');
                    
                }
                Flash::set('create_success','categories them thành công');
                return redirect('admin/categories/create');
            }
            $flag=1;
            Flash::set('create_error','name categories đã tồn tại');
            return redirect('admin/categories/create');
        }
        return $this->view('categories/create.php',['categoriesErrors'=> $categoriesRequest->getErrors()]);
    
    }
    
    public function searchCategories(){
        $catgories= new Categories();
        $listP =$catgories->search($_POST['search'])->hydrate();
        
        return $this->view("categories/view.php",['categories'=>$listP]);
    }
}
?>