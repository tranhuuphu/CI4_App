<?= $this->extend('front_end/hat_nhua/layout'); ?>

<?= $this->section('content'); ?>

<!---slider section--->



<?php if($carousel): ?>
  <?php $count = count($carousel); $m = 1; ?>
  <div>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <?php for ($n = 0; $n < $count; ++$n): ?>
          <li data-target="#demo" data-slide-to="<?= $n ?>" <?php if($n == 0){echo 'class="active"';} ?>></li>
        <?php endfor; ?>

      </ul>
      <div class="carousel-inner">
        <?php foreach($carousel as $crs): ?>
          <div class="carousel-item <?php if($m == 1){echo "active";} ?>" >
            <img src="<?= base_url('public/upload/tinymce/').'/'.$crs['carousel_image']; ?>" alt="<?= $crs['carousel_title']; ?>" />

            <div class="carousel-caption"></div>
          </div>
          <?php  $m += 1; ?>
        <?php endforeach; ?>



      </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!---close slider section---->
  </div>
<?php endif; ?>


<div style="background: #ffffff;">
  <div class="container" style="padding-top: 50px; padding-bottom: 38px;">
    <div style="width: 100%; padding-bottom: 28px;">
      <h1 style="color: #039303; text-align: center; font-size: 32px;">SẢN PHẨM CỦA CHÚNG TÔI</h1>
    </div>

    <div class="row">
      <style>
        .nganhnghe_show_home {
          width: 100%;
          background: #ffcc33;
          margin-bottom: 30px;
          position: relative;
        }
        .nganhnghe_show_home img {
          vertical-align: middle;
          width: 100%;
        }
        .nganhnghe_show_home .content {
          position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0);
          background: rgba(0, 0, 0, 0.5);
          color: #f1f1f1;
          width: 100%;
          padding: 10px;
        }
        .mce-toc{
          display: none;
        }

        .text_slogan_nganh {
          text-align: center;
          font-family: Verdana;
          padding-bottom: 36px;
          margin-top: -15px;
          padding-left: 86px;
          padding-right: 86px;
        }
        @media screen and (max-width: 700px) {
          .text_slogan_nganh {
            text-align: center;
            font-family: Verdana;
            padding-bottom: 36px;
            margin-top: -15px;
            padding-left: 0px;
            padding-right: 0px;
          }
        }
      </style>
        <?php foreach($cate as $c): ?>
          <?php if($c['cate_status'] == 1): ?>
            <div class="col-sm-6">
              <div class="nganhnghe_show_home">
                <a href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>">
                  <img src="<?= base_url('public/upload/tinymce/').'/'.$c['cate_image']; ?>" alt="<?= $c['cate_name']; ?>" />
                </a>
                <div class="content">
                  <p style="text-align: center; text-transform: uppercase; padding: 0px; margin: 0px; font-weight: 500;">
                    <a style="color: #ffffff;" href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>"><?= $c['cate_name']; ?></a>
                  </p>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      
    </div>
  </div>
