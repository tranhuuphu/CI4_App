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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/post'); ?>">Danh Sách Bài Viết</a></li>
              <li class="breadcrumb-item active">Thêm bài viết mới</li>
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
	                <h3 class="card-title text-bold upper">Nội dung chính</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
	                <div class="card-body">
	                  

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">Tiêu đề bài viết <span class="text-red">(*)</span></label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_title') : '' ?></p>
                      <input type="text" name="post_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?= old('post_title') ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">alias - slug (Link Slug On Site - hạn chế thay đổi)  <span class="text-red">(*)</span></label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_alias') : '' ?></p>
                      <input type="text" name="post_alias" class="form-control" id="exampleInputEmail1" placeholder="Nhập Alias" value="<?= old('post_alias') ?>" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)">
                    </div>
                    <p id="slug-text" class="text-red"></p>
                    <hr>

	                  <div class="form-group">
	                    <label for="exampleInputPassword1" class="upper">Tóm tắt</label>
	                    <textarea class="form-control" style="height:100px" name="post_intro" maxlength="160"><?= old('post_intro') ?></textarea>
	                  </div>
	                  <hr>
	                  <div class="form-group">
									    <div class="form-group">
									      <label class="upper">Nội dung bài viết <span class="text-red">(*)</span></label>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_content') : '' ?></p>
									      <textarea class="form-control" id="content" name="post_content" rows="3" placeholder="Enter ..." height="800px"><?= old('post_content') ?></textarea>
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
	                <h3 class="card-title upper text-bold">Nội dung thêm</h3>
	              </div>
	              <div class="card-body">
                  <?php foreach($cate as $c3): ?>
                    <?php $c_t[] = $c3['cate_parent_id']; ?>
                  <?php endforeach; ?>
                  <div class="form-group">
                    <label class="upper">Thuộc danh mục <span class="text-red">(*)</span></label>
                    <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="true" name="post_cate_id" style="width: 100%;">
                      <option value=""> ---Lựa chọn danh mục</option><i class="fas fa-long-arrow-alt-right"></i>
                      <?php foreach($cate as $c): ?>
                        <?php if($c['cate_parent_id'] == 0): ?>
                          <?php if(!(in_array($c['id'], $c_t))): ?>
                            <option data-icon="fas fa-circle" value="<?= $c['id'] ?>" <?php if(old('post_cate_id')  == $c['id']){ echo "selected"; } ?> <?php if($c['cate_type'] == 'cate_gallery'){echo "disabled = 'disabled'";}  ?>> <?= $c['cate_name']; ?></option>
                          <?php elseif(in_array($c['id'], $c_t)): ?>
                            <optgroup data-icon="fas fa-circle" label="<?= $c['cate_name'] ?>">
                              <?php foreach($cate as $c2): ?>
                                <?php if($c2['cate_parent_id'] == $c['id']): ?>
                                  <option data-icon="fas fa-long-arrow-alt-right" value="<?= $c2['id'] ?>" <?php if(old('post_cate_id')  == $c2['id']){echo "selected";} ?> ><?= $c2['cate_name'] ?></option>
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
                    <label class="upper">Ảnh bài viết <small style="text-transform: lowercase; color: blue; font-style: italic; font-weight: bold;">(Chọn 1 ảnh, nếu chọn từ 2 ảnh thì hệ thống sẽ lấy ngẫu nhiên 1 ảnh để làm ảnh bìa)</small></label>
                    <br>
                    <a href="<?= base_url("public/admin_asset") ?>/responsive_filemanager/filemanager/dialog.php?relative_url=1&type=1&field_id=image_input&akey=tranhuuphu" class="btn btn-primary iframe-btn mt-2" type="button">Chọn Ảnh <i class="fas fa-image"></i></a>
                    <input type="hidden" name="post_image" id="image_input" class="form-control" style="border-radius: 0; margin-top: 15px;">
                    <div id="images2" style="float: left" class="mb-3">
                    </div>
                  </div>
	                <hr>
	                <div class="form-group clearfix">
                    <label class="upper text-success">Bài viết nổi bật</label>
                    <br>

                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="post_featured" value="0" checked id="radioSuccess1" />
                        <label for="radioSuccess1"> Không</label>
                      </div>
                      <div class="icheck-success d-inline ml-2">
                        <input type="radio" name="post_featured" value="1" id="radioSuccess2" />
                        <label for="radioSuccess2"> Có</label>
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div class="form-group clearfix ml-2">
                    <label class="upper text-red">Bài viết thường hay sản phẩm?</label>
                    <br>

                    <div class="icheck-danger d-inline">
                      <input type="radio" name="post_status" value="normal" checked id="radioDanger1" />
                      <label for="radioDanger1"> Thường</label>
                    </div>
                    <div class="icheck-danger d-inline ml-2">
                      <input type="radio" name="post_status" id="radioDanger2" value="san-pham"/>
                      <label for="radioDanger2"> Sản Phẩm</label>
                    </div>
                  </div> 

	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->

	            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title" class="upper" style="font-weight: bold;">Dành Cho Sản Phẩm Bán Hàng</h3>
                </div>
                <div class="card-body">
                  
                  <label class="upper text-info mb-2">(Giá có thể để trống, và sẽ được ghi nhận nếu lựa chọn vào ô là <label class="text-red">"Sản Phẩm"</label> & không thuộc <label class="text-red">danh mục blog</label>)</label>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-6">
                      <label class="upper">Giá Gốc</label>
                      <input type="text" name="post_price" class="form-control" placeholder="Giá gốc">
                    </div>
                    <div class="col-6">
                      <label class="upper">Giá Khuyến Mãi</label>
                      <input type="text" name="post_sale" class="form-control" value="" placeholder="Giá khuyến mãi">
                    </div>
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
                  <h3 class="card-title upper"><strong>Seo Info</strong></h3>
                </div>
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Desc <span class="text-red">(*)</span></label>
                        <textarea class="form-control" style="height:120px" name="post_meta_desc" maxlength="255"><?= old('post_meta_desc'); ?></textarea>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_meta_desc') : '' ?></p>
                      </div>

                      
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Key <span class="text-red">(*)</span></label>
                        <textarea class="form-control" style="height:120px" name="post_meta_key" maxlength="255"><?= old('post_meta_key'); ?></textarea>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_meta_key') : '' ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                      <hr>

                      <div class="form-group">
                        <label class="upper">Tag Seo</label>
                        <br>
                          <input type="text" class="form-control-file" id="taginput" name="taginput" value="<?= old('taginput'); ?>" data-role="tagsinput" />
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
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save this</button>
                  <a href="<?= base_url('admin/post'); ?>" class="btn btn-danger float- ml-3"><i class="far fa-times"></i> Cancel</a>
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