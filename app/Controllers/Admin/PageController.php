<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PageModel;
use App\Models\CateModel;
use App\Models\TagModel;


class PageController extends BaseController
{   
    public function __construct(){
        helper(['Url', 'Form', 'text', 'Text_helper']);
    }
    public function index(){
        $pageModel = new PageModel();
        $data['page'] = $pageModel->findAll();
        return view('admin/page/index_page', $data);
    }

    public function getPage()
    {   
        $pageModel = new PageModel();
        $data['page'] = $pageModel->findAll();
        return view('admin/page/create', $data);
    }

    public function savePage()
    {
        // $this->validate();
        $pageModel = new PageModel();

        $pageHome = $pageModel->where('page_status', 1)->first();
        // dd($check);
        if($this->request->getPost('page_status') == 1 && $pageHome != null){
            $data['page_status']        = 1;

            $data2['page_slug']         = $pageHome['page_slug'];
            $data2['page_name']         = $pageHome['page_name'];
            $data2['page_title']        = $pageHome['page_title'];
            $data2['page_image']        = $pageHome['page_image'];
            $data2['page_status']       = 0;
            $data2['page_content']      = $pageHome['page_content'];
            $data2['page_view']         = $pageHome['page_view'];
            $data2['page_show']         = $pageHome['page_show'];;
            $data2['page_meta_desc']    = $pageHome['page_meta_desc'];
            $data2['page_meta_key']     = $pageHome['page_meta_key'];

            if($pageHome['facebook']    != null){$data['facebook']      = $pageHome['facebook'];}
            if($pageHome['youtube']     != null){$data['youtube']       = $pageHome['youtube'];}
            if($pageHome['twitter']     != null){$data['twitter']       = $pageHome['twitter'];}
            if($pageHome['pinterest']   != null){$data['pinterest']     = $pageHome['pinterest'];}
            if($pageHome['maps']        != null){$data['maps']          = $pageHome['maps'];}
            if($pageHome['f_app']       != null){$data['f_app']         = $pageHome['f_app'];}
            if($pageHome['g_app']       != null){$data['g_app']         = $pageHome['g_app'];}
            if($pageHome['phone']       != null){$data['phone']         = $pageHome['phone'];}
            if($pageHome['page_favicon']!= null){$data['page_favicon']  = $pageHome['page_favicon'];}



            $pageModel->update($pageHome['id'], $data2);
        }else{
            $data['page_status']    = $this->request->getPost('page_status');
        }

        $validation = $this->validate([

            'page_name'=>[
                'rules'=>'required|is_unique[page.page_name]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                ],
            ],
            'page_title'=>[
                'rules'=>'required|is_unique[page.page_title]',
                'errors' => [
                    'required' => 'Tiêu đề không được để trống.',
                    'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                ],
            ],
            'page_content'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung bài viết không được để trống.',
                ],
            ],
            'page_image' => [
                'label' => 'Image File',
                'rules' => 'uploaded[page_image]'
                    . '|is_image[page_image]'
                    . '|mime_in[page_ismage,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[page_image,10000]',
                    // . '|max_dims[page_image,1024,768]',
                    'errors' => [
                    'uploaded' => 'Bạn chưa chọn ảnh cho bài viết.',
                    'max_size' => 'Kích trước file quá lớn.',
                ],
            ],
            'page_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung Meta Description này không được để trống.',
                ],

            ],
            'page_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung Meta Key này không được để trống.',
                ],

            ],

        ]);
        if(!$validation){
            return view('admin/page/create', ['validation'=>$this->validator]);
        }


        $page_name = $this->request->getPost('page_name');
        $page_slug = mb_strtolower(convert_name($page_name));

        $data['page_name']      = $page_name;
        $data['page_title']     = $this->request->getPost('page_title');
        $data['page_slug']      = $page_slug;
        $data['page_content']   = $this->request->getPost('page_content');
        $data['page_status']    = $this->request->getPost('page_status');
        $data['page_meta_desc'] = $this->request->getPost('page_meta_desc');
        $data['page_meta_key']  = $this->request->getPost('page_meta_key');
        $data['page_view']      = 0;
        $data['page_show']      = 1;

        // dd($data);

        
        $img = $this->request->getFile('page_image');

        $type = $img->guessExtension();
        $image_name = $page_slug.'-'.random_string('alnum', 6).'.'.$type;
        $data['page_image']       = $image_name;


        $pageModel->insert($data);

        if($img = $this->request->getFile('page_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $image_name);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }
        }
        return redirect()->to('admin/page')->with('success', 'Thêm thành công bài viết: '.$data['page_name'] );
    }

    public function getEdit($id){
        $pageModel = new PageModel();

        $data['page_detail'] = $pageModel->find($id);
        // dd($data['tagModel']);
        if($data['page_detail'] == null){
            return view('admin/404_admin');
        }

        return view('admin/page/edit_page', $data);
    }


    public function SaveEdit($id)
    {
        $pageModel = new PageModel();
        
        $check = $pageModel->find($id);
        if($check == null){
            return view('admin/404_admin');
        }

        $data['page_detail'] = $check;

        $page_name = $this->request->getPost('page_name');

        if($check['page_name'] == $page_name){
            $data['page_name'] = $page_name;

        }elseif($check['page_name'] != $page_name){
            $validation = $this->validate([
                'page_name'=>[
                    'rules'=>'required|is_unique[page.page_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                $data['validation'] = $this->validator;
                return view('admin/page/edit_page', $data);
            }
        }
        $validation = $this->validate([
            'page_content'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung bài viết không được để trống.',
                ],
            ],
            'page_meta_desc'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung Meta Description này không được để trống.',
                ],
            ],
            'page_meta_key'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nội dung Meta Key này không được để trống.',
                ],
            ],
        ]);
        
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/page/edit_page', $data);
        }


        if($check['page_status'] == 1){
            $data['page_status'] = 1;
        }elseif($check['page_status'] != 1 && $this->request->getPost('page_status') == 1){
            $data['page_status'] = 1;
            $pageHome = $pageModel->where('page_status', 1)->first();
            $data2['page_slug']         = $pageHome['page_slug'];
            $data2['page_name']         = $pageHome['page_name'];
            $data2['page_title']        = $pageHome['page_title'];
            $data2['page_image']        = $pageHome['page_image'];
            $data2['page_status']       = 0;
            $data2['page_content']      = $pageHome['page_content'];
            $data2['page_view']         = $pageHome['page_view'];
            $data2['page_show']         = $pageHome['page_show'];;
            $data2['page_meta_desc']    = $pageHome['page_meta_desc'];
            $data2['page_meta_key']     = $pageHome['page_meta_key'];

            $data2['facebook']      = null;
            $data2['youtube']       = null;
            $data2['twitter']       = null;
            $data2['pinterest']     = null;
            $data2['maps']          = null;
            $data2['f_app']         = null;
            $data2['g_app']         = null;
            $data2['phone']         = null;
            $data2['page_favicon']  = null;


            $data['facebook']       = $pageHome['facebook'];
            $data['youtube']        = $pageHome['youtube'];
            $data['twitter']        = $pageHome['twitter'];
            $data['pinterest']      = $pageHome['pinterest'];
            $data['maps']           = $pageHome['maps'];
            $data['f_app']          = $pageHome['f_app'];
            $data['g_app']          = $pageHome['g_app'];
            $data['phone']          = $pageHome['phone'];
            $data['page_favicon']   = $pageHome['page_favicon'];

            // Update Home Page Status
            $pageModel->update($pageHome['id'], $data2);
        }else{
            $data['page_status']    = $this->request->getPost('page_status');
        }

        

        $page_slug = mb_strtolower(convert_name($page_name));

        $data['page_title']     = $this->request->getPost('page_title');
        $data['page_slug']      = $page_slug;
        $data['page_content']   = $this->request->getPost('page_content');
        $data['page_meta_desc'] = $this->request->getPost('page_meta_desc');
        $data['page_meta_key']  = $this->request->getPost('page_meta_key');
        $data['page_view']      = $check['page_view'];
        $data['page_show']      = $check['page_show'];
        

        if($this->request->getFile('page_image')->guessExtension() != null){
            $img = $this->request->getFile('page_image');

            $type = $img->guessExtension();
            $image_name = $page_slug.'-'.random_string('alnum', 6).'.'.$type;
            $data['page_image']       = $image_name;
        }else{
            $data['page_image'] = $check['page_image'];
        }
        

        // dd($data);
        $pageModel->update($id, $data);

        if($img = $this->request->getFile('page_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $image_name);
                            
            }
        }
        return redirect()->to('admin/page')->with('update', $data['page_name']);
        
    }


    public function show($id){
        $pageModel = new PageModel();
        
        $pageDetail = $pageModel->find($id);
        $data['page_show']      = 1;

        $pageModel->update($id, $data);
        return redirect()->to('admin/page')->with("show", $pageDetail['page_name']);
    }

    public function hidden($id){
        $pageModel = new PageModel();
        
        $pageDetail = $pageModel->find($id);

        $data['page_show']      = 0;

        $pageModel->update($id, $data);
        return redirect()->to('admin/page')->with("hidden", $pageDetail['page_name']);
    }

    public function add($id){
        $pageModel = new PageModel();

        $data['page_detail'] = $pageModel->find($id);

        return view('admin/page/add', $data);
    }
    
    public function addThis($id){
        $pageModel = new PageModel();

        $page_detail = $pageModel->find($id);
        $data['page_detail'] = $page_detail;

        $validation = $this->validate([
            'facebook'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Facebook Page không được để trống.',
                ],
            ],
            'youtube'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Youtube Channel không được để trống.',
                ],
            ],
            'maps'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Link Google Maps không được để trống.',
                ],
            ],

            'g_app'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Google Verification không được để trống.',
                ],
            ],

            'phone'=>[
                'rules'=>'required',
                'errors' => [
                    'required' => 'Số điện thoại không được để trống.',
                ],
            ],
        ]);
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/page/add', $data);
        }
        $data['facebook']   = $this->request->getPost('facebook');
        $data['youtube']    = $this->request->getPost('youtube');
        $data['twitter']    = $this->request->getPost('twitter');
        $data['pinterest']  = $this->request->getPost('pinterest');
        $data['maps']       = $this->request->getPost('maps');
        $data['f_app']      = $this->request->getPost('f_app');
        $data['g_app']      = $this->request->getPost('g_app');
        $data['phone']      = $this->request->getPost('phone');


        if($this->request->getFile('google_image_maps')->guessExtension() != null){

            $img = $this->request->getFile('google_image_maps');
            $type = $img->guessExtension();
            
            $image_name = $page_detail['page_slug'].'-'.random_string('alnum', 6).'.'.$type;

            $data['google_image_maps']       = $image_name;
        }else{
            $data['google_image_maps'] = $page_detail['google_image_maps'];
        }


        if($this->request->getFile('page_favicon')->guessExtension() != null){

            $img2 = $this->request->getFile('page_favicon');
            $type2 = $img2->guessExtension();
            
            $image_name2 = 'favicon_'.$page_detail['page_slug'].'-'.random_string('alnum', 6).'.'.$type2;

            $data['page_favicon']       = $image_name2;
        }else{
            $data['page_favicon'] = $page_detail['page_favicon'];
        }

        

        

        // dd($data);
        $pageModel->update($id, $data);

        if($this->request->getFile('google_image_maps')->guessExtension() != null)
        {
            $img = $this->request->getFile('google_image_maps');
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $image_name);
            }
        }

        if($this->request->getFile('page_favicon')->guessExtension() != null)
        {
            $img2 = $this->request->getFile('page_favicon');
            if ($img2->isValid() && ! $img2->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type2 = $img2->getClientMimeType();
                $img2->move(ROOTPATH . 'public/upload/tinymce/image_asset', $image_name2);
            }
        }
        return redirect()->to('admin/page')->with('page_detail', $page_detail);
    }


}