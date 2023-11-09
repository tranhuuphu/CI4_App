<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 30px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
      <li class="breadcrumb-item active"><a href="<?= base_url().'/search?q='.$key ?>">Search result with Key: <span style="color: red;"><?= $key ?></span></a></li>
    </ol>
  </nav>
</div>




<style type="text/css">
  form #q{
    background: #72bdf7 !important;
    border:  #fefefe solid;
  }
</style>
<div class="container clearfix mt-5 mb-2">
  <div class="row">
    <div class="fancy-title title-border">
      <h3 class="mb-2 ls-1 text-uppercase fw-bold">Tìm kiếm lại bằng công cụ Google</h3>
    </div>



    
    <form role="search" method="get" id="searchform" class="revtp-searchform" action="https://google.com/search" target="_blank">
      <input type="text" name="q" id="q" placeholder="What are you looking for?" /><input type="submit" id="searchsubmit" value="Find" />
      <input type="hidden" name="sitesearch" value="<?= base_url('/'); ?>" />
    </form>
  </div>
  
  <?php if($result != null): ?>
    <hr>

    <div class="row align-items-center mw-sm mx-auto g-0 mt-5">

      <?php foreach($result as $key2): ?>
        <div class="col-12">
          <div class="feature-box fbox-effect fbox-xl">
            <div class="fbox-content">
              <h3 class="fw-bold"><a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h3>
              <p>
                <div class="entry-meta mb-4">
                  <ul>
                    <li>
                      <i class="fas fa-calendar-alt"></i>
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
                    </li>
                    <li>
                    <i class="fas fa-clock"></i>
                    <?php
                      echo ceil(strlen($key2['post_content'])/700)
                    ?>
                    Minutes Read
                    </li>
                    
                  </ul>
                </div>
              </p>

              <p style="margin-top: -20px !important"><?= $key2['post_intro']; ?></p>
              <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class=" mt-3 button button-large btn-info button-rounded m-0">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="line my-5"></div>
      <?php endforeach; ?>
      <?php if($post_count > $paginate): ?>
        <div class="row">
          <div class="col-md-12">
            <?= $pager->links("post") ?>
          </div>
        </div>
      <?php endif; ?>



      
    </div>
  <?php endif; ?>
</div>


<?php if($gallery_result != null): ?>
  <section id="content" class="mb-3">
    <div class="content-wrap">
      <div class="container">
        <hr>
        <div class="row justify-content-center gutter-50 col-mb-50 mt-5">
          <div class="col-xl-6 col-lg-8 text-center">
            <h3 class="h1 fw-bold mb-3">Danh sách Ảnh</h3>
          </div>
          <div class="clear"></div>





          <?php foreach($gallery_result as $key3): ?>
            <div class="entry event col-lg-4 col-md-4">
              <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
                <div class="entry-image">
                  <a href="<?= base_url().'/'.$key3['gallery_cate_slug'].'/'.$key3['gallery_title_slug'].'-'.$key3['id'].'.html' ?>" title="<?= $key3['gallery_title']; ?>">
                    <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$key3['gallery_image']) ?>" alt="<?= $key3['gallery_title'] ?>" />

                  </a>
                </div>
                <div class="entry-title title-sm">
                  <h2><a href="<?= base_url().'/'.$key3['gallery_cate_slug'].'/'.$key3['gallery_title_slug'].'-'.$key3['id'].'.html' ?>" title="<?= $key3['gallery_title']; ?>"><?= $key3['gallery_title']; ?></a></h2>
                </div>
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
                    <?php if($key3['gallery_file_download'] != null): ?>
                      <li>
                        <a href="<?= $key3['gallery_file_download'] ?>" target= "_blank"><i class="fas fa-file-download"></i> File</a>
                      </li>
                    <?php endif; ?>
                  </ul>
                </div>
                <div class="entry-content" style="margin-top: 10px">
                  <a href="<?= base_url().'/'.$key3['gallery_cate_slug'].'/'.$key3['gallery_title_slug'].'-'.$key3['id'].'.html' ?>" title="<?= $key3['gallery_title']; ?>" class="btn btn-outline-secondary">Read More</a>
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