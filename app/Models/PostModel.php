<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    // ...
    protected $table = "post";
    protected $primmaryKey = "id";
    protected $allowedFields = ['post_cate_id', 'post_cate_name', 'post_cate_slug', 'post_title', 'post_alias', 'post_slug', 'post_intro', 'post_image', 'post_status', 'post_finish', 'post_featured', 'post_content', 'post_content2', 'post_price', 'post_sale', 'post_view', 'post_show', 'post_meta_desc', 'post_meta_key', 'time_view_newest', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>