<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function getPost()
    {
        
        return view('admin/post/postCreate');
    }

    public function savePost()
    {
        
        return view('admin/post/postCreate');
    }
}