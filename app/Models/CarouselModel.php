<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    // ...
    protected $table = "carousel";
    protected $primmaryKey = "id";
    protected $allowedFields = ['carousel_title', 'carousel_slug', 'carousel_status', 'carousel_image', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>