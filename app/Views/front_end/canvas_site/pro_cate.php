 <?= $this->extend('front_end/canvas_site/layout'); ?>

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



	<section id="page-title" style="margin-bottom: 15px">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	      <li class="breadcrumb-item active" ><a href="<?= $link_full?>" style="color: #299ef2"><?= $cate_name ?></a></li>
	    </ol>
	  </div>
	</section>
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
		              <a href="javascript:void(0)"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
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
		                    
		                    <button class="btn btn- btn-lg" data-bs-toggle="modal" data-bs-target="#myModal<?= $key['id']; ?>" style="width: 100%; height: 100%; background-color: none; margin: 0px  !important; padding: 0px  !important;"><i class="bi-eye"></i> Quick View</button>
		                  </a>
		                </div>
		                <div class="bg-overlay-bg bg-transparent"></div>
		              </div>
		            </div>
		            <div class="product-desc text-center">
		              <div class="product-title">
		                <h3><a href="#"><?= $key['post_title']; ?></a></h3>
		              </div>
		              <div class="product-price">$13.49</div>
		              <a href="#" class="btn btn-sm btn-dark px-3 mt-2"><i class="uil uil-shopping-cart me-1"></i> Add to Cart</a>
		            </div>
		          </div>
		        </div>

		        <div class="modal fade text-start rounded-0"  id="myModal<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		          <div class="modal-dialog modal-xl" >
		            <div class="modal-content" style="border-radius: 0;">
		              <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel"><?= $key['post_title']; ?></h4>
		                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
		              </div>
		              <div class="modal-body">
		                <div class="single-product shop-quick-view-ajax">
		                  <div class="product modal-padding">

		                      <div class="row gutter-40 col-mb-50">
		                          <div class="col-md-6">
		                              <div class="product-image">
		                                  <div class="fslider" data-pagi="false">
		                                      <div class="flexslider">
		                                          <div class="slider-wrap">
		                                              <div class="slide"><a href="https://canvastemplate.com/images/shop/dress/3.jpg" title="Pink Printed Dress - Front View"><img src="https://canvastemplate.com/images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
		                                              <div class="slide"><a href="https://canvastemplate.com/images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View"><img src="https://canvastemplate.com/images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
		                                              <div class="slide"><a href="https://canvastemplate.com/images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View"><img src="https://canvastemplate.com/images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
		                                          </div>
		                                      </div>
		                                  </div>
		                                  <div class="sale-flash badge bg-danger p-2">Sale!</div>
		                              </div>
		                          </div>
		                          <div class="col-md-6 product-desc">
		                              <div class="d-flex justify-content-between align-items-center">
		                              	<?php if($key['post_sale']): ?>
		                                  <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div>
		                                <?php elseif($key['post_price']): ?>
		                                  <div class="product-price"><ins>$24.99</ins></div>
		                                <?php else: ?>
		                                	<div class="product-price"><ins>Liên Hệ</ins></div>
		                                <?php endif; ?>

		                                  <div class="product-rating">
		                                      <i class="bi-star-fill"></i>
		                                      <i class="bi-star-fill"></i>
		                                      <i class="bi-star-fill"></i>
		                                      <i class="bi-star-half"></i>
		                                      <i class="bi-star"></i>
		                                  </div>
		                              </div>

		                              <!-- Product Single - Quantity & Cart Button
		                              ============================================= -->
		                              <form class="cart py-4 my-4 border-top border-bottom border-default" method="post" enctype='multipart/form-data'>
		                                  <div class="quantity">
		                                      <input type="button" value="-" class="minus">
		                                      <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4">
		                                      <input type="button" value="+" class="plus">
		                                  </div>
		                                  <button type="submit" class="add-to-cart button m-0">Add to Cart</button>
		                              </form><!-- Product Single - Quantity & Cart Button End -->

		                              <p><?= $key['post_intro']; ?></p>
		                              <!-- <ul class="iconlist">
		                                  <li><i class="fa-solid fa-caret-right"></i> Dynamic Color Options</li>
		                                  <li><i class="fa-solid fa-caret-right"></i> Lots of Size Options</li>
		                                  <li><i class="fa-solid fa-caret-right"></i> 30-Day Return Policy</li>
		                              </ul> -->
		                              <!-- <div class="card product-meta mb-0">
		                                  <div class="card-body">
		                                      <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
		                                      <span class="posted_in">Category: <a href="#" rel="tag">Shoes</a>.</span>
		                                      <span class="tagged_as">Tags: <a href="#" rel="tag">Barena</a>, <a href="#" rel="tag">Blazers</a>, <a href="#" rel="tag">Tailoring</a>, <a href="#" rel="tag">Unconstructed</a>.</span>
		                                  </div>
		                              </div> -->
		                          </div>
		                      </div>
		                  </div>
		              	</div>
		              </div>
		              
		            </div>
		          </div>
		        </div>
		       <?php endforeach; ?>
        <?php else: ?>
	      	<div class="col-12">Chưa có sản phẩm</div>
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