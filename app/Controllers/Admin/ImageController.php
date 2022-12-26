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



class ImageController extends BaseController
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
        return view('admin/image/TinyMce', $data);
    }

    function imageTiny(){
        $imageModel = new ImageModel();
        $data['image'] = $imageModel->findAll();
        $data['compressionsThisMonth'] = \Tinify\compressionCount();
        return view('admin/image/index', $data);
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
                    return redirect()->to('admin/image/imageTiny', $data2);
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
                    return redirect()->to('admin/image/imageTiny', $data2);
                }
            }
        }


        return redirect()->to('admin/image/imageTiny', $data2);
    }


    public function compressAgain()
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
                    return redirect()->to('admin/image/imageTiny', $data2);
                }
            }else{
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
                    return redirect()->to('admin/image/imageTiny', $data2);
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
                    return redirect()->to('admin/image/imageTiny', $data2);
                }
            }
        }


        return redirect()->to('admin/image/imageTiny', $data2);
    }

    


}