<?php

namespace App\Models;

use CodeIgniter\Model;

class PostImageModel extends Model
{
    // ...
    protected $table = "post_image";
    protected $primmaryKey = "id";
    protected $allowedFields = ['post_image_id', 'post_image_title', 'post_image_slug', 'post_image_meta_desc', 'post_image_meta_key', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>