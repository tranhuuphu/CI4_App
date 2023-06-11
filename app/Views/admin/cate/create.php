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
              <li class="breadcrumb-item active">Thêm Danh Mục <small>(New Cate)</small></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/cate/save/'); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->

	          <div class="col-md-7">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title text-bold">Nội dung chính</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề danh mục</label>
                    <input type="text" name="cate_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề" value="<?= old('cate_name'); ?>">
                  </div>
                  <hr>

                  <div class="form-group">
	                  <label>Là danh mục lớn hay danh mục con</label>


	                  <select class="selectpicker show-tick show-menu-arrow form-control" data-live-search="true" name="cate_parent_id">
	                  	<option selected="selected" data-icon="fas fa-star-of-lif" value="0" style="text-bold">--- Danh Mục Lớn</option>
	                  	<option data-divider="true"></option>
	                  	<?php foreach($cate as $c): ?>
                        <option value="<?= $c['id']; ?>"><?= $c['cate_name']; ?></option>
                      <?php endforeach; ?>

                      
										</select>

	                </div>
	                <hr>
	                <div class="form-group clearfix">
                    <label>Danh mục nổi bật?</label>
                    <br>
                    <div class="icheck-primary d-inline pr-3">
                      <input type="radio" id="radioPrimary1" name="cate_status" name="r1" value="1">
                      <label for="radioPrimary1">Có</label>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="cate_status" value="0" name="r1" checked>
                      <label for="radioPrimary2" class="text-bold">Không</label>
                    </div>
                  </div>

                </div>
	                <!-- /.card-body -->
	            </div>
	            <!-- /.card -->
	          </div>
	          <!--/.col (left) -->
	          <!-- right column -->
	          <div class="col-md-5">
	            <!-- Form Element sizes -->
	            <div class="card card-success">
	              <div class="card-header">
	                <h3 class="card-title text-bold">Nội Dung Seo (mô tả)</h3>
	              </div>
	              <div class="card-body">

	              	<div class="form-group">
                    <strong>Meta Desc:</strong>
                    <textarea class="form-control" style="height:120px" name="cate_meta_desc" maxlength="255"><?= old('cate_meta_desc'); ?></textarea>
                  </div>
                  <div class="form-group">
                    <strong>Meta Key:</strong>
                    <textarea class="form-control" style="height:120px" name="cate_meta_key" maxlength="255"><?= old('cate_meta_key'); ?></textarea>
                  </div>

	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->

	          </div>
	          <!--/.col (right) -->
          
	        </div>

	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="card card-success">
	        			<div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
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
  $(".cate_active").addClass("menu-open");
  $(".cate_active a:first").addClass("active");
  $(".cate_active .cate_tree_active2 a:first").addClass("active");
</script>
<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Thêm Mới Danh Mục
<?= $this->endSection(); ?>