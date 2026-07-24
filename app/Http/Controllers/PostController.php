<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Location;

class PostController extends Controller
{
//  blog list 

    public function blogs()
    {
        $blogs = Post::with('user')
            ->where('type', 'blog')
            ->where('status', 'published')
            ->orderBy('priority')
            ->latest()
            ->get();

        return view('blogs', compact('blogs'));
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

// course list 
    public function courses()
    {
        $courses = Post::where('type', 'course')
            ->where('status', 'published')
            ->orderBy('priority')
            ->latest()
            ->get();

        return view('courses', compact('courses'));
    }

        // course detail 
    // public function showCourse($slug)
    // {
    //     $course = Post::where('type', 'course')
    //         ->where('slug', $slug)
    //         ->where('status', 'published')
    //         ->firstOrFail();

    //     $courses = Post::where('type', 'course')
    //         ->where('status', 'published')
    //         ->latest()
    //         ->get();

    //     return view('course-detail', compact(
    //         'course',
    //         'courses'
    //     ));
    // }
public function showCourse($slug)
{
    $location = null;

    // Check if URL contains location
    if (str_contains($slug, '-in-')) {

        [$courseSlug, $locationSlug] = explode('-in-', $slug, 2);

        $location = Location::where('slug', $locationSlug)
            ->where('status', 1)
            ->firstOrFail();

        $slug = $courseSlug;
    }

    $course = Post::where('type', 'course')
        ->where('slug', $slug)
        ->where('status', 'published')
        ->firstOrFail();

    // Optional: ensure this course is assigned to this location
    if ($location && ! $course->locations()->where('locations.id', $location->id)->exists()) {
        abort(404);
    }

    $courses = Post::where('type', 'course')
        ->where('status', 'published')
        ->latest()
        ->get();

    return view('course-detail', compact(
        'course',
        'courses',
        'location'
    ));
}
       public function curriculum($slug)
    {
        $course = Post::where('type', 'course')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('curriculum', compact('course'));
    }


// service list 

    public function services()
    {
        $services = Post::where('type', 'service')
            ->where('status', 'published')
            ->orderBy('priority')
            ->latest()
            ->get();

        return view('services', compact('services'));
    }

    // service detail 

   public function showService($slug)
    {
        $service = Post::where('type', 'service')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $services = Post::where('type', 'service')
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('service-detail', compact(
            'service',
            'services'
        ));
    }
}