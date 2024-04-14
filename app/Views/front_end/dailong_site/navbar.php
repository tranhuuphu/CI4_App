
<?php
  $session = session();
  $name = $session->get('cate_current');

?>
<div id="top-bar" style="background-color: #badfff">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-md-auto">
        <p class="mb-0 py-2 text-center text-md-start">
          <?php if($page_home['phone'] != null): ?>
            <strong><i class="fas fa-mobile-alt"></i> 0<?= number_format($page_home['phone'], 0, ',', ' '); ?></strong> 
          <?php endif; ?>
          &nbsp;<i class="fas fa-mail-bulk"></i>  <strong class="ml-2">phuth.me@gmail.com</strong>
        </p>
      </div>
      <div class="col-12 col-md-auto">
        <div class="top-links on-click">
          <ul class="top-links-container">
            <?php foreach($link_page as $pl): ?>
              <li class="top-links-item <?php if($name == $pl['page_slug']): ?> active <?php endif; ?>">
                <a href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a>
              </li>
            <?php endforeach; ?> 

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<header id="header">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">
        <div id="logo">

          <a href="<?= base_url(''); ?>" class="standard-logo" data-dark-logo="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">
            <img style="padding: 13px 0" srcset="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo"/>
          </a>

        </div>
        <div class="header-misc">
          <div id="top-search" class="header-misc-icon">
            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
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
        <div id="primary-menu-trigger">
          <svg class="svg-trigger" viewBox="0 0 100 100">
            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
            <path d="m 30,50 h 40"></path>
            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
          </svg>
        </div>

        <nav class="primary-menu">
          <ul class="menu-container">
            <li class="menu-item <?php if($name == null): ?> current <?php endif; ?>">
              <a class="menu-link" href="<?= base_url(''); ?>"><div>Home</div></a>
            </li>
            <li class="menu-item <?php if($name == 'san-pham'): ?> current <?php endif; ?>" data-title2="san-pham">
              <a class="menu-link" href="<?= base_url('san-pham'); ?>"><div>Sản Phẩm</div></a>
            </li>

            <?php foreach($cate as $c3): ?>
              <?php $c_t[] = $c3['cate_parent_id']; ?>
            <?php endforeach; ?>

            

            <?php foreach($cate as $c): ?>
              <?php if($c['cate_parent_id'] == 0): ?>
                <li class="menu-item <?php if($name == $c['cate_slug']): ?> current <?php endif; ?>" data-title="<?= $c['cate_slug'].'-'.$c['id'] ?>">
                  <a class="menu-link" <?php if(in_array($c['id'], $c_t)): ?> class="sub" <?php endif; ?> href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>"><div <?php if(in_array($c['id'], $c_t)): ?> class="sub" <?php endif; ?>><?= $c['cate_name']; ?></div></a>
                  
                  <?php if(in_array($c['id'], $c_t)): ?>
                    <ul class="sub-menu-container">
                      <?php foreach($cate as $c2): ?>
                        <?php if($c2['cate_parent_id'] == $c['id']): ?>
                          <li class="menu-item <?php if($name == $c2['cate_slug']): ?> current <?php endif; ?>">
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
          
          <input type="text" name="q" class="form-control " id="top-search-trigger" value placeholder="What are you finding?" autocomplete="off" />
          <button type="submit" class="btn btn-primary search" ><i class="fas fa-search"></i></button>
          
        </form>

      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>
