<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CateModel;
use App\Models\TagModel;
use App\Models\PostImagesModel;


class PostController extends BaseController
{   
    public function __construct(){
        helper(['Url', 'form', 'text', 'Text_helper']);
    }
    public function index(){
        $postModel = new PostModel();
        $data['post'] = $postModel->orderBy('updated_at', 'DESC')->findAll();

        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();

        return view('admin/post/index_post', $data);
    }

    public function getPost()
    {   
        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();
        return view('admin/post/create_post', $data);
    }

    public function savePost()
    {
        // $this->validate();
        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();

        $validation = $this->validate([
            'post_title'=>[
                'rules'=>'required|is_unique[post.post_title]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                ],

            ],
            'post_content'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung bài viết không được để trống.',
                ],

            ],

        ]);
        if(!$validation){
            return view('admin/post/create_post', ['validation'=>$this->validator, 'cate'=>$data['cate']]);
        }


        $postModel = new PostModel();

        $post_alias = $this->request->getPost('post_alias');

        $post_title = $this->request->getPost('post_title');

        $post_title_slug = mb_strtolower(convert_name($post_title));
        $post_title_slug = reduce_multiples($post_title_slug, '-');

        $post_alias_slug = mb_strtolower(convert_name($post_alias));
        $post_alias_slug = reduce_multiples($post_alias_slug, '-');

        $post_cate_id = $this->request->getPost('post_cate_id');

        $data['post_title']     = $post_title;
        $data['post_alias']     = $post_alias;
        $data['post_slug']      = $post_alias_slug;
        $data['post_intro']     = $this->request->getPost('post_intro');
        $data['post_content']   = $this->request->getPost('post_content');
        $data['post_content2']  = $this->request->getPost('post_content2');

        $data['post_cate_id']   = $post_cate_id;
        $data['post_featured']  = $this->request->getPost('post_featured');
        $data['post_status']    = $this->request->getPost('post_status');
        $data['post_image']     = $this->request->getPost('post_image');

        $data['post_meta_desc'] = $this->request->getPost('post_meta_desc');
        $data['post_meta_key']  = $this->request->getPost('post_meta_key');
        
        $data['post_view']      = 0;
        $data['post_show']      = 1;

        // image check
        $post_image = $this->request->getPost('post_image');
                if($post_image != "" || $post_image != null){
            if(gettype($post_image) === 'string' && gettype(json_decode($post_image)) === 'array'){
                // array
                $number_rand = array_rand(json_decode($post_image));
                $image_array = json_decode($post_image);
                $image_array = array_unique($image_array);
                $data['post_image'] = $image_array[$number_rand];
            }else{
                // null
                $data['post_image'] = $post_image;
            }
        }
        

        $cateModel = new CateModel();
        $cate_slug = $cateModel->where('id', $post_cate_id)->first();

        $data['post_cate_name']   = $cate_slug['cate_name'];
        $data['post_cate_slug']   = $cate_slug['cate_slug'];

        if($cate_slug['cate_type'] == "blog"){
            $data['post_price']     = null;
            $data['post_sale']      = null;
        }else{
            $data['post_price']     = $this->request->getPost('post_price');
            $data['post_sale']      = $this->request->getPost('post_sale');
        }
        

        $postModel->insert($data);


        $post_id = $postModel->insertID();

        $post_tag = $this->request->getPost('taginput');
        
        if($post_tag != null){
            $post_tag = json_decode($post_tag, true);
            foreach($post_tag as $t_a){
                $ta[] = $t_a['value'];
            }
        }

        if($postModel){
            if($post_tag != null){
                $tag_create = new TagModel();
                foreach($ta as $t_a){
                    $tag_create->insert([
                        'tag_cate_id'       => $cate_slug['id'],
                        'tag_cate_slug'     => $cate_slug['cate_slug'],
                        'tag_post_id'       => $post_id,
                        'tag_post_title'    => $t_a,
                        'tag_post_slug'     => mb_strtolower(convert_name($t_a)),
                        'tag_show'          => 1,
                        'tag_view'          => 0
                    ]);
                }
            }
        }

        // Upload bộ ảnh nếu là sản phẩm & có ảnh được chọn
        // if($this->request->getPost('post_status') == 'san-pham'){
        //     if(count($this->request->getFileMultiple('post_images')) > 0)
        //     {
        //         $files = $this->request->getFileMultiple('post_images');
        //         foreach ($files as $file) {
        //             if ($file->isValid() && ! $file->hasMoved())
        //             {
        //                 $type = $file->guessExtension();
        //                 $post_image_slug = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;
        //                 $file->move(ROOTPATH . 'public/upload/tinymce/post_images', $post_image_slug);
        //                 $data = [
        //                     'post_image_id'         => $post_id,
        //                     'post_image_title'      => $post_title.'-'.random_string('alnum', 4),
        //                     'post_image_slug'       => $post_image_slug,
        //                     'post_image_meta_desc'  => $this->request->getPost('post_meta_desc'),
        //                     'post_image_meta_key'   => $this->request->getPost('post_meta_key'),
        //                 ];
        //                 $postImages = new PostImagesModel();
        //                 $postImages->insert($data);
        //             }
        //         }
        //     }
        // }
        
        // return redirect()->to('admin/post')->with('success', 'Thêm thành công bài viết: '.$post_title);
        return redirect()->to('admin/post')->with('success', $post_title);
    }


    // 
    public function getEdit($id){
        $postModel              = new PostModel();
        $cateModel              = new CateModel();
        $tagModel               = new TagModel();
        $PostImagesModel        = new PostImagesModel();

        $data['cate']           = $cateModel->findAll();
        $data['post_detail']    = $postModel->find($id);
        $data['postImages']     = $PostImagesModel->findAll($id);

        if($data['post_detail'] == null){
            return view('admin/404_admin');
        }

        $data['tagModel'] = $tagModel->where('tag_post_id', $id)->get()->getResultArray();

        return view('admin/post/edit_post', $data);
    }


    public function SaveEdit($id)
    {
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();
        $PostImagesModel        = new PostImagesModel();

        $data['cate']           = $cateModel->findAll();
        $data['postImages']     = $PostImagesModel->findAll($id);
        
        $tagList = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        $data['tagModel'] = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        $detailPost = $postModel->find($id);

        if($detailPost == null){
            return view('admin/404_admin');
        }

        $post_title = $this->request->getPost('post_title');
        $data['post_detail'] = $detailPost;

        if($detailPost['post_title'] = $post_title){
            $data['post_title'] = $post_title;

        }elseif($detailPost['post_title'] != $post_title){
            $validation = $this->validate([
                'post_title'=>[
                    'rules'=>'required|is_unique[post.post_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                return view('admin/post/edit_post', ['validation'=>$this->validator]);
            }
        }

        $validation = $this->validate([
            'post_content'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung bài viết không được để trống.',
                ],
            ],
            'post_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung Meta Description này không được để trống.',
                ],
            ],
            'post_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung Meta Key này không được để trống.',
                ],
            ],
        ]);

        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/post/editPost', $data);
        }

        $post_alias = $this->request->getPost('post_alias');
        $post_alias_slug = mb_strtolower(convert_name($post_alias));
        $post_alias_slug = reduce_multiples($post_alias_slug, '-');


        $data['post_title'] = $post_title;

        $post_title     = $this->request->getPost('post_title');
        $post_title_slug = mb_strtolower(convert_name($post_title));
        $post_title_slug = reduce_multiples($post_title_slug, '-');

        $post_cate_id           = $this->request->getPost('post_cate_id');

        $data['post_title']     = $post_title;
        $data['post_alias']     = $post_alias;
        $data['post_slug']      = $post_alias_slug;
        $data['post_intro']     = $this->request->getPost('post_intro');
        $data['post_content']   = $this->request->getPost('post_content');
        $data['post_content2']  = $this->request->getPost('post_content2');
        
        $data['post_cate_id']   = $post_cate_id;
        $data['post_featured']  = $this->request->getPost('post_featured');
        $data['post_status']    = $this->request->getPost('post_status');
        

        $data['post_meta_desc'] = $this->request->getPost('post_meta_desc');
        $data['post_meta_key']  = $this->request->getPost('post_meta_key');

        $data['post_view']      = $detailPost['post_view'];
        $data['post_show']      = $detailPost['post_show'];

        $cate_slug = $cateModel->where('id', $this->request->getPost('post_cate_id'))->first();

        $data['post_cate_name']   = $cate_slug['cate_name'];
        $data['post_cate_slug']   = $cate_slug['cate_slug'];

        if($cate_slug['cate_type'] == "blog"){
            $data['post_price']     = null;
            $data['post_sale']      = null;
        }else{
            $data['post_price']     = $this->request->getPost('post_price');
            $data['post_sale']      = $this->request->getPost('post_sale');
        }
        
        
        if($this->request->getPost('post_image') != null){
            // image check
            $post_image = $this->request->getPost('post_image');
                    if($post_image != "" || $post_image != null){
                if(gettype($post_image) === 'string' && gettype(json_decode($post_image)) === 'array'){
                    // array
                    $number_rand = array_rand(json_decode($post_image));
                    $image_array = json_decode($post_image);
                    $image_array = array_unique($image_array);
                    $data['post_image'] = $image_array[$number_rand];
                }else{
                    // null
                    $data['post_image'] = $post_image;
                }
            }
        }else{
            $data['post_image'] = $detailPost['post_image'];
        }


        // Upload using upload normal without using rfm
        // if($this->request->getFile('post_image')->guessExtension() != null){

        //     $img = $this->request->getFile('post_image');
        //     $type = $img->guessExtension();
            
        //     $post_image_name = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;

        //     $data['post_image']       = $post_image_name;
        // }else{
        //     $data['post_image'] = $detailPost['post_image'];
        // }
        
        

        $postModel->update($id, $data);


        $post_tag = $this->request->getPost('taginput');
        $tagId = $tagModel->where('tag_post_id', $id)->first();
        if($postModel){
            if($post_tag != null){
                $tagModel->where('tag_post_id', $id)->delete();
                $post_tag = json_decode($post_tag, true);
                foreach($post_tag as $t_a){
                    $ta[] = $t_a['value'];
                }
                if($postModel){
                    if($post_tag != null){
                        foreach($ta as $t_a){
                            $tagModel->insert(
                                ['tag_cate_id' => $cate_slug['id'], 'tag_cate_slug' => $cate_slug['cate_slug'], 'tag_post_id' => $id, 'tag_post_title' => $t_a, 'tag_post_slug' => mb_strtolower(convert_name($t_a)), 'tag_show' => 1, 'tag_view' => 0],
                            );
                        }
                    }
                }
            }
        }

        // save image after update field image
        // if($img = $this->request->getFile('post_image'))
        // {
        //     if ($img->isValid() && ! $img->hasMoved())
        //     {
        //         $type = $img->getClientMimeType();
        //         $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $post_image_name);
        //         $pathTo = ROOTPATH.'/public/upload/tinymce/image_asset/'.$detailPost['post_image'];
        //         $pathTrash = ROOTPATH.'/public/upload/tinymce/image_asset/trash/'.$detailPost['post_image'];
        //         if(file_exists($pathTo)){
        //             rename ($pathTo, $pathTrash);
        //         }                            
        //     }
        // }


        // Upload bộ ảnh nếu là sản phẩm & có ảnh được up
        // if($this->request->getPost('post_status') == 'san-pham'){
        //     if(count($this->request->getFileMultiple('post_images')) > 0)
        //     {
        //         $files = $this->request->getFileMultiple('post_images');
        //         foreach ($files as $file) {
        //             if ($file->isValid() && ! $file->hasMoved())
        //             {
        //                 $type = $file->guessExtension();
        //                 $post_image_slug = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;
        //                 $file->move(ROOTPATH . 'public/upload/tinymce/post_images', $post_image_slug);
        //                 $data = [
        //                     'post_image_id'         => $post_id,
        //                     'post_image_title'      => $post_title.'-'.random_string('alnum', 4),
        //                     'post_image_slug'       => $post_image_slug,
        //                     'post_image_meta_desc'  => $this->request->getPost('post_meta_desc'),
        //                     'post_image_meta_key'   => $this->request->getPost('post_meta_key'),
        //                 ];
        //                 $postImages = new PostImagesModel();
        //                 $postImages->insert($data);
        //             }
        //         }
        //     }
        // }
    
        return redirect()->to('admin/post')->with('update', $post_title);
        // return redirect()->to('admin/post');
    }



    // Product Function
    public function getProduct(){
        $postModel = new PostModel();
        $data['post'] = $postModel->orderBy('updated_at', 'DESC')->where('post_status', 'san-pham')->findAll();

        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();

        return view('admin/post/index_product', $data);
    }

    public function getProductEdit($id){
        $postModel              = new PostModel();
        $cateModel              = new CateModel();
        $tagModel               = new TagModel();
        $PostImagesModel        = new PostImagesModel();

        $data['cate']           = $cateModel->findAll();
        $data['post_detail']    = $postModel->find($id);
        $data['postImages']     = $PostImagesModel->findAll($id);

        if($data['post_detail'] == null){
            return view('admin/404_admin');
        }

        $data['tagModel'] = $tagModel->where('tag_post_id', $id)->get()->getResultArray();

        return view('admin/post/edit_post_product', $data);
    }

    public function saveProductEdit($id){
        $postModel = new PostModel();
        $PostImagesModel = new PostImagesModel();

        $post_detail    = $postModel->find($id);
        if($post_detail == null){
            return view('admin/404_admin');
        }
        // delete img
        $post_images_del = $this->request->getPost('post_images_del');
        if($post_images_del != null || $post_images_del != ""){
            foreach($post_images_del as $images){
                $PostImagesModel->delete($images);
            }
        }

        $post_images = $this->request->getPost('post_image');

        if($post_images != "" || $post_images != null){
            if(gettype($post_images) === 'string' && gettype(json_decode($post_images)) === 'array'){
                

                // array
                $i = 1;
                $image_array = json_decode($post_images);
                foreach ($image_array as $value_img) {
                    
                    
                    $data = [
                        'post_image_id'         => $id,
                        'post_image_title'      => $post_detail['post_title'].'-'.random_string('alnum', 4),
                        'post_image_slug'       => $value_img,
                        'post_image_meta_desc'  => $post_detail['post_meta_desc'].'-'.random_string('alnum', 4),
                        'post_image_meta_key'   => $post_detail['post_meta_key'].'-'.random_string('alnum', 4),
                    ];
                    $postImages = new PostImagesModel();
                    $postImages->insert($data);
                    $i += 1;
                }
                

            }else{
                // null
                $data = [
                    'post_image_id'         => $id,
                    'post_image_title'      => $post_detail['post_title'].'-'.random_string('alnum', 4),
                    'post_image_slug'       => $post_images,
                    'post_image_meta_desc'  => $post_detail['post_meta_desc'].'-'.random_string('alnum', 4),
                    'post_image_meta_key'   => $post_detail['post_meta_key'].'-'.random_string('alnum', 4),
                ];
                $postImages = new PostImagesModel();
                $postImages->insert($data);
            }
        }
            


        return redirect()->to('admin/post/product')->with('update', $post_detail['post_title']);
        

    }


    public function show($id){
        $postModel = new PostModel();
        
        $post_detail = $postModel->find($id);
        if($post_detail == null){
            return view('admin/404_admin');
        }
        $data['post_show']      = 1;

        $postModel->update($id, $data);
        return redirect()->to('admin/post')->with("show", $post_detail['post_title']);
    }

    public function hidden($id){
        $postModel = new PostModel();
        
        $post_detail = $postModel->find($id);
        if($post_detail == null){
            return view('admin/404_admin');
        }
        $data['post_show']      = 0;

        $postModel->update($id, $data);
        return redirect()->to('admin/post')->with("hidden", $post_detail['post_title']);
    }

    public function getDelete($id){

        $postModel = new PostModel();
        $post = $postModel->find($id);
        if($post == null){
            return view('admin/404_admin');
        }

        $postModel->delete(['id' => $id]);
        $tagModel = new TagModel();
        $tag_all = $tagModel->where('tag_post_id', $id)->findAll();
        if($tag_all != null){
            foreach($tag_all as $ta){
                $tagModel->delete($ta['id']);
            }
        }
        return redirect()->to('admin/post')->with('delete', $post['post_title']);
    }



}