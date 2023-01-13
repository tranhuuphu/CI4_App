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

        $post = new PostModel;

        $cate = new CateModel;

        $featured = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_name, cate.id, cate.cate_slug, post.*')->orderBy('post.id', 'DESC')->where('post_featured', 1)->limit(5)->find();
        // dd($featured);

        $cate_all = $cate->where('cate_parent_id', 0)->where('cate_status', 1)->where('cate_blog', null)->find();
        // dd($cate_all);
        $cate_2 = $cate->findAll();
        $i = 0;
        foreach($cate_all as $key){
            $i++;
            $id = $key['id'];
            $cate_name[$i] = $key['cate_name'];
            foreach($cate_2 as $row){
                if($row['cate_parent_id'] == $id){
                    // $sub_id = array();
                    $sub_id[] = $row['id'];
                }
                
            }
            // dd($sub_id);
            if(isset($sub_id) && $sub_id != NULL){
                $post_cate[$i] = $post->orderBy('post.id', 'DESC')->whereIn('post_cate_id', $sub_id)->limit(5)->findAll();
                unset($sub_id);
            }else{
                $post_cate[$i] = $post->orderBy('id', 'DESC')->where('post_cate_id', $key['id'])->limit(5)->findAll();
            }

            // if($key['cate_blog'] = 1){
            //     $cate_blog = $key['id'];
            //     $blog = $post->orderBy('id', 'DESC')->where('cate_blog', 1)->limit(6)->findAll();
            // }

        }
        // dd($i);


        $cate_blog = $cate->where('cate_blog', 1)->first();
        $blog = $post->orderBy('id', 'DESC')->where('post_cate_id', $cate_blog['id'])->limit(8)->find();

        $recent_post = $post->orderBy('id', 'DESC')->limit(8)->find();
        $most_view = $post->orderBy('post_view', 'DESC')->limit(4)->find();

        // dd($most_view);
        
        // dd($data['recent_post']);



        $data['cate_all'] = $cate_all;
        $data['post_cate'] = $post_cate;

        $page_home = $pageModel->where('page_status', 1)->first();
        // dd($page_home);
        $data = [
            'title' => $page_home['page_title'],
            'meta_desc'     => $page_home['page_meta_desc'],
            'meta_key'      => $page_home['page_meta_key'],
            'image'         => $page_home['page_image'],
            'title'         => $page_home['page_title'],
            'created_at'    => $page_home['created_at'],
            'updated_at'    => $page_home['updated_at'],
            'featured'      => $featured,
            'recent_post'   => $recent_post,
            'most_view'     => $most_view,
            'cate_all'      => $cate_all,
            'cate_2'        => $cate_2,
            'cate_name'     => $cate_name,
            'post_cate'     => $post_cate,
            'blog'          => $blog,
            'i'             => $i,

        ];

        // dd($data);
        return view('front_end/canvas_site/home', $data);
    }

}
