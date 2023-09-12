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
              <li class="breadcrumb-item active">Edit Post: <span class="text-red text-bold"><?= $post_detail['post_title'] ?></span></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/post/edit/'.$post_detail['id']); ?>" method="post" enctype="multipart/form-data">
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
	                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
	                    <input type="text" name="post_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?php if(old('post_title') != null){echo set_value('post_title');}else{echo $post_detail['post_title'];} ?>">
	                  </div>
	                  <hr>
	                  <div class="form-group">
	                    <label for="exampleInputPassword1">Tóm tắt</label>
	                    <textarea class="form-control" style="height:100px" name="post_intro" maxlength="160"><?php if(old('post_intro') != null){echo set_value('post_intro');}else{echo $post_detail['post_intro'];} ?></textarea>
	                  </div>
	                  <hr>
	                  <div class="form-group">
									    <div class="form-group">
									      <label>Nội dung bài viết</label>
									      <textarea class="form-control" id="content" name="post_content" rows="3" placeholder="Enter ..." height="800px"><?php if(old('post_content') != null){echo set_value('post_content');}else{echo $post_detail['post_content'];} ?></textarea>
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
                        <?php foreach($cate as $c): ?>
                          <?php if($c['cate_parent_id'] == 0): ?>
                            <?php if(!(in_array($c['id'], $c_t))): ?>
                              <option data-icon="fas fa-circle" value="<?= $c['id'] ?>" <?php if($post_detail['post_cate_id']  == $c['id']){ echo "selected"; } ?> <?php if($c['cate_type'] == 'cate_gallery'){echo "disabled = 'disabled'";}  ?>> <?= $c['cate_name']; ?></option>
                            <?php elseif(in_array($c['id'], $c_t)): ?>
                              <optgroup data-icon="fas fa-circle" label="<?= $c['cate_name'] ?>">
                                <?php foreach($cate as $c2): ?>
                                  <?php if($c2['cate_parent_id'] == $c['id']): ?>
                                    <option data-icon="fas f-long-arrow-alt-right" value="<?= $c2['id'] ?>" <?php if($post_detail['post_cate_id']  == $c2['id']){echo "selected";} ?> ><?= $c2['cate_name'] ?></option>
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
                    <label style="color: red;">Ảnh Cũ</label>
                    <img src="<?= base_url('public/upload/tinymce/image_asset/'.$post_detail['post_image']) ?>" width="30%" class="ml-3">
                    <hr>
                    <label>Ảnh Mới (Nếu cập nhật)</label>
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

                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="post_featured" value="0" <?php if($post_detail['post_featured'] == 0){echo "checked";} ?> id="radioSuccess1" />
                        <label for="radioSuccess1"> Không</label>
                      </div>
                      <div class="icheck-success d-inline ml-2">
                        <input type="radio" name="post_featured" value="1" <?php if($post_detail['post_featured'] == 1){echo "checked";} ?> id="radioSuccess2" />
                        <label for="radioSuccess2"> Có</label>
                      </div>
                    </div>

                    
                  </div>

                  <hr>
                  <div class="form-group clearfix ml-2">
                    <label class="upper">Bài viết thường hay sản phẩm?</label>
                    <br>

                    <div class="icheck-danger d-inline">
                      <input type="radio" name="post_status" value="normal" <?php if($post_detail['post_status'] == 'normal'){echo "checked";} ?> id="radioDanger1" />
                      <label for="radioDanger1"> Thường</label>
                    </div>
                    <div class="icheck-danger d-inline ml-2">
                      <input type="radio" name="post_status" id="radioDanger2" value="san-pham" <?php if($post_detail['post_status'] == 'san-pham'){echo "checked";} ?>/>
                      <label for="radioDanger2"> Sản Phẩm</label>
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
                      <strong>Giá Gốc</strong>
                      <input type="text" name="post_price" value="<?= $post_detail['post_price']; ?>" class="form-control" placeholder="Giá gốc">
                    </div>
                    <div class="col-6">
                      <strong>Giá Khuyến Mại</strong>
                      <input type="text" name="post_sale" class="form-control" value="<?= $post_detail['post_sale']; ?>" placeholder="Giá khuyến mãi">
                    </div>

                    
                  </div>
                  <hr>



                
                  <div class="form-group">

                    <label for="exampleInputFile">Upload Bộ Ảnh Cho Sản Phẩm</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="post_images[]" accept="image" multiple>
                  </div>


                </div>
                <!-- /.card-body -->
              </div>

              


              

              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Bộ Ảnh Cũ <span>(Chọn để xóa ảnh cũ)</span></h4>
                </div>
                <div class="card-body">
                  <div class="row">


                    <div class="col-sm-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                      
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                          </a>
                      
                        </label>
                      </div>
                    </div>


                    
                    
                  </div>
                </div>
              </div>



              
            </div>
            <!--/.col (right) -->


	          
          
	        </div>
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
                        <label>Meta Desc</label>
                        <textarea class="form-control" style="height:120px" name="post_meta_desc" maxlength="255"><?php if(old('post_meta_desc') != null){echo set_value('post_meta_desc');}else{echo $post_detail['post_meta_desc'];} ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Meta Key</label>
                        <textarea class="form-control" style="height:120px" name="post_meta_key" maxlength="255"><?php if(old('post_meta_key') != null){echo set_value('post_meta_key');}else{echo $post_detail['post_meta_key'];} ?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                      <hr>

                      <div class="form-group">
                        <label><strong>Tag Seo:</strong></label>
                        <br>
                          <input type="text" class="form-control-file" id="taginput" name="taginput" value="<?php if(old('taginput') != null){echo olset_valued('taginput');}else{ foreach($tagModel as $tag){echo $tag['tag_post_title'].',';}} ?>" data-role="taginput" />
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
                  <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save This</button>
                  <a href="<?= base_url('admin/post'); ?>" class="btn btn-danger float-right"><i class="far fa-window-close"></i> Cancel</a>
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
    $(".post_active").addClass("menu-open");
    $(".post_active a:first").addClass("active");
    $(".post_active .post_tree_active3 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Chỉnh sửa bài: <?= $post_detail['post_title'] ?> | AdminLTE 3
<?= $this->endSection(); ?>