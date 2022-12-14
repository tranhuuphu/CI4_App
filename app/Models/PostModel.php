<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    // ...
    protected $table = "post";
    protected $primmaryKey = "id";
    protected $allowedFields = ['cate_name', 'cate_slug', 'cate_parent_id', 'cate_status', 'cate_meta_desc', 'cate_meta_key', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>