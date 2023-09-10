<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryTypeModel extends Model
{
    // ...
    protected $table = "gallery_type";
    protected $primmaryKey = "id";
    protected $allowedFields = ['gallery_type_name', 'gallery_type_slug', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>