<?php

require_once('app/Requests/BaseRequest.php');
class ProductsRequest extends BaseRequest{
    public function validateProducts($data)
    {
        if (empty($data['name'])) {
            $this->errors['name'] = "Name categories không được để trống";
        }
        if(empty($data['description'])){
            $this->errors['description'] = "description  không được để trống";
        }
        if(empty($data['color'])){
            $this->errors['color']="color khong duoc de trong";
        }
        
        

    }
}