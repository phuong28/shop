<?php 

require_once('app/models/Model.php');

class Categories extends Model
{
    protected $table = "categories";
   

    protected $id = 'categories_id';

    protected $fillable = ['category_id','name','slug'];

    // public function image()
    // {
    //     $sql = "SELECT * FROM categories WHERE category_id = {$this->id}";
    //     return $this->getFirst($sql)->get();
    // }
    public function image()
    {
        $sql = "SELECT * FROM categories WHERE category_id = {$this->id}";
        return $this->getFirst($sql)->get();
    }
    public function search($name){
        $sql ="SELECT *FROM categories WHERE name LIKE '%$name'";
        return $this->getAll($sql);
    }
    
}