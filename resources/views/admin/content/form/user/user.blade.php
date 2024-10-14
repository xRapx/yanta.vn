@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<div class="card w-100">
		<form method="POST" action="{{route('user.store')}}">
			@csrf
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<label for="name">Name:</label>
					    <input type="text" name="name" placeholder="Name...">
					</div>
				</div>
				<div class="col-12">
					<div class="mb-3">
					<label for="email">Email:</label>
					<input type="email" name="email" placeholder="Email....">
					</div>
				</div>
				<div class="col-12">
					<div class="mb-3">
						<label for="phone">Phone:</label>
						<input type="text" name="phone" placeholder="Phone..." >
					</div>
				</div>
				<div class="col-12">
					<div class="mb-3">
						<label for="status">Status:</label>
						<input type="checkbox" name="status">
					</div>
				</div>
			</div>
		    <button type="submit" >Send Email</button>
		</form>
	</div>
</div>
@endsection