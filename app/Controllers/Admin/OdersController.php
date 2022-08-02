<?php 

require_once('app/Controllers/Admin/BackendController.php');

require_once('app/Models/Order.php');

class OdersController extends BackendController
{
    private $order;
    private $key ='ordes';
    public function __construct()
    {
        $this->order = new Order();
    }
    public function index()
    {
        return $this->view('oders/index.php');
    }
    public function searchOders(){
        $order= new Order();
        $listP =$order->search($_POST['search'])->hydrate();
        
        return $this->view("oders/view.php",['oders'=>$listP]);
    }
}