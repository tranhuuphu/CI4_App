<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\GalleryTypeModel;
use App\Models\GalleryModel;


class GalleryTypeController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text', 'Text_helper']);
    }

    public function index(){
        $type = new GalleryTypeModel();
        $data['typeGallery'] = $type->findAll();
        return view('admin/gallery_type/index_type', $data);
    }


    public function getType()
    {
        return view('admin/gallery_type/create_type');
    }

    public function store()
    {
        // $this->validate();

        $galleryType = new GalleryTypeModel();

        $validation = $this->validate([

            'gallery_type_name'=>[
                'rules'=>'required|is_unique[gallery_type.gallery_type_name]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề này đã bị trùng.',
                ],

            ],
            

        ]);
        if(!$validation){
            return view('admin/gallery_type/create_type', ['validation'=>$this->validator,]);
        }        

        $gallery_type_name              = $this->request->getPost('gallery_type_name');
        $data['gallery_type_name']      = $gallery_type_name;

        $gallery_type_slug                  = mb_strtolower(convert_name($gallery_type_name));

        $data['gallery_type_slug']          = $gallery_type_slug;

        $galleryType->insert($data);

        

        return redirect()->to('admin/type_gallery')->with('success', $gallery_type_name);
    }
    public function getEditType($id){

        $galleryType = new GalleryTypeModel();

         
        
        $data['type_detail'] = $galleryType->where('id', $id)->first();
        // dd($data);
        if($data['type_detail'] == null){
            return view('admin/404_admin');
        }
        
        return view('admin/gallery_type/edit_type', $data);
    }

    public function PostEditType($id){

        
        $galleryType = new GalleryTypeModel();

         
        
        $type_detail = $galleryType->where('id', $id)->first();


        $data['type_detail'] = $type_detail;
        if($type_detail == null){
            return view('admin/404_admin');
        }

        $gallery_type_name = $this->request->getPost('gallery_type_name');

        if($type_detail['gallery_type_name'] == $gallery_type_name){
            $data['gallery_type_name'] = $gallery_type_name;

        }elseif($type_detail['gallery_type_name'] != $gallery_type_name){
            $validation = $this->validate([
                'gallery_type_name'=>[
                    'rules'=>'required|is_unique[gallery_type.gallery_type_name]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề này đã bị trùng.',
                    ],

                ],
            ]);
            if(!$validation){
                $data['validation'] = $this->validator;
                return view('admin/gallery_type/edit_type', $data);
            }
        }
        $data['gallery_type_name'] = $gallery_type_name;
        $gallery_type_slug         = mb_strtolower(convert_name($gallery_type_name));

        $data['gallery_type_slug'] = $gallery_type_slug;

        $galleryType->update($id, $data);
        if($type_detail['gallery_type_name'] != $gallery_type_name){
            $galleryModel = new GalleryModel();
            $gallery = $galleryModel->where('gallery_type_id', $id)->findAll();
            if($gallery != null){
                foreach($gallery as $gl){
                    $id = $gl['id'];
                    $data2['gallery_type_name'] = $gallery_type_name;
                    $data2['gallery_type_slug'] = $gallery_type_slug;
                    $galleryModel->update($id, $data2);
                }
            }
            
        }
        

        

        return redirect()->to('admin/type_gallery')->with('success', $gallery_type_name);
    }
}