<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">

    <?= $this->renderSection('yoast_seo'); ?>

    <meta name="format-detection" content="telephone=0974953600">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/style.css">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/font-icons.css">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/custom.css">


    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/settings.css" media="screen">
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/layers.css">
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/navigation.css">
    <style>
      .revo-slider-emphasis-text {
        font-size: 58px;
        font-weight: 700;
        letter-spacing: 1px;
        font-family: 'Poppins', sans-serif;
        padding: 15px 20px;
        border-top: 2px solid #FFF;
        border-bottom: 2px solid #FFF;
      }

      .revo-slider-desc-text {
        font-size: 20px;
        font-family: 'Lato', sans-serif;
        width: 650px;
        text-align: center;
        line-height: 1.5;
      }

      .revo-slider-caps-text {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 3px;
        font-family: 'Poppins', sans-serif;
      }

      .tp-video-play-button { display: none !important; }

      .tp-caption { white-space: nowrap; }
    </style>

    
  </head>
  <body class="stretched page-transition">
    <div id="wrapper" class="clearfix">

      <?= $this->include('front_end/canvas_site/navbar'); ?>

      

      <section id="content">
        <div class="content-wrap">
          
          <?= $this->renderSection('content'); ?>

          

        </div>
      </section>
      <?= $this->include('front_end/canvas_site/footer'); ?>
      

    </div>

    <div id="gotoTop" class="icon-angle-up"></div>



    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/functions.js"></script>

    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.parallax.min.js"></script>
    <script>
      var tpj=jQuery;

      tpj(document).ready(function() {

        var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
        {
          sliderType:"standard",
          jsFileLocation:"include/rs-plugin/js/",
          sliderLayout:"fullwidth",
          dottedOverlay:"none",
          delay:9000,
          navigation: {},
          responsiveLevels:[1200,992,768,480,320],
          gridwidth:1140,
          gridheight:500,
          lazyType:"none",
          shadow:0,
          spinner:"off",
          autoHeight:"off",
          disableProgressBar:"on",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            disableFocusListener:false,
          },
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            onHoverStop:"off",
            touch:{
              touchenabled:"on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
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
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 10,
                v_offset: 0
              }
            }
          }
        });

        apiRevoSlider.on("revolution.slide.onloaded",function (e) {
          SEMICOLON.Base.sliderDimensions();
        });

      }); //ready
    </script>
  </body>
</html>
