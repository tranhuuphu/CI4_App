<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PageModel;
use App\Models\CateModel;
use App\Models\TagModel;


class PageController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form', 'text_helper']);
    }
    public function index(){
        $pageModel = new PageModel();
        $data['page'] = $pageModel->findAll();
        return view('admin/page/index', $data);
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
            $data['page_status'] = 1;
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
                    . '|mime_in[page_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
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
        $image_name = $page_slug.'-'.random_string('alnum', 16).'.'.$type;
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
        return redirect()->to('admin/page')->with('success', 'Thêm thành công bài viết: '.$data['page_title'] );
    }

    public function getEdit($id){
        $pageModel = new PageModel();

        $data['pageDetail'] = $pageModel->find($id);
        // dd($data['tagModel']);
        return view('admin/page/editPage', $data);
    }


    public function SaveEdit($id)
    {
        $pageModel = new PageModel();
        $check = $pageModel->find($id);

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
            $pageModel->update($pageHome['id'], $data2);
        }else{
            $data['page_status']    = $this->request->getPost('page_status');
        }

        $page_name = $this->request->getPost('page_name');
        if($check['page_name'] == $page_name){
            $data['page_name'] = $page_name;

        }elseif($check['page_name'] != $page_name){
            $validation = $this->validate([
                'page_name'=>[
                    'rules'=>'required|is_unique[post.page_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                return view('admin/page/editPage', ['validation'=>$this->validator]);
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
        $data['pageDetail'] = $check;
        if(!$validation){
            $data['validation'] = $this->validator;
            return view('admin/page/editPage', $data);
        }

        $page_slug = mb_strtolower(convert_name($page_name));

        $data['page_title']     = $this->request->getPost('page_title');
        $data['page_slug']      = $page_slug;
        $data['page_content']   = $this->request->getPost('page_content');
        $data['page_meta_desc'] = $this->request->getPost('page_meta_desc');
        $data['page_meta_key']  = $this->request->getPost('page_meta_key');
        $data['page_view']      = $check['page_view'];
        $data['page_show']      = $check['page_show'];

        // dd($data);

        
        $img = $this->request->getFile('page_image');

        $type = $img->guessExtension();
        $image_name = $page_slug.'-'.random_string('alnum', 16).'.'.$type;
        $data['page_image']       = $image_name;


        $pageModel->update($id, $data);

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
        return redirect()->to('admin/page')->with('success', 'Chỉnh sửa thành công bài viết: '.$data['page_title'] );
        
    }


    public function show($id){
        $postModel = new PostModel();
        
        $postDetail = $postModel->find($id);
        $data['page_cate_id']   = $postDetail['page_cate_id'];
        $data['page_cate_slug'] = $postDetail['page_cate_slug'];
        $data['page_title']     = $postDetail['page_title'];
        $data['page_slug']      = $postDetail['page_slug'];
        $data['page_intro']     = $postDetail['page_intro'];
        $data['page_image']     = $postDetail['page_image'];
        $data['page_status']    = $postDetail['page_status'];
        $data['page_featured']  = $postDetail['page_featured'];
        $data['page_content']   = $postDetail['page_content'];
        $data['page_price']     = $postDetail['page_price'];
        $data['page_sale']      = $postDetail['page_sale'];
        $data['page_view']      = $postDetail['page_view'];
        $data['page_show']      = 1;
        $data['page_meta_desc'] = $postDetail['page_meta_desc'];
        $data['page_meta_key']  = $postDetail['page_meta_key'];

        $postModel->update($id, $data);
        return redirect()->to('admin/post')->with("success", "bài viết: "."---".$postDetail['page_title']."---"." sẽ được hiển thị trên trang web");
    }

    public function hidden($id){
        $postModel = new PostModel();
        
        $postDetail = $postModel->find($id);
        $data['page_cate_id']   = $postDetail['page_cate_id'];
        $data['page_cate_slug'] = $postDetail['page_cate_slug'];
        $data['page_title']     = $postDetail['page_title'];
        $data['page_slug']      = $postDetail['page_slug'];
        $data['page_intro']     = $postDetail['page_intro'];
        $data['page_image']     = $postDetail['page_image'];
        $data['page_status']    = $postDetail['page_status'];
        $data['page_featured']  = $postDetail['page_featured'];
        $data['page_content']   = $postDetail['page_content'];
        $data['page_price']     = $postDetail['page_price'];
        $data['page_sale']      = $postDetail['page_sale'];
        $data['page_view']      = $postDetail['page_view'];
        $data['page_show']      = 0;
        $data['page_meta_desc'] = $postDetail['page_meta_desc'];
        $data['page_meta_key']  = $postDetail['page_meta_key'];

        $postModel->update($id, $data);
        return redirect()->to('admin/post')->with("success", "bài viết: "."---".$postDetail['page_title']."---"." sẽ không hiển thị trên trang web");
    }


}