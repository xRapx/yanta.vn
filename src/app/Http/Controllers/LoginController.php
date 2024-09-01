<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Log dữ liệu đầu vào của form
        Log::info('Login attempt:', $request->all());

        // Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Lấy thông tin đăng nhập
        $credentials = $request->only('email', 'password');

        // Thử đăng nhập
        // Đăng nhập thành công
        if (Auth::attempt($credentials)) return redirect('/');


        // Đăng nhập thất bại
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
