<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<section id="page-title">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	      <li class="breadcrumb-item active"><a href="<?= base_url().'/'.$cate_slug ?>"><?= $cate_name ?></a></li>
	    </ol>
	  </div>
	</section>
</div>
	
<div class="container clearfix mt-5">

	<div class="row col-mb-50">
	  <div class="col-lg-8">
	    
	    <div class="row posts-md col-mb-30">

	    	

			  <?php foreach($post_cate as $key): ?>
		      <div class="entry col-md-6">
		        <div class="grid-inner">
		          <div class="entry-image">
		            <a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
		          </div>
		          <div class="entry-title title-sm nott">
		            <h3><a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h3>
		          </div>
		          <div class="entry-meta">
		            <ul>
		              <li><i class="icon-calendar3"></i>
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
		              </li>
		              <!-- <li>
		                <a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a>
		              </li> -->
		            </ul>
		          </div>
		          <div class="entry-content">
		            <p><?= $key['post_intro']; ?></p>
		          </div>
		        </div>
		      </div>
		    <?php endforeach; ?>

	      
	    </div>
	  </div>
	  <div class="col-lg-4">
	    
	    <div class="fslider testimonial p-0 border-0 shadow-none" data-animation="slide" data-arrows="false">
	      <div class="flexslider">
	        <div class="slider-wrap">
	          <div class="slide">
	            <div class="testi-image">
	              <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails" /></a>
	            </div>
	            <div class="testi-content">
	              <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
	              <div class="testi-meta">
	                Steve Jobs
	                <span>Apple Inc.</span>
	              </div>
	            </div>
	          </div>
	          <div class="slide">
	            <div class="testi-image">
	              <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails" /></a>
	            </div>
	            <div class="testi-content">
	              <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
	              <div class="testi-meta">
	                Collis Ta'eed
	                <span>Envato Inc.</span>
	              </div>
	            </div>
	          </div>
	          <div class="slide">
	            <div class="testi-image">
	              <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails" /></a>
	            </div>
	            <div class="testi-content">
	              <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
	              <div class="testi-meta">
	                John Doe
	                <span>XYZ Inc.</span>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="card topmargin overflow-hidden">
	      <div class="card-body">
	        <h4>Opening Hours</h4>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.</p>
	        <ul class="iconlist mb-0">
	          <li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to 7PM</li>
	          <li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
	          <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
	        </ul>
	        <i class="icon-time bgicon"></i>
	      </div>
	    </div>

	    <div class="widget clearfix">
        <h4>Most View</h4>
        <div class="posts-sm row col-mb-30" id="post-list-sidebar">
          <div class="entry col-12">
            <div class="grid-inner row g-0">
              <div class="col-auto">
                <div class="entry-image">
                  <a href="#"><img src="images/magazine/small/3.jpg" alt="Image" /></a>
                </div>
              </div>
              <div class="col ps-3">
                <div class="entry-title">
                  <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li>10th July 2021</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="entry col-12">
            <div class="grid-inner row g-0">
              <div class="col-auto">
                <div class="entry-image">
                  <a href="#"><img src="images/magazine/small/2.jpg" alt="Image" /></a>
                </div>
              </div>
              <div class="col ps-3">
                <div class="entry-title">
                  <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li>10th July 2021</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="entry col-12">
            <div class="grid-inner row g-0">
              <div class="col-auto">
                <div class="entry-image">
                  <a href="#"><img src="images/magazine/small/1.jpg" alt="Image" /></a>
                </div>
              </div>
              <div class="col ps-3">
                <div class="entry-title">
                  <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li>10th July 2021</li>
                  </ul>
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