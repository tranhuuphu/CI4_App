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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/page'); ?>">Trang</a></li>
              <li class="breadcrumb-item active">Edit: <?= $page_detail['page_title'] ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/page/edit/'.$page_detail['id']); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->
        
            
	          <div class="col-md-8">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title"><strong>Nội dung chính Trang</strong></h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
	                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tên Trang (URL)</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'page_name') : '' ?></p>
                      <input type="text" name="page_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?php if(old('page_name') != null){echo set_value('page_name');}else{echo $page_detail['page_name'];} ?>">
                    </div>
                    <hr>
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'page_title') : '' ?></p>
	                    <input type="text" name="page_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?php if(old('page_title') != null){echo set_value('page_title');}else{echo $page_detail['page_title'];} ?>">
	                  </div>
	                  <hr>
	                  
	                  <div class="form-group">
									    <div class="form-group">
									      <label>Nội dung bài viết</label>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'page_content') : '' ?></p>
									      <textarea class="form-control" id="content" name="page_content" rows="3" placeholder="Enter ..." height="800px"><?php if(old('page_content') != null){echo set_value('page_content');}else{echo $page_detail['page_content'];} ?></textarea>
									    </div>
									  </div>
	                </div>
	                <!-- /.card-body -->
	            </div>
	            <!-- /.card -->


	          </div>
	          <!--/.col (left) -->
	          <!-- right column -->
	          <div class="col-md-4">
	            <!-- Form Element sizes -->
	            <div class="card card-success">
	              <div class="card-header">
	                <h3 class="card-title">Nội dung thêm</h3>
	              </div>
	              <div class="card-body">

	              	<div class="form-group">
                    <label>Ảnh Hiện Tại Trang</label>
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'page_image') : '' ?></p>
                    <img src="<?= base_url('public/upload/tinymce/image_asset/'.$page_detail['page_image']) ?>" width="100%">
                    <hr>
                    <label>Ảnh Mới (Nếu Cập Nhật)</label>
                    <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="page_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;">
                    <img id="output"/ style="width: 100%" class="pt-1">
                    <script>
                      var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                          URL.revokeObjectURL(output.src) // free memory
                        }
                      };
                    </script>
                  </div>
                  <hr>
                  
                  

	                <div class="form-group clearfix">
                    <label><abbr title="Toàn bộ thông tin trừ trang này sẽ hiển thị lên trang chủ, nội dung sẽ có vị trị footer, thẻ tiêu đề là tiêu đề website, cũng như các thẻ SEO">Là Trang Chính</abbr></label>
                    <br>
                    <div class="icheck-primary d-inline pr-3">
                      <input type="radio" id="radioPrimary1" name="page_status" name="r1" value="1" <?php if($page_detail['page_status'] == 1){echo "checked";} ?>>
                      <label for="radioPrimary1">Có
                      </label>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" <?php if($page_detail['page_status'] == 1){echo "disabled";} ?> name="page_status" value="0" name="r1" <?php if($page_detail['page_status'] == 0){echo "checked";} ?>>
                      <label for="radioPrimary2">Không
                      </label>
                    </div>
                  </div>
                  <hr>
                  

	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->

	            
	          </div>
	          <!--/.col (right) -->
          
	        </div>

	        <!-- Seo -->
	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title"><strong>Seo Info</strong></h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <strong>Meta Desc:</strong>
                        <textarea class="form-control" style="height:120px" name="page_meta_desc" maxlength="255"><?php if(old('page_meta_desc') != null){echo set_value('page_meta_desc');}else{echo $page_detail['page_meta_desc'];} ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <strong>Meta Key:</strong>
                        <textarea class="form-control" style="height:120px" name="page_meta_key" maxlength="255"><?php if(old('page_meta_key') != null){echo set_value('page_meta_key');}else{echo $page_detail['page_meta_key'];} ?></textarea>
                      </div>
                    </div>
                    <hr>


                  </div>

                </div>
              </div>
	        	</div>
	        </div>
	        <!-- /.row -->

	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="card card-success">
	        			<div class="card-footer">
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save Update</button>
                  <a href="<?= base_url('admin/page'); ?>" class="btn btn-danger float- ml-3"><i class="far fa-times"></i> Cancel</a>
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
    $(".page_active").addClass("menu-open");
    $(".page_active a:first").addClass("active");
    $(".page_active .page_tree_active3 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Chỉnh Sửa Trang: <?= $page_detail['page_title'] ?>
<?= $this->endSection(); ?>