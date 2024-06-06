<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CateModel;
use App\Models\GalleryModel;
use App\Models\GalleryTypeModel;




class GalleryController extends BaseController
{   
    public function __construct(){
        helper(['Url', 'form', 'text', 'Text_helper']);
    }
    public function index(){
        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->orderBy('updated_at', 'DESC')->findAll();

        $cateModel = new CateModel();
        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        return view('admin/gallery/index_gallery', $data);
    }

    public function getGallery()
    {   
        $cateModel      = new CateModel();
        $post           = new PostModel();
        $galleryType    = new GalleryTypeModel();
        $galleryModel = new GalleryModel();

        $galleryTopic = $galleryModel->select('gallery_topic, gallery_bg_topic')->where('gallery_topic !=', null)->where('gallery_topic !=', "")->find();
        $galleryTopic = array_map("unserialize", array_unique(array_map("serialize", $galleryTopic)));
        // dd($galleryTopic);
        // if(count($galleryTopic)>0){
        //     foreach($galleryTopic as $key){
        //         $topic_name[] = mb_convert_case($key['gallery_topic'], MB_CASE_TITLE, 'UTF-8');
        //     }
        //     $data['topic_name'] = array_unique($topic_name);
        // }else{
        //     $data['topic_name'] = null;
        // }
        $data['topic_name'] = $galleryTopic;
        
        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['gallery_type'] = $galleryType->findAll();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        // dd($data);
        return view('admin/gallery/create_gallery', $data);
    }

