<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\DonHangModel;


class DonHangController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text_helper']);
    }
    public function index(){
        $donHang = new DonHangModel();
        $data['cart'] = $donHang->orderBy('id', 'ASC')->findAll();
        return view('admin/donHang/index_donhang', $data);
    }


    public function getEdit($id, $action){
        $donHang = new DonHangModel();

        $detail = $donHang->find($id);
        if($detail == null){
            return view('admin/404_admin');
        }
        $data['checked_order']      = $action;


        $donHang->update($id, $data);

        return redirect()->to('admin/don-hang');
    }

    public function getDelete($id){

        $donHang = new DonHangModel();
        $detail = $donHang->find($id);
        if($detail == null){
            return view('admin/404_admin');
        }
        $donHang->delete(['id' => $id]);
        return redirect()->to('admin/don-hang');
    }


    


    


}