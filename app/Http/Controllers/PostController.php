<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
//  blog list 

    public function blogs()
    {
        $blogs = Post::with('user')
            ->where('type', 'blog')
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('blogs', compact('blogs'));
    }

// course list 
    public function courses()
    {
        $courses = Post::where('type', 'course')
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('courses', compact('courses'));
    }

// service list 

    public function services()
    {
        $services = Post::where('type', 'service')
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('services', compact('services'));
    }

//  blog detail 
    public function showBlog($slug)
    {
        $blog = Post::with('user')
            ->where('type', 'blog')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('blog-detail', compact('blog'));
    }

    // course detail 
    public function showCourse($slug)
    {
        $course = Post::where('type', 'course')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $courses = Post::where('type', 'course')
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('course-detail', compact(
            'course',
            'courses'
        ));
    }

    // service detail 

    public function showService($slug)
    {
        $service = Post::where('type', 'service')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('service-detail', compact('service'));
    }
}