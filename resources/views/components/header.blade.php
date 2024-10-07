<header class="page_header ds bs c-my-15 c-my-xl-0">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-xl-2 col-6 text-left">
				<a href="{{route('homepage')}}" class="logo">
					<img src="{{asset('images/logo.png')}}" alt="">
				</a>
			</div>
			<div class="col-xl-8 col-1 text-sm-right text-center">
				<!-- main nav start -->
				<nav class="top-nav d-flex justify-content-center">
					<ul class="nav sf-menu">
						<li class="{{request()->is('/') ? 'active' : ''}}">
							<a href="{{route('homepage')}}">Trang Chủ</a>
						</li>

						<li class="{{request()->is('about') ? 'active' : ''}}">
							<a href="{{route('about')}}">Giới Thiệu</a>
						</li>

						<li class="{{request()->is('service') ? 'active' : ''}}">
							<a href="{{route('service')}}">Dịch Vụ</a>
							<ul>							
								<li><a href="{{ route('service1.index')}}">Dịch vụ truyền thông</a></li>							
								<li><a href="{{ route('service2.index')}}">Dịch vụ máy chủ đám mây</a></li>							
								<li><a href="{{ route('service3.index')}}">Dịch vụ quảng cáo</a></li>							
								<li><a href="{{ route('service4.index')}}">Dịch vụ Data Sponsor</a></li>							
								<li><a href="{{ route('service5.index')}}">Giải pháp camera giám sát</a></li>							
								<li><a href="{{ route('service6.index')}}">Giải pháp giao thông thông minh</a></li>							
							</ul>
						</li>

						<li class="{{request()->is('blog') ? 'active' : ''}}">
							<a href="{{route('blog')}}">Blog</a>
						</li>

						<li class="{{request()->is('contact') ? 'active' : ''}}">
							<a href="{{route('contact')}}">Liên Hệ</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-xl-2 col-5 text-sm-right text-center">
				<!-- eof main nav -->
				<ul class="row g-1 list-unstyled w-full">
					<li>
						<a href="{{url('/send-email')}}" class="btn btn-outline-secondary p-0 border-0">
							Contact Email
						</a>
					</li>
					</li>
					<li>
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