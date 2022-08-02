<?php
require_once('app/controllers/Web/WebController.php');
require_once('app/Models/User.php');
require_once('core/Flash.php');
require_once('core/Auth.php');
require_once('app/Requests/RegisterRequest.php');


class RegisterController extends WebController
{
    private $user;

    private $key = 'user';

    public function __construct()
    {
        $this->user = new User();
        

    }
    public function index()
    {
        return $this->view('register/index.php');
    }

    public function signUp()
    {

        $registerRequest = new RegisterRequest();
        $registerRequest->validateRegister($_POST);
        if($registerRequest->countErrors() == 0){
            $user = new User();
            
        
            $foundUser = $this->user->where(['email' => $_POST['email']])->get();
            
            
            if(count($foundUser) == 0) {
                $_POST['password'] = md5($_POST['password']);
                unset($_POST['confirm_password']);
               
                $isCreated = $user->create($_POST);
                if($isCreated) {
                    $user = $this->user->where(['email' => $_POST['email']])->first();
                    Auth::setUser('user', $user);
                    return redirect('homepage/index');
                }
            }
            Flash::set('signup_error', 'Email đã tồn tại!');
            return redirect('register/index');

        }
        return $this->view('register/index.php', ['registerErrors' => $registerRequest->getErrors()]);
        
    }

}

?>