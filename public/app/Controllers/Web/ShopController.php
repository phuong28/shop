<?php
require_once('app/controllers/Web/WebController.php');

class ShopController extends WebController
{
    public function index()
    {
        return $this->view('shop/index.php');
    }
}

?>