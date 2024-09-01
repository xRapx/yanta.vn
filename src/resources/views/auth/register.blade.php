@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group has-placeholder">
        <label for="name">Name<span class="required">*</span></label>
        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
    </div>
    <div class="form-group has-placeholder">
        <label for="signupemail">Email<span class="required">*</span></label>
        <input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email">
    </div>
    <div class="form-group has-placeholder">
        <label for="signuppassword">Password<span class="required">*</span></label>
        <input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
    </div>
    <div class="form-group has-placeholder">
        <label for="password_confirmation">Confirm Password<span class="required">*</span></label>
        <input type="password" aria-required="true" size="30" value="" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
    </div>
    <div class="form-group d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
		<span class="">
             <a href="/login">Login</a>
        </span>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection