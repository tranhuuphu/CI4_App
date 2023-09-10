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
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn vừa thêm mới nội dung: <strong><?= session()->getFlashdata('success'); ?></strong>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('update'))) : ?>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn vừa chỉnh sửa nội dung: <strong><?= session()->getFlashdata('update'); ?></strong>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('delete'))) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn vừa xóa nội dung: <strong><?= session()->getFlashdata('delete'); ?></strong>
              </div>
            <?php endif ?>

            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/cate/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus-circle"></i> Thêm Mới</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr>
                      <th>#</th>
	                    <th>Tiêu đề danh mục</th>
	                    <th>Danh mục loại</th>
	                    <th>Trạng thái</th>
	                    <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                  	<?php foreach($cate as $c): ?>
                        
                      
		                  <tr
                        <?php if(!empty(session()->getFlashdata('success')) && session()->getFlashdata('success') == $c['cate_name'] ): ?> class="table-success" <?php endif; ?>
                        <?php if(!empty(session()->getFlashdata('update')) && session()->getFlashdata('update') == $c['cate_name'] ): ?> class="table-info" <?php endif; ?>
                      >
                        <td><?= $i; ?></td>
		                    <td><?= $c['cate_name']; ?> <small style="color: red"><?php if($c['cate_type'] == 'blog'){echo "Blog";}elseif($c['cate_type'] == 'cate_gallery'){echo "Cate Bộ Sưu Tập";} ?></small></td>
		                    <td><?php if($c['cate_parent_id'] == 0){echo "danh mục lớn";}else{echo "<span style='color: blue'>danh mục con</span>";} ?></td>
		                    <td><?php if($c['cate_status'] == 1){echo "<span class='text-bold'>danh mục nổi bật</span>";}else{echo "danh mục thường";} ?></td>
		                    <td><a href="<?= base_url('admin/cate/edit/'.$c['id']) ?>" class="btn btn-success ml-3"><i class="fas fa-edit"></i> Edit</a> <a href="<?= base_url('admin/cate/del/'.$c['id']) ?>" class="btn btn-danger ml-3"><i class="fas fa-trash"></i> Delete</a></td>
		                  </tr>
                      <?php $i += 1; ?>
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Danh mục loại</th>
                    <th>Trạng thái</th>
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
    $(".cate_active").addClass("menu-open");
    $(".cate_active a:first").addClass("active");
    $(".cate_active .cate_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Menu Danh Mục
<?= $this->endSection(); ?>