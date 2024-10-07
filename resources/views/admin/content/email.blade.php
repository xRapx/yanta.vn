@extends('admin.admin')

@section('content')
<div class="container-fluid">
  <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
    <div class="card-body px-0">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-medium fs-14 mb-0">Email</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="">Home
                </a>
              </li>
              <li class="breadcrumb-item text-muted" aria-current="page">Email</li>
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
            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search Email...">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
        </div>
        <button class="btn btn-primary  d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
          <a href="{{route('email.create')}}" class="text-white">Send Email</a>
        </button>
      </div>
    </div>

    <div class="card card-body">
    <h2>Danh muc</h2>
    </div>

    <div class="card card-body">
      <div class="table-responsive">
        <table class="table table-striped w-100 table-bordered text-inputs-searching text-nowrap">
          <thead>
            <!-- start row -->
            <tr>
            <tr>
              <th>ID</th>
              <th>Recipient</th>
              <th>Subject</th>
              <th>Body</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
            </tr>
            <!-- end row -->
          </thead>
          <tbody>
            @foreach($emails as $item)
            <tr>
              <th>{{$item->id}}</th>
              <th>{{$item->recipient}}</th>
              <th>{{$item->subject}}</th>
              <th>{{ Str::limit($item->body, 10) }}</th>
              <th>{{$item->created_at}}</th>
              <th>
                <a href="{{route('email.show', $item->id)}}" class="btn btn-sm bg-primary-subtle text-primary view-details">
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

@endsection