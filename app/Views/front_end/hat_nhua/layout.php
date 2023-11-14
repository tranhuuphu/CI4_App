<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CÔNG TY TNHH</title>
    <meta
      name="description"
      content="Công Ty TNHH Việt Trung Đài là công ty hoạt động trong lĩnh vực bán buôn máy móc, thiết bị và nguyên phụ liệu phục vụ cho nghành sản xuất lò nung như: Lò trung tần, lò nung điện, máy bắn sáp, máy tách sáp,..."
    />
    <meta name="keywords" content="Công Ty TNHH Việt Trung Đài, bán buôn, máy móc, thiết bị, nguyên phụ liệu, sản xuất lò nung, Lò trung tần, lò nung điện, máy bắn sáp, máy tách sáp," />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" />

    <?= $this->renderSection('yoast_seo'); ?>

    <?= $this->renderSection('link_css'); ?>

    <meta name="robots" content="index, follow" />

    <link href="http://viettrungdai.com/css/phonering_gotop.css" type="text/css" rel="stylesheet" />
    <link href="<?= base_url('public/site_asset/hatnhua'); ?>/css/homecss.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="<?= base_url('public/site_asset/hatnhua'); ?>/css/fontawesome/css/all.min.css" rel="stylesheet" />
  </head>
  <style>
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
  <body>
    <button onClick="topFunction()" id="myBtn" title="On Top"><img style="width: 60%;" src="http://viettrungdai.com/images/go_top_icon.png" /></button>
    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <style>
      #contact_truottrai a {
        position: fixed;
        left: 0px;
        transition: 0.3s;
        padding: 15px;
        width: 55px;
        text-decoration: none;
        font-size: 25px;
        z-index: 2;
      }
    </style>
    <style>
      #contact_truotphai a {
        position: fixed;
        right: 35px;
        transition: 0.3s;
        padding: 15px;
        width: 55px;
        text-decoration: none;
        font-size: 25px;
        z-index: 2;
      }

      .dropbtn {
        padding: 16px;
        padding-top: 10px;
        background: none;
        padding-left: 0px;
        font-size: 16px;
        border: none;
      }
      .dropup {
        position: relative;
        display: inline-block;
      }
      .dropup-content {
        display: none;
        position: absolute;
        bottom: 50px;
        background-color: #f1f1f1;
        min-width: 300px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }
      .dropup-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropup-content a:hover {
        background-color: #ddd;
      }
      .dropup:hover .dropup-content {
        display: block;
      }
      .dropup:hover .dropbtn {
        background: none;
      }
      .div_chantrang_description {
        height: auto;
        padding-right: 50px;
        padding-top: 20px;
      }
      @media screen and (max-width: 991px) {
        .div_chantrang_description {
          height: auto;
          padding-right: 0px;
          padding-top: 20px;
        }
      }
    </style>

    <?= $this->include('front_end/hat_nhua/navbar'); ?>

      

        
        
        
    <?php $this->renderSection('content'); ?>



    <!-- Foooter -->


    <div style="background: #dedede;">

      
      <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
          <div class="col-sm-5">
            <div style="height: auto; width: 100%;">
              <div style="height: auto;">
                <a href="http://viettrungdai.com"><img style="max-width: 250px;" src="logo/1956/lo.png" /></a>
              </div>
              <div class="div_chantrang_description" style="color: #111111;">
                <?= $page_home['page_content']; ?>

                <p>
                  <?php if($page_home['maps'] != null): ?>
                    <?= $page_home['maps']; ?>
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div style="height: auto; width: 100%; color: #111111;">
              <p style="color: #000000; font-weight: 500; font-size: 21px;">VỀ CHÚNG TÔI</p>

              <div style="height: auto;">
                <p><a style="color: #111111; font-weight: 500;" href="<?= base_url() ?>">TRANG CHỦ</a></p>

                <?php foreach($cate as $c2): ?>
                  <p style="margin-bottom: 6px;"><a style="color: #111111;" href="<?= base_url('').'/'.$c2['cate_slug'].'-'.$c2['id']; ?>" title = "<?= $c2['cate_name']; ?>"><?= $c2['cate_name']; ?></a></p>
                <?php endforeach; ?>

                  

                  <?php foreach($link_page as $pl): ?>
                    <p style="margin-bottom: 6px;"><a style="color: #111111;" href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a></p>

                  <?php endforeach; ?>

                
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div style="height: auto; width: 100%; color: #111111;">
              <p style="color: #000000; font-weight: 500; font-size: 21px;">THÔNG TIN LIÊN HỆ</p>
              <?php if($page_home['name_co'] != null): ?>
                <p><span style="text-transform: uppercase;">
                  <?= $page_home['name_co']; ?>
                </span></p>
              <?php endif; ?>
              
              <?php if($page_home['address'] != null): ?>
                <p>
                  <?= $page_home['address']; ?>
                </p>
              <?php endif; ?>
              
              <?php if($page_home['phone'] != null): ?>
                <p>Điện thoại: <a style="color: #111111;" href="tel:<?= $page_home['phone']; ?>">
                  0<?= number_format($page_home['phone'], 0, ',', ' '); ?>
                </a></p>
              <?php endif; ?>

              
              <?php if($page_home['email'] != null): ?>
                <p>Email: <a style="color: #111111;" href="mailto:<?= $page_home['email']; ?>"><?= $page_home['email']; ?></a></p>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="background: #ffffff;">
      <div class="container" style="padding-top: 18px; padding-bottom: 18px;">
        <p style="text-align: left; padding: 0px; margin: 0px; color: ;">
          © Bản quyền thuộc về <?php if($page_home['name_co'] != null): ?> <?= $page_home['name_co']; ?> <?php endif; ?>|<span style="font-size: 13px;"> Designed by <a target="_blank" style="color: ; font-weight: 500;" href="#">#</a></span>
        </p>
      </div>
    </div>

    
  </body>
</html>
