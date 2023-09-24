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
            <li class="breadcrumb-item active">Danh Sách Danh Mục</li>
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
          <?php if(!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              Bạn vừa thực hiện thao tác <strong><?= session()->getFlashdata('success'); ?></strong>
            </div>
          <?php endif ?>
          <div class="card">
            <div class="card-header card-danger">

              <h3 class="card-title text-bold">All Image <span class="badge badge-light"><?php echo count($img)+count($img2)+count($img3)+count($img4); ?> ảnh</span><span class="badge badge-light ml-2">Remain Compress Online: <?= $compressionsThisMonth; ?></span><a href="<?= base_url('admin/image/compress') ?>" class="btn btn-danger ml-3"><i class="fas fa-compress-alt"></i> Compress First Times</a></h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover table-md align-middle" style="width:100%">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Ảnh</th>
                      <th>Name Image</th>
                      <th>Dung Lượng</th>
                      <th>Thư Mục Chứa</th>
                      <th>Nén Đơn</th>
                    </tr>
                  </thead>
                  <tbody>
                  	

                    <!-- Folder TinyMCE -->
                    <?php $count = count($img); $i = 1; ?>
                    <?php for ($row = 0; $row < $count; $row++): ?>
                      <?php //if(in_array($check, $img[$row][0])): ?>
                        <tr>
                          <td>
                              <?= $i ?>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce').'/'.$img[$row][0] ?>" height="60"></div>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><?= $img[$row][0] ?></div>
                          </td>
                          <td>
                              <?php
                                echo floor($img[$row][1]/1024).' Kb';
                              ?>
                          </td>
                          <td>
                              <i class="fas fa-folder"></i> TinyMce
                          </td>
                          <td>
                              <a href="<?= base_url("admin/image/compress_one/".'tinymce'.'/'.$img[$row][0]) ?>" class= "btn btn-default">Nén Ảnh Này</a>
                          </td>
                        </tr>
                        <?php $i += 1; ?>
                      <?php //endif; ?>
                    <?php endfor; ?>


                    <!-- Folder TinyMCE/image_asset -->
                    <?php $count2 = count($img2); ?>
                    <?php for ($row = 0; $row < $count2; $row++): ?>
                      
                        <tr>
                          <td>
                              <?= $i ?>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/image_asset').'/'.$img2[$row][0] ?>" height="60"></div>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><?= $img2[$row][0] ?></div>
                          </td>
                          <td>
                              <?php
                                echo floor($img2[$row][1]/1024).' Kb';
                                if($img2[$row][1]/1024 > 1024){
                                  echo "<p class='text-bold'>".number_format($img2[$row][1]/1048576, 2).' Mb'.'</p>';
                                }
                              ?>
                          </td>
                          <td>
                              <i class="far fa-folder"></i> Post Singer
                          </td>
                          <td>
                              <a href="<?= base_url("admin/image/compress_one/".'image_asset'.'/'.$img2[$row][0]) ?>" class= "btn btn-info">Nén Ảnh Này</a>
                          </td>
                        </tr>
                        <?php $i += 1; ?>
                    <?php endfor; ?>


                    <!-- Folder TinyMCE/post_images -->
                    <?php $count3 = count($img3); ?>
                    <?php for ($row = 0; $row < $count3; $row++): ?>
                      
                        <tr>
                          <td>
                              <?= $i ?>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/post_images').'/'.$img3[$row][0] ?>" height="60"></div>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><?= $img3[$row][0] ?></div>
                          </td>
                          <td>
                              <?php
                                echo floor($img3[$row][1]/1024).' Kb';
                                if($img3[$row][1]/1024 > 1024){
                                  echo "<p class='text-bold'>".number_format($img3[$row][1]/1048576, 2).' Mb'.'</p>';
                                }
                              ?>
                          </td>
                          <td>
                              <i class="fas fa-folder-open"></i> Post Gallery
                          </td>
                          <td>
                              <a href="<?= base_url("admin/image/compress_one/".'post_images'.'/'.$img3[$row][0]) ?>" class= "btn btn-success">Nén Ảnh Này</a>
                          </td>
                        </tr>
                        <?php $i += 1; ?>
                    <?php endfor; ?>


                    <!-- Folder TinyMCE/gallery_asset -->
                    <?php $count4 = count($img4); ?>
                    <?php for ($row = 0; $row < $count4; $row++): ?>
                      
                        <tr>
                          <td>
                              <?= $i ?>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/gallery_asset').'/'.$img4[$row][0] ?>" height="60"></div>
                          </td>
                          <td>
                              <div class="d-flex align-items-center"><?= $img4[$row][0] ?></div>
                          </td>
                          <td>
                              <?php
                                echo floor($img4[$row][1]/1024).' Kb';
                                if($img4[$row][1]/1024 > 1024){
                                  echo "<p class='text-bold'>".number_format($img4[$row][1]/1048576, 2).' Mb'.'</p>';
                                }
                              ?>
                          </td>
                          <td>
                              <i class="far fa-folder-open"></i> Gallery Image
                          </td>
                          <td>
                              <a href="<?= base_url("admin/image/compress_one/".'gallery_asset'.'/'.$img4[$row][0]) ?>" class="btn btn-primary">Nén Ảnh Này</a>
                          </td>
                        </tr>
                        <?php $i += 1; ?>
                    <?php endfor; ?>

  	                
                  	
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Ảnh</th>
                    <th>Name Image</th>
                    <th>Dung Lượng</th>
                    <th>Thư Mục Chứa</th>
                    <th>Nén</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
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
  $(".image_active .image_tree_active2 a:first").addClass("active");
</script>
<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Toàn bộ ảnh
<?= $this->endSection(); ?>