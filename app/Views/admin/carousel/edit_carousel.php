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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/carousel'); ?>">Danh Sách Slide</a></li>
              <li class="breadcrumb-item active">Edit Post Ảnh: <span class="text-red text-bold"><?= $carousel['carousel_title'] ?></span></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="<?= base_url('admin/carousel/edit/'.$carousel['id']); ?>" method="post" enctype="multipart/form-data">
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
                      <label for="exampleInputEmail1" class="upper">Tiêu đề Ảnh</label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'carousel_title') : '' ?></p>
                      <input type="text" name="carousel_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề Ảnh" value="<?php if(set_value('carousel_title') != null){echo set_value('carousel_title');}else{echo $carousel['carousel_title'];} ?>">
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
                    <label style="color: red; margin-right: 7px;">Ảnh Cũ</label>
                    <br>
                    <a data-fancybox data-src="<?= base_url('public/upload/tinymce/carousel_asset/'.$carousel['carousel_image']) ?>">
                      <img src="<?= base_url('public/upload/tinymce/carousel_asset/'.$carousel['carousel_image']) ?>" width="100%" height="auto" class="img_fancy" />
                    </a>

                    
                    <hr>
                    <label class="upper">Chọn Ảnh mới (nếu muốn thay đổi)</label>
                    <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'carousel_image') : '' ?></p>

                    <!-- Drag and Drop -->
                    <div class="upload-container">
                        <input type="file" id="file_upload" class="form-control-file mb-2" id="exampleFormControlFile1" name="carousel_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;"/>
                    </div>
                    <br>
                    <img id="output"/ style="width: 100%" class="pt-1">


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
                  <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save This</button>
                  <a href="<?= base_url('admin/carousel'); ?>" class="btn btn-danger float- ml-3"><i class="far fa-times"></i> Cancel</a>
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
    $(".carousel_active").addClass("menu-open");
    $(".carousel_active a:first").addClass("active");
    $(".carousel_active .carousel_tree_active3 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Chỉnh sửa ảnh: <?= $carousel['carousel_title'] ?> | Bộ Sưu Tập
<?= $this->endSection(); ?>