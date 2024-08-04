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
                          <div class="card-header bg-light border-bottom" id="headingOne">
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


                      <div id="accordion" class="myaccordion">
                        <div class="card">
                          <div class="card-header bg-success border-bottom" id="headingTwo">
                            <h2 class="mb-0">
                              <button type="button" class="d-flex align-items-center justify-content-between btn btn2 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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

                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Link <span class="text-red">Rút Gọn Lần 2</span> File Download (Nếu Có) <i class="fas fa-link"></i></label>
                                <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_file_download') : '' ?></p>
                                <input type="text" name="gallery_file_download" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link File" value="<?= set_value('gallery_file_download'); ?>">
                              </div>
                              <hr>

                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Link <span class="text-red">Gốc</span> File Download (Nếu Có) <i class="fas fa-link"></i></label>
                                <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_link_file_origin') : '' ?></p>
                                <input type="text" name="gallery_link_file_origin" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link File" value="<?= set_value('gallery_link_file_origin'); ?>">
                              </div>
                              <hr>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="upper">Tài Khoản Google Lưu File <small>(Nếu Là File)</small></label>
                                <span class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_account') : '' ?></span>
                                <input type="text" name="gallery_account" class="form-control" id="exampleInputEmail1" placeholder="Nhập tài khoản" value="<?= set_value('gallery_account '); ?>">
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


                    <!-- <div class="main">

                      <div class="file-upload-container">
                          <div class="file-upload">

                              <form class="file-upload-form" id="fileUploadForm">
                                  <label for="file" class="file-upload-label" id="fileUploadLabel">
                                      <div class="file-upload-design">
                                          <svg viewBox="0 0 640 512" height="1em">
                                              <path
                                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                                              ></path>
                                          </svg>
                                          <p>Drag & Drop</p>
                                          <span class="browse-button">Browse file</span>
                                      </div>
                                      <input id="file" type="file" multiple/>
                                  </label>
                              </form>
                          </div>
                          <img id="output"/ style="width: 100%" class="pt-1">
                          <div class="files-uploaded" id="filesUploaded">

                          </div>
                              
                      </div>

                  </div> -->


                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_image') : '' ?></p>
                    <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="gallery_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;">

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
                    <!-- <script type="text/javascript">
                      const fileInput = document.getElementById('file');
                      const fileUploadLabel = document.getElementById('fileUploadLabel');
                      const filesUploadedContainer = document.getElementById('filesUploaded');

                      fileUploadLabel.addEventListener('dragover', (e) => {
                          e.preventDefault();
                          fileUploadLabel.classList.add('drag-over');
                      });

                      fileUploadLabel.addEventListener('dragleave', () => {
                          fileUploadLabel.classList.remove('drag-over');
                      });

                      fileUploadLabel.addEventListener('drop', (e) => {
                          e.preventDefault();
                          fileUploadLabel.classList.remove('drag-over');
                          const files = e.dataTransfer.files;
                          handleFiles(files);
                      });

                      fileInput.addEventListener('change', () => {
                          const files = fileInput.files;
                          handleFiles(files);
                      });

                      function handleFiles(files) {
                          const fileList = Array.from(files);
                          
                          fileList.forEach((file) => {
                              const fileName = truncateFileName(file.name);
                              const fileSize = formatFileSize(file.size);
                              
                              const fileItem = document.createElement('div');
                              fileItem.classList.add('file-item');
                              fileItem.innerHTML = `
                                  <div class= "file">
                                      
                                      <span class="file-name">${fileName}</span>
                                      <span class="file-size">${fileSize}</span>
                                      
                                  </div>
                              `;

                              filesUploadedContainer.appendChild(fileItem);
                          });
                      }

                      function truncateFileName(name, maxLength) {
                          return name.length > 10 ? name.substring(0, maxLength) + '...' : name;
                      }

                      function formatFileSize(size) {
                          if (size === 0) return '0 Bytes';
                          const k = 1024;
                          const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                          const i = parseInt(Math.floor(Math.log(size) / Math.log(k)));
                          return Math.round(100 * (size / Math.pow(k, i))) / 100 + ' ' + sizes[i];
                      }
                    </script> -->
                    <!-- <style type="text/css">
                      .main {
                        
                        align-items: center;
                        background-color: #d9d9d9;
                        background-image: linear-gradient(315deg, #d9d9d9 0%, #f6f2f2 74%);
                        width: 100%;
                        border-radius: 10px;
                        padding: 30px;
                      }

                      .file-upload-container {
                          display: flex;
                          flex-direction: column;
                          justify-content: center;
                          align-items: center;
                      }

                      .file-upload-container h1 {
                          font-size: 35px;
                          margin-bottom: 20px;
                      }

                      .file-upload-form {
                          width: fit-content;
                          height: fit-content;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                      }
                      .file-upload-label input {
                          display: none;
                      }
                      .file-upload-label svg {
                          height: 50px;
                          fill: rgb(82, 82, 82);
                          margin-bottom: 20px;
                      }
                      .file-upload-label {
                          cursor: pointer;
                          background-color: #ffffff;
                          padding: 30px 100px;
                          border-radius: 20px;
                          border: 2px dashed rgb(82, 82, 82);
                          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                      }
                      .file-upload-design {
                          display: flex;
                          flex-direction: column;
                          align-items: center;
                          justify-content: center;
                          gap: 5px;
                          font-size: 25px;
                      }
                      .browse-button {
                          background-color: rgb(82, 82, 82);
                          padding: 5px 15px;
                          border-radius: 10px;
                          color: white;
                          transition: all 0.3s;
                          font-size: 17px;
                      }
                      .browse-button:hover {
                          background-color: rgb(14, 14, 14);
                      }

                      .files-uploaded {
                          margin-top: 20px;
                      }

                      .file {
                          display: flex;
                          align-items: center;
                          width: 100%;
                          padding: 10px;
                          background-color: #ffffff;
                          border-radius: 10px;
                          margin: 10px;
                          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                          font-size: 15px;
                      }

                      .file img {
                          width: 30px;
                          margin: 10px;
                      }

                      .uploaded {
                          display: flex;
                          align-items: center;
                          margin-left: auto;
                      }

                      .uploaded img {
                          width: 20px;
                          margin: 5px;
                      }
                    </style> -->
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