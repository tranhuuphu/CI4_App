<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>
<section>
  <div class="container">
    <nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 60px;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
      </ol>
    </nav>
  </div>
</section>



<?php
  $gallery_cate_1 = array_slice($post_cate, 0, 6);
  $gallery_cate_2 = array_slice($post_cate, 6, 18);
?>

<?php if($gallery_cate_1 != null): ?>
<section id="content">
  <div class="content-wrap">
    <div class="container">
      <a href="<?= site_url('table_image') ?>" class="btn btn-primary fw-bold button button-3d" style="border-radius: 0; text-transform: uppercase;">Chuyển sang table <i class="fas fa-arrow-right"></i></a>

      <div class="line line-sm"></div>

      <div class="row col-mb-50 mb-0">

        <div class="col-lg-9">

          <div id="portfolio" class="portfolio row grid-container gutter-10 mb-5" data-layout="fitRows">

            <?php foreach($gallery_cate_1 as $key): ?>
            <article class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-12 pf-media pf-icons">
              <div class="grid-inner">
                <div class="portfolio-image">
                  <a href="<?= base_url().'/'.$cate_slug.'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>">
                    <img src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" alt="<?= $key['gallery_title'] ?>"/>
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

                      <?php if($key['gallery_post_url'] == null): ?>
                      <?php else: ?>
                        <a href="<?php if($key['gallery_post_url'] == null){ echo "javascript:void(0)";}else{echo $key['gallery_post_url'];}  ?>" <?php if($key['gallery_post_url'] == null){ }else{echo "target='_blank'";}  ?> class="overlay-trigger-icon bg-light text-dark text-bold" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item">
                          <i class="uil uil-link"></i>
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

                <div class="portfolio-desc portfolio-desc2">
                  <h3><a href="<?= base_url().'/'.$cate_slug.'/'.$key['gallery_title_slug'].'-'.$key['id'].'.html' ?>" title="<?= $key['gallery_title'] ?>" class="fw-bold"><?= $key['gallery_title'] ?></a></h3>


                  
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
            </article>
            <?php endforeach; ?>

            
          </div>

        </div>
        <div class="col-lg-3">

          <div class="sidebar-widgets-wrap mb-3">
            <div class="widget subscribe-widget2 clearfix">
              <div class="dark" style="padding: 25px; background-color: #5cadff; border-radius: 2px;">
                <div class="fancy-title title-border">
                  <h4>Search Google</h4>
                </div>


                <form method="get" action="https://google.com/search" target="_blank">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Google site search" name="q" size="25">
                    <button type="submit" class="button button-3d w-100 button-small m-0 fw-bold" style="margin-top: 25px !important;" type="submit">FIND <i class="fas fa-search"></i></button>
                    <input type="hidden" name="sitesearch" value="<?= base_url('/'); ?>" />
                  </div>

                </form>
              

                

              </div>
            </div>
          </div>
          <div class="line line-sm"></div>

          <div class="row col-mb-50 mb-0">

            <div class="entry col-12 mb-0">
              <div class="grid-inner row">
                <div class="col-md-5">
                  <div class="entry-image mb-0">
                    <a href="demo-news-single.html"><img src="https://themes.semicolonweb.com/html/canvas/v6/demos/news/images/posts/sports/2.jpg" alt="Image" /></a>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="entry-title title-sm mt-3 mt-md-0">
                    <h3 class="mb-1" style="font-size: 12px"><a href="demo-news-single.html">Papers: Real Madrid plot Pogba bid</a></h3>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="entry col-12 mb-0">
              <div class="grid-inner row">
                <div class="col-md-5">
                  <div class="entry-image mb-0">
                    <a href="demo-news-single.html"><img src="https://themes.semicolonweb.com/html/canvas/v6/demos/news/images/posts/sports/2.jpg" alt="Image" /></a>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="entry-title title-sm mt-3 mt-md-0">
                    <h3 class="mb-1" style="font-size: 12px"><a href="demo-news-single.html">Papers: Real Madrid plot Pogba bid</a></h3>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="entry col-12 mb-0">
              <div class="grid-inner row">
                <div class="col-md-5">
                  <div class="entry-image mb-0">
                    <a href="demo-news-single.html"><img src="https://themes.semicolonweb.com/html/canvas/v6/demos/news/images/posts/sports/2.jpg" alt="Image" /></a>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="entry-title title-sm mt-3 mt-md-0">
                    <h3 class="mb-1" style="font-size: 12px"><a href="demo-news-single.html">Papers: Real Madrid plot Pogba bid</a></h3>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="icon-line-clock"></i>11 Mar 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>  


          </div>


          <?php if($most_view_post != null): ?>
            <?php foreach($most_view_post as $mv): ?>
            <div class="entry col-12">
              <div class="grid-inner row g-0">
                <div class="col-auto">
                  <div class="entry-image">
                    <a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/').'/'.$mv['post_image']; ?>" alt="<?= $mv['post_title']; ?>"/></a>
                  </div>
                </div>
                <div class="col ps-3">
                  <div class="entry-title">
                    <h4><a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>"><?= $mv['post_title']; ?></a></h4>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="far fa-calendar-alt"></i>
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
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          <?php endif; ?>

          
          
        </div>
      </div>

      <div id="portfolio" class="portfolio row grid-container gutter-10 mb-5" data-layout="fitRows">

        <?php foreach($gallery_cate_2 as $key2): ?>
        <article class="portfolio-item col-lg-2 col-md-4 col-sm-4 col-12 pf-media pf-icons">
          <div class="grid-inner">
            <div class="portfolio-image">
              <a href="<?= base_url().'/'.$cate_slug.'/'.$key2['gallery_title_slug'].'-'.$key2['id'].'.html' ?>" title="<?= $key2['gallery_title'] ?>">
                <img src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key2['gallery_image'] ?>" alt="<?= $key2['gallery_title'] ?>"/>
              </a>

              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a
                    href="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key2['gallery_image'] ?>"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInDownSmall"
                    data-hover-animate-out="fadeOutUpSmall"
                    data-hover-speed="350"
                    data-lightbox="image"
                    title=""
                  >
                    <i class="fas fa-expand-alt"></i>
                  </a>

                  <?php if($key2['gallery_post_url'] == null): ?>
                  <?php else: ?>
                    <a href="<?php if($key2['gallery_post_url'] == null){ echo "javascript:void(0)";}else{echo $key2['gallery_post_url'];}  ?>" <?php if($key2['gallery_post_url'] == null){ }else{echo "target='_blank'";}  ?> class="overlay-trigger-icon bg-light text-dark text-bold" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item">
                      <i class="uil uil-link"></i>
                    </a>
                  <?php endif; ?>

                  <?php if($key2['gallery_file_download'] == null): ?>
                    <a href="<?= base_url('page/download/'.$key2['gallery_image']) ?>" target= "_blank" class="overlay-trigger-icon bg-light text-dark" title="<?= $key2['gallery_title'] ?>" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                      <i class="fas fa-download"></i>
                    </a>
                  <?php endif; ?>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>

            <div class="portfolio-desc portfolio-desc2">
              <h3><a href="<?= base_url().'/'.$cate_slug.'/'.$key2['gallery_title_slug'].'-'.$key2['id'].'.html' ?>" title="<?= $key2['gallery_title'] ?>" class="fw-bold"><?= $key2['gallery_title'] ?></a></h3>


              
              <span>


                <?php if($key2['gallery_file_download'] == null)
                  if(file_exists('public/upload/tinymce/gallery_asset'.'/'.$key2['gallery_image']) != null){
                    $image_info = getimagesize('public/upload/tinymce/gallery_asset'.'/'.$key2['gallery_image']);
                    $image_width = $image_info[0];
                    $image_height = $image_info[1];
                    echo $image_width.'x'.$image_height.' (pixel)&nbsp;';
                  }
                ?>

                <?php if($key2['gallery_file_download'] == null): ?>
                  <a href="<?= base_url('page/download/'.$key2['gallery_image']) ?>" class="ml-5"><i class="fas fa-save"></i> save</a>
                <?php endif; ?>
                
                <?php if($key2['gallery_file_download'] != null): ?>
                  <a href="http://ouo.io/qs/iVlhUpN8?s=<?= $key2['gallery_file_download'] ?>" target="_blank"><i class="fas fa-download"></i>&nbsp;<i class="fab fa-google-drive"></i> download file</a>
                <?php endif; ?>
                <a href="<?= base_url('bo-suu-tap-topic').'/'.$key2['gallery_type_slug'] ?>" class="ml-5"><i class="fas fa-star-of-life"></i> <?= $key2['gallery_type_name'] ?></a>

                <?php if($key2['gallery_topic'] != null): ?>
                <a href="<?= base_url('bo-suu-tap-topic').'/'.$key['gallery_topic_slug'] ?>" class="ml-5"><i class="fas fa-long-arrow-alt-right"></i> <?= $key2['gallery_topic'] ?></a>
                <?php endif; ?>
                
                

              </span>
            </div>
          </div>
        </article>
        <?php endforeach; ?>

        
      </div>

      <div class="line line-sm"></div>
      <?= $pager->links('g'); ?>
      
    </div>
  </div>
</section>

<?php else: ?>
    <div class="container mt-5">
      <p>Ảnh đang được cập nhật</p>
    </div>
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