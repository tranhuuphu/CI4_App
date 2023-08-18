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
          <h4>Your Orders</h4>
          <div class="table-responsive">
            <table class="table cart">
              <thead>
                <tr>
                  <th class="cart-product-thumbnail">&nbsp;</th>
                  <th class="cart-product-name">Product</th>
                  <th class="cart-product-quantity">Quantity</th>
                  <th class="cart-product-subtotal">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="cart_item">
                  <td class="cart-product-thumbnail">
                    <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress" /></a>
                  </td>
                  <td class="cart-product-name">
                    <a href="#">Pink Printed Dress</a>
                  </td>
                  <td class="cart-product-quantity">
                    <div class="quantity">
                      1x2
                    </div>
                  </td>
                  <td class="cart-product-subtotal">
                    <span class="amount">$39.98</span>
                  </td>
                </tr>
                <tr class="cart_item">
                  <td class="cart-product-thumbnail">
                    <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/shoes-2.jpg" alt="Checked Canvas Shoes" /></a>
                  </td>
                  <td class="cart-product-name">
                    <a href="#">Checked Canvas Shoes</a>
                  </td>
                  <td class="cart-product-quantity">
                    <div class="quantity">
                      1x1
                    </div>
                  </td>
                  <td class="cart-product-subtotal">
                    <span class="amount">$24.99</span>
                  </td>
                </tr>
                <tr class="cart_item">
                  <td class="cart-product-thumbnail">
                    <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/tshirt-2.jpg" alt="Pink Printed Dress" /></a>
                  </td>
                  <td class="cart-product-name">
                    <a href="#">Blue Men Tshirt</a>
                  </td>
                  <td class="cart-product-quantity">
                    <div class="quantity">
                      1x3
                    </div>
                  </td>
                  <td class="cart-product-subtotal">
                    <span class="amount">$41.97</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table cart">
              <tbody>
                
                <tr class="cart_item">
                  <td class="cart-product-name">
                    <strong>Total</strong>
                  </td>
                  <td class="cart-product-name">
                    <span class="amount color lead"><strong>$106.94</strong></span>
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
              Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
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
              Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.
            </div>
            <div class="accordion-header">
              <div class="accordion-icon">
                <i class="accordion-closed uil uil-minus"></i>
                <i class="accordion-open bi-check-lg"></i>
              </div>
              <div class="accordion-title">
                Paypal
              </div>
            </div>
            <div class="accordion-content">
              Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
            </div>
          </div>

        </div>
        <div class="col-lg-5">
          <h4>Thông tin</h4>
          <div class="col-md-12 form-group">
            <label for="shipping-form-lname">Họ và tên</label>
            <input type="text" id="shipping-form-lname" name="shipping-form-lname" value class="form-control" />
          </div>
          <div class="col-md-12 form-group">
            <label for="shipping-form-lname">Điện Thoại</label>
            <input type="text" id="shipping-form-lname" name="shipping-form-lname" value class="form-control" />
          </div>
          <div class="w-100"></div>
          <div class="col-12 form-group">
            <label for="shipping-form-companyname">Địa chỉ</label>
            <textarea class="form-control"></textarea>
          </div>
          
          <div class="d-flex justify-content-end">
            <a href="#" class="button button-3d">Place Order</a>
          </div>
        </div>
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