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

        $paginate = 10;


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
                $post_cate = $post->whereIn('post_cate_id', $cate_sub_array)->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_slug, post.post_slug, post.*')->orderBy('id', 'desc')->paginate($paginate);
                $post_count = $post->whereIn('post_cate_id', $cate_sub_array)->countAllResults();
                $most_view = $post->whereIn('post_cate_id', $cate_sub_array)->orderBy('post_view', 'DESC')->limit(4)->findAll();
                $tag_this   = $tag->whereIn('tag_cate_id', $cate_sub_array)->orderBy('tag_view', 'DESC')->limit(10)->findAll();


            }else{
                $post_cate = $post->where('post_cate_id', $cate_id)->orderBy('id', 'desc')->paginate($paginate);
                $post_count = $post->where('post_cate_id', $cate_id)->countAllResults();
                $most_view = $post->where('post_cate_id', $cate_id)->orderBy('post_view', 'DESC')->limit(4)->findAll();
                $tag_this   = $tag->where('tag_cate_id', $cate_id)->orderBy('tag_view', 'DESC')->limit(10)->findAll();


            }
        }else{
            $post_cate = $post->where('post_cate_id', $cate_id)->orderBy('id', 'desc')->paginate($paginate);
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
            'paginate'      => $paginate,
            'post_count'    => $post_count,
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

        $related_1 = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->orderBy('post.id', 'DESC')->select('cate.cate_slug, post.*')->groupStart()->where('post_cate_id', $cate_detail['id'])->where('post.id <', $id)->groupEnd()->limit(3)->findAll();
        $related_2 = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->orderBy('post.id', 'DESC')->select('cate.cate_slug, post.*')->groupStart()->where('post_cate_id', $cate_detail['id'])->where('post.id >', $id)->groupEnd()->limit(3)->findAll();
        $related = array_merge($related_1, $related_2);
        

        $previous = $post->orderBy('id', 'desc')->where('id <', $id)->first();
        $next = $post->orderBy('id', 'desc')->where('id >', $id)->first();
        $most_view_this_cate = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->orderBy('post.post_view', 'DESC')->select('cate.cate_slug, post.*')->groupStart()->where('post_cate_id', $cate_detail['id'])->where('post.id !=', $id)->groupEnd()->limit(6)->findAll();

        // dd($most_view_this_cate);

        $link_full = base_url().'/'.$cate_slug.'/'.$post_slug.'-'.$post_id.'.html';
        // dd($next);

        $data = [
            'title'         => $post_detail['post_title'],
            'meta_desc'     => $post_detail['post_meta_desc'],
            'meta_key'      => $post_detail['post_meta_key'],
            'image'         => $post_detail['post_image'],
            'created_at'    => $post_detail['created_at'],
            'updated_at'    => $post_detail['updated_at'],

            'post_detail'   => $post_detail,
            'related'       => $related,
            'previous'      => $previous,
            'next'          => $next,
            'most_view_this_cate'          => $most_view_this_cate,
            'cate_detail'   => $cate_detail,
            'tag_all'       => $tag_all,
            'link_full'     => $link_full,

        ];

        // dd($post_session);
        $sessionKey = 'post_' . $id;

        $session = session();
        
        if (session()->get($sessionKey) == null) { //nếu chưa có session
            $newdata = [
                $sessionKey  => $sessionKey,
            ];

            $session->set($newdata);
            $post_view = $post_detail['post_view'] + 1;
            $post->set('post_view', $post_view)->where('id', $id)->update();

        }
        // dd(session()->get('sessionView'));


        

        return view('front_end/canvas_site/post', $data);
    }



    public function tag($tag_slug, $tag_id){
        
        $post = new PostModel;

        $tag = new TagModel;

        $paginate = 10;
        
        $tag_detail = $tag->where('tag_post_slug', $tag_slug)->select('tag.tag_post_id, tag.tag_post_title, tag.created_at, tag.updated_at')->findAll();
        // dd($tag_detail);

        if(!isset($tag_detail) || $tag_detail == null){
            return view('front_end/canvas_site/404');
        }

        foreach($tag_detail as $key5){
            $post_id_array[] = $key5['tag_post_id'];
        }

        // dd($post_id_array);

        $post_tag = $post->whereIn('post.id', $post_id_array)->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_slug, post.*')->orderBy('post.id', 'DESC')->paginate($paginate);

        // dd($post_tag);
        $post_count = count($post_tag);
        // dd($post_count);

        if(!$post_tag && $post_tag == NULL){
            return view('front_end/canvas_site/404');
        }

        $link_full = base_url().'/tag/'.$tag_slug;

        $data = [
            'title'         => "tag: ".$tag_slug,
            'meta_desc'     => "tag: ".$tag_slug,
            'meta_key'      => "tag: ".$tag_slug,
            'image'         => 'null',
            'created_at'    => $tag_detail[0]['created_at'],
            'updated_at'    => $tag_detail[0]['updated_at'],
            'link_full'     => $link_full,

            'tag_slug'      => $tag_slug,

            'tag_name'      => $tag_detail[0]['tag_post_title'],
            'paginate'      => $paginate,
            'post_tag'      => $post_tag,
            'post_count'    => $post_count,

            'pager'         => $post->pager,
        ];
        return view("front_end/canvas_site/getTag", $data);

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
        header("Content-Type: xml;");
        return view("front_end/site_map", $data);
    }

    public function getSearch(){

        $post = new PostModel;

        $key = $_GET['q'];
        $paginate = 10;
        // dd($key);
        if(!isset($key) || $key == null || $key == '+' || $key == '++'){
            return view('front_end/canvas_site/404');
        }

        $array = ['post_title' => $key, 'post_intro' => $key, 'post_content' => $key];
        $result = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_slug, post.post_slug, post.id, post.post_title, post.post_intro, post.updated_at, post.created_at, post.post_content')->like($array)->paginate($paginate);
        $post_count = $post->join('cate', 'cate.id = post.post_cate_id', 'left')->select('cate.cate_slug, post.post_slug, post.id, post.post_title, post.post_intro, post.updated_at, post.created_at, post.post_content')->like($array)->countAllResults();


        // dd($post_count);

        $link_full = base_url().'/search?q='.$key;
        $data = [
            'title'         => "kết quả tìm kiếm cụm từ: ".$key,
            'meta_desc'     => "kết quả tìm kiếm cụm từ: ".$key,
            'meta_key'      => "kết quả tìm kiếm cụm từ: ".$key,
            'image'         => null,
            'created_at'    => null,
            'updated_at'    => null,
            'pager'         => $post->pager,




            'key'           => $key,
            'paginate'      => $paginate,
            'post_count'    => $post_count,
            'result'        => $result,
            'link_full'     => $link_full,

        ];
        
        return view("front_end/canvas_site/getSearch", $data);
    }
    public function getPage($page_slug, $id){


        $page = new PageModel;
        $page_info = $page->find($id);
        if($page_info == null){
            return view('front_end/canvas_site/404');
        }

        $link_full = base_url().'/'.$page_info['page_slug'].'-'.$page_info['id'].'.html';
        $data = [
            'title'         => $page_info['page_name'],
            'meta_desc'     => $page_info['page_meta_desc'],
            'meta_key'      => $page_info['page_meta_key'],
            'image'         => $page_info['page_image'],
            'created_at'    => $page_info['created_at'],
            'updated_at'    => $page_info['updated_at'],

            'page_info'     => $page_info,
            'link_full'     => $link_full,

        ];

        return view("front_end/canvas_site/getPage", $data);
    }



    
    
    
    
    
    
    

}
