<?php

namespace App\Http\Controllers;

use App\Models\User;
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
  
         Log::info('After Login:', $request->all());

        // Lấy thông tin đăng nhập
        $credentials = $request->only('email', 'password');
        // Tìm role trong database
        $user = User::where('email', $request->email)->first();
        
        if($user && Auth::attempt($credentials)){    
            // Kiểm tra quyền admin
            if($user->role === 'admin') {
                return redirect('/admin/users');  
            }
            // Đăng nhập thành công, trả về trang chủ
            return redirect('/');  

        } else {          
            // Đăng nhập thất bại
            return response()->json([
                'status' => 'error',
                'message' => 'Email hoặc mật khẩu không đúng',
            ], 401);
        }
    }
}
