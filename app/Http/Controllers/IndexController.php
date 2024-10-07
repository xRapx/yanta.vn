<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {
        return view('pages.home');
    }

    public function about() 
    {
        return view('pages.about');
    }
    public function blog() 
    {   
        $blogs = Blog::all();
        return view('pages.blog',compact('blogs'));
    }
    public function service() 
    {
        return view('pages.service');
    }
    public function contact() 
    {
        return view('pages.contact');
    }
}
