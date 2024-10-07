@extends('index')

@section('breadcrumb')
Liên hệ
@endsection

@section('layout')

<section class="ls ms two_color">
	<div class="container">
		<div class="row c-gutter-100">
			<div class="col-lg-6">
				<div class="divider-50 divider-md-70 divider-xl-120"></div>
				<h6 class="special-heading">
					<span class="above">Liện hệ với Yanta</span>
				</h6>
				<h3 class="special-heading fw-300">
					<span class="text-transform-uppercase"><strong>Địa chỉ</strong></span>
				</h3>
				<div class="divider-55"></div>
				<div class="divider-20 divider-md-30"></div>
				<div class="row c-gutter-15">
					<div class="col-sm-12">
						<div class="media vertical-center">
							<div class="icon-styled bg-maincolor round fs-36">
								<i class="ico icon-placeholder" aria-hidden="true"></i>
							</div>
							<div class="media-body">
								<h6 class="">
									Địa chỉ liên hệ
								</h6>
								<p>
									Số 114, Ngõ 389 Đường Trương Định, Phường Tân Mai, Quận Hoàng Mai, Tp. Hà Nội
								</p>
							</div>
						</div>
						<div class="divider-40"></div>
						<div class="media vertical-center">
							<div class="icon-styled bg-maincolor round fs-36">
								<i class="ico icon-call" aria-hidden="true"></i>
							</div>
							<div class="media-body">
								<h6 class="">
									Số điện thoại
								</h6>
								<p>
									0967827145
								</p>
							</div>
						</div>
						<div class="divider-40"></div>
						<div class="media vertical-center">
							<div class="icon-styled bg-maincolor round fs-36">
								<i class="ico icon-mail" aria-hidden="true"></i>
							</div>

							<div class="media-body">
								<h6 class="">
									Email
								</h6>
								<p>
									Sale@yanta.vn
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-50 divider-md-70 divider-xl-120"></div>
			</div>
			<div class="divider-40 d-lg-none d-md-block"></div>
			<div class="col-lg-6 ls ms">
				<div class="divider-0 divider-md-0 divider-xl-120"></div>
				<h6 class="special-heading">
					<span class="above">Gởi tin nhắn</span>
				</h6>
				<h3 class="special-heading fw-300">
					<span class="text-transform-uppercase">Gởi tin nhắn tới<strong>Yanta</strong></span>
				</h3>
				<div class="divider-35"></div>

				<form class="contact-form c-mb-20 c-gutter-20" id="emailForm">

					<div class="row">
						<div class="col-12 col-sm-6">
							<div class="form-group has-placeholder">
								<label for="name">Full Name <span class="required">*</span></label>
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Họ Tên">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group has-placeholder">
								<label for="email">Email address<span class="required">*</span></label>
								<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="địa chỉ email">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-sm-6">
							<div class="form-group has-placeholder">
								<label for="company">Company Name<span class="required">*</span></label>
								<input type="text" aria-required="true" size="30" value="" name="company" id="company" class="form-control" placeholder="Tên công ty">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group has-placeholder">
								<label for="subject">Subject<span class="required">*</span></label>
								<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Yều cầu hỗ trợ">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group has-placeholder">
								<label for="message">Message</label>
								<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Nội dung"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group has-placeholder mt-25">
								<button ype="button" onclick="sendEmail()" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Gởi tin
								</button>
							</div>
						</div>
					</div>

				</form>
				<div class="divider-50 divider-md-70 divider-xl-120"></div>

			</div>
			<!--.col-* -->
		</div>
	</div>
</section>

<section class="fullwidth-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="ls ms page_map" data-draggable="true" data-scrollwheel="true">
					<div class="marker">
						<div class="marker-address">sydney, australia, Liverpool street, 66</div>
						<div class="marker-title">First Marker</div>
						<div class="marker-description">
							<ul class="list-unstyled">
								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main">
											<i class="fa fa-map-marker"></i>
										</span>

										<span>
											Sydney, Australia, Liverpool street, 66
										</span>
									</span>
								</li>

								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main">
											<i class="fa fa-phone"></i>
										</span>

										<span>
											1 (800) 123-45-67
										</span>
									</span>
								</li>
								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main">
											<i class="fa fa-envelope"></i>
										</span>

										<span>
											mail@example.com
										</span>
									</span>
								</li>
							</ul>
						</div>

						<img class="marker-icon" src="images/map_marker_icon.png" alt="">
					</div>
					<!-- .marker -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script>
    function sendEmail() {
        var form = document.getElementById('emailForm');
        var formData = new FormData(form);

        fetch('/send-email/post', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            fetchEmails(); // Fetch and render emails after sending a new email
        })
        .catch(error => console.error('Error:', error));
    }
</script>
@endsection