<?php 

require_once('app/Controllers/Admin/BackendController.php');

class MainController extends BackendController
{
    public function index()
    {
        return $this->view('index/index.php');
    }
}