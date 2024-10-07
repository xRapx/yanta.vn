@extends('admin.admin')

@section('content')
<div class="container-fluid">
    <div class="card w-100">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <h4 class="card-title mb-0">User Info</h4>        
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name :</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone :</label>
                            <input class="form-control" type="text" id="phone" name="phone" value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="role" class="form-label">Role :</label>
                            <input class="form-control" type="text" id="role" name="role" value="{{ $user->role }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="active" class="form-label">Active</label>
                            <input class="form-control" type="text" id="active" name="active" value="{{ $user->active }}">
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
        form.action = "{{ route('user.destroy', $user->id) }}";
        form.submit();
    });
</script>
@endsection