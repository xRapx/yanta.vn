@extends('admin.admin')

@section('content')
<div class="container-fluid">
  <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
    <div class="card-body px-0">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-medium fs-14 mb-0">Post</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="">Home
                </a>
              </li>
              <li class="breadcrumb-item text-muted" aria-current="page">Post</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="widget-content searchable-container list">
  <div class="card card-body">
      <div class="d-flex justify-content-between">
        <div class="w-50">
          <form class="position-relative">
            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search Post...">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
        </div>
        <button class="btn btn-primary  d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
          <a href="{{route('gallery.create')}}" class="text-white">Add Post</a>
        </button>
      </div>
    </div>
    <div class="card card-body">
      <div class="table-responsive">
        <table class="table table-striped w-100 table-bordered text-inputs-searching text-nowrap">
          <thead>
            <!-- start row -->
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Tag</th>
              <th>Action</th>
            </tr>
            <!-- end row -->
          </thead>
          <tbody>
            @foreach($posts as $item)
            <tr>
              <th>{{$item->id}}</th>
              <th>{{ Str::limit($item->title, 10) }}</th>
              <th>{{ Str::limit($item->content, 10) }}</th>
              <th>{{$item->tag}}</th>
              <th>
                <a href="{{route('posts.show', $item->id)}}" class="btn btn-sm bg-primary-subtle text-primary view-details">
                  View
                </a>
              </th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>

</script>
@endsection