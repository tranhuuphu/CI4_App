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
              <li class="breadcrumb-item active">Danh Sách Slider</li>
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
                Bạn vừa thêm mới hoặc chỉnh sửa nội dung: <strong><?= session()->getFlashdata('success'); ?></strong>
              </div>
            <?php endif ?>

            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/carousel/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus"></i> Thêm Ảnh</a>
                  <!-- <a href="<?= base_url('admin/carousel/compress') ?>" class="btn btn-danger ml-3"><i class="fas fa-compress-arrows-alt"></i> Nén Ảnh</a> -->
                </h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr class="thead-dark">
                      <th>Thứ tự</th>
                      <th>Tiêu Đề</th>
	                    <th>Ảnh</th>
	                    <th>Thuộc Phân Loại</th>
                      <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                  	<?php foreach($carousel as $g): ?>
                        
                      
		                  <tr <?php if(!empty(session()->getFlashdata('success')) && session()->getFlashdata('success') == $g['carousel_title'] ): ?> class="table-primary" <?php endif; ?>>
                        <td style="text-align: center;" class="text-bold"><?= $i; ?></td>
                        <?php $i = $i + 1; ?>

                        

                        
		                    <td><?= $g['carousel_title']; ?></td>
                        <td><div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/').'/'.'/'.$g['carousel_image'] ?>" height="60"></div></td>
                        <td><strong><?= $g['carousel_title']; ?></strong></td>
		                    
                        
		                    
		                    <td>

                          <a href="<?= base_url('admin/carousel/edit/'.$g['id']) ?>" class="ml-3"><i class="fas fa-edit"></i> Edit</a>
                          <a href="<?= base_url('admin/carousel/del/'.$g['id']) ?>" class="ml-3 text-red" onclick="return confirm('are you sure delete this image?')"><i class="fas fa-trash"></i> Delete</a></td>
		                  </tr>
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Thứ tự</th>
                    <th>Tiêu Đề</th>
                    <th>Ảnh</th>
                    <th>Thuộc Phân Loại</th>
                    <th>Option</th>
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
    $(".carousel_active").addClass("menu-open");
    $(".carousel_active a:first").addClass("active");
    $(".carousel_active .carousel_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Danh sách Ảnh Slider
<?= $this->endSection(); ?>



