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

              <?php if(session()->getFlashdata('update') != null): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo session()->getFlashdata('update'); ?>
                </div>
              <?php endif; ?>

              <?php if(session()->getFlashdata('error') != null): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo session()->getFlashdata('error'); ?>
                </div>
              <?php endif; ?>


              <?php if(session()->getFlashdata('success_one') != null): ?>
                <div class="alert alert-info" role="alert">
                  Bạn đã nén thành công 1 ảnh
                </div>
              <?php endif; ?>

              <h3 class="card-title text-bold">Danh Sách <span class="badge badge-light ml-2">Remain Compress Online: <?= $compressionsThisMonth; ?></span>
                <a href="<?= base_url('admin/image/again') ?>" class="btn btn-success ml-3"><i class="fas fa-compress-arrows-alt"></i> Compress All Again</a>
                <a href="<?= base_url('admin/image/check_again') ?>" class="btn btn-primary ml-3"><i class="fas fa-sync"></i> Arrange Images With Database</a>

                <a href="<?= base_url('admin/image/imageTiny') ?>" class="btn btn-warning ml-3"><i class="fas fa-sync-alt"></i> Reload Page</a>
                <a href="<?= base_url('admin/image') ?>" class="btn btn-danger ml-3"><i class="fas fa-arrow-left"></i> Ảnh Chưa Nén</a>
              </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover table-md" style="width:100%">
                <thead class="thead-dark">
                  <tr class="table align-middle">
                    <th>#</th>
                    <th>Ảnh</th>
                    <th>Name Image</th>
                    <th>Origin</th>
                    <th>First Compressed</th>
                    <th>Second Compressed</th>
                    <th>Third Compressed</th>
                    <th>Số Lần Nén/Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($image as $value): ?>

                      <tr
                        
                        <?php if(session()->getFlashdata('success_one') != null && session()->getFlashdata('success_one') == $value['image_TinyCME_name']): ?>
                          class="table-primary"
                        <?php endif; ?>
                        
                      >
                        <td>
                            <?= $i ?>
                        </td>
                        <td>
                          <?php if($value['image_folder'] == 'image_asset'): ?>

                            <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$value['image_folder'].'/'.$value['image_TinyCME_name'] ?>" height="60"  width="auto"></div>

                          <?php elseif($value['image_folder'] == 'tinymce'): ?>

                            <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$value['image_TinyCME_name'] ?>" height="60" width="auto"></div>
                          

                          <?php elseif($value['image_folder'] == 'post_images'): ?>

                            <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$value['image_folder'].'/'.$value['image_TinyCME_name'] ?>" height="60" width="auto"></div>
                         

                          <?php elseif($value['image_folder'] == 'gallery_asset'): ?>

                            <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$value['image_folder'].'/'.$value['image_TinyCME_name'] ?>" height="60" width="auto"></div>

                          <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><?= $value['image_TinyCME_name'] ?></div>
                        </td>
                        <td style="text-align: center">
                            <?= floor($value['image_size_original']/1024) ?> Kb
                            <hr>
                            <?php if($value['image_folder'] == 'tinymce'): ?>
                              <div class="btn btn-primary" role="alert">
                                <strong>TinyMce</strong>
                              </div>
                            <?php endif; ?>

                            <?php if($value['image_folder'] == 'image_asset'): ?>
                              <div class="btn btn-success" role="alert">
                                <strong>Post</strong>
                              </div>
                            <?php endif; ?>

                            <?php if($value['image_folder'] == 'post_images'): ?>
                              <div class="btn btn-info" role="alert">
                                <strong>Posts</strong>
                              </div>
                            <?php endif; ?>

                            <?php if($value['image_folder'] == 'gallery_asset'): ?>
                              <div class="btn btn-warning" role="alert">
                                <strong>Gallery</strong>
                              </div>
                            <?php endif; ?>

                        </td>
                        <td>
                          <?= floor($value['image_size_compressed']/1024) ?> Kb
                          <p>
                            <i class="fas fa-sort-amount-down"></i> <span class="text-bold text-red"><?php $percent = ($value['image_size_original'] - $value['image_size_compressed'])/$value['image_size_original']; echo number_format( $percent * 100, 0 ) .' %'; ?></span>
                          </p>

                        </td>

                        <td>
                          <?php if($value['image_size_compressed_2'] != null): ?>
                            <?= floor($value['image_size_compressed_2']/1024) ?> Kb
                            <p>
                              <i class="fas fa-sort-amount-down"></i> <span class="text-bold text-red"><?php $percent = ($value['image_size_original'] - $value['image_size_compressed_2'])/$value['image_size_original']; echo number_format( $percent * 100, 0 ) .' %'; ?></span>
                            </p>
                          <?php endif; ?>

                        </td>
                        <td>
                          <?php if($value['image_size_compressed_3'] != null): ?>
                            <?= floor($value['image_size_compressed_3']/1024) ?> Kb
                            <p>
                              <i class="fas fa-sort-amount-down"></i> <span class="text-bold text-red"><?php $percent = ($value['image_size_original'] - $value['image_size_compressed_3'])/$value['image_size_original']; echo number_format( $percent * 100, 0 ) .' %'; ?></span>
                            </p>
                          <?php endif; ?>
                          

                        </td>

                        <td style="text-align: center;">
                          <?php if($value['image_TinyCME_status'] >= 3): ?>
                            <strong style="color: red">Reach Max Times: <?= $value['image_TinyCME_status'] ?></strong>
                            <hr>
                            <a href="<?= base_url("admin/image/single_compress/".$value['id']) ?>" class="btn btn-danger ml-1 ">Nén Lại <i class="fas fa-retweet"></i></a>
                          <?php elseif($value['image_TinyCME_status'] == 2): ?>
                            <strong><?= $value['image_TinyCME_status'] ?></strong>
                            <hr>
                            <a href="<?= base_url("admin/image/single_compress/".$value['id']) ?>" class="btn btn-warning ml-1 ">Nén Lại <i class="fas fa-retweet"></i></a>
                          <?php elseif($value['image_TinyCME_status'] == 1): ?>
                            <strong><?= $value['image_TinyCME_status'] ?></strong>
                            <hr>
                            <a href="<?= base_url("admin/image/single_compress/".$value['id']) ?>" class="btn btn-info ml-1 ">Nén Lại <i class="fas fa-retweet"></i></a>
                          <?php endif; ?>
                          
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
                  <th>Origin</th>
                  <th>First Compressed</th>
                  <th>Second Compressed</th>
                  <th>Third Compressed</th>
                  <th>Số Lần Nén/Option</th>
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