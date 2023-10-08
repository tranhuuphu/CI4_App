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
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="javascript:void(0)" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <form action="<?= base_url('forgotpw'); ?>" method="post">
        <?= csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="" name="email" class="form-control" placeholder="Email" value="<?= old('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p class="text-left text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></p>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request New Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- jQuery -->
<script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/admin_asset'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/admin_asset'); ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
