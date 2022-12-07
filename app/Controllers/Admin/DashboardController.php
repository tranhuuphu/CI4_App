<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $usersModel = new \App\Models\usersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
        	'title'=>'Admin dashboard',
        	'userInfo'=>$userInfo
        ];
        return view('admin/dashboard', $data);
    }
}