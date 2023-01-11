<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

	<?php if(isset($featured)): ?> 
		<div id="oc-images" class="owl-carousel owl-carousel-full news-carousel header-stick bottommargin-lg carousel-widget" data-margin="3" data-loop="true" data-stage-padding="50" data-pagi="false" data-items-sm="1" data-items-xl="2">
		  
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
			            			echo $datetime::parse($key['updated_at'])->toDateString();
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
				            			echo $datetime::parse($post_cate_i['updated_at'])->toDateString();
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
					                <h4><a href="#"><?= $key_post['post_title']; ?></a></h4>
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
								            			echo $datetime::parse($key_post['updated_at'])->toDateString();
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
	    <h3 class="text-center">Tin mới</h3>
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
				            			echo $datetime::parse($key_blog['updated_at'])->toDateString();
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
                        <a class="entry-image" href="<?= base_url('public/upload/tinymce/image_asset/').'/'.$pr['post_image']; ?>" data-lightbox="image"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$pr['post_image']; ?>" alt="<?= $pr['post_title']; ?>"/></a>
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
								            			echo $datetime::parse($key_post['updated_at'])->toDateString();
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
                    <input type="hidden" name="sitesearch" value="{{url('/')}}" />
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
								            			echo $datetime::parse($mv['updated_at'])->toDateString();
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
              <?php if(isset($page_favicon->facebook)): ?>
                <a href="{{$page_favicon->facebook}}" target="_blank" class="social-icon si-colored si-small si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                  <i class="icon-facebook"></i>
                  <i class="icon-facebook"></i>
                </a>
              <?php endif; ?>

              <?php if(isset($page_favicon->youtube)): ?>
              <a href="{{$page_favicon->youtube}}" target="_blank" class="social-icon si-colored si-small si-delicious" data-bs-toggle="tooltip" data-bs-placement="top" title="youtube">
                <i class="icon-youtube"></i>
                <i class="icon-youtube"></i>
              </a>
              <?php endif; ?>

              <?php if(isset($page_favicon->twitter)): ?>
              <a href="{{$page_favicon->twitter}}" target="_blank" class="social-icon si-colored si-small si-android" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
              <?php endif; ?>

              <?php if(isset($page_favicon->pinterest)): ?>
              <a href="{{$page_favicon->pinterest}}" target="_blank" class="social-icon si-colored si-small si-gplus" data-bs-toggle="tooltip" data-bs-placement="top" title="pinterest">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
              </a>
              <?php endif; ?>
              {{-- 
              <a href="#" class="social-icon si-colored si-small si-stumbleupon" data-bs-toggle="tooltip" data-bs-placement="top" title="Stumbleupon">
                <i class="icon-stumbleupon"></i>
                <i class="icon-stumbleupon"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-foursquare" data-bs-toggle="tooltip" data-bs-placement="top" title="Foursquare">
                <i class="icon-foursquare"></i>
                <i class="icon-foursquare"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-forrst" data-bs-toggle="tooltip" data-bs-placement="top" title="Forrst">
                <i class="icon-forrst"></i>
                <i class="icon-forrst"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-digg" data-bs-toggle="tooltip" data-bs-placement="top" title="Digg">
                <i class="icon-digg"></i>
                <i class="icon-digg"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-spotify" data-bs-toggle="tooltip" data-bs-placement="top" title="Spotify">
                <i class="icon-spotify"></i>
                <i class="icon-spotify"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-reddit" data-bs-toggle="tooltip" data-bs-placement="top" title="Reddit">
                <i class="icon-reddit"></i>
                <i class="icon-reddit"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-blogger" data-bs-toggle="tooltip" data-bs-placement="top" title="Blogger">
                <i class="icon-blogger"></i>
                <i class="icon-blogger"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-dribbble" data-bs-toggle="tooltip" data-bs-placement="top" title="Dribbble">
                <i class="icon-dribbble"></i>
                <i class="icon-dribbble"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-flickr" data-bs-toggle="tooltip" data-bs-placement="top" title="Flickr">
                <i class="icon-flickr"></i>
                <i class="icon-flickr"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Linked In">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-rss" data-bs-toggle="tooltip" data-bs-placement="top" title="RSS">
                <i class="icon-rss"></i>
                <i class="icon-rss"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-skype" data-bs-toggle="tooltip" data-bs-placement="top" title="Skype">
                <i class="icon-skype"></i>
                <i class="icon-skype"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube">
                <i class="icon-youtube"></i>
                <i class="icon-youtube"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-vimeo" data-bs-toggle="tooltip" data-bs-placement="top" title="Vimeo">
                <i class="icon-vimeo"></i>
                <i class="icon-vimeo"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-yahoo" data-bs-toggle="tooltip" data-bs-placement="top" title="Yahoo">
                <i class="icon-yahoo"></i>
                <i class="icon-yahoo"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-github" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
                <i class="icon-github-circled"></i>
                <i class="icon-github-circled"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-tumblr" data-bs-toggle="tooltip" data-bs-placement="top" title="Trumblr">
                <i class="icon-tumblr"></i>
                <i class="icon-tumblr"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
              </a>
              <a href="#" class="social-icon si-colored si-small si-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterst">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
              </a> --}}
            </div>
            {{-- <div class="widget clearfix">
              <h4>Embed Videos</h4>
              <iframe src="player.vimeo.com/video/103927232" width="500" height="250" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div> --}}
          </div>
        </div>
      </div>
    </div>



	<div class="container clearfix">
	  <div class="row col-mb-50">
	    <div class="col-12">
	      <div class="fancy-title title-border title-center">
	        <h3>Other News</h3>
	      </div>
	      <div class="row posts-md col-mb-30">
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/11.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">Toyotas next minivan will let you shout at your kids without turning around</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 10th Nov 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 15</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/14.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 13th Nov 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 25</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/15.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">Combat malaria positive social change civil society. Fundraise inspire.</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 19th Dec 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 19</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Combat malaria positive social change civil society fundraise inspire.</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/13.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">MIT's new robot glove can give you extra fingers</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 22nd Jan 2013</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 14</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/3.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">Beyonce Dropped A '50 Shades Of Grey', Teaser On Instagram Last Night</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 19th Apr 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 55</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/4.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley Cyrus Merch</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 26th Apr 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 41</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi emo perferendis dolorem voluptatem.</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/7.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">Cross-agency coordination meaningful work inclusive community maximize.</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 31st Mar 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 43</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi emo perferendis dolorem voluptatem.</p>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-sm-6 col-lg-3">
	          <div class="grid-inner">
	            <div class="entry-image">
	              <a href="#"><img src="images/magazine/thumb/5.jpg" alt="Image" /></a>
	            </div>
	            <div class="entry-title title-xs nott">
	              <h3><a href="blog-single.html">Want To Know The New 'Star Wars' Plot? Then This Is The Post For You</a></h3>
	            </div>
	            <div class="entry-meta">
	              <ul>
	                <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
	                <li>
	                  <a href="blog-single.html#comments"><i class="icon-comments"></i> 21</a>
	                </li>
	              </ul>
	            </div>
	            <div class="entry-content">
	              <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-12">
	      <img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter" />
	    </div>
	    <div class="col-md-6 col-lg-4">
	      <div class="fancy-title title-border">
	        <h4>Recent Movies</h4>
	      </div>
	      <div class="posts-sm row col-mb-30">
	        <div class="entry col-12">
	          <div class="grid-inner row align-items-center g-0">
	            <div class="col-auto">
	              <div class="entry-image">
	                <a href="#"><img src="images/magazine/small/movie/3.jpg" alt="Image" /></a>
	              </div>
	            </div>
	            <div class="col ps-3">
	              <div class="entry-title">
	                <h4><a href="#">The Purge: Anarchy</a></h4>
	              </div>
	              <div class="entry-meta no-separator">
	                <ul>
	                  <li class="color"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
	                  <li><i class="icon-heart3 text-warning"></i> 54%</li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="grid-inner row align-items-center g-0">
	            <div class="col-auto">
	              <div class="entry-image">
	                <a href="#"><img src="images/magazine/small/movie/4.jpg" alt="Image" /></a>
	              </div>
	            </div>
	            <div class="col ps-3">
	              <div class="entry-title">
	                <h4><a href="#">Planes: Fire And Rescue</a></h4>
	              </div>
	              <div class="entry-meta no-separator">
	                <ul>
	                  <li class="color"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
	                  <li><i class="icon-heart3 text-warning"></i> 45%</li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="grid-inner row align-items-center g-0">
	            <div class="col-auto">
	              <div class="entry-image">
	                <a href="#"><img src="images/magazine/small/movie/5.jpg" alt="Image" /></a>
	              </div>
	            </div>
	            <div class="col ps-3">
	              <div class="entry-title">
	                <h4><a href="#">Sex Tape</a></h4>
	              </div>
	              <div class="entry-meta no-separator">
	                <ul>
	                  <li class="color"><i class="icon-star3"></i><i class="icon-star-half-full"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
	                  <li><i class="icon-heart3 text-default"></i> 20%</li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="grid-inner row align-items-center g-0">
	            <div class="col-auto">
	              <div class="entry-image">
	                <a href="#"><img src="images/magazine/small/movie/6.jpg" alt="Image" /></a>
	              </div>
	            </div>
	            <div class="col ps-3">
	              <div class="entry-title">
	                <h4><a href="#">Transformers: Age of Extinction</a></h4>
	              </div>
	              <div class="entry-meta no-separator">
	                <ul>
	                  <li class="color"><i class="icon-star3"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
	                  <li><i class="icon-heart3 text-default"></i> 17%</li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="grid-inner row align-items-center g-0">
	            <div class="col-auto">
	              <div class="entry-image">
	                <a href="#"><img src="images/magazine/small/movie/7.jpg" alt="Image" /></a>
	              </div>
	            </div>
	            <div class="col ps-3">
	              <div class="entry-title">
	                <h4><a href="#">How to Train Your Dragon 2</a></h4>
	              </div>
	              <div class="entry-meta no-separator">
	                <ul>
	                  <li class="color"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i></li>
	                  <li><i class="icon-heart3 text-danger"></i> 90%</li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-6 col-lg-4">
	      <div class="fancy-title title-border">
	        <h4>Musics Review</h4>
	      </div>
	      <div class="posts-sm row col-mb-30">
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Thomas Jack Presents: Tropical House Vol.5</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-heart3 text-danger"></i> 92%</li>
	              <li>Thomas Jack</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Major Lazer's Walshy Fire Presents: Jesse Royal - Royally Speaking</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-heart3 text-warning"></i> 54%</li>
	              <li>Major Lazer</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">The Weeknd - King Of The Fall</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-heart3 text-success"></i> 78%</li>
	              <li>The Weeknd-XO</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">No Flex Zone Remix Feat. Nicki Minaj</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-heart3 text-warning"></i> 45%</li>
	              <li>Nicki Minaj</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Mike Mago &amp; Dragonette - Outlines</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-heart3 text-primary"></i> 65%</li>
	              <li>Mike Mago</li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-lg-4">
	      <div class="fancy-title title-border">
	        <h4>Opinion Polls</h4>
	      </div>
	      <div class="posts-sm row col-mb-30">
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Who do you think is responsible for shooting down Malaysia Airlines flight MH17?</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><span class="text-success">Ukraine:</span> 77%</li>
	              <li><span class="text-danger">Rebels:</span> 23%</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Maradona says Messi didn't deserve Golden Ball?</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-thumbs-up text-success"></i> 54%</li>
	              <li><i class="icon-thumbs-down text-danger"></i> 46%</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Palestinian president says Israel is carrying out a genocide in Gaza?</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-thumbs-up text-success"></i> 80%</li>
	              <li><i class="icon-thumbs-down text-danger"></i> 20%</li>
	            </ul>
	          </div>
	        </div>
	        <div class="entry col-12">
	          <div class="entry-title">
	            <h4><a href="#">Can Brazil progress in the World Cup without Neymar?</a></h4>
	          </div>
	          <div class="entry-meta">
	            <ul>
	              <li><i class="icon-thumbs-up text-success"></i> 55%</li>
	              <li><i class="icon-thumbs-down text-danger"></i> 45%</li>
	            </ul>
	          </div>
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