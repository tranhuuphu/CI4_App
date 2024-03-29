<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 40px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url().'/'.$cate_gallery['cate_slug'].'-'.$cate_gallery['id'] ?>" class="fw-bold"><?= $cate_gallery['cate_name'] ?></a></li>
      <?php if($id_child == null || $id_child == ""): ?>
        <li class="breadcrumb-item"><a href="<?= base_url().'/'.'bo-suu-tap-topic'.'/'.$gallery_name['gallery_type_slug'] ?>" class="fw-bold"><?= $gallery_name['gallery_type_name'] ?></a></li>
      <?php endif; ?>
      <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;"><?= $gallery_title ?></li>
    </ol>
  </nav>
</div>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <?php if($id_child != null || $id_child != ""): ?>
      <div class="grid-filter-wrap mt-4">
        <ul class="grid-filter" data-container="#">
          
            <li class="activeFilter"><a href="javascript:void(0)" style="text-transform: capitalize; font-weight: bold;"><?= $gallery_name['gallery_type_name'] ?></a></li>
            <?php foreach($id_child  as $child): ?>
              <li><a href="<?= base_url().'/'.'bo-suu-tap-topic'.'/'.$child['gallery_topic_slug'] ?>" data-filter=".pf-icons"><i class="fas fa-chevron-circle-right"></i> <?= $child['gallery_topic'] ?></a></li>
            <?php endforeach; ?>
          

        </ul>
      </div>
      <?php endif; ?>

      
        <div id="portfolio" class="portfolio row grid-container g-0" data-layout="fitRows">

          <?php foreach($gallery_class  as $g_class): ?>
            <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
              <div class="grid-inner">
                <div class="portfolio-image">
                  <a href="portfolio-single.html">
                    <img src="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$g_class['gallery_image']) ?>" alt="<?= $g_class['gallery_title'] ?>"/>
                  </a>

                  <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                      <a
                        href="<?= base_url('public/upload/tinymce/gallery_asset'.'/'.$g_class['gallery_image']) ?>"
                        class="overlay-trigger-icon bg-light text-dark"
                        data-hover-animate="fadeInDownSmall"
                        data-hover-animate-out="fadeOutUpSmall"
                        data-hover-speed="350"
                        data-lightbox="image"
                        title="<?= $g_class['gallery_title'] ?>"
                      >
                        <i class="fas fa-expand-alt"></i>
                      </a>
                      <a href="<?= base_url().'/'.$cate_gallery['cate_slug'].'/'.$g_class['gallery_title_slug'].'-'.$g_class['id'].'.html' ?>" title="<?= $g_class['gallery_title'] ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                        <i class="fas fa-ellipsis-h"></i>
                      </a>
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                  </div>
                </div>
                <style type="text/css">
                  .portfolio-desc2 a{
                    display: -webkit-box;
                    max-width: 100%;
                    margin: 0 auto;
                    -webkit-line-clamp: 2;
                    /* autoprefixer: off */
                    -webkit-box-orient: vertical;
                    /* autoprefixer: on */
                    overflow: hidden;
                    text-overflow: ellipsis;
                    
                  }
                </style>
                <div class="portfolio-desc">
                  <h3 style="font-weight: bold;" class="portfolio-desc2"><a href="<?= base_url().'/'.$cate_gallery['cate_slug'].'/'.$g_class['gallery_title_slug'].'-'.$g_class['id'].'.html' ?>" title="<?= $g_class['gallery_title'] ?>"><?= $g_class['gallery_title'] ?></a></h3>
                  <span>
                    <a href="javascript:void(0)" class="ml-5" style="margin-right: 5px !important;"><i class="fab fa-hotjar"></i> <?= $g_class['gallery_view'] ?></a>
                    <?php if($g_class['gallery_file_download'] == null): ?>
                      <a href="<?= base_url('page/download/'.$g_class['gallery_image']) ?>" class="ml"><i class="fas fa-save"></i> save image</a>
                    <?php endif; ?>

                    <?php if($g_class['gallery_topic'] != $gallery_title): ?>
                      <a href="<?= base_url('bo-suu-tap-topic').'/'.$g_class['gallery_topic_slug'] ?>" class="ml-5"><i class="fas fa-long-arrow-alt-right"></i> <?= $g_class['gallery_topic'] ?></a>
                    <?php endif; ?>
                    
                    <?php if($g_class['gallery_file_download'] != null): ?>
                      <a href="http://ouo.io/qs/iVlhUpN8?s=<?= $g_class['gallery_file_download'] ?>" target="_blank"><i class="fas fa-download"></i> download file</a>
                    <?php endif; ?>

                    

                  </span>
                </div>
              </div>
            </article>

          <?php endforeach; ?>

          <?php if($gallery_count > $pagi_num): ?>
            <?= $pager->links(); ?>
          <?php endif; ?>

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

