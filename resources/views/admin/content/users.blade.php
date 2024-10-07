@extends('admin.admin')

@section('content')
<div class="container-fluid">
  <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
    <div class="card-body px-0">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-medium fs-14 mb-0">User</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="">Home
                </a>
              </li>
              <li class="breadcrumb-item text-muted" aria-current="page">User</li>
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
            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search User...">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
        </div>
        <button class="btn btn-primary  d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
          <a href="{{route('user.create')}}" class="text-white">Add User</a>
        </button>
      </div>
    </div>
    <div class="card card-body">
      <h2>Danh mục</h2>
      <div>
        <input type="radio" name="category" id="admin" value="admin"> Admin<br>
        <input type="radio" name="category" id="user" value="user"> User<br>
        <input type="radio" name="category" id="all" value="all"> All<br>
        <form id="formControl" style="display:none;" method="POST">
          @csrf
          @method('POST')
        </form>
      </div>

      <div class="card card-body">
        <div class="table-responsive">
          <table class="table table-striped w-100 table-bordered text-inputs-searching text-nowrap">
            <thead>
              <!-- start row -->
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <!-- end row -->
            </thead>

            <tbody id="userTableBody">
              @foreach($users as $item)
              <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->email}}</th>
                <th>{{$item->phone}}</th>
                <th>{{$item->status}}</th>
                <th>
                  <a href="{{route('user.details', $item->id)}}" class="btn btn-sm bg-primary-subtle text-primary view-details">
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.querySelectorAll('input[name="category"]').forEach((radio) => {
      radio.addEventListener('change', function() {
        const category = this.value;
        let url = '/admin/users';
        if (category !== 'all') {
          url = `/admin/users/filter/${category}`;
        }
        fetch(url, {
            method: 'GET',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json',
            },
          })
          .then(response => response.json())
          .then(data => {
            // Xử lý dữ liệu trả về và cập nhật giao diện người dùng
            console.log(data.users);
            // Ví dụ: cập nhật bảng người dùng
            updateUserTable(data.users);
          })
          .catch(error => console.error('Error:', error));
      });
    });

    function updateUserTable(users) {
      // Hàm để cập nhật bảng người dùng với dữ liệu mới
      const tableBody = document.getElementById('userTableBody');
      tableBody.innerHTML = '';
      users.forEach(user => {
        const row = `<tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.phone}</td>
                        <td>${user.status}</td>
                        <th>
                          <a href="{{route('user.details', $item->id)}}" class="btn btn-sm bg-primary-subtle text-primary view-details">
                            View
                          </a>
                        </th>
                    </tr>`;
        tableBody.innerHTML += row;
      });
    }
  </script>
  @endsection