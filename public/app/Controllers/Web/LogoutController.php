<?php
require_once('app/controllers/Web/WebController.php');
require_once('app/Models/User.php');
require_once('core/Flash.php');
require_once('core/Auth.php');

class LogoutController extends WebController
{
    private $user;

    private $key = 'user';

    public function __construct()
    {
        $this->user = new User();

    }
    
    public function index()
    {
        return $this->view('homepage/index.php');
    }

    public function logout()
    {
        Auth::logout('user');
        // Cart::clearCartSession();
        return redirect('homepage/index');
    }

}

?>