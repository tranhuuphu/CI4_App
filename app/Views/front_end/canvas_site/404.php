<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container clearfix">
  <div class="row align-items-center col-mb-80">
    <div class="col-lg-6">
      <div class="error404 center">404</div>
    </div>
    <div class="col-lg-6">
      <div class="heading-block text-center text-lg-start border-bottom-0">
        <h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
        <span>Try searching for the best match or browse the links below:</span>
      </div>
      <form class="top-search-form mb-5" action="<?= base_url('/'); ?>/search" method="get" class="">
        <div class="input-group input-group-lg">
          <input type="text" class="form-control" placeholder="Search for Pages..." />
          <button class="btn btn-danger" type="button">Search</button>
        </div>
      </form>

      <div class="row gutter-40 col-mb-80">
		    <div class="postcontent col-lg-9">

		      <a href="<?= base_url(); ?>" class="button button-3d button-rounded button-dirtygreen"><i class="fas fa-home"></i> Go Home</a>
		    </div>
		  </div>

      
    </div>
  </div>
</div>



      
      
     
      


<?= $this->endSection(); ?>

<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>

  <title>Error 404</title>

  

  
<?= $this->endSection(); ?>