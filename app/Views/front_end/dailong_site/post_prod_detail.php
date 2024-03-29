<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 30px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'-'.$cate_detail['id'] ?>" class="fw-bold"><?= $cate_detail['cate_name'] ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $post_detail['post_title']; ?></li>
    </ol>
  </nav>
</div>




<section id="content">
  <div class="content-wrap">

    <div class="container clearfix mt-5">

      
      <div class="row gutter-40 col-mb-80">

        <div class="postcontent col-lg-9">
          <div class="">
            <div class="row gx-5 col-mb-80">
              <main class="postcontent col-lg-12">
                <div class="single-product">
                  <div class="product">
                    <div class="row gutter-40">
                      <div class="col-md-6">
                        

                        <div class="product-image">
                          <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                            <div class="flexslider">
                              <div class="slider-wrap" data-lightbox="gallery">

                                <div class="slide" data-thumb="<?= base_url('public/upload/tinymce/').'/'.$post_detail['post_image']; ?>">
                                  <a href="<?= base_url('public/upload/tinymce/').'/'.$post_detail['post_image']; ?>" title="<?= $post_detail['post_title']; ?>" data-lightbox="gallery-item"><img src="<?= base_url('public/upload/tinymce/').'/'.$post_detail['post_image']; ?>" alt="<?= $post_detail['post_title']; ?>" /></a>
                                </div>

                                <?php if(isset($postImages)): ?>
                                  <?php foreach($postImages as $p_i): ?>
                                    <?php if($p_i['post_image_id'] == $post_detail['id']): ?>

                                      

                                      <div class="slide" data-thumb="<?= base_url('public/upload/tinymce/').'/'.$p_i['post_image_slug']; ?>">
                                        <a href="<?= base_url('public/upload/tinymce/').'/'.$p_i['post_image_slug']; ?>" title="<?= $p_i['post_image_title']; ?>" data-lightbox="gallery-item"><img src="<?= base_url('public/upload/tinymce/').'/'.$p_i['post_image_slug']; ?>" alt="<?= $p_i['post_image_title']; ?>" /></a>
                                      </div>


                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                                
                              </div>
                            </div>
                          </div>
                          <?php if($post_detail['post_sale']): ?>
                            <div class="sale-flash badge bg-danger p-2">On Sale!</div>
                          <?php endif; ?>
                        </div>


                      </div>
                      <div class="col-md-6 product-desc" style="margin-top: 17px !important">
                        <div class="entry-title">
                          <h2 style="color: #0026ff"><?= $post_detail['post_title']; ?></h2>
                        </div>

                        <div class="entry-meta mb-4">
                          <ul>
                            <li><i class="fas fa-calendar-alt"></i>
                              <?php
                                $datetime = (new \CodeIgniter\I18n\Time);
                                $yearNow = $datetime::now()->getYear();
                                $yearMonthsNow = $datetime::now()->getMonth();
                                $yearPost = $datetime::parse($post_detail['updated_at'])->getYear();
                                
                                $yearMonthsPost = $datetime::parse($post_detail['updated_at'])->getMonth();
                                if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                                  echo $datetime::parse($post_detail['updated_at'])->humanize();
                                }
                                elseif(($yearNow - $yearPost) > 1){
                                  echo $datetime::parse($post_detail['updated_at'])->humanize();
                                }else{
                                  echo $datetime::parse($post_detail['updated_at'])->toLocalizedString('dd MMM yyyy');
                                }
                                

                              ?>
                            </li>
                            <li><i class="fas fa-eye"></i> <?= $post_detail['post_view']; ?></li>
                            <li><i class="fas fa-camera-retro"></i></li>
                          </ul>
                        </div>
                        <div class="line line-sm"></div>
                        <div class="d-flex align-items-center justify-content-between">
                          <?php if($post_detail['post_sale']): ?>
                            <div class="product-price"><del><?= number_format($post_detail['post_price'],0,",","."); ?> VNĐ</del> <ins><?= number_format($post_detail['post_sale'],0,",","."); ?></ins> <small>VNĐ</small></div>
                          <?php elseif($post_detail['post_price']): ?>
                            <div class="product-price"><ins>Giá: <?= number_format($post_detail['post_price'],0,",","."); ?></ins> <small>VNĐ</small></div>
                          <?php else: ?>
                            <div class="product-price"><ins>Giá: Liên Hệ</ins></div>
                          <?php endif; ?>

                          <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>

                          </div>
                        </div>
                        <div class="line"></div>

                        <form class="cart mb-0 d-flex justify-content-between align-items-center" action="<?= site_url('buy').'/'.$post_detail['id']; ?>" method="post" enctype="multipart/form-data">
                          <?= csrf_field(); ?>
                          <div class="quantity">
                            <input type="button" value="-" class="minus" />
                            <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
                            <input type="button" value="+" class="plus" />
                          </div>

                          <!-- <a href="<?= site_url('buy').'/'.$post_detail['id']; ?>"  <?php if($post_detail['post_sale'] || $post_detail['post_price']): ?> class="add-to-cart button m-0" <?php else: ?> class="add-to-cart button m-0 disabled" <?php endif; ?> ><i class="uil uil-shopping-cart me-1"></i> Add to Cart</a> -->
                          <button type="submit" <?php if($post_detail['post_sale'] || $post_detail['post_price']): ?> class="add-to-cart button m-0" <?php else: ?> class="add-to-cart button m-0 disabled" <?php endif; ?>><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                        <div class="line"></div>

                        <p><?= $post_detail['post_intro']; ?></p>
                        <ul class="iconlist">
                          <li><i class="fas fa-check"></i> Nhiều lựa chọn mẫu</li>
                          <li><i class="fas fa-check"></i> Kích thước đa dạng</li>
                          <li><i class="fas fa-check"></i> Giao hàng nhanh</li>
                          <li><i class="fas fa-check"></i> Giá có thể thay đổi theo thời điểm</li>
                        </ul>

                        <div class="card product-meta">
                          <div class="card-body">
                            <span class="posted_in">Category: <a href="<?= base_url('san-pham'); ?>" rel="tag">Sản Phẩm</a>.</span>

                            <?php if($tag_all): ?>
                              <span class="tagged_as">Tags: 
                                <?php foreach($tag_all as $tag): ?>
                                  <a href="<?= base_url().'/tag/'.$tag['tag_post_slug'].'-'.$tag['id'] ?>" rel="tag" title="Tag: <?= $tag['tag_post_title'] ?>"><?= $tag['tag_post_title'] ?></a>,
                                <?php endforeach; ?>
                              </span>
                            <?php endif; ?>

                          </div>
                        </div>

                        <div class="card mt-5 pt-4 border-0 border-top rounded-0 border-default">
                          <div class="card-body p-0">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                              <div class="d-flex">
                                <a href="http://www.facebook.com/sharer/sharer.php?u=<?= $link_full ?>&text=<?= $post_detail['post_title']; ?>" target="_blank" title="share facebook: <?= $post_detail['post_title']; ?>" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" >
                                  <i class="fab fa-facebook-f"></i>
                                  <i class="fab fa-facebook-f"></i>
                                </a>

                                <a href="https://twitter.com/intent/tweet?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $post_detail['post_intro']; ?>" title="share twitter: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter">
                                  <i class="fab fa-twitter"></i>
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://pinterest.com/pin/create/button/?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $post_detail['post_intro']; ?>" title="share pinterest: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest">
                                  <i class="fab fa-pinterest-p"></i>
                                  <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a href="http://www.tumblr.com/share?v=3&u=<?= $link_full ?>&t=<?= $post_detail['post_intro']; ?>" title="share tumblr: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-tumblr">
                                  <i class="fab fa-tumblr"></i>
                                  <i class="fab fa-tumblr"></i>
                                </a>
                                
                                <a href="mailto:?subject=<?= $post_detail['post_title']; ?>&amp;body=<?= $link_full ?>" title="Share by Email" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0">
                                  <i class="fas fa-envelope"></i>
                                  <i class="fas fa-envelope"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-12 mt-5">
                        <div class="mb-0">
                          <ul class="nav canvas-tabs tabs nav-tabs mb-3" id="tab-1" role="tablist" style="--bs-nav-link-font-weight: 500;">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="canvas-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#tabs-1" type="button" role="tab" aria-controls="canvas-tabs-1" aria-selected="true"><i class="me-1 bi-justify"></i>
                                <span class="d-none d-md-inline-block">Description</span></a>
                              </button>
                            </li>
                            
                          </ul>

                          <div id="canvas-tab-alt-content" class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="canvas-tabs-1-tab" tabindex="0">
                              <?= $post_detail['post_content']; ?>
                            </div>

                            
                          </div>
                        </div>
                        <!-- <div class="line"></div> -->
                        <!-- <div class="row">
                          <div class="col-md-4 d-none d-md-block">
                            <a href="#" title="Brand Logo"><img src="images/shop/brand2.jpg" alt="Brand Logo" /></a>
                          </div>
                          <div class="col-md-12">
                            <div class="row gutter-30">
                              <div class="col-lg-6">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                  <div class="fbox-icon">
                                    <i class="bi-hand-thumbs-up"></i>
                                  </div>
                                  <div class="fbox-content">
                                    <h3>100% Original Brands</h3>
                                    <p class="mt-0">We guarantee you the sale of Original Brands with warranties.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                  <div class="fbox-icon">
                                    <i class="bi-credit-card"></i>
                                  </div>
                                  <div class="fbox-content">
                                    <h3>Lots of Payment Options</h3>
                                    <p class="mt-0">We accept Visa, MasterCard and American Express &amp; of-course PayPal.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                  <div class="fbox-icon">
                                    <i class="bi-truck"></i>
                                  </div>
                                  <div class="fbox-content">
                                    <h3>Free Express Shipping</h3>
                                    <p class="mt-0">Free Delivery to 100+ Locations Worldwide on orders above $40.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                  <div class="fbox-icon">
                                    <i class="bi-arrow-counterclockwise"></i>
                                  </div>
                                  <div class="fbox-content">
                                    <h3>30-Days Returns Policy</h3>
                                    <p class="mt-0">Return or exchange items purchased within 30 days for Free.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->

                      </div>
                    </div>
                  </div>
                </div>
                <div class="line"></div>

                

              </main>
              
            </div>
          </div>
          


          <div class="single-post mb-0 card" style="border-radius: 0 !important; background: #fafafa; border: none !important">
            <div class="card-body">
              
              <div class="row text-center text-md-start justify-content-between my-2">
                <?php if(isset($previous)): ?>
                  <div class="col-md-auto">
                    <a href="<?= base_url('').'/'.$previous['post_cate_slug'].'/'.$previous['post_slug'].'-'.$previous['id'].'.html'; ?>" title="<?= $previous['post_title']; ?>" class="d-inline-flex align-items-center text-dark h-text-color"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;<span><?= $previous['post_title'] ?></span></a>
                  </div>
                <?php endif; ?>
                <div class="col text-center">
                  <a href="javascript:void(0)" class="d-inline-flex align-items-center text-dark h-text-color"><i class="fas fa-th-large"></i></a>
                </div>
                <?php if(isset($next)): ?>
                  <div class="col-md-auto">
                    <a href="<?= base_url('').'/'.$next['post_cate_slug'].'/'.$next['post_slug'].'-'.$next['id'].'.html'; ?>" title="<?= $next['post_title']; ?>" class="d-inline-flex align-items-center text-dark h-text-color"><span><?= $next['post_title'] ?></span>&nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                <?php endif; ?>
              </div>

              
              <div class="line line-sm"></div>

              

              <h4>Related Post:</h4>
              <div class="related-posts row posts-md col-mb-30">

                  

                <?php foreach($related as $key2): ?>

                  <div class="entry event col-md-6 imagescalein" >
                    <div class="grid-inner row g-0 p-4 border rounded bg-white" >
                      <div class="col-lg-5 mb-lg-0">
                        <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="entry-image overflow-hidden">
                          <img src="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>"/>
                        </a>
                      </div>
                      <div class="col-lg-7 ps-lg-4">
                        <div class="entry-title title-sm">
                          <h2><a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h2>
                        </div>
                        <div class="entry-meta">
                          <ul>
                            <li>
                              <i class="far fa-calendar-alt"></i>
                              <?php
                                $datetime = (new \CodeIgniter\I18n\Time);
                                $yearNow = $datetime::now()->getYear();
                                $yearMonthsNow = $datetime::now()->getMonth();
                                $yearPost = $datetime::parse($key2['updated_at'])->getYear();
                                
                                $yearMonthsPost = $datetime::parse($key2['updated_at'])->getMonth();
                                if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                                  echo $datetime::parse($key2['updated_at'])->toLocalizedString('dd MMM yyyy');
                                }
                                if(($yearNow - $yearPost) > 1){
                                  echo $datetime::parse($key2['updated_at'])->toLocalizedString('dd MMM yyyy');
                                }else{
                                  echo $datetime::parse($key2['updated_at'])->toLocalizedString('dd MMM yyyy');
                                }
                                

                              ?>
                            </li>
                            <!-- <li>
                              <a href="#"><i class="uil uil-map-marker"></i> Melbourne, Australia</a>
                            </li> -->
                          </ul>
                        </div>
                        <div class="entry-content2" style="padding-top: 7px;">
                          <p class="text-secondary"><?= $key2['post_intro']; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                <?php endforeach; ?>

                
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar col-lg-3">
          <div class="sidebar-widgets-wrap">
            
            
            <div class="widget clearfix">
              <div class="tabs mb-0 clearfix" id="sidebar-tabs">
                
                <div class="fancy-title title-border">
                    <h4 class="mb-2 ls-1 text- fw-bold">Popular</h4>
                  </div>
                <div class="tab-container">
                  <div class="tab-content clearfix" id="tabs-1">
                    <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                      <?php foreach($most_view_this_cate as $key3): ?>
                      <div class="entry col-12">
                        <div class="grid-inner row g-0">
                          <div class="col-auto">
                            <div class="entry-image">
                              <a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><img class="rounded-0" src="<?= base_url('public/upload/tinymce/').'/'.$key3['post_image']; ?>" alt="<?= $key3['post_title']; ?>"/></a>
                            </div>
                          </div>
                          <div class="col ps-3">
                            <div class="entry-title">
                              <h4><a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><?= $key3['post_title']; ?></a></h4>
                            </div>
                            <div class="entry-meta">
                              <ul>
                                <li><i class="far fa-calendar-alt"></i>
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
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('link_css'); ?>
  
  <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/IMAGG_default.css">


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  
  <script src="<?= base_url('public/site_asset/canvas'); ?>/js/IMAGG.js"></script>
  <script type="text/javascript">
    $(".tab-content img").addClass('triggerIMAGG');
  </script>

<?= $this->endSection(); ?>

<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= $link_full ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= $link_full ?>"/>

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
  <meta name="twitter:image" content="<?= base_url('public/upload/tinymce').'/'.$image ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:url" content="<?= $link_full ?>" />
  <meta property="og:image" content="<?= base_url('public/upload/tinymce').'/'.$image ?>" />
  <meta property="og:description" content="<?= $meta_desc ?>" />
  <meta property="og:locale" content="vi_VN" />
  
  <meta name="thumbnail" content="<?= base_url('public/upload/tinymce').'/'.$image ?>" />
  <meta property="og:image:secure_url" content="<?= base_url('public/upload/tinymce').'/'.$image ?>" />

  


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $created_at ?>" itemprop="dateCreated"/>

  
<?= $this->endSection(); ?>