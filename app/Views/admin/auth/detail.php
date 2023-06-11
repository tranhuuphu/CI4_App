<?= $this->extend('admin/admin-layout'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper mt-5">
  <section class="content-header">
    <div class="container-fluid mt-2">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a></li>
            <li class="breadcrumb-item active">Chi tiết người dùng</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container">
      <div class="row">


        <div class="card">
          <div class="card-body register-card-body">

            <?php if(!empty(session()->getFlashdata('fail'))) : ?>

              <div class="alert alert-warning" role="alert">
                <?= session()->getFlashdata('fail'); ?>
              </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-primary" role="alert">
              <?= session()->getFlashdata('success'); ?>
            </div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('password'))) : ?>
              <p class="login-box-msg text-success"><?= session()->getFlashdata('password'); ?></p>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('user'))) : ?>
              <p class="login-box-msg text-success"><?= session()->getFlashdata('user'); ?></p>
            <?php endif ?>


            <!-- <p class="login-box-msg">Register a new membership</p> -->

            <form action="<?= base_url('admin/auth/edit/'.$userInfo['id']); ?>" method="post" enctype="multipart/form-data">
            	<?= csrf_field(); ?>
              <p class="text-left text-bold">Your Name</p>
              <div class="input-group mb-3">

                <input type="text" name="name" class="form-control" placeholder="Full name" value="<?= $userInfo['name'] ?>">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>

                </div>


              </div>
              <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></p>

              <p class="text-left text-bold">Email</p>
              <div class="input-group mb-3">
                <input type="" name="email" class="form-control" readonly placeholder="Email" value="<?= $userInfo['email'] ?>">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <hr>

              <div class="form-group">
                <label>Ảnh Người Dùng (Nếu update thì chọn ảnh mới)</label>
                <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'post_image') : '' ?></p>
                <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="user_image" accept="image" onchange="loadFile(event)" style="overflow: hidden;">
                <img id="output"/ style="width: 20%" class="pt-1">
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
              <hr>
              <div class="form-group">
                <label>Admin Favicon (Nếu update thì chọn ảnh mới)</label>
                <p class="text-left text-danger mt-1"><?= isset($validation) ? display_error($validation, 'favicon_image') : '' ?></p>
                <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1" name="favicon_image" accept="image" onchange="loadFile2(event)" style="overflow: hidden;">
                <img id="output2"/ style="width: 20%" class="pt-1">
                <script>
                  var loadFile2 = function(event) {
                    var output = document.getElementById('output2');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                      URL.revokeObjectURL(output.src) // free memory
                    }
                  };
                </script>
              </div>
              <hr>

              <div class="alert alert-warning text-bold" role="alert">
                Nếu thay đổi password thì nhập vào, không muốn thay đổi thì để trống
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></p>

              <p class="text-left text-bold">Retype Password</p>
              <div class="input-group mb-3">
                <input type="password" name="re_password" class="form-control" placeholder="Retype password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 're_password') : '' ?></p>

              <hr>
              <div class="row">
                <div class="col-4">
                  <!-- <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                     I agree to the <a href="#">terms</a>
                    </label>
                  </div> -->
                </div>

                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i>   Update</button>
                </div>
                <!-- /.col -->
              </div>
            </form>


            <!-- <a href="<?= site_url('admin/auth/login'); ?>" class="text-center">I already have a membership</a> -->
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
Chi tiết Người Dùng
<?= $this->endSection(); ?>