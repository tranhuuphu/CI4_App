<?= $this->extend('admin/admin-layout'); ?>

<?= $this->section('content'); ?>

<style>
  .upper{
    text-transform: uppercase !important;
  }
</style>

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('admin/post'); ?>">Danh Sách Bài Viết</a></li>
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
	                <h3 class="card-title text-bold">Main Content</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
	                <div class="card-body">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1" class="upper">Tiêu đề bài viết</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_title') : '' ?></p>
	                    <input type="text" name="post_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?= set_value('post_title'); ?>">
	                  </div>
	                  <hr>
	                  <div class="form-group">
	                    <label for="exampleInputPassword1" class="upper">Tóm tắt</label>
	                    <textarea class="form-control" style="height:100px" name="post_intro" maxlength="160"><?= set_value('post_intro'); ?></textarea>
	                  </div>
	                  <hr>
	                  <div class="form-group">
									    <div class="form-group">
									      <label class="upper">Nội dung bài viết</label>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_content') : '' ?></p>
									      <textarea class="form-control" id="content" name="post_content" rows="3" placeholder="Enter ..." height="800px"><?= set_value('post_content'); ?></textarea>
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
                  <?php foreach($cate as $c3): ?>
                    <?php $c_t[] = $c3['cate_parent_id']; ?>
                  <?php endforeach; ?>
                  <div class="form-group">
                    <label class="upper">Thuộc danh mục</label>
                    <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="true" name="post_cate_id" style="width: 100%;">
                      <option value=""> ---Lựa chọn danh mục</option><i class="fas fa-long-arrow-alt-right"></i>
                      <?php foreach($cate as $c): ?>
                        <?php if($c['cate_parent_id'] == 0): ?>
                          <?php if(!(in_array($c['id'], $c_t))): ?>
                            <option data-icon="fas fa-check" value="<?= $c['id'] ?>" <?php if(set_value('post_cate_id')  == $c['id']){ echo "selected"; } ?>> <?= $c['cate_name']; ?></option>
                          <?php elseif(in_array($c['id'], $c_t)): ?>
                            <optgroup data-icon="fas fa-circle" label="<?= $c['cate_name'] ?>">
                              <?php foreach($cate as $c2): ?>
                                <?php if($c2['cate_parent_id'] == $c['id']): ?>
                                  <option data-icon="fas fa-long-arrow-alt-right" value="<?= $c2['id'] ?>" <?php if(set_value('post_cate_id')  == $c2['id']){echo "selected";} ?> ><?= $c2['cate_name'] ?></option>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </optgroup>
                          <?php endif; ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <hr>
	              	<div class="form-group">
                    <label class="upper">Ảnh bài viết</label>
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_image') : '' ?></p>
                    <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="post_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;">

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
                    <label class="upper">Bài viết nổi bật</label>
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

                  <hr>
                  <div class="form-group clearfix">
                    <label class="upper">Thể loại bài viết</label>
                    <br>
                    <div class="icheck-primary d-inline pr-3">
                      <input type="radio" id="radioPrimary1" name="post_status" name="r1" value="normal" checked>
                      <label for="radioPrimary1">bài viết thường
                      </label>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="post_status" value="san-pham" name="r1">
                      <label for="radioPrimary2">Bài viết là sản phẩm
                      </label>
                    </div>
                  </div>

	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->

	            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title" class="upper">Dành Cho Sản Phẩm Bán Hàng</h3>
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
                        <label class="upper">Meta Desc</label>
                        <textarea class="form-control" style="height:120px" name="post_meta_desc" maxlength="255"><?= set_value('post_meta_desc'); ?></textarea>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_meta_desc') : '' ?></p>
                      </div>

                      
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Key</label>
                        <textarea class="form-control" style="height:120px" name="post_meta_key" maxlength="255"><?= set_value('post_meta_key'); ?></textarea>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_meta_key') : '' ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                      <hr>

                      <div class="form-group">
                        <label class="upper">Tag Seo</label>
                        <br>
                          <input type="text" class="form-control-file" id="taginput" name="taginput" value="<?= set_value('taginput'); ?>" data-role="tagsinput" />
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


<?= $this->section('script'); ?>
  <<script type="text/javascript">
    $(".post_active").addClass("menu-open");
    $(".post_active a:first").addClass("active");
    $(".post_active .post_tree_active2 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>


<?= $this->section('title'); ?>
  Thêm bài viết mới | AdminLTE 3
<?= $this->endSection(); ?>