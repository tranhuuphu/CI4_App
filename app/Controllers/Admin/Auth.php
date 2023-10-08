<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['Url', 'Form', 'text', 'Text_helper']);
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
                // $last_id = $usersModel->insertID();
                // session()->set('loggedUser', $last_id);
                return redirect()->to('admin/auth');
            }

        }
    }

    public function checkLogin(){
        // echo "Processing ............";
        $validation = $this->validate([
            

            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                    'is_not_unique' => 'Email not registered in our server.',
                ],

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
                session()->setFlashdata('fail', 'Incorrect Email or Password');
                return redirect()->to('auth')->withInput();

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
            return redirect()->to('auth?access-out')->with('fail', 'You are logged out!');
        }else{
           return redirect()->to('auth?access-out')->with('fail', 'You are ready logged out!'); 
        }
    }

    public function getEdit(){

        $usersModel = new \App\Models\usersModel();
        $loggerUserID = session()->get('loggedUser');
        $data['userInfo'] = $usersModel->find($loggerUserID);

        // $dataLogin = ['userinfo'=> $userInfo, 'loggerUserID' => $loggerUserID];

        return view('admin/auth/detail', $data);
    }

    public function postEdit($id){

        $userCheck = new \App\Models\usersModel();
        $userInfo = $userCheck->find($id);


        
        if($userInfo['name'] != $this->request->getPost('name')){
            session()->setFlashdata('user', 'Bạn đã cập nhật tên mới');
        }
        $validation = $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>['required'=>'Không được để trống tên']
            ],

        ]);

        if(!$validation){
            // return redirect()->to('admin/auth/detail')->with('validation',$this->validator);
            return view('admin/auth/detail', ['validation'=>$this->validator]);
            // return view('admin/auth/detail', ['validation'=>$this->validator]);
        }else{
            // echo 'Form validate successfully';
            $data['name']   = $this->request->getPost('name');
            $data['email']  = $this->request->getPost('email');
            if($this->request->getFile('user_image')->guessExtension() != null){

                $img = $this->request->getFile('user_image');
                $type = $img->guessExtension();
                
                $user_image = 'user_'.mb_strtolower(convert_name($this->request->getPost('name'))).'-'.random_string('alnum', 5).'.'.$type;

                $data['user_image']       = $user_image;
            }else{
                $data['user_image'] = $userInfo['user_image'];
            }

            if($this->request->getFile('favicon_image')->guessExtension() != null){

                $img2 = $this->request->getFile('favicon_image');
                $type2 = $img2->guessExtension();
                
                $favicon_image = 'favicon_admin'.'-'.random_string('alnum', 5).'.'.$type2;

                $data['favicon_image']       = $favicon_image;
            }else{
                $data['favicon_image'] = $userInfo['favicon_image'];
            }

            $password = $this->request->getPost('password');
            if($password != null){
                

                $validation = $this->validate([
                    
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
                    return view('admin/auth/detail', ['validation'=>$this->validator, 'userInfo'=>$userInfo]);
                    // return view('admin/auth/detail', ['validation'=>$this->validator]);
                }
                $data['password'] = Hash::make($password);
                session()->setFlashdata('password', 'Bạn đã cập nhật Password mới');
                
            }

            if($userInfo['name'] == $this->request->getPost('name') && $this->request->getPost('password') == null && $this->request->getPost('re_password') == null && empty($this->request->getFile('user_image')) && empty($this->request->getFile('favicon_image'))){
                return redirect()->back()->with('fail', 'Bạn chưa cập nhật thông tin');
            }

            
            
            $usersModel = new \App\Models\usersModel();
            $usersModel->update($id, $data);


            


            if(!$usersModel){
                return redirect()->back()->with('fail', 'Some thing went wrong');
            }else{
                // $last_id = $usersModel->insertID();
                // session()->set('loggedUser', $last_id);
                if($img = $this->request->getFile('user_image'))
                {
                    if ($img->isValid() && ! $img->hasMoved())
                    {
                        // $newName = $img->getRandomName();
                        // $type = $img->getClientMimeType();
                        $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $user_image);
         
                        // You can continue here to write a code to save the name to database
                        // db_connect() or model format
                                    
                    }
                }

                if($img2 = $this->request->getFile('favicon_image'))
                {
                    if ($img2->isValid() && ! $img2->hasMoved())
                    {
                        // $newName = $img->getRandomName();
                        // $type = $img2->getClientMimeType();
                        $img2->move(ROOTPATH . 'public/upload/tinymce/image_asset', $favicon_image);
         
                        // You can continue here to write a code to save the name to database
                        // db_connect() or model format
                                    
                    }
                }
                
                return redirect()->to('admin/auth/detail')->with('success', 'Đã cập nhật thông tin tài khoản');

            }

        }
        return redirect()->to('admin/auth/detail');
    }

    public function forgot(){
        return view('admin/auth/forgot');
    }

    public function Resend(){
        

        // $data['email']  = $this->request->getPost('email');

        $validation = $this->validate([
            

            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                    'is_not_unique' => 'Email này không tồn tại trong hệ thống.',
                ],

            ],
            

        ]);

        $adminEmail = "phuth.me@gmail.com";

        if(!$validation){
            return view('admin/auth/forgot', ['validation'=>$this->validator]);
        }else{
            $email_user = $this->request->getPost('email');
            $usersModel = new \App\Models\usersModel();
            $user_info = $usersModel->where('email', $email_user)->first();
            $id = $user_info['id'];
            $password       = random_string('alnum', 8);
            $data['password']       = Hash::make($password);
            
            $usersModel->update($id, $data);
        }

        // $email = \Config\Services::email();

        // $email->setFrom($adminEmail, 'Set New Password');
        // $email->setTo($email_user);

        // $email->setSubject('Mật Khẩu Reset');
        // $email->setMessage('Here is new Password: '. $password);

        
        // if($email->send()){
        //     echo "success";
        // }else{
        //     echo "fail";
        // }
        return redirect()->to('auth')->with('success2', 'Mật khẩu mới của bạn là: '.$password);
    }
    
}