<!DOCTYPE html>
<html lang="en">
	<?= $this->include('admin/header'); ?>
	
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">




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
	  <footer class="main-footer">
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
	<!-- <script src="<?= base_url('public/admin_asset'); ?>/dist/js/demo.js"></script> -->
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?= base_url('public/admin_asset'); ?>/dist/js/pages/dashboard2.js"></script>


	<!-- <script type="text/javascript">
		tinymce.init({
		  selector: 'textarea#content',
		  plugins: 'image code',
		  toolbar: 'undo redo | link image | code',
		  /* enable title field in the Image dialog*/
		  image_title: true,
		  /* enable automatic uploads of images represented by blob or data URIs*/
		  automatic_uploads: true,
		  /*
		    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
		    images_upload_url: 'postAcceptor.php',
		    here we add custom filepicker only to Image dialog
		  */
		  file_picker_types: 'image',
		  /* and here's our custom image picker*/
		  file_picker_callback: function (cb, value, meta) {
		    var input = document.createElement('input');
		    input.setAttribute('type', 'file');
		    input.setAttribute('accept', 'image/*');

		    /*
		      Note: In modern browsers input[type="file"] is functional without
		      even adding it to the DOM, but that might not be the case in some older
		      or quirky browsers like IE, so you might want to add it to the DOM
		      just in case, and visually hide it. And do not forget do remove it
		      once you do not need it anymore.
		    */

		    input.onchange = function () {
		      var file = this.files[0];

		      var reader = new FileReader();
		      reader.onload = function () {
		        /*
		          Note: Now we need to register the blob in TinyMCEs image blob
		          registry. In the next release this part hopefully won't be
		          necessary, as we are looking to handle it internally.
		        */
		        var id = 'blobid' + (new Date()).getTime();
		        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
		        var base64 = reader.result.split(',')[1];
		        var blobInfo = blobCache.create(id, file, base64);
		        blobCache.add(blobInfo);

		        /* call the callback and populate the Title field with the file name */
		        cb(blobInfo.blobUri(), { title: file.name });
		      };
		      reader.readAsDataURL(file);
		    };

		    input.click();
		  },
		  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
		});

	</script> -->

	<!-- <script type="text/javascript">

		tinymce.init({
    selector: "textarea#content",theme: "modern",width: 680,height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
 });


	</script> -->

	<script>
    var editor_config = {
      path_absolute : "<?= base_url('/admin'); ?>/",
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



      content_style: ".mce-content-body {font-size:16px;font-family: Andale Mono;}",
      // image_uploadtab: true,
      contextmenu_never_use_native: true,
      

      

    };

    tinymce.init(editor_config);
  </script>

  


</body>
</html>
