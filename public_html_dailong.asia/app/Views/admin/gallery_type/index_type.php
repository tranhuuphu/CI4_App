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
              <li class="breadcrumb-item active">Danh Sách Type Gallery</li>
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
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/type_gallery/create_type') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus-circle"></i> Thêm Mới</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr>
	                    <th>#</th>
	                    <th>Tiêu đề</th>
	                    <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($typeGallery as $tg): ?>
                        
                      
		                  <tr <?php if(!empty(session()->getFlashdata('success')) && session()->getFlashdata('success') == $tg['gallery_type_name'] ): ?> class="table-success" <?php endif; ?>>
		                    <td><?= $tg['id']; ?></td>
		                    <td><?= $tg['gallery_type_name']; ?></td>
		                    <td><a href="<?= base_url('admin/type_gallery/edit/'.$tg['id']) ?>" class="btn btn-success ml-3"><i class="fas fa-edit"></i> Edit</a> <a href="<?= base_url('admin/type_gallery/del/'.$tg['id']) ?>" class="btn btn-danger ml-3"><i class="fas fa-trash"></i> Delete</a></td>
		                  </tr>
                      
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Tiêu đề</th>
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
    $(".type_gallery_active").addClass("menu-open");
    $(".type_gallery_active a:first").addClass("active");
    $(".type_gallery_active .type_gallery_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Menu Phân Loại Bộ Sưu Tâp
<?= $this->endSection(); ?>