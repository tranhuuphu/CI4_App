<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="google-adsense-account" content="ca-pub-1259040705079233">

    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">

    

    <meta name="format-detection" content="telephone=<?= $page_home['phone']; ?>">


    <link rel="stylesheet" href="<?= base_url('public/site_asset/maymocnganhduc_asset'); ?>/style.css?<?= time() ?>" />

    <link rel="stylesheet" href="<?= base_url('public/site_asset/maymocnganhduc_asset'); ?>/css/font-icons.css" />

    <link rel="stylesheet" href="<?= base_url('public/site_asset/maymocnganhduc_asset'); ?>/css/drone.css?<?= time() ?>" />


    <link rel="stylesheet" type="text/css" href="<?= base_url('public/'); ?>/admin_asset/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" id="bootstrap-css" href='<?= base_url('public/site_asset'); ?>/contact_footer/style_contact.css' type="text/css" media="all" />


    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>

    <?= $this->renderSection('yoast_seo'); ?>

    <?= $this->renderSection('link_css'); ?>
    

    
    
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-XXXXX-Y', 'auto');
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

  
    </style>



    
  </head>
  <body class="stretched">
    <div id="wrapper">
      
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPGNS8JZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

      <?= $this->include('front_end/maymocnganhduc_site/navbar'); ?>

      

      <!-- <section id="content"> -->
        <!-- <div class="content-wrap"> -->
          
          
          <amp-auto-ads type="adsense" data-ad-client="ca-pub-1259040705079233"></amp-auto-ads>
          
          <?= $this->renderSection('content'); ?>

          

        <!-- </div> -->
      <!-- </section> -->
      <?= $this->include('front_end/maymocnganhduc_site/footer'); ?>
      

    </div>

    <!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->
    <!-- <div id="gotoTop" class="rounded border border-primary" data-mobile="true" style="--cnvs-gotoTop-bg:var(--cnvs-contrast-800)"><i class="fas fa-arrow-up"></i></div> -->
    <div id="gotoTop" class="uil uil-angle-up rounded-circle"><i class="fas fa-arrow-up"></i></div>


    <script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('public/site_asset/maymocnganhduc_asset'); ?>/js/plugins.min.js"></script>
    <script src="<?= base_url('public/site_asset/maymocnganhduc_asset'); ?>/js/functions.bundle.js?<?= time() ?>"></script>





    <script defer src='<?= base_url('public/site_asset'); ?>/contact_footer/script_contact.js'></script>

    <?= $this->renderSection('script'); ?>

  
    

    
    

  </body>
</html>
