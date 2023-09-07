<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>


<div class="container">

  <section id="page-title" style="margin-bottom: 15px; margin-top: 30px; background-color: #ededed;">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fa-duotone fa-house"></i></a></li>
        <li class="breadcrumb-item active"><a href="<?= $link_full?>"><i class="far fa-images"></i></a></li>
      </ol>
    </div>
  </section>
</div>

<?php if(count($post_cate) > 0): ?>
<section id="content">
  <div class="content-wrap">
    <div class="container">
      

      <div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">

        <?php foreach($post_cate as $key): ?>
        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
          <div class="grid-inner">
            <div class="portfolio-image">
              <a href="<?= base_url().'/'.$cate_slug.'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>">
                <img src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" alt="<?= $key['gallery_title'] ?>"/>
              </a>

              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a
                    href="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInDownSmall"
                    data-hover-animate-out="fadeOutUpSmall"
                    data-hover-speed="350"
                    data-lightbox="image"
                    title="<?= $key['gallery_title'] ?>"
                  >
                    <i class="fa-duotone fa-expand"></i>
                  </a>

                  <?php if($key['gallery_post_url'] == null): ?>
                  <?php else: ?>
                    <a href="<?php if($key['gallery_post_url'] == null){ echo "javascript:void(0)";}else{echo $key['gallery_post_url'];}  ?>" <?php if($key['gallery_post_url'] == null){ }else{echo "target='_blank'";}  ?> class="overlay-trigger-icon bg-light text-dark text-bold" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item">
                      <i class="uil uil-link"></i>
                    </a>
                  <?php endif; ?>

                  <a href="<?= base_url('page/download/'.$key['gallery_image']) ?>" target= "_blank" class="overlay-trigger-icon bg-light text-dark" title="<?= $key['gallery_title'] ?>" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="fas fa-download"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>

            <div class="portfolio-desc">
              <h3><a href="<?= base_url().'/'.$cate_slug.'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>" class="fw-bold"><?= $key['gallery_title'] ?></a></h3>


              
              <span>
                <i class="fa-solid fa-image"></i>
                <?php
                  $image_info = getimagesize(base_url('public/upload/tinymce/gallery_asset'.'/'.$key['gallery_image']));
                  $image_width = $image_info[0];
                  $image_height = $image_info[1];
                  echo $image_width.'x'.$image_height.' pixel';
                ?>
                <a href="<?= base_url('page/download/'.$key['gallery_image']) ?>" target= "_blank"><i class="fas fa-download"></i> download</a>
              </span>
            </div>
          </div>
        </article>
        <?php endforeach; ?>

        
      </div>
    </div>
  </div>
</section>

<?php else: ?>
    <div class="container mt-5">
      <p>Ảnh đang được cập nhật</p>
    </div>
<?php endif; ?>
      



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