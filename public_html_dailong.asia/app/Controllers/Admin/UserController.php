<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index(){
    	return view('admin/user/home');
    }
}