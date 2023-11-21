<?= $this->extend('front_end/hat_nhua/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 30px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
    </ol>
  </nav>
</div>
<style type="text/css">
  body{
      margin:0;
      padding:0;
    }
    /* .container{
      width:90%
      margin:10px auto;
    } */
    .portfolio-menu{
      text-align:center;
    }
    .portfolio-menu ul li{
      display:inline-block;
      margin:0;
      list-style:none;
      padding:10px 15px;
      cursor:pointer;
      -webkit-transition:all 05s ease;
      -moz-transition:all 05s ease;
      -ms-transition:all 05s ease;
      -o-transition:all 05s ease;
      transition:all .5s ease;
    }

    .portfolio-item{
      /*width:100%;*/
    }
    .portfolio-item .item{
      /*width:303px;*/
      float:left;
      margin-bottom:10px;
    }

</style>
<script type="text/javascript">
  $('.portfolio-menu ul li').click(function(){
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');
    
    var selector = $(this).attr('data-filter');
      $('.portfolio-item').isotope({
        filter:selector
    });
    return  false;
   });
   $(document).ready(function() {
     var popup_btn = $('.popup-btn');
     popup_btn.magnificPopup({
     type : 'image',
     gallery : {
      enabled : true
     }
   });
  });
</script>

<div class="container" style="margin-top: 50px; margin-bottom: 50px">


  <div class="portfolio-item row">
    <?php foreach($post_cate as $key): ?>
      <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
         <a href="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" title="<?= $key['gallery_title'] ?>" class="fancylight popup-btn" data-fancybox-group="light"> 
         <img class="img-fluid" src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.$key['gallery_image'] ?>" alt="<?= $key['gallery_title'] ?>">
         </a>
      </div>
    <?php endforeach; ?>  
    
  </div>
</div>


      



<?= $this->endSection(); ?>

<?= $this->section('link_css'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
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

