<div id="top-bar" class="bg-color dark">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-md-auto">
        <p class="mb-0 py-2 text-center text-md-start"><strong>Call:</strong> 
        <?php if(isset($page_home['phone'])): ?>
            <a href="tel: <?= $page_home['phone']; ?>" target="_blank" class="si-call" style="color: #ffffff;">
                <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?= $page_home['phone']; ?></span>
            </a>
          <?php endif; ?> | <strong>Email:</strong> phuth@gmail.com</p>
      </div>
      <div class="col-12 col-md-auto">
        <div class="top-links on-click">
          <ul class="top-links-container">
            

            <?php foreach($link_page as $pl): ?>
              <li class="top-links-item">
                <a href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a>
              </li>
            <?php endforeach; ?>
            
            
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<header id="header" style="background-color: #ffffff">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">
        <div id="logo">
          <a href="<?= base_url(''); ?>">
            <img class="logo-default" srcset="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo"/>
            <img class="logo-dark" srcset="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo"/>
          </a>
        </div>
        <div class="header-misc">
          <div id="top-search" class="header-misc-icon">
            <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
          </div>

          

          
        </div>
        <div class="primary-menu-trigger">
          <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
          </button>
        </div>

        <nav class="primary-menu">
          <ul class="menu-container">
            <li class="menu-item current">
              <a class="menu-link" href="<?= base_url(''); ?>"><div>Home</div></a>
            </li>


            <li class="menu-item">
              <a class="menu-link" href="<?= base_url('san-pham'); ?>"><div>Sản Phẩm</div></a>
            </li>



            <?php foreach($cate as $c3): ?>
              <?php $c_t[] = $c3['cate_parent_id']; ?>
            <?php endforeach; ?>

            

            <?php foreach($cate as $c): ?>
              <?php if($c['cate_parent_id'] == 0): ?>
                <li class="menu-item">
                  <a class="menu-link" href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>"><div><?= $c['cate_name']; ?></div></a>
                  
                  <?php if(in_array($c['id'], $c_t)): ?>
                    <ul class="sub-menu-container">
                      <?php foreach($cate as $c2): ?>
                        <?php if($c2['cate_parent_id'] == $c['id']): ?>
                          <li class="menu-item">
                            <a class="menu-link" href="<?= base_url('').'/'.$c2['cate_slug'].'-'.$c2['id']; ?>" title="<?= $c2['cate_name']; ?>"><div><?= $c2['cate_name']; ?></div></a>
                            
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
        <form class="top-search-form" action="<?= base_url('/'); ?>/search" method="get">
          <input type="text" name="q" class="form-control" value placeholder="Type &amp; Hit Enter.." autocomplete="off" />
        </form>
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>










