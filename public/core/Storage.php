<?php 

class Storage
{
    public static function download($files)
    {

    }

    public static function upload($files, $type)
    {
        $name = $files['upload']['name'];
        $error = $files['upload']['error'];
        $tmpName = $files['upload']['tmp_name']; 
        
        if ($error == UPLOAD_ERR_OK) {
            move_uploaded_file($tmpName, "public/storage/$type/" . $name);
        }
    }

    public function get()
    {
        
    }
}