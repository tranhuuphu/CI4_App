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
                      <label for="exampleInputEmail1" class="upper text-primary">alias - image slug (Link Slug On Site - hạn chế thay đổi) <span class="text-red">(*)</span></label>
                      <input type="text" name="gallery_alias" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề bài viết" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" value="<?php if(old('gallery_alias') != null){echo set_value('post_alias');}else{echo $gallery['gallery_alias'];} ?>">

                      <label for="exampleInputEmail1" class="upper mt-3 text-primary">alias Cũ</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" readonly value="<?php echo $gallery['gallery_alias']; ?>">

                      <label for="exampleInputEmail1" class="upper mt-3">alias - slug Cũ</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" readonly value="<?php echo $gallery['gallery_title_slug']; ?>">
                    </div>
                    <p id="slug-text" class="text-red"></p>
                    <hr>


                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper" style="color: red">Lựa chọn phân loại cho ảnh</label>
                      <div class="form-group">
                        <select class="selectpicker show-tick form-control select2 select2-danger" data-style="btn-default" data-live-search="true" name="gallery_type_id" style="width: 100%;">
                          <?php foreach($gallery_type as $gt): ?>
                            <option data-icon="fas fa-long-arrow-alt-right" value="<?= $gt['id']; ?>" <?php if($gallery['gallery_type_id']  == $gt['id']){echo "selected";} ?>> <?= $gt['gallery_type_name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper" style="color: blue">Topic Chủ Đề Ảnh <small>(để phân loại chi tiết bộ ảnh)</small></label>
                      <div class="form-group">
                        <span class="text-left text-danger mt"><?= isset($validation) ? display_error($validation, 'gallery_topic') : '' ?></span>

                        <input type="text" id="value" name="gallery_topic" class="form-control" id="exampleInputEmail1" placeholder="Nhập chủ đề Ảnh" value="<?php if(old('gallery_topic') != null){echo set_value('gallery_topic');}else{echo $gallery['gallery_topic'];} ?>">
                      </div>

                      <?php if($topic_name != null): ?>
                        <label for="exampleInputEmail1" class="upper mt-" style="color: blue">Các chủ đề đã tạo</label>
                        <div id='buttons' class="mt-">
                          <?php foreach($topic_name as $key_name): ?>
                            <input id='qty2' type="button" class="btn btn-info mt-1" data-value='<?= $key_name ?>' value="<?= $key_name ?>">
                          <?php endforeach; ?>
                        </div>
                      <?php endif; ?>

                      
                    </div>
                    

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">Url Liên Quan (Nếu có) <i class="fas fa-link"></i></label>
                      <div class="form-group">
                        <select class="selectpicker show-tick form-control select2 select2-danger " data-style="btn-default" data-live-search="true" name="gallery_post_id" style="width: 100%;">
                          <option value=""> ---Tiêu đề URL Liên Quan</option><i class="fas fa-long-arrow-alt-right"></i>
                          <?php foreach($post_url as $p): ?>
                            
                            <option data-icon="fas fa-circle" value="<?= $p['id'] ?>" <?php if($gallery['gallery_post_id']  == $p['id']){echo "selected";} ?>> <?= $p['post_title']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">Link <span class="text-red">Rút Gọn</span> File Download (Nếu Có) <i class="fas fa-link"></i></label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_file_download') : '' ?></p>
                      <input type="text" name="gallery_file_download" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link File" value="<?php if(old('gallery_file_download') != null){echo set_value('gallery_file_download');}else{echo $gallery['gallery_file_download'];} ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="upper">Link <span class="text-red">Gốc</span> File Download (Nếu Có) <i class="fas fa-link"></i></label>
                      <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_link_file_origin') : '' ?></p>
                      <input type="text" name="gallery_link_file_origin" class="form-control" id="exampleInputEmail1" placeholder="Nhập Link File" value="<?php if(old('gallery_link_file_origin') != null){echo set_value('gallery_link_file_origin');}else{echo $gallery['gallery_link_file_origin'];} ?>">
                    </div>
                    <hr>


                    

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
                    <label style="color: red; margin-right: 7px;">Ảnh Cũ</label>
                    <img src="<?= base_url('public/upload/tinymce/gallery_asset/'.$gallery['gallery_image']) ?>" width="30%">
                    <hr>
                    <label class="upper">Ảnh mới (nếu muốn thay đổi)</label>
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
                        <textarea class="form-control" style="height:120px" name="gallery_meta_desc" maxlength="255"><?php if(old('gallery_meta_desc') != null){echo set_value('gallery_meta_desc');}else{echo $gallery['gallery_meta_desc'];} ?></textarea>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="upper">Meta Key</label>
                        <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'gallery_meta_key') : '' ?></p>
                        <textarea class="form-control" style="height:120px" name="gallery_meta_key" maxlength="255"><?php if(old('gallery_meta_key') != null){echo set_value('gallery_meta_key');}else{echo $gallery['gallery_meta_key'];} ?></textarea>
                        
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

<?= $this->section('script'); ?>
  <script type="text/javascript">
    $(".gallery_active").addClass("menu-open");
    $(".gallery_active a:first").addClass("active");
    $(".gallery_active .gallery_tree_active3 a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Chỉnh sửa ảnh: <?= $gallery['gallery_title'] ?> | Bộ Sưu Tập
<?= $this->endSection(); ?>