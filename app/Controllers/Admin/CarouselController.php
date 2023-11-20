<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CarouselModel;




class CarouselController extends BaseController
{   
    public function __construct(){
        helper(['Url', 'form', 'text', 'Text_helper']);
    }
    public function index(){
        $carouselModel = new CarouselModel();
        $data['carousel'] = $carouselModel->orderBy('id', 'DESC')->findAll();


        return view('admin/carousel/index_carousel', $data);
    }

    public function getCarousel()
    {   
        $carouselModel = new CarouselModel();


        return view('admin/carousel/create_carousel');
    }

    public function saveCarousel()
    {
        // $this->validate();
       
        $carouselModel = new CarouselModel();



        $validation = $this->validate([

            'carousel_title'=>[
                'rules'=>'required|is_unique[carousel.carousel_title]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                ],

            ],
            
            'carousel_image' => [
                'label' => 'Image File',
                'rules' => 'uploaded[carousel_image]'
                    . '|is_image[carousel_image]'
                    . '|mime_in[carousel_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[carousel_image,10000]',
                    'errors' => [
                    'uploaded' => 'Bạn chưa chọn ảnh/sai định dạng ảnh cho bài viết.',
                    'max_size' => 'Kích trước file quá lớn.',
                ],
            ],

            

        ]);
        if(!$validation){
            return view('admin/carousel/create_carousel', ['validation'=>$this->validator]);
        }

        
        
        
        



        $carousel_title = $this->request->getPost('carousel_title');
        $carousel_slug  = mb_strtolower(convert_name($carousel_title));
        $carousel_slug  = reduce_multiples($carousel_slug, '-');

        $data['carousel_title']    = $carousel_title;
        $data['carousel_slug']     = $carousel_slug;


        

        
        
        $img = $this->request->getFile('carousel_image');

        $type = $img->guessExtension();
        $carousel_image_name = $carousel_slug.'-'.random_string('alnum', 6).'.'.$type;
        $data['carousel_image']       = $carousel_image_name;
        // dd($data);

        $carouselModel->insert($data);

        if($img = $this->request->getFile('carousel_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();

                $img->move(ROOTPATH . 'public/upload/tinymce/', $carousel_image_name);

 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }

            
        }
        
        // return redirect()->to('admin/post')->with('success', 'Thêm thành công bài viết: '.$post_title);
        return redirect()->to('admin/carousel')->with('success', $carousel_title);
    }


    // 
    public function getEdit($id){
        $cateModel = new CateModel();
        $post = new PostModel();
        $carouselModel = new carouselModel();
        $gellaryType    = new carouselTypeModel();

        $data['carousel'] = $carouselModel->find($id);

        if($data['carousel'] == null){
            return view('admin/404_admin');
        }

        $data['gellary_type'] = $gellaryType->findAll();

        $data['cate'] = $cateModel->where('cate_type', 'cate_carousel')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        
        
        return view('admin/carousel/edit_carousel', $data);
    }


