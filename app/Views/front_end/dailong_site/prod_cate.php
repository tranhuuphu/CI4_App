<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>
<style>
	.color-underline {
	    background-image: linear-gradient(rgba(var(--cnvs-themecolor-rgb, 243, 152, 135), 0.3), rgba(var(--cnvs-themecolor-rgb, 243, 152, 135), 0.3));
	    background-repeat: no-repeat;
	    background-size: 0 8px;
	    background-position: 0 82%;
	    padding: 0 2px 2px 0;
	    transition: background .6s cubic-bezier(.19, 1, .22, 1)
	}

	.color-underline:hover {
	    background-size: 100% 8px
	}

	
</style>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 60px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
    </ol>
  </nav>
</div>

	
<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div id="shop" class="shop row gutter-30">
        <?php if(count($pro_cate)>0): ?>

        	<?php foreach($pro_cate as $key): ?>
		        <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
		          <div class="grid-inner">
		            <div class="product-image">
		              <a href="javascript:void(0)"><img src="<?= base_url('public/upload/tinymce/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
		              <div class="bg-overlay">
		                <div class="bg-overlay-content align-items-end justify-content-center p-0">
		                  <a
		                    href="javascript:void(0)"
		                    class="btn btn-light py-2 w-100 m-0 rounded-0"
		                    
		                    data-hover-animate="fadeInUp"
		                    data-hover-animate-out="fadeOutDown"
		                    data-hover-speed="400"
		                    data-hover-parent=".product"
		                  >
		                    
		                    <button class="btn btn- btn-lg" data-bs-toggle="modal" data-bs-target="#myModal<?= $key['id']; ?>" style="width: 100%; height: 100%; background-color: none; margin: 0px  !important; padding: 0px  !important;"><i class="far fa-eye"></i> Quick View</button>
		                  </a>
		                </div>
		                <div class="bg-overlay-bg bg-transparent"></div>
		              </div>
		            </div>
		            <div class="product-desc text-center">
		              <div class="product-title">
		                <h3><a href="<?= base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" class="fw-bold" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h3>
		              </div>
		              <?php if($key['post_sale']): ?>
                    <div class="product-price"><del><?= number_format($key['post_price'],0,",","."); ?></del> <ins><?= number_format($key['post_sale'],0,",","."); ?></ins> VNĐ<small>VNĐ</small></div>
                  <?php elseif($key['post_price']): ?>
                    <div class="product-price"><ins><?= number_format($key['post_price'],0,",","."); ?></ins> VNĐ</div>
                  <?php else: ?>
                  	<div class="product-price text-danger">Liên Hệ</div>
                  <?php endif; ?>
		              <a href="<?= site_url('buy').'/'.$key['id']; ?>"  <?php if($key['post_sale'] || $key['post_price']): ?> class="btn btn-sm btn-dark px-3 mt-2" <?php else: ?> class="btn btn-sm btn-dark px-3 mt-2 disabled" <?php endif; ?> ><i class="fas fa-shopping-cart"></i>&nbsp; &nbsp;Add to Cart</a>
		            </div>
		          </div>
		        </div>

		        <div class="modal fade text-start rounded-0"  id="myModal<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		          <div class="modal-dialog modal-lg" >
		            <div class="modal-content" style="border-radius: 0;">
		              <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel"><?= $key['post_title']; ?></h4>
		                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
		              </div>
		              <div class="modal-body">

		              	<div class="postcontent">
			              	<main class="postcontent col-lg-12">
						            <div class="single-product">
						              <div class="product">
						                <div class="row gutter-40">
						                  <div class="col-md-6">


						                    <div class="product-image">
						                      
						                    	
						                      <div class="" data-thumb="<?= base_url('public/upload/tinymce/').'/'.$key['post_image']; ?>">
	                                  <a href="<?= base_url('public/upload/tinymce/').'/'.$key['post_image']; ?>" target="_blank" title="<?= $key['post_title']; ?>" data-lightbox="gallery-item"><img src="<?= base_url('public/upload/tinymce/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
	                                </div>

		                              
						                      <?php if($key['post_sale']): ?>
		                              	<div class="sale-flash badge bg-danger p-2">Sale!</div>
		                              <?php endif; ?>
						                    </div>
						                  </div>
						                  <div class="col-md-6 product-desc">
						                    <div class="d-flex align-items-center justify-content-between">

						                      <?php if($key['post_sale']): ?>
		                                <div class="product-price"><del><?= number_format($key['post_price'],0,",","."); ?> VNĐ</del> <ins><?= number_format($key['post_sale'],0,",","."); ?></ins> <small>VNĐ</small></div>
		                              <?php elseif($key['post_price']): ?>
		                                <div class="product-price"><ins><?= number_format($key['post_price'],0,",","."); ?></ins> VNĐ</div>
		                              <?php else: ?>
		                              	<div class="product-price"><ins>Liên Hệ</ins></div>
		                              <?php endif; ?>

						                      <div class="d-flex align-items-center">
						                        <div class="product-rating">
						                          <i class="fas fa-star"></i>
						                          <i class="fas fa-star"></i>
						                          <i class="fas fa-star"></i>
						                          <i class="fas fa-star"></i>
						                          <i class="fas fa-star-half-alt"></i>
						                        </div>
						                        <button type="button" class="btn btn-sm btn-secondary ms-3"><i class="fas fa-heart"></i></button>
						                      </div>
						                    </div>
						                    <div class="line"></div>

						                    <form class="cart mb-0 d-flex justify-content-between align-items-center" action="<?= site_url('buy').'/'.$key['id']; ?>" method="post" enctype="multipart/form-data">
						                    	<?= csrf_field(); ?>
						                      <div class="quantity">
						                        <input type="button" value="-" class="minus" />
						                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
						                        <input type="button" value="+" class="plus" />
						                      </div>
						                      <button type="submit" class="add-to-cart button m-0"><i class="fas fa-shopping-cart"></i> Add to cart</button>
						                    </form>
						                    <div class="line"></div>

						                    <p><?= $key['post_intro']; ?></p>
						                    

						                    <div class="card mt-2 pt-4 border-0 border-top rounded-0 border-default">
						                      <div class="card-body p-0">
						                        <div class="d-flex align-items-center justify-content-between">
						                          <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
						                          <?php $link_full = base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>
						                          <div class="d-flex">
						                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?= $link_full ?>&text=<?= $key['post_title']; ?>" target="_blank" title="share facebook: <?= $key['post_title']; ?>" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" >
					                                <i class="fab fa-facebook-f"></i>
					                                <i class="fab fa-facebook-f"></i>
					                              </a>

					                              <a href="https://twitter.com/intent/tweet?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $key['post_intro']; ?>" title="share twitter: <?= $key['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter">
					                                <i class="fab fa-twitter"></i>
					                                <i class="fab fa-twitter"></i>
					                              </a>
					                              <a href="https://pinterest.com/pin/create/button/?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $key['post_intro']; ?>" title="share pinterest: <?= $key['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest">
					                                <i class="fab fa-pinterest-p"></i>
					                                <i class="fab fa-pinterest-p"></i>
					                              </a>
					                              <a href="http://www.tumblr.com/share?v=3&u=<?= $link_full ?>&t=<?= $key['post_intro']; ?>" title="share tumblr: <?= $key['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-tumblr">
					                                <i class="fab fa-tumblr"></i>
					                                <i class="fab fa-tumblr"></i>
					                              </a>
					                              
					                              <a href="mailto:?subject=<?= $key['post_title']; ?>&amp;body=<?= $link_full ?>" title="Share by Email" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0">
					                                <i class="fas fa-envelope"></i>
					                                <i class="fas fa-envelope"></i>
					                              </a>
						                          </div>
						                        </div>
						                      </div>
						                    </div>
						                  </div>
						                  
						                  <!-- <div class="w-100"></div> -->
						                  
						                </div>
						              </div>
						            </div>
						          </main>
						        </div>


		                
		              </div>
		              
		            </div>
		          </div>
		        </div>
		       <?php endforeach; ?>
        <?php else: ?>
	      	<div class="col-12">Chưa có sản phẩm</div>
	    	<?php endif; ?>


	    	<?php if($pro_count > $paginate): ?>
	        <?= $pager->links() ?>
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
  <meta name="twitter:image" content="<?= base_url('public/upload/tinymce').'/'.$image ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:url" content="<?= base_url() ?>" />
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