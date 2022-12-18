<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CateModel;
use App\Models\TagModel;


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
            return view('admin/post/create', ['validation'=>$this->validator, 'cate'=>$data['cate']]);
        }


        $postModel = new PostModel();

        $post_title = $this->request->getPost('post_title');
        $data['post_title'] = $post_title;

        $post_title_slug = mb_strtolower(convert_name($post_title));

        

        $post_cate_id = $this->request->getPost('post_cate_id');

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
        // $data['taginput']      = $this->request->getPost('taginput');

        // dd($data);

        $cateModel = new CateModel();
        $cate_slug = $cateModel->where('id', $post_cate_id)->first();

        $data['post_cate_slug']   = $cate_slug['cate_slug'];
        
        $img = $this->request->getFile('post_image');

        $type = $img->guessExtension();
        $post_title_slug2 = $post_title_slug.'-'.random_string('alnum', 16).'.'.$type;
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
        $post_tag = $this->request->getPost('taginput');
        $post_tag = json_decode($post_tag, true);

        foreach($post_tag as $t_a){
            $ta[] = $t_a['value'];
        }

        if($postModel){
            $post_id = $postModel->insertID();
            if($post_tag != null){
                $tag_create = new TagModel();
                foreach($ta as $t_a){
                    $tag_create->insert(
                        ['tag_cate_id' => $cate_slug['id'], 'tag_cate_slug' => $cate_slug['cate_slug'], 'tag_post_id' => $post_id, 'tag_post_title' => $t_a, 'tag_post_slug' => mb_strtolower(convert_name($t_a)), 'tag_view' => 0],
                    );
                }
            }
        }
        
    

        return redirect()->to('admin/post')->with('success', 'Thêm thành công bài viết: '.$post_title);
    }

    public function getEdit($id){
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();
        $data['cate'] = $cateModel->findAll();
        $data['postDetail'] = $postModel->find($id);
        $data['tagModel'] = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        // dd($data['tagModel']);
        return view('admin/post/editPost', $data);
    }


    public function SaveEdit($id)
    {
        // $this->validate();
        // dd($id);
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();

        $data['cate'] = $cateModel->findAll();
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

        $validation = $this->validate([

            
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
                    . '|max_size[post_image,1000]',
                    // . '|max_dims[post_image,1024,768]',
                    'errors' => [
                    'uploaded' => 'Bạn chưa chọn ảnh cho bài viết.',
                    'max_size' => 'Kích trước file quá lớn.',
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
            return view('admin/post/create', ['validation'=>$this->validator, 'cate'=>$data['cate']]);
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


        $post_tag = $this->request->getPost('taginput');
        $post_tag = json_decode($post_tag, true);
        $tagList = $tagModel->where('tag_post_id', $id)->get()->getResultArray();

        foreach($post_tag as $t_a){
            $ta[] = $t_a['value'];
        }

        if($postModel){
            
            if($post_tag != null){
                $tag_update = new TagModel();
                foreach ($tagList as $tagItem) {
                    foreach($ta as $t_a){
                        if($tagItem['tag_post_slug'] != mb_strtolower(convert_name($t_a))){
                            $tag_update->update($id,
                            [
                                'tag_cate_id' => $cate_slug['id'], 'tag_cate_slug' => $cate_slug['cate_slug'], 'tag_post_id' => $post_id, 'tag_post_title' => $t_a, 'tag_post_slug' => mb_strtolower(convert_name($t_a)), 'tag_view' => 0
                            ]);
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
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $post_title_slug2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }
        }
    

        return redirect()->to('admin/post');
    }


}