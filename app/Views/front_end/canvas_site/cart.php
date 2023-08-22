 <?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">

  <section id="page-title" style="margin-bottom: 15px">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item active" ><a href="<?= site_url('gio-hang') ?>" style="color: #299ef2">Giỏ Hàng</a></li>
      </ol>
    </div>
  </section>
</div>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <a href="<?= site_url('san-pham'); ?>" class="button button-small button-3d m-0 button-3d m-0 button-black mb-3">Continue Shopping <i class="fab fa-hive"></i></a>
      <form method="post" action="<?= site_url('gio-hang/cap-nhat') ?>">
        <?= csrf_field(); ?>
        <div class="table-responsive">
          <table class="table cart mb-5 table-bordered">
            <thead>
              <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col" class="cart-product-name">Name</th>
                <th scope="col" class="cart-product-thumbnail">Ảnh</th>
                <th scope="col" class="cart-product-price">Giá</th>
                <th scope="col" class="cart-product-quantity">Số Lượng</th>
                <th scope="col" class="cart-product-subtotal">Tổng</th>
                <th scope="col" class="cart-product-remove">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if($items): ?>
                <?php $i = 1; ?>
                <?php foreach($items as $item): ?>
                  <tr class="cart_item">
                    <th scope="row"><?= $i; ?></th>
                    <td class="cart-product-thumbnail">
                      <a href="<?= site_url('').$item['cate_slug'].'/'.$item['prod_slug'].'-'.$item['id'].'.html' ?>" target="_blank"><img height="64" src="<?= base_url('') ?>/public/upload/tinymce/image_asset/<?= $item['prod_image'] ?>" alt="<?= $item['prod_name'] ?>" /></a>
                    </td>
                    <td class="cart-product-name">
                      <a href="<?= site_url('').$item['cate_slug'].'/'.$item['prod_slug'].'-'.$item['id'].'.html' ?>" target="_blank"><?= $item['prod_name'] ?></a>
                    </td>
                    <td class="cart-product-price">
                      <span class="amount"><?= number_format($item['prod_price'], 0, ',', '.'); ?></span>
                    </td>
                    <td class="cart-product-quantity">
                      <div class="quantity">
                        <input type="button" value="-" class="minus" />
                        <input type="number" min="1" name="quantity[]" value="<?= $item['quantity'] ?>" class="qty" />
                        <input type="button" value="+" class="plus" />
                      </div>
                    </td>
                    <td class="cart-product-subtotal">
                      <span class="amount"><?= number_format($item['prod_price']*$item['quantity'], 0, ',', '.'); ?></span>
                    </td>

                    <td class="cart-product-remove">
                      <a href="<?= site_url('cart/remove/'.$item['id']) ?>" class="remove" title="Remove this item" style="text-align: center;"><i class="fa-solid fa-trash-alt"></i></a>
                    </td>
                    
                  </tr>


                  
                <?php $i+=1; ?>
              <?php endforeach; ?>
            <?php elseif(!$items): ?>
            <tr>
              <td class="cart-product-remove" colspan="7">
                Giỏ hàng trống
              </td>
              
            </tr>
            <?php endif; ?>


              
              
              <tr class="cart_item">
                <td colspan="7">
                  <div class="row justify-content-between align-items-center py-2 col-mb-30">
                    <div class="col-lg-auto ps-lg-0">
                      <div class="row align-items-center">
                        
                      </div>
                    </div>
                    <div class="col-lg-auto pe-lg-0">
                      <!-- <a href="#" class="button button-small button-3d m-0">Update Cart</a> -->
                      <button type="submit"  <?php if($items): ?> class="button button-small button-3d m-0" <?php elseif(!$items): ?> class="button button-small button-3d m-0 disabled" <?php endif; ?>>Update Quantity <i class="fas fa-sync"></i></button>
                      <a href= "<?= site_url('dat-hang'); ?>" <?php if($items): ?> class="button button-small button-3d mt-2 mt-sm-0 me-0 mb-0 button-black" <?php elseif(!$items): ?> class="button button-small button-3d mt-2 mt-sm-0 me-0 mb-0 button-black disabled" <?php endif; ?>>Proceed to Checkout  <i class="fas fa-shopping-cart"></i></a>
                    </div>
                  </div>
                </td>


              </tr>

              <tr class="cart_item table-primary">
                <td colspan="5" align="text-center"><strong>Grand Total</strong></td>
                <td colspan="2" style="text-align: center; font-weight: bold"><?= number_format($total, 0, ',', '.'); ?> VNĐ</td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
      
      
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