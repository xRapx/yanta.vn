@extends('admin.admin')

@section('content')
<div class="container-fluid">
    <div class="card w-100">
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <h4 class="card-title mb-0">Service Info</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input class="form-control" type="text" id="title" name="title" value="{{ $service->title }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="tag" class="form-label">Quantity :</label>
                                <input class="form-control" type="text" id="tag" name="tag" value="{{ $service->quantity }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="content" class="form-label">Status :</label>
                            <textarea class="form-control" rows="3" placeholder="{{ $service->status }}"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- action -->
            <div class="p-3 border-top">
                <div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        <button id="deleteButton" class="btn bg-danger-subtle text-danger ms-6 px-4">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <form id="deleteForm" style="display:none;" method="POST">
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
        form.action = "{{ route('services.destroy', $service->id) }}";
        form.submit();
    });
</script>
@endsection