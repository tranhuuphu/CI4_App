<?= $this->extend('admin/admin-layout'); ?>

<?= $this->section('content'); ?>
<style type="text/css">
	.overflow-title{
		display: -webkit-box;
		-webkit-line-clamp: 1;
		-webkit-box-orient: vertical;
    overflow: hidden;
		text-overflow: ellipsis;
	}
</style>

<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1 class="m-0">Dashboard</h1>
	          </div><!-- /.col -->
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="<?= base_url("admin"); ?>">Home</a></li>
	              <li class="breadcrumb-item active">Dashboard</li>
	            </ol>
	          </div><!-- /.col -->
	        </div><!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <section class="content">
	      <div class="container-fluid">


	        <!-- Info boxes -->
	        <div class="row">
	          <div class="col-12 col-sm-6 col-md-3">
	            <div class="info-box bg-light">
	              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-images"></i></span>

	              <div class="info-box-content">
	                <span class="info-box-text text-bold">Gallery</span>
	                <span class="info-box-number">
	                  <?= $totalGallery ?>
	                  <small>images</small>
	                </span>
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	            <!-- /.info-box -->
	          </div>
	          <!-- /.col -->
	          <div class="col-12 col-sm-6 col-md-3">
	            <div class="info-box mb-3 bg-light">
	              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-pie"></i></span>

	              <div class="info-box-content">
	                <span class="info-box-text text-bold">Total Post</span>
	                <span class="info-box-number"><?= $totalPost ?></span>
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	            <!-- /.info-box -->
	          </div>
	          <!-- /.col -->

	          <!-- fix for small devices only -->
	          <div class="clearfix hidden-md-up"></div>

	          <div class="col-12 col-sm-6 col-md-3">
	            <div class="info-box mb-3 bg-light">
	              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

	              <div class="info-box-content">
	                <span class="info-box-text text-bold">Post For Sale</span>
	                <span class="info-box-number"><?= $totalBlog ?><small>/<?= $totalPost ?></small></span>
	                
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	            <!-- /.info-box -->
	          </div>
	          <!-- /.col -->
	          <div class="col-12 col-sm-6 col-md-3">
	            <div class="info-box mb-3 bg-light">
	              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

	              <div class="info-box-content">
	                <span class="info-box-text text-bold">Blog</span>
	                <span class="info-box-number"><?= $totalProduct ?><small>/<?= $totalPost ?></small></span>
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	            <!-- /.info-box -->
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->

	        <hr>

	        <!-- Info boxes -->
	        <div class="row">
	          <div class="col-12 col-sm-6 col-md-6">
	          	<a href="<?= base_url('admin/post/create') ?>">
		          	<div class="small-box bg-" style="background-color: #ffd894">
		              <div class="inner ml-2">
		                <h3>Create</h3>
		                <h4>New Post <i class="fas fa-warehouse"></i></h4>
		              </div>
		              <div class="icon mr-2">
		                <i class="fas fa-plus"></i>
		              </div>
		            </div>
		        </a>


	            
	          </div>
	          <!-- /.col -->
	          <div class="col-12 col-sm-6 col-md-6">
	          	<a href="<?= base_url('admin/gallery/create') ?>">
		          	<div class="small-box bg-" style="background-color: #e8ff3d">
		              <div class="inner ml-2">
		                <h3>Create</h3>
		                <h4>New Image <i class="fas fa-image"></i></h4>
		              </div>
		              <div class="icon mr-2">
		                <i class="fas fa-plus"></i>
		              </div>
		            </div>
		        </a>
	          </div>
	          <!-- /.col -->

	          <!-- fix for small devices only -->
	          <div class="clearfix hidden-md-up"></div>

	        </div>
	        <!-- /.row -->


	        <hr>

	        <div class="row">
	          <div class="col-md-12">
	            <div class="card" >
	              <div class="card-header bg-gradient-info">
	                <h5 class="card-title text-bold">Recap Report</h5>

	                <div class="card-tools">
	                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-animation-speed="1000">
	                    <i class="fas fa-minus"></i>
	                  </button>
	                </div>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body">
	                <div class="row">

	                	<!-- Post Most View -->
	                  <div class="col-md-6">

	                    <div class="card">
			              <div class="card-header bg-light">
			                <h3 class="card-title text-bold">Most View Post</h3>
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body p-0">
			                <ul class="products-list product-list-in-card pl-2 pr-2">

			                	<?php foreach($postMostView as $pmv): ?>
				                  <li class="item mt-2">
				                    <div class="product-img">

				                      <a data-fancybox data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pmv['post_image'] ?>">

		                            <img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pmv['post_image'] ?>" style="height: auto;" class="img-size-50">
		                          </a>

				                    </div>
				                    <div class="product-info" style="margin-top: -5px">
				                      <a href="javascript:void(0)" class="overflow-title" title="<?= $pmv['post_title']; ?>"><?= $pmv['post_title']; ?></a>
				                      <span class="product-description">
				                      	<i class="fas fa-fire"></i> <?= number_format($pmv['post_view'],0); ?>
				                        <?php if($pmv['post_status'] == "san-pham"): ?><i class="fas fa-shopping-cart ml-2"></i><?php else: ?><i class="far fa-clone ml-2"></i><?php endif; ?>
				                        
				                        <button type="button" class="btn btn-" data-toggle="modal" data-target="#modal-xl<?=$pmv['id']?>" style="margin-bottom: 4px;">
			                            <i class="fas fa-eye"></i>
			                          </button>

			                          <a href="<?= base_url('admin/post/edit/'.$pmv['id']) ?>" class = "text-warning"><i class="fas fa-edit"></i> Edit</a>
				                      </span>
				                    </div>
				                  </li>
				                  <!-- /.item -->

				                  <!-- /.modal -->

		                          <div class="modal fade" id="modal-xl<?=$pmv['id']?>" aria-labelledby="exampleModalScrollableTitle">
		                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
		                              <div class="modal-content">

		                                <div class="modal-header bg-light">
		                                  <h4 class="modal-title text-bold">Recent Post</h4>
		                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                    <span aria-hidden="true">&times;</span>
		                                  </button>
		                                </div>
		                                <div class="modal-body">
		                                  <table class="table table-striped table-bordered" >
		                                    <thead>
		                                      <tr>
		                                        <th scope="col">#</th>
		                                        <th scope="col">Nội Dung</th>
		                                      </tr>
		                                    </thead>
		                                    <tbody>
		                                      <tr>

		                                        <th scope="row">Tiêu Đề</th>
		                                        <td><?= $pmv['post_title']; ?></td>
		                                      </tr>

		                                      <tr>
		                                        
		                                        <th scope="row">Danh Mục</th>
		                                        <td>
		                                          <?php 
		                                            foreach ($cate as $c) {
		                                              if($c['id'] == $pmv['post_cate_id']){
		                                                echo $c['cate_name'];
		                                              }
		                                            } 
		                                          ?>
		                                        </td>
		                                      </tr>

		                                      <tr>
		                                        <th scope="row">Tóm Tắt</th>
		                                        <td><?= $pmv['post_intro'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Lượt Xem</th>
		                                        <td><?= $pmv['post_view'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Ảnh</th>
		                                        <td>
		                                        	<img class="lazyload" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pmv['post_image'] ?>" style="height: auto; width:60%">
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Nổi bật</th>
		                                        <td>
		                                          <?php if($pmv['post_featured'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Sản Phẩm</th>
		                                        <td>
		                                          <?php if($pmv['post_status'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Nội dung</th>
			                                        
		                                        <td>
		                                        	<?= $pmv['post_content'] ?>

		                                        	<?= $pmv['post_content2'] ?>
		                                        	
		                                        		
	                                        	</td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">09. Meta Desc</th>
		                                        <td><?= $pmv['post_meta_desc'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">10. Meta Key</th>
		                                        <td><?= $pmv['post_meta_key'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">11. Ngày viết bài</th>
		                                        <td><?= $pmv['created_at'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">12. Ngày cap nhat</th>
		                                        <td><?= $pmv['updated_at'] ?></td>
		                                      </tr>
		                                    </tbody>
		                                  </table>

		                                </div>
		                                <div class="modal-footer justify-content-">
		                                  <a href="<?= base_url('admin/post/edit/'.$pmv['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Post</button></a>

		                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
		                                  
		                                </div>
		                              </div>
		                              <!-- /.modal-content -->
		                            </div>
		                            <!-- /.modal-dialog -->
		                          </div>
		                          <!-- /.modal -->

				                <?php endforeach; ?>

			                  
			                </ul>
			              </div>
			              <!-- /.card-body -->
			              <div class="card-footer text-center">
			              	<a href="<?= base_url("admin/post") ?>" class="btn btn-md btn-danger float-lef">View All Post <i class="fas fa-long-arrow-alt-right"></i></a>
			                
			              </div>
			              <!-- /.card-footer -->
			            </div>

	                  </div>
	                  <!-- End Post Most View -->

	                  <div class="col-md-6">

	                    <div class="card">
			              <div class="card-header bg-light">
			                <h3 class="card-title text-bold">Most View Image</h3>
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body p-0">
			                <ul class="products-list product-list-in-card pl-2 pr-2">

			                	<?php foreach($imageMostView as $imv): ?>
				                  <li class="item mt-2">
				                    <div class="product-img">

				                      <a data-fancybox data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>">

		                            <img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" class="img-size-50" style="height: auto;">
		                          </a>

				                    </div>
				                    <div class="product-info" style="margin-top: -5px">
				                      <a href="javascript:void(0)" class="product-title text-info overflow-title" title="<?= $imv['gallery_title']; ?>"><?= $imv['gallery_title']; ?></a>
				                      <span class="product-description">
				                      	<i class="fas fa-fire"></i> <?= number_format($imv['gallery_view'],0); ?>
				                        
				                        
				                        <button type="button" class="btn btn-" data-toggle="modal" data-target="#modal-xl2<?=$imv['id']?>" style="margin-bottom: 4px;">
			                            <i class="fas fa-eye"></i>
			                          </button>

			                          <a href="<?= base_url('admin/gallery/edit/'.$imv['id']) ?>" class="text-danger"><i class="far fa-edit"></i> Edit</a>

			                          <!-- /.modal -->

			                          <div class="modal fade" id="modal-xl2<?=$imv['id']?>" aria-labelledby="exampleModalScrollableTitle">
			                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
			                              <div class="modal-content">

			                                <div class="modal-header bg-light">
			                                  <h4 class="modal-title text-bold">Most View Image</h4>
			                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                                    <span aria-hidden="true">&times;</span>
			                                  </button>
			                                </div>
			                                <div class="modal-body">
			                                  <table class="table table-striped table-bordered">
			                                    <thead>
			                                      <tr>
			                                        <th scope="col">#</th>
			                                        <th scope="col">Nội Dung</th>
			                                      </tr>
			                                    </thead>
			                                    <tbody>
			                                      <tr>

			                                        <th scope="row">Tiêu Đề</th>
			                                        <td><?= $imv['gallery_title']; ?></td>
			                                      </tr>

			                                      <tr>
			                                        
			                                        <th scope="row">The Loai </th>
			                                        <td>
			                                          <?php echo $imv['gallery_type_name']; ?>
			                                        </td>
			                                      </tr>

			                                      
			                                      <tr>
			                                        <th scope="row">Lượt Xem</th>
			                                        <td style="font-weight: bold; color: green;"><?= $imv['gallery_view']  ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Lượt Tải</th>
			                                        <td style="font-weight: bold; color: red;"><?= $imv['gallery_img_download_times']  ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ảnh</th>
			                                        <td><img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" class="img-size-50" style="width: 60%; height: auto;"></td>
			                                      </tr>
			                                      
			                                      <tr>
			                                        <th scope="row">Meta Desc</th>
			                                        <td><?= $imv['gallery_meta_desc'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Meta Key</th>
			                                        <td><?= $imv['gallery_meta_key'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ngày viết bài</th>
			                                        <td><?= $imv['created_at'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ngày cập nhật</th>
			                                        <td><?= $imv['updated_at'] ?></td>
			                                      </tr>
			                                    </tbody>
			                                  </table>

			                                </div>
			                                <div class="modal-footer justify-content-">
			                                  <a href="<?= base_url('admin/gallery/edit/'.$imv['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Image</button></a>

			                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
			                                  
			                                </div>
			                              </div>
			                              <!-- /.modal-content -->
			                            </div>
			                            <!-- /.modal-dialog -->
			                          </div>
			                          <!-- /.modal -->


				                      </span>
				                    </div>
				                  </li>
				                  <!-- /.item -->
				                <?php endforeach; ?>

			                  
			                </ul>
			              </div>
			              <!-- /.card-body -->
			              <div class="card-footer text-center">
			              	<a href="<?= base_url("admin/gallery") ?>" class="btn btn-md btn-success float-lef">View All Gallery <i class="fas fa-long-arrow-alt-right"></i></a>
			                
			              </div>
			              <!-- /.card-footer -->
			            </div>

	                  </div>
	                  

	                </div>
	                <!-- /.row -->
	              </div>
	              <!-- ./card-body -->
	              
	            </div>
	            <!-- /.card -->
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->
	        <hr>

	        <!-- Small Box (Stat card) -->
	        <div class="callout callout-warning">
	          <h5 class="upper text-bold">TOTAL OF VIEW</h5>

	          <p>View of all post and image</p>

	          <div class="row">
		          <!-- ./col -->
		          <div class="col-lg-6 col-6">
		            <!-- small card -->
		            <div class="small-box bg-success">
		              <div class="inner">
		                <h3><?= number_format($totalPostView[0]['post_view'], 0) ?><sup style="font-size: 20px"> times</sup></h3>

		                <p>Post View</p>
		              </div>
		              <div class="icon">
		                <i class="fas fa-signal fa-4x"></i>
		              </div>
		              <a href="javascript:void(0)" class="small-box-footer">
		                 More info <i class="fas fa-arrow-circle-right"></i>
		              </a>
		            </div>
		          </div>
		          
		          <!-- ./col -->
		          <div class="col-lg-6 col-6">
		            <!-- small card -->
		            <div class="small-box bg-danger">
		              <div class="inner">
		                <h3><?= number_format($totalGalleryView[0]['gallery_view'], 0) ?><sup style="font-size: 20px"> times</sup></h3>

		                <p>Gallery View</p>
		              </div>
		              <div class="icon">
		                <i class="fas fa-images fa-4x"></i>
		              </div>
		              <a href="javascript:void(0)" class="small-box-footer">
		                More info <i class="fas fa-arrow-circle-right"></i>
		              </a>
		            </div>
		          </div>
		          <!-- ./col -->
		        </div>
		        <!-- /.row -->
	        </div>
        

	        

	        <!-- Recent -->
	        <hr class="mt-5 mb-5">
	        <div class="row mt-4">
	          

	          <div class="col-md-12">
	            <div class="card card-default">
	              
	              <!-- /.card-header -->
	              <div class="card-body">
	                <div class="callout callout-info">
	                  <h5 class="text-bold">Recent Post & Image Uploaded</h5>

	                  <p>Show 3 post and 12 images have posted recently</p>
	                </div>

	                <div class="row">
			              <div class="col-md-7">
			                <!-- DIRECT CHAT -->
			                <div class="card">
			                  <div class="card-header bg-light">
			                    <h3 class="card-title text-bold">Recent Post Or Edited</h3>

			                    
			                  </div>
			                  <!-- /.card-header -->
			                  <div class="card-body">
			                    <ul class="list-unstyled">

			                    	<?php foreach($postRecent as $pr): ?>

			                    		<li class="media">
														    <a data-fancybox data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pr['post_image'] ?>" style="width: 30%" class="mr-3">
			                            <img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pr['post_image'] ?>" style="width: 100%">
			                          </a>

														    <div class="media-body">
													      	<h5 class="mt-0 mb-1 overflow-title"><?= $pr['post_title']; ?></h5>
													      	<p class="pt-2"><?= $pr['post_intro']; ?>.</p>
													      	<i class="fas fa-fire"></i> <?= number_format($pr['post_view'],0); ?>
		                        				<?php if($pr['post_status'] == "san-pham"): ?><i class="fas fa-shopping-cart ml-2"></i><?php else: ?><i class="far fa-clone ml-2"></i><?php endif; ?>
						                        
					                        	<button type="button" class="btn btn-" data-toggle="modal" data-target="#modal-xl3<?=$pr['id']?>" style="margin-bottom: 4px;">
				                                	<i class="fas fa-eye"></i>
			                            	</button>

		              									<a href="<?= base_url('admin/post/edit/'.$pr['id']) ?>" class="text-info"><i class="far fa-edit"></i> Edit</a>
														    </div>
														    
														    
															</li>
															<hr>

																<!-- /.modal -->

			                          <div class="modal fade" id="modal-xl3<?=$pr['id']?>" aria-labelledby="exampleModalScrollableTitle">
			                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
			                              <div class="modal-content">

			                                <div class="modal-header bg-light">
			                                  <h4 class="modal-title text-bold">Rencent Post</h4>
			                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                                    <span aria-hidden="true">&times;</span>
			                                  </button>
			                                </div>
			                                <div class="modal-body">
			                                  <table class="table table-striped table-bordered" >
			                                    <thead>
			                                      <tr>
			                                        <th scope="col">#</th>
			                                        <th scope="col">Nội Dung</th>
			                                      </tr>
			                                    </thead>
			                                    <tbody>
			                                      <tr>

			                                        <th scope="row">Tiêu Đề</th>
			                                        <td><?= $pr['post_title']; ?></td>
			                                      </tr>

			                                      <tr>
			                                        
			                                        <th scope="row">Danh Mục</th>
			                                        <td>
			                                          <?php 
			                                            foreach ($cate as $c) {
			                                              if($c['id'] == $pr['post_cate_id']){
			                                                echo $c['cate_name'];
			                                              }
			                                            } 
			                                          ?>
			                                        </td>
			                                      </tr>

			                                      <tr>
			                                        <th scope="row">Tóm Tắt</th>
			                                        <td><?= $pr['post_intro'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Lượt Xem</th>
			                                        <td><?= $pr['post_view'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ảnh</th>
			                                        <td>
			                                        	<img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pr['post_image'] ?>" style="width: 60%">
			                                        </td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Nổi bật</th>
			                                        <td>
			                                          <?php if($pr['post_featured'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
			                                        </td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Sản Phẩm</th>
			                                        <td>
			                                          <?php if($pr['post_status'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
			                                        </td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Nội dung</th>
				                                        
			                                        <td>
			                                        	<?= $pr['post_content'] ?>
			                                        	<?= $pr['post_content2'] ?>
			                                    	</td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Meta Desc</th>
			                                        <td><?= $pr['post_meta_desc'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Meta Key</th>
			                                        <td><?= $pr['post_meta_key'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ngày viết bài</th>
			                                        <td><?= $pr['created_at'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ngày cập nhật</th>
			                                        <td><?= $pr['updated_at'] ?></td>
			                                      </tr>
			                                    </tbody>
			                                  </table>

			                                </div>
			                                <div class="modal-footer justify-content-">
			                                  <a href="<?= base_url('admin/post/edit/'.$pr['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Edit Post</button></a>

			                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
			                                  
			                                </div>
			                              </div>
			                              <!-- /.modal-content -->
			                            </div>
			                            <!-- /.modal-dialog -->
			                          </div>
			                          <!-- /.modal -->


							                  
							                  <!-- /.item -->
						                <?php endforeach; ?>
													  
													</ul>

			                    
			                  </div>
			                  <!-- /.card-body -->
			                  
			                </div>
			                <!--/.direct-chat -->
			              </div>
			              <!-- /.col -->

			              <div class="col-md-5">
			                <!-- USERS LIST -->
			                <div class="card">
			                  <div class="card-header bg-light">
			                    <h3 class="card-title text-bold">Latest Image View Or Edited</h3>

			                    
			                  </div>
			                  <!-- /.card-header -->
			                  <div class="card-body p-0">
			                    <ul class="users-list clearfix">

			                    	<?php foreach($imageRecent as $ir): ?>
				                      <li>
				                        <!-- <img src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $ir['gallery_image'] ?>" style="height: 100px;"> -->

				                        <a data-fancybox data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $ir['gallery_image'] ?>" style="height: auto;">

			                            <img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $ir['gallery_image'] ?>" style="height: auto; border-radius: 5% !important;">
			                          </a>

				                        <a class="users-list-name" href="javascript:void(0)" title="<?= $ir['gallery_title']; ?>"><?= $ir['gallery_title']; ?></a>
				                        <span class="users-list-date">
				                        	<i class="fas fa-fire"></i> <?= number_format($ir['gallery_view'],0); ?>
						                        
						                        
						                        <button type="button" class="btn btn-" data-toggle="modal" data-target="#modal-xl4<?=$ir['id']?>" style="margin-bottom: 4px;">
					                            <i class="fas fa-eye"></i>
					                          </button>

					                          <a href="<?= base_url('admin/gallery/edit/'.$ir['id']) ?>" class="text-danger"><i class="far fa-edit"></i> Edit</a>
				                        </span>
				                      </li>

				                      <!-- /.modal -->

		                          <div class="modal fade" id="modal-xl4<?=$ir['id']?>" aria-labelledby="exampleModalScrollableTitle">
		                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
		                              <div class="modal-content">

		                                <div class="modal-header bg-light">
		                                  <h4 class="modal-title text-bold">Most View Image</h4>
		                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                    <span aria-hidden="true">&times;</span>
		                                  </button>
		                                </div>
		                                <div class="modal-body">
		                                  <table class="table table-striped table-bordered">
		                                    <thead>
		                                      <tr>
		                                        <th scope="col">#</th>
		                                        <th scope="col">Nội Dung</th>
		                                      </tr>
		                                    </thead>
		                                    <tbody>
		                                      <tr>

		                                        <th scope="row">Tiêu Đề</th>
		                                        <td><?= $ir['gallery_title']; ?></td>
		                                      </tr>

		                                      <tr>
		                                        
		                                        <th scope="row">The Loai </th>
		                                        <td>
		                                          <?php echo $ir['gallery_type_name']; ?>
		                                        </td>
		                                      </tr>

		                                      
		                                      <tr>
		                                        <th scope="row">Lượt Xem</th>
		                                        <td><?= $ir['gallery_view']  ?></td>
		                                      </tr>

		                                      <tr>
		                                        <th scope="row">Lượt Tải</th>
		                                        <td><?= $ir['gallery_img_download_times']  ?></td>
		                                      </tr>

		                                      <tr>
		                                        <th scope="row">Ảnh</th>
		                                        <td>
		                                        	<img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $ir['gallery_image'] ?>" style="width:60%; height: auto; ">
		                                        </td>
		                                      </tr>
		                                      
		                                      <tr>
		                                        <th scope="row">Meta Desc</th>
		                                        <td><?= $ir['gallery_meta_desc'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Meta Key</th>
		                                        <td><?= $ir['gallery_meta_key'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Ngày viết bài</th>
		                                        <td><?= $ir['created_at'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">Ngày cập nhật</th>
		                                        <td><?= $ir['updated_at'] ?></td>
		                                      </tr>
		                                    </tbody>
		                                  </table>

		                                </div>
		                                <div class="modal-footer justify-content-">
		                                  <a href="<?= base_url('admin/gallery/edit/'.$imv['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-secondary"><i class="fas fa-edit"></i> Edit Image</button></a>

		                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
		                                  
		                                </div>
		                              </div>
		                              <!-- /.modal-content -->
		                            </div>
		                            <!-- /.modal-dialog -->
		                          </div>
		                          <!-- /.modal -->
			                      <?php endforeach; ?>

			                      

			                    </ul>
			                    <!-- /.users-list -->
			                  </div>
			                  <!-- /.card-body -->
			                  
			                </div>
			                <!--/.card -->
			              </div>
			              <!-- /.col -->
			            </div>
			            <!-- /.row -->
	                
	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->
	          </div>
	          <!-- /.col -->
	        </div>

	        



	        <hr>

	        <div class="row">
	          <div class="col-md-12">
	            <div class="card">
	              <div class="card-header bg-info">
	                <h5 class="card-title text-bold">Newest View Post & Image</h5>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body">
	                <div class="row">

	                	<!-- Post Most View -->
	                  <div class="col-md-6">

	                    <div class="card">
			              <div class="card-header bg-light">
			                <h3 class="card-title text-bold">Recent View Post</h3>
			              </div>
			              

			              <!-- /.card-header -->
	                  <div class="card-body">
	                    <ul class="list-unstyled">

	                    	<?php foreach($postRecentView as $pr): ?>

	                    		<li class="media">
												    <a data-fancybox data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pr['post_image'] ?>" style="width: 30%" class="mr-3">
	                            <img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pr['post_image'] ?>" style="width: 100%">
	                          </a>

												    <div class="media-body">
											      	<h5 class="mt-0 mb-1 overflow-title"><?= $pr['post_title']; ?></h5>
											      	<p class="pt-2"><?= $pr['post_intro']; ?>.</p>
											      	<i class="fas fa-fire"></i> <?= number_format($pr['post_view'],0); ?>
                        				<?php if($pr['post_status'] == "san-pham"): ?><i class="fas fa-shopping-cart ml-2"></i><?php else: ?><i class="far fa-clone ml-2"></i><?php endif; ?>
				                        
			                        	<button type="button" class="btn btn-" data-toggle="modal" data-target="#modal-xl3<?=$pr['id']?>" style="margin-bottom: 4px;">
		                                	<i class="fas fa-eye"></i>
	                            	</button>

              									<a href="<?= base_url('admin/post/edit/'.$pr['id']) ?>" class="text-info"><i class="far fa-edit"></i> Edit</a>
												    </div>
												    
												    
													</li>
													<hr>

														<!-- /.modal -->

	                          <div class="modal fade" id="modal-xl3<?=$pr['id']?>" aria-labelledby="exampleModalScrollableTitle">
	                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
	                              <div class="modal-content">

	                                <div class="modal-header bg-light">
	                                  <h4 class="modal-title text-bold">Rencent Post</h4>
	                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                    <span aria-hidden="true">&times;</span>
	                                  </button>
	                                </div>
	                                <div class="modal-body">
	                                  <table class="table table-striped table-bordered" >
	                                    <thead>
	                                      <tr>
	                                        <th scope="col">#</th>
	                                        <th scope="col">Nội Dung</th>
	                                      </tr>
	                                    </thead>
	                                    <tbody>
	                                      <tr>

	                                        <th scope="row">Tiêu Đề</th>
	                                        <td><?= $pr['post_title']; ?></td>
	                                      </tr>

	                                      <tr>
	                                        
	                                        <th scope="row">Danh Mục</th>
	                                        <td>
	                                          <?php 
	                                            foreach ($cate as $c) {
	                                              if($c['id'] == $pr['post_cate_id']){
	                                                echo $c['cate_name'];
	                                              }
	                                            } 
	                                          ?>
	                                        </td>
	                                      </tr>

	                                      <tr>
	                                        <th scope="row">Tóm Tắt</th>
	                                        <td><?= $pr['post_intro'] ?></td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Lượt Xem</th>
	                                        <td><?= $pr['post_view'] ?></td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Ảnh</th>
	                                        <td>
	                                        	<img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/<?= $pr['post_image'] ?>" style="width: 60%">
	                                        </td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Nổi bật</th>
	                                        <td>
	                                          <?php if($pr['post_featured'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
	                                        </td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Sản Phẩm</th>
	                                        <td>
	                                          <?php if($pr['post_status'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
	                                        </td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Nội dung</th>
		                                        
	                                        <td>
	                                        	<?= $pr['post_content'] ?>
	                                        	<?= $pr['post_content2'] ?>
	                                    	</td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Meta Desc</th>
	                                        <td><?= $pr['post_meta_desc'] ?></td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Meta Key</th>
	                                        <td><?= $pr['post_meta_key'] ?></td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Ngày viết bài</th>
	                                        <td><?= $pr['created_at'] ?></td>
	                                      </tr>
	                                      <tr>
	                                        <th scope="row">Ngày cập nhật</th>
	                                        <td><?= $pr['updated_at'] ?></td>
	                                      </tr>
	                                    </tbody>
	                                  </table>

	                                </div>
	                                <div class="modal-footer justify-content-">
	                                  <a href="<?= base_url('admin/post/edit/'.$pr['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Edit Post</button></a>

	                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
	                                  
	                                </div>
	                              </div>
	                              <!-- /.modal-content -->
	                            </div>
	                            <!-- /.modal-dialog -->
	                          </div>
	                          <!-- /.modal -->


					                  
					                  <!-- /.item -->
				                <?php endforeach; ?>
											  
											</ul>

	                    
	                  </div>
	                  <!-- /.card-body -->


			              <div class="card-footer text-center">
			              	<a href="<?= base_url("admin/post") ?>" class="btn btn-md btn-danger float-lef">View All Post <i class="fas fa-long-arrow-alt-right"></i></a>
			                
			              </div>
			              <!-- /.card-footer -->
			            </div>

	                  </div>
	                  <!-- End Post Most View -->

	                  <div class="col-md-6">

	                    <div class="card">
			              <div class="card-header bg-light">
			                <h3 class="card-title text-bold">Recent View Image</h3>
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body p-0">
			                <ul class="products-list product-list-in-card pl-2 pr-2">

			                	<?php foreach($imageRecentView as $imv): ?>
				                  <li class="item mt-2">
				                    <div class="product-img">


				                      <a data-fancybox data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" style="width: 30%" class="mr-3">
		                            <img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" class="img-size-50 rounded" style="height: auto;">
		                          </a>

				                    </div>
				                    <div class="product-info" style="margin-top: -5px">
				                      <a href="javascript:void(0)" class="product-title text-info overflow-title" title="<?= $imv['gallery_title']; ?>"><?= $imv['gallery_title']; ?></a>
				                      <span class="product-description">
				                      	<i class="fas fa-fire"></i> <?= number_format($imv['gallery_view'],0); ?>
				                        
				                        
				                        <button type="button" class="btn btn-" data-toggle="modal" data-target="#modal-xl2<?=$imv['id']?>" style="margin-bottom: 4px;">
			                            <i class="fas fa-eye"></i>
			                          </button>

			                          <a href="<?= base_url('admin/gallery/edit/'.$imv['id']) ?>" class="text-danger"><i class="far fa-edit"></i> Edit</a>

			                          <!-- /.modal -->

			                          <div class="modal fade" id="modal-xl2<?=$imv['id']?>" aria-labelledby="exampleModalScrollableTitle">
			                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
			                              <div class="modal-content">

			                                <div class="modal-header bg-light">
			                                  <h4 class="modal-title text-bold">Most View Image</h4>
			                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                                    <span aria-hidden="true">&times;</span>
			                                  </button>
			                                </div>
			                                <div class="modal-body">
			                                  <table class="table table-striped table-bordered">
			                                    <thead>
			                                      <tr>
			                                        <th scope="col">#</th>
			                                        <th scope="col">Nội Dung</th>
			                                      </tr>
			                                    </thead>
			                                    <tbody>
			                                      <tr>

			                                        <th scope="row">Tiêu Đề</th>
			                                        <td><?= $imv['gallery_title']; ?></td>
			                                      </tr>

			                                      <tr>
			                                        
			                                        <th scope="row">The Loai </th>
			                                        <td>
			                                          <?php echo $imv['gallery_type_name']; ?>
			                                        </td>
			                                      </tr>

			                                      
			                                      <tr>
			                                        <th scope="row">Lượt Xem</th>
			                                        <td><?= $imv['gallery_view']  ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Lượt Tải</th>
			                                        <td style="font-weight: bold; color: red"><?= $imv['gallery_img_download_times']  ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ảnh</th>
			                                        <td>
			                                        	<img class="lazyload img_fancy" src="<?= base_url('public/upload') ?>/loader.gif" data-src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" class="img-size-50 rounded" style="width:60%; height: auto;">
			                                        </td>
			                                      </tr>
			                                      
			                                      <tr>
			                                        <th scope="row">Meta Desc</th>
			                                        <td><?= $imv['gallery_meta_desc'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Meta Key</th>
			                                        <td><?= $imv['gallery_meta_key'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ngày viết bài</th>
			                                        <td><?= $imv['created_at'] ?></td>
			                                      </tr>
			                                      <tr>
			                                        <th scope="row">Ngày cap nhat</th>
			                                        <td><?= $imv['updated_at'] ?></td>
			                                      </tr>
			                                    </tbody>
			                                  </table>

			                                </div>
			                                <div class="modal-footer justify-content-">
			                                  <a href="<?= base_url('admin/gallery/edit/'.$imv['id']) ?>" style="color: #000000;"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Image</button></a>

			                                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>  Close</button>
			                                  
			                                </div>
			                              </div>
			                              <!-- /.modal-content -->
			                            </div>
			                            <!-- /.modal-dialog -->
			                          </div>
			                          <!-- /.modal -->


				                      </span>
				                    </div>
				                  </li>
				                  <!-- /.item -->
				                <?php endforeach; ?>

			                  
			                </ul>
			              </div>
			              <!-- /.card-body -->
			              <div class="card-footer text-center">
			              	<a href="<?= base_url("admin/gallery") ?>" class="btn btn-md btn-success float-lef">View All Gallery <i class="fas fa-long-arrow-alt-right"></i></a>
			                
			              </div>
			              <!-- /.card-footer -->
			            </div>

	                  </div>
	                  

	                </div>
	                <!-- /.row -->
	              </div>
	              <!-- ./card-body -->
	              
	            </div>
	            <!-- /.card -->
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->

	        
	      </div><!--/. container-fluid -->
	    </section>
	    <!-- /.content -->
	  </div>
	  <!-- /.content-wrapper -->


<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
  Admin Dashboard | AdminLTE 3
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script type="text/javascript">
    $(".dash_active").addClass("menu-open");
    $(".dash_active a:first").addClass("active");
  </script>

<?= $this->endSection(); ?>
