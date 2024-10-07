@extends('admin.admin')

@section('content')
<div class="container-fluid">
    <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
        <div class="card-body px-0">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-medium fs-14 mb-0">Gallery</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="">Home
                                </a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Gallery</li>
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
                        <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search Contacts...">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <button class="btn btn-primary  d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{route('gallery.create')}}" class="text-white">Upload Image</a>
                </button>
            </div>
        </div>
        <div class="card card-body">
            <div class="">
                <h1>Galleries</h1>
                <div class="row el-element-overlay">
                    @foreach($galleries as $gallery)
                    <div class="col-lg-3 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="el-card-item pb-3">
                                <div class="
                          el-card-avatar
                          mb-3
                          el-overlay-1
                          w-100
                          overflow-hidden
                          position-relative
                          text-center
                        ">
                                    <img src="{{ asset('images/' . $gallery->url) }}" class="d-block position-relative w-100" alt="{{ $gallery->name }}">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="card-title">{{$gallery->name}}</h4>
                                    <p class="card-subtitle">{{$gallery->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection