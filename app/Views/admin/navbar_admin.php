<!-- Navbar Top -->
<nav class="main-header navbar navbar-expand navbar-white">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('admin'); ?>" class="nav-link">Home</a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> -->
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin'); ?>" class="brand-link">
    <img src="<?= base_url('public/upload/tinymce/image_asset'); ?>/<?php if($loggerUserID != null){echo $userinfo['favicon_image']; } ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE Board</span>
  </a>

  <!-- Sidebar Nav -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('public/upload/tinymce/image_asset'); ?>/<?php if($loggerUserID != null){echo $userinfo['user_image']; } ?>" class="img-circle " alt="User Image">
      </div>
      <div class="info">
        <a href="<?= site_url('admin/auth/detail'); ?>" class="d-block"><span style="color: white;">Hello:</span> <?php if($loggerUserID != null){echo $userinfo['name']; } ?></a>
      </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 d-flex user-panel">
      <div class="info-box">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-sign-out-alt"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><a href="<?= site_url('admin/auth/logout'); ?>" class="d-block" style="color: black; text-decoration:none; font-weight: bold;">Logout</a></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        

        <li class="nav-item dash_active">
          <a href="<?= base_url('admin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item" >
          <a href="<?= base_url('/'); ?>" target="_blank" class="nav-link" style="background-color: #212529; font-weight: bold;">
            <i class="nav-icon fas fa-external-link-alt"></i>
            <p>
              Watch Site
            </p>
          </a>
        </li>


        <li class="nav-item cart_active">
          <a href="<?= base_url('admin/don-hang'); ?>" class="nav-link" style="font-weight: bold;">
            <i class="nav-icon fas fa-cart-arrow-down"></i>
            <p>
              Đơn Hàng
            </p>
          </a>
        </li>
        
        
        <li class="nav-item cate_active">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Danh Mục
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview cate_tree_active">
            <li class="nav-item cate_tree_active">
              <a href="<?= base_url('admin/cate'); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh Sách</p>
              </a>
            </li>
            <li class="nav-item cate_tree_active2">
              <a href="<?= base_url('admin/cate/create'); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm mới</p>
              </a>
            </li>

            <li class="nav-item cate_tree_active3">
              <a href="javascript:void(0)" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Chỉnh sửa</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item post_active">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Bài Viết
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview post_tree_active">
            <li class="nav-item">
              <a href="<?= base_url('admin/post'); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Toàn Bộ Bài Viết</p>
              </a>
            </li>
            <li class="nav-item post_tree_active4">
              <a href="<?= base_url('admin/post/product'); ?>" class="nav-link">
                <i class="fas fa-shapes"></i>
                <p>Danh Sách Sản Phẩm</p>
              </a>
            </li>
            <li class="nav-item post_tree_active2">
              <a href="<?= base_url('admin/post/create'); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm bài viết</p>
              </a>
            </li>
            <li class="nav-item post_tree_active3">
              <a href="javascript:void(0)" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Chỉnh sửa</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item page_active">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Trang
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview page_tree_active">
            <li class="nav-item">
              <a href="<?= base_url('admin/page'); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh Sách</p>
              </a>
            </li>
            <li class="nav-item page_tree_active2">
              <a href="<?= base_url('admin/page/create'); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm bài viết</p>
              </a>
            </li>
            <li class="nav-item page_tree_active3">
              <a href="javascript:void(0)" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Chỉnh sửa</p>
              </a>
            </li>
          </ul>
        </li>

        
        <li class="nav-item carousel_active">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Slider
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview carousel_tree_active">
            <li class="nav-item carousel_tree_active">
              <a href="<?= base_url('admin/carousel'); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh Sách</p>
              </a>
            </li>
            <li class="nav-item carousel_tree_active2">
              <a href="<?= base_url('admin/carousel/create'); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm mới slide</p>
              </a>
            </li>

            <li class="nav-item carousel_tree_active3">
              <a href="javascript:void(0)" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Chỉnh sửa</p>
              </a>
            </li>
            
          </ul>
        </li>


        <li class="nav-item gallery_active">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Bộ Sưu Tập
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview gallery_tree_active">
            <li class="nav-item">
              <a href="<?= base_url('admin/gallery'); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh Sách Ảnh</p>
              </a>
            </li>
            <li class="nav-item gallery_tree_active2">
              <a href="<?= base_url('admin/gallery/create'); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm Ảnh</p>
              </a>
            </li>
            <li class="nav-item gallery_tree_active3">
              <a href="javascript:void(0)" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Chỉnh sửa</p>
              </a>
            </li>
          </ul>
        </li>
        
        
        
        <li class="nav-item image_active">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-compress-arrows-alt"></i>
            <p>
              Nén Ảnh
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview image_tree_active2">
            <li class="nav-item">
              <a href="<?= base_url('admin/image'); ?>" class="nav-link">
                <i class="fas fa-images nav-icon"></i>
                <p>Ảnh Chưa Nén</p>
              </a>
            </li>
            <li class="nav-item image_tree_active3">
              <a href="<?= base_url('admin/image/imageTiny'); ?>" class="nav-link">
                <i class="fas fa-compress-alt nav-icon"></i>
                <p>Image Compressed</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item type_gallery_active">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-images"></i>
            <p>
              Phân Loại Gallery
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview type_gallery_tree_active">
            <li class="nav-item">
              <a href="<?= base_url('admin/type_gallery'); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh Sách</p>
              </a>
            </li>
            <li class="nav-item type_gallery_tree_active2">
              <a href="<?= base_url('admin/type_gallery/create_type'); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm Loại Gallery</p>
              </a>
            </li>
            <li class="nav-item type_gallery_tree_active3">
              <a href="javascript:void(0)" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Chỉnh sửa</p>
              </a>
            </li>
          </ul>
        </li>

        

        
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>












