<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index(){
    	return view('admin/auth/login');
    }

    public function login(){
        return view('admin/auth/login');
    }

    public function register(){
        return view('admin/auth/register');
    }
    public function save(){
        $validation = $this->validate([
            'name'=>'required',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]',
            're_password'=>'required|matches[password]',
        ]);

        if(!$validation){
            return view('admin/auth/register', ['validation'=>$this->validator]);
        }else{
            echo 'Form validate successfully';
        }
    }
}