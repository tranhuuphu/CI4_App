<?= $this->extend('front_end/maymocnganhduc_site/layout_maymoc'); ?>

<?= $this->section('content'); ?>

<style>
    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    swiper-container {
      margin-left: auto;
      margin-right: auto;
      margin-top: 50px;
    }
  </style>


<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false" loop="true">
  <?php foreach($carousel_all as $ca): ?>
    <swiper-slide>
      <img src="<?= base_url('public/upload/tinymce/carousel_asset/').'/'.$ca['carousel_image']; ?>" alt="<?= $ca['carousel_title'] ?>">
    </swiper-slide>
  <?php endforeach; ?>
</swiper-container>


<style type="text/css">
  .contour-text h1, .lead {
      /* 1 pixel black shadow to left, top, right and bottom */
      text-shadow: -2px 0 white, 0 1px white, 2px 0 white, 0 -1px white;

      font-family: sans; color: black;
  }
  a{
    color: black;
  }
  a:hover{
    color: blue;
  }
</style>


<!-- Content
============================================= -->
<section id="content">
  <div class="content-wrap">
    <div class="container">

      <div class="row gx-5 col-mb-80">
        <!-- Post Content
        ============================================= -->
        <main class="postcontent col-lg-9 order-lg-last">
          <div class="card mb-3" style="background-color: #ffce1b; border-radius: 0px;">
            <div class="card-body text-bold" style="font-weight: bold; color: #000; font-size: 18px;">
              Nổi Bật
            </div>
          </div>

          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php if($most_view != null): ?>
              <?php foreach($most_view as $mv): ?>

                <div class="col">
                  <div class="card h-100 shadow">
                    <img src="<?= base_url('public/upload/tinymce/').'/'.$mv['post_image']; ?>" class="card-img-top" alt="<?= $mv['post_title']; ?>">
                    <div class="card-body">
                      <h5 class="card-title"><a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>"><?= $mv['post_title']; ?></a></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>


          
            


          </div>

        </main><!-- .postcontent end -->

        <!-- Sidebar
        ============================================= -->
        <aside class="sidebar col-lg-3">
          <div class="sidebar-widgets-wrap">

            <div class="widget widget_links">
              <h4 style="color: #ffce1b;">Danh Mục Sản Phẩm</h4>
              <?php foreach($cate as $c3): ?>
                <?php $c_t[] = $c3['cate_parent_id']; ?>
              <?php endforeach; ?>
              <ul>
                <?php foreach($cate as $c): ?>
                  <?php if($c['cate_parent_id'] == 0): ?>
                    
                      
                      <?php if(in_array($c['id'], $c_t)): ?>
                          <?php foreach($cate as $c2): ?>
                            <?php if($c2['cate_parent_id'] == $c['id']): ?>
                              
                                <li><a href="<?= base_url('').'/'.$c2['cate_slug'].'-'.$c2['id']; ?>" title="<?= $c2['cate_name']; ?>"><?= $c2['cate_name']; ?></a></li>
                              
                            <?php endif; ?>
                          <?php endforeach; ?>
                        
                      <?php endif; ?>

                    
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>

            </div>


          </div>
        </aside><!-- .sidebar end -->
      </div>

    </div>
  </div>
</section><!-- #content end -->
<section class="slider-element bg-contrast- include-header bg-info mt-5" style="margin-top: 200px;">
  <img src="<?= base_url('public/upload/tinymce/').'/'.$featured[0]['post_image']; ?>" alt="<?= $featured[0]['post_title'] ?>" class="object-fit-cover min-vh-75 w-100 h-100" />
  <div class="position-absolute z-2 w-100 h-100 top-0 contour-text">
    <div class="text-center mt-lg-6 pt-5 pt-lg-6">
      <h1 class="display-4 mb-3 fw-medium text-uppercase" style="letter-spacing: -2px;"><?= $featured[0]['post_title'] ?></h1>
      <p class="lead">
        <?= $featured[0]['post_intro'] ?>
      </p>
      <a href="<?= base_url('').'/'.$featured[0]['cate_slug'].'/'.$featured[0]['post_slug'].'-'.$featured[0]['id'].'.html'; ?>" class="button color button-border border-color h-text-light border-width-2 button-large button-offset rounded">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
  </div>
