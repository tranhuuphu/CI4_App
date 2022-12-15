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
            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/post/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus-circle"></i> New</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
	                  <tr>
	                    <th>Tiêu đề bài viết</th>
	                    <th>Danh Mục</th>
	                    <th>Trạng thái</th>
	                    <th>Show</th>
	                    <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($post as $p): ?>
                        
                      
		                  <tr>
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
                          <?php if($p['post_featured'] == 1){echo "<span class='text-bold'>Bài viết nổi bật</span>"; }else{echo "Bài viết thường"; } ?>
                        </td>
		                    <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-xl<?=$p['id']?>">
                            <i class="fas fa-folder-open"></i> Show
                          </button>


                          <div class="modal fade" id="modal-xl<?=$p['id']?>" aria-labelledby="exampleModalScrollableTitle">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-bold"><?= $p['post_title']; ?></h4>
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
                                        <th scope="row">Danh Mục</th>
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
                                        <th scope="row">Tóm Tắt</th>
                                        <td><?= $p['post_intro'] ?></td>
                                      </tr>
                                      
                                      <tr>
                                        <th scope="row">Ảnh</th>
                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $p['post_image'] ?>" style="width: 60% " ></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Loại bài viết</th>
                                        <td>
                                          <?php 
                                            
                                            if($p['post_featured'] == 1){
                                              echo "bài viết nổi bật";
                                            }else{
                                              echo "bài viết thường";
                                            }
                                            
                                          ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Bài viết bán hàng</th>
                                        <td>
                                          <?php 
                                            
                                            if($p['post_status'] == 1){
                                              echo "bài viết bán hàng";
                                            }else{
                                              echo "bài viết thường";
                                            }
                                            
                                          ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Nội dung</th>
                                        <td><?= $p['post_content'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Meta Desc</th>
                                        <td><?= $p['post_meta_desc'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Meta Key</th>
                                        <td><?= $p['post_meta_key'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Ngày viết bài</th>
                                        <td><?= $p['created_at'] ?></td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
                                  <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> <a href="<?= base_url('admin/post/edit/'.$p['id']) ?>" style="color: #000000;">Edit Post</a></button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->



                        </td>
		                    <td><a href="<?= base_url('admin/post/edit/'.$p['id']) ?>" class="btn btn-success ml-3"><i class="fas fa-edit"></i> Edit</a> <a href="<?= base_url('admin/post/del/'.$p['id']) ?>" class="btn btn-danger ml-3"><i class="fas fa-trash"></i> Delete</a></td>
		                  </tr>
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Tên</th>
                    <th>Danh mục loại</th>
                    <th>Trạng thái</th>
                    <th>Show</th>
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
