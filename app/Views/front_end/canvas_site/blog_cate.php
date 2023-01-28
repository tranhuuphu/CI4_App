<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>




<div class="container">
	<section id="page-title">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	      <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
	    </ol>
	  </div>
	</section>
</div>


<div class="container clearfix mt-5">
  <?php
  	$blog_1 = array_slice($post_cate, 0, 3);
  	$blog_2 = array_slice($post_cate, 3);
  ?>

  <div id="posts" class="post-grid grid-container row" data-layout="fitRows">
  	

    

    <?php foreach($blog_1 as $key2): ?>
	  	<div class="entry event col-lg-4 col-md-4 col-sm-6">
		    <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow all-ts h-translatey-sm card border">
		      <div class="entry-image">
		        <a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>">
		          <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>" />
		        </a>
		      </div>
		      <div class="entry-title title-sm">
		        <h2><a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h2>
		      </div>
		      <div class="entry-meta">
		        <ul>
		          <li><i class="icon-calendar3"></i> 
              	<?php
	            		$datetime = (new \CodeIgniter\I18n\Time);
	            		$yearNow = $datetime::now()->getYear();
	            		$yearMonthsNow = $datetime::now()->getMonth();
	            		$yearPost = $datetime::parse($key2['updated_at'])->getYear();
	            		
	            		$yearMonthsPost = $datetime::parse($key2['updated_at'])->getMonth();
	            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
	            			echo $datetime::parse($key2['updated_at'])->humanize();
	            		}
	            		if(($yearNow - $yearPost) > 1){
	            			echo $datetime::parse($key2['updated_at'])->humanize();
	            		}else{
	            			echo $datetime::parse($key2['updated_at'])->toLocalizedString('dd MMM yyyy');
	            		}
	            		

	            	?>

              </li>
		        </ul>
		      </div>
		      <div class="entry-content">
		        <p><?= $key2['post_intro']; ?></p>
		        <!-- <a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="btn btn-outline-secondary">Read More</a> -->
		      </div>
		    </div>
		  </div>
	  <?php endforeach; ?>
  </div>
  <div class="clear"></div>




  <div class="row gutter-40 col-mb-80 mt-2">
    <div class="postcontent col-lg-8">
      <div id="posts" class="row grid-container gutter-40">
      	<?php foreach($blog_2 as $key2): ?>
	      	<div class="entry col-12">
		      	<div class="card bg-light imagescale h-shadow-sm shadow-ts" style="border-radius: 0;">
		          <div class="row g-0 align-items-center" style="border-radius: 0;">
		            <div class="col-md-4 d-flex align-self-stretch overflow-hidden">
		              <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>"/>
		            </div>
		            <div class="col-md-8 p-4">
		              <div class="card-body">
		                <h3 class="card-title"><a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a></h3>
		                <p class="card-text mb-2"><?= $key2['post_intro']; ?></p>
		                <p class="card-text"><small class="text-muted"><i class="icon-calendar3"></i> 
		                	<?php
				            		$datetime = (new \CodeIgniter\I18n\Time);
				            		$yearNow = $datetime::now()->getYear();
				            		$yearMonthsNow = $datetime::now()->getMonth();
				            		$yearPost = $datetime::parse($key2['updated_at'])->getYear();
				            		
				            		$yearMonthsPost = $datetime::parse($key2['updated_at'])->getMonth();
				            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
				            			echo $datetime::parse($key2['updated_at'])->humanize();
				            		}
				            		if(($yearNow - $yearPost) > 1){
				            			echo $datetime::parse($key2['updated_at'])->humanize();
				            		}else{
				            			echo $datetime::parse($key2['updated_at'])->toLocalizedString('dd MMM yyyy');
				            		}
				            		

				            	?>

		                </small></p>
		                <a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>" class="btn btn-primary">Read More</a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      <?php endforeach; ?>

	      
        
      </div>
      <?php if($post_count > $paginate): ?>
      
        <div class="line line-sm"></div>
        <?= $pager->links() ?>
      <?php endif; ?>




    </div>

    <div class="sidebar col-lg-4">
      <div class="sidebar-widgets-wrap">

      	<div class="card overflow-hidden" style="border-radius: 0">
		      <div class="card-body">
		        <h4>Opening Hours</h4>
		        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.</p> -->
		        <ul class="iconlist mb-0">
		          <li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to 7PM</li>
		          <li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
		          <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
		        </ul>
		        <i class="icon-time bgicon"></i>
		      </div>
		    </div>


        
        
        <div class="widget clearfix">
          <h4>Recent Posts</h4>
          <div class="posts-sm row col-mb-30" id="post-list-sidebar">
          	<?php foreach($most_view as $key3): ?>
              <div class="entry col-12">
                <div class="grid-inner row g-0">
                  <div class="col-auto">
                    <div class="entry-image">
                      <a href="<?= base_url('').'/'.$cate_slug.'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key3['post_image']; ?>" alt="<?= $key3['post_title']; ?>"/></a>
                    </div>
                  </div>
                  <div class="col ps-3">
                    <div class="entry-title">
                      <h4><a href="<?= base_url('').'/'.$cate_slug.'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><?= $key3['post_title']; ?></a></h4>
                    </div>
                    <div class="entry-meta">
                      <ul>
                        <li>
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

        <div class="widget clearfix">
          <h4>Tag Cloud</h4>
          <div class="tagcloud">
          	<?php foreach($tag_this as $key4): ?>
            	<a href="<?= base_url('').'/'.'tag/'.$key4['tag_post_slug']; ?>" title="<?= 'tag: '.$key4['tag_post_title']; ?>"><?= $key4['tag_post_title']; ?></a>
            <?php endforeach; ?>
            
          </div>
        </div>

        <!-- <div class="widget clearfix">
          <h4>Connect with Us</h4>
          <a href="#" class="social-icon si-colored si-small si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-delicious" data-bs-toggle="tooltip" data-bs-placement="top" title="Delicious">
            <i class="icon-delicious"></i>
            <i class="icon-delicious"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-android" data-bs-toggle="tooltip" data-bs-placement="top" title="Android">
            <i class="icon-android"></i>
            <i class="icon-android"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-gplus" data-bs-toggle="tooltip" data-bs-placement="top" title="Google Plus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
          </a>
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
          </a>
        </div> -->

        
		    

		    

        
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