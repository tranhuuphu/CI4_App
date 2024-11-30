<?= $this->extend('front_end/dailong_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container clearfix">
  <div class="row align-items-center col-mb-80 mt-5">
    <div class="col-lg-6">
      <div class="error404 center">404</div>
    </div>
    <div class="col-lg-6">
      <div class="heading-block text-center text-lg-start border-bottom-0">
        <h4>Ooopps.! The <span style="color: red; font-weight: bold;">detail post</span> you were looking for, couldn't be found.</h4>
        <span>Try searching for the best match or browse the links below:</span>
        <?php if(isset($error)): ?><span> <?= $error ?> </span><?php endif; ?>
      </div>
      <form action="<?= base_url('/'); ?>/search" method="get" class="mb-5">
        <div class="input-group input-group-lg">
          <input type="text" name="q" class="form-control" placeholder="Search for Pages..." />
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>

      <div class="sidebar col-lg-12">
        <div class="sidebar-widgets-wrap">
          <div class="widget subscribe-widget2 clearfix">
            <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
              <div class="fancy-title title-border">
                <h4>Using Search Google</h4>
              </div>


              <form method="get" action="https://google.com/search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Google site search" name="q" size="25">
                  <button type="submit" class="button button-3d w-100 button-small m-0" style="margin-top: 25px !important;" type="submit">Tìm Kiếm / Search</button>
                  <input type="hidden" name="sitesearch" value="<?= base_url('/'); ?>" />
                </div>

              </form>
            

              

            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row gutter-40 col-mb-80">
		    <div class="postcontent col-lg-12">

		      <a href="<?= base_url(); ?>" class="button button-3d button-rounded button-dirtygreen"><i class="fas fa-home"></i>Back Home</a>
		    </div>
		  </div>

      
    </div>
  </div>
</div>



      
      
     
      


<?= $this->endSection(); ?>

<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>

  <title>Error 404 chi tiết bài viết</title>

  

  
<?= $this->endSection(); ?>