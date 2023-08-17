 <?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">



  <section id="page-title" style="margin-bottom: 15px">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item active" ><a href="#" style="color: #299ef2">Giỏ Hàng</a></li>
      </ol>
    </div>
  </section>
</div>

<section id="content">
  <div class="content-wrap">
    <div class="container">


      <div class="table-responsive">
        <table class="table table-striped table-bordered caption-top">
          <caption>Danh Sách Đơn Hàng</caption>
          <thead class="table-info table-lg">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Giá</th>
              <th scope="col">Số Lượng</th>
              <th scope="col">Tổng</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if($items): ?>
              <?php $i = 1; ?>
              <?php foreach($items as $item): ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $item['prod_name'] ?></td>
                  <td><?= $item['prod_image'] ?></td>
                  <td><?= number_format($item['prod_price'], 0, ',', '.'); ?></td>
                  <td><?= $item['quantity'] ?></td>
                  <td><?= number_format($item['prod_price']*$item['quantity'], 0, ',', '.'); ?></td>
                  <td>
                    <a href="<?= site_url('cart/remove/'.$item['id']) ?>"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php $i+=1; ?>
              <?php endforeach; ?>
            <?php endif; ?>
            
            <tr>
              <td colspan="5" align="text-center">Grand Total</td>
              <td colspan="2" style="text-align: center; font-weight: bold"><?= number_format($total, 0, ',', '.'); ?> VNĐ</td>
            </tr>
          </tbody>
        </table>
        <a href="<?= site_url('san-pham') ?>">Continue Shopping</a>
      </div>


    </div>
  </div>
</section>

<?= $this->endSection(); ?>


<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>

  <title>danh sach gio hang</title>

  
  <meta name="description" content="danh sach gio hang" />
  <meta name="keywords" content="danh sach gio hang" />
  <meta name="title" content="danh sach gio hang" />
  


  <meta name="copyright" content="<?= base_url() ?>" />



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="danh sach gio hang">
  <meta itemprop="image" content="">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="danh sach gio hang">
  <meta name="twitter:title" content="danh sach gio hang">
  <meta name="twitter:description" content="danh sach gio hang>">
  <meta name="twitter:creator" content="<?= base_url() ?>">
  <meta name="twitter:image" content="">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="danh sach gio hang" />
  <meta property="og:title" content="danh sach gio hang" />
  <meta property="og:url" content="<?= base_url() ?>" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="danh sach gio hang" />
  <meta property="og:locale" content="vi_VN" />
  
  <meta name="thumbnail" content="" />
  <meta property="og:image:secure_url" content="" />

  


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="" itemprop="datePublished" name="pubdate"/>
  <meta content="" itemprop="dateModified" name="lastmod"/>
  <meta content="" itemprop="dateCreated"/>

  
<?= $this->endSection(); ?>