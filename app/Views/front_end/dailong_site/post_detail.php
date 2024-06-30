<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>


<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 60px; padding: 30px 15px 7px 15px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="far fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'-'.$cate_detail['id'] ?>" class="fw-bold"><?= $cate_detail['cate_name'] ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $post_detail['post_title']; ?></li>
    </ol>
  </nav>
</div>



<section id="content">
  <div class="content-wrap">
		<div class="container clearfix mt-3">

			
		  <div class="row gutter-40 col-mb-80">


		    <div class="postcontent col-lg-9">
		      <div class="single-post mb-0 card" style="border-radius: 0 !important; background: #f5f8fc; border: none !important">
		      	<div class="card-body">
			        <div class="entry clearfix">

			          <div class="entry-title pt-2">
			            <h2><?= $post_detail['post_title']; ?></h2>
			          </div>

			          <div class="entry-meta">
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
			              <li>
			                <i class="far fa-eye"></i> <?= $post_detail['post_view']; ?>
			              </li>
			              <li>
			                <i class="fas fa-camera-retro"></i>
			              </li>
			              <li>
			                <i class="fas fa-clock"></i> <?= ceil(strlen($post_detail['post_content'])/700) ?> Minutes Read
			              </li>
			              <?php if($post_detail['post_finish'] == 'updating'): ?>
				              <li>
				              	
					                <i class="fas fa-stream"></i> Updating
					              
				              </li>
				            <?php endif; ?>
			            </ul>
			          </div>

			          <!-- <div class="entry-image">
			            <a href="#"><img src="images/blog/full/1.jpg" alt="Blog Single" /></a>
			          </div> -->
			          <div class="line line-sm"></div>
			          <div class="entry-content mt-0">

			            <?= $post_detail['post_content']; ?>
			            
			            <!-- Google ads -->
									<ins class="adsbygoogle"
									     style="display:block; text-align:center;"
									     data-ad-layout="in-article"
									     data-ad-format="fluid"
									     data-ad-client="ca-pub-1259040705079233"
									     data-ad-slot="3651284368"></ins>
									<script>
									     (adsbygoogle = window.adsbygoogle || []).push({});
									</script>
				          <!-- End Google ads -->

			            <?= $post_detail['post_content2']; ?>

			            
			            <?php if($tag_all): ?>
				            <div class="tagcloud mb-3">
				            	<?php foreach($tag_all as $tag): ?>
		                  	<a href="<?= base_url().'/tag/'.$tag['tag_post_slug'].'-'.$tag['id'] ?>" title="Tag: <?= $tag['tag_post_title'] ?>"><?= $tag['tag_post_title'] ?></a>
		                  <?php endforeach; ?>
		                </div>
		              <?php endif; ?>
			            
			            <div class="clear"></div>

			            

			            <div class="card my-2 border rounded border-default mt-3">
	                  <div class="card-body p-3">
	                    <div class="d-flex align-items-center justify-content-between">
	                      <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
	                      <div class="d-flex">
	                      	<a href="http://www.facebook.com/sharer/sharer.php?u=<?= $link_full ?>&text=<?= $post_detail['post_title']; ?>" target="_blank" title="share facebook: <?= $post_detail['post_title']; ?>" class="social-icon si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                          </a>

                          <a href="https://twitter.com/intent/tweet?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $post_detail['post_intro']; ?>" title="share twitter: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                          </a>

                          <a href="https://pinterest.com/pin/create/button/?url=<?= $link_full ?>&media=<?= base_url('public/upload/tinymce').'/'.$image ?>&description=<?= $post_detail['post_intro']; ?>" title="share pinterest: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                          </a>

                          <a href="http://www.tumblr.com/share?v=3&u=<?= $link_full ?>&t=<?= $post_detail['post_intro']; ?>" title="share tumblr: <?= $post_detail['post_title']; ?>" target="_blank" class="social-icon si-borderless si-tumblr">
                            <i class="icon-tumblr"></i>
                            <i class="icon-tumblr"></i>
                          </a>

                          <a href="mailto:?subject=<?= $post_detail['post_title']; ?>&amp;body=<?= $link_full ?>" title="Share by Email" class="social-icon si-borderless si-email3">
                            <i class="icon-email3"></i>
                            <i class="icon-email3"></i>
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

			        		<div class="entry event col-md-6 imagescalein">
		                <div class="grid-inner row g-0 p-4 border rounded bg-white">
		                  <div class="col-lg-5 mb-lg-0">
		                    <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="entry-image overflow-hidden">
		                      <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>"/>
		                    </a>
		                  </div>
		                  <div class="col-lg-7 ps-lg-4">
		                    <div class="entry-title title-sm">
		                      <h2><a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h2>
		                    </div>
		                    <div class="entry-meta">
		                      <ul>
		                        <li>
		                          <i class="fas fa-calendar-alt"></i>
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

		                        <?php if($key2['post_status'] == "san-pham"): ?>
								              <li>
								              	<a href="<?= site_url('buy').'/'.$key2['id']; ?>">
									                <i class="fas fa-shopping-cart"></i>
									              </a>
								              </li>
								            <?php endif; ?>

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
		                          <a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><img class="rounded-0" class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key3['post_image']; ?>" alt="<?= $key3['post_title']; ?>"/></a>
		                        </div>
		                      </div>
		                      <div class="col ps-3">
		                        <div class="entry-title">
		                          <h4><a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><?= $key3['post_title']; ?></a></h4>
		                        </div>
		                        <div class="entry-meta">
		                          <ul>
		                            <li><i class="fas fa-calendar-alt"></i>
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

		        <ins class="adsbygoogle"
						     style="display:block"
						     data-ad-format="fluid"
						     data-ad-layout-key="-3x+cj+71-em-60"
						     data-ad-client="ca-pub-1259040705079233"
						     data-ad-slot="3408084668"></ins>
						<script>
						     (adsbygoogle = window.adsbygoogle || []).push({});
						</script>
		        
		      </div>

		      

          <div class="tabs mb-4 clearfix mt-5" id="sidebar-tabs">
            <ul class="tab-nav clearfix">
              <li><a href="#tabs-1">Ảnh Xem Nhiều <i class="fas fa-images"></i></a></li>
            </ul>
          </div>

          <div id="portfolio" class="portfolio row grid-container g-0 text-center" data-layout="fitRows">
            <?php if($most_view_g != null): ?>
              <?php foreach($most_view_g as $mv): ?>
                <article class="portfolio-item col-lg-4 col-md-4 col-sm-3 col-sx-6 col-12 pf-media pf-icons">
                  <div class="grid-inner">
                    <div class="portfolio-image">
                      <a href="portfolio-single.html">
                        <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$mv['gallery_image']; ?>" alt="<?= $mv['gallery_title']; ?>"/>
                      </a>

                      <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                          <a
                            href="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$mv['gallery_image']; ?>"
                            class="overlay-trigger-icon bg-light text-dark"
                            data-hover-animate="fadeInDownSmall"
                            data-hover-animate-out="fadeOutUpSmall"
                            data-hover-speed="350"
                            data-lightbox="image"
                            title="<?= $mv['gallery_title']; ?>"
                          >
                            <i class="fas fa-expand-alt"></i>
                          </a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                      </div>
                    </div>

                    <div class="portfolio-desc" style="margin-top: 3px !important; padding-top: 3px !important;">
                      <h6><a href="<?= base_url('').'/'.$cate_gallery_slug['cate_slug'].'/'.$mv['gallery_title_slug'].'-'.$mv['id'].'.html' ?>"><?= $mv['gallery_title']; ?></a></h6>
                    </div>
                  </div>
                </article>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="col-md-12 d-grid gap-2">
            <a href="<?= base_url('').'/'.$cate_gallery_slug['cate_slug'].'-'.$cate_gallery_slug['id'] ?>" class="btn btn-light">Watch More <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>


					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-format="autorelaxed"
					     data-ad-client="ca-pub-1259040705079233"
					     data-ad-slot="7155757980"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>

		      


		    </div>
		  </div>
		</div>
	</div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('link_css'); ?>
	
	<link rel="stylesheet" href="<?= base_url('public/site_asset/dailong_asset'); ?>/css/IMAGG_default.css">


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
	
	<script src="<?= base_url('public/site_asset/dailong_asset'); ?>/js/IMAGG.js"></script>
	<script type="text/javascript">
		$(".entry-content img").addClass('triggerIMAGG');
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
  <meta property="og:image" content="<?= base_url('public/upload/tinymce').'/'.$image ?>"/>
  <meta property="og:image:secure_url" content="<?= base_url('public/upload/tinymce').'/'.$image ?>" />
	<meta property="og:image:type" content="image/jpeg" />
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