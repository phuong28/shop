
<?php 

require_once('app/Controllers/Admin/BackendController.php');

class ProfileController extends BackendController
{
    public function index()
    {
        return $this->view('profile/index.php');
    }
}