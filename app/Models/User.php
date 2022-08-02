<?php 
require_once('./core/Database.php');
require_once('app/Models/Model.php');

class User extends Model
{
    protected $table = "users";
    

    protected $id = 'users_id';

   
    protected $fillable = ['users_id','email','name','password'];
    public function countUser(){
        $mysqli =new mysqli("localhost", "root", "","shop");
        $sql ="SELECT COUNT(*) from users";
        if($result= $mysqli ->query($sql)){
            while($row =$result->fetch_row()){
                echo $row[0];
            }
        }
        $result -> free_result();

    }
    
    public function update($password,$email){
        //$mysqli =new mysqli("localhost", "root", "","shop");
        $password=md5($password);
        $sql="UPDATE users SET password= '$password' WHERE email='$email'";
        //$result = $mysqli->query($sql);
       
        return $this->getConnect($sql);
    }
    public function listPay($users_id,$start,$end){
        $sql ="SELECT oder.name, order_detail.product_name, order_detail.quantity,oder.subtotal, oder.payment from oder INNER JOIN order_detail on oder.order_id=order_detail.order_id WHERE oder.users_id='$users_id' Limit $start,$end";
        return $this->getConnect($sql);
    }
    

}



    

