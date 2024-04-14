<footer id="footer" class="dark">
  <div class="container">
    <div class="footer-widgets-wrap">
      <div class="row col-mb-50">
        <div class="col-lg-8">
          <div class="row col-mb-50">
            <div class="col-md-7">
              <div class="widget clearfix">
                <div class="fancy-title title-border mt-">
                  <h4>THÔNG TIN</h4>
                </div>
                <p><?= $page_home['page_content'] ?></p>
                
              </div>
            </div>
            <div class="col-md-5">
              <div class="widget widget_links2 clearfix">
                <div class="fancy-title title-border mt-">
                  <h4>TRANG</h4>
                </div>
                <ul>
                  <?php foreach($link_page as $pl): ?>
                    <li style="list-style-type: none"><a href="<?= $pl['page_slug'].'-'.$pl['id']; ?>.html" title="<?= $pl['page_name']; ?>"><i class="fas fa-caret-right"></i> &nbsp; <?= $pl['page_name']; ?></a></li>
                  <?php endforeach; ?>
                  <li style="list-style-type: none"><a href="<?= base_url('/'); ?>/sitemap.xml" title="SiteMap" target="_blank"><i class="fas fa-caret-right"></i>  &nbsp; Sitemap</a></li>
                  
                </ul>
              </div>
            </div>
            

          </div>
        </div>
        <div class="col-lg-4">
          <div class="row col-mb-50">
            <div class="col-md-4 col-lg-12">
              <div class="widget clearfix" style="margin-bottom: -20px;">
                <div class="fancy-title title-border mt-">
                  <h4>GOOGLE MAPS</h4>
                </div>
                <a href="<?= $page_home['maps']; ?>" title="us on maps" target="_blank">
                  <img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$page_home['google_image_maps']; ?>" alt="<?= $page_home['page_name']; ?>"/>
                </a>
                
              </div>
            </div>
            <div class="col-md-5 col-lg-12">
              <div class="widget subscribe-widget clearfix">
                <h5 class="fw-bold"> <a href="<?= $page_home['maps']; ?>"  target="_blank"><i class="fa-brands fa-maps"></i><i class="fas fa-map-marker-alt"></i> SEE MAPS</a></h5>
                
                
              </div>
            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div id="copyrights">
    <div class="container">
      <div class="row col-mb-">
        <div class="col-md-6 text-center text-md-start">
          Copyrights &copy; <?= date("Y"); ?> All Rights Reserved by Huu Phu<br /><br />
          <div class="copyright-links"><a href="javascript:void(0)">Terms of Use</a> / <a href="javascript:void(0)">Privacy Policy</a></div>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="d-flex justify-content-center justify-content-md-end mb-2">
            
            <?php if(isset($page_home['facebook'])): ?>
            <a href="<?= $page_home['facebook']; ?>" target="_blank" class="social-icon border-transparent si-small h-bg-facebook">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-facebook-f"></i>
            </a>
            <?php endif; ?>
            <?php if(isset($page_home['youtube'])): ?>
            <a href="<?= $page_home['youtube']; ?>" target="_blank" class="social-icon border-transparent si-small h-bg-youtube">
              <i class="fab fa-youtube"></i>
              <i class="fab fa-youtube"></i>
            </a>
            <?php endif; ?>
            <?php if(isset($page_home['twitter'])): ?>
            <a href="<?= $page_home['twitter']; ?>" target="_blank" class="social-icon border-transparent si-small h-bg-twitter">
              <i class="fab fa-google"></i>
              <i class="fab fa-google"></i>
            </a>
            <?php endif; ?>
            <?php if(isset($page_home['pinterest'])): ?>
            <a href="<?= $page_home['pinterest']; ?>" target="_blank" class="social-icon border-transparent si-small h-bg-pinterest">
              <i class="fab fa-pinterest-p"></i>
              <i class="fab fa-pinterest-p"></i>
            </a>
            <?php endif; ?>
            
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
</footer>


<div id='arcontactus'></div>

<a id="<?= $page_home['phone']; ?>" href="tel:<?= $page_home['phone']; ?>"><div class="call-btn2"><noscript><img src="<?= base_url('public'); ?>/upload/phone.svg"/></noscript><img class=" lazyloaded" src="<?= base_url('public'); ?>/upload/phone.svg" data-src="{{url('/')}}/public/public_image/phone.svg"> 0<?= number_format($page_home['phone'], 0, ',', ' ') ?></div></a>