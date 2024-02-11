<?= $this->extend('admin/admin-layout'); ?>

<?= $this->section('content'); ?>
<style type="text/css">
	.product-title{
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
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
	            <div class="info-box bg-primary">
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
	            <div class="info-box mb-3 bg-info">
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
	            <div class="info-box mb-3 bg-danger">
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
	            <div class="info-box mb-3 bg-secondary">
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

	        

	        <div class="row">
	          <div class="col-md-12">
	            <div class="card">
	              <div class="card-header bg-gradient-info">
	                <h5 class="card-title text-bold">Recap Report</h5>

	                <div class="card-tools">
	                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
	                    <i class="fas fa-minus"></i>
	                  </button>
	                  <!-- <div class="btn-group">
	                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
	                      <i class="fas fa-wrench"></i>
	                    </button>
	                    <div class="dropdown-menu dropdown-menu-right" role="menu">
	                      <a href="javascript:void(0)" class="dropdown-item">Action</a>
	                      <a href="javascript:void(0)" class="dropdown-item">Another action</a>
	                      <a href="javascript:void(0)" class="dropdown-item">Something else here</a>
	                      <a class="dropdown-divider"></a>
	                      <a href="javascript:void(0)" class="dropdown-item">Separated link</a>
	                    </div>
	                  </div> -->
	                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
	                    <i class="fas fa-times"></i>
	                  </button> -->
	                </div>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body">
	                <div class="row">

	                	<!-- Post Most View -->
	                  <div class="col-md-6">

	                    <div class="card">
					              <div class="card-header bg-light">
					                <h3 class="card-title">Most View Post</h3>

					                
					              </div>
					              <!-- /.card-header -->
					              <div class="card-body p-0">
					                <ul class="products-list product-list-in-card pl-2 pr-2">

					                	<?php foreach($postMostView as $pmv): ?>
						                  <li class="item mt-2">
						                    <div class="product-img">
						                      <img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $pmv['post_image'] ?>" class="img-size-50" style="height: auto;">
						                    </div>
						                    <div class="product-info" style="margin-top: -5px">
						                      <a href="javascript:void(0)" class="product-title" ><?= $pmv['post_title']; ?></a>
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

		                                        <th scope="row">01. Tiêu Đề</th>
		                                        <td><?= $pmv['post_title']; ?></td>
		                                      </tr>

		                                      <tr>
		                                        
		                                        <th scope="row">02. Danh Mục</th>
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
		                                        <th scope="row">03. Tóm Tắt</th>
		                                        <td><?= $pmv['post_intro'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">04. Lượt Xem</th>
		                                        <td><?= $pmv['post_view'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">05. Ảnh</th>
		                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $pmv['post_image'] ?>" style="width:60px" ></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">06. Nổi bật</th>
		                                        <td>
		                                          <?php if($pmv['post_featured'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">07. Sản Phẩm</th>
		                                        <td>
		                                          <?php if($pmv['post_status'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">08. Nội dung</th>
			                                        
		                                        <td>
		                                        	<?= $pmv['post_content'] ?>
		                                        	
		                                        		
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
					              <div class="card-header bg-secondary">
					                <h3 class="card-title">Most View Image</h3>

					                
					              </div>
					              <!-- /.card-header -->
					              <div class="card-body p-0">
					                <ul class="products-list product-list-in-card pl-2 pr-2">

					                	<?php foreach($imageMostView as $imv): ?>
						                  <li class="item mt-2">
						                    <div class="product-img">
						                      <img src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" class="img-size-50" style="height: auto;">
						                    </div>
						                    <div class="product-info" style="margin-top: -5px">
						                      <a href="javascript:void(0)" class="product-title text-info"><?= $imv['gallery_title']; ?></a>
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

					                                        <th scope="row">01. Tiêu Đề</th>
					                                        <td><?= $imv['gallery_title']; ?></td>
					                                      </tr>

					                                      <tr>
					                                        
					                                        <th scope="row">02. The Loai </th>
					                                        <td>
					                                          <?php echo $imv['gallery_type_name']; ?>
					                                        </td>
					                                      </tr>

					                                      
					                                      <tr>
					                                        <th scope="row">03. Lượt Xem</th>
					                                        <td><?= $imv['gallery_view']  ?></td>
					                                      </tr>
					                                      <tr>
					                                        <th scope="row">04. Ảnh</th>
					                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $imv['gallery_image'] ?>" style="width:100%" ></td>
					                                      </tr>
					                                      
					                                      <tr>
					                                        <th scope="row">05. Meta Desc</th>
					                                        <td><?= $imv['gallery_meta_desc'] ?></td>
					                                      </tr>
					                                      <tr>
					                                        <th scope="row">06. Meta Key</th>
					                                        <td><?= $imv['gallery_meta_key'] ?></td>
					                                      </tr>
					                                      <tr>
					                                        <th scope="row">07. Ngày viết bài</th>
					                                        <td><?= $imv['created_at'] ?></td>
					                                      </tr>
					                                      <tr>
					                                        <th scope="row">08. Ngày cap nhat</th>
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


	        <!-- Main row -->
	        <div class="row">
	          

	          <div class="col-md-6">
	            <!-- Info Boxes Style 2 -->
	            
	            <!-- /.info-box -->
	            <div class="info-box mb-3 bg-secondary">
	              <span class="info-box-icon"><i class="fas fa-coins"></i></span>

	              <div class="info-box-content">
	                <span class="info-box-text text-bold">Post View Total</span>
	                <span class="info-box-number"><?= number_format($totalPostView[0]['post_view'], 0) ?></span>
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	            <!-- /.info-box -->

	          </div>
	          <!-- /.col -->


	          <div class="col-md-6">
	            <!-- Info Boxes Style 2 -->
	            <div class="info-box mb-3 bg-warning">
	              <span class="info-box-icon"><i class="fas fa-images"></i></span>

	              <div class="info-box-content">
	                <span class="info-box-text text-bold">Gallery View Total</span>
	                <span class="info-box-number"><?= number_format($totalGalleryView[0]['gallery_view'],0) ?></span>
	              </div>
	              <!-- /.info-box-content -->
	            </div>
	            <!-- /.info-box -->
	            

	          </div>
	        </div>
	        <!-- /.row -->

	        <!-- Recent -->
	        <hr>
	        <div class="row mt-4">
	          

	          <div class="col-md-12">
	            <div class="card card-default">
	              
	              <!-- /.card-header -->
	              <div class="card-body">
	                <div class="callout callout-danger">
	                  <h5>Recent Post & Image Uploaded</h5>

	                  <p>Show 3 post and 12 images have posted recently</p>
	                </div>

	                <div class="row">
			              <div class="col-md-7">
			                <!-- DIRECT CHAT -->
			                <div class="card">
			                  <div class="card-header bg-light">
			                    <h3 class="card-title">Recent Post</h3>

			                    
			                  </div>
			                  <!-- /.card-header -->
			                  <div class="card-body">
			                    <ul class="list-unstyled">

			                    	<?php foreach($postRecent as $pr): ?>

			                    		<li class="media">
														    <img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $pr['post_image'] ?>" class="mr-3" style="width: 30%">
														    <div class="media-body">
														      <h5 class="mt-0 mb-1"><?= $pr['post_title']; ?></h5>
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

		                                        <th scope="row">01. Tiêu Đề</th>
		                                        <td><?= $pr['post_title']; ?></td>
		                                      </tr>

		                                      <tr>
		                                        
		                                        <th scope="row">02. Danh Mục</th>
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
		                                        <th scope="row">03. Tóm Tắt</th>
		                                        <td><?= $pr['post_intro'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">04. Lượt Xem</th>
		                                        <td><?= $pr['post_view'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">05. Ảnh</th>
		                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/image_asset/<?= $pr['post_image'] ?>" style="width:60px" ></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">06. Nổi bật</th>
		                                        <td>
		                                          <?php if($pr['post_featured'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">07. Sản Phẩm</th>
		                                        <td>
		                                          <?php if($pr['post_status'] == 1){ echo "Yes"; }else{ echo "No"; } ?>
		                                        </td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">08. Nội dung</th>
			                                        
		                                        <td>
		                                        	<?= $pr['post_content'] ?>
		                                        	
		                                        		
	                                        	</td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">09. Meta Desc</th>
		                                        <td><?= $pr['post_meta_desc'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">10. Meta Key</th>
		                                        <td><?= $pr['post_meta_key'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">11. Ngày viết bài</th>
		                                        <td><?= $pr['created_at'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">12. Ngày cap nhat</th>
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
			                  <div class="card-header bg-info">
			                    <h3 class="card-title">Latest Image</h3>

			                    
			                  </div>
			                  <!-- /.card-header -->
			                  <div class="card-body p-0">
			                    <ul class="users-list clearfix">

			                    	<?php foreach($imageRecent as $ir): ?>
				                      <li>
				                        <img src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $ir['gallery_image'] ?>" style="height: 100px;">
				                        <a class="users-list-name" href="javascript:void(0)"><?= $ir['gallery_title']; ?></a>
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

		                                        <th scope="row">01. Tiêu Đề</th>
		                                        <td><?= $ir['gallery_title']; ?></td>
		                                      </tr>

		                                      <tr>
		                                        
		                                        <th scope="row">02. The Loai </th>
		                                        <td>
		                                          <?php echo $ir['gallery_type_name']; ?>
		                                        </td>
		                                      </tr>

		                                      
		                                      <tr>
		                                        <th scope="row">03. Lượt Xem</th>
		                                        <td><?= $ir['gallery_view']  ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">04. Ảnh</th>
		                                        <td><img src="<?= base_url('/') ?>/public/upload/tinymce/gallery_asset/<?= $ir['gallery_image'] ?>" style="width:100%" ></td>
		                                      </tr>
		                                      
		                                      <tr>
		                                        <th scope="row">05. Meta Desc</th>
		                                        <td><?= $ir['gallery_meta_desc'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">06. Meta Key</th>
		                                        <td><?= $ir['gallery_meta_key'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">07. Ngày viết bài</th>
		                                        <td><?= $ir['created_at'] ?></td>
		                                      </tr>
		                                      <tr>
		                                        <th scope="row">08. Ngày cap nhat</th>
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
