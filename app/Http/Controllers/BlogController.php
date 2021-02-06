<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(3);
        return view('blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blog-show', compact('blog'));
    }
}
