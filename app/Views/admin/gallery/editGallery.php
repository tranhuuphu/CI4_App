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
              <li class="breadcrumb-item"><a href="<?= base_url('admin/gallery'); ?>">Danh Sách Gallery</a></li>
              <li class="breadcrumb-item active">Edit Post Ảnh: <span class="text-red text-bold"><?= $gallery['gallery_title'] ?></span></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="<?= base_url('admin/gallery/edit/'.$gallery['id']); ?>" method="post" enctype="multipart/form-data">
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
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_title') : '' ?></p>
                      <input type="text" name="gallery_title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề Ảnh" value="<?php if(old('gallery_title') != null){echo set_value('gallery_title');}else{echo $gallery['gallery_title'];} ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">Url Liên Quan (Nếu có)</label>
                      <div class="form-group">
                        <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="true" name="gallery_post_url" style="width: 100%;">
                          <option value=""> ---Tiêu đề URL Liên Quan</option><i class="fas fa-long-arrow-alt-right"></i>
                          <?php foreach($post_url as $p): ?>
                            <?php $url = base_url().'/'.$p['cate_slug'].'/'.$p['post_slug'].'-'.$p['id'].'.html'; ?>
                            <option data-icon="fas fa-circle" value="<?= $url ?>"> <?= $p['post_title']; ?></option>
                          <?php endforeach; ?>
                        </select>
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
                    <label class="upper">Thuộc danh mục</label>
                    <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="false" name="gallery_cate_id" style="width: 100%;">
                      <option data-icon="fas fa-circle" value="<?= $cate['id'] ?>"> <?= $cate['cate_name'] ?></option><i class="fas fa-long-arrow-alt-right"></i>
                      
                    </select>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label class="upper">Ảnh</label>
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
                        <label class="upper">Meta Desc</label>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_meta_desc') : '' ?></p>
                        <textarea class="form-control" style="height:120px" name="gallery_meta_desc" maxlength="255"><?= set_value('gallery_meta_desc'); ?></textarea>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Key</label>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_meta_key') : '' ?></p>
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
                  <button type="submit" class="btn btn-info">Save This</button>
                  <button type="submit" class="btn btn-danger float-right">Cancel</button>
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
    $(".post_active .post_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Chỉnh sửa ảnh: <?= $gallery['gallery_title'] ?> | AdminLTE 3
<?= $this->endSection(); ?>