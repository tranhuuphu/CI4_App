<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    // ...
    protected $table = "post";
    protected $primmaryKey = "id";
    protected $allowedFields = ['post_cate_id', 'post_cate_slug', 'post_title', 'post_slug', 'post_intro', 'post_image', 'post_status', 'post_featured', 'post_content', 'post_view', 'post_meta_desc', 'post_meta_key', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>