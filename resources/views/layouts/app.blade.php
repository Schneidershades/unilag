<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title> @yield('title') - Unilag Vendor Portal</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
        <link href="assets/css/plugins/lobibox.min.css" rel="stylesheet">
		
    </head>
	
    <body>
		<!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            @yield('content')
            
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/smoothproducts.js"></script>
		<script src="assets/js/snackbar.min.js"></script>
		<script src="assets/js/jQuery.style.switcher.js"></script>
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/lobibox.min.js"></script>
		<script src="assets/js/notifications.min.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		
		<script type="text/javascript">
			$(document).ready(function() {
				@if(Session::has('success'))
					function info_noti(){
						Lobibox.notify('success', {
							pauseDelayOnHover: true,
							continueDelayOnInactiveTab: false,
							size: 'mini',
							position: 'top right',
							icon: 'fa fa-info-circle',
							msg: '{{ Session::get("success") }}'
						});
					} 
				@endif

				@if(Session::has('info'))
					function info_noti(){
						Lobibox.notify('info', {
							pauseDelayOnHover: true,
							continueDelayOnInactiveTab: false,
							size: 'mini',
							position: 'top right',
							icon: 'fa fa-info-circle',
							msg: '{{ Session::get("info") }}'
						});
					} 
				@endif

				@if(Session::has('danger'))
					function info_noti(){
						Lobibox.notify('danger', {
							pauseDelayOnHover: true,
							continueDelayOnInactiveTab: false,
							size: 'mini',
							position: 'top right',
							icon: 'fa fa-info-circle',
							msg: '{{ Session::get("danger") }}'
						});
					} 
				@endif
        	});
		</script>

	</body>

</html>