</div>
<!---cua thietlapchung--->


  <?php if(count($post_cate[1]) > 0): ?>
    <div style="background: #039303; margin: 0px;">
      <div style="height: auto; clear: both; text-align: center;">
        <img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.'slide-nganh.jpg'; ?>" alt="MÁY MÓC THIẾT BỊ NGÀNH ĐÚC" />
      </div>

      <div class="container">
        <div style="width: 100%;">
          <h2 style="text-align: center; padding-bottom: 30px; padding-top: 50px; text-transform: uppercase;">
            <a style="color: #ffffff;" href="<?= base_url('').'/'.$cate_slug[1].'-'.$id_cate[1]; ?>" title = "<?= $cate_name[1]; ?>"><?= $cate_name[1] ?></a>
          </h2>

          <p class="text_slogan_nganh" style="color: #ececec;">Chuyên cung cấp máy bắn sáp, máy bắn bi, máy bắn cát, máy tách sáp, tách vỏ, máy mài nhám 2 đầu,.. và các loại máy móc ngành đúc khác</p>
        </div>
        <style>
          .divsanpham {
            width: 25%;
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

        <div class="row">
          <?php foreach($post_cate[1] as $key_post): ?>
            <div class="divsanpham">
              <div style="width: 100%; height: auto; padding-bottom: 50px;">
                <div style="width: 100%; height: auto;">
                  <a href="<?= base_url('').'/'.$key_post['post_cate_slug'].'/'.$key_post['post_slug'].'-'.$key_post['id'].'.html'; ?>" title="<?= $key_post['post_title']; ?>"><img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key_post['post_image']; ?>" alt="<?= $key_post['post_title']; ?>"/></a>
                </div>
                <div style="width: 100%; height: auto;">
                  <p style="font-weight: 600; text-align: center; margin: 0px; padding-top: 23px; padding-bottom: 6px;">
                    <a style="color: #ffffff;" href="<?= base_url('').'/'.$key_post['post_cate_slug'].'/'.$key_post['post_slug'].'-'.$key_post['id'].'.html'; ?>" title="<?= $key_post['post_title']; ?>"><?= $key_post['post_title']; ?></a>
                  </p>

                  <p style="text-align: center; color: #ffffff; margin: 0px;">Liên hệ <span style="color: #dddddd; font-size: 12px;">/ Giá</span></p>

                  <p style="text-align: center; color: #ffffff; margin: 0px;">Liên hệ <span style="color: #dddddd; font-size: 12px;"> (đơn tối thiểu)</span></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          

        </div>
      </div>
    </div>

  <?php endif; ?>




<?php if($i == 2): ?>
  <?php if(count($post_cate[2]) > 0): ?>
    <div style="background: #ffffff; margin: 0px;">
      <div style="height: auto; clear: both; text-align: center;">
        <img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.'slide-nganh.jpg'; ?>" alt="LINH PHỤ KIỆN NGÀNH ĐÚC" />
      </div>

      <div class="container">
        <div style="width: 100%;">
          <h2 style="text-align: center; padding-bottom: 30px; padding-top: 50px; text-transform: uppercase;">
            <a style="color: #039303;" href="<?= base_url('').'/'.$cate_slug[2].'-'.$id_cate[2]; ?>" title = "<?= $cate_name[2] ?>"><?= $cate_name[2] ?></a>
          </h2>

          <p class="text_slogan_nganh" style="color: #666666;">Chúng tôi chuyên cung cấp nguyên phụ liệu phục vụ cho ngành sản xuất lò nung, đúc cơ khí chính xác</p>
        </div>
        <style>
          .divsanpham {
            width: 25%;
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

        <div class="row">
          <?php foreach($post_cate[2] as $key_post2): ?>
            <div class="divsanpham">
              <div style="width: 100%; height: auto; padding-bottom: 50px;">
                <div style="width: 100%; height: auto;">
                  <a href="<?= base_url('').'/'.$key_post2['post_cate_slug'].'/'.$key_post2['post_slug'].'-'.$key_post2['id'].'.html'; ?>" title="<?= $key_post2['post_title']; ?>"><img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key_post2['post_image']; ?>" alt="<?= $key_post2['post_title']; ?>"/></a>
                </div>
                <div style="width: 100%; height: auto;">
                  <p style="font-weight: 600; text-align: center; margin: 0px; padding-top: 23px; padding-bottom: 6px;">
                    <a style="color: #111111;" href="<?= base_url('').'/'.$key_post2['post_cate_slug'].'/'.$key_post2['post_slug'].'-'.$key_post2['id'].'.html'; ?>" title="<?= $key_post2['post_title']; ?>"><?= $key_post2['post_title']; ?></a>
                  </p>

                  <p style="text-align: center; color: #111111; margin: 0px;">Liên hệ <span style="color: #666666; font-size: 12px;">/ Giá</span></p>

                  <p style="text-align: center; color: #111111; margin: 0px;">Liên hệ <span style="color: #666666; font-size: 12px;"> (đơn tối thiểu)</span></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>



        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>



<!--thietlapchung-->
<div style="height: auto; clear: both; text-align: center;">
  <img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.'slide-nganh.jpg'; ?>" alt="MÁY MÓC THIẾT BỊ NGÀNH ĐÚC" />
</div>
<?php if($page_home_site != null): ?>
<div style="background: #039303;">
  <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    <div style="width: 100%; padding-bottom: 30px; text-align: center;">
      <h2><a style="color: #ffffff;" href="<?= base_url('').'/'.$page_home_site['page_slug'].'-'.$page_home_site['id'].'.html'; ?>" title = "<?= $c['cate_name']; ?>">VỀ CHÚNG TÔI</a></h2>

      <p style="color: #eeeeee;">Chất Lượng Tiên Phong - Uy Tín Lâu Dài</p>
    </div>
    <div class="row">
      <div class="col-sm-6" style="color: #ffffff;">
        <?= $page_home_site['page_content']; ?>


      </div>
      <div class="col-sm-6">
        <a href="<?= base_url('').'/'.$page_home_site['page_slug'].'-'.$page_home_site['id'].'.html'; ?>" title = "<?= $c['cate_name']; ?>"><img style="width: 100%; padding-top: 5px;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$page_home_site['page_image']; ?>" alt="<?= $page_home_site['page_title']; ?>" /></a>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>


<div style="background: #ffffff;">
  <div class="container" style="padding-top: 50px; padding-bottom: 38px;">
    <div style="width: 100%; padding-bottom: 10px; text-align: center;">
      <h2 style="color: #039303;">HỖ TRỢ TƯ VẤN KHÁCH HÀNG</h2>
    </div>

    <div class="row" style="margin-top: 15px;">
      <div class="col-sm-12" style="padding-top: 13px;">
        <div style="width: 100%; height: auto; border: #cccccc; border-style: solid; border-width: 1px; border-radius: 10px 10px 10px 10px; padding: 18px; color: #111111;">

          <?php if($page_home['name_co'] != null): ?>
            <h5><span style="text-transform: uppercase; font-weight: bold;">
            
              <?= $page_home['name_co']; ?>
            
            </span></h5>
          <?php endif; ?>
          <?php if($page_home['address'] != null): ?>
            <p><strong>Địa chỉ: </strong>
            
              <?= $page_home['address']; ?>
            
            </p>
          <?php endif; ?>

          
          <?php if($page_home['phone'] != null): ?>
            <p><strong>Điện thoại: </strong> <a style="color: #111111;" href="tel:<?= $page_home['phone']; ?>">
              0<?= number_format($page_home['phone'], 0, ',', ' '); ?>
            </a></p>
          <?php endif; ?>
          

          <?php if($page_home['email'] != null): ?>
            <p><strong>Email:</strong> <a style="color: #111111;" href="mailto:<?= $page_home['email']; ?>"><?= $page_home['email']; ?></a></p>
          <?php endif; ?>

        </div>
      </div>



    </div>
  </div>
</div>
<style>
  .whyme_img {
    width: 100%;
  }
  .whyme_tomtat {
    width: 100%;
  }
  @media screen and (max-width: 700px) {
    .whyme_img {
      width: 38%;
    }
    .whyme_tomtat {
      width: 100%;
      text-align: center;
    }
  }
</style>
<div style="background: #039303;">
  <style>
    .chitiet_whyme {
      width: 25%;
      padding-left: 15px;
      padding-right: 15px;
    }
    @media screen and (max-width: 700px) {
      .chitiet_whyme {
        width: 50%;
        padding-left: 15px;
        padding-right: 15px;
      }
    }
  </style>
  <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    <div style="width: 100%; padding-bottom: 30px; text-align: center;">
      <h2 style="color: #ffffff;">HÃY TIN TƯỞNG LỰA CHỌN CHÚNG TÔI</h2>
      <p style="color: #eeeeee;">Dưới đây là 4 lý do tại sao khách hàng nên lựa chọn sử dụng sản phẩm của <?= $page_home['name_co']; ?>.</p>
    </div>
    <div class="row">
      <div class="chitiet_whyme">
        <div style="height: auto; width: 100%; text-align: center;">
          <!-- <img src="whyme_images/1956/Máº«u-vÃ¬-sao1.png" /> -->
          <i class="fa-solid fa-thumbs-up fa-2xl" style="color: #ffffff"></i>
          <p style="margin-top: 30px; font-size: 21px; font-weight: bold; color: #ffffff;">CHẤT LƯỢNG</p>
          <p style="text-align: justify; color: #ffffff;">Sản phẩm đa dạng mẫu mã và chủng loại. Đạt tiêu chuẩn chất lượng, hoạt động ổn định, bền bỉ.</p>
        </div>
      </div>

      <div class="chitiet_whyme">
        <div style="height: auto; width: 100%; text-align: center;">
          <i class="fa-solid fa-money-check-dollar fa-2xl" style="color: #ffffff"></i>
          <!-- <img src="whyme_images/1956/Máº«u-vÃ¬-sao2.png" /> -->
          <p style="margin-top: 30px; font-size: 21px; font-weight: bold; color: #ffffff;">GIÁ CẢ</p>
          <p style="text-align: justify; color: #ffffff;">Chúng tôi tự tin rằng giá thành tương xứng với chất lượng sản phẩm, tối ưu chi phí cho quý khách.</p>
        </div>
      </div>

      <div class="chitiet_whyme">
        <div style="height: auto; width: 100%; text-align: center;">
          <i class="fa-solid fa-handshake fa-2xl" style="color: #ffffff"></i>
          <!-- <img src="whyme_images/1956/Máº«u-vÃ¬-sao3.png" /> -->
          <p style="margin-top: 30px; font-size: 21px; font-weight: bold; color: #ffffff;">NGUỒN GỐC</p>
          <p style="text-align: justify; color: #ffffff;">Chúng tôi cam kết phân phối sản phẩm chính hãng, đến từ những thương hiệu lớn trên thị trường.</p>
        </div>
      </div>

      <div class="chitiet_whyme">
        <div style="height: auto; width: 100%; text-align: center;">
          <i class="fa-solid fa-server fa-2xl" style="color: #ffffff"></i>
          <!-- <img src="whyme_images/1956/Máº«u-vÃ¬-sao4.png" /> -->
          <p style="margin-top: 30px; font-size: 21px; font-weight: bold; color: #ffffff;">DỊCH VỤ</p>
          <p style="text-align: justify; color: #ffffff;">Dịch vụ hậu mãi chuyên nghiệp, tận tâm. Bảo hành chính hãng theo quy định của nhà sản xuất.</p>
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

