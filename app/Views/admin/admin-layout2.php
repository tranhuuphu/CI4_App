<!DOCTYPE html>
<html lang="en">
  <?= $this->include('admin/header'); ?>
  <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="<?= base_url('public/admin_asset'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

      <!-- Navbar -->
      <?= $this->include('admin/navbar'); ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <?= $this->renderSection('content'); ?>

        
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="<?= base_url(); ?>">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('public/admin_asset'); ?>/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/raphael/raphael.min.js"></script>
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('public/admin_asset'); ?>/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('public/admin_asset'); ?>/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('public/admin_asset'); ?>/dist/js/pages/dashboard2.js"></script>
  </body>
</html>
