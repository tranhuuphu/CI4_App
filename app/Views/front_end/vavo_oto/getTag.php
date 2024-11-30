<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>



<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 60px; background-color: #40edd3    ; padding: 30px 15px 7px 15px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url().'/tag/'.$tag_slug ?>">Tag Result: <?= $tag_name ?></a></li>
    </ol>
  </nav>
</div>


<?php if(count($post_tag)>0): ?>
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="row justify-content-center gutter-50 col-mb-50">
          <?php foreach($post_tag as $key2): ?>
            <div class="col-lg-12">
              <div class="card imagescalein">
                <div class="row g-0 align-items-center">
                  <div class="col-md-4 d-flex align-self-stretch overflow-hidden">
                    <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>" class="rounded-start"/>
                  </div>
                  <div class="col-md-8 p-2">
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
                      <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="btn btn-primary">Read More <i class="icon-line-arrow-right"></i></a>
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