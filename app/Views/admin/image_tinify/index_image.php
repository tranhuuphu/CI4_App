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

              <h3 class="card-title text-bold">All Image <span class="badge badge-light"><?php echo count($img)+count($img2); ?> ảnh</span><span class="badge badge-light ml-2">Remain Compress Online: <?= $compressionsThisMonth; ?></span><a href="<?= base_url('admin/image/compress') ?>" class="btn btn-danger ml-3"><i class="fas fa-compress-alt"></i> Compress First Times</a></h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover table-md" style="width:100%">
                <thead class="thead-dark">
                  <tr>
                    <th>Ảnh</th>
                    <th>Name Image</th>
                    <th>Dung Lượng</th>
                    <th>Thư Mục Chứa</th>
                  </tr>
                </thead>
                <tbody>
                	

                  <?php $count = count($img); ?>
                    
                  
                  <?php for ($row = 0; $row < $count; $row++): ?>
                    
                      <tr>
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
                      </tr>
                    
                  <?php endfor; ?>


                  <?php $count2 = count($img2); ?>
                    
                  
                  <?php for ($row = 0; $row < $count2; $row++): ?>
                    
                      <tr>
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
                            <i class="fas fa-folder"></i> Image Asset
                        </td>
                      </tr>
                    
                  <?php endfor; ?>

	                
                	
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Ảnh</th>
                  <th>Name Image</th>
                  <th>Dung Lượng</th>
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
  $(".image_active .image_tree_active2 a:first").addClass("active");
</script>
<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Toàn bộ ảnh
<?= $this->endSection(); ?>