    public function SaveEdit($id)
    {
        $post = new PostModel();
        $cateModel = new CateModel();
        $carouselModel = new carouselModel();
        $gellaryType    = new carouselTypeModel();

        $data['cate'] = $cateModel->where('cate_type', 'cate_carousel')->first();

        $data['post_url'] = $post->select('post.id, post.post_title')->findAll();
        

        $carousel_detail = $carouselModel->find($id);

        if($carousel_detail == null){
            return view('admin/404_admin');
        }

        $data['carousel'] = $carousel_detail;
        $carousel_title = $this->request->getPost('carousel_title');
        $data['carousel_title'] = $carousel_title;



        if($carousel_detail['carousel_title'] == $carousel_title){
            $data['carousel_title'] = $carousel_title;

        }elseif($carousel_detail['carousel_title'] != $carousel_title){
            $validation = $this->validate([
                'carousel_title'=>[
                    'rules'=>'required|is_unique[carousel_image.carousel_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                return view('admin/carousel/edit_carousel', ['validation'=>$this->validator]);
            }
        }
        $validation = $this->validate([
            
            'carousel_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Desc không được để trống.',
                ],

            ],
            'carousel_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Key không được để trống.',
                ],

            ],
        ]);
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/carousel/editcarousel', $data);
        }

        $carousel_id = $this->request->getPost('carousel_type_id');
        $gellary_type = $gellaryType->find($carousel_id);

        $data['carousel_type_id']        = $carousel_id;
        $data['carousel_type_name']      = $gellary_type['carousel_type_name'];
        $data['carousel_type_slug']      = $gellary_type['carousel_type_slug'];


        $carousel_title_slug = mb_strtolower(convert_name($carousel_title));
        $carousel_title_slug = reduce_multiples($carousel_title_slug, '-');

        

        $data['carousel_title']          = $carousel_title;
        $data['carousel_title_slug']     = $carousel_title_slug;
        $data['carousel_cate_id']        = $this->request->getPost('carousel_cate_id');
        
        $data['carousel_meta_desc']      = $this->request->getPost('carousel_meta_desc');
        $data['carousel_meta_key']       = $this->request->getPost('carousel_meta_key');
        $data['carousel_view']           = $carousel_detail['carousel_view'];
        $data['carousel_compress_times'] = $carousel_detail['carousel_compress_times'];


        if($this->request->getPost('carousel_post_id') != null){
           $post_id = $this->request->getPost('carousel_post_id'); 
           $post_url = $post->select('cate.id, cate.cate_slug, post.post_cate_id, post.post_slug, post.id, post.id as p_id')->join('cate', 'cate.id = post.post_cate_id', 'left')->where('post.id', $post_id)->first();
            $carousel_post_url = base_url().'/'.$post_url['cate_slug'].'/'.$post_url['post_slug'].'-'.$post_url['id'].'.html';
            $data['carousel_post_url']       = $carousel_post_url;
            $data['carousel_post_id']        = $post_id;
        }else{
            $data['carousel_post_url']       = null;
            $data['carousel_post_id']        = null; 
        }

        if($this->request->getPost('carousel_file_download') != null){
            $data['carousel_file_download']       = $this->request->getPost('carousel_file_download');
        }else{
            $data['carousel_file_download']       = null;
        }


        
        
        if($this->request->getFile('carousel_image')->guessExtension() != null){


            $img = $this->request->getFile('carousel_image');

            $type = $img->guessExtension();
            $carousel_image_name = $carousel_title_slug.'-'.random_string('alnum', 6).'.'.$type;
            $data['carousel_image']       = $carousel_image_name;

            
        }else{
            $data['carousel_image'] = $carousel_detail['carousel_image'];
        }
        


        $carouselModel->update($id, $data);


        


        

        if($img = $this->request->getFile('carousel_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/carousel_asset', $carousel_image_name);
                // $path2 = ROOTPATH.'/public/upload/tinymce/image_asset/'.$post_image_name;
                // \Config\Services::image('imagick')
                // ->withFile($path2)
                // ->resize(1200, 900, true, 'height')
                // ->save($path2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                $pathTo = ROOTPATH.'/public/upload/tinymce/carousel_asset/'.$carousel_detail['carousel_image'];
                $pathTrash = ROOTPATH.'/public/upload/tinymce/carousel_asset/trash/'.$carousel_detail['carousel_image'];
                if(file_exists($pathTo)){
                    rename ($pathTo, $pathTrash);
                }                 
            }
        }
    
        return redirect()->to('admin/carousel')->with('success', $carousel_title);

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
        // $imageModel = new carouselModel();
        // $imagecarousel = $imageModel->findAll();



        // foreach($imagecarousel as $iG){
        //     if($iG['carousel_compress_times'] < 4){
        //         $path = 'public/upload/tinymce/carousel_asset'.'/'.$iG['carousel_image'];
        //         try {
        //             $source = \Tinify\fromFile($path);
        //             $source->toFile($path);
        //             $data['carousel_compress_times'] = $iG['carousel_compress_times'] + 1;
        //             $imageModel->update($iG['id'], $data);
        //         }
        //         catch (\Tinify\Exception $e){
        //             session()->setFlashdata('success', "Has Error");
        //             return redirect()->to('admin/carousel')->with('image', "Có Lỗi");
        //         }
        //     }
        // }


        // session()->setFlashdata('success', "Nén ảnh thành công");
        // return redirect()->to('admin/carousel');

    }


}