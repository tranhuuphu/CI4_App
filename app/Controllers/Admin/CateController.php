<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CateModel;
use App\Models\PostModel;


class CateController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text', 'Text_helper']);
    }

    public function index(){
        $cateModel = new \App\Models\CateModel();
        $data['cate'] = $cateModel->orderBy('id', 'DESC')->where("cate_parent_id", 0)->findAll();
        $data['cate2'] = $cateModel->orderBy('id', 'DESC')->where("cate_parent_id !=", 0)->findAll();
        return view('admin/cate/index_cate', $data);
    }


    public function getCate()
    {
        $cateModel = new CateModel();

        $data['cate'] = $cateModel->orderBy("cate_type", 'DESC')->where('cate_parent_id', 0)->findAll();
        $data['cate_blog'] = $cateModel->where('cate_type', 'blog')->first();
        $data['cate_gallery'] = $cateModel->where('cate_type', 'cate_gallery')->first();
        // dd($data);
        return view('admin/cate/create_cate', $data);
    }

    public function store()
    {
        // $this->validate();

        $cateModel = new CateModel();

        $data['cate'] = $cateModel->orderBy("cate_type", 'DESC')->where('cate_parent_id', 0)->findAll();
        $data['cate_blog'] = $cateModel->where('cate_type', 'blog')->first();
        $data['cate_gallery'] = $cateModel->where('cate_type', 'cate_gallery')->first();


        $validation = $this->validate([
            'cate_name'=>[
                'rules'=>'required|is_unique[cate.cate_name]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề này đã được dùng.',
                ],
            ],
            'cate_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Desc không được để trống.',
                ],

            ],
            'cate_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Key không được để trống.',
                ],

            ],
            
        ]);
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/cate/edit_cate', $data);
        }

        

        $cate_name              = $this->request->getPost('cate_name');
        $data['cate_name']      = $cate_name;

        $cate_slug                  = mb_strtolower(convert_name($cate_name));

        $data['cate_slug']          = $cate_slug;

        $data['cate_parent_id']     = $this->request->getPost('cate_parent_id');
        $data['cate_status']        = $this->request->getPost('cate_status');
        $data['cate_type']          = $this->request->getPost('cate_type');
        $data['cate_meta_desc']     = $this->request->getPost('cate_meta_desc');
        $data['cate_meta_key']      = $this->request->getPost('cate_meta_key');
        // dd($data);

        $cateModel->insert($data);

        

        return redirect()->to('admin/cate')->with('success', $cate_name);
    }
    public function getEditCate($cate_id){

        $cateModel = new CateModel();
        
        $data['cate'] = $cateModel->orderBy("cate_type", 'DESC')->where('id', $cate_id)->first();

        if($data['cate'] == null){
            return view('admin/404_admin');
        }
        // dd($data);
        $data['cate_all'] = $cateModel->orderBy("cate_type", 'DESC')->where('cate_parent_id', 0)->findAll();

        $data['cate_blog']      = $cateModel->where('cate_type', 'blog')->first();
        $data['cate_gallery']   = $cateModel->where('cate_type', 'cate_gallery')->first();
        
        return view('admin/cate/edit_cate', $data);
    }

    public function PostEditCate($cate_id){

        
        $cateModel = new CateModel();



        $cate_detail = $cateModel->where('id', $cate_id)->first();
        if($cate_detail == null){
            return view('admin/404_admin');
        }



        $cate_name = $this->request->getPost('cate_name');
        $data['cate']         = $cate_detail;

        // dd($data);
        $data['cate_all'] = $cateModel->orderBy("cate_type", 'DESC')->where('cate_parent_id', 0)->findAll();
        $data['cate_blog']      = $cateModel->where('cate_type', 'blog')->first();
        $data['cate_gallery']   = $cateModel->where('cate_type', 'cate_gallery')->first();

        if($cate_detail['cate_parent_id'] == 0){
            $cate_sub = $cateModel->where('cate_parent_id', $cate_detail['id'])->findAll();
            if($cate_sub != null &&){
                // return view('admin/cate/edit_cate', $data)->with("errors", "có lỗi vì danh mục này chứa danh mục con");
                return redirect()->to('admin/cate/edit/'.$cate_detail['id'])->with("errors", "Danh mục này chứa danh mục con");
            }
        }
        $data['cate_name'] = $cate_name;

        if($cate_detail['cate_name'] = $cate_name){
            $data['cate_name'] = $cate_name;

        }elseif($cate_detail['cate_name'] != $cate_name){
            $validation = $this->validate([
                'cate_name'=>[
                    'rules'=>'required|is_unique[cate.cate_name]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề bị trùng.',
                    ],
                ],
                'cate_meta_desc'=>[
                    'rules'=>'required',
                    'errors' => [
                        'required' => 'Meta Desc không được để trống.',
                    ],

                ],
                'cate_meta_key'=>[
                    'rules'=>'required',
                    'errors' => [
                        'required' => 'Meta Key không được để trống.',
                    ],

                ],
                
            ]);
            if(!$validation){
                $data['validation'] = $this->validator;
                return view('admin/cate/edit_cate', $data);
            }
        }

        $validation = $this->validate([
            'cate_name'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                ],
            ],
            'cate_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Desc không được để trống.',
                ],

            ],
            'cate_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Meta Key không được để trống.',
                ],

            ],
            
        ]);
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/cate/edit_cate', $data);
        }

        $cate_slug                  = mb_strtolower(convert_name($cate_name));
        $data['cate_slug']          = $cate_slug;
        $data['cate_parent_id']     = $this->request->getPost('cate_parent_id');
        $data['cate_status']        = $this->request->getPost('cate_status');
        $data['cate_meta_desc']     = $this->request->getPost('cate_meta_desc');
        $data['cate_meta_key']      = $this->request->getPost('cate_meta_key');
        // dd($data);

        $cateModel->update($cate_id, $data);


        if($cate_detail['cate_name'] != $cate_name){
            $postModel = new PostModel();
            $post = $postModel->where('post_cate_id', $cate_detail['id'])->findAll();
            // dd($post);
            if($post != null){
                foreach($post as $p){
                    $id = $p['id'];
                    $data2['post_cate_name'] = $cate_name;
                    $data2['post_cate_slug'] = $cate_slug;
                    $postModel->update($id, $data2);
                }
            }

            
            if($cate_detail['cate_type'] == 'cate_gallery'){
                $galleryModel = new GalleryModel();
                $gallery_all = $galleryModel->findAll();
                if($gallery_all != null){
                    foreach($gallery_all as $ga){
                        $id = $ga['id'];
                        $data2['gallery_cate_slug'] = $cate_slug;
                        $galleryModel->update($id, $data2);
                    }
                }

            }
            
        }



        return redirect()->to('admin/cate')->with('update', $cate_name);
    }
}