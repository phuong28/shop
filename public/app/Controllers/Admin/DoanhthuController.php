<?php 

require_once('app/Controllers/Admin/BackendController.php');

class DoanhthuController extends BackendController
{
    public function index()
    {
        return $this->view('doanhthu/index.php');
    }
}