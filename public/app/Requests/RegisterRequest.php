<?php

require_once('app/Requests/BaseRequest.php');

class RegisterRequest extends BaseRequest
{
    public function validateRegister($data)
    {
        if (empty($data['name'])) {
            $this->errors['name'] = "Name không được để trống";
        }
        
        if (empty($data['email'])) {
            $this->errors['email'] = "Email không được để trống";
        }

        if (empty($data['password'])) {
            $this->errors['password'] = "Password không được để trống";
        } else 
                if($data['password'] !== $data['confirm_password']) {
                    $this->errors['confirm_password'] = "Password phải giống nhau";
                }

    }
}