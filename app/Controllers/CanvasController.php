<?php


namespace App\Controllers;

use App\Models\PostModel;
use App\Models\PageModel;
use App\Models\CateModel;
use App\Models\TagModel;

class CanvasController extends BaseController
{
    public function index()
    {
        $pageModel = new PageModel();
        $page_home = $pageModel->where('page_status', 1)->first();
        // dd($page_home);
        $data = [
            'title' => $page_home['page_title'],
            'meta_desc' => $page_home['page_meta_desc'],
            'meta_key' => $page_home['page_meta_key'],
            'image' => $page_home['page_image'],
            'title' => $page_home['page_title'],
            'created_at' => $page_home['created_at'],
            'updated_at' => $page_home['updated_at'],
        ];

        // dd($data);
        return view('front_end/canvas_site/home', $data);
    }
}
