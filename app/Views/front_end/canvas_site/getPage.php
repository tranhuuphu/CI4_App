<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>




<div class="container">
	<section id="page-title" style="background-color: #3fb7fc !important;">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	      <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $page_info['page_name']; ?></a></li>
	    </ol>
	  </div>
	</section>
</div>

<div class="container clearfix mt-5">

    
  <div class="row gutter-40 col-mb-80">


    <div class="postcontent col-lg-12">
      <div class="single-post mb-0 card" style="border-radius: 0 !important; background: #f5f7f7; border: none !important">
        <div class="card-body">
          <div class="entry clearfix">

            <div class="entry-title pt-2">
              <h2><?= $page_info['page_title']; ?></h2>
            </div>

            <div class="entry-meta">
              <ul>
                <li><i class="icon-calendar3"></i>
                  <?php
                    $datetime = (new \CodeIgniter\I18n\Time);
                    $yearNow = $datetime::now()->getYear();
                    $yearMonthsNow = $datetime::now()->getMonth();
                    $yearPost = $datetime::parse($page_info['updated_at'])->getYear();
                    
                    $yearMonthsPost = $datetime::parse($page_info['updated_at'])->getMonth();
                    if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
                      echo $datetime::parse($page_info['updated_at'])->humanize();
                    }
                    elseif(($yearNow - $yearPost) > 1){
                      echo $datetime::parse($page_info['updated_at'])->humanize();
                    }else{
                      echo $datetime::parse($page_info['updated_at'])->toLocalizedString('dd MMM yyyy');
                    }
                    

                  ?>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="icon-eye"></i> <?= $page_info['page_view']; ?></a>
                </li>
                <li><i class="icon-folder-open"></i> <a href="javascript:void(0)">General</a></li>
              </ul>
            </div>

            <!-- <div class="entry-image">
              <a href="#"><img src="images/blog/full/1.jpg" alt="Blog Single" /></a>
            </div> -->
            <div class="line line-sm"></div>
            <div class="entry-content mt-0">

              <?= $page_info['page_content']; ?>
              
              <div class="clear"></div>

              
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