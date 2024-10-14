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
							<ul id="table">
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

@section('script')
<script>
	var table = document.getElementById('table');
	table.innerHTML = '';
	fetch("{{ route('apiService') }}", {
			method: 'GET',
			headers: {
				'X-Requested-With': 'XMLHttpRequest',
				'Content-Type': 'application/json',
			},
		})
		.then(res => res.json())
		.then(data => {
			console.log(data);
			data.forEach(service => {
				table.innerHTML += `
                <li>
                    <a href="{{ route('service.details', '') }}/${service.id}">${service.title}</a>
                </li>
            `;
			});
		})
		.catch(error => console.error('Error:', error));
</script>
@endsection