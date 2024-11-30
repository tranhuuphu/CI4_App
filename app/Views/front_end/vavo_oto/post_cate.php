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

<section>
	<div class="container content-wrap2">
		<nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 60px;">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
		    <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
		  </ol>
		</nav>
	</div>
</section>

<section id="content">
	<div class="container clearfix mt-5">
		<?php
	  	$post_cate_1 = array_slice($post_cate, 0, 1);
	  	$post_cate_2 = array_slice($post_cate, 1);
	  	// dd($post_cate_1[0]['id']);
	  ?>
		<div class="row col-mb-50">
		  <div class="col-lg-8">
		    
		    <div class="row posts-md col-mb-30">

		    	<?php if($post_cate_1): ?>
		    	<div class="col-lg-12">
	          <div class="row col-mb-50">

	          	<div class="col-lg-12">
	                <div class="row col-mb-50">
	                  <article class="col-12">
	                    <div class="row">
	                      <div class="col-md-5 mb-0">
	                        <a href="<?= base_url('').'/'.$post_cate_1[0]['cate_slug'].'/'.$post_cate_1[0]['post_slug'].'-'.$post_cate_1[0]['p_id'].'.html'; ?>" title="<?= $post_cate_1[0]['post_title']; ?>" class="entry-image">
	                          <img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$post_cate_1[0]['post_image']; ?>" alt="<?= $post_cate_1[0]['post_title']; ?>"/>
	                        </a>
	                      </div>
	                      <div class="col-md-7">
	                        <div class="entry-title mt-lg-0 mt-3">
	                          
	                          <h3><a href="<?= base_url('').'/'.$post_cate_1[0]['cate_slug'].'/'.$post_cate_1[0]['post_slug'].'-'.$post_cate_1[0]['p_id'].'.html'; ?>" title="<?= $post_cate_1[0]['post_title']; ?>" class="color-underline stretched-link"><?= $post_cate_1[0]['post_title'] ?></a></h3>
	                        </div>
	                        <div class="entry-meta">
	                          <ul>
	                            <li><i class="fas fa-calendar-alt"></i> 
	                            	<?php
									            		$datetime = (new \CodeIgniter\I18n\Time);
									            		$yearNow = $datetime::now()->getYear();
									            		$yearMonthsNow = $datetime::now()->getMonth();
									            		$yearPost = $datetime::parse($post_cate_1[0]['updated_at'])->getYear();
									            		
									            		$yearMonthsPost = $datetime::parse($post_cate_1[0]['updated_at'])->getMonth();
									            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
									            			echo $datetime::parse($post_cate_1[0]['updated_at'])->humanize();
									            		}
									            		if(($yearNow - $yearPost) > 1){
									            			echo $datetime::parse($post_cate_1[0]['updated_at'])->humanize();
									            		}else{
									            			echo $datetime::parse($post_cate_1[0]['updated_at'])->toLocalizedString('dd MMM yyyy');
									            		}
									            		

									            	?>
	                            </li>
	                            <li><i class="fas fa-clock"></i> <?= ceil(strlen($post_cate_1[0]['post_content'])/700) ?> Minutes Read</li>

	                            <?php if($post_cate_1[0]['post_finish'] == 'updating'): ?>
	                            <li>
								                <i class="fas fa-stream"></i> Updating
								              </li>
								              <?php endif; ?>

								              <?php if($post_cate_1[0]['post_status'] == "san-pham"): ?>
									              <li>
									              	<a href="<?= site_url('buy').'/'.$post_cate_1[0]['id']; ?>">
										                <i class="fa-solid fa-cart-shopping"></i>
										              </a>
									              </li>
									            <?php endif; ?>
	                          </ul>
	                        </div>
	                        <div class="entry-content" style="margin-top: 7px">
	                          <p class="mb-0 text-secondary"><?= $post_cate_1[0]['post_intro'] ?></p>
	                        </div>
	                      </div>
	                    </div>
	                  </article>
	                  
	                </div>
	              </div>


	            
	            
	          </div>
	        </div>
	        <?php elseif(!$post_cate_1): ?>
		      	<div class="col-12">Bài viết đang được cập nhật</div>
		    	<?php endif; ?>

		    	<div class="adsense">
					</div>
		    	

				  <?php foreach($post_cate_2 as $key): ?>
			      <div class="entry col-md-6">
			        <div class="grid-inner">
			          <div class="entry-image">
			            <a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['p_id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
			          </div>
			          <div class="entry-title title-sm nott">
			            <h2><a href="<?= base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['p_id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h2>
			          </div>
			          <div class="entry-meta">
			            <ul>
			              <li><i class="fas far fa-calendar-alt"></i>
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
			              </li>
			              <?php if($key['post_finish'] == 'updating'): ?>
                      <li>
				                <i class="fas fa-stream"></i> Updating
				              </li>
			              <?php endif; ?>
			              <?php if($key['post_status'] == "san-pham"): ?>
				              <li>
				                <a href="<?= site_url('buy').'/'.$key['id']; ?>"><i class="fas fa-shopping-cart"></i></a>
				              </li>
				            <?php endif; ?>
			            </ul>
			          </div>
			          <div class="entry-content" style="margin-top: 7px">
			            <p class="text-secondary"><?= $key['post_intro']; ?></p>
			          </div>
			        </div>
			      </div>
			    <?php endforeach; ?>

			    <?php if($post_count > $paginate): ?>
	      
		        <div class="line mb-5"></div>
		        <?= $pager->links('post') ?>
		      <?php endif; ?>

		      
		    </div>
		  </div>
		  <div class="col-lg-4">

		  	<div class="card overflow-hidden">
	        <div class="card-body">
	          <h4>Opening Hours</h4>
	          <p>Regular time working from monday to saturday and sunday.</p>
	          <ul class="iconlist mb-0">
	            <li><i class="icon-time color"></i> <strong>Mondays-Fridays:&nbsp;</strong> 8AM to 7PM</li>
	            <li><i class="icon-time color"></i> <strong>Saturdays:&nbsp;</strong> 8AM to 7PM</li>
	            <li><i class="icon-time text-danger"></i> <strong>Sundays:&nbsp;</strong> Maybe Closed</li>
	          </ul>
	          <i class="icon-time bgicon"></i>
	        </div>
	      </div>
		  	
		  	<div class="bottommargin-lg">
				</div>
		    
		    
		    

		    <div class="widget clearfix">
	        <div class="fancy-title title-border mt-5">
		        <h4>Xem Nhiều</h4>
		      </div>
	        <div class="posts-sm row col-mb-30" id="post-list-sidebar">

	        	<?php foreach($most_view as $key3): ?>
	            <div class="entry col-12">
	              <div class="grid-inner row g-0">
	                <div class="col-auto">
	                  <div class="entry-image">
	                    <a href="<?= base_url('').'/'.$cate_slug.'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('public/upload/tinymce/').'/'.$key3['post_image']; ?>" alt="<?= $key3['post_title']; ?>"/></a>
	                  </div>
	                </div>
	                <div class="col ps-3">
	                  <div class="entry-title">
	                    <h4><a href="<?= base_url('').'/'.$cate_slug.'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><?= $key3['post_title']; ?></a></h4>
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
						            			echo $datetime::parse($key3['updated_at'])->toDateString();
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