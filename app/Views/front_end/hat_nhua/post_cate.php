 <?= $this->extend('front_end/hat_nhua/layout'); ?>

<?= $this->section('content'); ?>



<div style="height: auto; clear: both;">
  <img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.'slide-nganh.jpg'; ?>" alt="MÁY MÓC THIẾT BỊ NGÀNH ĐÚC" />
</div>
<div class="container">
	<nav aria-label="breadcrumb" style="margin-bottom: 15px; margin-top: 30px;">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
	    <li class="breadcrumb-item active"><a href="<?= $link_full?>"><?= $cate_name ?></a></li>
	  </ol>
	</nav>
</div>




	
<div style="height: auto; clear: both;">
  <div class="container">
    <p style="height: 30px; clear: both;"></p>
    <div class="row">
      <div class="col-sm-3">
        <style>
          .cothebanquantam {
            display: block;
            height: auto;
          }
          @media screen and (max-width: 700px) {
            .cothebanquantam {
              display: none;
            }
          }
        </style>
        <div class="cothebanquantam">
          <div style="height: auto; border-color: #ddd; border-style: solid; border-width: 1px; margin-bottom: 30px;">
            <div style="height: 45px; border-bottom-color: #ddd; border-bottom-style: solid; border-bottom-width: 1px;">
              <p style="font-weight: 700; font-size: 18px; font-family: Verdana; padding-top: 9px; padding-left: 10px; color: #111;">DANH MỤC</p>
            </div>
            <ul class="list-group">
              <?php foreach($cate as $c): ?>
                <?php if($c['cate_status'] == 1): ?>
    						  <li class="list-group-item"><a href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>"><?= $c['cate_name']; ?></a></li>
                <?php endif; ?>
              <?php endforeach; ?>
						</ul>


          </div>
          <p style="font-weight: 600; margin-bottom: 6px; margin-top: 30px; color: #333;">Có thể bạn quan tâm</p>
          <div style="height: auto; border: #ddd; border-style: solid; border-width: 1px; border-bottom: none;">
            <div style="height: auto; border-bottom: #ddd; border-bottom-style: solid; border-bottom-width: 1px;">

              <?php foreach($most_view as $key2): ?>
                <div style="height: auto; padding: 5px;">
                  <div style="width: 30%; height: auto; float: left; padding-top: 8px; padding-bottom: 12px;">
                    <a href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>"/></a>
                  </div>
                  <div style="width: 70%; float: left; padding-top: 8px; padding-bottom: 12px;">
                    <p style="margin: 0px; padding-left: 6px;">
                      <a style="color: #111;" href="<?= base_url('').'/'.$cate_slug.'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a>
                    </p>
                    <p style="margin: 0px; padding-left: 6px; color: #999;">Liên hệ</p>
                  </div>
                </div>
                <p style="clear: both; margin: 0px;"></p>
              <?php endforeach; ?>

              <p style="clear: both; margin: 0px;"></p>
            </div>

            <!------------>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div style="height: auto;">
          <div style="height: 45px; border-bottom-color: #ddd; border-bottom-style: solid; border-bottom-width: 1px; background: #f9f9f9;">
            <h1 style="color: #ff6666; padding-top: 10px; padding-left: 10px; text-transform: uppercase; font-size: 21px;"><?= $cate_name ?></h1>
          </div>
          <div style="height: auto; margin-top: 30px; margin-bottom: 30px;">
            <div class="row">
              <style>
                .divsanpham {
                  width: 33.33%;
                  padding-left: 15px;
                  padding-right: 15px;
                }
                @media screen and (max-width: 700px) {
                  .divsanpham {
                    width: 50%;
                    padding-left: 15px;
                    padding-right: 15px;
                  }
                }
              </style>
              <?php foreach($post_cate as $key): ?>
                <div class="divsanpham">
                  <div style="width: 100%; height: auto; padding-bottom: 50px;">
                    <div style="width: 100%; height: auto;">
                      <a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>"/></a>
                    </div>
                    <div style="width: 100%; height: auto;">
                      <p style="font-weight: 600; text-align: center; margin: 0px; padding-top: 23px; padding-bottom: 6px;">
                        <a style="color: #111;" href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a>
                      </p>

                      <p style="text-align: center; color: #111; margin: 0px;">Liên hệ <span style="color: #999; text-decoration: line-through;"></span> <span style="color: #999; font-size: 12px;">/ Giá</span></p>

                      <p style="text-align: center; color: #111; margin: 0px;">Liên hệ <span style="color: #999; font-size: 12px;"> (đơn tối thiểu)</span></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

              

              

              
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