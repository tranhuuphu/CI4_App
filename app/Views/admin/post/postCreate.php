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
              <li class="breadcrumb-item active">Add New Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/post/save'); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->
        
            
	          <div class="col-md-8">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Nội dung chính</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
	                <div class="card-body">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
	                    <input type="text" name="post_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?= old('post_title'); ?>">
	                  </div>
	                  <hr>
	                  <div class="form-group">
	                    <label for="exampleInputPassword1">Tóm tắt</label>
	                    <textarea class="form-control" value="<?= old('post_intro'); ?>" style="height:100px" name="post_intro" maxlength="160"></textarea>
	                  </div>
	                  <hr>
	                  <div class="form-group">
									    <div class="form-group">
									      <label>Nội dung bài viết</label>
									      <textarea class="form-control" id="content" name="post_content" rows="3" placeholder="Enter ..." height="800px"><?= old('post_content'); ?></textarea>
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
                    <label>Ảnh bài viết</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="post_img" accept="image" required onchange="loadFile(event)" style="overflow: hidden;">
                    <hr>
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

	              	<div class="form-group">
	                  <label>Bài viết thuộc danh mục</label>

	                  <select class="selectpicker show-tick form-control select2 select2-danger">
										  <option>Mustard</option>
										  <option>Ketchup</option>
										  <option>Relish</option>
										</select>

	                </div>

	                <div class="form-group clearfix">
                    <label>Bài viết nổi bật</label>
                    <br>
                    <div class="icheck-primary d-inline pr-3">
                      <input type="radio" id="radioPrimary1" name="post_featured" name="r1" value="1">
                      <label for="radioPrimary1">Có
                      </label>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="post_featured" value="0" name="r1" checked>
                      <label for="radioPrimary2">Không
                      </label>
                    </div>
                  </div>

	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->

	            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Dành Cho Sản Phẩm Bán Hàng</h3>
                </div>
                <div class="card-body">
                  
                  
                  <div class="row">
                    <div class="col-6">
                      <strong>Giá bán</strong>
                      <input type="text" name="post_price" value="" class="form-control" placeholder="Giá gốc">
                    </div>
                    <div class="col-6">
                      <strong>Giá Khuyến Mại</strong>
                      <input type="text" name="post_sale" class="form-control" value="" placeholder="Giá khuyến mãi">
                    </div>
                  </div>
                  <hr>



                
                  <div class="form-group">

                    <label for="exampleInputFile">Upload Bộ Ảnh Cho Sản Phẩm <small class="text-red">(Ảnh sẽ không được up nếu không phải là sản phẩm)</small></label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="images[]" accept="image" multiple>
                    
                    
                    



                  </div>



                </div>
                <!-- /.card-body -->
              </div>

	            
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
                        <textarea class="form-control" style="height:120px" name="post_meta_desc" maxlength="255"><<?= old('post_meta_desc'); ?>/textarea>
                      </div>

                      
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <strong>Meta Key:</strong>
                        <textarea class="form-control" style="height:120px" name="post_meta_key" maxlength="255"><?= old('post_meta_key'); ?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                      <hr>

                      <div class="form-group">
                        <label><strong>Tag Seo:</strong></label>
                        <br>
                          <input type="text" class="form-control-file" id="tagsinput" name="tagsinput" value="<?= old('tagsinput'); ?>" data-role="tagsinput" />
                      </div>

                    </div>

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
                  <button type="submit" class="btn btn-info">Save Post</button>
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