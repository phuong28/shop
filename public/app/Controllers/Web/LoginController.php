<?php
require_once('app/controllers/Web/WebController.php');
// require_once('app/controllers/Admin/BackendController.php');
require_once('app/Models/User.php');
require_once('app/Models/Admin.php');
require_once('core/Flash.php');
require_once('core/Auth.php');
require_once('app/Requests/LoginRequest.php');

class LoginController extends WebController 
{
    private $user;
    private $admin;

    private $key = 'user';

    public function __construct()
    {
        $this->user = new User();
        
    }
    
    public function index()
    {
        return $this->view('login/index.php');
    }

    // public function login()
    // {
    //     if(isset($_POST['login'])) {
    //         $loginRequest = new LoginRequest();
    //         $loginRequest->validateLogin($_POST);
    
    //         if ($loginRequest->countErrors() == 0) {
    //             $user = $this->user->where(['email' => $_POST['email'], 'password' => md5($_POST['password'])])->first();
    //             if (!empty($user)) {
    //                 Auth::setUser('user', $user, isset($_POST['remerber_me']) ? true: false);
    //                 return redirect('homepage/index');
    //             }
    //             Flash::set('signin_error', 'Đăng Nhập Thất Bại');
    //             return redirect('login/index');
    //         }
    //         return $this->view('login/index.php', ['loginErrors' => $loginRequest->getErrors()]);
    //     }
    //     return redirect('login/index.php');
    // }

    public function login()
    {
        if(isset($_POST['login'])) {
            $loginRequest = new LoginRequest();
            $loginRequest->validateLogin($_POST);
    
            if ($loginRequest->countErrors() == 0) {
                
                    $user = $this->user->where(['email' => $_POST['email'], 'password' => md5($_POST['password'])])->first();
                    if (!empty($user)) {
                        Auth::setUser('user', $user, isset($_POST['remerber_me']) ? true: false);
                        return redirect('homepage/index');
                    }
                    Flash::set('signin_error', 'Đăng Nhập Thất Bại');
                    return redirect('login/index');
                
                
            }
            return $this->view('login/index.php', ['loginErrors' => $loginRequest->getErrors()]);
        }
        return redirect('login/index');
    }
    
} 

?>