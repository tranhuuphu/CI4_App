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
        <hr>
        <div class="card card-success">
          <a href="<?= base_url('admin/post/edit/'.$post_detail['id']); ?>" style="text-transform: capitalize;" class="btn btn-primary float- pt-3 pb-3 text-bold"><i class="fas fa-edit"></i> Edit normal this post without update images Production</a>
        </div>
      	<form action="<?= base_url('admin/post/product/edit/'.$post_detail['id']); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->
        
            
	          <div class="col-md-8">
	            <!-- general form elements -->
	            <div class="card card-warning">
	              <div class="card-header">
	                <h3 class="card-title text-bold upper">Nội dung chính</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
	                <div class="card-body">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1" class="upper">Tiêu đề bài viết</label>
	                    <input type="text" readonly="readonly" name="post_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" value="<?php if(old('post_title') != null){echo set_value('post_title');}else{echo $post_detail['post_title'];} ?>">
	                  </div>
	                  <hr>
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper text-primary">alias - slug (Link Slug On Site - hạn chế thay đổi) <span class="text-red">(*)</span></label>
                      <input type="text" name="post_alias" readonly class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" value="<?php if(old('post_alias') != null){echo set_value('post_alias');}else{echo $post_detail['post_alias'];} ?>">


                      <label for="exampleInputEmail1" class="upper mt-3">alias - slug</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" readonly value="<?php echo $post_detail['post_slug']; ?>">
                    </div>

	                  <div class="form-group">
	                    <label class="upper">Tóm tắt</label>
	                    <textarea readonly="readonly" class="form-control" style="height:100px" name="post_intro" maxlength="160"><?php if(old('post_intro') != null){echo set_value('post_intro');}else{echo $post_detail['post_intro'];} ?></textarea>
	                  </div>
	                  <hr>
	                  <div class="form-group">
									    <div class="form-group">
									      <label class="upper">Nội dung bài viết</label>
									      
                        
                        <div id="module" class="container">
                          <a role="button" class="collapsed btn btn-primary mb-1 mt-3" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></a>
                          <button type="button" class="btn btn-success mb-1 mt-3" data-toggle="modal" data-target="#exampleModal">
                            See Full Content <i class="fas fa-expand-alt"></i>
                          </button>
                          <hr>

                          <div  class="collapse" id="collapseExample" aria-expanded="false">
                            <div class="card card-body card2">
                              <?= $post_detail['post_content']; ?>
                            </div>
                          </div>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Nội Dung</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <?= $post_detail['post_content']; ?>
                                  <?= $post_detail['post_content2']; ?>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <a role="button" class="collapsed btn btn-warning mt-1" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></a>
                        </div>
                        
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
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title upper text-bold">Nội dung thêm</h3>
                </div>
                <div class="card-body">
                  <?php foreach($cate as $c3): ?>
                    <?php $c_t[] = $c3['cate_parent_id']; ?>
                  <?php endforeach; ?>
                  <div class="form-group">
                    <label class="upper">Thuộc danh mục</label>
                    <select class="selectpicker show-tick form-control select2 select2-danger disabled" data-style="btn-default" data-live-search="true" name="post_cate_id" style="width: 100%;">
                        <?php foreach($cate as $c): ?>
                          <?php if($c['cate_parent_id'] == 0): ?>
                            <?php if(!(in_array($c['id'], $c_t))): ?>
                              <option data-icon="fas fa-circle" disabled value="<?= $c['id'] ?>" <?php if($post_detail['post_cate_id']  == $c['id']){ echo "selected"; } ?> <?php if($c['cate_type'] == 'cate_gallery'){echo "disabled = 'disabled'";}  ?>> <?= $c['cate_name']; ?></option>
                            <?php elseif(in_array($c['id'], $c_t)): ?>
                              <optgroup data-icon="fas fa-circle" label="<?= $c['cate_name'] ?>" disabled>
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
                    <label style="color: red;" class="upper">Ảnh Cũ</label>
                    <br>
                    <a
                      data-fancybox
                      data-src="<?= base_url('public/upload/tinymce/'.$post_detail['post_image']) ?>"
                    >
                      <img src="<?= base_url('public/upload/tinymce/'.$post_detail['post_image']) ?>" width="200" height="auto" class="img_fancy" />
                    </a>

                    <!-- <label style="color: red;" class="upper">Ảnh Cũ</label> -->
                    <!-- <img src="<?= base_url('public/upload/tinymce/'.$post_detail['post_image']) ?>" width="30%" class="ml-3"> -->
                  </div>
                  <hr>
                  <div class="form-group clearfix">
                    <label class="upper text-success">Bài viết nổi bật</label>
                    <br>

                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" disabled name="post_featured" value="0" <?php if($post_detail['post_featured'] == 0){echo "checked";} ?> id="radioSuccess1" />
                        <label for="radioSuccess1"> Không</label>
                      </div>
                      <div class="icheck-success d-inline ml-2">
                        <input type="radio" disabled name="post_featured" value="1" <?php if($post_detail['post_featured'] == 1){echo "checked";} ?> id="radioSuccess2" />
                        <label for="radioSuccess2"> Có</label>
                      </div>
                    </div>

                    
                  </div>

                  <hr>

                  <div class="form-group clearfix">
                    <label class="upper text-info">Tình Trạng Bài Viết</label>
                    <br>

                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="post_finish" value="finish" <?php if($post_detail['post_finish'] != 'updating'){echo "checked";} ?> id="radioSuccess3" />
                        <label for="radioSuccess3"> Hoàn Chỉnh</label>
                      </div>
                      <div class="icheck-success d-inline ml-2">
                        <input type="radio" name="post_finish" value="updating" <?php if($post_detail['post_finish'] == 'updating'){echo "checked";} ?> id="radioSuccess4" />
                        <label for="radioSuccess4" class="text-warning"> Đang Cập Nhật</label>
                      </div>
                    </div>
                  </div>
                  <hr>


                  <div class="form-group clearfix ml-2">
                    <label class="upper text-red">Bài viết thường hay sản phẩm?</label>
                    <br>

                    <div class="icheck-danger d-inline">
                      <input type="radio" name="post_status" disabled value="normal" <?php if($post_detail['post_status'] == 'normal'){echo "checked";} ?> id="radioDanger1" />
                      <label for="radioDanger1"> Thường</label>
                    </div>
                    <div class="icheck-danger d-inline ml-2">
                      <input type="radio" name="post_status" disabled id="radioDanger2" value="san-pham" <?php if($post_detail['post_status'] == 'san-pham'){echo "checked";} ?>/>
                      <label for="radioDanger2"> Sản Phẩm</label>
                    </div>
                    <hr>

                    


                    <label class="upper text-red">Giá sản phẩm</label>

                    <div class="row">

                      <div class="col-6">
                        <label>Giá Gốc</label>
                        <input type="text" readonly="readonly" name="post_price" value="<?= $post_detail['post_price']; ?>" class="form-control" placeholder="Giá gốc">
                      </div>
                      <div class="col-6">
                        <label>Giá Khuyến Mãi</label>
                        <input type="text" readonly="readonly" name="post_sale" class="form-control" value="<?= $post_detail['post_sale']; ?>" placeholder="Giá khuyến mãi">
                      </div>

                      
                    </div>

                    
                  </div> 

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title" class="upper" style="font-weight: bold; text-transform: uppercase;">Khu Vực Upload ảnh cho sản phẩm</h3>
                </div>
                <div class="card-body">

                
                  <div class="form-group">

                    <div class="form-group">
                      <label class="upper text-primary">Bộ ảnh Sản Phẩm <small class="text-bold text-red" style="text-transform: lowercase;">(chọn 1 hoặc nhiều ảnh)</small></label>
                      <br>


                      <a href="<?= base_url("public/admin_asset") ?>/responsive_filemanager/filemanager/dialog.php?relative_url=1&type=1&field_id=image_input&akey=tranhuuphu" class="btn btn-primary iframe-btn mt-2" type="button">Chọn Ảnh <i class="fas fa-image"></i></a>

                      <input type="hidden" readonly="readonly" name="post_image" id="image_input" class="form-control" style="border-radius: 0; margin-top: 15px;">
                      <div id="images2" style="float: left">
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

              <div class="card card-info">
                <div class="card-header">
                  <h4 class="card-title upper text-bold">Bộ Ảnh Cũ <small class="text-bold text-yellow">(Tick chọn để xóa ảnh nếu muốn)</small></h4>
                </div>
                <div class="card-body">
                  <div class="row">

                    <?php foreach($postImages as $img): ?>
                      <div class="col-sm-4 mt-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="post_images_del[]" value='<?= $img['id'] ?>'>
                          <label class="form-check-label">
                            <a href="<?= base_url('public/upload/tinymce/'.$img['post_image_slug']) ?>" data-toggle="lightbox" data-gallery="gallery">
                              <img src="<?= base_url('public/upload/tinymce/'.$img['post_image_slug']) ?>" class="img-fluid mb-2"/>
                            </a>
                        
                          </label>
                        </div>
                      </div>
                    <?php endforeach; ?>

                    
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
                  <h3 class="card-title upper"><strong>Seo Info</strong></h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Meta Desc</label>
                        <textarea class="form-control" readonly="readonly" style="height:120px" name="post_meta_desc" maxlength="255"><?php if(old('post_meta_desc') != null){echo set_value('post_meta_desc');}else{echo $post_detail['post_meta_desc'];} ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Meta Key</label>
                        <textarea class="form-control" readonly="readonly" style="height:120px" name="post_meta_key" maxlength="255"><?php if(old('post_meta_key') != null){echo set_value('post_meta_key');}else{echo $post_detail['post_meta_key'];} ?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                      <hr>

                      <div class="form-group">
                        <label><strong>Tag Seo:</strong></label>
                        <br>
                          <input type="text" disabled class="form-control-file" id="taginput" name="taginput" value="<?php if(old('taginput') != null){echo olset_valued('taginput');}else{ foreach($tagModel as $tag){echo $tag['tag_post_title'].',';}} ?>" data-role="taginput" />
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
                  <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update this</button>
                  <a href="<?= base_url('admin/post/production'); ?>" class="btn btn-danger float- ml-3"><i class="far fa-times"></i> Cancel</a>
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
  sửa bài: <?= $post_detail['post_title'] ?> | AdminLTE 3
<?= $this->endSection(); ?>