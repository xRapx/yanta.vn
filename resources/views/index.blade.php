<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Yanta.vn</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('css/regular.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/brands.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/solid.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
	<link rel="stylesheet" href="{{asset('css/shop.css')}}" class="color-switcher-link">


	<script src="{{asset('js/vendor/modernizr-custom.js')}}"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->


	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>


	<!-- <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="register_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_register_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form sign-in c-mb-10 c-gutter-10" method="" action="/">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign Up</span> / Sign In</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signupname">Full Name <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="signupname" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group has-placeholder">
									<label for="signuppassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
								</div>
								<div class="form-group has-placeholder">
									<label for="signupemail">Email<span class="required">*</span></label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email">
								</div>
								<div>
									<input type="checkbox" class="checkbox" id="signupcheckbox" />
									<label for="signupcheckbox">I agree with all the text in the agreement</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" id="contact_signupform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
								</div>
							</div>
							<a class="phone_modal_button register_modal close-modal" data-dismiss="modal" aria-label="Close" href="#sign_in_modal"><span aria-hidden="true">I am already Member</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right">
					<img src="{{asset('images/sing-in-modal.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div> -->


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="login_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_login_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form c-mb-10 c-gutter-10" method="POST" action="{{route('login')}}">
						@csrf
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign In</span> / Sign Up</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signupemail">Email <span class="required">*</span></label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email...">
								</div>

								<div class="form-group has-placeholder">
									<label for="signuppassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
								<button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <span class="">
                                    <a href="{{route('register.index')}}">Register</a>
                                </span>
								</div>
							</div>
							<a class="register_modal close-modal" data-dismiss="modal" aria-label="Close" href="#register_modal"><span aria-hidden="true">Forgot Password?</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right">
					<img src="{{asset('images/sing-in-modal.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>




	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<section class="page_topline ls ms s-py-5 c-my-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 text-lg-left text-center d-none d-lg-block">
							<p><strong class="color-darkgrey">Welcome to our site! Check our services and gain success!</strong></p>
						</div>
						<div class="col-lg-6 text-lg-right text-center">

							<ul class="top-includes border-divided small-text">

								<li>
									<span>
										<a class="phone_modal_button" href="#sign_in_modal">Login / Sign Up</a>
									</span>
								</li>


								<li>
									<span>
										<a href="#"><i class="fa fa-lock"></i> Register</a>
									</span>
								</li>


							</ul>

						</div>
					</div>
				</div>
			</section>
			
			@if (request()->is('/'))

			<div class="header_absolute header_under_slider ds">
				@include('components.header')
			</div>

			@else
			<section class="header_absolute ds cover-background">
				@include('components.header')

				<!-- thêm 1 components breadcrumb để thay đổi mỗi khi chuyển trang-->
				<x-breadcrumb />
			</section>
			@endif

			@yield('layout')

			<footer class="page_footer ds s-py-30 s-py-md-30">
				<div class="container">
					<div class="row justify-content-between">
						<div class="divider-20 d-none d-xl-block"></div>

						<div class="col-12 col-md-6 col-lg-4 animate" data-animation="fadeInUp">
							<div class="widget widget_text ">

								<img src="{{asset('images/logo.png')}}" width="180px" alt="">

								<div class="divider-15"></div>
								<div class="widget-content-footer">
									<h1>CÔNG TY CỔ PHẦN TRUYỀN THÔNG YANTA</h1>
									<p>Địa chỉ: Số 114, Ngõ 389 Đường Trương Định, Phường Tân Mai - Quận Hoàng Mai - Hà Nội</p>
									<p>MST: 0110626914</p>
									<p>Điện thoại: 0967827145</p>
									<p>Email: admin@yanta.vn</p>
								</div>

							</div>
							<div class="divider-30 divider-lg-0"></div>
						</div>

						<div class="col-12 col-md-6 col-lg-3 animate" data-animation="fadeInUp">
							<div class="widget widget_archive">
								<ul>
									<li>
										<a href="{{ route('about')}}">Giới thiệu</a>
									</li>
									<li>
										<a href="#">Chính sách</a>
									</li>
									<li>
										<a href="{{ route('blog')}}">Blog</a>
									</li>
									<li>
										<a href="{{ route('contact')}}">Liên hệ</a>
									</li>
									<li>
										<a href="#">Khách hàng</a>
									</li>
								</ul>
							</div>

							<div class="divider-30 divider-lg-0"></div>
						</div>

						<div class="col-12 col-md-6 col-lg-3 animate" data-animation="fadeInUp">
							<div class="widget widget_archive">
								<ul>
									<li>
										<a href="{{route('service1.index')}}">Dịch vụ kênh truyền</a>
									</li>
									<li>
										<a href="{{ route('service2.index')}}">Dịch vụ máy chủ đám mây</a>
									</li>
									<li>
										<a href="{{ route('service3.index')}}">Dịch vụ quảng cáo</a>
									</li>
									<li>
										<a href="{{ route('service4.index')}}">Dịch vụ data Sponsor</a>
									</li>
									<li>
										<a href="{{ route('service5.index')}}">Giải pháp Camera giám sát</a>
									</li>
									<li>
										<a href="{{ route('service6.index')}}">Giải pháp giao thông thông minh</a>
									</li>
								</ul>
							</div>

							<div class="divider-30 divider-md-0"></div>
						</div>
					</div>
				</div>
			</footer>
			<section class="page_copyright ds s-py-15">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12">
							<p class="text-center"><span class="copyright_year">&copy;</span> Copyright Yanta</p>
						</div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->

	<script src="{{asset('js/compressed.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<!-- <script>
		document.getElementById('logout-button').addEventListener('click', function() {
			document.getElementById('logout-form').submit();
		});
	</script> -->

</body>

</html>