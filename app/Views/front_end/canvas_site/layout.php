<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?= $this->renderSection('yoast_seo'); ?>

    <meta name="format-detection" content="telephone=0974953600">

    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/style.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/custom.css" type="text/css" />
    

    
  </head>
  <body class="stretched">
    <div id="wrapper" class="clearfix">

      <?= $this->include('front_end/canvas_site/navbar'); ?>

      

      <section id="content">
        <div class="content-wrap">
          
          <?= $this->renderSection('content'); ?>

          

        </div>
      </section>

      <footer id="footer" class="dark">
        <div class="container">
          <div class="footer-widgets-wrap">
            <div class="row col-mb-50">
              <div class="col-lg-8">
                <div class="row col-mb-50">
                  <div class="col-md-4">
                    <div class="widget clearfix">
                      <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo" />
                      <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>
                      <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                        <address>
                          <strong>Headquarters:</strong><br />
                          795 Folsom Ave, Suite 600<br />
                          San Francisco, CA 94107<br />
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br />
                        <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br />
                        <abbr title="Email Address"><strong>Email:</strong></abbr> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a9aea6af80a3a1aeb6a1b3eea3afad">[email&#160;protected]</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="widget widget_links clearfix">
                      <h4>Blogroll</h4>
                      <ul>
                        <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                        <li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                        <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                        <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                        <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                        <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                        <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="widget clearfix">
                      <h4>Recent Posts</h4>
                      <div class="posts-sm row col-mb-30" id="post-list-footer">
                        <div class="entry col-12">
                          <div class="grid-inner row">
                            <div class="col">
                              <div class="entry-title">
                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                              </div>
                              <div class="entry-meta">
                                <ul>
                                  <li>10th July 2021</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="entry col-12">
                          <div class="grid-inner row">
                            <div class="col">
                              <div class="entry-title">
                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                              </div>
                              <div class="entry-meta">
                                <ul>
                                  <li>10th July 2021</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="entry col-12">
                          <div class="grid-inner row">
                            <div class="col">
                              <div class="entry-title">
                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                              </div>
                              <div class="entry-meta">
                                <ul>
                                  <li>10th July 2021</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="row col-mb-50">
                  <div class="col-md-4 col-lg-12">
                    <div class="widget clearfix" style="margin-bottom: -20px;">
                      <div class="row">
                        <div class="col-lg-6 bottommargin-sm">
                          <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                          <h5 class="mb-0">Total Downloads</h5>
                        </div>
                        <div class="col-lg-6 bottommargin-sm">
                          <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                          <h5 class="mb-0">Clients</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 col-lg-12">
                    <div class="widget subscribe-widget clearfix">
                      <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                      <div class="widget-subscribe-form-result"></div>
                      <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
                        <div class="input-group mx-auto">
                          <div class="input-group-text"><i class="icon-email2"></i></div>
                          <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" />
                          <button class="btn btn-success" type="submit">Subscribe</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-12">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="copyrights">
          <div class="container">
            <div class="row col-mb-30">
              <div class="col-md-6 text-center text-md-start">
                Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br />
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="d-flex justify-content-center justify-content-md-end">
                  <a href="#" class="social-icon si-small si-borderless si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-vimeo">
                    <i class="icon-vimeo"></i>
                    <i class="icon-vimeo"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-github">
                    <i class="icon-github"></i>
                    <i class="icon-github"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-yahoo">
                    <i class="icon-yahoo"></i>
                    <i class="icon-yahoo"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-borderless si-linkedin">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                  </a>
                </div>
                <div class="clear"></div>
                <i class="icon-envelope2"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6dfd8d0d9f6d5d7d8c0d7c598d5d9db">[email&#160;protected]</a> <span class="middot">&middot;</span>
                <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>

    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/jquery.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/plugins.min.js"></script>

    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/functions.js"></script>
    <!-- <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
      integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
      data-cf-beacon='{"rayId":"780332629f6b6bfd","token":"0627f0b8b73941069bc19139e63db853","version":"2022.11.3","si":100}'
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
