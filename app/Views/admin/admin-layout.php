<!DOCTYPE html>
<html lang="en">
	<?= $this->include('admin/header'); ?>
	<title><?= $this->renderSection('title'); ?></title>
	<style>
		.content-wrapper{
			background-color: #ffffff !important;
		}
		.dropdown-footer, .dropdown-header{
			text-align: left;
		}

		.pagination a:focus,
      select:focus,
      textarea:focus, 
      textarea.form-control:focus, 
      input.form-control:focus, 
      input[type=text]:focus, 
      input[type=password]:focus, 
      input[type=email]:focus, 
      input[type=number]:focus, 
      [type=text].form-control:focus, 
      [type=password].form-control:focus, 
      [type=email].form-control:focus, 
      [type=tel].form-control:focus, 
      [contenteditable].form-control:focus {
        box-shadow: inset 0 -0px 0 #ddd !important;
      }
      #result{
	      width: 100%;
	    }

	    .upper{
		    text-transform: uppercase !important;
		  }

			/*	Read More	  */
		  #module {
        font-size: 1rem;
        line-height: 1.5;
      }


      #module #collapseExample.collapse:not(.show) {
        display: block;
        height: 8.5rem;
        overflow: hidden;
      }
      .card2{
      	border: 1px solid;
      	border-radius: 5px;
      	padding: 15px;
      }

      #module #collapseExample.collapsing {
        height: 3rem;
      }

      #module a.collapsed::after {
        content: '+ Show More';
      }

      #module a:not(.collapsed)::after {
        content: '- Show Less';
      }
      #images2 div{
        width: 50%;
        float: left;
      }
			
		</style>
		<!-- Thay đổi thành Url domain ở đây, change url domain here line 1154 dialog.php responsive -->
	
<body class="hold-transition dark-mode2 sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper mb-5">




	  <!-- Preloader -->
	  <div class="preloader flex-column justify-content-center align-items-center">
	    <img class="animation__wobble" src="<?= base_url('public/admin_asset'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
	  </div>

	  <!-- navbar -->
	  <?= $this->include('admin/navbar_admin'); ?>

	  <?= $this->renderSection('content'); ?>

	  

	  <!-- Control Sidebar -->
	  <aside class="control-sidebar control-sidebar-dark">
	    <!-- Control sidebar content goes here -->
	  </aside>
	  <style type="text/css">
      .back-to-top{
        bottom: 5rem !important;
        position: fixed;
        right: 1.25rem;
        z-index: 1032;
      }
    </style>
	  <!-- /.control-sidebar -->
	  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
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


	<!-- Ekko Lightbox -->
	<script src="<?= base_url('public/admin_asset'); ?>/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

	<script src="<?= base_url('public/admin_asset'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>



<!-- <script src="<?= base_url('public/admin_asset'); ?>/fancybox/jquery.fancybox-1.3.4.js" referrerpolicy="origin"></script> -->

