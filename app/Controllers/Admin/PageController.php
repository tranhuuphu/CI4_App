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
        $pageModel = new PostModel();

        $data['page'] = $pageModel->findAll();
        // dd($data['tagModel']);
        return view('admin/page/editPost', $data);
    }


    public function SaveEdit($id)
    {
        // $this->validate();
        // dd($id);
        $postModel = new PostModel();
        $cateModel = new CateModel();
        $tagModel = new TagModel();

        $data['cate'] = $cateModel->findAll();
        $tagList = $tagModel->where('tag_page_id', $id)->get()->getResultArray();
        // dd($tagList);
        $data['tagModel'] = $tagModel->where('tag_page_id', $id)->get()->getResultArray();
        $detailPost = $postModel->find($id);
        $page_title = $this->request->getPost('page_title');
        $data['postDetail'] = $detailPost;

        if($detailPost['page_title'] == $page_title){
            $data['page_title'] = $page_title;

        }elseif($detailPost['page_title'] != $page_title){
            $validation = $this->validate([
                'page_title'=>[
                    'rules'=>'required|is_unique[post.page_title]',
                    'errors' => [
                        'required' => 'Tiêu đề không được để trống.',
                        'is_unique' => 'Tiêu đề trùng với bài viết khác.',
                    ],
                ],
            ]);
            if(!$validation){
                return view('admin/post/editPost', ['validation'=>$this->validator]);
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
            return view('admin/post/editPost', $data);
        }
        $page_title_slug = convert_name($page_title);
        $page_cate_id           = $this->request->getPost('page_cate_id');
        $data['page_slug']      = $page_title_slug;
        $data['page_intro']     = $this->request->getPost('page_intro');
        $data['page_content']   = $this->request->getPost('page_content');
        $data['page_cate_id']   = $page_cate_id;
        $data['page_featured']  = $this->request->getPost('page_featured');
        $data['page_price']     = $this->request->getPost('page_price');
        $data['page_sale']      = $this->request->getPost('page_sale');
        $data['page_status']    = $this->request->getPost('page_status');
        $data['page_meta_desc'] = $this->request->getPost('page_meta_desc');
        $data['page_meta_key']  = $this->request->getPost('page_meta_key');
        $data['page_view']      = $detailPost['page_view'];
        $data['page_show']      = $detailPost['page_show'];

        $cate_slug = $cateModel->where('id', $page_cate_id)->first();
        $data['page_cate_slug']   = $cate_slug['cate_slug'];
        
        
        if(!empty($this->request->getFile('page_image'))){

            $img = $this->request->getFile('page_image');
            $type = $img->guessExtension();
            
            $page_title_slug2 = $page_title_slug.'-'.random_string('alnum', 16).'.'.$type;

            $data['page_image']       = $page_title_slug2;
        }else{
            $data['page_image'] = $detailPost['page_image'];
        }
        


        $postModel->update($id, $data);


        $page_tag = $this->request->getPost('taginput');
        $page_tag = json_decode($page_tag, true);
        
        $tagId = $tagModel->where('tag_page_id', $id)->first();


        if($postModel){
            
            if($page_tag != null){

                $tagModel->where('tag_page_id', $id)->delete();
                $page_tag = json_decode($page_tag, true);

                foreach($page_tag as $t_a){
                    $ta[] = $t_a['value'];
                }

                if($postModel){
                    if($page_tag != null){
                        foreach($ta as $t_a){
                            $tagModel->insert(
                                ['tag_cate_id' => $cate_slug['id'], 'tag_cate_slug' => $cate_slug['cate_slug'], 'tag_page_id' => $id, 'tag_page_title' => $t_a, 'tag_page_slug' => mb_strtolower(convert_name($t_a)), 'tag_show' => 1, 'tag_view' => 0],
                            );
                        }
                    }
                }
                
            }
        }

        if($img = $this->request->getFile('page_image'))
        {
            if ($img->isValid() && ! $img->hasMoved())
            {
                // $newName = $img->getRandomName();
                $type = $img->getClientMimeType();
                $img->move(ROOTPATH . 'public/upload/tinymce/image_asset', $page_title_slug2);
 
                // You can continue here to write a code to save the name to database
                // db_connect() or model format
                            
            }
        }
    

        return redirect()->to('admin/post');
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