<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 30px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
    </ol>
  </nav>
</div>

<!-- <div class="container">

  <section id="page-title" style="margin-bottom: 15px; margin-top: 30px; background-color: #ededed;">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item active"><a href="<?= $link_full?>">Bộ Sưu Tập</a></li>
      </ol>
    </div>
  </section>
</div> -->

<?php if($gallery_img != null): ?>
<section id="content">
  <div class="content-wrap">
    <div class="container">
      <a href="<?= site_url('').$cate_gallery['cate_slug'].'-'.$cate_gallery['id'] ?>" class="btn btn-danger fw-bold mb-4" style="border-radius: 0; text-transform: uppercase;"><i class="fas fa-arrow-left"></i> Chuyển Về Phiên bản cũ</a>





      <div class="card">
        <div class="card-body">
          
          <div class="table-responsive">
            <table id="example" class="table display table-bordered border-secondary table-light align-middle table-striped" style="width:100%">
                <thead class="table-primary">
                    <tr class="border-primary">
                        <th class="pt-3 pb-3">#</th>
                        <th class="pt-3 pb-3">Ảnh - Image</th>
                        <th class="pt-3 pb-3">Tiêu Đề - Title</th>
                        <th class="pt-3 pb-3">Thể Loại</th>
                        <th class="pt-3 pb-3">Kích Thước - Demension</th>
                        <th class="pt-3 pb-3">Download Image</th>
                        <th class="pt-3 pb-3">Link Tải File</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <tbody>
                  <?php foreach($gallery_img as $key): ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td>
                        <img src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" alt="<?= $key['gallery_title'] ?>" height="120px" style="border-radius: 7px; border: 3px solid #fcfcfa; padding: 7px"/>
                      </td>
                      <td><strong><a href="<?= base_url().'/'.$cate_slug.'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>" target="_blank"><?= $key['gallery_title'] ?></a></strong></td>
                      
                      <td><strong><?= $key['gallery_type_name'] ?></strong></td>
                      <td>
                        <?php
                          if(file_exists('public/upload/tinymce/gallery_asset'.'/'.$key['gallery_image']) != null){
                            $image_info = getimagesize('public/upload/tinymce/gallery_asset'.'/'.$key['gallery_image']);
                            $image_width = $image_info[0];
                            $image_height = $image_info[1];
                            echo $image_width.'x'.$image_height.' pixel';
                          }
                        ?>
                      </td>
                      <td><a href="<?= base_url('page/download/'.$key['gallery_image']) ?>"><i class="fas fa-download"></i> Download now</a></td>
                      <td>
                        <?php if($key['gallery_file_download'] != null): ?>
                          
                          

                          <a href="http://ouo.io/qs/iVlhUpN8?s=<?= $key['gallery_file_download'] ?>" target="_blank"><i class="fab fa-google-drive"></i> Download file</a>
                          
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php $i += 1; ?>
                  <?php endforeach; ?>
                    
                    
                </tbody>
                <tfoot class="table-info">
                    <tr class="border-success">
                        <th>#</th>
                        <th>Ảnh - Image</th>
                        <th>Tiêu Đề - Title</th>
                        <th class="pt-3 pb-3">Thể Loại</th>
                        <th>Kích Thước - Demension</th>
                        <th>Download Image</th>
                        <th>Link Tải File</th>
                    </tr>
                </tfoot>
            </table>
          </div>


        </div>
      </div>
      


      <!-- <div class="line line-sm"></div> -->

      
    </div>
  </div>
</section>


<?php else: ?>
    <div class="container mt-5">
      <p>Ảnh đang được cập nhật</p>
    </div>
<?php endif; ?>
      



<?= $this->endSection(); ?>

<?= $this->section('link_css'); ?>
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/'); ?>/site_asset/canvas/data_table/datatables.min.css">

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script src="<?= base_url('public/'); ?>/site_asset/canvas/data_table/datatables.min.js"></script>

<?= $this->endSection(); ?>



<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>

  <title><?= $title ?></title>

  
  <meta name="description" content="<?= $meta_desc ?>" />
  <meta name="keywords" content="<?= $meta_key ?>" />
  <meta name="title" content="<?= $title ?>" />
  


  <meta name="copyright" content="<?= base_url() ?>" />



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="<?= $title ?>">
  <meta itemprop="image" content="<?= $image ?>">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="<?= $title ?>">
  <meta name="twitter:title" content="<?= $title ?>">
  <meta name="twitter:description" content="<?= $meta_desc ?>">
  <meta name="twitter:creator" content="<?= base_url() ?>">
  <meta name="twitter:image" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:url" content="<?= base_url() ?>" />
  <meta property="og:image" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>" />
  <meta property="og:description" content="<?= $meta_desc ?>" />
  <meta property="og:locale" content="vi_VN" />
  
  <meta name="thumbnail" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>" />
  <meta property="og:image:secure_url" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>" />

  


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $created_at ?>" itemprop="dateCreated"/>

  
<?= $this->endSection(); ?>