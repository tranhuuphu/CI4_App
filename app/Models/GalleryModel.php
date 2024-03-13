<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    // ...
    protected $table = "gallery_image";
    protected $primmaryKey = "id";
    protected $allowedFields = ['gallery_type_id', 'gallery_type_name', 'gallery_type_slug', 'gallery_title', 'gallery_title_slug', 'gallery_topic', 'gallery_topic_slug', 'gallery_cate_id', 'gallery_cate_slug', 'gallery_image', 'gallery_img_download_times', 'gallery_post_url', 'gallery_file_download', 'gallery_link_file_origin', 'gallery_post_id','gallery_view', 'gallery_compress_times', 'gallery_meta_key', 'gallery_meta_desc', 'time_view_newest', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>