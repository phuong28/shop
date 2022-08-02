<?php
require_once('app/controllers/Admin/BackendController.php');
// require_once('app/controllers/Admin/BackendController.php');

require_once('app/Models/Admin.php');
require_once('core/Flash.php');
require_once('core/Auth.php');
require_once('app/Requests/LoginRequest.php');

class LoginController extends BackendController
{
    
    private $admin;

    private $key = 'admin';

    public function __construct()
    {
        
        $this->admin = new Admin();
    }
    
    public function index()
    {
        return $this->view('login/index.php');
    }

    

    public function login()
    {
        if(isset($_POST['login'])) {
            $loginRequest = new LoginRequest();
            $loginRequest->validateLogin($_POST);
    
            if ($loginRequest->countErrors() == 0) {
                
                
                
                    $admin = $this->admin->where(['email' => $_POST['email'], 'password' =>$_POST['password']])->first();
                    if (!empty($admin)) {
                        Auth::setUser('admin', $admin, isset($_POST['remerber_me']) ? true: false);
                        return redirect('admin/thongke/index');
                    }
                    Flash::set('signin_error', 'Đăng Nhập Thất Bại');
                    return redirect('admin/login/index');
                
                
            }
            return $this->view('login/index.php', ['loginErrors' => $loginRequest->getErrors()]);
        }
        return redirect('admin/login/index');
    }
    
} 

?>