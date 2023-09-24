<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">

    <?= $this->renderSection('yoast_seo'); ?>

    <?= $this->renderSection('link_css'); ?>

    <meta name="format-detection" content="telephone=0974953600">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/style.css?<?= time(); ?>">

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/font-icons.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('public/'); ?>/admin_asset/plugins/fontawesome-free/css/all.min.css">





    <!-- <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/settings.css" media="screen"> -->
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/layers.css">
    <!-- <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/navigation.css"> -->

    <link rel="stylesheet" id="bootstrap-css" href='<?= base_url('public/site_asset'); ?>/contact_footer/style_contact.css' type="text/css" media="all" />

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
          margin-bottom: 10px !important;
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
  
    </style>



    
  </head>
  <body class="stretched page-transition">
    <div id="wrapper" class="clearfix">

      <?= $this->include('front_end/canvas_site/navbar'); ?>

      

      <section id="content">
        <div class="content-wrap">
          
          <?php if(!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              <?= session()->getFlashdata('success'); ?>
            </div>
          <?php endif ?>
          
          <?= $this->renderSection('content'); ?>

          

        </div>
      </section>
      <?= $this->include('front_end/canvas_site/footer'); ?>
      

    </div>

    <div id="gotoTop" class="uil uil-angle-up"><i class="fas fa-arrow-up"></i></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/plugins.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/functions.bundle.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/functions.js"></script>


    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <!-- <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.video.min.js"></script> -->
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.actions.min.js"></script> -->
    <!-- <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.layeranimation.min.js"></script> -->
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?= base_url('public/site_asset/canvas'); ?>/js/extensions/revolution.extension.parallax.min.js"></script>


    <script defer src='<?= base_url('public/site_asset'); ?>/contact_footer/script_contact.js'></script>
    
    <script>
      var tpj = jQuery;

      tpj(document).ready(function () {
        var apiRevoSlider = tpj("#rev_slider_ishop")
          .show()
          .revolution({
            sliderType: "standard",
            jsFileLocation: "include/rs-plugin/js/",
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



    <?= $this->renderSection('script'); ?>

    <script type="text/javascript" class="init">

      $('#example').dataTable( {
        "pageLength": 20,
        "lengthMenu": [20, 50, 75, 100]
      } );

      
    </script>
    <script type="text/javascript">
      // $('.sub-menu-trigger').removeClass('fa-solid');
      $('.sub-menu-trigger').addClass('fas');
    </script>

  </body>
</html>
