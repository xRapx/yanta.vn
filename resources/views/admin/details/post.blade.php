@extends('admin.admin')

@section('content')
<div class="container-fluid">
    <div class="card w-100">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <h4 class="card-title mb-0">Post Info</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input class="form-control" type="text" id="title" name="title" value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="tag" class="form-label">Tag :</label>
                                <input class="form-control" type="text" id="tag" name="tag" value="{{ $post->tag }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="content" class="form-label">Content :</label>
                            <textarea class="form-control" rows="3" placeholder="{{ $post->content }}"></textarea>
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
        form.action = "{{ route('posts.destroy', $post->id) }}";
        form.submit();
    });
</script>
@endsection