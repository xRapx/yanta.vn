<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user && $user->role === 'admin' && $user->status){
            return view('admin.content.users');
        }
        return view('pages.home');
    }
}
