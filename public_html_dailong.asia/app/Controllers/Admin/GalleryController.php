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
        $data['gallery'] = $galleryModel->orderBy('id', 'DESC')->findAll();

        $cateModel = new CateModel();
        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        return view('admin/gallery/index_gallery', $data);
    }

    public function getGallery()
    {   
        $cateModel      = new CateModel();
        $post           = new PostModel();
        $gellaryType    = new GalleryTypeModel();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['gellary_type'] = $gellaryType->findAll();

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
        $gellaryType    = new GalleryTypeModel();

        $cate = $cateModel->where('cate_type', 'cate_gallery')->first();
        $gellary_type = $gellaryType->findAll();

        $post_url = $post->select('post.id, post.post_title')->findAll();


        $validation = $this->validate([

            'gallery_title'=>[
                'rules'=>'required|is_unique[gallery_image.gallery_title]',
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
            return view('admin/gallery/create_gallery', ['validation'=>$this->validator, 'cate'=>$cate, 'post_url'=>$post_url, 'gellary_type'=> $gellary_type]);
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
        

        

        $gallery_id = $this->request->getPost('gallery_type_id');
        $gellary_type = $gellaryType->find($gallery_id);
        $data['gallery_type_id']        = $gallery_id;
        $data['gallery_type_name']      = $gellary_type['gallery_type_name'];
        $data['gallery_type_slug']      = $gellary_type['gallery_type_slug'];


        $gallery_title = $this->request->getPost('gallery_title');
        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));
        $gallery_title_slug = reduce_multiples($gallery_title_slug, '-');

        $data['gallery_title']          = $gallery_title;
        $data['gallery_title_slug']     = $gallery_title_slug;
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
        $gellaryType    = new GalleryTypeModel();

        $data['gallery'] = $galleryModel->find($id);

        if($data['gallery'] == null){
            return view('admin/404_admin');
        }

        $data['gellary_type'] = $gellaryType->findAll();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        
        
        return view('admin/gallery/edit_gallery', $data);
    }


    public function SaveEdit($id)
    {
        $post = new PostModel();
        $cateModel = new CateModel();
        $galleryModel = new GalleryModel();
        $gellaryType    = new GalleryTypeModel();

        $data['cate'] = $cateModel->where('cate_type', 'cate_gallery')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        

        $gallery_detail = $galleryModel->find($id);

        if($gallery_detail == null){
            return view('admin/404_admin');
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
        $gellary_type = $gellaryType->find($gallery_id);

        $data['gallery_type_id']        = $gallery_id;
        $data['gallery_type_name']      = $gellary_type['gallery_type_name'];
        $data['gallery_type_slug']      = $gellary_type['gallery_type_slug'];


        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));
        $gallery_title_slug = reduce_multiples($gallery_title_slug, '-');

        

        $data['gallery_title']          = $gallery_title;
        $data['gallery_title_slug']     = $gallery_title_slug;
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
    
        return redirect()->to('admin/gallery')->with('success', $gallery_title);

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