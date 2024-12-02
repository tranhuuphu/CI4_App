<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="google-adsense-account" content="ca-pub-1259040705079233">

    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">

    

    <meta name="format-detection" content="telephone=<?= $page_home['phone']; ?>">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/vavo_site'); ?>/style.css?<?= time(); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/vavo_site'); ?>/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/vavo_site'); ?>/css/car.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/vavo_site'); ?>/css/font-icons.css" type="text/css" />



    <link rel="stylesheet" type="text/css" href="<?= base_url('public/'); ?>/admin_asset/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" id="bootstrap-css" href='<?= base_url('public/site_asset'); ?>/contact_footer/style_contact.css' type="text/css" media="all" />


    <!-- <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script> -->

    <?= $this->renderSection('link_css'); ?>

    <?= $this->renderSection('yoast_seo'); ?>

    
    

    <script async src="https://fundingchoicesmessages.google.com/i/pub-1259040705079233?ers=1" nonce="N2xbxtNqYqCzdJtdVObHww"></script><script nonce="N2xbxtNqYqCzdJtdVObHww">(function() {function signalGooglefcPresent() {if (!window.frames['googlefcPresent']) {if (document.body) {const iframe = document.createElement('iframe'); iframe.style = 'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;'; iframe.style.display = 'none'; iframe.name = 'googlefcPresent'; document.body.appendChild(iframe);} else {setTimeout(signalGooglefcPresent, 0);}}}signalGooglefcPresent();})();</script>
    
    <!-- Google Analytics -->
    <!-- <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script> -->
    <!-- End Google Analytics -->
    
    <!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KPGNS8JZ');</script> -->
    <!-- End Google Tag Manager -->
    

    
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-EZ25KGEN2C"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-EZ25KGEN2C');
    </script> -->


    <!-- Adsen -->
    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1259040705079233"
     crossorigin="anonymous"></script> -->


    <style>
      .mce-toc h2,.mce-toc li{margin-bottom:10px!important}
      .search,.sticky-header .search{position:absolute;right:85px;height:auto;width:auto;background:#1f8cff;font-weight:700}
      .search{bottom:13%;border-radius:0;border:none}
      .sticky-header .search{bottom:27%!important;border-radius:0;border:none}
      .mce-toc{background-color:#fff;padding:20px 20px 0;border-radius:20px;border:1px solid #000;margin-bottom:40px!important}.mce-toc h2{font-weight:700;text-transform:uppercase;font-size:25px}.mce-toc li{list-style:none;position:relative;padding:0 0 0 20px}.mce-toc li::before{content:"";position:absolute;left:2px;top:5px;width:6px;height:10px;border:solid #000;border-width:0 2px 2px 0;transform:rotate(45deg)}
      @media(min-width:992px){.sub::after{font-family:"Font Awesome 5 Free";font-weight:900;content:"\f078";padding-left:7px}}
      .sub-menu button:after{font-family:"Font Awesome 5 Free";font-weight:900;content:"\f078";padding-left:7px}
      .sub-menu button:before{content:none}
        .pagination a:focus,[contenteditable].form-control:focus,[type=email].form-control:focus,[type=password].form-control:focus,[type=tel].form-control:focus,[type=text].form-control:focus,input.form-control:focus,input[type=email]:focus,input[type=number]:focus,input[type=password]:focus,input[type=text]:focus,select:focus,textarea.form-control:focus,textarea:focus{box-shadow:inset 0 0 0 #ddd!important}
        .postcontent .button{margin-left:0!important}
        .call-btn2 {
          position: fixed;
          bottom: 60px;
          left: 25px;
          background: #345eeb;
          text-align: center;
          color: #fff;
          box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
          z-index: 99;
          transition: 0.3s;
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
          background: rgba(0, 0, 0, 0.3);
          border-radius: 5px 0 0 5px;
          animation: 1s ease-in-out infinite blinking;
        }
        .postcontent img {
          margin: 0 0 15px;
          border-radius: 7px;
        }
        .page-link {
          border-radius: 0 !important;
        }
        .sticky-header-shrink #logo img {
          padding: 7px 0 !important;
        }
        .breadcrumb li {
          color: grey;
          font-size: 16px;
        }
        .breadcrumb li a {
          color: #0474c4;
          font-size: 16px;
          font-weight: 700;
        }
        .breadcrumb li a:hover {
          color: #0a70ff;
        }
        .active a {
          color: #000 !important;
        }
        .active a:hover {
          color: #0a70ff !important;
        }
        #rev_slider_30_1 ul li .title_cap a:hover {
          color: #05f !important;
        }
        .tp-tab-content .tp-tab-title{
            display: -webkit-box;
            max-width: 100%;
            margin: 0 auto;
            -webkit-line-clamp: 2;
            /* autoprefixer: off */
            -webkit-box-orient: vertical;
            /* autoprefixer: on */
            overflow: hidden;
            text-overflow: ellipsis;

        }
  
    </style>



    
  </head>
  <body class="stretched page-transition2">
      
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPGNS8JZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper" class="clearfix">

      <?= $this->include('front_end/vavo_oto/navbar'); ?>

      

      <!-- <section id="content"> -->
        <!-- <div class="content-wrap"> -->
          
          
          <!-- <amp-auto-ads type="adsense" data-ad-client="ca-pub-1259040705079233"></amp-auto-ads> -->
          <?= $this->renderSection('content'); ?>

          

        <!-- </div> -->
      <!-- </section> -->
      <?= $this->include('front_end/vavo_oto/footer'); ?>
      

    </div>

    <!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->
    <div id="gotoTop" class="icon-angle-up rounded border border-primary" data-mobile="true" style="--cnvs-gotoTop-bg:var(--cnvs-contrast-800)"></div>

    <script src="<?= base_url('public/site_asset/vavo_site'); ?>/js/jquery.js"></script>
    <script src="<?= base_url('public/site_asset/vavo_site'); ?>/js/plugins.min.js"></script>
    <script src="<?= base_url('public/site_asset/vavo_site'); ?>/js/functions.bundle.js"></script>




    <!-- Lazy load image -->
    <script src="<?= base_url('public/site_asset/vavo_site'); ?>/js/lazyload.min.js"></script>


    <script defer src='<?= base_url('public/site_asset'); ?>/contact_footer/script_contact.js'></script>

    <?= $this->renderSection('script'); ?>

    <script type="text/javascript">
      $(document).ready(function() {
        // $("#wrapper img").addClass("lazyload");
        $("img.lazyload").lazyload();
      });

    

    </script>

    <script>

      //Car Appear In View
      function isScrolledIntoView(elem) {
        var docViewTop = jQuery(window).scrollTop();
        var docViewBottom = docViewTop + jQuery(window).height();

        var elemTop = jQuery(elem).offset().top + 180;
        var elemBottom = elemTop + jQuery(elem).height() - 500;

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
      }

      jQuery(window).scroll(function () {
         jQuery('.running-car').each(function () {
          if (isScrolledIntoView(this) === true) {
            jQuery(this).addClass('in-view');
          } else {
            jQuery(this).removeClass('in-view');
          }
        });
      });

      //threesixty degree
      window.onload = init;
      var car;
      function init(){

        car = jQuery('.360-car').ThreeSixty({
          totalFrames: 52, // Total no. of image you have for 360 slider
          endFrame: 52, // end frame for the auto spin animation
          currentFrame: 3, // This the start frame for auto spin
          imgList: '.threesixty_images', // selector for image list
          progress: '.spinner', // selector to show the loading progress
          imagePath:'demos/car/images/360degree-cars/', // path of the image assets
          filePrefix: '', // file prefix if any
          ext: '.png', // extention for the assets
          height: 887,
          width: 500,
          navigation: true,
          responsive: true,
        });
      };

      // Rev Slider
      var revapi424,tpj = jQuery;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_424_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_424_1");
        }else{
          revapi424 = tpj("#rev_slider_424_1").show().revolution({
            sliderType:"carousel",
            jsFileLocation:"include/rs-plugin/js/",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:7000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
              mouseScrollReverse:"default",
              onHoverStop:"off",
              touch:{
                touchenabled:"on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style:"uranus",
                enable:false,
                hide_onmobile:false,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:-10,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:-10,
                  v_offset:0
                }
              },
              carousel: {
                maxRotation: 65,
                vary_rotation: "on",
                minScale: 55,
                vary_scale: "on",
                horizontal_align: "center",
                vertical_align: "center",
                fadeout: "on",
                vary_fade: "on",
                maxVisibleItems: 5,
                infinity: "off",
                space: 0,
                stretch: "on"
              }
              ,
              tabs: {
                style:"ares",
                enable:true,
                width:270,
                height:80,
                min_width:270,
                wrapper_padding: 10,
                wrapper_color:"transparent",
                wrapper_opacity:"0.5",
                tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
                visibleAmount: 7,
                hide_onmobile: false,
                hide_under:420,
                hide_onleave:false,
                hide_delay_mobile:1200,
                hide_delay:200,
                direction:"horizontal",
                span:true,
                position:"outer-bottom",
                space:20,
                h_align:"left",
                v_align:"bottom",
                h_offset:0,
                v_offset:0
              }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,992,768,420],
            gridheight:[600,500,960,720],
            lazyType:"single",
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle:"off",
            autoHeight:"off",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); /*ready*/

      // Video on play on hover
      jQuery(document).ready(function($){
        jQuery('.videoplay-on-hover').hover( function(){
          if( jQuery(this).find('video').length > 0 ) {
            jQuery(this).find('video').get(0).play();
          }
        }, function(){
          if( jQuery(this).find('video').length > 0 ) {
            jQuery(this).find('video').get(0).pause();
          }
        });
      });
    </script>


    
    

  </body>
</html>
