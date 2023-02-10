<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blog()
    {
        $blogs  =   Blog::get();
        return view('frontend.blog', compact('blogs'));
    }
}
