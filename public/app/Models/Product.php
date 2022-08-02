<?php 

require_once('app/Models/Model.php');

class Product extends Model
{
    protected $table = 'products';

    protected $id = 'products_id';

    protected $fillable = ['products_id','name','slug','images','description','size','color','price','quantity','addtional_information','categories_id'];

    public function formatPrice() 
    {
        return number_format($this->price,0,'.', ',');
    }

    public function getLatestProducts($limit = 3) 
    {
        $sql = "SELECT * FROM products LIMIT $limit";
        return $this->getAll($sql);
    }

    public function getToprateProducts($limit = 3) 
    {
        $sql = "SELECT * FROM products ORDER BY rate DESC LIMIT $limit";
        
        return $this->getAll($sql);
    }

    public function image()
    {
        $sql = "SELECT * FROM products WHERE products_id = {$this->id}";
        return $this->getFirst($sql)->get();
    }

    public function getProductsByIds($itemIds)
    {
        $sql = "SELECT * FROM products WHERE products_id IN ($itemIds)";
       
        
        return $this->getAll($sql)->get();
    }
    public function search($name){
        $sql ="SELECT *FROM products WHERE name LIKE '%$name'";
        return $this->getAll($sql);
    }
    public function countProduct(){
        $mysqli =new mysqli("localhost", "root", "","shop");
        $sql ="SELECT COUNT(*) from products";
        if($result= $mysqli ->query($sql)){
            while($row =$result->fetch_row()){
                echo $row[0];
            }
        }
        $result -> free_result();

    }
}