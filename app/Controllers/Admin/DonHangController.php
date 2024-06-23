<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\DonHangModel;


class DonHangController extends BaseController
{   
    public function __construct(){
        helper(['Url', 'form', 'Text_helper']);
    }
    public function index(){
        $session = session();

        $donHang = new DonHangModel();
        $data['cart'] = $donHang->orderBy('id', 'DESC')->findAll();
        $cart2 = $donHang->orderBy('id', 'DESC')->where('checked_order', 0)->find();
        $cart2 = count($cart2);
        $session->set('cart_qty', $cart2);
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