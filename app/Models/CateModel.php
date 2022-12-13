<?php

namespace App\Models;

use CodeIgniter\Model;

class CateModel extends Model
{
    // ...
    protected $table = "cate";
    protected $primmaryKey = "cate_id";
    protected $allowedFields = ['cate_name', 'cate_slug', 'parent_cate_id', 'cate_status', 'cate_meta_desc', 'cate_meta_key', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>