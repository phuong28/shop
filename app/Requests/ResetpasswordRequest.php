<?php

require_once('app/Requests/BaseRequest.php');

class ResetpasswordRequest extends BaseRequest
{
    public function validateLogin($data)
    {
        if (empty($data['password'])) {
            $this->errors['password'] = "password không được để trống";
        }

        if (empty($data['newpassword'])) {
            $this->errors['newpassword'] = "Password không được để trống";
        }
        else 
                if($data['newpassword'] !== $data['renewpassword']) {
                    $this->errors['renewpassword'] = "Password phải giống nhau";
                }
    }
}