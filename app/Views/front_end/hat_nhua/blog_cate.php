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
  /*----  Main Style  ----*/
  #cards_landscape_wrap-2{
    text-align: center;
    background: #F7F7F7;
  }
  #cards_landscape_wrap-2 .container{
    padding-top: 10px; 
    padding-bottom: 60px;
  }
  #cards_landscape_wrap-2 a{
    text-decoration: none;
    outline: none;
  }
  #cards_landscape_wrap-2 .card-flyer {
    border-radius: 5px;
  }
  #cards_landscape_wrap-2 .card-flyer .image-box{
    background: #ffffff;
    overflow: hidden;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
    border-radius: 0px;
  }
  #cards_landscape_wrap-2 .card-flyer .image-box img{
    -webkit-transition:all .9s ease; 
    -moz-transition:all .9s ease; 
    -o-transition:all .9s ease;
    -ms-transition:all .9s ease; 
    width: 100%;
    height: 200px;
  }
  #cards_landscape_wrap-2 .card-flyer:hover .image-box img{
    opacity: 0.7;
    -webkit-transform:scale(1.05);
    -moz-transform:scale(1.05);
    -ms-transform:scale(1.05);
    -o-transform:scale(1.05);
    transform:scale(1.05);
  }
  #cards_landscape_wrap-2 .card-flyer .text-box{
    text-align: center;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box .text-container{
    padding: 30px 18px;
  }
  #cards_landscape_wrap-2 .card-flyer{
    background: #FFFFFF;
    margin-top: 50px;
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
  }
  #cards_landscape_wrap-2 .card-flyer:hover{
    background: #fff;
    box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    margin-top: 50px;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box p{
    margin-top: 10px;
    margin-bottom: 0px;
    padding-bottom: 0px; 
    font-size: 16px;
    text-align: justify;
    color: #000000;
  }
  #cards_landscape_wrap-2 .card-flyer .text-box h6{
    margin-top: 0px;
    margin-bottom: 4px; 
    font-weight: bold;
    text-transform: uppercase;
    font-size: 17px;
    color: #00acc1;
  }
</style>



<!-- Topic Cards -->
<div id="cards_landscape_wrap-2">
  <div class="container">
      <div class="row">
        <?php foreach($post_cate as $key2): ?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>" />
                  </div>
                  <div class="text-container">
                    <h6><?= $key2['post_title']; ?></h6>
                    <p><?= $key2['post_intro']; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
          

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