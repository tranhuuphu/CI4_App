<div id="contact_truottrai">
  <a target="_blank" href="https://trangvangvietnam.com/listings/1187974980/thiet-bi-nganh-duc-viet-trung-dai-cong-ty-tnhh-viet-trung-dai.html" style="bottom: 0px;" title="Hãy xem chúng tôi trên Trang Vàng Việt Nam">
    <div style="height: 50px; width: 50px; border-radius: 50%; background: #ffcc00;">
      <p style="color: #ffffff; text-align: center; padding-top: 6px;"><i class="fa fa-solid fa-magnifying-glass"></i></p>
    </div>
  </a>

  <a target="_blank" href="mailto:viettrungdai0516@gmail.com" style="bottom: 60px;" title="Hãy gửi Email cho chúng tôi">
    <div style="height: 50px; width: 50px; border-radius: 50%; background: #22e7f9;">
      <p style="color: #ffffff; text-align: center; padding-top: 6px;"><i class="fa fa-regular fa-envelope"></i></p>
    </div>
  </a>

  <a target="_blank" href="https://zalo.me/0913772019" style="bottom: 120px;" title="Hãy kết nối Zalo với chúng tôi">
    <div style="height: 50px; width: 50px; border-radius: 50%; background: #0d94e4;">
      <p style="color: #ffffff; text-align: center; padding-top: 9px; font-size: 18px; font-weight: 600;">Zalo</p>
    </div>
  </a>

  <a target="_blank" href="tel:0913772019" style="bottom: 180px;" title="Hãy gọi ngay cho chúng tôi">
    <div style="height: 50px; width: 50px; border-radius: 50%; background: #64bc46;">
      <p style="color: #ffffff; text-align: center; padding-top: 6px;"><i class="fa fa-solid fa-phone"></i></p>
    </div>
  </a>
</div>



<style>
  .top_contact {
    width: 100%;
    margin: auto;
    display: block;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1;
  }
  @media screen and (max-width: 700px) {
    .top_contact {
      width: 100%;
      margin: auto;
      display: none;
    }
  }
</style>

<div class="top_contact">
  <div style="height: 40px; background: #133f6c;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p style="color: #ffffff; padding-top: 11px; text-align: left; font-size: 12px; font-family: Verdana;">
            <i class="fa fa-solid fa-location-dot"></i><span style="padding-left: 6px;"><?php if($page_home['address'] != null): ?><?= $page_home['address']; ?><?php endif; ?></span>
          </p>
        </div>
        <div class="col-sm-6">
          <p style="color: #ffffff; padding-top: 11px; text-align: right; font-size: 12px; font-family: Verdana;">
            <i class="fa fa-light fa-square-phone"></i><span style="padding-left: 6px;">Điện thoại: <?php if($page_home['phone'] != null): ?>0<?= number_format($page_home['phone'], 0, ',', ' '); ?> <?php endif; ?>| <i class="fa fa-regular fa-envelope"></i> Email: <?php if($page_home['email'] != null): ?><?= $page_home['email']; ?><?php endif; ?></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="height: auto; margin: auto;">
  <div style="width: 100%; min-height: 88px; background: #e3f2fd; margin: auto;">
    <div class="container">
      <style>
        .logo_menu {
          width: 23%;
          height: auto;
          float: left;
        }
        @media screen and (max-width: 900px) {
          .logo_menu {
            width: 100%;
            height: auto;
            text-align: center;
          }
        }
      </style>

      <div style="width: 100%; background-color: #e3f2fd; height: auto;">
        <div class="logo_menu">
          <div class="logo">
            <a href="<?= site_url() ?>"><img style="padding-top: 20px; max-width: 250px;" src="logo/1956/lo.png" alt="CÔNG TY TNHH VIỆT TRUNG ĐÀI" /></a>
          </div>
        </div>
        <div style="width: 100%; height: auto;">
          <div style="padding-top: 20px;">
            <nav class="navbar navbar-expand-sm navbar-light " style="border-radius: 18px 18px 18px 18px;">
              <a style="color: #222222; font-weight: bold;" class="navbar-brand" href="<?= site_url() ?>">Home</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                <ul class="navbar-nav">
                 
                  <!--else thietlapchung-->

                  <li class="nav-item dropdown">
                    <a style="color: #222222;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Sản Phẩm
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="http://viettrungdai.com/nganh/15701/may-moc-thiet-bi-nganh-duc.html" style="text-transform: uppercase;">MÁY MÓC THIẾT BỊ NGÀNH ĐÚC</a>

                      <a class="dropdown-item" href="http://viettrungdai.com/nganh/15702/linh-phu-kien-nganh-duc.html" style="text-transform: uppercase;">LINH PHỤ KIỆN NGÀNH ĐÚC</a>

                      <a class="dropdown-item" href="http://viettrungdai.com/nganh/15703/nguyen-vat-lieu-nganh-duc.html" style="text-transform: uppercase;">NGUYÊN VẬT LIỆU NGÀNH ĐÚC</a>
                    </div>
                  </li>
                  <!--end thietlapchung-->

                  <li class="nav-item">
                    <a style="color: #222222;" class="nav-link" href="http://viettrungdai.com/thuvienanh">Thư Viện Ảnh</a>
                  </li>

                  <?php foreach($link_page as $pl): ?>
                    <li class="nav-item">
                      <a style="color: #222222;" class="nav-link" href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a>
                    </li>
                  <?php endforeach; ?> 
                  

                  <!-- Dropdown -->
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!---slider section--->

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>

      <li data-target="#demo" data-slide-to="1"></li>

      <li data-target="#demo" data-slide-to="2"></li>

      <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://viettrungdai.com/slider/1956/Slide11.jpg" alt="CÔNG TY TNHH VIỆT TRUNG ĐÀI" />

        <div class="carousel-caption"></div>
      </div>

      <div class="carousel-item">
        <img src="http://viettrungdai.com/slider/1956/Slide22.jpg" alt="CÔNG TY TNHH VIỆT TRUNG ĐÀI" />

        <div class="carousel-caption"></div>
      </div>

      <div class="carousel-item">
        <img src="http://viettrungdai.com/slider/1956/Slide33.jpg" alt="CÔNG TY TNHH VIỆT TRUNG ĐÀI" />

        <div class="carousel-caption"></div>
      </div>

      <div class="carousel-item">
        <img src="http://viettrungdai.com/slider/1956/Slide44.jpg" alt="CÔNG TY TNHH VIỆT TRUNG ĐÀI" />

        <div class="carousel-caption"></div>
      </div>
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