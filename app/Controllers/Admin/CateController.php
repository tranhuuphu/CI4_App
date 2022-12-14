<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CateModel;


class CateController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text', 'text_helper']);
    }

    public function index(){
        $cateModel = new \App\Models\CateModel();
        $data['cate'] = $cateModel->findAll();
        return view('admin/cate/index', $data);
    }


    public function getCate()
    {
        $cateModel = new CateModel();
        $data['cate'] = $cateModel->where('cate_parent_id', 0)->findAll();
        // dd($data);
        return view('admin/cate/create', $data);
    }

    public function store()
    {
        // $this->validate();

        $cateModel = new CateModel();

        $cate_name = $this->request->getPost('cate_name');
        $data['cate_name']         = $cate_name;

        $cate_slug                  = mb_strtolower(convert_name($cate_name));

        $data['cate_slug']          = $cate_slug;

        $data['cate_parent_id']     = $this->request->getPost('cate_parent_id');
        $data['cate_status']        = $this->request->getPost('cate_status');
        $data['cate_meta_desc']     = $this->request->getPost('cate_meta_desc');
        $data['cate_meta_key']      = $this->request->getPost('cate_meta_key');
        // dd($data);

        $cateModel->insert($data);

        

        return redirect()->to('admin/cate');
    }
    public function getEditCate($cate_id){

        $cateModel = new CateModel();
        
        $data['cate'] = $cateModel->where('id', $cate_id)->first();

        $data['cate_all'] = $cateModel->where('cate_parent_id', 0)->findAll();
        
        return view('admin/cate/edit', $data);
    }

    public function PostEditCate($cate_id){

        
        $cateModel = new CateModel();
        // dd($cate_id);

        // $cate_edit = $cateModel->where('cate_id', $cate_id)->first();

        $cate_name = $this->request->getPost('cate_name');
        $data['cate_name']         = $cate_name;

        $cate_slug                  = mb_strtolower(convert_name($cate_name));

        $data['cate_slug']          = $cate_slug;

        $data['cate_parent_id']     = $this->request->getPost('cate_parent_id');
        $data['cate_status']        = $this->request->getPost('cate_status');
        $data['cate_meta_desc']     = $this->request->getPost('cate_meta_desc');
        $data['cate_meta_key']      = $this->request->getPost('cate_meta_key');
        // dd($data);

        
        // $cateModel->where('id', $cate_id)->update($data);
        $cateModel->update($cate_id, $data);

        

        return redirect()->to('admin/cate');
    }
}