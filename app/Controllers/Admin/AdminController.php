<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\PostModel;
use App\Models\PageModel;
use App\Models\CateModel;
use App\Models\TagModel;
use App\Models\GalleryModel;
use App\Models\PostImagesModel;
use App\Models\DonHangModel;
use App\Models\ImageModel;

class AdminController extends BaseController
{
    public function index()
    {   
        $galleryModel = new GalleryModel();
        $postModel = new postModel();

        $data['totalGallery'] = $galleryModel->countAllResults();
        $data['totalPost'] = $postModel->countAllResults();
        $data['totalBlog'] = $postModel->where('post_cate_slug', 'blog')->countAllResults();
        $data['totalProduct'] = $postModel->where('post_status', 'san-pham')->countAllResults();

        $data['postMostView'] = $postModel->orderBy('post_view', 'DESC')->limit(5)->find();
        $data['imageMostView'] = $galleryModel->orderBy('gallery_view', 'DESC')->limit(5)->find();

        $data['postRecent'] = $postModel->orderBy('updated_at', 'DESC')->limit(3)->find();
        $data['imageRecent'] = $galleryModel->orderBy('updated_at', 'DESC')->limit(12)->find();

        
        $data['postRecentView'] = $postModel->orderBy('time_view_newest', 'DESC')->limit(3)->find();
        $data['imageRecentView'] = $galleryModel->orderBy('time_view_newest', 'DESC')->limit(12)->find();


        $data['totalPostView'] = $postModel->selectSum('post_view')->findAll();

        $data['totalGalleryView'] = $galleryModel->selectSum('gallery_view')->findAll();
        
        


        $data['title'] = [
            'pageTitle'=>'Admin Dashboard',
        ];

        return view('admin', $data);
    }
}