



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


      <div style="width: 100%; background-color: #e3f2fd; height: auto;">
        <div class="logo_menu">
          <div class="logo">
            <a href="<?= site_url() ?>"><img style="padding-top: 20px; height: 70px" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="" /></a>
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
                    <a style="color: #222222; font-weight: bold;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Sản Phẩm
                    </a>
                    <div class="dropdown-menu">
                      <?php foreach($cate as $c): ?>
                        <?php if($c['cate_type'] == 'normal'): ?>
                          <a class="dropdown-item" href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>" style="text-transform: uppercase;"><?= $c['cate_name'] ?></a>
                        <?php endif; ?>
                      <?php endforeach; ?>


                    </div>
                  </li>
                  
                  <?php foreach($cate as $c2): ?>
                    <?php if($c2['cate_type'] != 'normal'): ?>
                      <li class="nav-item">
                        <a style="color: #222222;  font-weight: bold" class="nav-link" href="<?= base_url('').'/'.$c2['cate_slug'].'-'.$c2['id']; ?>" title = "<?= $c2['cate_name']; ?>"><?= $c2['cate_name']; ?></a>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>

                  

                  <?php foreach($link_page as $pl): ?>
                    <li class="nav-item">
                      <a style="color: #222222; font-weight: bold" class="nav-link" href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a>
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


</div>