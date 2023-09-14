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
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                <?= session()->getFlashdata('success'); ?>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('update'))) : ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn đã chỉnh sửa thành công bài viết: <?= session()->getFlashdata('update'); ?>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('hidden'))) : ?>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn đã ẩn trang: <?= session()->getFlashdata('hidden'); ?>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('show'))) : ?>
              <div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Bạn đã hiện thị trang: <?= session()->getFlashdata('show'); ?>
              </div>
            <?php endif ?>

            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/page/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus"></i> Thêm trang mới</a></h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr>
                      <th>Tên Trang (Url)</th>
	                    <th>Tiêu đề Trang</th>
	                    <th>Trạng thái</th>
                      <th>Ẩn/Hiện bài viết</th>
	                    <th>Option</th>
                      <th>Add Infomation</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($page as $p): ?>
                        
                      
		                  <tr
                        <?php if(!empty(session()->getFlashdata('success')) && session()->getFlashdata('success') == $p['page_name'] ): ?> class="table-success" <?php endif; ?>
                        <?php if(!empty(session()->getFlashdata('update')) && session()->getFlashdata('update') == $p['page_name'] ): ?> class="table-info" <?php endif; ?>
                        <?php if(!empty(session()->getFlashdata('hidden')) && session()->getFlashdata('hidden') == $p['page_name'] ): ?> class="table-warning" <?php endif; ?>

                        <?php if(!empty(session()->getFlashdata('show')) && session()->getFlashdata('show') == $p['page_name'] ): ?> class="table-success" <?php endif; ?>
                      >
                        <td>
                          <?= $p['page_name']; ?>
                          <p><?php if($p['page_status'] == 1){echo "<span class='text-bold'>Trang Chủ</span>"; }else{echo "<span style='color: red'>Trang Thường</span>"; } ?></p>
                          <p class="text-bold text-red"><?php if($p['page_show'] == 0){echo "Đang Ẩn";} ?></p>

                        </td>
		                    <td><?= $p['page_title']; ?></td>
		                    

                        

                        
                        <td>
                          <a href="<?php if($p['page_show'] == 0){echo base_url('admin/page/show/'.$p['id']);}else{echo "javascript:void(0)";} ?>" class="ml-3"><i class="fas fa-eye"></i></i> Hiện</a>
                          <a href="<?php if($p['page_show'] == 1){echo base_url('admin/page/hidden/'.$p['id']);}else{echo "javascript:void(0)";} ?>" class="ml-3"><i class="fas fa-eye-slash"></i> Ẩn</a>
                        </td>
		                    <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-xl<?=$p['id']?>">
                            <i class="fas fa-folder-open"></i> Show
                          </button>

                          <!-- /.modal -->
                          <div class="modal fade" id="modal-xl<?=$p['id']?>" aria-labelledby="exampleModalScrollableTitle">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-bold"><?= $p['page_title']; ?></h4>
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
                                        <th scope="row">Tên Trang</th>
                                        <td>
                                          <?= $p['page_name'] ?>
                                        </td>
                                      </tr>

                                      <tr>
                                        <th scope="row">Tiêu Đề</th>
                                        <td><?= $p['page_title'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Là Trang Chủ?</th>
                                        <td>
                                          <?php 
                                            
                                            if($p['page_status'] == 1){
                                              echo "Trang Chủ";
                                            }else{
                                              echo "Trang thường";
                                            }
                                            
                                          ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Lượt Xem</th>
                                        <td><?= $p['page_view'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Ảnh</th>
                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $p['page_image'] ?>" style="width: 60% " ></td>
                                      </tr>
                                      
                                      
                                      <tr>
                                        <th scope="row">Nội dung</th>
                                        <td><?php echo $p['page_content'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Meta Desc</th>
                                        <td><?= $p['page_meta_desc'] ?></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Meta Key</th>
                                        <td><?= $p['page_meta_key'] ?></td>
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
                                  <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> <a href="<?= base_url('admin/page/edit/'.$p['id']) ?>" style="color: #000000;">Edit Page</a></button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->



                        </td>
		                    <td>
                          <div class="alert alert-primary" role="alert">
                            <a href="<?= base_url('admin/page/edit/'.$p['id']) ?>" class="ml-3 text-decoration-none"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?= base_url('admin/page/del/'.$p['id']) ?>" class="ml-3 text-decoration-none text-warning"><i class="fas fa-trash"></i> Delete</a>
                          </div>
                        </td>
                        <td>

                          
                        <?php if($p['page_status'] == 1): ?>
                          <div class="alert alert-dark" role="alert">
                            <a href="<?= base_url('admin/page/add/'.$p['id']) ?>" class="text-decoration-none ml-3"><i class="fas fa-share-alt-square"></i>  Social</a>
                          </div>
                        <?php endif; ?>
                          
                          
                          
                        </td>
		                  </tr>
                      
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Tên Trang (Url)</th>
                    <th>Tiêu đề Trang</th>
                    <th>Trạng thái</th>
                    <th>Ẩn/Hiện bài viết</th>
                    <th>Option</th>
                    <th>Add Infomation</th>
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
    $(".page_active").addClass("menu-open");
    $(".page_active a:first").addClass("active");
    $(".page_active .page_tree_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Danh Sách Trang
<?= $this->endSection(); ?>



