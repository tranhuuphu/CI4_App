<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CateModel;
use App\Models\GalleryModel;


class GalleryController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text_helper']);
    }
    public function index(){
        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->orderBy('id', 'DESC')->findAll();

        $cateModel = new CateModel();
        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        return view('admin/gallery/index', $data);
    }

    public function getGallery()
    {   
        $cateModel = new CateModel();
        $post = new PostModel();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        // dd($data);
        return view('admin/gallery/create', $data);
    }

    public function saveGallery()
    {
        // $this->validate();
       
        $galleryModel = new GalleryModel();
        $cateModel = new CateModel();
        $post = new PostModel();

        $cate = $cateModel->where('cate_type', 'cate_gallery')->first();

        // $post_url = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.post_title, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->find();
        $post_url = $post->select('post.id, post.post_title')->findAll();


        $validation = $this->validate([

            'gallery_title'=>[
                'rules'=>'required|is_unique[gallery.gallery_title]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                ],

            ],
            
            'gallery_image' => [
                'label' => 'Image File',
                'rules' => 'uploaded[gallery_image]'
                    . '|is_image[gallery_image]'
                    . '|mime_in[gallery_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[gallery_image,10000]',
                    'errors' => [
                    'uploaded' => 'Bạn chưa chọn ảnh/sai định dạng ảnh cho bài viết.',
                    'max_size' => 'Kích trước file quá lớn.',
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
            return view('admin/gallery/create', ['validation'=>$this->validator, 'cate'=>$cate, 'post_url'=>$post_url]);
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
        




        $gallery_title = $this->request->getPost('gallery_title');
        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));

        

        $data['gallery_title']          = $gallery_title;
        $data['gallery_title_slug']     = $gallery_title_slug;
        $data['gallery_cate_id']        = $this->request->getPost('gallery_cate_id');
        
        $data['gallery_meta_desc']      = $this->request->getPost('gallery_meta_desc');
        $data['gallery_meta_key']       = $this->request->getPost('gallery_meta_key');
        $data['gallery_view']           = 0;

        

        
        
        $img = $this->request->getFile('gallery_image');

        $type = $img->guessExtension();
        $gallery_image_name = $gallery_title_slug.'-'.random_string('alnum', 16).'.'.$type;
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
        return redirect()->to('admin/gallery')->with('id', $id = $galleryModel->insertID());
    }


    // 
    public function getEdit($id){
        $cateModel = new CateModel();
        $post = new PostModel();
        $galleryModel = new GalleryModel();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        $data['gallery'] = $galleryModel->find($id);
        // dd($data['tagModel']);
        return view('admin/gallery/editGallery', $data);
    }


    public function SaveEdit($id)
    {
        $post = new PostModel();
        $cateModel = new CateModel();
        $galleryModel = new GalleryModel();
        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        

        $gallery_detail = $galleryModel->find($id);
        $data['gallery'] = $gallery_detail;
        $gallery_title = $this->request->getPost('gallery_title');
        $data['gallery_title'] = $gallery_title;



        if($gallery_detail['gallery_title'] == $gallery_title){
            $data['gallery_title'] = $gallery_title;

        }elseif($gallery_detail['gallery_title'] != $gallery_title){
            $validation = $this->validate([
                'gallery_title'=>[
                    'rules'=>'required|is_unique[gallery.gallery_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                return view('admin/gallery/editGallery', ['validation'=>$this->validator]);
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

        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));

        

        $data['gallery_title']          = $gallery_title;
        $data['gallery_title_slug']     = $gallery_title_slug;
        $data['gallery_cate_id']        = $this->request->getPost('gallery_cate_id');
        
        $data['gallery_meta_desc']      = $this->request->getPost('gallery_meta_desc');
        $data['gallery_meta_key']       = $this->request->getPost('gallery_meta_key');
        $data['gallery_view']           = $gallery_detail['gallery_view'];


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


        
        
        if($this->request->getFile('gallery_image')->guessExtension() != null){


            $img = $this->request->getFile('gallery_image');

            $type = $img->guessExtension();
            $gallery_image_name = $gallery_title_slug.'-'.random_string('alnum', 16).'.'.$type;
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
    
        return redirect()->to('admin/gallery')->with('id', $id);
        // return redirect()->to('admin/post');
    }


    public function show($id){
        $postModel = new PostModel();
        
        $postDetail = $postModel->find($id);
        $data['post_cate_id']   = $postDetail['post_cate_id'];
        $data['post_cate_slug'] = $postDetail['post_cate_slug'];
        $data['post_title']     = $postDetail['post_title'];
        $data['post_slug']      = $postDetail['post_slug'];
        $data['post_intro']     = $postDetail['post_intro'];
        $data['post_image']     = $postDetail['post_image'];
        $data['post_status']    = $postDetail['post_status'];
        $data['post_featured']  = $postDetail['post_featured'];
        $data['post_content']   = $postDetail['post_content'];
        $data['post_price']     = $postDetail['post_price'];
        $data['post_sale']      = $postDetail['post_sale'];
        $data['post_view']      = $postDetail['post_view'];
        $data['post_show']      = 1;
        $data['post_meta_desc'] = $postDetail['post_meta_desc'];
        $data['post_meta_key']  = $postDetail['post_meta_key'];

        $postModel->update($id, $data);
        return redirect()->to('admin/post')->with("success", "bài viết: "."---".$postDetail['post_title']."---"." sẽ được hiển thị trên trang web");
    }

    public function hidden($id){
        $postModel = new PostModel();
        
        $postDetail = $postModel->find($id);
        $data['post_cate_id']   = $postDetail['post_cate_id'];
        $data['post_cate_slug'] = $postDetail['post_cate_slug'];
        $data['post_title']     = $postDetail['post_title'];
        $data['post_slug']      = $postDetail['post_slug'];
        $data['post_intro']     = $postDetail['post_intro'];
        $data['post_image']     = $postDetail['post_image'];
        $data['post_status']    = $postDetail['post_status'];
        $data['post_featured']  = $postDetail['post_featured'];
        $data['post_content']   = $postDetail['post_content'];
        $data['post_price']     = $postDetail['post_price'];
        $data['post_sale']      = $postDetail['post_sale'];
        $data['post_view']      = $postDetail['post_view'];
        $data['post_show']      = 0;
        $data['post_meta_desc'] = $postDetail['post_meta_desc'];
        $data['post_meta_key']  = $postDetail['post_meta_key'];

        $postModel->update($id, $data);
        return redirect()->to('admin/post')->with("success", "bài viết: "."---".$postDetail['post_title']."---"." sẽ không hiển thị trên trang web");
    }


}