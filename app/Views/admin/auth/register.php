<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">

      <?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <p class="login-box-msg text-danger"><?= session()->getFlashdata('fail'); ?></p>
      <?php endif ?>

      <?php if(!empty(session()->getFlashdata('success'))) : ?>
        <p class="login-box-msg text-success"><?= session()->getFlashdata('success'); ?></p>
      <?php endif ?>
      <!-- <p class="login-box-msg">Register a new membership</p> -->

      <form action="<?= base_url('admin/auth/save'); ?>" method="post">
      	<?= csrf_field(); ?>
        <p class="text-left text-bold">Your Full Name</p>
        <div class="input-group mb-3">

          <input type="text" name="name" class="form-control" placeholder="Full name" value="<?= set_value('name'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>

          </div>


        </div>
        <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></p>

        <p class="text-left text-bold">Email</p>
        <div class="input-group mb-3">
          <input type="" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></p>

        <p class="text-left text-bold">Password</p>
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

        
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="<?= base_url('admin/'); ?>" class="btn btn-block btn-danger">
          <i class="fa fa-home"></i>
          Go To Home Admin
        </a>
        <!-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a> -->
      </div>

      <!-- <a href="<?= site_url('admin/auth/login'); ?>" class="text-center">I already have a membership</a> -->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/admin_asset'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/admin_asset'); ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
