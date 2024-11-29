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
</style>

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
/*          overflow: visible;*/
          z-index: 1000;
        }
      </style>
    <div class="container pt-lg-4">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <h3 class="display-6 mb-3 fw-medium text-uppercase">Bài Viết & SP Mới</h3>

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



    <div class="container my-6">
      <div class="row g-4 align-items-stretch">
        <?php if($most_view != null): ?>
          <?php foreach($most_view as $mv): ?>

            <div class="col-md-4">
              <div class="card text-center border-0" style="border: 1px solid black !important; border-radius: 20px; background: #25cfbb">
                <div class="card-body px-5 py-4 dark" style="background: url('<?= base_url('public/upload/tinymce/').'/'.$mv['post_image']; ?>') no-repeat center bottom / cover; min-height: 600px; border-radius: 20px; background-size: 100% auto">
                  <p class="text-uppercase small op-06 ls-1 mb-2">Popular Post</p>
                  <h3 class="mb-1 fs-3" style="color: black"><?= $mv['post_title']; ?></h3>
                  <p class="mb-4" style="color: black">
                    <i class="far fa-calendar-alt"></i>
                    <?php
                      $datetime = (new \CodeIgniter\I18n\Time);
                      $yearNow = $datetime::now()->getYear();
                      $yearMonthsNow = $datetime::now()->getMonth();
                      $yearPost = $datetime::parse($mv['updated_at'])->getYear();
                      
                      $yearMonthsPost = $datetime::parse($mv['updated_at'])->getMonth();
                      if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                        echo $datetime::parse($mv['updated_at'])->humanize();
                      }
                      if(($yearNow - $yearPost) > 1){
                        echo $datetime::parse($mv['updated_at'])->humanize();
                      }else{
                        echo $datetime::parse($mv['updated_at'])->toLocalizedString('dd MMM yyyy');
                      }
                      

                    ?>
                  </p>
                  <a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>" class="button button-small button-offset button-light bg-info text-dark rounded">View Now <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>

        <div class="clear"></div>
        
        <div class="col-12 ">
          <div class="card text-center border-0" style="background: #d3e9f2">
            <div class="card-body p-0 dark p-3">
              <img src="<?= base_url('public/upload/tinymce/').'/'.$featured[1]['post_image']; ?>" alt="<?= $featured[1]['post_intro'] ?>" style="border-radius: 20px;" />
              <div class="position-absolute top-0 pos-x-center mt-3 mt-lg-5">
                <h3 class="mb-1 fs-3 lead" style="color: blue; font-weight: bold;"><?= $featured[1]['post_title'] ?></h3>
                <p class="mb-3 d-none d-lg-block lead"><?= $featured[1]['post_intro'] ?></p>
                <a href="<?= base_url('').'/'.$featured[1]['cate_slug'].'/'.$featured[1]['post_slug'].'-'.$featured[1]['id'].'.html'; ?>" title="<?= $featured[1]['post_title'] ?>" class="button button-small button-offset button-light bg-white text-dark rounded d-none d-lg-inline-block">View Now <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="clear mb-5 mb-lg-6"></div>
      <div class="row g-3 justify-content-center text-center">
        <div class="col-md-3">
          <i class="fas fa-vector-square fa-2x"></i>
          <h3 class="fs-5 mb-3">Chính Xác Cao</h3>
          <p class="op-07">Sản Phẩm Gia Công Cơ Khí Với Độ Chính Xác Cao, Tỉ Mỉ</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <i class="fas fa-thumbs-up fa-2x"></i>
          <h3 class="fs-5 mb-3">Giá Cạnh Tranh</h3>
          <p class="op-07">Luôn có mức giá cạnh tranh nhất đối với sản phẩm được bán ra, và hậu mãi tốt.</p>
        </div>
      </div>

    </div>
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