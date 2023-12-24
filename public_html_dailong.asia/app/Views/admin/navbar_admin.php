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
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
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

    
      

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        

        <li class="nav-item">
          <a href="<?= base_url('admin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item" >
          <a href="<?= base_url('/'); ?>" target="_blank" class="nav-link" style="background-color: #3f6791; font-weight: bold;">
            <i class="nav-icon fas fa-cloud-sun"></i>
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
                <p>Danh Sách</p>
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
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
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












