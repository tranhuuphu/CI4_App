<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index(){
    	return view('admin/dashboard');
    }

    public function login(){
        return view('admin/auth/login');
    }

    public function register(){
        return view('admin/auth/register');
    }
    public function save(){
        // $validation = $this->validate([
        //     'name'=>'required',
        //     'email'=>'required|valid_email|is_unique[users.email]',
        //     'password'=>'required|min_length[5]',
        //     're_password'=>'required|matches[password]',
        // ]);
        $validation = $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>['required'=>'Không được để trống tên bạn']
            ],

            'email'=>[
                'rules'=>'required|valid_email|is_unique[users.email]',
                'valid_email'=>'Your must enter valid email',
                'is_unique'=> 'Email already taken, please login'

            ],
            'password'=>[
                'rules'=>'required|min_length[5]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must be atleast 5 characters',
                ]
            ],
            're_password'=>[
                'rules'=>'required|min_length[5]|matches[password]',
                'errors'=>[
                    'required'=>'re_password is required',
                    'min_length'=>'re_password must be atleast 5 characters',
                    'matches'=>'Confirm password not match to password'
                ]
            ],

        ]);

        if(!$validation){
            return view('admin/auth/register', ['validation'=>$this->validator]);
        }else{
            // echo 'Form validate successfully';
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $values = [
                'name'=>$name,
                'email'=>$email,
                'password'=>Hash::make($password),
            ];

            $usersModel = new \App\Models\usersModel();
            $query = $usersModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail', 'Some thing went wrong');
            }else{
                $last_id = $usersModel->insertID();
                session()->set('loggedUser', $last_id);
                return redirect()->to('admin/dashboard');
            }

        }
    }

    public function checkLogin(){
        // echo "Processing ............";
        $validation = $this->validate([
            

            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'required'=>'Email is required',
                'valid_email'=>'Your must enter valid email',
                'is_not_unique'=> 'This email is not registed on our service'

            ],
            'password'=>[
                'rules'=>'required|min_length[5]',
                'errors'=>[
                    'required'=>'Password is required',
                ]
            ],
            

        ]);

        if(!$validation){
            return view('admin/auth/login', ['validation'=>$this->validator]);
        }else{
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            // $password = Hash::make($password);
            
            $usersModel = new \App\Models\usersModel();
            $user_info = $usersModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail', 'Incorrect Password');
                return redirect()->to('/admin/auth/login')->withInput();

            }else{
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('/admin/dashboard/');
            }
        }
    }
    function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('auth/login?access-out')->with('fail', 'You are logged out!');
        }else{
           return redirect()->to('auth/login?access-out')->with('fail', 'You are ready logged out!'); 
        }
    }
}