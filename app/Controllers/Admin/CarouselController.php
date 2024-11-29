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
        $data['carousel_status']   = 1;


                
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

                $img->move(ROOTPATH . 'public/upload/tinymce/carousel_asset/', $carousel_image_name);

 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }

            
        }
        
        // return redirect()->to('admin/post')->with('success', 'Thêm thành công bài viết: '.$post_title);
        return redirect()->to('admin/carousel')->with('success', $carousel_title);
    }


    // 
    public function getEdit($id){
        $carouselModel = new carouselModel();

        $data['carousel'] = $carouselModel->find($id);

        if($data['carousel'] == null){
            return view('admin/404_admin');
        }

        
        
        return view('admin/carousel/edit_carousel', $data);
    }


    public function SaveEdit($id)
    {
        $carouselModel = new carouselModel();


        $carousel_detail = $carouselModel->find($id);
        $data['carousel'] = $carousel_detail;

        if($carousel_detail == null){
            return view('admin/404_admin');
        }


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
                $data['validation'] = $this->validator;
                return view('admin/carousel/edit_carousel', $data);
            }
        }


        $carousel_title = $this->request->getPost('carousel_title');
        $carousel_slug  = mb_strtolower(convert_name($carousel_title));
        $carousel_slug  = reduce_multiples($carousel_slug, '-');

        $data['carousel_slug']     = $carousel_slug;


        
        
        if($this->request->getFile('carousel_image')->guessExtension() != null){
            // image check

            $img = $this->request->getFile('carousel_image');

            $type = $img->guessExtension();
            $carousel_image_name = $carousel_slug.'-'.random_string('alnum', 6).'.'.$type;
            $data['carousel_image']       = $carousel_image_name;

            $carousel_image = $this->request->getPost('carousel_image');
                if($carousel_image != "" || $carousel_image != null){
                if(gettype($carousel_image) === 'string' && gettype(json_decode($carousel_image)) === 'array'){
                    // array
                    $number_rand = array_rand(json_decode($carousel_image));
                    $image_array = json_decode($carousel_image);
                    $image_array = array_unique($image_array);
                    $data['carousel_image'] = $image_array[$number_rand];
                }else{
                    // null
                    $data['carousel_image'] = $carousel_image_name;
                }
            }
        }else{
            $data['carousel_image'] = $carousel_detail['carousel_image'];
        }

        $carouselModel->update($id, $data);

        

        if($this->request->getFile('carousel_image')->guessExtension() != null)
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $img = $this->request->getFile('carousel_image');
                $img->move(ROOTPATH . 'public/upload/tinymce/carousel_asset', $carousel_image_name);
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
        $carouselModel = new carouselModel();
        
        $carouselDetail = $carouselModel->find($id);

        $data['carousel_status']      = 1;


        $carouselModel->update($id, $data);
        return redirect()->to('admin/carousel')->with("success", "Slide: "."---".$carouselDetail['carousel_title']."---"." sẽ được hiển thị trên trang web");
    }

    public function hidden($id){
        $carouselModel = new carouselModel();
        
        $carouselDetail = $carouselModel->find($id);

        $data['carousel_status']      = 0;


        $carouselModel->update($id, $data);
        return redirect()->to('admin/carousel')->with("success", "Slide: "."---".$carouselDetail['carousel_title']."---"." sẽ không hiển thị trên trang web");
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