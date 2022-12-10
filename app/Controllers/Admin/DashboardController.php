<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {

        $data = [
        	'pageTitle'=>'Admin Dashboard',
        ];
        return view('admin/dashboard', $data);
    }
}