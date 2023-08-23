<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    // ...
    protected $table = "gallery";
    protected $primmaryKey = "id";
    protected $allowedFields = ['gallery_title', 'gallery_title_slug', 'gallery_cate_id', 'gallery_image', 'gallery_post_url', 'gallery_post_id','gallery_view', 'gallery_compress_times', 'gallery_meta_key', 'gallery_meta_desc', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>