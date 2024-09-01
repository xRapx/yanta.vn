


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yanta.vn</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('css/regular.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/brands.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/solid.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
	<link rel="stylesheet" href="{{asset('css/shop.css')}}" class="color-switcher-link">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group has-placeholder">
                            <label for="signupemail">Email<span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group has-placeholder">
                            <label for="signuppassword">Password<span class="required">*</span></label>
                            <input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <span class="">
                                <a href="/register">Register</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
