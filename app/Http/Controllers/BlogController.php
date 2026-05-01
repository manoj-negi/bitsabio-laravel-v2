<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; 
class BlogController extends Controller
{
       public function index()
    {
        $blogs = Blog::where('status', 'published')
            ->latest()
            ->get();

        return view('blogs', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('blog-detail', compact('blog'));
    }
}
