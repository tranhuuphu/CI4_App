<?php //dd($cate); ?>

<div id="top-bar" class="transparent-topbar">
  <div class="container clearfix">
    <div class="row justify-content-between">
      <div class="col-12 col-md-auto">
        <div class="top-links">
          <ul class="top-links-container">


            <li class="top-links-item"><a href="<?= base_url(''); ?>">Home</a></li>

            <?php foreach($link_page as $pl): ?>
              <li class="top-links-item"><a href="<?= $pl['page_slug']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a></li>
            <?php endforeach; ?>
            
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-auto dark">
        <ul id="top-social">

          

          <?php if(isset($page_home['facebook'])): ?>
            <li>
              <a href="<?= $page_home['facebook']; ?>" target="_blank" class="si-facebook">
                <span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(isset($page_home['youtube'])): ?>
            <li>
              <a href="<?= $page_home['youtube']; ?>" target="_blank" class="si-youtube">
                <span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(isset($page_home['twitter'])): ?>
            <li>
              <a href="<?= $page_home['twitter']; ?>" target="_blank" class="si-twitter">
                <span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(isset($page_home['pinterest'])): ?>
            <li>
              <a href="<?= $page_home['pinterest']; ?>" target="_blank" class="si-pinterest">
                <span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span>
              </a>
            </li>
          <?php endif; ?>
          
          
          <!-- <li>
            <a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank">
              <span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span>
            </a>
          </li> -->

          <?php if(isset($page_home['phone'])): ?>
            <li>
              <a href="tel: <?= $page_home['phone']; ?>" target="_blank" class="si-call">
                <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?= $page_home['phone']; ?></span>
              </a>
            </li>
          <?php endif; ?>


          
        </ul>
      </div>
    </div>
  </div>
</div>

<header id="header" class="transparent-header floating-header header-size-md">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">
        <div id="logo">
          <a href="<?= base_url(''); ?>" class="standard-logo" data-dark-logo="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>"><img src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Logo" /></a>
          <a href="<?= base_url(''); ?>" class="retina-logo" data-dark-logo="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>"><img src="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>" alt="Home Logo" /></a>
        </div>
        <div class="header-misc">
          <div id="top-search" class="header-misc-icon">
            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
          </div>
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
            <li class="menu-item current">
              <a class="menu-link" href="<?= site_url(); ?>"><div>Home</div></a>
            </li>

            <?php foreach($cate as $c3): ?>
              <?php $c_t[] = $c3['cate_parent_id']; ?>
            <?php endforeach; ?>

            <?php foreach($cate as $c): ?>
              <?php if($c['cate_parent_id'] == 0): ?>
                <li class="menu-item <?php if(in_array($c['id'], $c_t)): ?> mega-menu2 <?php endif; ?>">
                  <a class="menu-link" href="<?= base_url('').'/'.$c['cate_slug'].'-'.$c['id']; ?>" title = "<?= $c['cate_name']; ?>"><?= $c['cate_name']; ?>
                    <?php if(in_array($c['id'], $c_t)): ?>
                      <i class="icon-angle-down"></i>
                    <?php endif; ?>
                  </a>
                  <?php if(in_array($c['id'], $c_t)): ?>
                    <ul class="sub-menu-container">

                      <?php foreach($cate as $c2): ?>
                        <?php if($c2['cate_parent_id'] == $c['id']): ?>
                          <li class="menu-item"><a class="menu-link" href="<?= base_url('').'/'.$c2['cate_slug'].'-'.$c2['id']; ?>" title="<?= $c2['cate_name']; ?>"><?= $c2['cate_name']; ?></a></li>
                          
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>


            
            
          </ul>
        </nav>
        <style type="text/css">
          .top-search-form button{
              position: relative;
          }

          #top-search-form button i{
              position: absolute;
              top: 0;
              left: 10px;
              -webkit-transition: opacity .3s ease;
              -o-transition: opacity .3s ease;
              transition: opacity .3s ease;
          }
        </style>
        <form class="top-search-form" action="<?= base_url('/'); ?>/search" method="get">
          <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off" />
          <button class="btn border-0 bg-secondary rounded-end h-bg-alt" type="submit"><i class="icon-search2"></i></button>

        </form>

        <!-- <form class="top-search-form top-search-form-2 bg-light bg-color  dark   input-group mw-md input-group-lg mx-auto" action="{{url('/')}}/search/" method="get">
          <input type="search" name="q" class="form-control container p-3 text-white ls0 fw-semibold" value="" placeholder="Type &amp; Search" autocomplete="off" />

          <button class="btn border-0 bg-secondary rounded-end h-bg-alt" type="submit"><i class="icon-search2"></i></button>
        </form> -->
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>



<!-- <header id="header">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">
        <?php if(isset($page_favicon->page_image)): ?>
          <div id="logo">
            <a href="{{url('/')}}" class="standard-logo" data-dark-logo="{{url('/')}}/public/upload/page/{{$page_favicon->page_image}}"><img src="https://themes.semicolonweb.com/html/canvas/images/logo.png" alt="Canvas Logo" style="height: 60px;"/></a>
            <a href="index.html" class="retina-logo" data-dark-logo="{{url('/')}}/public/upload/page/{{$page_favicon->page_image}}"><img src="https://themes.semicolonweb.com/html/canvas/images/logo.png" alt="Canvas Logo" style="height: 60px;"/></a>
          </div>
       <?php endif ?>
        <div class="header-misc">
          <div id="top-search" class="header-misc-icon">
            <a href="javascript:void(0)" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
          </div>
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
            <li class="menu-item current active">
              <a class="menu-link" href="{{url('/')}}" title="Trang Chủ {{url('/')}}"><div>Home</div></a>
              
            </li>

            <?php foreach($cate as $c3): ?>
              <?php $c_t[] = $c3['cate_parent_id']; ?>
            <?php endforeach; ?>

            <?php foreach($cate as $c): ?>
              <?php if($c['cate_parent_id'] == 0): ?>
                <li class="menu-item">
                  <a class="menu-link" href="{{url('/')}}/{{$c->cate_slug}}" title = "{{$c->cate_name}}">{{$c->cate_name}}
                    <?php if(in_array($c['id'], $c_t)): ?>
                      <i class="icon-angle-down"></i>
                    <?php endif; ?>
                  </a>
                  <?php if(in_array($c['id'], $c_t)): ?>
                    <ul class="sub-menu-container">

                      <?php foreach($cate as $c2): ?>
                        <?php if($c2['cate_parent_id'] == $c['id']): ?>
                          <li class="menu-item"><a class="menu-link" href="{{$c2->cate_slug}}" title="{{$c2->cate_name}}">{{$c2->cate_name}}</a></li>
                          
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </div>

    <form class="top-search-form top-search-form-2 bg-light bg-color  dark   input-group mw-md input-group-lg mx-auto" action="{{url('/')}}/search/" method="get">
      <input type="search" name="q" class="form-control container p-3 text-white ls0 fw-semibold" value="" placeholder="Type &amp; Search" autocomplete="off" />

      <button class="btn border-0 bg-secondary rounded-end h-bg-alt" type="submit"><i class="icon-search2"></i></button>
    </form>



  </div>
  <div class="header-wrap-clone"></div>
</header>
 -->



