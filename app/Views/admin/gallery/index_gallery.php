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
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                <?= session()->getFlashdata('success'); ?>
              </div>
            <?php endif ?>

            <div class="card">
              <div class="card-header card-danger">
                <h3 class="card-title text-bold">Danh Sách<a href="<?= base_url('admin/gallery/create') ?>" class="btn btn-primary ml-3"><i class="fas fa-plus-circle"></i> Thêm Ảnh</a><a href="<?= base_url('admin/gallery/compress') ?>" class="btn btn-danger ml-3"><i class="fas fa-compress-arrows-alt"></i> Nén Ảnh</a></h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="width:100%">
                  <thead>
	                  <tr class="thead-dark">
                      <th>Thứ tự</th>
	                    <th width="30%">Ảnh</th>
                      <th>Tiêu Đề</th>
	                    <th>Số Lần Đã Nén</th>
	                    <th>Bài Viết Liên Quan</th>
                      <th>Option</th>
	                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                  	<?php foreach($gallery as $g): ?>
                        
                      
		                  <tr
                        <?php 
                            if(isset($id)){
                              if($g['id'] == $id){echo "class='table-primary'";}
                            }
                            

                          ?>>
                        <td style="text-align: center;" class="text-bold"><?= $i; ?></td>
                        <?php $i = $i + 1; ?>

                        

                        <td><div class="d-flex align-items-center"><img class="rounded-circle2" src="<?= base_url('public/upload/tinymce/gallery_asset/').'/'.'/'.$g['gallery_image'] ?>" height="60"></div></td>
		                    <td><?= $g['gallery_title']; ?></td>
                        <td><?= $g['gallery_compress_times']; ?></td>
		                    
                        
		                    <td>
                          <button type="button" class="btn btn-warning">
                            <i class="fas fa-eye"></i> <a href="<?= $g['gallery_post_url']; ?>" target="_blank">View Detail</a>
                          </button>


                        </td>
		                    <td>

                          <a href="<?= base_url('admin/gallery/edit/'.$g['id']) ?>" class="ml-3"><i class="fas fa-edit"></i> Edit</a>
                          <a href="<?= base_url('admin/gallery/del/'.$g['id']) ?>" class="ml-3 text-red"><i class="fas fa-trash"></i> Delete</a></td>
		                  </tr>
	                  <?php endforeach; ?>
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Thứ tự</th>
                    <th width="30%">Ảnh</th>
                    <th>Tiêu Đề</th>
                    <th>Số Lần Đã Nén</th>
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



