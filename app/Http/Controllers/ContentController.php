<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ContentController extends Controller
{
    // Courses Page
    public function courses()
    {
         $courses = Content::where('type', 'course')->get();
         return view('courses', compact('courses'));
    }

    // Services Page
    public function services()
    {
        $services = Content::where('type', 'service')->latest()->get();

        return view('services', compact('services'));
    }

    // Single Details Page
    public function show($slug)
    {
        $content = Content::where('slug', $slug)->firstOrFail();

        // Fetch all courses
        $courses = Content::where('type', 'course')->get();

        if ($content->type === 'course') {

            return view('course-detail', compact('content','courses'));
        }

        return view('service-detail', compact('content'));
    }
}