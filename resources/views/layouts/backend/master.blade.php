
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admintres I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/backend/favicon.ico')}}">
	<link rel="icon" href="{{asset('assets/backend/favicon.ico')}}" type="image/x-icon">
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- Bootstrap Colorpicker CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- select2 CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- switchery CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- bootstrap-select CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- bootstrap-tagsinput CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- bootstrap-touchspin CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- multi-select CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- Bootstrap Switches CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- Bootstrap Datetimepicker CSS -->
	<link href="{{asset('assets/backend/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>		
	<!-- Custom CSS -->
	<link href="{{asset('assets/backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	
	@stack('css')
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
  <div class="wrapper theme-2-active navbar-top-light">
		<!-- Top Menu Items -->
		@include('layouts.includes.backend.topmenu')
		<!-- /Top Menu Items -->

			<!-- Left Sidebar Menu -->
			@include('layouts.includes.backend.left_sidebar')
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Menu -->
			@include('layouts.includes.backend.right_sidebar')
			<!-- /Right Sidebar Menu -->	
       
		<!-- Main Content -->
		<div class="page-wrapper">
      <div class="container">				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">blank page</h5>
					</div>
					<!-- Breadcrumb -->
				@include('layouts.includes.backend.breadcrumb')
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->		

			<!-- Main Content -->	
				<div class="row">
					@yield('main-content')
				</div>
			<!-- Main Content -->	
				<!-- Footer -->
				@include('layouts.includes.backend.footer')
				<!-- /Footer -->
			</div>
		</div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->	

		
		<!-- jQuery -->
		<script src="{{asset('assets/backend/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>		
		<!-- Moment JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/moment/min/moment-with-locales.min.js')}}"></script>		
		<!-- Bootstrap Colorpicker JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
		<!-- Switchery JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>		
		<!-- Select2 JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>	
		<!-- Bootstrap Select JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
		<!-- Bootstrap Tagsinput JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>		
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>		
		<!-- Multiselect JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>		 
		<!-- Bootstrap Switch JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}"></script>
		<!-- Bootstrap Datetimepicker JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>		
		<!-- Form Advance Init JavaScript -->
		<script src="{{asset('assets/backend/dist/js/form-advance-data.js')}}"></script>		
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('assets/backend/dist/js/jquery.slimscroll.js')}}"></script>	
		<!-- Fancy Dropdown JS -->
		<script src="{{asset('assets/backend/dist/js/dropdown-bootstrap-extended.js')}}"></script>		
		<!-- Owl JavaScript -->
		<script src="{{asset('assets/backend/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>	
		<!-- Init JavaScript -->
		<script src="{{asset('assets/backend/dist/js/init.js')}}"></script>
	@stack('js')
	
</body>

</html>
