<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-adsense-account" content="ca-pub-1259040705079233">
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">

    <?= $this->renderSection('yoast_seo'); ?>

    <?= $this->renderSection('link_css'); ?>

    <meta name="format-detection" content="telephone=0974953600">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/style.css">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/font-icons.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('public/'); ?>/admin_asset/plugins/fontawesome-free/css/all.min.css">


    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>


    

    <link rel="stylesheet" id="bootstrap-css" href='<?= base_url('public/site_asset'); ?>/contact_footer/style_contact.css' type="text/css" media="all" />
    
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    

    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KPGNS8JZ');</script>
    <!-- End Google Tag Manager -->
    

    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EZ25KGEN2C"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-EZ25KGEN2C');
    </script>


    <!-- Adsen -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1259040705079233"
     crossorigin="anonymous"></script>

    <style>
      .tp-caption.News-Title {
        font-weight: 700;
        letter-spacing: -1px;
        font-family: "arial", sans-serif;
      }

      .tp-caption.News-Subtitle {
        font-family: "arial";
      }
      .tp-video-play-button {
        display: none !important;
      }

      .tp-caption {
        white-space: nowrap;
      }
      .tp-carousel-wrapper {
        cursor: url(<?= base_url() ?>/public/upload/openhand.cur), move;
      }
      .tp-carousel-wrapper.dragged {
        cursor: url(<?= base_url() ?>/public/upload/closedhand.cur), move;
      }

      
      .tp-tabs{
        background: linear-gradient(90deg, rgba(46,105,255,1) 0%, rgba(50,255,195,1) 100%) !important;
      }

     .search{

        position: absolute;
        bottom: 33%;
        right: 85px;
        height: auto;
        width: auto;
        background: #1f8cff;
        border-radius: 0;
        font-weight: bold;
        border: none;

      }
       .sticky-header .search{

          position: absolute;
          bottom: 22% !important;
          right: 85px;
          height: auto;
          width: auto;
          background: #1f8cff;
          border-radius: 0;
          font-weight: bold;
          border: none;

       }

       .mce-toc{
          background-color: #ffffff;
          padding: 20px 20px 0px 20px;
          margin-bottom: 15px;
          border-radius: 20px;
          border: solid #000000 1px;
          margin-bottom: 40px !important;
        }
        .mce-toc h2{
            font-weight: bold;
            text-transform: uppercase;
            font-size: 25px;
            margin-bottom: 10px !important;
          }
        .mce-toc li {
          list-style: none;
          position: relative;
          padding: 0 0 0 20px;
          margin-bottom: 10px !important;
        }
        .mce-toc li::before {
          content: ""; 
          position: absolute; 
          left: 2px; 
          top: 5px; 
          width: 6px;
          height: 10px;
          border: solid #000000;
          border-width: 0 2px 2px 0;
          transform: rotate(45deg);
        }
        @media(min-width:992px) {
          .sub::after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f078";
            padding-left: 7px;
          }
        }

        .sub-menu button:after{
          font-family: "Font Awesome 5 Free";
          font-weight: 900;
          content: "\f078";
          padding-left: 7px;
        }
        .sub-menu button:before{
          content: none;
        }
                
        .pagination a:focus,
        select:focus,
        textarea:focus, 
        textarea.form-control:focus, 
        input.form-control:focus, 
        input[type=text]:focus, 
        input[type=password]:focus, 
        input[type=email]:focus, 
        input[type=number]:focus, 
        [type=text].form-control:focus, 
        [type=password].form-control:focus, 
        [type=email].form-control:focus, 
        [type=tel].form-control:focus, 
        [contenteditable].form-control:focus {
          box-shadow: inset 0 -0px 0 #ddd !important;
        }

        .postcontent .button{margin-left: 0px !important;}

        .call-btn2 {
          position: fixed;
          bottom: 60px;
          left: 25px;
          background: #345eeb;
          text-align: center;
          color: #fff;
          box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
          z-index: 99;
          transition: all .3s;
          font-weight: 700;
          border-radius: 5px;
          padding: 1.5px 10px 1.5px 38px;
          font-size: 18px;
          line-height: 25px;
        }
        .call-btn2 img {
            position: absolute;
            left: 0;
            top: 0;
            padding: 5px 7px;
            background: rgba(0,0,0,0.3);
            border-radius: 5px 0 0 5px;
            animation: blinking 1s ease-in-out infinite;
        }
        .postcontent img{
          margin: 0 0 15px 0;
          border-radius: 7px;
        }

        .page-link{
          border-radius: 0px !important;
        }
        .sticky-header-shrink #logo img{
          padding: 7px 0 !important;
        }

        .breadcrumb li{
          color: grey;
          font-size: 16px;
        }

        .breadcrumb li a{
          color: #0474c4;
          /*color: #0474c4;*/
          font-size: 16px;
          font-weight: bold;
        }
        .breadcrumb li a:hover{
          color: #0a70ff;
          
        }
        .active a{
          color: #000 !important;
        }

        .active a:hover{
          color: #0a70ff !important;
        }

        #rev_slider_30_1 ul li .title_cap a:hover{
          color: #0055ff !important;
        }
  
    </style>



    
  </head>
  <body class="stretched page-transition">
      
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPGNS8JZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper" class="clearfix">

      <?= $this->include('front_end/canvas_site/navbar'); ?>

      

      <!-- <section id="content"> -->
        <!-- <div class="content-wrap"> -->
          
          
          <amp-auto-ads type="adsense" data-ad-client="ca-pub-1259040705079233"></amp-auto-ads>
          <?= $this->renderSection('content'); ?>

          

        <!-- </div> -->
      <!-- </section> -->
      <?= $this->include('front_end/canvas_site/footer'); ?>
      

    </div>

    <!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->
    <div id="gotoTop" class="uil uil-angle-up rounded" data-mobile="true" style="--cnvs-gotoTop-bg:var(--cnvs-contrast-800)"></div>
    <script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/plugins.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/functions.bundle.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/functions.js"></script>


    <script defer src='<?= base_url('public/site_asset'); ?>/contact_footer/script_contact.js'></script>

    <?= $this->renderSection('script'); ?>

    <!-- Slider -->
    <script>
      var tpj = jQuery;
      var revapi30;

      tpj(document).ready(function () {
        if (tpj("#rev_slider_30_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_30_1");
        } else {
          revapi30 = tpj("#rev_slider_30_1")
            .show()
            .revolution({
              sliderType: "carousel",
              jsFileLocation: "<?= base_url('public/public/site_asset/canvas/js/plugin/')?>/",
              sliderLayout: "fullwidth",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false,
                },
                arrows: {
                  style: "gyges",
                  enable: true,
                  hide_onmobile: false,
                  hide_onleave: false,
                  tmp: "",
                  left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 20,
                    v_offset: 0,
                  },
                  right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 20,
                    v_offset: 0,
                  },
                },
                tabs: {
                  style: "gyges",
                  enable: true,
                  width: 250,
                  height: 80,
                  min_width: 250,
                  wrapper_padding: 30,
                  wrapper_color: "#26292b",
                  wrapper_opacity: "1",
                  tmp: '<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
                  visibleAmount: 5,
                  hide_onmobile: false,
                  hide_onleave: false,
                  hide_delay: 200,
                  direction: "horizontal",
                  span: true,
                  position: "outer-bottom",
                  space: 0,
                  h_align: "center",
                  v_align: "bottom",
                  h_offset: 0,
                  v_offset: 0,
                },
              },
              carousel: {
                horizontal_align: "center",
                vertical_align: "center",
                fadeout: "on",
                vary_fade: "on",
                maxVisibleItems: 3,
                infinity: "on",
                space: 0,
                stretch: "off",
              },
              gridwidth: 720,
              gridheight: 405,
              lazyType: "none",
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: 1,
              shuffle: "off",
              autoHeight: "off",
              disableProgressBar: "on",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              },
            });
        }
      }); /*ready*/
    </script>
    
    <script>
      var tpj = jQuery;

      tpj(document).ready(function () {
        var apiRevoSlider = tpj("#rev_slider_ishop")
          .show()
          .revolution({
            sliderType: "standard",
            jsFileLocation: "<?= base_url('public/site_asset/canvas'); ?>/js/",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1200, 992, 768, 480, 320],
            gridwidth: 1140,
            gridheight: 300,
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            },
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              onHoverStop: "off",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false,
              },
              arrows: {
                style: "ares",
                enable: true,
                hide_onmobile: false,
                hide_onleave: false,
                tmp: '<div class="tp-title-wrap"> <span class="tp-arr-titleholder">{{title}}</span> </div>',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 10,
                  v_offset: 0,
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 10,
                  v_offset: 0,
                },
              },
            },
          });

        apiRevoSlider.on("revolution.slide.onloaded", function (e) {
          SEMICOLON.Base.sliderDimensions();
        });
      }); //ready
    </script>



    

    <script type="text/javascript" class="init">

      $('#example').dataTable( {
        "pageLength": 30,
        "lengthMenu": [30, 50, 75, 100]
      } );

      
    </script>
    

  </body>
</html>
