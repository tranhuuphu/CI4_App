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
            <li class="breadcrumb-item active">Danh Sách Ảnh Đã Nén</li>
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
              <?php if(session()->getFlashdata('success') != null): ?>
                <div class="alert alert-primary" role="alert">
                  <?php echo session()->getFlashdata('success'); ?>
                </div>
              <?php endif; ?>
              <?php if(session()->getFlashdata('ok') != null): ?>
                <div class="alert alert-primary" role="alert">
                  <?php echo session()->getFlashdata('ok'); ?>
                </div>
              <?php endif; ?>
              <h3 class="card-title text-bold">Danh Sách <span class="badge badge-light ml-2">Remain Compress Online: <?= $compressionsThisMonth; ?></span>
                <a href="<?= base_url('admin/image/again') ?>" class="btn btn-success ml-3"><i class="fas fa-compress-arrows-alt"></i> Compress Again</a>
                <a href="<?= base_url('admin/image/check_again') ?>" class="btn btn-primary ml-3"><i class="fas fa-sync"></i> Arrange Images</a>
              </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover table-md" style="width:100%">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Ảnh</th>
                    <th>Name Image</th>
                    <th>Dung Lượng Gốc</th>
                    <th>Dung Lượng Sau Nén</th>
                    <th>Số Lần Nén</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($image as $value): ?>
                    
                      <tr>
                        <td>
                            <?= $i ?>
                        </td>
                        <td>
                          <?php if($value['image_folder'] == 'image_asset'): ?>
                            <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$value['image_folder'].'/'.$value['image_TinyCME_name'] ?>" height="60"></div>
                          <?php elseif($value['image_folder'] == 'tinymce'): ?>
                            <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$value['image_TinyCME_name'] ?>" height="60"></div>
                          <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><?= $value['image_TinyCME_name'] ?></div>
                        </td>
                        <td>
                            <?= floor($value['image_size_original']/1024) ?> Kb
                        </td>
                        <td>
                          <?= floor($value['image_size_compressed']/1024) ?> Kb
                          <p>
                            <i class="fas fa-sort-amount-down"></i> <span class="text-bold text-red"><?php $percent = ($value['image_size_original'] - $value['image_size_compressed'])/$value['image_size_original']; echo number_format( $percent * 100, 0 ) .' %'; ?></span>
                          </p>

                        </td>
                        <td>
                            <?= $value['image_TinyCME_status'] ?>
                        </td>
                      </tr>
                      <?php $i += 1; ?>
                    
                  <?php endforeach; ?>

                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Ảnh</th>
                  <th>Name Image</th>
                  <th>Dung Lượng Gốc</th>
                  <th>Dung Lượng Sau Nén</th>
                  <th>Thư Mục Chứa</th>
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
  $(".image_active").addClass("menu-open");
  $(".image_active a:first").addClass("active");
  $(".image_active .image_tree_active3 a:first").addClass("active");
</script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Ảnh Đã Nén
<?= $this->endSection(); ?>