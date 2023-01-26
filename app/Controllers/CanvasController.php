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
        // dd(current_url());
        $pageModel = new PageModel();

        $post = new PostModel;

        $cate = new CateModel;

        $featured = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_name, cate.id, cate.cate_slug, post.*')->orderBy('post.id', 'DESC')->where('post_featured', 1)->limit(5)->find();

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

        }


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
            'title'         => $page_home['page_title'],
            'meta_desc'     => $page_home['page_meta_desc'],
            'meta_key'      => $page_home['page_meta_key'],
            'image'         => $page_home['page_image'],
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

    public function postCate($slug, $id){
        // dd($slug);
        
        $post = new PostModel;

        $cate = new CateModel;

        $tag = new TagModel;

        $cate_detail = $cate->where('id', $id)->first();


        if(!$cate_detail || $cate_detail == null){
            return view('front_end/canvas_site/404');
        }
        

        $cate_id = $cate_detail['id'];
        $cate_parent = $cate_detail['cate_parent_id'];
        if($cate_parent == 0 && $cate_detail['cate_blog'] == 1){
            $post_cate  = $post->where('post_cate_id', $cate_id)->orderBy('id', 'desc')->paginate(11);
            $post_count = $post->where('post_cate_id', $cate_id)->countAllResults();
            $most_view  = $post->where('post_cate_id', $cate_id)->orderBy('post_view', 'DESC')->limit(4)->findAll();
            $tag_this   = $tag->where('tag_cate_id', $cate_id)->orderBy('tag_view', 'DESC')->limit(10)->findAll();
            
        }elseif($cate_parent == 0 && $cate_detail['cate_blog'] != 1){
            $cate_sub_id = $cate->where('cate_parent_id', $cate_id)->get()->getResultArray();
            if($cate_sub_id != null){
                foreach($cate_sub_id as $c_s){
                    $cate_sub_array[] = $c_s['id'];
                }
                $post_cate = $post->whereIn('post_cate_id', $cate_sub_array)->orderBy('id', 'desc')->paginate(2);
                $post_count = $post->whereIn('post_cate_id', $cate_sub_array)->countAllResults();
                $most_view = $post->whereIn('post_cate_id', $cate_sub_array)->orderBy('post_view', 'DESC')->limit(4)->findAll();
                $tag_this   = $tag->whereIn('tag_cate_id', $cate_sub_array)->orderBy('tag_view', 'DESC')->limit(10)->findAll();


            }else{
                $post_cate = $post->where('post_cate_id', $cate_id)->orderBy('id', 'desc')->paginate(11);
                $post_count = $post->where('post_cate_id', $cate_id)->countAllResults();
                $most_view = $post->where('post_cate_id', $cate_id)->orderBy('post_view', 'DESC')->limit(4)->findAll();
                $tag_this   = $tag->where('tag_cate_id', $cate_id)->orderBy('tag_view', 'DESC')->limit(10)->findAll();


            }
        }else{
            $post_cate = $post->where('post_cate_id', $cate_id)->orderBy('id', 'desc')->paginate(11);
            $post_count = $post->where('post_cate_id', $cate_id)->countAllResults();
            $most_view = $post->where('post_cate_id', $cate_id)->orderBy('post_view', 'DESC')->limit(4)->findAll();
            $tag_this   = $tag->where('tag_cate_id', $cate_id)->orderBy('tag_view', 'DESC')->limit(10)->findAll();
            
        }


        $link_full = base_url().'/'.$slug.'-'.$id;

        $data = [
            'title'         => $cate_detail['cate_name'],
            'meta_desc'     => $cate_detail['cate_meta_desc'],
            'meta_key'      => $cate_detail['cate_meta_key'],
            'image'         => 'null',
            'created_at'    => $cate_detail['created_at'],
            'updated_at'    => $cate_detail['updated_at'],
            'link_full'     => $link_full,

            'cate_name'     => $cate_detail['cate_name'],
            'cate_slug'     => $slug,

            'post_cate'     => $post_cate,
            'most_view'     => $most_view,
            'tag_this'      => $tag_this,

            'pager'         => $post->pager,


        ];

        if($cate_detail['cate_blog'] == 1){
            return view('front_end/canvas_site/blog_cate', $data);
        }else{
            return view('front_end/canvas_site/post_cate', $data);
        }

        
        // return view('front_end/canvas_site/post_cate');
    }



    public function post($slug2, $title, $id){
        $post = new PostModel;
        $cate = new CateModel;
        $tag = new TagModel;


        $post_detail = $post->find($id);
        if(!$post_detail){
            return view('front_end/canvas_site/404');
        }
        $cate_detail = $cate->where('id', $post_detail['post_cate_id'])->first();

        $post_slug = $post_detail['post_slug'];
        $cate_slug = $cate_detail['cate_slug'];
        $post_id = $post_detail['id'];
        $tag_all = $tag->where('tag_post_id', $id)->find();

        // dd($tag_all);

        if($slug2 != $cate_slug || $title != $post_slug){
            return redirect()->to(base_url().'/'.$cate_slug.'/'.$post_slug.'-'.$post_id.'.html');
        }

        $link_full = base_url().'/'.$cate_slug.'/'.$post_slug.'-'.$post_id.'.html';


        $data = [
            'title'         => $post_detail['post_title'],
            'meta_desc'     => $post_detail['post_meta_desc'],
            'meta_key'      => $post_detail['post_meta_key'],
            'image'         => $post_detail['post_image'],
            'created_at'    => $post_detail['created_at'],
            'updated_at'    => $post_detail['updated_at'],

            'post_detail'   => $post_detail,
            'cate_detail'   => $cate_detail,
            'tag_all'       => $tag_all,
            'link_full'     => $link_full,

        ];

        return view('front_end/canvas_site/post', $data);
    }



    public function tags($tags){


        $post = new Post_Model;
        $tags_array = explode('-', $tags);
        $tags_origin = implode(' ', $tags_array);


        $post_tag = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->like('post_tag', $tags_origin)->paginate(10);

        if(!$post_tag && $post_tag == NULL){
            return view('errors/404');
        }

        $data = [
            'post_tag'      => $post_tag,
            'tags'          => $tags,
            'tags_origin'   => $tags_origin,
            'pager'         => $post->pager,
        ];
    }

    public function siteMap(){
        $post = new PostModel;

        $cate = new CateModel;

        $tag = new TagModel;

        $page = new PageModel;

        $page_info  = $page->findAll();

        $cate_info  = $cate->findAll();

        $tag_info   = $tag->findAll();


        $post_all = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_slug, post.post_slug, post.id')->findAll();
        // dd($post_all);

        $data = [
            'page_info'     => $page_info,
            'cate_info'     => $cate_info,
            'tag_info'      => $tag_info,
            'post_all'      => $post_all,
        ];

        return view("front_end/site_map", $data);
    }

    public function getSearch(){

        $data['key'] = $_GET['q'];
        if(!isset($data['key']) && $data['key'] == NULL || $data['key'] == '+' || $data['key'] == '++'){
            return view('errors/404');
        }

        return view("site/getSearch", $data);
    }



    
    
    
    
    
    
    

}
