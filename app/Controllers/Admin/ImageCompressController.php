<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ImageModel;

\Tinify\setKey("dqfNvv6jcrg3zVgWJ5PHBt5qkxRCWVbD");
\Tinify\validate();

$compressionsThisMonth = \Tinify\compressionCount();
if ($compressionsThisMonth > 499) {
  \Tinify\setKey("7sl7bwWF53lqNKYGWQbFmDr8zyGdJvvV");
  \Tinify\validate();
  $compressionsThisMonth2 = \Tinify\compressionCount();
}



class ImageCompressController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text_helper']);
    }
    public function index(){
        

        $path = './public/upload/tinymce/';
        foreach(glob($path.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
            // $img[] =  basename($file);
            $img[] =  array(basename($file), filesize($file));

        }

        $path2 = './public/upload/tinymce/image_asset/';

        foreach(glob($path2.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file2){
            $img2[] =  array(basename($file2), filesize($file2));
        }
        $data['img']    = $img;
        $data['img2']   = $img2;
        $data['compressionsThisMonth'] = \Tinify\compressionCount();

        // dd($img2);
        return view('admin/image_tinify/index_image', $data);
    }

    function imageTiny(){
        $imageModel = new ImageModel();
        $data['image'] = $imageModel->findAll();
        $data['compressionsThisMonth'] = \Tinify\compressionCount();
        return view('admin/image_tinify/index_compress', $data);
    }

    function check_image(){
        $imageModel = new ImageModel();
        $image = $imageModel->findAll();

        foreach ($image as $value) {
            if($value['image_folder'] == 'image_asset'){                    
                $path = 'public/upload/tinymce/image_asset/'.'/'.$value['image_TinyCME_name'];
                
                if (!file_exists($path)){
                    $imageModel->delete(['id' => $value['id']]);
                }
            }

            if($value['image_folder'] == 'tinymce'){
                $path2 = 'public/upload/tinymce/'.'/'.$value['image_TinyCME_name'];
                if (!file_exists($path2)){
                    $imageModel->delete(['id' => $value['id']]);
                }
            }
        }

        return redirect()->to('admin/image/imageTiny')->with('ok', "Ảnh đã được cập nhật");
    }

    public function compress()
    {   
        $imageModel = new ImageModel();
        $image = $imageModel->findAll();
        // dd($image);

        $data2['image'] = $image;




        $path = './public/upload/tinymce/';
        foreach(glob($path.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
            // $img[] =  basename($file);
            $img[] =  array(basename($file), filesize($file));
        }
        $images_array_check = array();
        foreach($image as $value){
            $images_array_check[] = $value['image_TinyCME_name'];
        }
        // dd($images_array_check);
        $count = count($img);
        for ($i=0; $i < $count; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img[$i][0], $images_array_check, false)){
                $data['image_TinyCME_name']   = $img[$i][0];
                $data['image_TinyCME_status'] = 1;
                $data['image_size_original'] = $img[$i][1];

                
                $path6 = 'public/upload/tinymce/'.'/'.$img[$i][0];
                $fp = fopen($path6, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path6);
                    $source->toFile($path6);
                    $data['image_size_compress'] = filesize($path6);
                    $data['image_folder'] = 'tinymce';
                    // dd($data);
                    $imageModel->insert($data);
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra");
                }
            }
        }



        // Part 2
        $path2 = './public/upload/tinymce/image_asset/';
        foreach(glob($path2.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file2){
            $img2[] =  array(basename($file2), filesize($file2));
        }

        $count = count($img2);
        for ($i=0; $i < $count; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img2[$i][0], $images_array_check, false)){
                $data3['image_TinyCME_name']    = $img2[$i][0];
                $data3['image_TinyCME_status']  = 1;
                $data3['image_size_original']   = $img2[$i][1];

                
                $path = 'public/upload/tinymce/image_asset'.'/'.$img2[$i][0];
                $fp = fopen($path, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path);
                    $source->toFile($path);
                    $data3['image_size_compress']   = filesize($path);
                    $data3['image_folder']          = 'image_asset';
                    // dd($data);
                    $imageModel->insert($data3);
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra");
                }
            }
        }

        // Part 3
        $path3 = './public/upload/tinymce/post_images/';
        foreach(glob($path2.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file3){
            $img3[] =  array(basename($file3), filesize($file3));
        }

        $count = count($img3);
        for ($i=0; $i < $count; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img3[$i][0], $images_array_check, false)){
                $data4['image_TinyCME_name']    = $img3[$i][0];
                $data4['image_TinyCME_status']  = 1;
                $data4['image_size_original']   = $img3[$i][1];

                
                $path = 'public/upload/tinymce/post_images'.'/'.$img3[$i][0];
                $fp = fopen($path, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path);
                    $source->toFile($path);
                    $data3['image_size_compress']   = filesize($path);
                    $data3['image_folder']          = 'post_images';
                    // dd($data);
                    $imageModel->insert($data3);
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra");
                }
            }
        }


        return redirect()->to('admin/image', $data2)->with('success', "Nén thành công ảnh");
    }


    public function compressAgain()
    {   
        $imageModel = new ImageModel();
        $image = $imageModel->findAll();
        // dd($image);

        $data3['image'] = $image;


        foreach ($image as $value) {
            if($value['image_folder'] == 'image_asset'){
                if($value['image_TinyCME_status'] < 3){
                    $data['image_TinyCME_name']   = $value['image_TinyCME_name'];
                    $data['image_TinyCME_status'] = $value['image_TinyCME_status'] + 1;
                    $data['image_size_original'] = $value['image_size_original'];

                    
                    $path = 'public/upload/tinymce/image_asset/'.'/'.$value['image_TinyCME_name'];
                    $fp = fopen($path, "rb");
                    
                    
                    try {
                        $source = \Tinify\fromFile($path);
                        $source->toFile($path);
                        $data['image_size_compress'] = filesize($path);
                        $data['image_folder'] = 'image_asset';
                        $imageModel->update($value['id'], $data);
                    }
                    catch (\Tinify\Exception $e){

                        return redirect()->to('admin/image/imageTiny')->with('image', $image);
                    }
                }

            }

            if($value['image_folder'] == 'tinymce'){
                if($value['image_TinyCME_status'] < 3){
                    $data2['image_TinyCME_name']   = $value['image_TinyCME_name'];
                    $data2['image_TinyCME_status'] = $value['image_TinyCME_status'] + 1;
                    $data2['image_size_original'] = $value['image_size_original'];

                    
                    $path2 = 'public/upload/tinymce/'.'/'.$value['image_TinyCME_name'];
                    $fp = fopen($path2, "rb");
                    
                    // dd($images[$i]);
                    try {
                        $source = \Tinify\fromFile($path2);
                        $source->toFile($path2);
                        $data2['image_size_compress'] = filesize($path2);
                        $data2['image_folder'] = 'tinymce';
                        $imageModel->update($value['id'], $data2);
                    }
                    catch (\Tinify\Exception $e){
                        session()->setFlashdata('success', "Has Error");
                        return redirect()->to('admin/image')->with('image', $image);
                    }
                }
            }
        }
        

        session()->setFlashdata('success', "Nén thành công");
        return redirect()->to('admin/image')->with('image', $image);

    }

    


}