<script src="<?= base_url('public/admin_asset'); ?>/tinymce_5/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

	<script>
	  $(function () {
	    $("#example1").DataTable({
	      "responsive": true, "lengthChange": false, "autoWidth": false,
	      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],"pageLength": 25,
        "lengthMenu": [40, 50, 75, 100, 200]
	    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
	      "responsive": true,
	      "pageLength": 40,
	    });
	  });

	  
	</script>
	<!-- Trong phần config đổi lại base_url và dòng 1154 trong dialog.php -->
	<script>

    var editor_config = {
      path_absolute : "<?= base_url('/'); ?>/",
      selector: 'textarea#content',
      height: 500,
      relative_urls: false,
      remove_script_host: false,

      oninit : "setPlainText",

      plugins: 'print preview importcss searchreplace autolink autosave save directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons template paste responsivefilemanager file-manager2',
      fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 24px 28px 32px 36px 48px 72px',
      
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
		  automatic_uploads: true,
		  image_advtab: true ,

   
			external_filemanager_path:"<?= base_url('public/admin_asset/responsive_filemanager'); ?>/filemanager/",
			filemanager_title:"Quản Lý Ảnh & File" ,

			external_plugins: {
				"responsivefilemanager": "<?= base_url('public/admin_asset'); ?>/tinymce_5/js/tinymce/plugins/responsivefilemanager/plugin.min.js",
				"filemanager": "<?= base_url('public/admin_asset/responsive_filemanager'); ?>/filemanager/plugin.min.js",
			},
			filemanager_access_key:"tranhuuphu",
      content_style: ".mce-content-body {font-size:18px;font-family: arial;}",
      contextmenu_never_use_native: true,
    };

    tinymce.init(editor_config);

   function attachOnClickListenerToButton(Flmngr) {
		    let elBtn = document.getElementById("btn");
		    // Style button as ready to be pressed
		    elBtn.style.opacity = 1;
		    elBtn.style.cursor = "pointer";
		    let elLoading = document.getElementById("loading");
		    elLoading.parentElement.removeChild(elLoading);
		    // Add a listener for selecting files
		    elBtn.addEventListener("click", () => {
		        selectFiles(Flmngr);
		    });
		}
		function selectFiles(Flmngr) {
		    // Collect URLs of images of existing gallery set
		    let elsExistingImages = document.querySelectorAll("#images img");
		    let urls = [];
		    for (let i = 0; i < elsExistingImages.length; i++)
		        urls.push(elsExistingImages.item(i).src);
		    Flmngr.open({
		        list: urls,
		        isMultiple: true,
		        acceptExtensions: ["png", "jpeg", "jpg", "webp", "gif"],
		        onFinish: (files) => {
		            showSelectedImages(Flmngr, files);
		        }
		    });
		}
		function showSelectedImages(Flmngr, files) {
		    let elImages = document.getElementById("images");
		    elImages.innerHTML = "";
		    /*let elP =  document.createElement("p");
		    elP.textContent = files.length + " images selected";
		    elImages.appendChild(elP);*/
		    for (let file of files) {
		        let urlOriginal = Flmngr.getNoCacheUrl(file.url);
		        let el = document.createElement("div");
		        el.className = "image";
		        elImages.appendChild(el);
		        let elDiv = document.createElement("div");
		        el.appendChild(elDiv);
		        let elImg = document.createElement("img");
		        elImg.src = urlOriginal;
		        elImg.alt = "Image selected in Flmngr";
		        elDiv.appendChild(elImg);
		        let elP = document.createElement("p");
		        elP.textContent = file.url;
		        el.appendChild(elP);
		    }
		} 




  </script>

  <script>
		$('[name=taginput]').tagify();


		$('.iframe-btn').fancybox({	
			'width'		: 300,
			'height'	: 200,
			'type'		: 'iframe',
      'autoScale'   : false,
    });

    // function responsive_filemanager_callback(field_id){
		// 	var url=jQuery('#'+field_id).val();
		// 	$(".image-prview").attr('src', '<?= base_url('public/upload/tinymce/') ?>/'+url);
		
		// }

		function responsive_filemanager_callback(field_id){
      var url=jQuery('#'+field_id).val();
      // $(".image-prview").attr('src', '<?= base_url('public/upload/tinymce/') ?>/'+url);
      var array = url.replace('[', '');
      var array2 = array.replace(']', '');
      var array3 = array2.replace(/"/g, '');
      var arr = array3.split(',');
      // alert(arr.length);
      if(arr != null){
      	let e = document.getElementById("images2");
	      e.innerHTML = "";
      }
	      
      for (var i = 0; i < arr.length; i++) {
        
        const para = document.createElement("div");
        para.innerHTML = "<img class='image-prview img-thumbnail rounded' src='" + "<?= base_url('public/upload/tinymce/') ?>/" + arr[i] + "'style='width: 100%; margin-top: 15px;'>";
        // Append to another element:
        document.getElementById("images2").appendChild(para);
      }
    }

		

	</script>
	<script type="text/javascript">
		function convertToSlug( str ) {
			var from = "ăàáäâèéẽẹẻëêìíïîòóỏõọöôùúüûủũụưứừữửựñçảãạấầẩẫậắằẳẵặếểễệềỉĩịốỗồỗộớờỡởợơđ·/_,:;";
		  var to   = "aaaaaeeeeeeeiiiiooooooouuuuuuuuuuuuuncaaaaaaaaaaaaaeeeeeiiioooooooooood------";
		  for (var i=0, l=from.length ; i<l ; i++) {
		    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i)).toLowerCase();
		  }
		    
			  //replace all special characters | symbols with a space
			  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
			           .toLowerCase();
			    
			  // trim spaces at start and end of string
			  str = str.replace(/^\s+|\s+$/gm,'');
			    
			  // replace space with dash/hyphen
			  str = str.replace(/\s+/g, '-');   
			  document.getElementById("slug-text").innerHTML = str;

			  var input = document.getElementById('slug-text2');
        input.value = input.value +str;
			  //return str;
			}
	</script>
	
<script type="text/javascript">
  $(document).ready(function () {
      $('#buttons input[type=button]').on('click', function () {
          var qty = $(this).data('value');

          $('#value').val(qty);

      });

  });
</script>


	<?= $this->renderSection('script'); ?>

</body>
</html>
