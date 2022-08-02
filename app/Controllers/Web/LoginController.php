<?php
require_once('app/Controllers/Web/WebController.php');
// require_once('app/controllers/Admin/BackendController.php');
require_once('app/Models/User.php');
require_once('app/Models/Admin.php');
require_once('core/Flash.php');
require_once('core/Auth.php');
require_once('app/Requests/LoginRequest.php');
require_once('app/Requests/MissRequest.php');
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
    public function missPassword(){
        return $this->view('login/miss.php');
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
                        return $this->view('homepage/index.php',['user'=>$user]);
                    }
                    Flash::set('signin_error', 'signin error');
                    return redirect('login/index');
                
                
            }
            return $this->view('login/index.php', ['loginErrors' => $loginRequest->getErrors()]);
        }
        if(isset($_POST['miss'])){
            return redirect('login/missPassword');
        }
        return redirect('login/index');
    }
    public function miss(){
        if(isset($_POST['miss'])){
            $missRequest = new MissRequest();
            $missRequest->validateLogin($_POST);
            if($missRequest->countErrors()==0){
                unset($_POST['confirm_password']);
                $user = $this->user->where(['email' => $_POST['email']])->first();
                //$this->user->update($_POST,$_POST['email']);
                $email=$_POST['email'];
                // print_r($_POST['email']);
                $password=$_POST['password'];
                $this->user->update($_POST['password'],$_POST['email']);
                if (!empty($user)) {
                    Auth::setUser('user', $user, isset($_POST['remerber_me']) ? true: false);
                    return redirect('homepage/index');
                }
                Flash::set('signin_error', 'signin errors');
                return redirect('login/missPassword');
            }
            return $this->view('login/miss.php', ['missErrors' => $missRequest->getErrors()]);
        }
        return redirect('login/missPassword');
    }
    
} 

?>