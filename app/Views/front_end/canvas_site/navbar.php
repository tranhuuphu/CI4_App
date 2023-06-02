<div id="top-bar">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-md-auto">
        <p class="mb-0 py-2 text-center text-md-start"><strong>Call:</strong> 
        <?php if(isset($page_home['phone'])): ?>
            <a href="tel: <?= $page_home['phone']; ?>" target="_blank" class="si-call">
                <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?= $page_home['phone']; ?></span>
            </a>
          <?php endif; ?> | <strong>Email:</strong> info@canvas.com</p>
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



<header id="header">
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
              <a class="menu-link" href="#"><div>Home</div></a>
              <ul class="sub-menu-container">
                <li class="menu-item">
                  <a class="menu-link" href="index-corporate.html"><div>Home - Corporate</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-corporate.html"><div>Corporate - Layout 1</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-corporate-2.html"><div>Corporate - Layout 2</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-corporate-3.html"><div>Corporate - Layout 3</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-corporate-4.html"><div>Corporate - Layout 4</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-portfolio.html"><div>Home - Portfolio</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-portfolio.html"><div>Portfolio - Layout 1</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-blog.html"><div>Home - Blog</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-blog.html"><div>Blog - Layout 1</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-blog-2.html"><div>Blog - Layout 2</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-blog-3.html"><div>Blog - Layout 3</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-shop.html"><div>Home - Shop</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-shop.html"><div>Shop - Layout 1</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-shop-2.html"><div>Shop - Layout 2</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-magazine.html"><div>Home - Magazine</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-magazine.html"><div>Magazine - Layout 1</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-magazine-2.html"><div>Magazine - Layout 2</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-magazine-3.html"><div>Magazine - Layout 3</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="landing.html"><div>Home - Landing Page</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="landing.html"><div>Landing Page - Layout 1</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="landing-2.html"><div>Landing Page - Layout 2</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="landing-3.html"><div>Landing Page - Layout 3</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="landing-4.html"><div>Landing Page - Layout 4</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="landing-5.html"><div>Landing Page - Layout 5</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-fullscreen-image.html"><div>Full Screen - Image</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-fullscreen-video.html"><div>Full Screen - Video</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-onepage.html"><div>Home - One Page</div></a>
                  <ul class="sub-menu-container">
                    <li class="menu-item">
                      <a class="menu-link" href="index-onepage.html"><div>One Page - Default</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-onepage-2.html"><div>One Page - Submenu</div></a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="index-onepage-3.html"><div>One Page - Dots Style</div></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-wedding.html"><div>Home - Wedding</div></a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-restaurant.html"><div>Home - Restaurant</div></a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-events.html"><div>Home - Events</div></a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-parallax.html"><div>Home - Parallax</div></a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-app-showcase.html"><div>Home - App Showcase</div></a>
                </li>
              </ul>
            </li>

            <li class="menu-item current">
              <a class="menu-link" href="#"><div>Home</div></a>
              <ul class="sub-menu-container">
                <li class="menu-item">
                  <a class="menu-link" href="index-corporate.html"><div>Home - Corporate</div></a>
                  
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="index-portfolio.html"><div>Home - Portfolio</div></a>
                  
                </li>
                
                
              </ul>
            </li>

            
            
            
            
            <li class="menu-item">
              <a class="menu-link" href="#">
                <div>Contact</div>
                <span>Get In Touch</span>
              </a>
            </li>
          </ul>
        </nav>
        <form class="top-search-form" action="search.html" method="get">
          <input type="text" name="q" class="form-control" value placeholder="Type &amp; Hit Enter.." autocomplete="off" />
        </form>
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>










