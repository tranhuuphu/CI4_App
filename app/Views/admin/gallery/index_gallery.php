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
              <li class="breadcrumb-item active">Danh Sách Ảnh</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <?php if(!empty(session()->getFlashdata('success'))) : ?>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn vừa thêm mới hoặc chỉnh sửa nội dung: <strong><?= session()->getFlashdata('success'); ?></strong>
              </div>
            <?php endif ?>

            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/gallery/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus"></i> Thêm Ảnh</a>
                  <!-- <a href="<?= base_url('admin/gallery/compress') ?>" class="btn btn-danger ml-3"><i class="fas fa-compress-arrows-alt"></i> Nén Ảnh</a> -->
                </h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr class="thead-dark">
                      <th>Thứ tự</th>
                      <th>Tiêu Đề</th>
	                    <th>Ảnh</th>
	                    <th>Thuộc Phân Loại</th>
                      <th>Link File</th>
	                    <th>Bài Viết Liên Quan</th>
                      <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                  	<?php foreach($gallery as $g): ?>
                        
                      
		                  <tr <?php if(!empty(session()->getFlashdata('success')) && session()->getFlashdata('success') == $g['gallery_title'] ): ?> class="table-primary" <?php endif; ?>>
                        <td style="text-align: center;" class="text-bold"><?= $i; ?></td>
                        <?php $i = $i + 1; ?>

                        

                        
		                    <td><?= $g['gallery_title']; ?></td>
                        <td><div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.'/'.$g['gallery_image'] ?>" height="60"></div></td>
                        <td>
                          <strong><?= $g['gallery_type_name']; ?></strong>
                          <br>
                          <button type="button" class="btn btn-warning mt-1 mb-1" data-toggle="modal" data-target="#modal-xl<?=$g['id']?>">
                            <i class="fas fa-eye"></i> View Article
                          </button>
                          <!-- /.modal -->
                          <div class="modal fade" id="modal-xl<?=$g['id']?>" aria-labelledby="exampleModalScrollableTitle">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-bold">Toàn bộ thông tin bài viết</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nội Dung</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>

                                        <th scope="row">01. Danh Mục Ảnh</th>
                                        <td><?= $g['gallery_type_name']; ?></td>
                                      </tr>

                                      <tr>
                                        
                                        <th scope="row">02. Tiêu Đề Ảnh</th>
                                        <td>
                                          <?= $g['gallery_title']; ?>
                                        </td>
                                      </tr>

                                      
                                      <tr>
                                        <th scope="row">03. Lượt Xem</th>
                                        <td><?= $g['gallery_view'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">04. Ảnh</th>
                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $g['gallery_image'] ?>" style="width: 60% " ></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">05. Lượt tải</th>
                                        <td>
                                          <?= $g['gallery_img_download_times'] ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">06. Bài Viết Liên Quan</th>
                                        <td>
                                          <?= $g['gallery_post_url'] ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">07. Link Short</th>
                                        <td><?php echo $g['gallery_file_download'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">08. Link Origin</th>
                                        <td><?= $g['gallery_link_file_origin'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">09. Ngày truy cập gần nhất</th>
                                        <td><?= $g['time_view_newest'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">10. Ngày viết bài</th>
                                        <td><?= $g['created_at'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">11. Ngày cập nhật</th>
                                        <td><?= $g['updated_at'] ?></td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                                <div class="modal-footer justify-content-">
                                  <a href="<?= base_url('admin/gallery/edit/'.$g['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Image</button></a>

                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
                                  
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </td>
		                    
                        <td>
                          <?php if($g['gallery_file_download'] != null): ?> <button type="button" class="btn btn-info mt-1 mb-1"><a href="<?= $g['gallery_file_download']; ?>" class="text-white" target="_blank" ><i class="fas fa-link"></i> Link Short</a></button> <?php endif; ?>

                          <?php if($g['gallery_link_file_origin'] != null): ?> <button type="button" class="btn btn-secondary mt-1 mb-1"><a href="<?= $g['gallery_link_file_origin']; ?>" class="text-white" target="_blank" ><i class="fas fa-link"></i> Link Origin</a></button> <?php endif; ?>
                        </td>
		                    <td>
                          <?php if($g['gallery_post_url'] != null): ?>
                            
                            <a href="<?= $g['gallery_post_url']; ?>" target="_blank"><button type="button" class="btn btn-success"><i class="fas fa-eye"></i> View Detail</button></a>
                            
                          <?php endif; ?>


                        </td>
		                    <td>
                          </button> 
                          

                          <button type="button" class="btn btn-info mt-1 mb-1">
                            <a href="<?= base_url('admin/gallery/edit/'.$g['id']) ?>" class="text-white"><i class="fas fa-edit"></i> Edit</a>
                          </button>

                          <button type="button" class="btn btn-danger mt-1 mb-1">
                            <a href="<?= base_url('admin/gallery/del/'.$g['id']) ?>" class="text-white" onclick="return confirm('are you sure delete this image?')"><i class="fas fa-trash"></i> Delete</a>
                          </button>

                          


                           

                          
                        </td>


		                  </tr>


	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Thứ tự</th>
                    <th>Tiêu Đề</th>
                    <th>Ảnh</th>
                    <th>Thuộc Phân Loại</th>
                    <th>Link File</th>
                    <th>Bài Viết Liên Quan</th>
                    <th>Option</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>


  


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script type="text/javascript">
    $(".gallery_active").addClass("menu-open");
    $(".gallery_active a:first").addClass("active");
    $(".gallery_active .gallery_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Danh sách Bộ Sưu Tập
<?= $this->endSection(); ?>



