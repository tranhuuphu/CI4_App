<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>



<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 60px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
    </ol>
  </nav>
</div>


<style>
  .block-card-9 .grid-inner .btn-hover {
    opacity: 0;
    display: block;
    transition: opacity 0.3s ease, transform 0.3s 0.1s ease;
    margin-top: 15px;
    position: absolute;
    transform: translateY(0);
  }
  .block-card-9 .grid-inner:hover .btn-hover {
    opacity: 1;
    transform: translateY(-5px);
  }

  .block-card-9 .grid-inner .grid-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
  }

  .block-card-9 .grid-inner:hover .grid-image {
    -webkit-animation: kenburns 20s ease-out both;
    animation: kenburns 20s ease-out both;
  }

  .block-card-9 .grid-inner .grid-icon,
  .block-card-9 .grid-inner .grid-content {
    transition: transform 0.3s ease;
  }

  .block-card-9 .grid-inner:hover .grid-content {
    transform: translateY(-45px);
  }
  .block-card-9 .grid-inner:hover .grid-icon {
    transform: translateY(-5px);
  }
  .btn:focus,.btn:active:focus,.btn.active:focus,
  .btn.focus,.btn:active.focus,.btn.active.focus {
    outline: none !important;
    box-shadow: none;
  }

  @-webkit-keyframes kenburns {
    0% {
      -webkit-transform: scale(1) translate(0, 0);
      transform: scale(1) translate(0, 0);
      -webkit-transform-origin: 84% 84%;
      transform-origin: 84% 84%;
    }
    100% {
      -webkit-transform: scale(1.1) translate(20px, 15px);
      transform: scale(1.1) translate(20px, 15px);
      -webkit-transform-origin: right bottom;
      transform-origin: right bottom;
    }
  }
  @keyframes kenburns {
    0% {
      -webkit-transform: scale(1.1) translate(0, 0);
      transform: scale(1.1) translate(0, 0);
      -webkit-transform-origin: 84% 84%;
      transform-origin: 84% 84%;
    }
    100% {
      -webkit-transform: scale(1.1) translate(20px, 15px);
      transform: scale(1.1) translate(20px, 15px);
      -webkit-transform-origin: right bottom;
      transform-origin: right bottom;
    }
  }
  .entry-image{
  	margin-bottom: -0px !important;
  }
</style>


<?php
	$pro_cate_1 = array_slice($pro_cate, 0, 1);
	$pro_cate_2 = array_slice($pro_cate, 1);
?>

<?php if(count($pro_cate_1)>0): ?>
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">
      <div class="row justify-content-center gutter-50 col-mb-50">

      	<?php foreach($pro_cate_1 as $key): ?>
	        <div class="entry event col-md-12 imagescalein">
	          <div class="grid-inner row g-0 p-4 border rounded shadow-sm">
	            <div class="col-lg-5 mb-lg-0">
	              <a href="#" class="entry-image overflow-hidden">
	                <img src="<?= base_url('public/upload/tinymce/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" class="rounded" />
	                <!-- <div class="entry-date"><i class="fas fa-store"></i></div> -->
	              </a>
	            </div>
	            <div class="col-lg-7 ps-lg-4">
	              <div class="entry-title title-sm">
	                <h2><a href="<?= base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" class="fw-bold" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h2>
	              </div>
	              <!-- <div class="entry-meta">
	                <ul>
	                  <li><span class="badge bg-warning text-dark py-1 px-2">Private</span></li>
	                  <li>
	                    <a href="#"><i class="icon-time"></i> 11:00 - 19:00</a>
	                  </li>
	                  <li>
	                    <a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a>
	                  </li>
	                </ul>
	              </div> -->
	              <div class="entry-content">
	                <button type="button" class="btn btn-success">
									  Price: <span class="badge bg-secondary">
									  	
					              <?php if($key['post_sale']): ?>
			                    <del><?= number_format($key['post_price'],0,",","."); ?></del> <ins><?= number_format($key['post_sale'],0,",","."); ?></ins> VNĐ
			                  <?php elseif($key['post_price']): ?>
			                    <ins><?= number_format($key['post_price'],0,",","."); ?></ins> VNĐ
			                  <?php else: ?>
			                  	<div class="product-price text-danger">Liên Hệ</div>
			                  <?php endif; ?>
			                  
					            
									  </span>
									</button>
	                <a href="javascript:void(0)" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal<?= $key['id']; ?>"><i class="fas fa-expand"></i>&nbsp; Quick View</a>
	                <a href="<?= site_url('buy').'/'.$key['id']; ?>"  <?php if($key['post_sale'] || $key['post_price']): ?> class="btn btn-primary px-3" <?php else: ?> class="btn btn-dark px-3 disabled" <?php endif; ?>><i class="fas fa-shopping-cart"></i>&nbsp; Add to Cart</a>
	              </div>
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


      </div>
    </div>
  </div>
</section>
<?php endif; ?>



