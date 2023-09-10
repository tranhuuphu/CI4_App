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
              <li class="breadcrumb-item active">Sửa Loại Gallery <small>(<?= $type_detail['gallery_type_name'] ?>)</small></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/type_gallery/save/'.$type_detail['id']); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->

	          <div class="col-md-12">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title text-bold">Nội dung chính</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề Loại Gallery</label>
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_type_name') : '' ?></p>
                    <input type="text" name="gallery_type_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề" value="<?php if(old('gallery_type_name') != null){echo set_value('gallery_type_name');}else{echo $type_detail['gallery_type_name'];} ?>">
                  </div>


                </div>
	                <!-- /.card-body -->
	            </div>
	            <!-- /.card -->
	          </div>
	          <!--/.col (left) -->

          
	        </div>

	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="card card-success">
	        			<div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save This</button>
                  <a href="<?= base_url('admin/type_gallery'); ?>" class="btn btn-danger float-right"><i class="far fa-window-close"></i> Cancel</a>
                </div>
	        		</div>
	        	</div>
	        </div>

        </form>
      </div><!-- /.container-fluid -->
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
Chỉnh Sửa Loại Gallery: <?= $type_detail['gallery_type_name'] ?>
<?= $this->endSection(); ?>