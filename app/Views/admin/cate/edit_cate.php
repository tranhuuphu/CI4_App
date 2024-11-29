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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/cate'); ?>">Danh Mục</a></li>
              <li class="breadcrumb-item active">Sửa Danh Mục <small>(<?= $cate['cate_name'] ?>)</small></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/cate/save/'.$cate['id']); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->

	          <div class="col-md-12">
	          	<?php if(!empty(session()->getFlashdata('errors'))) : ?>
	              <div class="alert alert-danger alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h5><i class="icon fas fa-check"></i> Alert!</h5>
	                Lỗi: <strong><?= session()->getFlashdata('errors'); ?> <span style="color:yellow;">"để khắc phục lỗi hãy chuyển danh mục con thành các danh mục lớn sau đó thực hiện lại thao tác!"</span></strong>
	              </div>
	            <?php endif ?>
	          </div>

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
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'cate_name') : '' ?></p>
                    <input type="text" name="cate_name" value="<?php if(old('cate_name') != null){echo set_value('cate_name');}else{echo $cate['cate_name'];} ?>" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề">
                  </div>
                  <hr>

                  <div class="form-group">
	                  <label>Là danh mục lớn hay danh mục con của?</label>


	                  <select class="selectpicker show-tick show-menu-arrow form-control" data-live-search="true" name="cate_parent_id">
	                  	<option <?php if($cate['cate_parent_id'] == 0){echo "selected";} ?> data-icon="fas fa-dot-circle" value="0" style="text-bold">Danh Mục Lớn</option>
	                  	<option data-divider="true"></option>
	                  	<?php foreach($cate_all as $c): ?>
                        <option data-icon="fas fa-minus" value="<?= $c['id']; ?>" 
                        	<?php if($c['id'] == $cate['cate_parent_id']){echo "selected";} ?>
                        	<?php if($c['cate_type']== "blog" || $c['cate_type']== "cate_gallery"): ?> disabled <?php endif; ?>
                        	<?php if($cate['cate_name']== $c['cate_name'] ): ?> disabled <?php endif; ?>
                        	<?php if($cate['cate_type']== "blog" || $cate['cate_type']== "cate_gallery"): ?> disabled <?php endif; ?>
                        	>
                        	<?= $c['cate_name']; ?>
                        		
                      	</option>
                      <?php endforeach; ?>

                      
										</select>

	                </div>
	                <hr>
	                <div class="form-group">
	                  <label>Loại Danh Mục</label>


	                  <select class="selectpicker show-tick show-menu-arrow form-control" data-live-search="true" name="cate_type">
	                  	<?php if($cate['cate_type'] == 'cate_gallery'): ?>
		                  	<option  data-icon="fas fa-circle" disabled = 'disabled' value="normal" style="text-bold">Thường</option>
		                  	
		                  	<option data-icon="fas fa-circle" disabled = 'disabled' value="blog" style="text-bold">Blog</option>

		                  	<option data-icon="fas fa-circle" selected="selected" value="cate_gallery" style="text-bold">Ảnh Gallery</option>
		                  <?php elseif($cate['cate_type'] == 'blog'): ?>
		                  	<option  data-icon="fas fa-circle" disabled = 'disabled' value="normal" style="text-bold">Thường</option>
		                  	
		                  	<option data-icon="fas fa-circle" selected="selected" value="blog" style="text-bold">Blog</option>

		                  	<option data-icon="fas fa-circle" disabled = 'disabled' value="cate_gallery" style="text-bold">Ảnh Gallery</option>
		                  <?php else: ?>
		                  	<option  data-icon="fas fa-circle" selected="selected" value="normal" style="text-bold">Thường</option>
		                  	
		                  	<option data-icon="fas fa-circle" <?php if($cate_blog == null){}else{echo "disabled = 'disabled'";}  ?> value="blog" style="text-bold">Blog</option>

		                  	<option data-icon="fas fa-circle" <?php if($cate_gallery == null){}else{echo "disabled = 'disabled'";}  ?> value="cate_gallery" style="text-bold">Ảnh Gallery</option>
		                  <?php endif; ?>

                      
										</select>

	                </div>
	                <hr>
	                <div class="form-group clearfix">
                    <label>Danh mục nổi bật?</label>
                    <br>
                    <div class="icheck-primary d-inline pr-3">
                      <input type="radio" id="radioPrimary1" name="cate_status" name="r1" value="1" <?php if($cate['cate_status'] == 1){echo "checked";} ?>>
                      <label for="radioPrimary1">Có</label>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="cate_status" value="0" name="r1" <?php if($cate['cate_status'] == 0){echo "checked";} ?>>
                      <label for="radioPrimary2" class="text-bold">Không</label>
                    </div>
                  </div>

                  <hr>
                  

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
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'cate_meta_desc') : '' ?></p>
                    <textarea class="form-control" style="height:120px" name="cate_meta_desc" maxlength="255"><?php if(old('cate_meta_desc') != null){echo set_value('cate_meta_desc');}else{echo $cate['cate_meta_desc'];} ?></textarea>
                  </div>
                  <div class="form-group">
                    <strong>Meta Key:</strong>
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'cate_meta_key') : '' ?></p>
                    <textarea class="form-control" style="height:120px" name="cate_meta_key" maxlength="255"><?php if(old('cate_meta_key') != null){echo set_value('cate_meta_key');}else{echo $cate['cate_meta_key'];} ?></textarea>
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
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save this</button>
                  <a href="<?= base_url('admin/cate'); ?>" class="btn btn-danger float- ml-3"><i class="far fa-times"></i> Cancel</a>
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
    $(".cate_active .cate_tree_active3 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Chỉnh Sửa Danh Mục: <?= $cate['cate_name'] ?>
<?= $this->endSection(); ?>