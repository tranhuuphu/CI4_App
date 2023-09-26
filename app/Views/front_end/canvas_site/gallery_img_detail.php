<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 30px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'-'.$cate_detail['id'] ?>" class="fw-bold"><?= $cate_detail['cate_name'] ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $gallery_img['gallery_title'] ?></li>
    </ol>
  </nav>
</div>




<section id="content">
  <div class="content-wrap">
    <div class="container">

      <div class="card mb-5" style="background-color: #f2fafc; border-radius: 0;">
        <div class="card-body">
        
          <div class="row g-5 py-md-2">
            <div class="col-lg-4 col-xl-6 portfolio-single-image">
              <a href="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']) ?>" target="_blank">
                <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']) ?>" alt="<?= $gallery_img['gallery_title'] ?>" class="rounded-6" />
              </a>
            </div>

            <div class="col-lg-8 col-xl-6 portfolio-single-content px-5 ps-xl-5 pt-xl-4">
              <h2 class="fs-3 fw-bold"><?= $gallery_img['gallery_title'] ?></h2>
              <hr>
              

              <div class="row g-4 mt-4 mb-6">
                <div class="col-6">
                  <h5 class="mb-2">Phân Loại</h5>
                  <p class="text-medium op-08 mb-0"><?= $gallery_img['gallery_type_name'] ?></p>
                </div>
                <div class="col-6">
                  <h5 class="mb-2">Completed on</h5>
                  <p class="text-medium op-08 mb-0">
                    <?php
                      $datetime = (new \CodeIgniter\I18n\Time);
                      $yearNow = $datetime::now()->getYear();
                      $yearMonthsNow = $datetime::now()->getMonth();
                      $yearPost = $datetime::parse($gallery_img['updated_at'])->getYear();
                      
                      $yearMonthsPost = $datetime::parse($gallery_img['updated_at'])->getMonth();
                      if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                        echo $datetime::parse($gallery_img['updated_at'])->humanize();
                      }
                      if(($yearNow - $yearPost) > 1){
                        echo $datetime::parse($gallery_img['updated_at'])->humanize();
                      }else{
                        echo $datetime::parse($gallery_img['updated_at'])->toLocalizedString('dd MMM yyyy');
                      }
                      

                    ?>
                  </p>
                </div>

                <div class="col-6">
                  <h5 class="mb-2">Demension</h5>
                  <p class="text-medium op-08 mb-0">
                    <?php
                      $image_info = getimagesize(base_url('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']));
                      $image_width = $image_info[0];
                      $image_height = $image_info[1];
                      echo "<i class='fas fa-ruler-vertical'></i> ".' '.$image_width.'x'.$image_height.' pixel';
                    ?>
                    <hr>
                    <?php

                      $img = 'public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image'];
                      $fp = fopen($img, "rb");
                      echo "<i class='fas fa-hdd'></i> ".ceil(filesize($img)/1024)."Kb";
                    ?>

                  </p>
                </div>

                <div class="col-6">
                  <h5 class="mb-2">Download Image</h5>
                  <p class="text-medium op-082 mb-0">
                    <a href="<?= base_url('page/download/'.$gallery_img['gallery_image']) ?>"><i class="fas fa-download"></i></a>
                  </p>
                </div>
                <?php if($gallery_img['gallery_file_download'] != null): ?>
                  <div class="col-6">
                    <h5 class="mb-2">Download File</h5>
                    <p class="text-medium text-white op-082 mb-0">
                      <a href="<?= $gallery_img['gallery_file_download'] ?>" target= "_blank" class= "btn btn-success">Download <i class="fab fa-google-drive"></i></a>
                    </p>
                  </div>
                <?php endif; ?>
                
              </div>
              <?php if($gallery_img['gallery_post_url'] != null): ?>
                <a href="<?= $gallery_img['gallery_post_url'] ?>" target="_blank" class="text-medium">Bài liên quan tới ảnh <i class="bi-arrow-up-right-circle-fill ms-1 align-middle fs-5 position-relative" style="top: -2px;"></i></a>
              <?php endif; ?>

              <div class="card mt-6 border-0 p-3 border-top rounded-5 border-default">
                <div class="card-body p-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                    <div class="d-flex">
                      <a href="https://pinterest.com/pin/create/button/?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce/gallery_asset').'/'.$gallery_img['gallery_image'] ?>&description=<?= $gallery_img['gallery_title']; ?>" title="share pinterest: <?= $gallery_img['gallery_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-pinterest-p"></i>
                      </a>
                      <a href="http://www.facebook.com/sharer/sharer.php?u=<?= $link_full ?>&text=<?= $gallery_img['gallery_title']; ?>" target="_blank" title="share facebook: <?= $gallery_img['gallery_title']; ?>" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="https://twitter.com/intent/tweet?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce/gallery_asset').'/'.$gallery_img['gallery_image'] ?>&description=<?= $gallery_img['gallery_title']; ?>" title="share twitter: <?= $gallery_img['gallery_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="http://www.tumblr.com/share?v=3&u=<?= $link_full ?>&t=<?= $gallery_img['gallery_title']; ?>" title="share tumblr: <?= $gallery_img['gallery_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-tumblr">
                        <i class="fab fa-tumblr"></i>
                        <i class="fab fa-tumblr"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
          

      <!-- <div class="row justify-content-between py-4 mt-4 mb-6 mx-0 gx-0 border-top border-bottom border-default">
        <div class="col">
          <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><i class="uil uil-angle-left-b fs-3 me-1"></i><span>Previous Project</span></a>
        </div>
        <div class="col text-center">
          <a href="javascript:void(0)" class="d-inline-flex align-items-center text-dark h-text-color"><i class="bi-grid fs-3"></i></a>
        </div>
        <div class="col text-end">
          <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><span>Next Project</span><i class="uil uil-angle-right-b fs-3 ms-1"></i></a>
        </div>
      </div> -->

      <div class="fancy-title title-border">
        <h3 class="mb-2 ls-1 text-uppercase fw-bold">Ảnh Liên Quan</h3>
      </div>
      <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

        

        <!-- <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                  <a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image">
                    <i class="uil uil-plus"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
              <span><a href="#">Illustrations</a></span>
            </div>
          </div>
        </div> -->

        
        <?php foreach($related_1 as $r1): ?>
          <div class="oc-item">
            <div class="portfolio-item">
              <div class="portfolio-image">
                <a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r1['gallery_title_slug'].'-'.$r1['id'].'.html' ?>" title="<?= $r1['gallery_title'] ?>">
                  <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']) ?>" alt="<?= $r1['gallery_title'] ?>" />
                </a>
                <div class="bg-overlay" data-lightbox="gallery">
                  <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']) ?>" alt="<?= $r1['gallery_title'] ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                      <i class="fas fa-image"></i>
                    </a>
                    <a src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']) ?>" alt="<?= $r1['gallery_title'] ?>" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r1['gallery_title_slug'].'-'.$r1['id'].'.html' ?>" title="<?= $r1['gallery_title'] ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                      <i class="fas fa-ellipsis-h"></i>
                    </a>
                  </div>
                  <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
              </div>
              <div class="portfolio-desc">
                <h3><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r1['gallery_title_slug'].'-'.$r1['id'].'.html' ?>" title="<?= $r1['gallery_title'] ?>" class="fw-bold"><?= $r1['gallery_title'] ?></a></h3>
                
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <?php foreach($related_2 as $r2): ?>
          <div class="oc-item">
            <div class="portfolio-item">
              <div class="portfolio-image">
                <a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r2['gallery_title_slug'].'-'.$r2['id'].'.html' ?>" title="<?= $r2['gallery_title'] ?>">
                  <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r2['gallery_image']) ?>" alt="<?= $r2['gallery_title'] ?>" />
                </a>
                <div class="bg-overlay" data-lightbox="gallery">
                  <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r2['gallery_image']) ?>" alt="<?= $r2['gallery_title'] ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                      <i class="uil uil-images"></i>
                    </a>
                    <a src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r2['gallery_image']) ?>" alt="<?= $r2['gallery_title'] ?>" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r2['gallery_title_slug'].'-'.$r2['id'].'.html' ?>" title="<?= $r2['gallery_title'] ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                      <i class="uil uil-ellipsis-h"></i>
                    </a>
                  </div>
                  <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
              </div>
              <div class="portfolio-desc">
                <h3><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r2['gallery_title_slug'].'-'.$r2['id'].'.html' ?>" title="<?= $r2['gallery_title'] ?>"><?= $r2['gallery_title'] ?></a></h3>
                
              </div>
            </div>
          </div>
        <?php endforeach; ?>


        
      </div>
    </div>
  </div>
</section>

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
  <meta name="twitter:image" content="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$image ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:url" content="<?= base_url() ?>" />
  <meta property="og:image" content="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$image ?>" />
  <meta property="og:description" content="<?= $meta_desc ?>" />
  <meta property="og:locale" content="vi_VN" />
  
  <meta name="thumbnail" content="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$image ?>" />
  <meta property="og:image:secure_url" content="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$image ?>" />

  


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $created_at ?>" itemprop="dateCreated"/>

  
<?= $this->endSection(); ?>

