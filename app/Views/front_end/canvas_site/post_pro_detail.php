<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<section id="page-title" style="margin-bottom: 25px">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: 500;">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	      <li class="breadcrumb-item"><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'-'.$cate_detail['id'] ?>"><?= $cate_detail['cate_name'] ?></a></li>
	      <li class="breadcrumb-item active"><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'/'.$post_detail['post_slug'].'-'.$post_detail['id'].'.html' ?>" title="<?= $post_detail['post_title']; ?>"><?= $post_detail['post_title']; ?></a></li>
	    </ol>
	  </div>
	</section>
</div>


	<div class="container clearfix mt-3">

		
	  <div class="row gutter-40 col-mb-80">


	    <div class="postcontent col-lg-9">

	    	
        <div class="container">
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
                              <div class="slide" data-thumb="images/shop/thumbs/dress/3.jpg">
                                <a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress" /></a>
                              </div>
                              <div class="slide" data-thumb="images/shop/thumbs/dress/3-1.jpg">
                                <a href="images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress" /></a>
                              </div>
                              <div class="slide" data-thumb="images/shop/thumbs/dress/3-2.jpg">
                                <a href="images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress" /></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="sale-flash badge bg-danger p-2">Sale!</div>
                      </div>
                    </div>
                    <div class="col-md-6 product-desc">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div>

                        <div class="product-rating">
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-half"></i>
                          <i class="bi-star"></i>
                        </div>
                      </div>
                      <div class="line"></div>

                      <form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype="multipart/form-data">
                        <div class="quantity">
                          <input type="button" value="-" class="minus" />
                          <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
                          <input type="button" value="+" class="plus" />
                        </div>
                        <button type="submit" class="add-to-cart button m-0">Add to cart</button>
                      </form>
                      <div class="line"></div>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                      <p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
                      <ul class="iconlist">
                        <li><i class="fa-solid fa-caret-right"></i> Dynamic Color Options</li>
                        <li><i class="fa-solid fa-caret-right"></i> Lots of Size Options</li>
                        <li><i class="fa-solid fa-caret-right"></i> 30-Day Return Policy</li>
                      </ul>

                      <div class="card product-meta">
                        <div class="card-body">
                          <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
                          <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
                          <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>
                        </div>
                      </div>

                      <div class="card mt-5 pt-4 border-0 border-top rounded-0 border-default">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                            <div class="d-flex">
                              <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                              </a>
                              <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-twitter"></i>
                              </a>
                              <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                                <i class="fa-brands fa-pinterest-p"></i>
                                <i class="fa-brands fa-pinterest-p"></i>
                              </a>
                              <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                                <i class="fa-brands fa-whatsapp"></i>
                                <i class="fa-brands fa-whatsapp"></i>
                              </a>
                              <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                                <i class="fa-solid fa-rss"></i>
                                <i class="fa-solid fa-rss"></i>
                              </a>
                              <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                                <i class="fa-solid fa-envelope"></i>
                                <i class="fa-solid fa-envelope"></i>
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
                          <li class="nav-item" role="presentation"></li>
                        </ul>

                        <div id="canvas-tab-alt-content" class="tab-content">
                          <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="canvas-tabs-1-tab" tabindex="0">
                            <p>
                              Pink printed dress, woven, round neck with a keyhole and buttoned closure at the back, sleeveless, concealed zip up at left side seam, belt loops along waist with slight gathers beneath, brand appliqu?? above
                              left front hem, has an attached lining.
                            </p>
                            Comes with a white, slim synthetic belt that has a tang clasp.
                          </div>
                          <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="canvas-tabs-2-tab" tabindex="0">
                            <table class="table table-striped table-bordered">
                              <tbody>
                                <tr>
                                  <td>Size</td>
                                  <td>Small, Medium &amp; Large</td>
                                </tr>
                                <tr>
                                  <td>Color</td>
                                  <td>Pink &amp; White</td>
                                </tr>
                                <tr>
                                  <td>Waist</td>
                                  <td>26 cm</td>
                                </tr>
                                <tr>
                                  <td>Length</td>
                                  <td>40 cm</td>
                                </tr>
                                <tr>
                                  <td>Chest</td>
                                  <td>33 inches</td>
                                </tr>
                                <tr>
                                  <td>Fabric</td>
                                  <td>Cotton, Silk &amp; Synthetic</td>
                                </tr>
                                <tr>
                                  <td>Warranty</td>
                                  <td>3 Months</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="canvas-tabs-3-tab" tabindex="0">
                            <div id="reviews">
                              <ol class="commentlist">
                                <li class="comment even thread-even depth-1" id="li-comment-1">
                                  <div id="comment-1" class="comment-wrap">
                                    <div class="comment-meta">
                                      <div class="comment-author vcard">
                                        <span class="comment-avatar"> <img alt="Image" src="https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" height="60" width="60" /></span>
                                      </div>
                                    </div>
                                    <div class="comment-content">
                                      <div class="comment-author">
                                        John Doe<span><a href="#" title="Permalink to this comment">April 24, 2021 at 10:46AM</a></span>
                                      </div>
                                      <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi
                                        laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!
                                      </p>
                                      <div class="review-comment-ratings">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-half"></i>
                                      </div>
                                    </div>
                                    <div class="clear"></div>
                                  </div>
                                </li>
                                <li class="comment even thread-even depth-1" id="li-comment-2">
                                  <div id="comment-2" class="comment-wrap">
                                    <div class="comment-meta">
                                      <div class="comment-author vcard">
                                        <span class="comment-avatar"> <img alt="Image" src="https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" height="60" width="60" /></span>
                                      </div>
                                    </div>
                                    <div class="comment-content">
                                      <div class="comment-author">
                                        Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2021 at 6:00PM</a></span>
                                      </div>
                                      <p>
                                        Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint
                                        fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?
                                      </p>
                                      <div class="review-comment-ratings">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                      </div>
                                    </div>
                                    <div class="clear"></div>
                                  </div>
                                </li>
                              </ol>

                              <div class="text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#reviewFormModal" class="button button-3d m-0">Add a Review</a>
                              </div>
                              <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
                                      <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="row mb-0" id="template-reviewform" name="template-reviewform" action="#" method="post">
                                        <div class="col-6 mb-3">
                                          <label for="template-reviewform-name">Name <small>*</small></label>
                                          <div class="input-group">
                                            <div class="input-group-text"><i class="uil uil-user"></i></div>
                                            <input type="text" id="template-reviewform-name" name="template-reviewform-name" value class="form-control required" />
                                          </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                          <label for="template-reviewform-email">Email <small>*</small></label>
                                          <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="email" id="template-reviewform-email" name="template-reviewform-email" value class="required email form-control" />
                                          </div>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-12 mb-3">
                                          <label for="template-reviewform-rating">Rating</label>
                                          <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-select">
                                            <option value>-- Select One --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                          </select>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-12 mb-3">
                                          <label for="template-reviewform-comment">Comment <small>*</small></label>
                                          <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                                        </div>
                                        <div class="col-12">
                                          <button class="button button-3d m-0" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="row">
                        <div class="col-md-4 d-none d-md-block">
                          <a href="#" title="Brand Logo"><img src="images/shop/brand2.jpg" alt="Brand Logo" /></a>
                        </div>
                        <div class="col-md-8">
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="line"></div>
              <div class="w-100">
                <h4>Related Products</h4>
                <div class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
                  <div class="oc-item">
                    <div class="product">
                      <div class="product-image">
                        <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress" /></a>
                        <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress" /></a>
                        <div class="sale-flash badge bg-success p-2">50% Off*</div>
                        <div class="bg-overlay">
                          <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                            <a href="#" class="btn btn-dark me-2" title="Add to Cart"><i class="bi-bag-plus"></i></a>
                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax" title="Quick View"><i class="bi-eye"></i></a>
                          </div>
                          <div class="bg-overlay-bg bg-transparent"></div>
                        </div>
                      </div>
                      <div class="product-desc text-center">
                        <div class="product-title">
                          <h3><a href="#">Checked Short Dress</a></h3>
                        </div>
                        <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                        <div class="product-rating">
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-half"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="oc-item">
                    <div class="product">
                      <div class="product-image">
                        <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos" /></a>
                        <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos" /></a>
                        <div class="bg-overlay">
                          <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                            <a href="#" class="btn btn-dark me-2" title="Add to Cart"><i class="bi-bag-plus"></i></a>
                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax" title="Quick View"><i class="bi-eye"></i></a>
                          </div>
                          <div class="bg-overlay-bg bg-transparent"></div>
                        </div>
                      </div>
                      <div class="product-desc text-center">
                        <div class="product-title">
                          <h3><a href="#">Slim Fit Chinos</a></h3>
                        </div>
                        <div class="product-price">$39.99</div>
                        <div class="product-rating">
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-half"></i>
                          <i class="bi-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="oc-item">
                    <div class="product">
                      <div class="product-image">
                        <a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots" /></a>
                        <a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots" /></a>
                        <div class="bg-overlay">
                          <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                            <a href="#" class="btn btn-dark me-2" title="Add to Cart"><i class="bi-bag-plus"></i></a>
                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax" title="Quick View"><i class="bi-eye"></i></a>
                          </div>
                          <div class="bg-overlay-bg bg-transparent"></div>
                        </div>
                      </div>
                      <div class="product-desc text-center">
                        <div class="product-title">
                          <h3><a href="#">Dark Brown Boots</a></h3>
                        </div>
                        <div class="product-price">$49</div>
                        <div class="product-rating">
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star"></i>
                          <i class="bi-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="oc-item">
                    <div class="product">
                      <div class="product-image">
                        <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress" /></a>
                        <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress" /></a>
                        <div class="bg-overlay">
                          <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                            <a href="#" class="btn btn-dark me-2" title="Add to Cart"><i class="bi-bag-plus"></i></a>
                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax" title="Quick View"><i class="bi-eye"></i></a>
                          </div>
                          <div class="bg-overlay-bg bg-transparent"></div>
                        </div>
                      </div>
                      <div class="product-desc text-center">
                        <div class="product-title">
                          <h3><a href="#">Light Blue Denim Dress</a></h3>
                        </div>
                        <div class="product-price">$19.95</div>
                        <div class="product-rating">
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="oc-item">
                    <div class="product">
                      <div class="product-image">
                        <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses" /></a>
                        <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses" /></a>
                        <div class="sale-flash badge bg-success p-2">Sale!</div>
                        <div class="bg-overlay">
                          <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                            <a href="#" class="btn btn-dark me-2" title="Add to Cart"><i class="bi-bag-plus"></i></a>
                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax" title="Quick View"><i class="bi-eye"></i></a>
                          </div>
                          <div class="bg-overlay-bg bg-transparent"></div>
                        </div>
                      </div>
                      <div class="product-desc text-center">
                        <div class="product-title">
                          <h3><a href="#">Unisex Sunglasses</a></h3>
                        </div>
                        <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                        <div class="product-rating">
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star-fill"></i>
                          <i class="bi-star"></i>
                          <i class="bi-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </main>
            
          </div>
        </div>
        


	      <div class="single-post mb-0 card" style="border-radius: 0 !important; background: #fafafa; border: none !important">
	      	<div class="card-body">
		        <div class="entry clearfix">

		          <div class="entry-title pt-2">
		            <h2><?= $post_detail['post_title']; ?></h2>
		          </div>

		          <div class="entry-meta">
		            <ul>
		              <li><i class="fa-solid fa-clock"></i>
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
		              <li>
		                <a href="javascript:void(0)"><i class="fa-solid fa-eye"></i> <?= $post_detail['post_view']; ?></a>
		              </li>
		              <li>
		                <a href="javascript:void(0)"><i class="fa-solid fa-camera-retro"></i></a>
		              </li>
		            </ul>
		          </div>

		          <!-- <div class="entry-image">
		            <a href="#"><img src="images/blog/full/1.jpg" alt="Blog Single" /></a>
		          </div> -->
		          <div class="line line-sm"></div>
		          <div class="entry-content mt-0">

		            <?= $post_detail['post_content']; ?>
		            <hr class="mb-5">
		            <?php if($tag_all): ?>
			            <div class="tagcloud mb-3">
			            	<?php foreach($tag_all as $tag): ?>
	                  	<a href="<?= base_url().'/tag/'.$tag['tag_post_slug'].'-'.$tag['id'] ?>" title="Tag: <?= $tag['tag_post_title'] ?>"><?= $tag['tag_post_title'] ?></a>
	                  <?php endforeach; ?>
	                </div>
	              <?php endif; ?>
		            
		            <div class="clear"></div>
		            <div class="card my-2 border rounded border-default">
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                      <div class="d-flex">

                        <a href="http://www.facebook.com/sharer/sharer.php?u=<?= $link_full ?>&text=<?= $post_detail['post_title']; ?>" target="_blank" title="share facebook: <?= $post_detail['post_title']; ?>" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" >
                          <i class="fa-brands fa-facebook-f"></i>
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="https://twitter.com/intent/tweet?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>&description=<?= $post_detail['post_intro']; ?>" title="share twitter: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter">
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>&description=<?= $post_detail['post_intro']; ?>" title="share pinterest: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest">
                          <i class="fa-brands fa-pinterest-p"></i>
                          <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                        <a href="http://www.tumblr.com/share?v=3&u=<?= $link_full ?>&t=<?= $post_detail['post_intro']; ?>" title="share tumblr: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-small text-white border-transparent rounded-circle bg-tumblr">
                          <i class="fa-brands fa-tumblr"></i>
                          <i class="fa-brands fa-tumblr"></i>
                        </a>
                        
                        <a href="mailto:?subject=<?= $post_detail['post_title']; ?>&amp;body=<?= $link_full ?>" title="Share by Email" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0">
                          <i class="fa-solid fa-envelope"></i>
                          <i class="fa-solid fa-envelope"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

		            
		          </div>
		        </div>
		        <div class="line line-sm"></div>
		        <div class="row text-center text-md-start justify-content-between my-2">
		        	<?php if(isset($previous)): ?>
	              <div class="col-md-auto">
	                <a href="<?= base_url('').'/'.$previous['post_cate_slug'].'/'.$previous['post_slug'].'-'.$previous['id'].'.html'; ?>" title="<?= $previous['post_title']; ?>" class="d-inline-flex align-items-center text-dark h-text-color"><i class="uil uil-angle-left-b fs-3 me-1"></i><span><?= $previous['post_title'] ?></span></a>
	              </div>
              <?php endif; ?>
		          <?php if(isset($next)): ?>
	              <div class="col-md-auto">
	                <a href="<?= base_url('').'/'.$next['post_cate_slug'].'/'.$next['post_slug'].'-'.$next['id'].'.html'; ?>" title="<?= $next['post_title']; ?>" class="d-inline-flex align-items-center text-dark h-text-color"><span><?= $next['post_title'] ?></span><i class="uil uil-angle-right-b fs-3 ms-1"></i></a>
	              </div>
              <?php endif; ?>
            </div>

		        
		        <div class="line line-sm"></div>

		        

		        <h4>Related Post:</h4>
		        <div class="related-posts row posts-md col-mb-30">

			        	

		        	<?php foreach($related as $key2): ?>

		        		<div class="entry event col-md-6 imagescalein">
	                <div class="grid-inner row g-0 p-4 border rounded">
	                  <div class="col-lg-5 mb-lg-0">
	                    <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="entry-image overflow-hidden">
	                      <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>"/>
	                    </a>
	                  </div>
	                  <div class="col-lg-7 ps-lg-4">
	                    <div class="entry-title title-sm">
	                      <h2><a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h2>
	                    </div>
	                    <div class="entry-meta">
	                      <ul>
	                        <li>
	                          <i class="icon-calendar3"></i>
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
	                      <p><?= $key2['post_intro']; ?></p>
	                    </div>
	                  </div>
	                </div>
	              </div>

			        	
		          <?php endforeach; ?>

		          
		        </div>

		        <!-- <div id="comments" class="clearfix">
		          <h3 id="comments-title"><span>3</span> Comments</h3>

		          <ol class="commentlist clearfix">
		            <li class="comment even thread-even depth-1" id="li-comment-1">
		              <div id="comment-1" class="comment-wrap clearfix">
		                <div class="comment-meta">
		                  <div class="comment-author vcard">
		                    <span class="comment-avatar clearfix"> <img alt="Image" src="https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" class="avatar avatar-60 photo avatar-default" height="60" width="60" /></span>
		                  </div>
		                </div>
		                <div class="comment-content clearfix">
		                  <div class="comment-author">
		                    John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span>
		                  </div>
		                  <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		                  <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
		                </div>
		                <div class="clear"></div>
		              </div>
		              <ul class="children">
		                <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
		                  <div id="comment-3" class="comment-wrap clearfix">
		                    <div class="comment-meta">
		                      <div class="comment-author vcard">
		                        <span class="comment-avatar clearfix">
		                          <img
		                            alt="Image"
		                            src="https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G"
		                            class="avatar avatar-40 photo"
		                            height="40"
		                            width="40"
		                          />
		                        </span>
		                      </div>
		                    </div>
		                    <div class="comment-content clearfix">
		                      <div class="comment-author">
		                        <a href="#" rel="external nofollow" class="url">SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span>
		                      </div>
		                      <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                      <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
		                    </div>
		                    <div class="clear"></div>
		                  </div>
		                </li>
		              </ul>
		            </li>
		            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
		              <div id="comment-2" class="comment-wrap clearfix">
		                <div class="comment-meta">
		                  <div class="comment-author vcard">
		                    <span class="comment-avatar clearfix">
		                      <img
		                        alt="Image"
		                        src="https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G"
		                        class="avatar avatar-60 photo"
		                        height="60"
		                        width="60"
		                      />
		                    </span>
		                  </div>
		                </div>
		                <div class="comment-content clearfix">
		                  <div class="comment-author">
		                    <a href="https://themeforest.net/user/semicolonweb" rel="external nofollow" class="url">SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span>
		                  </div>
		                  <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		                  <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
		                </div>
		                <div class="clear"></div>
		              </div>
		            </li>
		          </ol>
		          <div class="clear"></div>

		          <div id="respond">
		            <h3>Leave a <span>Comment</span></h3>
		            <form class="row" action="#" method="post" id="commentform">
		              <div class="col-md-4 form-group">
		                <label for="author">Name</label>
		                <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
		              </div>
		              <div class="col-md-4 form-group">
		                <label for="email">Email</label>
		                <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
		              </div>
		              <div class="col-md-4 form-group">
		                <label for="url">Website</label>
		                <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
		              </div>
		              <div class="w-100"></div>
		              <div class="col-12 form-group">
		                <label for="comment">Comment</label>
		                <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
		              </div>
		              <div class="col-12 form-group">
		                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
		              </div>
		            </form>
		          </div>
		        </div> -->
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
	                          <a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><img class="rounded-0" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key3['post_image']; ?>" alt="<?= $key3['post_title']; ?>"/></a>
	                        </div>
	                      </div>
	                      <div class="col ps-3">
	                        <div class="entry-title">
	                          <h4><a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><?= $key3['post_title']; ?></a></h4>
	                        </div>
	                        <div class="entry-meta">
	                          <ul>
	                            <li><i class="icon-line-clock"></i>
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
  <meta name="twitter:image" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:url" content="<?= $link_full ?>" />
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