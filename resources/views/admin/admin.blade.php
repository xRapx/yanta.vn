<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}">

	<!-- Core Css -->
	<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
	<!-- Database.com -->
	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />

	<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



	<title>Admin Dashboard</title>
</head>

<body>
	<div class="toast toast-onload align-items-center text-bg-secondary border-0" role="alert" aria-live="assertive" aria-atomic="true">
		<div class="toast-body hstack align-items-start gap-6">
			<i class="ti ti-alert-circle fs-6"></i>
			<div>
				<h5 class="text-white fs-3 mb-1">Dashboard</h5>

			</div>
			<button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
	</div>
	<!-- Preloader -->
	<div class="preloader">
		<img src="{{asset('assets/images/logos/logo-icon.svg') }}" alt="loader" class="lds-ripple img-fluid">
	</div>

	<div id="main-wrapper">
		@include('admin.components.sidebar')
		<div class="page-wrapper">
			@include('admin.components.header')
			<div class="body-wrapper">
				@yield('content')
				@yield('scripts')
			</div>
		</div>
	</div>


	<!-- Import Js Files -->
	<!-- <script src="{{ asset('assets/js/breadcrumb/breadcrumbChart.js') }}"></script> -->
	<!-- <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script> -->
	<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
	<script src="{{ asset('assets/js/theme/app.init.js')}}"></script>
	<script src="{{ asset('assets/js/theme/theme.js') }}"></script>
	<script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
	<script src="{{ asset('assets/js/theme/feather.min.js') }}"></script>

	<!-- solar icons -->
	<!-- <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script> -->
	<!-- <script src="{{ asset('assets/js/dashboards/dashboard1.js') }}"></script> -->
</body>

</html>