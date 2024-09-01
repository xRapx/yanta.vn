@extends('index')

@section('content')
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
@endsection
