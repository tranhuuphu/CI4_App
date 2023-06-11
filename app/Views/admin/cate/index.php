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
            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/cate/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus-circle"></i> Thêm mới</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr>
	                    <th>Tiêu đề danh mục</th>
	                    <th>Danh mục loại</th>
	                    <th>Trạng thái</th>
	                    <th>Show</th>
	                    <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($cate as $c): ?>
                        
                      
		                  <tr>
		                    <td><?= $c['cate_name']; ?></td>
		                    <td><?php if($c['cate_parent_id'] == 0){echo "danh mục lớn";}else{echo "danh mục con";} ?></td>
		                    <td><?php if($c['cate_status'] == 1){echo "<span class='text-bold'>danh mục nổi bật</span>";}else{echo "danh mục thường";} ?></td>
		                    <td></td>
		                    <td><a href="<?= base_url('admin/cate/edit/'.$c['id']) ?>" class="btn btn-success ml-3"><i class="fas fa-edit"></i> Edit</a> <a href="<?= base_url('admin/cate/del/'.$c['id']) ?>" class="btn btn-danger ml-3"><i class="fas fa-trash"></i> Delete</a></td>
		                  </tr>
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Tên</th>
                    <th>Danh mục loại</th>
                    <th>Trạng thái</th>
                    <th>Show</th>
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