<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 40px;">
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
            <div class="col-lg-4 col-xl-6 portfolio-single-image" data-lightbox="gallery">

              <a href="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']) ?>" class="col-lg-12 col-md-6" data-lightbox="gallery-item">
                <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']) ?>" alt="<?= $gallery_img['gallery_title'] ?>" class="rounded-6" />
              </a>


              
            </div>

            <div class="col-lg-8 col-xl-6 portfolio-single-content px-5 ps-xl-5 pt-xl-4" style="margin-top: 20px">
              <h2 class="fs-3 fw-bold"><?= $gallery_img['gallery_title'] ?></h2>
              <hr>
              <?php if($gallery_img['gallery_file_download'] != null): ?>
              <div class="card">
                <div class="card-body text-dark">
                  <span>Thank for downloading file and visiting my site!</span>
                  <br>
                  <span>If you have any question, please contact to me.</span>
                  <br>
                  <span>Cám ơn đã tải file và ghé thăm website!</span>
                </div>
              </div>
              <?php endif; ?>
              <div class="row g-4 mt-4 mb-6">
                <div class="col-6">
                  <h5 class="mb-2 text-primary">Phân Loại</h5>
                  <a href="<?= base_url('bo-suu-tap-topic').'/'.$gallery_img['gallery_type_slug'] ?>"><p class="text-medium text-bold op-08 mb-0"><?= $gallery_img['gallery_type_name'] ?></p></a>
                </div>
                
                <div class="col-6">
                  <h5 class="mb-2 text-primary">Completed on</h5>
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

                <?php if($gallery_img['gallery_topic'] != null || $gallery_img['gallery_topic'] != ""): ?>
                  <div class="col-6">
                    <h5 class="mb-2 text-primary">Phân Loại Chi Tiết</h5>
                    <a href="<?= base_url('bo-suu-tap-topic').'/'.$gallery_img['gallery_topic_slug'] ?>"><p class="text-medium op-08 mb-0"><?= $gallery_img['gallery_topic'] ?></p></a>
                  </div>
                <?php endif; ?>
                
                <?php if($gallery_img['gallery_file_download'] == null): ?>
                  
                  <div class="col-6">
                    <h5 class="mb-2 text-primary">Demension</h5>
                    <p class="text-medium op-08 mb-0">
                      <?php
                        if(file_exists('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']) != null){
                          $image_info = getimagesize('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']);
                          $image_width = $image_info[0];
                          $image_height = $image_info[1];
                          echo "<i class='fas fa-ruler-vertical'></i> ".' '.$image_width.'x'.$image_height.' pixel';
                        }
                      ?>
                      <br>
                      <?php
                        if(file_exists('public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image']) != null){
                          $img = 'public/upload/tinymce/gallery_asset'.'/'.$gallery_img['gallery_image'];
                          $fp = fopen($img, "rb");
                          echo "<i class='fas fa-hdd'></i> ".ceil(filesize($img)/1024)."Kb";
                        }
                      ?>

                    </p>
                  </div>
                <?php endif; ?>

                <?php if($gallery_img['gallery_file_download'] == null): ?>
                  <div class="col-6">
                    <h5 class="mb-2 text-primary">Save image</h5>
                    <p class="text-medium op-082 mb-0">
                      <a href="<?= base_url('page/download/'.$gallery_img['gallery_image']) ?>" class=" btn btn-danger">Save Now  &#160;<i class="fas fa-save"></i></a>
                    </p>
                  </div>
                <?php endif; ?>
                <?php if($gallery_img['gallery_file_download'] != null): ?>
                  <div class="col-6">
                    <h5 class="mb-2 text-danger">Download Premium File</h5>
                    <p class="text-medium text-white op-082 mb-0">
                      <a href="http://ouo.io/qs/iVlhUpN8?s=<?= $gallery_img['gallery_file_download'] ?>" target= "_blank" class= "btn btn-success">Download Now <i class="fab fa-google-drive"></i></a>
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

      <?php if($same_topic != null): ?>
        <div class="fancy-title title-border mt-5">
          <h3 class="mb-2 ls-1 text-uppercase fw-bold" style="color: #395dfa">Ảnh Cùng Chủ Đề</h3>
        </div>


        <style>
          .block-expand-categories h1,
          .block-expand-categories h2,
          .block-expand-categories h3 {
            font-family: Playfair Display, serif !important;
          }

          .block-expand-categories .expand-category {
            --height: 50vh;
            --responsive-height: 60px;
            --hover-flex: 10;

            position: relative;
            background-position: center center;
            background-size: cover;
            border-radius: 20px;
            margin: 10px 0;
            min-height: var(--responsive-height);
            cursor: pointer;
          }

          .block-expand-categories .expand-category h4 {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            text-align: center;
            margin: 0;
            transform: translateY(-50%);
          }

          /* Larger Device */
          @media (min-width: 992px) {
            .block-expand-categories .expand-category {
              height: var(--height);
              flex: 1;
              margin: 0 10px;
              transition: flex 1s ease;
              -webkit-backface-visibility: hidden;
              transform: translate3d(0, 0, 0);
            }

            .block-expand-categories:not(.on-click) .expand-category:hover,
            .block-expand-categories.on-click .expand-category.active {
              flex: var(--hover-flex);
            }

            .block-expand-categories .expand-category h4 {
              opacity: 1;
              top: auto;
              bottom: 10px;
              transform: none;
              transition: opacity 0.4s ease;
              text-shadow: 1px 0 #fff, -1px 0 #fff, 0 1px #fff, 0 -1px #fff,
               1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
            }

            .block-expand-categories:hover .expand-category:not(.active):not(:hover) h4,
            .block-expand-categories.on-click .expand-category:not(.active) h4 {
              opacity: 0;
            }
          }
        </style>  

        <div class="content-wrap" style="margin-top: 20px 0px 30px 0px !important; background-color: #c8dbfa;">
          <div class="container">
            <h2 class="text-center">Click to Expand Image</h2>
            <div class="block-expand-categories flex-column flex-lg-row d-flex justify-content-center on-click">
              <?php foreach($same_topic as $s_t): ?>
                <div class="expand-category bg-light" style="background-image: url('<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$s_t['gallery_image']) ?>');">
                  <h4><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$s_t['gallery_title_slug'].'-'.$s_t['id'].'.html' ?>" title="<?= $s_t['gallery_title'] ?>" class="text-light"><?= $s_t['gallery_title'] ?></a></h4>
                </div>
              <?php endforeach; ?>


            </div>
          </div>
        </div>
      <?php endif; ?>


          



      <div class="fancy-title title-border mt-5">
        <h3 class="mb-2 ls-1 text-uppercase fw-bold" style="color: #1362ff">Ảnh Liên Quan</h3>
      </div>

      <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

        <?php foreach($related as $r1): ?>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="javascript:void(0)">
                <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']) ?>" alt="<?= $r1['gallery_title'] ?>"/>
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                  <a href="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']) ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image">
                    <i class="fas fa-expand-alt"></i>
                  </a>
                  <a href="<?= base_url('page/download/'.$r1['gallery_image']) ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350">
                    <i class="fas fa-download"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$r1['gallery_title_slug'].'-'.$r1['id'].'.html' ?>" title="<?= $r1['gallery_title'] ?>" class="fw-bold"><?= $r1['gallery_title'] ?></a></h3>

              <span>


                <?php if($r1['gallery_file_download'] == null)
                  if(file_exists('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']) != null){
                    $image_info = getimagesize('public/upload/tinymce/gallery_asset'.'/'.$r1['gallery_image']);
                    $image_width =$image_info[0];
                    $image_height = $image_info[1];
                    echo $image_width.'x'.$image_height.' (pixel)&nbsp;';
                  }
                ?>

                <?php if($r1['gallery_file_download'] == null): ?>
                  <a href="<?= base_url('page/download/'.$r1['gallery_image']) ?>" class="ml-5"><i class="fas fa-save"></i> save</a>
                <?php endif; ?>
                
                <?php if($r1['gallery_file_download'] != null): ?>
                  <a href="<?= $r1['gallery_file_download'] ?>" target="_blank"><i class="fas fa-download"></i>&nbsp;<i class="fab fa-google-drive"></i> download file</a>
                <?php endif; ?>
                
                

              </span>


            </div>
          </div>
        </div>
        <?php endforeach; ?>

        

        
      </div>



      <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

        

        



        
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
      $(document).ready(function () {
        jQuery(".block-expand-categories")
          .find(".expand-category")
          .on("click", function () {
            let category = $(this);

            category.siblings().removeClass("active");
            category.addClass("active");
          });
      });
      $(".block-expand-categories .expand-category").first().addClass('active');
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

