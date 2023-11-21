<?= $this->extend('front_end/hat_nhua/layout'); ?>

<?= $this->section('content'); ?>


<div class="container">
  <nav aria-label="breadcrumb" style="margin-bottom: 30px; margin-top: 30px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url().'/'.$cate_detail['cate_slug'].'-'.$cate_detail['id'] ?>" class="fw-bold"><?= $cate_detail['cate_name'] ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $post_detail['post_title']; ?></li>
    </ol>
  </nav>
</div>


<div style="height: auto; clear: both;">
  <div class="container">
    <p style="height: 26px; clear: both;"></p>
    <div style="height: auto;">
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01" />
        <div id="caption-img"></div>
      </div>
      <div style="height: auto; margin-top: 30px; margin-bottom: 30px;">
        <div class="row">
          <div class="col-sm-5" style="margin-bottom: 18px;">
            <img id="myImg_sanpham" style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$post_detail['post_image']; ?>" alt="<?= $post_detail['post_title']; ?>"/>
            <script>
              var modal = document.getElementById("myModal");
              var img = document.getElementById("myImg_sanpham");
              var modalImg = document.getElementById("img01");
              var captionText = document.getElementById("caption-img");
              img.onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
              };
              var span = document.getElementsByClassName("close")[0];
              span.onclick = function () {
                modal.style.display = "none";
              };
            </script>
          </div>
          <div class="col-sm-7">
            <div style="height: auto;">
              <div style="height: auto; border-bottom-color: #cccccc; border-bottom-style: solid; border-bottom-width: 1px;">
                <h1 style="font-size: 28px; font-weight: bold;"><?= $post_detail['post_title']; ?></h1>

                <p style="margin-top: 10px; margin-bottom: 3px;"><strong>Tình Trạng:</strong> Còn hàng</p>

                <p style="margin-top: 6px; margin-bottom: 10px;"><strong>Giá bán: </strong><span style="color: #f97e6c; font-size: 24px;"> Liên hệ</span></p>
              </div>
              <div style="height: auto;">
                <p style="margin-top: 10px; margin-bottom: 3px;"><strong>Đơn hàng tối thiểu: </strong>Liên hệ</p>

                <p style="margin-top: 10px; margin-bottom: 3px;"><strong>Giao hàng: </strong>Toàn quốc</p>

                <p style="margin-top: 10px; margin-bottom: 3px;"><strong>Thanh toán: </strong>Linh hoạt</p>
              </div>
              <style>
                .goilienhe {
                  height: auto;
                  width: 62%;
                  border-radius: 6px;
                  margin-top: 21px;
                }
                @media screen and (max-width: 700px) {
                  .goilienhe {
                    height: auto;
                    width: 100%;
                    border-radius: 6px;
                    margin-top: 21px;
                  }
                }
              </style>
              <div class="goilienhe" style="background: #f97e6c;">
                <p style="margin: 0px; color: #ffffff; text-align: center; padding-top: 11px; padding-bottom: 11px; padding-left: 3px; padding-right: 3px;">
                  Liên hệ:<span style="font-weight: 600; padding-left: 7px;"><a style="color: #ffffff;" href="tel:<?= $page_home['phone']; ?>">0<?= number_format($page_home['phone'], 0, ',', ' '); ?></a></span> - Nguyệt Vũ
                </p>
              </div>
            </div>
          </div>
        </div>
        <p style="height: 25px; clear: both;"></p>

        <div class="row">
          <div class="col-sm-9">

            <div class="card">
              <h5 class="card-header">CHI TIẾT SẢN PHẨM</h5>
              <div class="card-body">
                <?= $post_detail['post_content']; ?>
              </div>
            </div>

            <style>
              .noidungsanpham {
                height: auto;
                margin-top: 18px;
                text-align: justify;
              }
              .noidungsanpham img {
                width: 100%;
              }
            </style>
            <div class="noidungsanpham">
              <p>&nbsp;</p>
              <quillbot-extension-portal></quillbot-extension-portal>
            </div>
          </div>
          <style>
            .cothebanquantam {
              width: 100%%;
              display: block;
            }
            @media screen and (max-width: 700px) {
              .cothebanquantam {
                display: none;
              }
            }
          </style>
          <div class="col-sm-3">
            <div class="cothebanquantam">
              <div class="card">
                <h5 class="card-header"><p style="font-weight: 600; margin-bottom: 6px; color: #3399ff;">CÓ THỂ BẠN QUAN TÂM</p></h5>
                <div class="card-body">
                  <?php foreach($most_view_this_cate as $key3): ?>
                    <div style="height: auto; border-bottom: #ddd; border-bottom-style: solid; border-bottom-width: 1px;">
                      <div style="height: auto; padding: 5px;">
                        <div style="width: 30%; height: auto; float: left; padding-top: 8px; padding-bottom: 12px;">
                          <a href="<?= base_url('').'/'.$key3['cate_slug'].'/'.$key3['post_slug'].'-'.$key3['id'].'.html'; ?>" title="<?= $key3['post_title']; ?>"><img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key3['post_image']; ?>" alt="<?= $key3['post_title']; ?>"/></a>
                        </div>
                        <div style="width: 70%; float: left; padding-top: 8px; padding-bottom: 12px;">
                          <p style="margin: 0px; padding-left: 6px;">
                            <a style="color: #111;" href="http://viettrungdai.com/sanpham/55268/bo-tach-sap-tach-nuoc.html"><?= $key3['post_title']; ?></a>
                          </p>
                          <p style="margin: 0px; padding-left: 6px; color: #999;"><?= $key3['post_intro']; ?></p>
                        </div>
                      </div>
                      <p style="clear: both; margin: 0px;"></p>
                    </div>

                  <?php endforeach; ?>

                </div>
              </div>

              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background: #039303;">
  <div class="container">
    <p style="height: 10px; clear: both;"></p>
    <div style="height: 45px; border-bottom-color: #ddd; border-bottom-style: solid; border-bottom-width: 1px; background: #f9f9f9; margin-bottom: 38px; border-radius: 5px 5px 5px 5px;">
      <p style="font-weight: 600; color: #333; padding-top: 10px; padding-left: 10px; text-transform: uppercase;">SẢN PHẨM CÙNG LOẠI</p>
    </div>
    <div class="row">
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
      <?php foreach($related as $key2): ?>
        <div class="divsanpham">
          <div style="width: 100%; height: auto; padding-bottom: 50px;">
            <div style="width: 100%; height: auto;">
              <a href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><img style="width: 100%;" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key2['post_image']; ?>" alt="<?= $key2['post_title']; ?>"/></a>
            </div>
            <div style="width: 100%; height: auto;">
              <p style="font-weight: 600; text-align: center; margin: 0px; padding-top: 23px; padding-bottom: 6px;">
                <a style="color: #ffffff;" href="<?= base_url('').'/'.$key2['cate_slug'].'/'.$key2['post_slug'].'-'.$key2['id'].'.html'; ?>" title="<?= $key2['post_title']; ?>"><?= $key2['post_title']; ?></a>
              </p>

              <p style="text-align: center; color: #ffffff; margin: 0px;">Liên hệ <span style="color: #dddddd; text-decoration: line-through;"></span> <span style="color: #dddddd; font-size: 12px;">/ Giá</span></p>

              <p style="text-align: center; color: #ffffff; margin: 0px;">Liên hệ <span style="color: #dddddd; font-size: 12px;"> (đơn tối thiểu)</span></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      



    </div>
  </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= $link_full ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= $link_full ?>"/>

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
  <meta property="og:url" content="<?= $link_full ?>" />
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