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
              <li class="breadcrumb-item active">Add Social Info</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<form action="<?= base_url('admin/page/addThis/'.$page_detail['id']); ?>" method="post" enctype="multipart/form-data">
      		<?= csrf_field(); ?>
	        <div class="row">
	          <!-- left column -->
        
            
	          <div class="col-md-9">
	            <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Link Social & Image</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              
	                <div class="card-body">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1"><i class="fab fa-facebook"></i> Facebook Page</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'facebook') : '' ?></p>
	                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Nhập Facebook Page" value="<?php if(old('facebook') != null){echo set_value('facebook');}else{echo $page_detail['facebook'];} ?>">
	                  </div>
	                  <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fab fa-youtube"></i> Youtube Channel</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'youtube') : '' ?></p>
                      <input type="text" name="youtube" class="form-control" id="exampleInputEmail1" placeholder="Nhập Youtube Channel" value="<?php if(old('youtube') != null){echo set_value('youtube');}else{echo $page_detail['youtube'];} ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fab fa-twitter"></i> Twitter</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'twitter') : '' ?></p>
                      <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" placeholder="Nhập Twitter" value="<?php if(old('twitter') != null){echo set_value('twitter');}else{echo $page_detail['twitter'];} ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fab fa-pinterest"></i> Pinterest</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'pinterest') : '' ?></p>
                      <input type="text" name="pinterest" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link Pinterest" value="<?php if(old('pinterest') != null){echo set_value('pinterest');}else{echo $page_detail['pinterest'];} ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fas fa-map-marker-alt"></i> Google Maps Link</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'maps') : '' ?></p>
                      <input type="text" name="maps" class="form-control" id="exampleInputEmail1" placeholder="Nhập Maps Link Google" value="<?php if(old('twimapstter') != null){echo set_value('maps');}else{echo $page_detail['maps'];} ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fas fa-code"></i> Facebook Code</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'f_app') : '' ?></p>
                      <input type="text" name="f_app" class="form-control" id="exampleInputEmail1" placeholder="Nhập Code Facebook" value="<?php if(old('f_app') != null){echo set_value('f_app');}else{echo $page_detail['f_app'];} ?>">
                    </div>
                    <hr>


                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fas fa-code"></i> Google Code Verification</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'g_app') : '' ?></p>
                      <input type="text" name="g_app" class="form-control" id="exampleInputEmail1" placeholder="Nhập Code Google" value="<?php if(old('g_app') != null){echo set_value('g_app');}else{echo $page_detail['g_app'];} ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fas fa-phone"></i> Phone</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></p>
                      <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Nhập SĐT" value="<?php if(old('phone') != null){echo set_value('phone');}else{echo $page_detail['phone'];} ?>">
                    </div>


                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fas fa-map-marker-alt"></i> Address</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></p>
                      <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ" value="<?php if(old('address') != null){echo set_value('address');}else{echo $page_detail['address'];} ?>">
                    </div>

                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><i class="fas fa-at"></i> Email</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></p>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập Email" value="<?php if(old('email') != null){echo set_value('email');}else{echo $page_detail['email'];} ?>">
                    </div>

                    <hr>

                    

	                </div>
	                <!-- /.card-body -->
	              
	            </div>
	            <!-- /.card -->


	          </div>
	          <!--/.col (left) -->
	          <!-- right column -->
	          <div class="col-md-3">
	            <!-- Form Element sizes -->
	            <div class="card card-success">
	              <div class="card-header">
	                <h3 class="card-title">Nội dung thêm</h3>
	              </div>
	              <div class="card-body">

	              	<div class="form-group">


                    <label>Image Google Maps Current</label>
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'google_image_maps') : '' ?></p>
                    <img src="<?= base_url('public/upload/tinymce/image_asset/'.$page_detail['google_image_maps']) ?>" width="100%">
                    
                    <label class="mt-2">New Maps Image (If Update)</label>
                    <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="google_image_maps" accept="image" onchange="loadFile(event)" style="overflow: hidden;">
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
                  <div class="form-group">
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'page_favicon') : '' ?></p>
                    <label class="mt-2">Image Favicon Current</label>
                    <img src="<?= base_url('public/upload/tinymce/image_asset/'.$page_detail['page_favicon']) ?>" width="100%">
                    
                    <label>New Image Favicon (If Update)</label>
                    <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="page_favicon" accept="image" onchange="loadFile(event)" style="overflow: hidden;">
                    <img id="output3"/ style="width: 100%" class="pt-1">
                    <script>
                      var loadFile = function(event) {
                        var output3 = document.getElementById('output3');
                        output3.src = URL.createObjectURL(event.target.files[0]);
                        output3.onload = function() {
                          URL.revokeObjectURL(output3.src) // free memory
                        }
                      };
                    </script>
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
                  <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Save This</button>
	               <a href="<?= base_url('admin/page/'); ?>"><button type="submit" class="btn btn-danger float-"><i class="fas fa-times"></i> Cancel</button></a>
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
    $(".page_active .page_tree_active2 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Thêm Trang
<?= $this->endSection(); ?>