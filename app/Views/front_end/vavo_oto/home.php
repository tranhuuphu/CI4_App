<?= $this->extend('front_end/vavo_oto/layout_vavo'); ?>

<?= $this->section('content'); ?>


<!-- Slider ============================================= -->

<?php
	$featured_i = array_slice($featured, 0, 2);
	$featured_ii = array_slice($featured, 3);
?>

<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100" data-dots="true" data-loop="true" data-grab="false">

	<div class="swiper swiper-parent">
		<div class="swiper-wrapper">


      <?php foreach($featured_i as $key_featured_i): ?>
				<div class="swiper-slide dark">
					<div class="container">
						<div class="slider-caption slider-caption-center">
							<div>
								<h2 class="font-primary text-transform-none"><?= $key_featured_i['post_title']; ?></h2>
								<p class="fw-light font-primary d-none d-sm-block"><?= $key_featured_i['post_intro']; ?></p>
								<a href="demo-car-dealers.html" class="button button-rounded button-border button-white button-light text-transform-none">View Details</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide-bg" style="background-image: url('<?= base_url('public/upload/tinymce/post_background/').'/'.$key_featured_i['post_background']; ?>');"></div>
				</div>
			<?php endforeach; ?>

			
		</div>
		<div class="swiper-pagination"></div>
	</div>

</section>
<!-- #Slider End -->

<!-- Content============================================= -->
<section id="content">

	<div class="content-wrap pb-0" style="padding-top: 1px">

		<!-- Masonry Thums
		============================================= -->
		<div class="row m-0 dark" data-height-xs="500" data-height-sm="500" data-height-md="350" data-height-lg="350" data-height-xl="350">
			<?php foreach($featured_ii as $key_featured_ii): ?>
			<a href="demo-car-dealers.html" class="col-md-4 image_fade border-right" style="background: url('<?= base_url('public/upload/tinymce/').'/'.$key_featured_ii['post_image']; ?>') no-repeat center center / cover;">
				<div class="bg-overlay">
					<div class="bg-overlay-content text-overlay-mask dark align-items-end justify-content-start">
						<div class="portfolio-desc py-0">
							<h3><?= $key_featured_i['post_title']; ?></h3>
							<span>Xem thêm &rarr;</span>
						</div>
					</div>
				</div>
			</a>
			<?php endforeach; ?>

		</div>

		<!-- Moving car on scroll
		============================================= -->
		<div class="section mt-0" style="padding: 100px 0">
			<div class="running-car mt-6">
				<img class="car" src="<?= base_url('public/upload/vavo68/') ?>/car.jpg" alt="Image">
				<img class="wheel" src="<?= base_url('public/upload/vavo68/') ?>/car-tier.png" alt="Image">
			</div>
			<div class="container">
				<div class="row" style="position: relative;">
					<div class="col-lg-6 offset-lg-6">
						<div class="heading-block h-large">
							<h4>Vá Vỏ Xe Lưu Động Bình Dương</h4>
						</div>
						<p><?= $page_home['page_home_content'] ?>.</p>
					</div>
				</div>
			</div>
		</div> <!-- Moving car on scroll End -->




		<!-- Counter Area
		============================================= -->
		<div class="section counter-section m-0 dark">
			<div class="container align-items-stretch">
				<div class="row">
					<div class="col-lg-3 col-md-6 text-center">
						<div>
							<i class="fas fa-car fa-4x"></i>
							<div class="counter"><span data-from="10" data-to="635" data-refresh-interval="50" data-speed="1000"></span></div>
							<h5>Khách Hàng Hài Lòng</h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center">
						<div>
							<i class="fas fa-tools fa-4x"></i>
							<div class="counter"><span data-from="10" data-to="28" data-refresh-interval="418" data-speed="700"></span></div>
							<h5>Xe Mỗi Ngày</h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center">
						<div>
							<i class="fas fa-store fa-4x"></i>
							<div class="counter"><span data-from="1" data-to="3" data-refresh-interval="85" data-speed="1200"></span></div>
							<h5>Cửa Hàng</h5>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center">
						<div>
							<i class="fas fa-phone-volume fa-4x"></i>
							<div class="counter"><span data-from="10" data-to="38" data-refresh-interval="30" data-speed="900"></span></div>
							<h5>Cuộc Gọi/Ngày</h5>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Counter Area end -->


		


	</div>
