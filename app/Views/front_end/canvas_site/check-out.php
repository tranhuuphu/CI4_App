 <?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">



  <section id="page-title" style="margin-bottom: 15px">
    <div class="container clearfix">
      
      <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: bold;">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item active" ><a href="#" style="color: #299ef2">Đặt Hàng</a></li>
      </ol>
    </div>
  </section>
</div>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      
      <div class="row col-mb-50 gutter-50">
        
        <div class="w-100"></div>

        <div class="col-lg-7">
          <h4>
            Your Orders ||
            <a href="<?= site_url('gio-hang') ?>" class="button button-3d"><i class="fa-solid fa-pen-to-square"></i> Edit Your Order</a>
            || <a href="<?= site_url('san-pham') ?>" class="button button-3d button-success btn btn-success"><i class="fas fa-shopping-bag"></i> Continue Shopping</a>
          </h4>
          <div class="table-responsive">
            <table class="table cart">
              <thead>
                <tr>
                  <th class="cart-product-thumbnail">#</th>
                  <th class="cart-product-thumbnail">Image</th>
                  <th class="cart-product-name">Name</th>
                  <th class="cart-product-quantity">Quantity</th>
                  <th class="cart-product-quantity">Price</th>
                  <th class="cart-product-subtotal">Total</th>
                </tr>
              </thead>
              <tbody>
                <?php if($items): ?>
                  <?php $i = 1; ?>
                    <?php foreach($items as $item): ?>

                      <tr class="cart_item">
                        <th scope="row"><?= $i; ?></th>
                        <td class="cart-product-thumbnail">
                          <a href="#"><img width="64" height="64" src="<?= base_url('') ?>/public/upload/tinymce/image_asset/<?= $item['prod_image'] ?>" alt="<?= $item['prod_name'] ?>" /></a>
                        </td>
                        <td class="cart-product-name">
                          <a href="#"><?= $item['prod_name'] ?></a>
                        </td>
                        <td class="cart-product-quantity">
                          <span><?= $item['quantity'] ?></span>
                        </td>
                        <td class="cart-product-price">
                          <span class="amount"><?= number_format($item['prod_price'], 0, ',', '.'); ?></span>
                        </td>
                        
                        <td class="cart-product-subtotal">
                          <span class="amount"><strong><?= number_format($item['prod_price']*$item['quantity'], 0, ',', '.'); ?></strong></span>
                        </td>
                      </tr>
                    <?php $i+=1; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                <tr class="cart_item table-primary">
                  <td class="cart-product-name" colspan="4">
                    <strong>Total</strong>
                  </td>
                  <td class="color" colspan="2" style="text-align: right; ">
                    <strong><?= number_format($total, 0, ',', '.'); ?> VNĐ</strong>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>

          
          <div class="accordion">
            <div class="accordion-header">
              <div class="accordion-icon">
                <i class="accordion-closed uil uil-minus"></i>
                <i class="accordion-open bi-check-lg"></i>
              </div>
              <div class="accordion-title">
                Direct Bank Transfer
              </div>
            </div>
            <div class="accordion-content">
              Ngân Hàng: Vietcombank (VCB) <br>
              STK: 0011004116016 <br>
              Chi Nhánh: Quận Tây Hồ Hà Nội <br>
              Chủ Tài Khoản: Trần Hữu Phú <br>

              STK Momo: 0974953600 <br>
              Tên TK: Tran Huu Phu <br>
              Nội dung chuyển khoản: ghi tên và loại hàng đặt
            </div>
            <div class="accordion-header">
              <div class="accordion-icon">
                <i class="accordion-closed uil uil-minus"></i>
                <i class="accordion-open bi-check-lg"></i>
              </div>
              <div class="accordion-title">
                Cheque Payment
              </div>
            </div>
            <div class="accordion-content">
              Liên hệ trực tiếp ĐT/Zalo: 0974 953 600 để tư vấn
            </div>
            
          </div>

        </div>
        <div class="col-lg-5">
          <h4>Thông tin</h4>
          <form method="post" action="<?= site_url('hoan-thanh-dat-hang') ?>">
            <?= csrf_field(); ?>
            <div class="col-md-12 form-group">
              <label for="shipping-form-lname">Họ và tên</label>
              <label class="text-left text-danger" for="shipping-form-lname"><?= isset($validation) ? display_error($validation, 'name') : '' ?></label>
              <input type="text" value="<?= set_value('name'); ?>" id="shipping-form-lname" name="name" value class="form-control" />
            </div>
            <div class="col-md-12 form-group">
              <label for="shipping-form-lname">Điện Thoại</label>
              <label class="text-left text-danger" for="shipping-form-lname"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></label>
              <input type="text" id="shipping-form-lname" name="phone" value="<?= set_value('phone'); ?>" value class="form-control" />
            </div>
            <div class="w-100"></div>
            <div class="col-12 form-group">
              <label for="shipping-form-companyname">Địa chỉ & ghi chú</label>
              <label class="text-left text-danger" for="shipping-form-lname"><?= isset($validation) ? display_error($validation, 'address') : '' ?></label>
              <textarea class="form-control" name="address"><?= set_value('address'); ?></textarea>
            </div>
            
            <div class="d-flex justify-content-end">
              <button type="submit" class="button button-3d">Place Order <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>




<?= $this->endSection(); ?>


<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>

  <title>danh sach gio hang || hoan tat don hang</title>

  
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