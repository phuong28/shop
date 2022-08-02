<?php 

require_once('app/Models/Model.php');

class OrderDetail extends Model
{
    protected $table = "order_detail";

    protected $fillable = ['order_id', 'product_id', 'quantity', 'product_name', 'total'];
}