</section><!-- #content end -->




<!-- <div class="section parallax scroll-detect m-0 border-0" style="background: linear-gradient(to right, #96DEDA, #50C9C3);">
  <div class="heading-block text-center border-bottom-0 mb-0">
    <h2>"Everything is designed, but some things are designed well."</h2>
  </div>
</div> -->






	

  <div class="clear"></div>



	

	<div class="container clearfix mt-5">

	  <?php for($a = 1; $a <= $i; $a++): ?>
	  	<?php if(count($post_cate[$a]) > 0): ?>
		  	<?php $post_cate_i = array_shift($post_cate[$a]); ?>
		  	<?php //dd($post_cate_i); ?>
			  <div class="fancy-title title-border">
			    <h3 class="mb-2 ls-1 text-uppercase fw-bold"><?= $cate_name[$a] ?></h3>
			  </div>
			  <div class="row col-mb-50 mb-0">

			    <div class="col-lg-7">
			      <div class="posts-md">
			        <div class="entry">
			          <div class="entry-image">
			            <a href="<?= base_url('').'/'.$post_cate_i['post_cate_slug'].'/'.$post_cate_i['post_slug'].'-'.$post_cate_i['id'].'.html'; ?>" title="<?= $post_cate_i['post_title']; ?>"><img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$post_cate_i['post_image']; ?>" alt="<?= $post_cate_i['post_title']; ?>"/></a>
			          </div>
			          <div class="entry-title title-sm">
			            <h3><a href="<?= base_url('').'/'.$post_cate_i['post_cate_slug'].'/'.$post_cate_i['post_slug'].'-'.$post_cate_i['id'].'.html'; ?>" class="fs-4" title="<?= $post_cate_i['post_title']; ?>"><?= $post_cate_i['post_title'] ?></a></h3>
			          </div>
			          <div class="entry-meta">
			            <ul>
			              <li><i class="far fa-calendar-alt"></i>
			              	<?php
				            		$datetime = (new \CodeIgniter\I18n\Time);
				            		$yearNow = $datetime::now()->getYear();
				            		$yearMonthsNow = $datetime::now()->getMonth();
				            		$yearPost = $datetime::parse($post_cate_i['updated_at'])->getYear();
				            		
				            		$yearMonthsPost = $datetime::parse($post_cate_i['updated_at'])->getMonth();
				            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
				            			echo $datetime::parse($post_cate_i['updated_at'])->humanize();
				            		}
				            		if(($yearNow - $yearPost) > 1){
				            			echo $datetime::parse($post_cate_i['updated_at'])->humanize();
				            		}else{
				            			echo $datetime::parse($post_cate_i['updated_at'])->toLocalizedString('dd MMM yyyy');
				            		}
				            		

				            	?>
			              </li>
			              <!-- <li>
			                <a href="blog-single.html#comments"><i class="icon-comments"></i> 31</a>
			              </li> -->
			              <li><i class="fas fa-camera-retro"></i></li>
			              <?php if($post_cate_i['post_status'] == 'san-pham'): ?>
				              <li>
				                <a href="javascript:void(0)"><i class="fas fa-shopping-cart"></i></a>
				              </li>
				            <?php endif; ?>
			            </ul>
			          </div>
			          <div class="entry-content">
			            <p class="mb-0 text-secondary">
			              <?= $post_cate_i['post_intro'] ?>
			            </p>
			          </div>
			        </div>
			      </div>
			    </div>

			    <div class="col-lg-5">
			      <div class="posts-sm row col-mb-30">

			      	<?php if(count($post_cate[$a]) > 0): ?>
			      		<?php foreach($post_cate[$a] as $key_post): ?>
					        <div class="entry col-12">
					          <div class="grid-inner row g-0">
					            <div class="col-auto">
					              <div class="entry-image">
					                <a href="<?= base_url('').'/'.$key_post['post_cate_slug'].'/'.$key_post['post_slug'].'-'.$key_post['id'].'.html'; ?>" title="<?= $key_post['post_title']; ?>"><img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key_post['post_image']; ?>" alt="<?= $key_post['post_title']; ?>"/></a>
					              </div>
					            </div>
					            <div class="col ps-3">
					              <div class="entry-title">
					                <h4 style="font-size: 18px"><a href="<?= base_url('').'/'.$key_post['post_cate_slug'].'/'.$key_post['post_slug'].'-'.$key_post['id'].'.html'; ?>" title="<?= $key_post['post_title']; ?>"><?= $key_post['post_title']; ?></a></h4>
					              </div>
					              <div class="entry-meta" >
					                <ul>
					                  <li><i class="far fa-calendar-alt"></i>
					                  	<?php
								            		$datetime = (new \CodeIgniter\I18n\Time);
								            		$yearNow = $datetime::now()->getYear();
								            		$yearMonthsNow = $datetime::now()->getMonth();
								            		$yearPost = $datetime::parse($key_post['updated_at'])->getYear();
								            		
								            		$yearMonthsPost = $datetime::parse($key_post['updated_at'])->getMonth();
								            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
								            			echo $datetime::parse($key_post['updated_at'])->humanize();
								            		}
								            		if(($yearNow - $yearPost) > 1){
								            			echo $datetime::parse($key_post['updated_at'])->humanize();
								            		}else{
								            			echo $datetime::parse($key_post['updated_at'])->toLocalizedString('dd MMM yyyy');
								            		}
								            		

								            	?>

					                  </li>
					                  <!-- <li>
					                    <a href="#"><i class="icon-comments"></i> 32</a>
					                  </li> -->
					                  <li><i class="fas fa-star"></i></li>
					                </ul>
					              </div>
					            </div>
					          </div>
					        </div>
				        <?php endforeach; ?>
			        <?php endif; ?>

			        
			      </div>
			    </div>
			  </div>
		  <?php endif; ?>
		<?php endfor; ?>
	</div>



	<div class="section" style="background: #F3F5F6;" style="margin: 0px">
    <div class="container">
      <div id="oc-images2" class="owl-carousel image-carousel carousel-widget posts-md" data-margin="20" data-pagi="false" data-rewind="true" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">
      	<?php if(count($blog) > 0): ?>
	      	<?php foreach($blog as $key_blog): ?>
		        <div class="oc-item">
		          <div class="entry">
		            <div class="entry-image">
		              <a href="<?= base_url('').'/'.$key_blog['post_cate_slug'].'/'.$key_blog['post_slug'].'-'.$key_blog['id'].'.html'; ?>" title="<?= $key_blog['post_title']; ?>"><img class="lazyload" data-src="<?= base_url('public/upload/tinymce/').'/'.$key_blog['post_image']; ?>" alt="<?= $key_blog['post_title']; ?>"/></a>
		            </div>
		            <div class="entry-title title-xs text-transform-none">
		              <h4><a href="<?= base_url('').'/'.$key_blog['post_cate_slug'].'/'.$key_blog['post_slug'].'-'.$key_blog['id'].'.html'; ?>" title="<?= $key_blog['post_title']; ?>"><?= $key_blog['post_title']; ?></a></h4>
		            </div>
		            <div class="entry-meta">
		              <ul>
		                <li style="color:"><i class="far fa-calendar-alt"></i>
		                	<?php
				            		$datetime = (new \CodeIgniter\I18n\Time);
				            		$yearNow = $datetime::now()->getYear();
				            		$yearMonthsNow = $datetime::now()->getMonth();
				            		$yearPost = $datetime::parse($key_blog['updated_at'])->getYear();
				            		
				            		$yearMonthsPost = $datetime::parse($key_blog['updated_at'])->getMonth();
				            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
				            			echo $datetime::parse($key_blog['updated_at'])->humanize();
				            		}
				            		if(($yearNow - $yearPost) > 1){
				            			echo $datetime::parse($key_blog['updated_at'])->humanize();
				            		}else{
				            			echo $datetime::parse($key_blog['updated_at'])->toLocalizedString('dd MMM yyyy');
				            		}
				            		

				            	?>
		                </li>
		                
		              </ul>
		            </div>
		          </div>
		        </div>


        	<?php endforeach; ?>
	      <?php endif; ?>

        
      </div>
    </div>
  </div>


	<br>
	<br>

	<section id="content">
	  <div class="content-wrap">
			<div class="container clearfix" style="margin-top: 30px !important">
		      
		    <div class="row gutter-20 col-mb-80">
		      <div class="postcontent col-lg-9 mt-5">
		        <div id="posts" class="row grid-container gutter-40">
		          <?php foreach($recent_post as $pr): ?>
		            <?php foreach($cate_2 as $ct): ?>
		              <?php if($pr['post_cate_id'] == $ct['id']): ?>

		                <div class="entry col-12" style="margin-bottom: 10px !important; margin-top: 5px !important">
		                  <div class="grid-inner row g-0">
		                    <div class="col-md-4">
		                      <a class="entry-image" href="<?= base_url('public/upload/tinymce/').'/'.$pr['post_image']; ?>" data-lightbox="image" title="<?= $pr['post_title']; ?>"><img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$pr['post_image']; ?>" alt="<?= $pr['post_title']; ?>"/></a>
		                    </div>
		                    <div class="col-md-8 ps-md-4">
		                      <div class="entry-title title-sm">
		                        <h2><a href="<?= base_url('').'/'.$pr['post_cate_slug'].'/'.$pr['post_slug'].'-'.$pr['id'].'.html'; ?>" title="<?= $pr['post_title']; ?>"><?= $pr['post_title']; ?></a></h2>
		                      </div>
		                      <div class="entry-meta">

		                        <ul>
		                          <li><i class="far fa-calendar-alt"></i>
		                          	<?php
									            		$datetime = (new \CodeIgniter\I18n\Time);
									            		$yearNow = $datetime::now()->getYear();
									            		$yearMonthsNow = $datetime::now()->getMonth();
									            		$yearPost = $datetime::parse($pr['updated_at'])->getYear();
									            		
									            		$yearMonthsPost = $datetime::parse($pr['updated_at'])->getMonth();
									            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
									            			echo $datetime::parse($pr['updated_at'])->humanize();
									            		}
									            		if(($yearNow - $yearPost) > 1){
									            			echo $datetime::parse($pr['updated_at'])->humanize();
									            		}else{
									            			echo $datetime::parse($pr['updated_at'])->toLocalizedString('dd MMM yyyy');
									            		}
									            		

									            	?>
		                          </li>
		                          <li><i class="fas fa-user-edit"></i></li>
		                          <?php if($pr['post_status'] == 'san-pham'): ?>
									              <li>
									                <a href="<?= site_url('buy').'/'.$pr['id']; ?>"><i class="fas fa-shopping-cart"></i></a>
									              </li>
									            <?php endif; ?>
		                        </ul>
		                      </div>
		                      <div class="entry-content " style="margin-top: 5px !important">
		                        <p class="text-secondary" style="margin-bottom: 0px !important"><?= $pr['post_intro']; ?></p>
		                        
		                      </div>
		                    </div>
		                  </div>
		                  
		                </div>

		              <?php endif; ?>
		            <?php endforeach; ?>
		          <?php endforeach; ?>


		          
		        </div>

		      </div>

		      <div class="sidebar col-lg-3" style="margin-top: 0px !important">
		      	<div class="card bg-white" style="margin-top: 0px !important">
	            <div class="card-body p-4" style="background-color: #5cadff; border-radius: 2px;">
	              <h4>Search by Google</h4>
	              <form method="get" action="https://google.com/search" target="_blank">
	                <div class="col-12 form-group">
	                  <input type="text" class="form-control" placeholder="Google site search" name="q" size="25">
	                  <button type="submit" class="button button-3d w-100 m-0 fw-bold" style="margin-top: 25px !important;" type="submit">FIND <i class="fas fa-search"></i></button>
	                  <input type="hidden" name="sitesearch" value="<?= base_url('/'); ?>" />
	                </div>
	              </form>
	            </div>
	          </div>

		        <div class="sidebar-widgets-wrap mt-5">
		          


		          <div class="widget clearfix2">
		            <div class="fancy-title title-border mt-">
					        <h4>Có thể bạn sẽ thích</h4>
					      </div>
		            <div class="posts-sm row col-mb-30" id="post-list-sidebar">

		              

		              <?php if($most_view != null): ?>
		                <?php foreach($most_view as $mv): ?>
		                <div class="entry col-12">
		                  <div class="grid-inner row g-0">
		                    <div class="col-auto">
		                      <div class="entry-image">
		                        <a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>"><img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$mv['post_image']; ?>" alt="<?= $mv['post_title']; ?>"/></a>
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



		            <div class="row gutter-20 col-mb-30 col-mt-30 mt-5">



		            	<div class="widget">
				          	<div class="col-sm-12 col-lg-12">
			                <div class="fancy-title title-border">
			                  <h4>Connect with Us</h4>
			                </div>


		              		<?php if(isset($page_home['facebook'])): ?>
			                <a href="<?= $page_home['facebook'] ?>" target="_blank" class="social-icon si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
			                  <i class="icon-facebook"></i>
			                  <i class="icon-facebook"></i>
			                </a>
			                <?php endif; ?>

			                

				              <?php if(isset($page_home['youtube'])): ?>
				                <a href="<?= $page_home['youtube'] ?>" target="_blank" class="social-icon si-youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube">
				                  <i class="icon-youtube"></i>
				                  <i class="icon-youtube"></i>
				                </a>
			                <?php endif; ?>
			                <?php if(isset($page_home['twitter'])): ?>
				                <a href="<?= $page_home['twitter'] ?>" target="_blank" class="social-icon si-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
				                  <i class="icon-twitter"></i>
				                  <i class="icon-twitter"></i>
				                </a>
			                <?php endif; ?>

			                <?php if(isset($page_home['pinterest'])): ?>
				                <a href="<?= $page_home['pinterest'] ?>" target="_blank" class="social-icon si-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest">
				                  <i class="icon-pinterest"></i>
				                  <i class="icon-pinterest"></i>
				                </a>
			                <?php endif; ?>


			                
			                
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
	<style type="text/css">
		.oc-item .bg-overlay .portfolio-desc h3 a {
	      opacity: 1;
	      top: auto;
	      bottom: 10px;
	      transform: none;
	      transition: opacity 0.4s ease;
	      text-shadow: 1px 0 #fff, -1px 0 #fff, 0 1px #fff, 0 -1px #fff,
	       1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
	    }
	    .btn-outline-light {
	    	background: #c9f0ff;
	    }
	</style>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
	<script type="text/javascript">
		if (window.matchMedia("(max-width: 768px)").matches) {
		  $('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    responsive:{
			        0:{
			            items:1,
			            nav:true,
			            loop:true
			        },
			    },
			    navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
			});
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