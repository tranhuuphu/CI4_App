<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= base_url() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/public/upload/tinymce/image_asset/<?= $page_home['page_favicon']; ?>">

    <?= $this->renderSection('yoast_seo'); ?>

    <meta name="format-detection" content="telephone=0974953600">

    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/style.css?<?php echo date("h:i:sa"); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/custom.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('public/site_asset/canvas'); ?>/css/seo.css" type="text/css" />
    

    
  </head>
  <body class="stretched">
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
