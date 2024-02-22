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
              <li class="breadcrumb-item active">Danh Sách Bài Viết</li>
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
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Notice!</h5>
                Bạn vừa thêm mới thành công bài viết: <strong><?= session()->getFlashdata('success'); ?></strong>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('update'))) : ?>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Notice!</h5>
                Bạn vừa cập nhật thành công bài viết: <strong><?= session()->getFlashdata('update'); ?></strong>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('delete'))) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Notice!</h5>
                Bạn vừa xóa bài viết: <strong><?= session()->getFlashdata('delete'); ?></strong> <span style="color: yellow;"> & không thể phục hồi</span>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('show'))) : ?>
              <div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Notice!</h5>
                Bạn vừa cho hiện thị bài viết: <strong><?= session()->getFlashdata('show'); ?></strong>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('hidden'))) : ?>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Notice!</h5>
                Bạn vừa ẩn bài viết: <strong><?= session()->getFlashdata('hidden'); ?></strong>
              </div>
            <?php endif ?>



            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/post/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus"></i> Thêm Bài Viết</a></h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr class="thead-dark">
                      <th>Order</th>
	                    <th width="30%">Tiêu đề bài viết</th>
	                    <th>Danh Mục</th>
                      	<th>Ẩn/Hiện</th>
	                    <th>View</th>
	                    <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                  	<?php foreach($post as $p): ?>
                        
                      
		                  <tr
                        <?php if(!empty(session()->getFlashdata('success')) && session()->getFlashdata('success') == $p['post_title'] ): ?> class="table-success" <?php endif; ?>

                        <?php if(!empty(session()->getFlashdata('update')) && session()->getFlashdata('update') == $p['post_title'] ): ?> class="table-info" <?php endif; ?>

                        <?php if(!empty(session()->getFlashdata('delete')) && session()->getFlashdata('delete') == $p['post_title'] ): ?> class="table-danger" <?php endif; ?>

                        <?php if(!empty(session()->getFlashdata('show')) && session()->getFlashdata('show') == $p['post_title'] ): ?> class="table-primary" <?php endif; ?>

                        <?php if(!empty(session()->getFlashdata('hidden')) && session()->getFlashdata('hidden') == $p['post_title'] ): ?> class="table-warning" <?php endif; ?>

                        
                      >
                        <td style="text-align: center;" class="text-bold"><?= $i; ?></td>
                        <?php $i = $i + 1; ?>
		                    <td><?= $p['post_title']; ?></td>
		                    <td>
                          <?php 
                            foreach ($cate as $c) {
                              if($c['id'] == $p['post_cate_id']){
                                echo $c['cate_name'];
                              }
                            } 
                          ?>
                        </td>

                        

                        
                        
                        <td>
                          <?php if($p['post_show'] == 0): ?>

                            <a href="<?= base_url('admin/post/show/'.$p['id']) ?>" class="ml-3"><i class="fas fa-eye"></i></i> Hiện</a>
                            <a href="javascript:void(0)" class="ml-3 text-secondary"><i class="fas fa-eye-slash"></i> Ẩn</a>
                          <?php else: ?>
                            <a href="javascript:void(0)" class="ml-3 text-secondary"><i class="fas fa-eye"></i></i> Hiện</a>
                            <a href="<?= base_url('admin/post/hidden/'.$p['id']) ?>" class="ml-3"><i class="fas fa-eye-slash"></i> Ẩn</a>
                          <?php endif; ?>
                          
                        </td>
	                    <td>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl<?=$p['id']?>">
                            <i class="fas fa-eye"></i>
                          </button>

                          <!-- /.modal -->
                          <div class="modal fade" id="modal-xl<?=$p['id']?>" aria-labelledby="exampleModalScrollableTitle">
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

                                        <th scope="row">01. Tiêu Đề</th>
                                        <td><?= $p['post_title']; ?></td>
                                      </tr>

                                      <tr>
                                        
                                        <th scope="row">02. Danh Mục</th>
                                        <td>
                                          <?php 
                                            foreach ($cate as $c) {
                                              if($c['id'] == $p['post_cate_id']){
                                                echo $c['cate_name'];
                                              }
                                            } 
                                          ?>
                                        </td>
                                      </tr>

                                      <tr>
                                        <th scope="row">03. Tóm Tắt</th>
                                        <td><?= $p['post_intro'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">04. Lượt Xem</th>
                                        <td><?= $p['post_view'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">05. Ảnh</th>
                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $p['post_image'] ?>" style="width: 60% " ></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">06. Nổi bật</th>
                                        <td>
                                          <?php if($p['post_featured'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">07. Sản Phẩm</th>
                                        <td>
                                          <?php if($p['post_status'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">08. Nội dung</th>
                                        <td><?php echo $p['post_content'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">09. Meta Desc</th>
                                        <td><?= $p['post_meta_desc'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">10. Meta Key</th>
                                        <td><?= $p['post_meta_key'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">11. Ngày viết bài</th>
                                        <td><?= $p['created_at'] ?></td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                                <div class="modal-footer justify-content-">
                                  <a href="<?= base_url('admin/post/edit/'.$p['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Post</button></a>

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

                          <a href="<?= base_url('admin/post/edit/'.$p['id']) ?>" class="btn btn-primary ml-3"><i class="fas fa-edit"></i> Edit</a>
                          <!-- <a href="<?= base_url('admin/post/del/'.$p['id']) ?>" class="ml-3 btn btn-warning" onclick="return confirm('are you sure delete this post?')"><i class="fas fa-trash"></i> Delete</a> -->
                          <a href="<?= base_url('admin/post/product/edit/'.$p['id']) ?>" class="btn btn-success ml-3"><i class="fas fa-images"></i> Add Images</a>

                        </td>

		                  </tr>
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Order</th>
                    <th>Tên</th>
                    <th>Danh Mục</th>
                    <th>Ẩn/Hiện</th>
                    <th>View</th>
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
    $(".post_active").addClass("menu-open");
    $(".post_active a:first").addClass("active");
    $(".post_active .post_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Danh sách sản phẩm | AdminLTE 3
<?= $this->endSection(); ?>



