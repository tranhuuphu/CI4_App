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
              <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/cate/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus-circle"></i> New</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover table-sm">
                <thead class="thead-dark">
                  <tr>
                    <th>Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Thư Mục Chứa</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($img as $imgMCE): ?>
	                	<tr>
	                		<td>
	                        <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/').'/'.$imgMCE ?>" height="60"></div>
	                    </td>
	                    <td>
	                        Chưa nén
	                    </td>
	                    <td>
	                        <i class="fas fa-folder"></i> TinyMce
	                    </td>
	                	</tr>
	                <?php endforeach; ?>

	                <?php foreach($img2 as $imgMCE2): ?>
	                	<tr>
	                		<td>
	                        <div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$imgMCE2 ?>" height="60"></div>
	                    </td>
	                    <td>
	                        Chưa nén
	                    </td>
	                    <td>
	                        <i class="fas fa-folder"></i> Site Asset
	                    </td>
	                	</tr>
	                <?php endforeach; ?>
                	
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Ảnh</th>
                  <th>Trạng Thái</th>
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