    public function saveGallery()
    {
        // $this->validate();
       
        $galleryModel = new GalleryModel();
        $cateModel = new CateModel();
        $post = new PostModel();
        $galleryType    = new GalleryTypeModel();

        $cate = $cateModel->where('cate_type', 'cate_gallery')->first();
        $gallery_type = $galleryType->findAll();

        $post_url = $post->select('post.id, post.post_title')->findAll();

        $galleryTopic = $galleryModel->select('gallery_topic, gallery_bg_topic')->where('gallery_topic !=', null)->where('gallery_topic !=', "")->findAll();

        if(count($galleryTopic)>0){
            foreach($galleryTopic as $key){
                $topic_name[] = mb_convert_case($key['gallery_topic'], MB_CASE_TITLE, 'UTF-8');
            }
            $data['topic_name'] = array_unique($topic_name);
        }else{
            $data['topic_name'] = null;
        }

        



        $validation = $this->validate([

            'gallery_title'=>[
                'rules'=>'required|is_unique[gallery_image.gallery_title]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                ],

            ],
            'gallery_alias'=>[
                'rules'=>'required|is_unique[gallery_image.gallery_alias]',
                'errors' => [
                    'required' => 'Alias không được để trống.',
                    'is_unique' => 'Alias trùng với alias bài viết khác.',
                ],

            ],
            

            'gallery_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Desc không được để trống.',
                ],

            ],
            'gallery_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Key không được để trống.',
                ],

            ],

        ]);
        if(!$validation){
            return view('admin/gallery/create_gallery', ['validation'=>$this->validator, 'cate'=>$cate, 'post_url'=>$post_url, 'gallery_type'=> $gallery_type, 'topic_name'=>$topic_name]);
        }

        
        
        
        if($this->request->getPost('gallery_post_id') != null){
           $post_id = $this->request->getPost('gallery_post_id'); 
           $post_url = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->where('post.id', $post_id)->first();
            $gallery_post_url = base_url().'/'.$post_url['cate_slug'].'/'.$post_url['post_slug'].'-'.$post_url['id'].'.html';
            $data['gallery_post_url']       = $gallery_post_url;
            $data['gallery_post_id']        = $post_id;
        }else{
            $data['gallery_post_url']       = null;
            $data['gallery_post_id']        = null; 
        }

        if($this->request->getPost('gallery_file_download') != null){
            $data['gallery_file_download']       = $this->request->getPost('gallery_file_download');
        }else{
            $data['gallery_file_download']       = null;
        }

        if($this->request->getPost('gallery_link_file_origin') != null){
            $data['gallery_link_file_origin']       = $this->request->getPost('gallery_link_file_origin');
        }else{
            $data['gallery_link_file_origin']       = null;
        }

        // Color
        if($this->request->getPost('gallery_bg_topic') != null){
            $data['gallery_bg_topic']       = $this->request->getPost('gallery_bg_topic');
        }else{
            $data['gallery_bg_topic']       = null;
        }

        // Account
        if($this->request->getPost('gallery_account') != null){
            $data['gallery_account']       = $this->request->getPost('gallery_account');
        }else{
            $data['gallery_account']       = null;
        }
        
        $topic = $this->request->getPost('gallery_topic');
        if($topic == ""){
            $data['gallery_topic']          = null;
            $data['gallery_topic_slug']     = null;
        }else{
            $topic_slug = mb_strtolower(convert_name($topic));
            $topic_slug = reduce_multiples($topic_slug, '-');
            $data['gallery_topic']          = mb_convert_case($topic, MB_CASE_TITLE, 'UTF-8');
            $data['gallery_topic_slug']     = $topic_slug;
        }

        
        

        $gallery_id = $this->request->getPost('gallery_type_id');
        $gallery_type = $galleryType->find($gallery_id);
        $data['gallery_type_id']        = $gallery_id;
        $data['gallery_type_name']      = $gallery_type['gallery_type_name'];
        $data['gallery_type_slug']      = $gallery_type['gallery_type_slug'];

        


        $gallery_title = $this->request->getPost('gallery_title');
        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));
        $gallery_title_slug = reduce_multiples($gallery_title_slug, '-');

        $gallery_alias = $this->request->getPost('gallery_alias');
        $gallery_alias_slug = mb_strtolower(convert_name($gallery_alias));
        $gallery_alias_slug = reduce_multiples($gallery_alias_slug, '-');

        $data['gallery_title']          = $gallery_title;
        $data['gallery_alias']          = $gallery_alias;
        $data['gallery_title_slug']     = $gallery_alias_slug;

        $data['gallery_cate_id']        = $this->request->getPost('gallery_cate_id');
        $data['gallery_cate_slug']      = $cate['cate_slug'];
        
        $data['gallery_meta_desc']      = $this->request->getPost('gallery_meta_desc');
        $data['gallery_meta_key']       = $this->request->getPost('gallery_meta_key');
        $data['gallery_view']           = 0;
        $data['gallery_compress_times'] = 0;

        

        
        
        $img = $this->request->getFile('gallery_image');

        $type = $img->guessExtension();
        $gallery_image_name = $gallery_title_slug.'-'.random_string('alnum', 6).'.'.$type;
        $data['gallery_image']       = $gallery_image_name;
        // dd($data);

        $galleryModel->insert($data);

        if($img = $this->request->getFile('gallery_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();

                $img->move(ROOTPATH . 'public/upload/tinymce/gallery_asset', $gallery_image_name);

 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }

            
        }
        
        // return redirect()->to('admin/post')->with('success', 'Thêm thành công bài viết: '.$post_title);
        return redirect()->to('admin/gallery')->with('success', $gallery_title);
    }


    // 
    public function getEdit($id){
        $cateModel = new CateModel();
        $post = new PostModel();
        $galleryModel = new GalleryModel();
        $galleryType    = new GalleryTypeModel();


        $data['gallery'] = $galleryModel->find($id);

        if($data['gallery'] == null){
            return view('admin/404_admin');
        }


        $galleryTopic = $galleryModel->select('gallery_topic')->where('gallery_topic !=', null)->where('gallery_topic !=', "")->findAll();
        if(count($galleryTopic)>0){
            foreach($galleryTopic as $key){
                $topic_name[] = mb_convert_case($key['gallery_topic'], MB_CASE_TITLE, 'UTF-8');
            }
            $data['topic_name'] = array_unique($topic_name);
        }else{
            $data['topic_name'] = null;
        }

        $data['gallery_type'] = $galleryType->findAll();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        
        
        return view('admin/gallery/edit_gallery', $data);
    }


    public function SaveEdit($id)
    {
        $post = new PostModel();
        $cateModel = new CateModel();
        $galleryModel = new GalleryModel();
        $galleryType    = new GalleryTypeModel();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        

        $gallery_detail = $galleryModel->find($id);

        if($gallery_detail == null){
            return view('admin/404_admin');
        }

        $galleryTopic = $galleryModel->select('gallery_topic')->where('gallery_topic !=', null)->where('gallery_topic !=', "")->findAll();
        if(count($galleryTopic)>0){
            foreach($galleryTopic as $key){
                $topic_name[] = mb_convert_case($key['gallery_topic'], MB_CASE_TITLE, 'UTF-8');
            }
            $data['topic_name'] = array_unique($topic_name);
        }else{
            $data['topic_name'] = null;
        }

        $data['gallery'] = $gallery_detail;
        $gallery_title = $this->request->getPost('gallery_title');
        $data['gallery_title'] = $gallery_title;



        if($gallery_detail['gallery_title'] == $gallery_title){
            $data['gallery_title'] = $gallery_title;

        }elseif($gallery_detail['gallery_title'] != $gallery_title){
            $validation = $this->validate([
                'gallery_title'=>[
                    'rules'=>'required|is_unique[gallery_image.gallery_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                return view('admin/gallery/edit_gallery', ['validation'=>$this->validator]);
            }
        }
        $validation = $this->validate([
            
            'gallery_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Desc không được để trống.',
                ],

            ],
            'gallery_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Key không được để trống.',
                ],

            ],
        ]);
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/gallery/editGallery', $data);
        }

        $gallery_id = $this->request->getPost('gallery_type_id');
        $gallery_type = $galleryType->find($gallery_id);


        $topic = $this->request->getPost('gallery_topic');
        if($topic == ""){
            $data['gallery_topic']          = null;
            $data['gallery_topic_slug']     = null;
        }else{
            $topic_slug = mb_strtolower(convert_name($topic));
            $topic_slug = reduce_multiples($topic_slug, '-');
            $data['gallery_topic']          = mb_convert_case($topic, MB_CASE_TITLE, 'UTF-8');
            $data['gallery_topic_slug']     = $topic_slug;
        }

        


        $data['gallery_type_id']        = $gallery_id;
        $data['gallery_type_name']      = $gallery_type['gallery_type_name'];
        $data['gallery_type_slug']      = $gallery_type['gallery_type_slug'];


        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));
        $gallery_title_slug = reduce_multiples($gallery_title_slug, '-');

        $gallery_alias = $this->request->getPost('gallery_alias');
        $gallery_alias_slug = mb_strtolower(convert_name($gallery_alias));
        $gallery_alias_slug = reduce_multiples($gallery_alias_slug, '-');

        

        $data['gallery_title']          = $gallery_title;
        $data['gallery_alias']          = $gallery_alias;
        $data['gallery_title_slug']     = $gallery_alias_slug;
        $data['gallery_cate_id']        = $this->request->getPost('gallery_cate_id');

        
        $data['gallery_meta_desc']      = $this->request->getPost('gallery_meta_desc');
        $data['gallery_meta_key']       = $this->request->getPost('gallery_meta_key');
        $data['gallery_view']           = $gallery_detail['gallery_view'];
        $data['gallery_compress_times'] = $gallery_detail['gallery_compress_times'];


        if($this->request->getPost('gallery_post_id') != null){
           $post_id = $this->request->getPost('gallery_post_id'); 
           $post_url = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->where('post.id', $post_id)->first();
            $gallery_post_url = base_url().'/'.$post_url['cate_slug'].'/'.$post_url['post_slug'].'-'.$post_url['id'].'.html';
            $data['gallery_post_url']       = $gallery_post_url;
            $data['gallery_post_id']        = $post_id;
        }else{
            $data['gallery_post_url']       = null;
            $data['gallery_post_id']        = null; 
        }

        if($this->request->getPost('gallery_file_download') != null){
            $data['gallery_file_download']       = $this->request->getPost('gallery_file_download');
        }else{
            $data['gallery_file_download']       = null;
        }

        if($this->request->getPost('gallery_file_download') != null){
            $data['gallery_link_file_origin']       = $this->request->getPost('gallery_link_file_origin');
        }else{
            $data['gallery_link_file_origin']       = null;
        }


        
        
        if($this->request->getFile('gallery_image')->guessExtension() != null){


            $img = $this->request->getFile('gallery_image');

            $type = $img->guessExtension();
            $gallery_image_name = $gallery_title_slug.'-'.random_string('alnum', 6).'.'.$type;
            $data['gallery_image']       = $gallery_image_name;

            
        }else{
            $data['gallery_image'] = $gallery_detail['gallery_image'];
        }
        


        $galleryModel->update($id, $data);


        


        

        if($img = $this->request->getFile('gallery_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/gallery_asset', $gallery_image_name);
                // $path2 = ROOTPATH.'/public/upload/tinymce/image_asset/'.$post_image_name;
                // \Config\Services::image('imagick')
                // ->withFile($path2)
                // ->resize(1200, 900, true, 'height')
                // ->save($path2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                $pathTo = ROOTPATH.'/public/upload/tinymce/gallery_asset/'.$gallery_detail['gallery_image'];
                $pathTrash = ROOTPATH.'/public/upload/tinymce/gallery_asset/trash/'.$gallery_detail['gallery_image'];
                if(file_exists($pathTo)){
                    rename ($pathTo, $pathTrash);
                }                 
            }
        }
    
        return redirect()->to('admin/gallery')->with('update', $gallery_title);

    }


    public function show($id){
        $postModel = new PostModel();
        
        $postDetail = $postModel->find($id);

        $data['post_show']      = 1;


        $postModel->update($id, $data);
        return redirect()->to('admin/image')->with("success", "bài viết: "."---".$postDetail['post_title']."---"." sẽ được hiển thị trên trang web");
    }

    public function hidden($id){
        $postModel = new PostModel();
        
        $postDetail = $postModel->find($id);

        $data['post_show']      = 0;


        $postModel->update($id, $data);
        return redirect()->to('admin/image')->with("success", "bài viết: "."---".$postDetail['post_title']."---"." sẽ không hiển thị trên trang web");
    }
    public function compressGallerryImage(){
        // $imageModel = new GalleryModel();
        // $imageGallery = $imageModel->findAll();



        // foreach($imageGallery as $iG){
        //     if($iG['gallery_compress_times'] < 4){
        //         $path = 'public/upload/tinymce/gallery_asset'.'/'.$iG['gallery_image'];
        //         try {
        //             $source = \Tinify\fromFile($path);
        //             $source->toFile($path);
        //             $data['gallery_compress_times'] = $iG['gallery_compress_times'] + 1;
        //             $imageModel->update($iG['id'], $data);
        //         }
        //         catch (\Tinify\Exception $e){
        //             session()->setFlashdata('success', "Has Error");
        //             return redirect()->to('admin/gallery')->with('image', "Có Lỗi");
        //         }
        //     }
        // }


        // session()->setFlashdata('success', "Nén ảnh thành công");
        // return redirect()->to('admin/gallery');

    }


}