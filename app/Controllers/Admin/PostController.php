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
        helper(['Url', 'Form', 'text', 'Text_helper']);
    }
    public function index(){
        $postModel = new PostModel();
        $data['post'] = $postModel->orderBy('id', 'DESC')->findAll();

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
            'post_image' => [
                'label' => 'Image File',
                'rules' => 'uploaded[post_image]'
                    . '|is_image[post_image]'
                    . '|mime_in[post_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[post_image,10000]',
                    // . '|max_dims[post_image,1024,768]',
                    'errors' => [
                    'uploaded' => 'Bạn chưa chọn ảnh cho bài viết.',
                    'max_size' => 'Kích trước file quá lớn.',
                ],
            ],

            

        ]);
        if(!$validation){
            return view('admin/post/create_post', ['validation'=>$this->validator, 'cate'=>$data['cate']]);
        }


        $postModel = new PostModel();

        $post_title = $this->request->getPost('post_title');
        $data['post_title'] = $post_title;

        $post_title_slug = mb_strtolower(convert_name($post_title));

        $post_title_slug = reduce_multiples($post_title_slug, '-');


        

        $post_cate_id = $this->request->getPost('post_cate_id');
        
        $data['post_slug']      = $post_title_slug;
        $data['post_intro']     = $this->request->getPost('post_intro');
        $data['post_content']   = $this->request->getPost('post_content');
        $data['post_cate_id']   = $post_cate_id;
        $data['post_featured']  = $this->request->getPost('post_featured');
        $data['post_status']    = $this->request->getPost('post_status');
        $data['post_meta_desc'] = $this->request->getPost('post_meta_desc');
        $data['post_meta_key']  = $this->request->getPost('post_meta_key');
        $data['post_view']      = 0;
        $data['post_show']      = 1;
        

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
        
        $img = $this->request->getFile('post_image');

        $type = $img->guessExtension();
        $post_image_name = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;
        $data['post_image']       = $post_image_name;


        $postModel->insert($data);

        if($img = $this->request->getFile('post_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $post_image_name);
            }
        }

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
        if($this->request->getPost('post_status') == 'san-pham'){
            if(count($this->request->getFileMultiple('post_images')) > 0)
            {
                $files = $this->request->getFileMultiple('post_images');
                foreach ($files as $file) {
                    if ($file->isValid() && ! $file->hasMoved())
                    {
                        $type = $file->guessExtension();
                        $post_image_slug = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;
                        $file->move(ROOTPATH . 'public/upload/tinymce/post_images', $post_image_slug);
                        $data = [
                            'post_image_id'         => $post_id,
                            'post_image_title'      => $post_title.'-'.random_string('alnum', 4),
                            'post_image_slug'       => $post_image_slug,
                            'post_image_meta_desc'  => $this->request->getPost('post_meta_desc'),
                            'post_image_meta_key'   => $this->request->getPost('post_meta_key'),
                        ];
                        $postImages = new PostImagesModel();
                        $postImages->insert($data);
                    }
                }
            }
        }
            

        
        // return redirect()->to('admin/post')->with('success', 'Thêm thành công bài viết: '.$post_title);
        return redirect()->to('admin/post')->with('success', $post_title);
    }


    // 
    public function getEdit($id){
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();
        $data['cate'] = $cateModel->findAll();
        $data['post_detail'] = $postModel->find($id);

        if($data['post_detail'] == null){
            return view('admin/404_admin');
        }

        $data['tagModel'] = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        // dd($data['tagModel']);
        return view('admin/post/edit_post', $data);
    }


    public function SaveEdit($id)
    {
        // $this->validate();
        // dd($id);
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();
        $data['cate'] = $cateModel->findAll();
        
        $tagList = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        // dd($tagList);
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
            // 'post_meta_desc'=>[
            //     'rules'=>'required',
            //     'errors' => [
            //         'required' => 'Nội dung Meta Description này không được để trống.',
            //     ],
            // ],
            // 'post_meta_key'=>[
            //     'rules'=>'required',
            //     'errors' => [
            //         'required' => 'Nội dung Meta Key này không được để trống.',
            //     ],
            // ],
        ]);
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/post/editPost', $data);
        }
        $data['post_title'] = $post_title;
        $post_title_slug = mb_strtolower(convert_name($post_title));
        $post_title_slug = reduce_multiples($post_title_slug, '-');
        $post_cate_id           = $this->request->getPost('post_cate_id');

        $data['post_slug']      = $post_title_slug;
        $data['post_intro']     = $this->request->getPost('post_intro');
        $data['post_content']   = $this->request->getPost('post_content');
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
        
        
        if($this->request->getFile('post_image')->guessExtension() != null){

            $img = $this->request->getFile('post_image');
            $type = $img->guessExtension();
            
            $post_image_name = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;

            $data['post_image']       = $post_image_name;
        }else{
            $data['post_image'] = $detailPost['post_image'];
        }
        


        $postModel->update($id, $data);


        $post_tag = $this->request->getPost('taginput');
        // $post_tag = json_decode($post_tag, true);
        
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

        if($img = $this->request->getFile('post_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $post_image_name);
                // $path2 = ROOTPATH.'/public/upload/tinymce/image_asset/'.$post_image_name;
                // \Config\Services::image('imagick')
                // ->withFile($path2)
                // ->resize(1200, 900, true, 'height')
                // ->save($path2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                $pathTo = ROOTPATH.'/public/upload/tinymce/image_asset/'.$detailPost['post_image'];
                $pathTrash = ROOTPATH.'/public/upload/tinymce/image_asset/trash/'.$detailPost['post_image'];
                if(file_exists($pathTo)){
                    rename ($pathTo, $pathTrash);
                }                            
            }
        }

        // Upload bộ ảnh nếu là sản phẩm & có ảnh được chọn
        if($this->request->getPost('post_status') == 'san-pham'){
            if(count($this->request->getFileMultiple('post_images')) > 0)
            {
                $files = $this->request->getFileMultiple('post_images');
                foreach ($files as $file) {
                    if ($file->isValid() && ! $file->hasMoved())
                    {
                        $type = $file->guessExtension();
                        $post_image_slug = $post_title_slug.'-'.random_string('alnum', 6).'.'.$type;
                        $file->move(ROOTPATH . 'public/upload/tinymce/post_images', $post_image_slug);
                        $data = [
                            'post_image_id'         => $post_id,
                            'post_image_title'      => $post_title.'-'.random_string('alnum', 4),
                            'post_image_slug'       => $post_image_slug,
                            'post_image_meta_desc'  => $this->request->getPost('post_meta_desc'),
                            'post_image_meta_key'   => $this->request->getPost('post_meta_key'),
                        ];
                        $postImages = new PostImagesModel();
                        $postImages->insert($data);
                    }
                }
            }
        }
    
        return redirect()->to('admin/post')->with('update', $post_title);
        // return redirect()->to('admin/post');
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

        $pathTo = ROOTPATH.'/public/upload/tinymce/image_asset/'.$post['post_image'];
        $pathTrash = ROOTPATH.'/public/upload/tinymce/image_asset/trash/'.$post['post_image'];
        if(file_exists($pathTo)){
            rename ($pathTo, $pathTrash);
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