<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('public/assets/images/favicon-32x32.png')}}" type="image/png"/>
	<!--plugins-->
	<link href="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('public/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('public/assets/css/dark-theme.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/assets/css/semi-dark.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/assets/css/header-colors.css')}}"/>
	<title>{{env('APP_NAME')}} | @yield('title','Page Name')</title>
</head>

<body>
	@yield('content')
</body>
		<!--start header -->
		 
    <!-- end search modal -->

	<!-- Bootstrap JS -->
	<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	
	<script src="{{asset('public/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('public/assets/js/app.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>

	<script >
			@if (Session:: has('success '))
		toastr.success("{{ Session:: get('success') }}");
		@endif
		@if (Session:: has('info '))
		toastr.info("{{ Session:: get('info') }}");
		@endif
		@if (Session:: has('warning '))
		toastr.warning("{{ Session:: get('warning') }}");
		@endif
		@if (Session:: has('error '))
		toastr.error("{{ Session:: get('error') }}");
		@endif  
	</script>
</body>


<!-- Mirrored from codervent.com/syndron/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:55:08 GMT -->
</html>