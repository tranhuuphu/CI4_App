<!DOCTYPE html>
<html lang="en">
	<?= $this->include('admin/header'); ?>
	<style>
		.content-wrapper{
			background-color: #ffffff !important;
		}
		
	</style>
	
<body class="hold-transition dark-mode2 sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper mb-5">




	  <!-- Preloader -->
	  <div class="preloader flex-column justify-content-center align-items-center">
	    <img class="animation__wobble" src="<?= base_url('public/admin_asset'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
	  </div>

	  <!-- navbar -->
	  <?= $this->include('admin/navbar'); ?>

	  <?= $this->renderSection('content'); ?>

	  

	  <!-- Control Sidebar -->
	  <aside class="control-sidebar control-sidebar-dark">
	    <!-- Control sidebar content goes here -->
	  </aside>
	  <!-- /.control-sidebar -->

	  <!-- Main Footer -->
	  <footer class="main-footer" style="background-color: #343a40;">
	    <strong>Copyright &copy; <?= date("Y"); ?> <a href="<?= base_url('admin'); ?>">AdminLTE.io</a>.</strong>
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
	<script src="<?= base_url('public/admin_asset'); ?>/dist/js/pages/dashboard.js"></script>

	<script src="<?= base_url('public/admin_asset'); ?>/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/tinymce_5.10.7/tinymce.min.js" referrerpolicy="origin"></script>

	<!-- Tag Input -->
	<script src="<?= base_url('public/admin_asset'); ?>/tagify-input/jQuery.tagify.min.js" referrerpolicy="origin"></script>



	<!-- DataTables  & Plugins -->
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/jszip/jszip.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



	<script src="<?= base_url('public/admin_asset'); ?>/fancybox/jquery.fancybox-1.3.4.pack.js" referrerpolicy="origin"></script>





	<script>
	  $(function () {
	    $("#example1").DataTable({
	      "responsive": true, "lengthChange": false, "autoWidth": false,
	      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
	    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
	      "responsive": true,
	      "pageLength": 20,
	    });
	  });
	</script>

	<script>
    var editor_config = {
      path_absolute : "<?= base_url('/'); ?>/",
      selector: 'textarea#content',
      height: 500,
      relative_urls: false,
      remove_script_host: false,

      oninit : "setPlainText",

      plugins: 'print preview importcss searchreplace autolink autosave save directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons template paste responsivefilemanager',
      fontsize_formats: '8px 10px 12px 14px 16px 18px 24px 36px 48px 72px',
      
      menubar: 'file edit view insert format tools table tc',
      default_link_target: '_blank',
      

      toolbar: 'undo redo | formatselect fontselect fontsizeselect | bold italic underline strikethrough image toc |  alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | media template link anchor codesample | responsivefilemanager',
      toolbar_sticky: true,
      autosave_ask_before_unload: true,
      autosave_interval: '30s',
      autosave_prefix: '{path}{query}-{id}-',
      autosave_restore_when_empty: false,
      autosave_retention: '2m',
      image_advtab: true,

      toolbar_mode: 'wrap',

      paste_text_sticky : true,

      image_title: true,
		  /* enable automatic uploads of images represented by blob or data URIs*/
		  automatic_uploads: true,
		  /*
		    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
		    images_upload_url: 'postAcceptor.php',
		    here we add custom filepicker only to Image dialog
		  */
		  image_advtab: true ,
   
			external_filemanager_path:"<?= base_url('public/admin_asset/responsive_filemanager'); ?>/filemanager/",
			filemanager_title:"Quản Lý Ảnh & File" ,
			// external_plugins: { "filemanager" : "<?= base_url('public/admin_asset/responsive_filemanager'); ?>/filemanager/plugin.min.js"},

			external_plugins: {
				"responsivefilemanager": "<?= base_url('public/admin_asset'); ?>/tinymce_5.10.7/plugins/responsivefilemanager/plugin.min.js",
				"filemanager": "<?= base_url('public/admin_asset/responsive_filemanager'); ?>/filemanager/plugin.min.js",
			},
			filemanager_access_key:"tranhuuphu",



      content_style: ".mce-content-body {font-size:16px;font-family: Andale Mono;}",
      // image_uploadtab: true,
      contextmenu_never_use_native: true,
      

      

    };

    tinymce.init(editor_config);
  </script>

  <script>
		$('[name=taginput]').tagify();








	</script>

	<?= $this->renderSection('script'); ?>











  


</body>
</html>