</section>


<section id="content">
  <div class="content-wrap">

      <style> 
        .tab-title {
          white-space: nowrap; 
          width: 100px; 
          overflow: hidden;
          text-overflow: ellipsis;
        }

        .tab-title:hover {
          z-index: 1000;
        }
      </style>
    <div class="container pt-lg-4">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <h3 class="display-6 mb-3 fw-medium text-uppercase">Bài Viết & SP Mới 2</h3>

          <ul class="nav nav-tabs nav-fill" id="demo-drone-tab" role="tablist">
            <?php $i = 1; ?>
            <?php foreach($recent_post as $pr): ?>
              <?php foreach($cate_2 as $ct): ?>
                <?php if($pr['post_cate_id'] == $ct['id']): ?>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link <?php if($i == 1){echo 'active';} ?>" id="canvas-tab-<?= $i ?>" data-bs-toggle="pill" data-bs-target="#tab-<?= $i ?>" type="button" role="tab" aria-controls="canvas-home" aria-selected="true">
                      <img src="<?= base_url('public/upload/tinymce/').'/'.$pr['post_image']; ?>" alt="<?= $pr['post_title']; ?>" height="70" />
                      <div class="my-4 small tab-title"><?= $pr['post_title']; ?></div>
                    </button>
                  </li>
                  
                <?php endif; ?>
              <?php endforeach; ?>
              <?php $i += 1; ?>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
          

    <div class="bg-contrast-300 py-5 py-lg-6">
      <div class="container">
        <div class="tab-content">

          <?php $n = 1; ?>
            <?php foreach($recent_post as $pr): ?>
              <?php foreach($cate_2 as $ct): ?>
                <?php if($pr['post_cate_id'] == $ct['id']): ?>
                  <div class="tab-pane show <?php if($n == 1){echo 'active';} ?>" role="tabpanel" aria-labelledby="tab-<?= $n ?>-justify-tab" tabindex="0" id="tab-<?= $n ?>">
                    <div class="row justify-content-center align-items-center">
                      <div class="row justify-content-center align-items-center">
                      <div class="col-md-5">
                        <h2><?= $pr['post_title']; ?></h2>
                        <p><?= $pr['post_intro']; ?></p>
                        <a href="<?= base_url('').'/'.$pr['post_cate_slug'].'/'.$pr['post_slug'].'-'.$pr['id'].'.html'; ?>" title="<?= $pr['post_title']; ?>" class="button button-success button-offset rounded">Chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                      </div>
                      <div class="col-md-5">
                        <img src="<?= base_url('public/upload/tinymce/').'/'.$pr['post_image']; ?>" alt="<?= $pr['post_title']; ?>"/>
                      </div>
                    </div>
                    </div>
                  </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php $n += 1; ?>
            <?php endforeach; ?>


        </div>
      </div>
    </div>
    <div class="clear"></div>


    <div class="clear"></div>

    <div class="section mt-3 footer-stick dark py-4" style="margin-bottom: -80px !important">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 d-flex align-items-center">
            <i class="me-3 fs-4 bi-globe"></i>
            <span>Giao Hàng Nhanh</span>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-lg-center">
            <i class="me-3 fs-4 bi-clock"></i>
            <span>Sản Phẩm Có Sẵn</span>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-lg-end">
            <i class="me-3 fs-4 bi-truck"></i>
            <span>Hỗ Trợ 24/7</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
	




	









	


<?= $this->endSection(); ?>

<?= $this->section('link_css'); ?>




<?= $this->endSection(); ?>


<?= $this->section('script'); ?>
	
	 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
	
   <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
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