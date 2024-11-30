<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 60px; background-color: #b3e2fe; padding: 30px 15px 7px 15px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
      <li class="breadcrumb-item active"><a href="<?= base_url().'/search?q='.$key ?>">Search result with Key: <span style="color: red;"><?= $key ?></span></a></li>
    </ol>
  </nav>
</div>




<style type="text/css">
  form #q{
    background: #f2efe6 !important;
    border:  #fefefe solid;
  }

</style>
<div class="container clearfix mt-5 mb-2">
  <div class="row">
    <div class="fancy-title title-border">
      <h3 class="mb-2 ls-1 text-uppercase fw-bold">Tìm kiếm lại bằng công cụ Google Search</h3>
    </div>

    <style type="text/css">
      .form-control-borderless {
          border: none;
      }

      .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
          border: none;
          outline: none;
          box-shadow: none;
      }
    </style>
    
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-12">
        <form class="card card-sm" role="search" method="get" id="searchform" action="https://google.com/search" target="_blank">
          <div class="card-body row no-gutters align-items-center">
            <div class="col-auto">
                <i class="fab fa-google fa-2x text-body"></i>
            </div>
            <!--end of col-->
            <div class="col">
                <input type="text" name="q" class="form-control form-control-lg form-control-borderless" id="q" placeholder="What are you looking for with google search?" />
            </div>
            <!--end of col-->
            <div class="col-auto">
                <button class="btn btn-lg btn-primary" type="submit"> <i class="fas fa-search"></i></button>
                <input type="hidden" name="sitesearch" value="<?= base_url('/'); ?>" />
            </div>
            <!--end of col-->
          </div>
        </form>
      </div>
      <!--end of col-->
    </div>
    



  </div>
</div>

<style type="text/css">
  .col-lg-12{
    padding-top: 10px !important; margin-top: 10xp !important;
  }
</style>
<?php if(count($result)>0): ?>
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="row justify-content-center gutter-10 col-mb-">

          
          </div>
          <?php foreach($result as $key2): ?>
            <div class="col-lg-12" style="padding-top: 10px !important; margin-top: 20px !important;">
              <div class="card border-default bg-light h-shadow-sm shadow-ts">
                <div class="row g-0 align-items-center">
                  <div class="col-md-3 d-flex align-self-stretch overflow-hidden">
                    <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>" class="rounded-start"/>
                  </div>
                  <div class="col-md-9 p-2">
                    <div class="card-body">
                      <h3 class="card-title"><a href=""><?= $key2['post_title']; ?></a></h3>
                      <p class="card-text mb-2"><?= $key2['post_intro']; ?></p>
                      <p class="card-text">
                        <small class="text-muted">
                          <i class="far fa-calendar-alt"></i>
                          <?php
                            $datetime = (new \CodeIgniter\I18n\Time);
                            $yearNow = $datetime::now()->getYear();
                            $yearMonthsNow = $datetime::now()->getMonth();
                            $yearPost = $datetime::parse($key2['updated_at'])->getYear();
                            
                            $yearMonthsPost = $datetime::parse($key2['updated_at'])->getMonth();
                            if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                              echo $datetime::parse($key2['updated_at'])->humanize();
                            }
                            if(($yearNow - $yearPost) > 1){
                              echo $datetime::parse($key2['updated_at'])->humanize();
                            }else{
                              echo $datetime::parse($key2['updated_at'])->toLocalizedString('dd MMM yyyy');
                            }
                            

                          ?>
                          <i class="fas fa-solid fa-clock"></i>
                          <?= ceil(strlen($key2['post_content'])/700) ?> Minutes Read
                        </small>
                      </p>
                      <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="btn btn-danger">Read More <i class="icon-line-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>


        </div>
      </div>
    </div>
  </section>
<?php endif; ?>




<?php if($gallery_result != null): ?>
  <section id="content" class="mb-3">
    <div class="content-wrap">
      <div class="container">
        <hr>
        <div class="col-xl-12 col-lg-12 text-center mb-5">
          <h3 class="h1 fw-bold mb-3">Danh sách Ảnh</h3>
        </div>


        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach($gallery_result as $key3): ?>
          <div class="col">
            <div class="card h-100 shadow-sm h-shadow all-ts h-translatey-sm">
              <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$key3['gallery_image']) ?>" alt="<?= $key3['gallery_title'] ?>" class="card-img-top">
              <div class="card-body">
                <div class="entry-meta">
                  <ul>
                    <li>
                      <i class="fas fa-calendar-alt"></i>
                      <?php
                        $datetime = (new \CodeIgniter\I18n\Time);
                        $yearNow = $datetime::now()->getYear();
                        $yearMonthsNow = $datetime::now()->getMonth();
                        $yearPost = $datetime::parse($key3['updated_at'])->getYear();
                        
                        $yearMonthsPost = $datetime::parse($key3['updated_at'])->getMonth();
                        if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                          echo $datetime::parse($key3['updated_at'])->humanize();
                        }
                        if(($yearNow - $yearPost) > 1){
                          echo $datetime::parse($key3['updated_at'])->humanize();
                        }else{
                          echo $datetime::parse($key3['updated_at'])->toLocalizedString('dd MMM yyyy');
                        }
                        

                      ?>
                    </li>
                    <li>
                      <i class="fas fa-atom"></i> <?= $key3['gallery_type_name']; ?>
                    </li>
                    <li>
                      <a href="<?= base_url('page/download/'.$key3['gallery_image']) ?>"><i class="fas fa-download"></i> Image</a>
                    </li>
                    <?php if($key3['gallery_link_file_origin'] != null): ?>
                      <li>
                        <a href="<?= $key3['gallery_link_file_origin'] ?>" target= "_blank"><i class="fas fa-file-download"></i> File</a>
                      </li>
                    <?php endif; ?>
                  </ul>
                </div>

                <div class="entry-title title-sm">
                  <h2><a href="<?= base_url().'/'.$key3['gallery_cate_slug'].'/'.$key3['gallery_title_slug'].'-'.$key3['id'].'.html' ?>" title="<?= $key3['gallery_title']; ?>"><?= $key3['gallery_title'] ?></a></h2>
                </div>
                
              </div>

              <div class="card-footer">
                <div class="entry-content" style="margin-top: 0px">
                  <a href="<?= base_url().'/'.$key3['gallery_cate_slug'].'/'.$key3['gallery_title_slug'].'-'.$key3['id'].'.html' ?>" title="<?= $key3['gallery_title']; ?>" class="btn btn-light btn-outline-secondary rounded-1">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>

            </div>
          </div>

          <?php endforeach; ?>
          <?php if($gallery_count > $paginate): ?>
            <?= $pager->links("gallery") ?>
          <?php endif; ?>


        </div>

      </div>
    </div>
  </section>

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