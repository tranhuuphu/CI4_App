

<div id="top-bar" class="bg-color dark">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-md-auto">
        <p class="mb-0 py-2 text-center text-md-start">
        <?php if($page_home['phone'] != null): ?>
            <a href="tel: <?= $page_home['phone']; ?>" target="_blank" class="si-call" style="color: #ffffff;">
                <i class="fas fa-phone-square-alt"></i> <span class="ts-text fw-bold">0<?= number_format($page_home['phone'], 0, ',', ' '); ?></span>
            </a>
          <?php endif; ?>
          <i class="far fa-envelope"></i> <strong>phuth.me@gmail.com</strong></p>
      </div>
      <div class="col-12 col-md-auto">
        <div class="top-links on-click">
          <ul class="top-links-container">
            

            <?php foreach($link_page as $pl): ?>
              <li class="top-links-item">
                <a href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><i class="fas fa-dot-circle"></i> <?= $pl['page_name']; ?></a>
              </li>
            <?php endforeach; ?>            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>






<header id="header" class="header dark2" style="background-color: #e0efff">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row primary-menu2 sub-title2">
        <div id="logo">
          <a href="<?= base_url(''); ?>">
            <img class="logo-default" style="padding: 7px 0" srcset="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo"/>
            <img class="logo-dark" style="padding: 7px 0" srcset="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo"/>
          </a>
        </div>


        <div class="header-misc">
          <div id="top-search" class="header-misc-icon">
            <a href="javascript:void(0)" id="top-search-trigger"><i class="fas fa-search"></i><i class="fas fa-times"></i></a>
          </div>

          <?php if($items != null): ?>
            <div id="top-cart" class="header-misc-icon d-none d-sm-block">
              
              <a href="javascript:void(0)" id="top-cart-trigger"><i class="fas fa-shopping-basket"></i><span class="top-cart-number"><?= count($items) ?></span></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4>Shopping Cart</h4>
                </div>
                <div class="top-cart-items">
                  <?php foreach($items as $item): ?>
                    <div class="top-cart-item">
                      <div class="top-cart-item-image">
                        <a href="<?= site_url('').$item['cate_slug'].'/'.$item['prod_slug'].'-'.$item['id'].'.html' ?>" title="<?= $item['prod_name'] ?>" target="_blank"><img src="<?= base_url('') ?>/public/upload/tinymce/image_asset/<?= $item['prod_image'] ?>" alt="<?= $item['prod_name'] ?>" /></a>
                      </div>
                      <div class="top-cart-item-desc">
                        <div class="top-cart-item-desc-title">
                          <a href="<?= site_url('').$item['cate_slug'].'/'.$item['prod_slug'].'-'.$item['id'].'.html' ?>" title="<?= $item['prod_name'] ?>" target="_blank"><strong><?= $item['prod_name'] ?></strong></a>
                          <span class="top-cart-item-price d-block"><?= number_format($item['prod_price'], 0, ',', '.'); ?> VNĐ</span>
                        </div>
                        <div class="top-cart-item-quantity">x <?= $item['quantity'] ?></div>
                      </div>
                    </div>
                  <?php endforeach; ?>

                  
                </div>
                <div class="top-cart-action">
                  <span class="top-checkout-price"><strong></strong></span>
                  <a href="<?= site_url('gio-hang') ?>" class="button button-3d button-small m-0">View Cart</a>
                </div>
              </div>
              


            </div>
          <?php endif; ?>


        </div>


        <div class="primary-menu-trigger">
          <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
          </button>
        </div>

        <nav class="primary-menu">
          <ul class="menu-container">



            <li class="menu-item" data-title2="san-pham">
              <a class="menu-link" href="<?= base_url('san-pham'); ?>"><div>Sản Phẩm</div></a>
            </li>





            <?php foreach($cate as $c3): ?>
              <?php $c_t[] = $c3['cate_parent_id']; ?>
            <?php endforeach; ?>

            

            <?php foreach($cate as $c): ?>
              <?php if($c['cate_parent_id'] == 0): ?>
                <li class="menu-item" data-title="<?= $c['cate_slug'].'-'.$c['id'] ?>">
                  <a class="menu-link" <?php if(in_array($c['id'], $c_t)): ?> class="sub" <?php endif; ?> href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>"><div <?php if(in_array($c['id'], $c_t)): ?> class="sub" <?php endif; ?>><?= $c['cate_name']; ?></div></a>
                  
                  <?php if(in_array($c['id'], $c_t)): ?>
                    <ul class="sub-menu-container">
                      <?php foreach($cate as $c2): ?>
                        <?php if($c2['cate_parent_id'] == $c['id']): ?>
                          <li class="menu-item">
                            <a class="menu-link" href="<?= base_url('').'/'.$c2['cate_slug'].'-'.$c2['id']; ?>" title="<?= $c2['cate_name']; ?>"><div><i class="fas fa-minus"></i> <?= $c2['cate_name']; ?></div></a>
                            
                          </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                </li>
              <?php endif; ?>
            <?php endforeach; ?>

            
          </ul>
        </nav>

        <form class="top-search-form" id="searchform" action="<?= base_url('/'); ?>/search" method="get">
          
          <input type="text" name="q" class="form-control " id="top-search-trigger" value placeholder="Type &amp; Hit Enter.." autocomplete="off" />
          <button type="submit" class="btn btn-primary search" ><i class="fas fa-search"></i></button>
          
        </form>


                    

        
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>













