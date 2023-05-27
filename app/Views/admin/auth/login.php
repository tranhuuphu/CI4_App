<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/admin_asset'); ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

  
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="javascript:void(0)" class="h1"><b>Admin</b>LTE</a>
      </div>
    <div class="card-body login-card-body ">

      <?php if(!empty(session()->getFlashdata('fail'))) : ?>
        <p class="login-box-msg text-danger"><?= session()->getFlashdata('fail'); ?></p>
      <?php endif ?>

      <?php if(!empty(session()->getFlashdata('success'))) : ?>
        <p class="login-box-msg text-success"><?= session()->getFlashdata('success'); ?></p>
      <?php endif ?>

      <?php if(!empty(session()->getFlashdata('success2'))) : ?>
        <p class="login-box-msg text-success"><?= session()->getFlashdata('success2'); ?></p>
      <?php endif ?>
      
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form action="<?= base_url('auth/check/'); ?>" method="post">
        <?= csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></p>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></p>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="<?= site_url('forgotpw'); ?>" class="text-center">Forgot my Password?</a>
      </p>
      <p class="mb-0">
        <a href="<?= site_url('admin/auth/register'); ?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/admin_asset'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/admin_asset'); ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
