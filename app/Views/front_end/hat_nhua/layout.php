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
    </style>

    <?= $this->include('front_end/hat_nhua/navbar'); ?>

      

        
        
        
    <?php $this->renderSection('content'); ?>


    



    



    


    <!-- Foooter -->


    <div style="background: #dedede;">
      <style>
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
      
      <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
          <div class="col-sm-5">
            <div style="height: auto; width: 100%;">
              <div style="height: auto;">
                <a href="http://viettrungdai.com"><img style="max-width: 250px;" src="logo/1956/lo.png" /></a>
              </div>
              <div class="div_chantrang_description" style="color: #111111;">
                <p>
                  C&ocircng Ty TNHH Việt Trung Đ&agravei l&agrave c&ocircng ty hoạt động trong lĩnh vực b&aacuten bu&ocircn m&aacutey m&oacutec, thiết bị v&agrave nguy&ecircn phụ liệu phục vụ cho ngh&agravenh sản xuất l&ograve nung như:
                  L&ograve trung tần, l&ograve nung điện, m&aacutey bắn s&aacutep, m&aacutey t&aacutech s&aacutep,...
                </p>

                <p>
                  <iframe
                    height="200"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31334.457197435026!2d106.71159814611498!3d10.97792439949614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zxJDGsOG7nW5nIELDrG5oIENodeG6qW4gMzEsIEtodSBwaOG7kSBCw6xuaCBQaMaw4bubYyBBLCAgQsOsbmggQ2h14bqpbiwgVGh14bqtbiBBbiwgQsOsbmggRMawxqFuZw!5e0!3m2!1svi!2sus!4v1680508639328!5m2!1svi!2sus"
                    style="border: 0;"
                    width="100%"
                  ></iframe>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div style="height: auto; width: 100%; color: #111111;">
              <p style="color: #000000; font-weight: 500; font-size: 21px;">VỀ CHÚNG TÔI</p>
              <style>
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
              </style>
              <div style="height: auto;">
                <p><a style="color: #111111; font-weight: 500;" href="http://viettrungdai.com">TRANG CHỦ</a></p>

                <p style="margin-bottom: 6px;"><a style="color: #111111;" href="http://viettrungdai.com/gioithieu">GIỚI THIỆU</a></p>

                <div class="dropup">
                  <button class="dropbtn" style="color: #111111; text-align: left;">SẢN PHẨM</button>
                  <div class="dropup-content">
                    <a style="text-transform: uppercase;" href="http://viettrungdai.com/nganh/15701/may-moc-thiet-bi-nganh-duc.html">MÁY MÓC THIẾT BỊ NGÀNH ĐÚC</a>

                    <a style="text-transform: uppercase;" href="http://viettrungdai.com/nganh/15702/linh-phu-kien-nganh-duc.html">LINH PHỤ KIỆN NGÀNH ĐÚC</a>

                    <a style="text-transform: uppercase;" href="http://viettrungdai.com/nganh/15703/nguyen-vat-lieu-nganh-duc.html">NGUYÊN VẬT LIỆU NGÀNH ĐÚC</a>
                  </div>
                </div>

                <p><a style="color: #111111;" href="http://viettrungdai.com/thuvienanh">THƯ VIỆN ẢNH</a></p>

                <p><a style="color: #111111;" href="http://viettrungdai.com/lienhe">LIÊN HỆ</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div style="height: auto; width: 100%; color: #111111;">
              <p style="color: #000000; font-weight: 500; font-size: 21px;">THÔNG TIN LIÊN HỆ</p>
              <p><span style="text-transform: uppercase;">CÔNG TY TNHH VIỆT TRUNG ĐÀI</span></p>
              <p>Địa chỉ: Số 94/15, Đường Bình Chuẩn 31, Khu phố Bình Phước A, Phường Bình Chuẩn, Thành phố Thuận An, Tỉnh Bình Dương</p>

              <p>Điện thoại: <a style="color: #111111;" href="tel:0913772019">0913772019</a></p>

              <p>
                Hotline: <strong><a style="color: #111111;" href="tel:02743800312">02743800312</a></strong>
              </p>

              <p>Email: <a style="color: #111111;" href="mailto:viettrungdai0516@gmail.com">viettrungdai0516@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="background: #ffffff;">
      <div class="container" style="padding-top: 18px; padding-bottom: 18px;">
        <p style="text-align: left; padding: 0px; margin: 0px; color: ;">
          © Bản quyền thuộc về CÔNG TY TNHH VIỆT TRUNG ĐÀI |<span style="font-size: 13px;"> Designed by <a target="_blank" style="color: ; font-weight: 500;" href="https://trangvangvietnam.com">Trang Vàng Việt Nam</a></span>
        </p>
      </div>
    </div>

    
  </body>
</html>
