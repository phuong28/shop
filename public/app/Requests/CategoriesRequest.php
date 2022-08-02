<?php

require_once('app/Requests/BaseRequest.php');
class CategoriesRequest extends BaseRequest{
    public function validateCategories($data)
    {
        if (empty($data['name'])) {
            $this->errors['name'] = "Name categories không được để trống";
        }
        
        

    }
}