<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index(){
    	return view('admin/user/home');
    }
}