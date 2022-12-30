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
            'title' => $page_home['page_title'],
            'title' => $page_home['page_title'],
            'title' => $page_home['page_title'],
            'title' => $page_home['page_title'],
        ];

        // dd($data);
        return view('front_end/canvas_site/home', $data);
    }
}
