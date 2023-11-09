<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    // ...
    protected $table = "page";
    protected $primmaryKey = "id";
    protected $allowedFields = ['page_name', 'page_slug', 'page_title', 'page_image', 'page_status', 'page_content', 'page_view', 'page_show', 'facebook', 'youtube', 'twitter', 'pinterest', 'maps', 'f_app', 'g_app', 'page_favicon', 'phone', 'address', 'email', 'google_image_maps', 'page_meta_key', 'page_meta_desc', 'created_at', 'updated_at'];
    protected $dateFormat = 'datetime';
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at'; 
}

?>