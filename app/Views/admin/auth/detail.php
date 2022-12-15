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
              <p class="login-box-msg text-danger"><?= session()->getFlashdata('fail'); ?></p>
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

              <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></p>

              <p class="text-left text-bold">Nếu thay đổi password thì nhập vào, không muốn thay đổi thì để trống</p>
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