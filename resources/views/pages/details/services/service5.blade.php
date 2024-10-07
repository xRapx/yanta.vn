@extends('index')

@section('breadcrumb')
Dịch vụ kênh thuê riêng
@endsection

@section('layout')

<section class="ls single single-fw-services s-py-60 s-py-md-80 s-py-xl-50 c-gutter-30">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<article class="fw-services type-fw-services box-shadow">
					<div class="item-content entry-content">
						<div>
							<img src="{{asset('images/service/service_img_1.png')}}" alt="">
							<p>Kênh thuê riêng là dịch vụ cung cấp kết nối vật lý dành riêng cho khách hàng để truyền thông tin giữa các điểm cố định trong nước với tốc độ cao và bảo mật tuyệt đối. Dịch vụ Kênh thuê riêng áp dụng trong Peering với các ISP, truyền hình trực tiếp, Scada, hệ thống cơ yếu,...</p>
							@foreach($services_5 as $service )
								<h6 style="margin-top: 0px;">{{$service->title}}</h6>
								<img src="{{asset('images/service/service_img_2.png')}}" alt="">
								<p>{{$service->description}}</p>
								<b>Chi tiết giải pháp</b>
								<br />
								<ul>
									<li>{{$service->new_column1}}</li>
									<li>{{$service->new_column2}}</li>
									<li>{{$service->new_column3}}</li>
									<li>{{$service->new_column4}}</li>
									<li>{{$service->new_column5}}</li>
									<li>{{$service->new_column6}}</li>
								</ul>
							@endforeach

						</div>
					</div>

				</article>

			</div><!-- .col-* -->

		</div>

	</div>
</section>
@endsection