<?php if(count($pro_cate_2)>0): ?>
	<section id="content">
	  <div class="content-wrap">
	    <div class="container clearfix">

	    	<div class="row justify-content-center row-cols-1 row-cols-md-3 g-4 entry event">
        	<?php foreach($pro_cate_2 as $key2): ?>
					  <div class="col">
					    <div class="grid-inner row g-0 p-3 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card h-100 border">
					    	<a href="javascript:void(0)">
						      <img src="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>" class="card-img-top rounded">
						    </a>
					      <div class="card-body" style="padding: 10px 0px !important">
					        <div class="entry-title title-sm">
			              <h2><a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" class="fw-bold" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h2>
			            </div>

			            <div class="product-desc text-center" style="padding: 5px 0 !important">
			              <?php if($key2['post_sale']): ?>
	                    <div class="product-price"><del>Giá/Price: <?= number_format($key2['post_price'],0,",","."); ?></del> <ins><?= number_format($key2['post_sale'],0,",","."); ?></ins> VNĐ<small>VNĐ</small></div>
	                  <?php elseif($key2['post_price']): ?>
	                    <div class="product-price">Giá/Price:  <ins><?= number_format($key2['post_price'],0,",","."); ?></ins> VNĐ</div>
	                  <?php else: ?>
	                  	<div class="product-price text-danger">Liên Hệ</div>
	                  <?php endif; ?>
	                  
			            </div>

					      </div>
					      <div class="card-footer justify-content-between" style="margin-top: 0px !important">
					        <small class="text-muted">
					        	<a href="javascript:void(0)" class="btn btn-danger float-start" data-bs-toggle="modal" data-bs-target="#myModal<?= $key2['id']; ?>"><i class="fas fa-eye"></i>&nbsp;Quick View</a>	
			              <a href="<?= site_url('buy').'/'.$key2['id']; ?>"  <?php if($key2['post_sale'] || $key2['post_price']): ?> class="btn btn- btn-success px-3 float-end" <?php else: ?> class="btn btn- btn-dark px-3 float-end disabled" <?php endif; ?> ><i class="fas fa-shopping-cart"></i>&nbsp; &nbsp;Add to Cart</a>
					        </small>
					      </div>
					    </div>
					  </div>

					  <div class="modal fade text-start rounded-0"  id="myModal<?= $key2['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		          <div class="modal-dialog modal-lg" >
		            <div class="modal-content" style="border-radius: 0;">
		              <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel"><?= $key2['post_title']; ?></h4>
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
						                      
						                    	
						                      <div class="" data-thumb="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>">
	                                  <a href="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" target="_blank" title="<?= $key2['post_title']; ?>" data-lightbox="gallery-item"><img src="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>" /></a>
	                                </div>

		                              
						                      <?php if($key2['post_sale']): ?>
		                              	<div class="sale-flash badge bg-danger p-2">Sale!</div>
		                              <?php endif; ?>
						                    </div>
						                  </div>
						                  <div class="col-md-6 product-desc">
						                    <div class="d-flex align-items-center justify-content-between">

						                      <?php if($key2['post_sale']): ?>
		                                <div class="product-price"><del><?= number_format($key2['post_price'],0,",","."); ?> VNĐ</del> <ins><?= number_format($key2['post_sale'],0,",","."); ?></ins> <small>VNĐ</small></div>
		                              <?php elseif($key2['post_price']): ?>
		                                <div class="product-price"><ins><?= number_format($key2['post_price'],0,",","."); ?></ins> VNĐ</div>
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

						                    <form class="cart mb-0 d-flex justify-content-between align-items-center" action="<?= site_url('buy').'/'.$key2['id']; ?>" method="post" enctype="multipart/form-data">
						                    	<?= csrf_field(); ?>
						                      <div class="quantity">
						                        <input type="button" value="-" class="minus" />
						                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
						                        <input type="button" value="+" class="plus" />
						                      </div>
						                      <button type="submit" class="add-to-cart button m-0"><i class="fas fa-shopping-cart"></i> Add to cart</button>
						                    </form>
						                    <div class="line"></div>

						                    <p><?= $key2['post_intro']; ?></p>
						                    

						                    <div class="card mt-2 pt-4 border-0 border-top rounded-0 border-default">
						                      <div class="card-body p-0">
						                        <div class="d-flex align-items-center justify-content-between">
						                          <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
						                          <?php $link_full = base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>
						                          <div class="d-flex">
						                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?= $link_full ?>&text=<?= $key2['post_title']; ?>" target="_blank" title="share facebook: <?= $key2['post_title']; ?>" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" >
					                                <i class="fab fa-facebook-f"></i>
					                                <i class="fab fa-facebook-f"></i>
					                              </a>

					                              <a href="https://twitter.com/intent/tweet?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $key2['post_intro']; ?>" title="share twitter: <?= $key2['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter">
					                                <i class="fab fa-twitter"></i>
					                                <i class="fab fa-twitter"></i>
					                              </a>
					                              <a href="https://pinterest.com/pin/create/button/?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $key2['post_intro']; ?>" title="share pinterest: <?= $key2['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest">
					                                <i class="fab fa-pinterest-p"></i>
					                                <i class="fab fa-pinterest-p"></i>
					                              </a>
					                              <a href="http://www.tumblr.com/share?v=3&u=<?= $link_full ?>&t=<?= $key2['post_intro']; ?>" title="share tumblr: <?= $key2['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-tumblr">
					                                <i class="fab fa-tumblr"></i>
					                                <i class="fab fa-tumblr"></i>
					                              </a>
					                              
					                              <a href="mailto:?subject=<?= $key2['post_title']; ?>&amp;body=<?= $link_full ?>" title="Share by Email" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0">
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
	        
				  
				</div>


	    </div>
	  </div>
	</section>
<?php endif; ?>





<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script type="text/javascript">
    jQuery(document).ready(equalHeight);
    jQuery(window).on('resize',equalHeight);

    function equalHeight(){
      var max = 0;
      jQuery(".equal-height .x-column").each(function() {
        if( jQuery(this).height() > max ){
          max = jQuery(this).height();
        }
      });
      jQuery(".equal-height .x-column").css('height', max);
    }
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