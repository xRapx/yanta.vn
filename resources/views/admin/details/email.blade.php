@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<div class="card card-body">
		<h2>{{$email->recipient}}</h2>
		<p>{{$email->body}}</p>

		<div class="p-3 border-top">
			<div>
				<button id="deleteButton" class="btn bg-danger-subtle text-danger ms-6 px-4">
					Delete
				</button>
			</div>
		</div>
		<form id="deleteForm" method="POST">
			@csrf
			@method('DELETE')
		</form>
	</div>
</div>
@endsection

@section('script')
<script>
	document.getElementById('deleteButton').addEventListener('click', function() {
		var form = document.getElementById('deleteForm');
		form.action = "{{ route('email.destroy', $email->id) }}";
		form.submit();
	});
</script>
@endsection