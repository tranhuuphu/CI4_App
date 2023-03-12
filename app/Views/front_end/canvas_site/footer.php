<footer id="footer" class="dark">
  <div class="container">
    <div class="footer-widgets-wrap">
      <div class="row col-mb-50">
        <div class="col-lg-8">
          <div class="row col-mb-50">
            <div class="col-md-4">
              <div class="widget clearfix">
                <h4>Thông Tin</h4>
                <p><?= $page_home['page_content'] ?></p>
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget widget_links clearfix">
                <h4>Trang</h4>
                <ul>
                  <?php foreach($link_page as $pl): ?>
                    <li><a href="<?= $pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><?= $pl['page_name']; ?></a></li>
                  <?php endforeach; ?>
                  <li><a href="<?= base_url('/'); ?>/site-map.xml" title="SiteMap">SiteMap</a></li>
                  
                </ul>
              </div>
            </div>
            

          </div>
        </div>
        <div class="col-lg-4">
          <div class="row col-mb-50">
            <div class="col-md-4 col-lg-12">
              <div class="widget clearfix" style="margin-bottom: -20px;">
                <h4>Google Maps</h4>
                <a href="<?= $page_home['maps']; ?>" title="us on maps" target="_blank">
                  <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$page_home['google_image_maps']; ?>" alt="<?= $page_home['page_name']; ?>"/>
                </a>
                
              </div>
            </div>
            <div class="col-md-5 col-lg-12">
              <div class="widget subscribe-widget clearfix">
                <h5 class="text-bold"> <a href="<?= $page_home['maps']; ?>" ><i class="icon-location"></i> Us on Maps Link</a></h5>
                
                
              </div>
            </div>

            <!-- <div class="col-md-3 col-lg-12">
              <div class="widget clearfix" style="margin-bottom: -20px;">
                <div class="row">
                  <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                    <a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                      <i class="icon-facebook"></i>
                      <i class="icon-facebook"></i>
                    </a>
                    <a href="#">
                      <small style="display: block; margin-top: 3px;">
                        <strong>Like us</strong><br />
                        on Facebook
                      </small>
                    </a>
                  </div>
                  <div class="col-6 col-md-12 col-lg-6 clearfix">
                    <a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
                      <i class="icon-rss"></i>
                      <i class="icon-rss"></i>
                    </a>
                    <a href="#">
                      <small style="display: block; margin-top: 3px;">
                        <strong>Subscribe</strong><br />
                        to RSS Feeds
                      </small>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <div class="row col-mb-30">
        <div class="col-md-6 text-center text-md-start">
          Copyrights &copy; <?= date("Y"); ?> All Rights Reserved by Huu Phu<br />
          <!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="d-flex justify-content-center justify-content-md-end">

            
            <?php if(isset($page_home['facebook'])): ?>
              <a href="<?= $page_home['facebook']; ?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>
            <?php endif; ?>

            <?php if(isset($page_home['youtube'])): ?>
              <a href="<?= $page_home['youtube']; ?>" target="_blank" class="social-icon si-small si-borderless si-youtube">
                <i class="icon-youtube"></i>
                <i class="icon-youtube"></i>
              </a>
            <?php endif; ?>

            <?php if(isset($page_home['twitter'])): ?>
              <a href="<?= $page_home['twitter']; ?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
            <?php endif; ?>

            <?php if(isset($page_home['pinterest'])): ?>
              <a href="<?= $page_home['pinterest']; ?>" target="_blank" class="social-icon si-small si-borderless si-pinterest">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
              </a>
            <?php endif; ?>

            
          </div>
          <div class="clear"></div>
          
        </div>
      </div>
    </div>
  </div>
</footer>