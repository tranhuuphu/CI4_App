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



class CompressController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'Text_helper']);
    }
    public function index(){
        
        $imageModel = new ImageModel();
        $data['image_check'] = $imageModel->select('image_TinyCME_name')->findAll();
        // dd(array_values($data['image_check']));
        foreach($data['image_check'] as $ci){
            $check[] = $ci['image_TinyCME_name'];
        }
        $data['check'] = $check;

        // Folder TinyMCE
        $path = './public/upload/tinymce/';
        foreach(glob($path.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
            // $img[] =  basename($file);
            $img[] =  array(basename($file), filesize($file));

        }

        // Folder post singer upload
        $path2 = './public/upload/tinymce/image_asset/';

        foreach(glob($path2.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file2){
            $img2[] =  array(basename($file2), filesize($file2));
        }

        // Folder Gallery of Post
        $path3 = './public/upload/tinymce/post_images/';
        foreach(glob($path3.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file3){
            $img3[] =  array(basename($file3), filesize($file3));
        }

        // Folder Bộ Sưu Tập Gallery
        $path4 = './public/upload/tinymce/gallery_asset/';
        foreach(glob($path4.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file4){
            $img4[] =  array(basename($file4), filesize($file4));
        }



        $data['img']            = $img;
        $data['folder']         = "tinymce";

        $data['img2']           = $img2;
        $data['folder2']        = "image_asset";

        $data['img3']           = $img3;
        $data['folder3']        = "post_images";

        $data['img4']           = $img4;
        $data['folder4']        = "gallery_asset";

        $data['compressionsThisMonth'] = \Tinify\compressionCount();

        // dd($img2);
        return view('admin/image_tinify/index_image', $data);
    }


    

    public function compress()
    {   
        $imageModel = new ImageModel();
        $image = $imageModel->findAll();
        // dd($image);

        $data2['image'] = $image;

        $images_array_check = array();
        foreach($image as $value){
            $images_array_check[] = $value['image_TinyCME_name'];
        }

        // nén ảnh trong Folder TinyMCE
        $path = './public/upload/tinymce/';
        foreach(glob($path.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
            $img[] =  array(basename($file), filesize($file));
        }
        $count = count($img);
        for ($i=0; $i < $count; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img[$i][0], $images_array_check, false)){
                $data['image_TinyCME_name']   = $img[$i][0];
                $data['image_TinyCME_status'] = 1;
                $data['image_size_original'] = $img[$i][1];
                $data['image_folder'] = 'tinymce';

                
                $path = 'public/upload/tinymce/'.'/'.$img[$i][0];
                $fp = fopen($path, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path);
                    $source->toFile($path);
                    
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra khi nén tại Folder TinyMCE ngoài");
                }
                $data['image_size_compressed'] = filesize($path);

                $imageModel->insert($data);
            }
        }



        // nén ảnh trong Folder TinhMCE/image_asset Post Singer Upload
        $path2 = './public/upload/tinymce/image_asset/';
        foreach(glob($path2.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file2){
            $img2[] =  array(basename($file2), filesize($file2));
        }

        $count2 = count($img2);
        for ($i=0; $i < $count2; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img2[$i][0], $images_array_check, false)){
                $data2['image_TinyCME_name']    = $img2[$i][0];
                $data2['image_TinyCME_status']  = 1;
                $data2['image_size_original']   = $img2[$i][1];
                $data2['image_folder']          = 'image_asset';

                
                $path_2 = 'public/upload/tinymce/image_asset'.'/'.$img2[$i][0];
                $fp2 = fopen($path_2, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path_2);
                    $source->toFile($path_2);
                    
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra khi nén tại Folder image_asset");
                }
                $data2['image_size_compressed']   = filesize($path_2);
                    
                // dd($data);
                $imageModel->insert($data2);
            }
        }

        // nén ảnh trong Folder TinhMCE/post_images
        $path3 = './public/upload/tinymce/post_images/';
        foreach(glob($path3.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file3){
            $img3[] =  array(basename($file3), filesize($file3));
        }

        $count3 = count($img3);
        for ($i=0; $i < $count3; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img3[$i][0], $images_array_check, false)){
                $data3['image_TinyCME_name']    = $img3[$i][0];
                $data3['image_TinyCME_status']  = 1;
                $data3['image_size_original']   = $img3[$i][1];
                $data3['image_folder']          = 'post_images';

                
                $path_3 = 'public/upload/tinymce/post_images'.'/'.$img3[$i][0];
                $fp3 = fopen($path_3, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path_3);
                    $source->toFile($path_3);
                    
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra khi nén tại Folder post_images");
                }
                $data3['image_size_compressed']   = filesize($path_3);

                $imageModel->insert($data3);
            }
        }


        // nén ảnh trong Folder TinhMCE/gallery_asset
        $path4 = './public/upload/tinymce/gallery_asset/';
        foreach(glob($path4.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file4){
            $img4[] =  array(basename($file4), filesize($file4));
        }

        $count4 = count($img4);
        for ($i=0; $i < $count4; $i++) {
            // Kiểm tra ảnh này có trong database chưa?
            // Nếu chưa thì update trong database và nén online
            if(!in_array($img4[$i][0], $images_array_check, false)){
                $data4['image_TinyCME_name']    = $img4[$i][0];
                $data4['image_TinyCME_status']  = 1;
                $data4['image_size_original']   = $img4[$i][1];
                $data4['image_folder']          = 'gallery_asset';
                
                $path_4 = 'public/upload/tinymce/gallery_asset'.'/'.$img4[$i][0];
                $fp4 = fopen($path_4, "rb");
                
                // dd($images[$i]);
                try {
                    $source = \Tinify\fromFile($path_4);
                    $source->toFile($path_4);
                    
                }
                catch (\Tinify\Exception $e){
                    return redirect()->to('admin/image')->with('error', "Có lỗi xảy ra khi nén tại Folder gallery_asset");
                }
                $data4['image_size_compressed']   = filesize($path_4);
                $imageModel->insert($data4);
            }
        }


        return redirect()->to('admin/image/imageTiny')->with('success', "Nén thành công ảnh");
    }


    // Ảnh đã Nén
    function imageTiny(){
        $imageModel = new ImageModel();
        $data['image'] = $imageModel->orderBy('id', 'DESC')->findAll();
        $data['compressionsThisMonth'] = \Tinify\compressionCount();
        return view('admin/image_tinify/index_compressed', $data);
    }


    // Kiểm tra ảnh còn hay đã bị xóa trong thư mục đối chiếu với database
    function check_image(){
        $imageModel = new ImageModel();
        $image = $imageModel->findAll();

        foreach ($image as $value) {

            if($value['image_folder'] == 'tinymce'){
                $path = 'public/upload/tinymce/'.'/'.$value['image_TinyCME_name'];
                if (!file_exists($path)){
                    $imageModel->delete(['id' => $value['id']]);
                }
            }


            if($value['image_folder'] == 'image_asset'){                    
                $path2 = 'public/upload/tinymce/image_asset/'.'/'.$value['image_TinyCME_name'];
                
                if (!file_exists($path2)){
                    $imageModel->delete(['id' => $value['id']]);
                }
            }

            

            if($value['image_folder'] == 'post_images'){
                $path3 = 'public/upload/tinymce/post_images/'.'/'.$value['image_TinyCME_name'];
                if (!file_exists($path3)){
                    $imageModel->delete(['id' => $value['id']]);
                }
            }

            if($value['image_folder'] == 'gallery_asset'){
                $path4 = 'public/upload/tinymce/gallery_asset/'.'/'.$value['image_TinyCME_name'];
                if (!file_exists($path4)){
                    $imageModel->delete(['id' => $value['id']]);
                }
            }
        }

        return redirect()->to('admin/image/imageTiny')->with('update', "Ảnh đã được cập nhật");
    }


    public function compressAgain()
    {   
        $imageModel = new ImageModel();
        $image = $imageModel->findAll();
        // dd($image);

        $data3['image'] = $image;


        foreach ($image as $value) {

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
                        if($data2['image_TinyCME_status'] == 2){
                            $data2['image_size_compressed_2'] = filesize($path2);
                        }elseif($data2['image_TinyCME_status'] == 3){
                            $data2['image_size_compressed_3'] = filesize($path2);
                        }
                        
                        $data2['image_folder'] = 'tinymce';
                        $imageModel->update($value['id'], $data2);
                    }
                    catch (\Tinify\Exception $e){

                        return redirect()->to('admin/image/imageTiny')->with('error', "Has Error Khi Nén Lại Tại Folder TinyMce");
                    }
                }
            }


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

                        if($data['image_TinyCME_status'] == 1){
                            $data['image_size_compressed_2'] = filesize($path);
                        }elseif($data['image_TinyCME_status'] == 2){
                            $data['image_size_compressed_3'] = filesize($path);
                        }

                        $data['image_folder'] = 'image_asset';
                        $imageModel->update($value['id'], $data);
                    }
                    catch (\Tinify\Exception $e){

                        return redirect()->to('admin/image/imageTiny')->with('error', "Has Error Khi Nén Lại Tại Folder Image_Asset");
                    }
                }

            }

            


            if($value['image_folder'] == 'post_images'){
                if($value['image_TinyCME_status'] < 3){
                    $data3['image_TinyCME_name']   = $value['image_TinyCME_name'];
                    $data3['image_TinyCME_status'] = $value['image_TinyCME_status'] + 1;
                    $data3['image_size_original'] = $value['image_size_original'];

                    
                    $path3 = 'public/upload/tinymce/post_images/'.'/'.$value['image_TinyCME_name'];
                    $fp3 = fopen($path3, "rb");
                    
                    // dd($images[$i]);
                    try {
                        $source = \Tinify\fromFile($path3);
                        $source->toFile($path3);

                        if($data3['image_TinyCME_status'] == 1){
                            $data3['image_size_compressed_2'] = filesize($path3);
                        }elseif($data3['image_TinyCME_status'] == 2){
                            $data3['image_size_compressed_3'] = filesize($path3);
                        }

                        $data3['image_folder'] = 'tinymce';
                        $imageModel->update($value['id'], $data3);
                    }
                    catch (\Tinify\Exception $e){

                        return redirect()->to('admin/image/imageTiny')->with('error', "Has Error Khi Nén Lại Tại Folder Post Images");
                    }
                }
            }


            if($value['image_folder'] == 'gallery_asset'){
                if($value['image_TinyCME_status'] < 3){
                    $data4['image_TinyCME_name']   = $value['image_TinyCME_name'];
                    $data4['image_TinyCME_status'] = $value['image_TinyCME_status'] + 1;
                    $data4['image_size_original'] = $value['image_size_original'];

                    
                    $path4 = 'public/upload/tinymce/gallery_asset/'.'/'.$value['image_TinyCME_name'];
                    $fp4 = fopen($path4, "rb");
                    
                    // dd($images[$i]);
                    try {
                        $source = \Tinify\fromFile($path4);
                        $source->toFile($path4);

                        if($data4['image_TinyCME_status'] == 1){
                            $data4['image_size_compressed_2'] = filesize($path4);
                        }elseif($data4['image_TinyCME_status'] == 2){
                            $data4['image_size_compressed_3'] = filesize($path4);
                        }

                        $data4['image_folder'] = 'tinymce';
                        $imageModel->update($value['id'], $data2);
                    }
                    catch (\Tinify\Exception $e){

                        return redirect()->to('admin/image/imageTiny')->with('error', "Has Error Khi Nén Tại Folder Gallery Asset");
                    }
                }
            }
        }
        


        return redirect()->to('admin/image/imageTiny')->with('success', "Nén thành công");

    }

    public function single_compress($id){

        $imageModel = new ImageModel();
        $image = $imageModel->find($id);
        if($image == null){
            return view('admin/404_admin');
        }

        if($image['image_folder'] == 'tinymce'){

            if($image['image_TinyCME_status'] < 3){
                $data['image_TinyCME_status'] = $image['image_TinyCME_status'] + 1;
            }else{
                $data['image_TinyCME_status'] = $image['image_TinyCME_status'];
            }
            

            
            $path = 'public/upload/tinymce/'.'/'.$image['image_TinyCME_name'];
            $fp = fopen($path, "rb");
            
            // dd($images[$i]);
            try {
                $source = \Tinify\fromFile($path);
                $source->toFile($path);
                if($data['image_TinyCME_status'] == 2){
                    $data['image_size_compressed_2'] = filesize($path);
                }elseif($data['image_TinyCME_status'] == 3){
                    $data['image_size_compressed_3'] = filesize($path);
                }else{
                    $data['image_size_compressed_3'] = filesize($path);
                }             
                $data['image_folder'] = 'tinymce';
                $imageModel->update($image['id'], $data);
            }
            catch (\Tinify\Exception $e){

                return redirect()->to('admin/image/imageTiny')->with('error', "Has Error Khi Nén Lại Tại Folder TinyMce");
            }
        }
        else{

            if($image['image_TinyCME_status'] < 3){
                $data2['image_TinyCME_status'] = $image['image_TinyCME_status'] + 1;
            }else{
                $data2['image_TinyCME_status'] = $image['image_TinyCME_status'];
            }

            
            $path2 = 'public/upload/tinymce/'.'/'.$image['image_folder'].'/'.$image['image_TinyCME_name'];
            $fp2 = fopen($path2, "rb");
            
            // dd($images[$i]);
            try {
                $source = \Tinify\fromFile($path2);
                $source->toFile($path2);

                if($image['image_size_compressed_2'] == null){
                    $data2['image_size_compressed_2'] = filesize($path2);
                }elseif($image['image_size_compressed_3'] == null){
                    $data2['image_size_compressed_3'] = filesize($path2);
                }else{
                    $data2['image_size_compressed_3'] = filesize($path2);
                }

                $data2['image_folder'] = $image['image_folder'];
                $imageModel->update($image['id'], $data2);
            }
            catch (\Tinify\Exception $e){

                return redirect()->to('admin/image/imageTiny')->with('error', "Has Error Khi Nén Tại Folder Gallery Asset");
            }
        }
        return redirect()->to('admin/image/imageTiny')->with('success_one', $image['image_TinyCME_name']);
        

    }

    


}