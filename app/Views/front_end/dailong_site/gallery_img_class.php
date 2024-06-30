<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 20px; margin-top: 40px;">
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
        <div class="grid-filter-wrap mt-" style="border: none;">
          <ul class="grid-filter" data-container="#">
              <li class="activeFilter"><a href="<?= base_url().'/'.'bo-suu-tap-topic'.'/'.$gallery_name['gallery_type_slug'] ?>" style="text-transform: capitalize; font-weight: bold; border-radius: 0px !important;"><i class="fas fa-exchange-alt"></i> <?= $gallery_name['gallery_type_name'] ?></a></li>
              <?php if( $gallery_name['gallery_type_name'] != $gallery_title ): ?>
                <li class="activeFilter"><a href="javascript:void(0)" style="text-transform: capitalize; font-weight: bold; border-radius: 0px !important;"><i class="fas fa-chevron-circle-right"></i> <?= $gallery_title ?></a></li>
              <?php endif; ?>

              <?php if($id_child != null || $id_child != ""): ?>
                <?php foreach($id_child  as $child): ?>
                  <li class="bg-light"><a href="<?= base_url().'/'.'bo-suu-tap-topic'.'/'.$child['gallery_topic_slug'] ?>" style="border-radius: 0px !important;"><i class="fas fa-chevron-circle-right"></i> <?= $child['gallery_topic'] ?></a></li>
                <?php endforeach; ?>
              <?php endif; ?>
            

          </ul>
        </div>
      

      <div class="row row-cols-1 row-cols-md-3 g-3 portfolio" id="portfolio">
        <?php foreach($gallery_class as $key): ?>
          <div class="col col-lg-3 col-md-3 col-sm-6">
            <div class="card h-100 shadow-sm">
              <div class="grid-inner portfolio-image">
                
                <a href="<?= base_url().'/'.$cate_gallery['cate_slug'].'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>">
                  
                  <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" alt="<?= $key['gallery_title'] ?>"/>
                  
                </a>
                

                <div class="bg-overlay">
                  <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                    <a
                      href="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>"
                      class="overlay-trigger-icon bg-light text-dark"
                      data-hover-animate="fadeInDownSmall"
                      data-hover-animate-out="fadeOutUpSmall"
                      data-hover-speed="350"
                      data-lightbox="image"
                      title=""
                    >
                      <i class="fas fa-expand-alt"></i>
                    </a>

                    <?php if($key['gallery_post_url'] != null): ?>
                    
                      

                      <a href="<?= $key['gallery_post_url'] ?>" target= "_blank" class="overlay-trigger-icon bg-light text-dark" title="<?= $key['gallery_title'] ?>" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                        <i class="fas fa-anchor"></i>
                      </a>
                    <?php endif; ?>

                    <?php if($key['gallery_file_download'] == null): ?>
                      <a href="<?= base_url('page/download/'.$key['gallery_image']) ?>" target= "_blank" class="overlay-trigger-icon bg-light text-dark" title="<?= $key['gallery_title'] ?>" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                        <i class="fas fa-download"></i>
                      </a>
                    <?php endif; ?>
                  </div>
                  <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>

              </div>
              <div class="card-body shadow-sm">
                <div class="portfolio-desc portfolio-desc2 card-body" style="padding: 0px">
                  <h3 class="card-title"><a href="<?= base_url().'/'.$cate_gallery['cate_slug'].'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>" class="fw-bold"><?= $key['gallery_title'] ?></a></h3>
                  <span>
                    <?php if($key['gallery_file_download'] == null)
                      if(file_exists('public/upload/tinymce/gallery_asset'.'/'.$key['gallery_image']) != null){
                        $image_info = getimagesize('public/upload/tinymce/gallery_asset'.'/'.$key['gallery_image']);
                        $image_width = $image_info[0];
                        $image_height = $image_info[1];
                        echo $image_width.'x'.$image_height.' (pixel)&nbsp;';
                      }
                    ?>

                    <?php if($key['gallery_file_download'] == null): ?>
                      <a href="<?= base_url('page/download/'.$key['gallery_image']) ?>" class="ml-5"><i class="fas fa-save"></i> save</a>
                    <?php endif; ?>
                    
                    <?php if($key['gallery_file_download'] != null): ?>
                      <a href="http://ouo.io/qs/iVlhUpN8?s=<?= $key['gallery_file_download'] ?>" target="_blank"><i class="fas fa-download"></i>&nbsp;<i class="fab fa-google-drive"></i> download file</a>
                    <?php endif; ?>
                    <a href="<?= base_url('bo-suu-tap-topic').'/'.$key['gallery_type_slug'] ?>" class="ml-5"><i class="fas fa-star-of-life"></i> <?= $key['gallery_type_name'] ?></a>

                    <?php if($key['gallery_topic'] != null): ?>
                    <a href="<?= base_url('bo-suu-tap-topic').'/'.$key['gallery_topic_slug'] ?>" class="ml-5"><i class="fas fa-long-arrow-alt-right"></i> <?= $key['gallery_topic'] ?></a>
                    <?php endif; ?>
                  </span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>


      <div id="portfolio" class="portfolio row grid-container row-cols-1 row-cols-md-3 g-3 mt-5" data-layout="fitRows">

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

