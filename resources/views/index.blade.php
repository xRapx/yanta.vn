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


	<script src="js/vendor/modernizr-custom.js"></script>

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


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="register_modal">
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
	</div>


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="login_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_login_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="/">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign In</span> / Sign Up</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signname">Full Name <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="signname" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group has-placeholder">
									<label for="signpassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signpassword" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" id="contact_signinform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
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

			<div>@yield('content')</div>

			<!-- template sections -->

			<!--topline section visible only on small screens|-->


			<div class="header_absolute header_under_slider ds">

				<!--eof topline-->

				<!-- header with logo in center of navigation (centered with scripts) - three Bootstrap columns - left includes, navigation and right includes-->
				<header class="page_header ds bs c-my-15 c-my-xl-0">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-6 text-left">
								<a href="./" class="logo">
									<img src="{{asset('images/logo.png')}}" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-1 text-sm-right text-center">
								<!-- main nav start -->
								<nav class="top-nav d-flex justify-content-center">
									<ul class="nav sf-menu">
										<li class="active">
											<a href="index.html">Trang Chủ</a>
										</li>

										<li>
											<a href="about.html">Giới Thiệu</a>
										</li>

										<li>
											<a href="services.html">Dịch Vụ</a>
											<ul>
												<li>
													<a href="service-single-1.html">Dịch vụ kênh truyền</a>
												</li>
												<li>
													<a href="service-single-2.html">Dịch vụ máy chủ đám mây</a>
												</li>
												<li>
													<a href="service-single-3.html">Dịch vụ quảng cáo</a>
												</li>
												<li>
													<a href="service-single-4.html">Dịch vụ data Sponsor</a>
												</li>
												<li>
													<a href="service-single-5.html">Giải pháp Camera giám sát</a>
												</li>
												<li>
													<a href="service-single-6.html">Giải pháp giao thông thông minh</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="blog-grid.html">Blog</a>
										</li>

										<li>
											<a href="contact4.html">Liên Hệ</a>
										</li>
									</ul>


								</nav>
							</div>
							<div class="col-xl-2 col-5 text-sm-right text-center">
								<!-- eof main nav -->
								<ul class="row g-1 list-unstyled w-full">
									<!-- check Admin -->
									@if(auth()->check())
										@if(auth()->user()->is_admin)
										<li class="col">
											<p>{{ auth()->user()->name }}!</p>
											<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
												@csrf
											</form>
											
										</li>
										@else
										<li class="col">										
											<p>{{ auth()->user()->name }}!</p>										
											<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
												@csrf
											</form>
											
										</li>
									@endif
										<li class="col">
											<button id="logout-button" class="btn-primary btn-sm">Logout</button>
										</li>
									<!-- End check admin-->
									@else
									<li class="col">
										<button class="btn-primary btn-sm"><a href="/login" class="text-decoration-none text-white">Login</a></button>
									</li>
									<li class="col">
										<button class="btn-primary btn-sm"><a href="/register" class="text-decoration-none text-white">Sign Up</a></button>
									</li>
									@endif
									<li >
										<a href="#" class="btn btn-outline-secondary p-0 border-0">
											<img src="{{asset('images/vietnam_flag.png')}}" width="40px" class="img-fluid d-block" />
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

				<!--eof topline-->

			</div>


			<section class="page_slider">
				<div class="flexslider">
					<ul class="slides">
						<li class="ds cover-image flex-slide">
							<img src="{{asset('images/slider/slide1.jpg')}}" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h6 class="special-heading">
														<span class="above">01. Dịch vụ kênh truyền</span>
													</h6>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span>Our Goal Is </span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span><strong>Your Success</strong></span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<p>Working alongside clients on their critical challenges often results in new industry perspectives.</p>
												</div>

												<div class="intro_layer" data-animation="fadeInRight">
													<a class="btn btn-maincolor" href="contact4.html">Request A Quote</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ds cover-image flex-slide">
							<img src="{{asset('images/slider/slide2.jpg')}}" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h6 class="special-heading">
														<span class="above">02. Dịch vụ máy chủ đám mây</span>
													</h6>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span>Our Goal Is </span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span><strong>Your Success</strong></span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<p>Working alongside clients on their critical challenges often results in new industry perspectives.</p>
												</div>

												<div class="intro_layer" data-animation="fadeInRight">
													<a class="btn btn-maincolor" href="contact4.html">Request A Quote</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ds cover-image flex-slide">
							<img src="{{asset('images/slider/slide3.jpg')}}" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h6 class="special-heading">
														<span class="above">03. Dịch vụ quảng cáo</span>
													</h6>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span>Our Goal Is </span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span><strong>Your Success</strong></span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<p>Working alongside clients on their critical challenges often results in new industry perspectives.</p>
												</div>

												<div class="intro_layer" data-animation="fadeInRight">
													<a class="btn btn-maincolor" href="contact4.html">Request A Quote</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ds cover-image flex-slide">
							<img src="{{asset('images/slider/slide4.jpg')}}" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h6 class="special-heading">
														<span class="above">04. Dịch vụ data Sponsor</span>
													</h6>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span>Our Goal Is </span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span><strong>Your Success</strong></span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<p>Working alongside clients on their critical challenges often results in new industry perspectives.</p>
												</div>

												<div class="intro_layer" data-animation="fadeInRight">
													<a class="btn btn-maincolor" href="contact4.html">Request A Quote</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ds cover-image flex-slide">
							<img src="{{asset('images/slider/slide4.jpg')}}" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h6 class="special-heading">
														<span class="above">05. Giải pháp Camera giám sát</span>
													</h6>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span>Our Goal Is </span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading">
														<span><strong>Your Success</strong></span>
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<p>Working alongside clients on their critical challenges often results in new industry perspectives.</p>
												</div>

												<div class="intro_layer" data-animation="fadeInRight">
													<a class="btn btn-maincolor" href="contact4.html">Request A Quote</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
					</ul>
				</div> <!-- eof flexslider -->
			</section>

			<section class="margin-minus d-none d-xl-block">
				<div class="container">
					<div class="row c-gutter-20 row-cols-sm-5">
						<div class="col-12 col-sm color-light">
							<h6 class="special-heading">
								<span class="above">01. Dịch vụ kênh truyền</span>
							</h6>
							<p class="fs-12"><i class="ico icon-add"></i></p>
						</div>
						<div class="col-12 col-sm color-light">
							<h6 class="special-heading">
								<span class="above">02. Dịch vụ máy chủ đám mây</span>
							</h6>
							<p class="fs-12"><i class="ico icon-add"></i></p>
						</div>
						<div class="col-12 col-sm color-light">
							<h6 class="special-heading">
								<span class="above">03. Dịch vụ quảng cáo</span>
							</h6>
							<p class="fs-12"><i class="ico icon-add"></i></p>
						</div>
						<div class="col-12 col-sm color-light">
							<h6 class="special-heading">
								<span class="above">04. Dịch vụ data Sponsor</span>
							</h6>
							<p class="fs-12"><i class="ico icon-add"></i></p>
						</div>
						<div class="col-12 col-sm color-light">
							<h6 class="special-heading">
								<span class="above">05. Giải pháp Camera giám sát</span>
							</h6>
							<p class="fs-12"><i class="ico icon-add"></i></p>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pt-md-70 s-pt-xl-150 s-pb-60 s-pb-md-80 s-pb-xl-150">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h6 class="special-heading text-center">
								<span class="above">how we do it</span>
							</h6>
							<h3 class="special-heading text-center fw-300">
								<span class="text-transform-uppercase">Our <strong>process</strong></span>
							</h3>
							<div class="divider-25"></div>
							<h6 class="special-heading w-50 text-center">
								<span class="after">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</span>
							</h6>
						</div>
					</div>
					<div class="divider-25"></div>
					<div class="row">
						<div class="fw-theme-steps style2">
							<div class="fw-theme-steps-wrap">
								<div class="vertical-item">
									<div class="item-img">
										<img src="{{asset('images/service/steps_3_1.png')}}" class="attachment-dotdigital-square size-dotdigital-square" alt="">
									</div>
									<div class="item-dot"><span></span></div>
									<h6 class="item-title">Strategy</h6>
									<p class="item-text">Tailored solutions that deliver results and achieve sustained growth.</p>
								</div>
								<div class="vertical-item">
									<div class="item-img">
										<img src="{{asset('images/service/steps_3_2.png')}}" class="attachment-dotdigital-square size-dotdigital-square" alt="">
									</div>
									<div class="item-dot"><span></span></div>
									<h6 class="item-title">Organization</h6>
									<p class="item-text">Aligned and set up to successfully deliver on the company's objectives</p>
								</div>
								<div class="vertical-item">
									<div class="item-img">
										<img src="{{asset('images/service/steps_3_3.png')}}" class="attachment-dotdigital-square size-dotdigital-square" alt="">
									</div>
									<div class="item-dot"><span></span></div>
									<h6 class="item-title">Management</h6>
									<p class="item-text">Predicting, measuring and managing risk associated with management</p>
								</div>
								<div class="vertical-item">
									<div class="item-img">
										<img src="{{asset('images/service/steps_3_4.png')}}" class="attachment-dotdigital-square size-dotdigital-square" alt="">
									</div>
									<div class="item-dot"><span></span></div>
									<h6 class="item-title">Support</h6>
									<p class="item-text">Helping with their organization of the most critical issues</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="divider-20"></div>
						<div class="col-sm-12 text-center">
							<a href="#" class="btn btn-outline-secondary">Load More</a>
						</div>
					</div>
				</div>
			</section>

			<section id="about-page" class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls ms">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h6 class="special-heading">
								<span class="above">about us </span>
							</h6>
							<h3 class="special-heading fw-300">
								<span class="text-transform-uppercase">who <strong>we are</strong></span>
							</h3>
							<div class="divider-25"></div>
							<h6 class="special-heading">
								<span class="after">Working alongside clients on their most critical challenges often results in new industry perspectives and insights</span>
							</h6>
							<div class="divider-25"></div>
							<p class="">
								We are one of the world's leading management consulting firms, where bold thinking, inspired people and a passion for results come together for extraordinary impact.
							</p>
							<div class="divider-25"></div>
							<p class="before-separate text-uppercase mb-0 fw-500">
								Call Us Now
							</p>
							<div class="divider-5"></div>
							<h2 class="special-heading fw-700">
								<span class="text-transform-uppercase color-main">800 123 4567</span>
							</h2>
							<div class="divider-5"></div>
							<p class="text-uppercase fw-500 mb-0">
								or request a call
							</p>
							<div class="divider-30"></div>
							<div class="widget widget_mailchimp">
								<form class="signup" action="/">
									<input name="email" type="email" class="form-control mailchimp_email" placeholder="Email Address">
									<button type="submit" class="search-submit">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</button>
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="s-pt-60 s-py-md-70 s-pt-lg-141 s-pb-60 s-py-md-80 s-pb-lg-150">

				<div class="cover-image s-cover-left"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<img src="{{asset('images/counter-bg.jpg')}}" alt="">
						</div>
						<div class="col-12 col-lg-6 content-left-padding">
							<div class="divider-50 divider-md-80 d-lg-none"></div>
							<h6 class="special-heading text-left">
								<span class="above">company stats</span>
							</h6>
							<h3 class="special-heading text-left fw-300">
								<span class="text-transform-uppercase">how <strong>we work</strong></span>
							</h3>
							<div class="divider-25"></div>
							<div class="text-block text-center text-sm-left">
								<p>We are one of the world's leading management consulting firms, where bold thinking, inspired people and a passion for results come together for extraordinary impact. </p>
							</div>
							<div class="divider-50"></div>
							<div class="shortcode-simple-counter ">
								<div class="counter_wrap">
									<div class="counter_icon color-main">
										<img src="{{asset('images/counter1.png')}}" alt="">
									</div>
									<h2 class="counter counter-size" data-from="0" data-to="1354" data-speed="1000">0</h2>
									<h6 class="counter-text">
										<span class="counter-add">Projects Completed</span>
									</h6>
								</div>

								<div class="counter_wrap">
									<div class="counter_icon color-main">
										<img src="{{asset('images/counter2.png')}}" alt="">
									</div>
									<h2 class="counter counter-size" data-from="0" data-to="846" data-speed="1000">0</h2>
									<h6 class="counter-text">
										<span class="counter-add">Happy Clients</span>
									</h6>
								</div>
							</div>
							<div class="divider-30"></div>
							<div class="shortcode-simple-counter ">
								<div class="divider-10 d-md-none"></div>
								<div class="counter_wrap">
									<div class="counter_icon color-main">
										<img src="{{asset('images/counter3.png')}}" alt="">
									</div>
									<h2 class="counter counter-size" data-from="0" data-to="37" data-speed="1000">0</h2>
									<h6 class="counter-text">
										<span class="counter-add">Awards earned</span>
									</h6>
								</div>
								<div class="counter_wrap">
									<div class="counter_icon color-main">
										<img src="{{asset('images/counter4.png')}}" alt="">
									</div>
									<h2 class="counter counter-size" data-from="0" data-to="24" data-speed="1000">0</h2>
									<h6 class="counter-text">
										<span class="counter-add">Years Experience</span>
									</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_corner_body"></div>
			</section>


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
										<a href="about.html">Giới thiệu</a>
									</li>
									<li>
										<a href="#">Chính sách</a>
									</li>
									<li>
										<a href="blog-grid.html">Blog</a>
									</li>
									<li>
										<a href="contact4.html">Liên hệ</a>
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
										<a href="service-single-1.html">Dịch vụ kênh truyền</a>
									</li>
									<li>
										<a href="service-single-2.html">Dịch vụ máy chủ đám mây</a>
									</li>
									<li>
										<a href="service-single-3.html">Dịch vụ quảng cáo</a>
									</li>
									<li>
										<a href="service-single-4.html">Dịch vụ data Sponsor</a>
									</li>
									<li>
										<a href="service-single-5.html">Giải pháp Camera giám sát</a>
									</li>
									<li>
										<a href="service-single-6.html">Giải pháp giao thông thông minh</a>
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
	<script>
		document.getElementById('logout-button').addEventListener('click', function() {
   		document.getElementById('logout-form').submit();
		});
	</script>

</body>

</html>