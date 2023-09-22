<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    // ...
    protected $table = "image_tinycme";
    protected $primmaryKey = "id";
    protected $allowedFields = ['image_TinyCME_name', 'image_TinyCME_status', 'image_size_original', 'image_size_compressed', 'image_folder', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>