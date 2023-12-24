<?php

namespace App\Models;

use CodeIgniter\Model;

class TagModel extends Model
{
    // ...
    protected $table = "tag";
    protected $primmaryKey = "id";
    protected $allowedFields = ['tag_cate_id', 'tag_cate_slug', 'tag_post_id', 'tag_post_title', 'tag_post_slug', 'tag_show', 'tag_view', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>