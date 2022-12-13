<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;


class PostController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text_helper']);
    }
    public function getPost()
    {
        
        return view('admin/post/postCreate');
    }

    public function savePost()
    {
        // $this->validate();



        $post_title = $this->request->getPost('post_title');
        $data['post_title'] = $post_title;

        $post_title_slug = convert_name($post_title);

        $data['post_title_slug'] = $post_title_slug;

        $data['post_intro'] = $this->request->getPost('post_intro');
        $data['post_content'] = $this->request->getPost('post_content');
        $data['post_featured'] = $this->request->getPost('post_featured');
        $data['post_price'] = $this->request->getPost('post_price');
        $data['post_meta_desc'] = $this->request->getPost('post_meta_desc');
        $data['post_meta_key'] = $this->request->getPost('post_meta_key');
        $data['tagsinput'] = $this->request->getPost('tagsinput');
        $data['post_img'] = $this->request->getFile('post_img');
        dd($data);

        // $input = $this->validate([
        //     'post_img' => [
        //         'uploaded[post_img]',
        //         'mime_in[post_img,image/jpg,image/jpeg,image/png]',
        //         'max_size[post_img,1024]',
        //     ]
        // ]);

        if($img = $this->request->getFile('post_img'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $newName);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }
        }
    
        // if (!$input) {
        //     dd('Choose a valid file');
        // } else {
        //     $img = $this->request->getFile('post_img');
        //     $img->move(base_url('/') . '/public/upload/tinymce/image_asset/');
    
        //     // $data = [
        //     //    'name' =>  $img->getName(),
        //     //    'type'  => $img->getClientMimeType()
        //     // ];
    
        //     // $save = $db->insert($data);
        //     dd('File has successfully uploaded');        
        // }

        return view('admin/post/postCreate');
    }
}