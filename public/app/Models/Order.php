<?php 

require_once('app/Models/Model.php');

class Order extends Model
{
    protected $table = "oder";

    protected $id = "order_id";

    protected $fillable = ['order_id', 'name', 'phone_number','address_street' ,'address',  'subtotal',
    'payment','users_id'];
    public function countOrder(){
        $mysqli =new mysqli("localhost", "root", "","shop");
        $sql ="SELECT COUNT(*) from oder";
        if($result= $mysqli ->query($sql)){
            while($row =$result->fetch_row()){
                echo $row[0];
            }
        }
        $result -> free_result();

    }
    public function sumPrice(){
        $mysqli =new mysqli("localhost", "root", "","shop");
        $sql ="SELECT SUM(subtotal) from oder";
        
        if($result= $mysqli ->query($sql)){
            while($row =$result->fetch_row()){
                echo $row[0];
            }
        }
        $result -> free_result();

    }
    public function search($name){
        $sql ="SELECT *FROM oder WHERE name LIKE '%$name'";
        return $this->getAll($sql);
    }

}