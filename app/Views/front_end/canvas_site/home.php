<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>
	
	<?php if(isset($featured)): ?> 
		<div id="oc-images" class="owl-carousel owl-carousel-full news-carousel header-stick bottommargin-lg carousel-widget owl-loaded owl-drag" data-margin="3" data-loop="true" data-stage-padding="50" data-pagi="false" data-items-sm="1" data-items-xl="2">
		  
			<?php foreach($featured as $key): ?>
			  <div class="oc-item">
			    <a href="<?= base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
			    <div class="bg-overlay">
			      <div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
			        <div>
			          <span class="badge bg-danger"><?= $key['cate_name']; ?></span>
			          <div class="portfolio-desc px-0">
			            <h3><a href="<?= base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h3>
			            <span>
			            	<?php
			            		$datetime = (new \CodeIgniter\I18n\Time);
			            		$yearNow = $datetime::now()->getYear();
			            		$yearMonthsNow = $datetime::now()->getMonth();
			            		$yearPost = $datetime::parse($key['updated_at'])->getYear();
			            		
			            		$yearMonthsPost = $datetime::parse($key['updated_at'])->getMonth();
			            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
			            			echo $datetime::parse($key['updated_at'])->humanize();
			            		}
			            		if(($yearNow - $yearPost) > 1){
			            			echo $datetime::parse($key['updated_at'])->humanize();
			            		}else{
			            			echo $datetime::parse($key['updated_at'])->toLocalizedString('dd MMM yyyy');
			            		}
			            		

			            	?>
			            </span>
			          </div>
			        </div>
			      </div>
			      <!-- <div class="rounded-skill" data-color="#e74c3c" data-trackcolor="rgba(255,255,255,0.4)" data-size="80" data-percent="75" data-width="3" data-animate="3000">7.5</div> -->
			    </div>
			  </div>
		  <?php endforeach; ?>
		  
		  
		  
		  
		</div>

	<?php endif; ?>


	

	<div class="container clearfix">
	  <!-- <div class="bottommargin-lg">
	    <img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter my-0" />
	  </div> -->

	  <?php for($a = 1; $a <= $i; $a++): ?>
	  	<?php if(count($post_cate[$a]) > 0): ?>
		  	<?php $post_cate_i = array_shift($post_cate[$a]); ?>
		  	<?php //dd($post_cate_i); ?>
			  <div class="fancy-title title-border">
			    <h3><?= $cate_name[$a] ?></h3>
			  </div>
			  <div class="row col-mb-50 mb-0">

			    <div class="col-lg-7">
			      <div class="posts-md">
			        <div class="entry">
			          <div class="entry-image">
			            <a href="<?= base_url('').'/'.$post_cate_i['post_cate_slug'].'/'.$post_cate_i['post_slug'].'-'.$post_cate_i['id'].'.html'; ?>" title="<?= $post_cate_i['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$post_cate_i['post_image']; ?>" alt="<?= $post_cate_i['post_title']; ?>"/></a>
			          </div>
			          <div class="entry-title title-sm">
			            <h3><a href="<?= base_url('').'/'.$post_cate_i['post_cate_slug'].'/'.$post_cate_i['post_slug'].'-'.$post_cate_i['id'].'.html'; ?>" title="<?= $post_cate_i['post_title']; ?>"><?= $post_cate_i['post_title'] ?></a></h3>
			          </div>
			          <div class="entry-meta">
			            <ul>
			              <li><i class="icon-calendar3"></i>
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
			              <li>
			                <a href="javascript:void(0)"><i class="icon-camera-retro"></i></a>
			              </li>
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
					                <a href="<?= base_url('').'/'.$key_post['post_cate_slug'].'/'.$key_post['post_slug'].'-'.$key_post['id'].'.html'; ?>" title="<?= $key_post['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key_post['post_image']; ?>" alt="<?= $key_post['post_title']; ?>"/></a>
					              </div>
					            </div>
					            <div class="col ps-3">
					              <div class="entry-title">
					                <h4><a href="<?= base_url('').'/'.$key_post['post_cate_slug'].'/'.$key_post['post_slug'].'-'.$key_post['id'].'.html'; ?>" title="<?= $key_post['post_title']; ?>"><?= $key_post['post_title']; ?></a></h4>
					              </div>
					              <div class="entry-meta">
					                <ul>
					                  <li><i class="icon-calendar3"></i>
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



	  <!-- <div class="fancy-title title-border title-center">
	    <h3>Featured Video</h3>
	  </div>
	  <iframe src="https://player.vimeo.com/video/99895335" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe> -->
	</div>
	<div class="section dark" style="margin-bottom: 15px !important;">
	  <div class="container clearfix">
	    <!-- <h3 class="text-center">Tin mới</h3> -->
	    <div id="oc-images2" class="owl-carousel image-carousel carousel-widget posts-md" data-margin="20" data-pagi="false" data-rewind="true" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">
	      
	      <?php if(count($blog) > 0): ?>
	      	<?php foreach($blog as $key_blog): ?>
			      <div class="oc-item">
			        <div class="entry">
			          <div class="entry-image">
			            <a href="<?= base_url('').'/'.$key_blog['post_cate_slug'].'/'.$key_blog['post_slug'].'-'.$key_blog['id'].'.html'; ?>" title="<?= $key_blog['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key_blog['post_image']; ?>" alt="<?= $key_blog['post_title']; ?>"/></a>
			          </div>
			          <div class="entry-title title-xs nott">
			            <h4><a href="blog-single.html"><?= $key_blog['post_title']; ?></a></h4>
			          </div>
			          <div class="entry-content">
			            <p class="mb-0 text-secondary">
			              <?= $post_cate_i['post_intro'] ?>
			            </p>
			          </div>
			          <div class="entry-meta">
			            <ul>
			              <li><i class="icon-calendar3"></i>
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
			              <!-- <li>
			                <a href="blog-single.html#comments"><i class="icon-comments"></i> 32</a>
			              </li> -->
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
	<div class="container clearfix" style="margin-top: 50px !important">
      
      <div class="row gutter-20 col-mb-80">
        <div class="postcontent col-lg-9">
          <div id="posts" class="row grid-container gutter-40">
            <?php foreach($recent_post as $pr): ?>
              <?php foreach($cate_2 as $ct): ?>
                <?php if($pr['post_cate_id'] == $ct['id']): ?>

                  <div class="entry col-12" style="margin-bottom: 10px !important; margin-top: 5px !important">
                    <div class="grid-inner row g-0">
                      <div class="col-md-4">
                        <a class="entry-image" href="<?= base_url('public/upload/tinymce/image_asset/').'/'.$pr['post_image']; ?>" data-lightbox="image" title="<?= $pr['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$pr['post_image']; ?>" alt="<?= $pr['post_title']; ?>"/></a>
                      </div>
                      <div class="col-md-8 ps-md-4">
                        <div class="entry-title title-sm">
                          <h2><a href="<?= base_url('').'/'.$pr['post_cate_slug'].'/'.$pr['post_slug'].'-'.$pr['id'].'.html'; ?>" title="<?= $pr['post_title']; ?>"><?= $pr['post_title']; ?></a></h2>
                        </div>
                        <div class="entry-meta">
                          <ul>
                            <li><i class="icon-calendar3"></i>
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

        <div class="sidebar col-lg-3">
          <div class="sidebar-widgets-wrap">
            <div class="widget subscribe-widget2 clearfix">
              <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
                <div class="fancy-title title-border">
                  <h4>Search Google</h4>
                </div>


                <form method="get" action="http:www.google.com/search" target="_blank">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Google site search" name="q" size="25">
                    <button type="submit" class="button button-3d w-100 button-small m-0" style="margin-top: 25px !important;" type="submit">Tìm kiếm</button>
                    <input type="hidden" name="sitesearch" value="<?= base_url('/'); ?>" />
                  </div>

                </form>
              

                

              </div>
            </div>


            <div class="widget clearfix">
              <h4>Có thể bạn sẽ thích</h4>
              <div class="posts-sm row col-mb-30" id="post-list-sidebar">

                

                <?php if($most_view): ?>
                  <?php foreach($most_view as $mv): ?>
                  <div class="entry col-12">
                    <div class="grid-inner row g-0">
                      <div class="col-auto">
                        <div class="entry-image">
                          <a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$mv['post_image']; ?>" alt="<?= $mv['post_title']; ?>"/></a>
                        </div>
                      </div>
                      <div class="col ps-3">
                        <div class="entry-title">
                          <h4><a href="<?= base_url('').'/'.$mv['post_cate_slug'].'/'.$mv['post_slug'].'-'.$mv['id'].'.html'; ?>" title="<?= $mv['post_title']; ?>"><?= $mv['post_title']; ?></a></h4>
                        </div>
                        <div class="entry-meta">
                          <ul>
                            <li><i class="icon-calendar1"></i>
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
            <div class="widget clearfix">
              <h4>Connect with Us</h4>

              <?php if(isset($page_home['facebook'])): ?>
                <a href="<?= $page_home['facebook'] ?>" target="_blank" class="social-icon si-colored si-small si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                  <i class="icon-facebook"></i>
                  <i class="icon-facebook"></i>
                </a>
              <?php endif; ?>

              <?php if(isset($page_home['youtube'])): ?>
              <a href="<?= $page_home['youtube'] ?>" target="_blank" class="social-icon si-colored si-small si-youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="youtube">
                <i class="icon-youtube"></i>
                <i class="icon-youtube"></i>
              </a>
              <?php endif; ?>

              <?php if(isset($page_home['twitter'])): ?>
              <a href="<?= $page_home['twitter'] ?>" target="_blank" class="social-icon si-colored si-small si-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
              <?php endif; ?>

              <?php if(isset($page_home['pinterest'])): ?>
              <a href="<?= $page_home['pinterest'] ?>" target="_blank" class="social-icon si-colored si-small si-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="pinterest">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
              </a>
              <?php endif; ?>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>



	


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