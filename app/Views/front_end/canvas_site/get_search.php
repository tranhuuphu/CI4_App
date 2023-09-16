<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>



<div class="container">
  <section id="page-title" style="margin-bottom: 15px; margin-top: 30px; background-color: #FE9603;">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url().'/search?q='.$key ?>">Search Result Key: <?= $key ?></a></li>
      </ol>
    </div>
  </section>
</div>


<style type="text/css">
  form #q{
    background: #72bdf7 !important;
  }
</style>
<div class="container clearfix mt-5">
  <div class="row">
    <p>Tìm kiếm lại bằng công cụ Google</p>
    <form role="search" method="get" id="searchform" class="revtp-searchform" action="https://google.com/search">
      <input type="text" value name="q" id="q" placeholder="What are you looking for?" /><input type="submit" id="searchsubmit" value="Find" />
    </form>
  </div>
  <div class="row align-items-center mw-sm mx-auto g-0">

    <?php foreach($gallery_result as $key3): ?>
      <div class="col-12">
        <div class="feature-box fbox-effect fbox-xl">
          <div class="fbox-content">
            <h3 class="fw-bold"><?= $key3['gallery_title']; ?></h3>
            <p>
              <i class="fas fa-calendar-days"></i>
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

            </p>
            <p><?= $key3['post_intro']; ?></p>
            <a href="<?= base_url().'/'.$key3['gallery_cate_slug'].'/'.$key3['gallery_title_slug'].'-'.$key3['id'].'.html' ?>" title="<?= $key3['gallery_title']; ?>" class="more-link fst-normal mt-3 button button-large button-rounded m-0">Read More <i class="fa-duotone fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>


    <?php foreach($result as $key2): ?>
      <div class="col-12">
        <div class="feature-box fbox-effect fbox-xl">
          <div class="fbox-content">
            <h3 class="fw-bold"><?= $key2['post_title']; ?></h3>
            <p>
              <i class="fa-solid fa-calendar-days"></i>
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
              <i class="fas fa-clock"></i>
              <?php
                echo ceil(strlen($key2['post_content'])/700)
              ?>
              Minutes Read
            </p>
            <p><?= $key2['post_intro']; ?></p>
            <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class=" mt-3 button button-large button-rounded m-0">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="line my-5"></div>
    <?php endforeach; ?>
    
  </div>
</div>

	



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