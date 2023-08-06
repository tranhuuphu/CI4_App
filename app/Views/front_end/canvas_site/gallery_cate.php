<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>


<div class="container">



  <section id="page-title" style="margin-bottom: 15px">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
      </ol>
    </div>
  </section>
</div>

<?php if(count($post_cate) > 0): ?>
  <div class="container mt-5">

    <section id="content">
      <div class="content-wrap py-0">
        <div id="portfolio" class="portfolio row grid-container portfolio-reveal g-0" data-layout="fitRows">
          <?php foreach($post_cate as $key): ?>
          <article class="portfolio-item col-12 col-sm-6 col-md-3 pf-media pf-icons">
            <div class="grid-inner">
              <div class="portfolio-image">
                <a href="<?= $key['gallery_post_url'] ?>">
                  <img src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" alt="<?= $key['gallery_title'] ?>" />
                </a>

                <div class="bg-overlay">
                  <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                    
                      <a
                        href="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>"
                        class="overlay-trigger-icon bg-light text-dark text-bold fw-bold fs-4"
                        data-hover-animate="fadeInDownSmall"
                        data-hover-animate-out="fadeOutUpSmall"
                        data-hover-speed="350"
                        data-hover-parent=".portfolio-item"
                        data-lightbox="image"
                        title="<?= $key['gallery_title'] ?>"
                      >
                        <i class="uil uil-expand-alt"></i>
                      </a>
                    <?php if($key['gallery_post_url'] == null): ?>
                    <?php else: ?>
                      <a href="<?php if($key['gallery_post_url'] == null){ echo "javascript:void(0)";}else{echo $key['gallery_post_url'];}  ?>" <?php if($key['gallery_post_url'] == null){ }else{echo "target='_blank'";}  ?> class="overlay-trigger-icon bg-light text-dark text-bold" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item">
                        <i class="uil uil-link"></i>
                      </a>
                    <?php endif; ?>
                    <a class="overlay-trigger-icon bg-light text-dark text-bold" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" href="<?= base_url('page/download/'.$key['gallery_image']) ?>" target= "_blank"><i class="fas fa-download"></i></a>

                  </div>
                  <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                </div>
              </div>

              <div class="portfolio-desc">
                <h3><a href="<?php if($key['gallery_post_url'] == null){ echo "javascript:void(0)";}else{echo $key['gallery_post_url'];}  ?>" <?php if($key['gallery_post_url'] == null){ }else{echo "target='_blank'";}  ?> ><?= $key['gallery_title'] ?></a></h3>
                <span>
                  <a href="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" target="_blank"><i class="fas fa-images"></i></a>



                  <a href="<?= base_url('page/download/'.$key['gallery_image']) ?>" target= "_blank"><i class="fas fa-download"></i> download</a>
                </span>
              </div>
            </div>
          </article>
          <?php endforeach; ?>

          
        </div>
        
      </div>
    </section>

  </div>
<?php else: ?>
  	<div class="container mt-5">
      <p>Chưa có ảnh nào trong bộ sưu tập</p>
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