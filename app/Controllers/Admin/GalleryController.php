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

        $data['post_url'] = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.post_title, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->find();
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

        $post_url = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.post_title, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->find();


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


        


        $gallery_title = $this->request->getPost('gallery_title');
        

        $gallery_title_slug = mb_strtolower(convert_name($gallery_title));

        

        $data['gallery_title']          = $gallery_title;
        $data['gallery_title_slug']     = $gallery_title_slug;
        $data['gallery_cate_id']        = $this->request->getPost('gallery_cate_id');
        $data['gallery_post_url']       = $this->request->getPost('gallery_post_url');
        $data['gallery_meta_desc']      = $this->request->getPost('gallery_meta_desc');
        $data['gallery_meta_key']       = $this->request->getPost('gallery_meta_desc');
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

        $data['post_url'] = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.post_title, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->find();
        $data['gallery'] = $galleryModel->find($id);
        // dd($data['tagModel']);
        return view('admin/gallery/editGallery', $data);
    }


    public function SaveEdit($id)
    {
        // $this->validate();
        // dd($id);
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();

        
        $tagList = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        // dd($tagList);
        $data['tagModel'] = $tagModel->where('tag_post_id', $id)->get()->getResultArray();
        $detailPost = $postModel->find($id);
        $post_title = $this->request->getPost('post_title');
        $data['postDetail'] = $detailPost;



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
        $post_title_slug = convert_name($post_title);
        $post_cate_id           = $this->request->getPost('post_cate_id');
        // dd($post_cate_id);
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
        $data['post_view']      = $detailPost['post_view'];
        $data['post_show']      = $detailPost['post_show'];

        $cate_slug = $cateModel->where('id', $this->request->getPost('post_cate_id'))->first();
        // dd($cate_slug);
        $data['post_cate_slug']   = $cate_slug['cate_slug'];
        
        
        if($this->request->getFile('post_image')->guessExtension() != null){

            $img = $this->request->getFile('post_image');
            $type = $img->guessExtension();
            
            $post_image_name = $post_title_slug.'-'.random_string('alnum', 16).'.'.$type;

            $data['post_image']       = $post_image_name;
        }else{
            $data['post_image'] = $detailPost['post_image'];
        }
        


        $postModel->update($id, $data);


        $post_tag = $this->request->getPost('taginput');
        $post_tag = json_decode($post_tag, true);
        
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
    
        return redirect()->to('admin/post')->with('id', $id);
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