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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/gallery'); ?>">Danh Sách Bộ Sưu Tập</a></li>
              <li class="breadcrumb-item active">Add New Image</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/gallery/save'); ?>" method="post" enctype="multipart/form-data">
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
	                    <label for="exampleInputEmail1" class="upper">Tiêu đề Ảnh <span class="text-red">(*)</span></label>
                      <span class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_title') : '' ?></span>
	                    <input type="text" name="gallery_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề Ảnh" value="<?= set_value('gallery_title'); ?>">
	                  </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">Alias - Link Slug <span class="text-red">(*)</span></label>
                      <span class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_alias') : '' ?></span>
                      <input type="text" name="gallery_alias" value="<?= set_value('gallery_alias') ?>" class="form-control" id="exampleInputEmail1" placeholder="Nhập Alias" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)">
                    </div>
                    <p id="slug-text" class="text-red"></p>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper" style="color: red">Lựa chọn phân loại cho ảnh</label>
                      <div class="form-group">
                        <select class="selectpicker show-tick form-control select2 select2-danger" data-style="btn-default" data-live-search="true" name="gallery_type_id" style="width: 100%;">
                          <?php foreach($gallery_type as $gt): ?>
                            <option data-icon="fas fa-long-arrow-alt-right" value="<?= $gt['id']; ?>"> <?= $gt['gallery_type_name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
	                  <hr>
                    <!-- Topic -->
                    <div class="form-group">

                      


                      <div class="row">
                        <div class="col-md-8">
                          <label for="exampleInputEmail1" class="upper" style="color: blue">Topic Chủ Đề Ảnh <small>(để phân loại chi tiết bộ ảnh)</small></label>
                          <div class="form-group">
                            <span class="text-left text-danger mt"><?= isset($validation) ? display_error($validation, 'gallery_topic') : '' ?></span>

                            <input type="text" id="value" name="gallery_topic" class="form-control" id="exampleInputEmail1" placeholder="Nhập chủ đề Ảnh" value="<?= set_value('gallery_topic'); ?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label>Background Color Topic</label>
                          <div class="input-group my-colorpicker2">
                            <input type="text" name="gallery_bg_topic" id="bg_topic" class="form-control" />
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-square" id="bg_fas"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>

                          
                          
                          
                      <hr>
                      <div id="accordion" class="myaccordion">
                        <div class="card">
                          <div class="card-header bg-light border-bottom rounded-0" id="headingOne">
                            <h2 class="mb-0">
                              <button type="button" class="d-flex align-items-center justify-content-between btn btn2 btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Topic Chủ Đề Ảnh Sẵn Có
                                <span class="fa-stack fa-sm">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              
                              <?php if($topic_name != null): ?>
                                  
                                  <div class="form-group">
                                    <div id='buttons' class="input_text_stroke">
                                      <?php foreach($topic_name as $key_name=>$value): ?>
                                        <input id='qty2' type="button" class="btn btn-primary mt-2 border-0" style="background: <?= $value['gallery_bg_topic'] ?>;" data-value='<?= $value['gallery_topic'] ?>' data-bgcolor='<?= $value['gallery_bg_topic'] ?>' value="<?= $value['gallery_topic'] ?>">
                                      <?php endforeach; ?>
                                    </div>
                                  </div>
                                
                                  
                              <?php endif; ?>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <hr>


                    <div class="form-group">


                      <div id="accordion2" class="myaccordion">
                        <div class="card">
                          <div class="card-header bg-light border-bottom rounded-0" id="headingTwo">
                            <h2 class="mb-0">
                              <button type="button" class="d-flex align-items-center justify-content-between btn btn2 btn-link collapsed text-info" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Link File & URL Liên Quan
                                <span class="fa-stack fa-sm">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fas fa-chevron-down fa-stack-1x fa-inverse"></i>
                                </span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              

                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Link <span class="text-primary">Gốc</span> File Download (Nếu Có) <i class="fas fa-link"></i></label>
                                <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_link_file_origin') : '' ?></p>
                                <input type="text" name="gallery_link_file_origin" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link File" value="<?= set_value('gallery_link_file_origin'); ?>">
                              </div>
                              <hr>

                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Link <span class="text-red">Rút Gọn</span> File Download (Nếu Có) <i class="fas fa-link"></i></label>
                                <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_link_file_short') : '' ?></p>
                                <input type="text" name="gallery_link_file_short" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link File" value="<?= set_value('gallery_link_file_short'); ?>">
                              </div>
                              <hr>

                              <div class="form-group clearfix">
                                <label class="upper text-info">File Premium?</label>
                                <br>

                                <div class="form-group clearfix">
                                  <div class="icheck-success d-inline">
                                    <input type="radio" name="gallery_type_file" value="normal" checked id="radioSuccess3" />
                                    <label for="radioSuccess3"> File thường</label>
                                  </div>
                                  <div class="icheck-success d-inline ml-2 text-danger">
                                    <input type="radio" name="gallery_type_file" value="premium" id="radioSuccess4" />
                                    <label for="radioSuccess4" class=""> File Premium</label>
                                  </div>
                                </div>
                              </div>

                              <hr>

                              
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Tài Khoản Google Lưu File <small>(Nếu Là File)</small></label>
                                <span class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_account') : '' ?></span>
                                <input type="text" name="gallery_account" class="form-control" id="exampleInputEmail1" placeholder="Nhập tài khoản" value="<?= set_value('gallery_account '); ?>">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Url Liên Quan (Nếu có)</label>
                                <div class="form-group">
                                  <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="true" name="gallery_post_id" style="width: 100%;">
                                    <option value=""> --- Tiêu đề URL Liên Quan</option><i class="fas fa-long-arrow-alt-right"></i>
                                    <?php foreach($post_url as $p): ?>
                                      <option data-icon="fas fa-circle" value="<?= $p['id']; ?>"> <?= $p['post_title']; ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              </div>


                            </div>
                          </div>
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
	            <div class="card card-success">
	              <div class="card-header">
	                <h3 class="card-title text-bold">Addition Content</h3>
	              </div>
	              <div class="card-body">
                  
                  <div class="form-group">
                    <label class="upper">Thuộc phân loại ảnh</label>
                    <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="false" name="gallery_cate_id" style="width: 100%;">
                      <option data-icon="fas fa-circle" value="<?= $cate['id'] ?>"> <?= $cate['cate_name'] ?></option><i class="fas fa-long-arrow-alt-right"></i>
                      
                    </select>
                  </div>
                  <hr>

                  
                  
	              	<div class="form-group">
                    <label class="upper">Chọn Ảnh</label>


                    


                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_image') : '' ?></p>
                    <!-- <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="gallery_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;"> -->

                    
                    <script>
                      var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                          URL.revokeObjectURL(output.src) // free memory
                        }
                      };
                    </script>

                    <!-- Drag and Drop -->
                    <div class="upload-container">
                        <input type="file" id="file_upload" class="form-control-file mb-2" id="exampleFormControlFile1" name="gallery_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;"/>
                    </div>
                    <br>
                    <img id="output"/ style="width: 100%" class="pt-1">

                    
                  </div>
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
                  <h3 class="card-title"><strong>Seo Info Image</strong></h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Desc <span class="text-red">(*)</span></label>
                        <span class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_meta_desc') : '' ?></span>
                        <textarea class="form-control" style="height:120px" name="gallery_meta_desc" maxlength="255"><?= set_value('gallery_meta_desc'); ?></textarea>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Key <span class="text-red">(*)</span></label>
                        <span class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_meta_key') : '' ?></span>
                        <textarea class="form-control" style="height:120px" name="gallery_meta_key" maxlength="255"><?= set_value('gallery_meta_key'); ?></textarea>
                        
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
                  <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save This</button>
                  <a href="<?= base_url('admin/gallery'); ?>" class="btn btn-danger float- ml-3"><i class="far fa-times"></i> Cancel</a>
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

<?= $this->section('style'); ?>

  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  

  <script>
      $(function () {
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        $(".my-colorpicker2").on("colorpickerChange", function (event) {
          $(".my-colorpicker2 .fa-square").css("color", event.color.toString());
        });

      });
  </script>

  <script type="text/javascript">
    $(".gallery_active").addClass("menu-open");
    $(".gallery_active a:first").addClass("active");
    $(".gallery_active .gallery_tree_active2 a:first").addClass("active");
  </script>


<?= $this->endSection(); ?>


<?= $this->section('title'); ?>
  Thêm ảnh mới | bộ sưu tập
<?= $this->endSection(); ?>