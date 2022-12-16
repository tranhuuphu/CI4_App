<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CateModel;


class PostController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text_helper']);
    }
    public function index(){
        $postModel = new PostModel();
        $data['post'] = $postModel->findAll();

        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();

        return view('admin/post/index', $data);
    }

    public function getPost()
    {   
        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();
        return view('admin/post/create', $data);
    }

    public function savePost()
    {
        // $this->validate();

        $postModel = new PostModel();

        $post_title = $this->request->getPost('post_title');
        $data['post_title'] = $post_title;

        $post_title_slug = convert_name($post_title);

        

        $post_cate_id = $this->request->getPost('post_cate_id');

        $data['post_slug'] = $post_title_slug;
        $data['post_intro']     = $this->request->getPost('post_intro');
        $data['post_content']   = $this->request->getPost('post_content');
        $data['post_cate_id']   = $post_cate_id;
        $data['post_featured']  = $this->request->getPost('post_featured');
        $data['post_price']     = $this->request->getPost('post_price');
        $data['post_sale']      = $this->request->getPost('post_sale');
        $data['post_status']    = $this->request->getPost('post_status');
        $data['post_meta_desc'] = $this->request->getPost('post_meta_desc');
        $data['post_meta_key']  = $this->request->getPost('post_meta_key');
        $data['tagsinput']      = $this->request->getPost('tagsinput');

        $cateModel = new CateModel();
        $cate_slug = $cateModel->select('cate_slug')->where('id', $post_cate_id)->first();

        $data['post_cate_slug']   = $cate_slug['cate_slug'];
        
        $img = $this->request->getFile('post_image');

        $type = $img->guessExtension();
        $post_title_slug2 = $post_title_slug.'.'.$type;
        $data['post_image']       = $post_title_slug2;


        $postModel->insert($data);

        if($img = $this->request->getFile('post_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $post_title_slug2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }
        }
    

        return redirect()->to('admin/post');
    }

    public function getEdit($id){
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $data['cate'] = $cateModel->findAll();
        $data['postDetail'] = $postModel->find($id);
        return view('admin/post/editPost', $data);
    }


    public function SaveEdit($id)
    {
        // $this->validate();
        // dd($id);
        $postModel = new PostModel();
        $detailPost = $postModel->find($id);
        $post_title = $this->request->getPost('post_title');

        if($detailPost['post_title'] == $post_title){
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
                return view('admin/post/editPost', ['validation'=>$this->validator]);
            }
        }


        $post_title_slug = convert_name($post_title);

        
        $post_cate_id           = $this->request->getPost('post_cate_id');

        $data['post_slug']      = $post_title_slug;
        $data['post_intro']     = $this->request->getPost('post_intro');
        $data['post_content']   = $this->request->getPost('post_content');
        $data['post_cate_id']   = $post_cate_id;
        $data['post_featured']  = $this->request->getPost('post_featured');
        $data['post_price']     = $this->request->getPost('post_price');
        $data['post_sale']      = $this->request->getPost('post_sale');
        $data['post_status']    = $this->request->getPost('post_status');
        $data['post_meta_desc'] = $this->request->getPost('post_meta_desc');
        $data['post_meta_key']  = $this->request->getPost('post_meta_key');
        $data['tagsinput']      = $this->request->getPost('tagsinput');

        $cateModel = new CateModel();
        $cate_slug = $cateModel->select('cate_slug')->where('id', $post_cate_id)->first();

        $data['post_cate_slug']   = $cate_slug['cate_slug'];
        
        
        if(!empty($this->request->getFile('post_image'))){

            $img = $this->request->getFile('post_image');
            $type = $img->guessExtension();
            
            $post_title_slug2 = $post_title_slug.'-'.random_string('alnum', 16).'.'.$type;

            $data['post_image']       = $post_title_slug2;
        }else{
            $data['post_image'] = $detailPost['post_image'];
        }
        


        $postModel->update($id, $data);

        if($img = $this->request->getFile('post_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $post_title_slug2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }
        }
    

        return redirect()->to('admin/post');
    }


}