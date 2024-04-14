
<?php
  $session = session();
  $name = $session->get('cate_current');

?>
<header id="header" class="header-size-sm transparent-header floating-header" data-sticky-shrink="false">
  <div id="header-wrap">
    <div class="container" data-class="up-lg:border up-lg:shadow-sm">
      <div class="header-row">
        <div id="logo" class="me-lg-4">
          <a href="index.html">
            <img class="py-2 animated2 infinite2" src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo" style=";" />
          </a>
        </div>
        <div class="header-misc ms-auto">



          <div id="top-search" class="header-misc-icon">
            <a href="javascript:void(0)" id="top-search-trigger"><i class="bi-search"></i><i class="bi-x-lg"></i></a>
          </div>
        </div>
        <div class="primary-menu-trigger">
          <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
          </button>
        </div>
        <style type="text/css">
/*          @media(min-width:992px){.sub::after{font-family:"Font Awesome 5 Free";font-weight:900;content:"\f078";padding-left:-20px}}.sub-menu button:after{font-family:"Font Awesome 5 Free";font-weight:900;content:"\f078";padding-left:-20px}.sub-menu button:before{content:none}*/
            .search, .sticky-header .search {
              position: absolute;
              right: 85px;
              bottom: 10px;
              height: auto;
              width: auto;
              background: #1f8cff;
              font-weight: 700;
            }
        </style>

        <nav class="primary-menu with-arrows">
          <ul class="menu-container">
            <li class="menu-item current">
              <a class="menu-link" href="<?= base_url('') ?>"><div>Home</div> </a>
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


            <?php foreach($link_page as $pl): ?>
              <li class="menu-item <?php if($name == $pl['page_slug']): ?> current <?php endif; ?>">
                <a href="<?= base_url('').'/'.$pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>" class="menu-link"><?= $pl['page_name']; ?></a>
              </li>
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













