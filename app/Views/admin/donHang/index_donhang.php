<?= $this->extend('admin/admin-layout'); ?>

<?= $this->section('content'); ?>


	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Đơn Hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách Đơn Hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-hover table-strip" style="width:100%">
                  <thead>
	                  <tr>
                      <th>#</th>
	                    <th>Khách Hàng</th>
	                    <th>SĐT</th>
	                    <th>Địa Chỉ</th>
	                    <th>Chi tiết</th>
                      <th>Tổng</th>
                      <th>Ngày đặt</th>
	                    <th>Trạng thái</th>
	                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1 ?>
                  	<?php foreach($cart as $c): ?>
                        <?php
                          $order = json_decode($c['order_content'], true);
                          $count = count($order);

                          
                         ?>
                      
		                  <tr>
                        <td ><?= $i ?></td>
                        <td ><?= $c['order_name']; ?></td>
                        <td ><?= $c['order_phone']; ?></td>
                        <td ><?= $c['order_adress']; ?></td>
                        <td>
                            
                            <?php foreach($order as $ord) : ?>
                                
                                <div class="card mb-3" style="max-width: 540px;">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?= base_url('public/upload/tinymce').'/'.$ord['prod_image'] ?>" class="img-fluid rounded-start" style="height: auto; width: auto;">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title"><a href="<?= base_url('/').'/'.$ord['cate_slug'].'/'.$ord['prod_slug'].'-'.$ord['id'].'.html' ?>" target="_blank"><strong><?= $i; ?>: <?= $ord['prod_name'] ?></strong></a></h5>
                                        <br>
                                        <hr>
                                        <p class="card-text">
                                          Price: <strong><?= number_format($ord['prod_price']) ?> VNĐ</strong>
                                          <br>
                                          Quantity: <strong>x<?= $ord['quantity'] ?> Ea</strong>
                                          <br>
                                          Total: <strong style="color: red"><?= number_format($ord['prod_price']*$ord['quantity']) ?> VNĐ</strong>
                                        </p>
                                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <?php $i += 1 ?>

                              <?php endforeach; ?>
                          
                          

                        </td>
                        <td ><?= number_format($c['order_total']); ?></td>
                        <td ><?= substr($c['created_at'], 0, 10); ?></td>
                        <td >
                          <?php if($c['checked_order'] == 0): ?>
                            <strong>ĐH chưa được xử lý</strong>
                            <hr>
                            <a href="<?= base_url('admin/don-hang/edit/'.$c['id'].'/'.'1') ?>" class="btn btn-success mt-1"><i class="fas fa-check"></i> Đã xử lý</a>
                            <hr>
                            <a href="<?= base_url('admin/don-hang/del/'.$c['id']) ?>" class="btn btn-danger mt-1" onclick="return confirm('are you sure?')"><i class="fas fa-trash"></i> Xóa đơn hàng</a>
                          <?php elseif($c['checked_order'] == 1): ?>
                            <strong>Đơn hàng đã được xử lý</strong>
                            <hr>
                            <a href="<?= base_url('admin/don-hang/edit/'.$c['id'].'/'.'2') ?>" class="btn btn-info mt-1"><i class="fas fa-sync-alt"></i> Khách hoàn đơn hoặc hủy</a>
                          <?php elseif($c['checked_order'] == 2): ?>
                            KH hoàn trả đơn hàng
                            <hr>
                            <span  class="btn btn-warning mt-1"><i class="fas fa-ban"></i> Đã hủy đơn trên HT</span>
                            <hr>
                            <a href="<?= base_url('admin/don-hang/del/'.$c['id']) ?>" class="btn btn-danger mt-1" onclick="return confirm('are you sure?')"> Xóa đơn hàng</a>
                          <?php endif; ?>
                        </td>
                        
		                  </tr>
	                  <?php endforeach; ?>
                    <?php $i = 1 ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Khách Hàng</th>
                    <th>SĐT</th>
                    <th>Địa Chỉ</th>
                    <th>Chi tiếtg</th>
                    <th>Tổng</th>
                    <th>Ngày đặt</th>
                    <th>Trạng thái</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script type="text/javascript">
    $(".cart_active").addClass("menu-open");
    $(".cart_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Danh Sách Đơn Hàng
<?= $this->endSection(); ?>