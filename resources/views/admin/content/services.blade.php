@extends('admin.admin')

@section('content')
<div class="container-fluid">
  <!-- -------------------------------------------------------------- -->
  <!-- Breadcrumb -->
  <!-- -------------------------------------------------------------- -->
  <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
    <div class="card-body px-0">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-medium fs-14 mb-0">Services</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="">Home
                </a>
              </li>
              <li class="breadcrumb-item text-muted" aria-current="page">Services</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- -------------------------------------------------------------- -->
  <!-- Breadcrumb End -->
  <!-- -------------------------------------------------------------- -->
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- Row -->
      <div class="row">
        <!-- Column -->
        <div class="col-md-12">
          <div class="card overflow-hidden">
            <div class="card card-body">
              <div class="d-flex justify-content-between">
                <div class="w-50">
                  <form class="position-relative">
                    <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search Service...">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                  </form>
                </div>
                <button class="btn btn-primary  d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                  <a href="{{route('services.create')}}" class="text-white">Add Service</a>
                </button>
              </div>
            </div>
            <div class="card-body collapse show">
              <div class="table-responsive no-wrap">
                <table class="table table-striped product-overview align-middle v-middle">
                  <thead>
                    <tr>
                      <th class="border-0">Id</th>
                      <th class="border-0">Title</th>
                      <th class="border-0">Description</th>
                      <th class="border-0">Image</th>
                      <th class="border-0">Features</th>
                      <th class="border-0">Price</th>
                      <th class="border-0">Status</th>
                      <th class="border-0">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($services as $item)
                    <tr>
                      <th>{{$item->id}}</th>
                      <th>{{$item->title}}</th>
                      <th>{{$item->description}}</th>
                      <th>{{$item->image}}</th>
                      <th>{{$item->features}}</th>
                      <th>{{$item->price}}</th>
                      <th>{{$item->features}}</th>
                      <th>{{$item->status}}</th>
                      <th>{{$item->created_at}}</th>
                      <th>
                        <a href="{{route('services.show', $item->id)}}" class="btn btn-sm bg-primary-subtle text-primary view-details">
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
        <!-- Column -->
      </div>
      <!-- Row -->
    </div>
  </div>
</div>
@endsection