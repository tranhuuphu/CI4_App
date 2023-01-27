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
	<?php
  	$post_cate_1 = array_slice($post_cate, 0, 1);
  	$post_cate_2 = array_slice($post_cate, 1);
  ?>
	<div class="row col-mb-50">
	  <div class="col-lg-8">
	    
	    <div class="row posts-md col-mb-30">

	    	<div class="col-12">
          <div class="promo h-shadow-sm shadow-ts border rounded-5 overflow-hidden">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <div class="p-4 p-lg-5">
                  <h3 class="fw-semibold"><?= $post_cate_1[0]['post_title'] ?></h3>
                  <p class="mb-3 text-black-50 mt-3"><i class="icon-calendar2"></i>
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
			            			echo $datetime::parse($post_cate_1[0]['updated_at'])->toDateString();
			            		}
			            		

			            	?>

                  </p>
                  <p class="mb-3 text-black-50"><?= $post_cate_1[0]['post_intro'] ?></p>
                  <a href="<?= base_url('').'/'.$post_cate_1[0]['cate_slug'].'/'.$post_cate_1[0]['post_slug'].'-'.$post_cate_1[0]['id'].'.html'; ?>" title="<?= $post_cate_1[0]['post_title']; ?>" class="button button-rounde" style= "margin-left: 0 !important;">Read More</a>
                </div>
              </div>
              <div class="col-lg-4 mb-4 mb-lg-0 d-flex align-self-stretch order-first">
                <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$post_cate_1[0]['post_image']; ?>" alt="<?= $post_cate_1[0]['post_title']; ?>"/>
              </div>
            </div>
          </div>
        </div>

			  <?php foreach($post_cate_2 as $key): ?>
		      <div class="entry col-md-6">
		        <div class="grid-inner">
		          <div class="entry-image">
		            <a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
		          </div>
		          <div class="entry-title title-sm nott">
		            <h3><a href="<?= base_url('').'/'.$key['cate_slug'].'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h3>
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

		    <?php if($post_count > $paginate): ?>
      
	        <div class="line line-sm"></div>
	        <?= $pager->links() ?>
	      <?php endif; ?>

	      
	    </div>
	  </div>
	  <div class="col-lg-4">

	  	<div class="card topmargin2 overflow-hidden">
	      <div class="card-body">
	        <h4>Opening Hours</h4>
	        <!-- <p>Thời gian làm việc</p> -->
	        <ul class="iconlist mb-0">
	          <li><i class="icon-time color"></i> <strong>Mondays-Fridays: </strong> 10AM to 7PM</li>
	          <li><i class="icon-time color"></i> <strong>Saturdays: </strong> 11AM to 3PM</li>
	          <li><i class="icon-time text-danger"></i> <strong>Sundays: </strong> Closed</li>
	        </ul>
	        <i class="icon-time bgicon"></i>
	      </div>
	    </div>
	    
	    
	    

	    <div class="widget clearfix">
        <h4>Most View</h4>
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