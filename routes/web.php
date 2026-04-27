<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('home');
    
});
Route::get('/about', function () {
    return view('about-us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blogs', function () {

    $blogs = DB::table('blogs')
        ->where('status', 'published') 
        ->latest()
        ->get();

    return view('blogs', compact('blogs'));
});


Route::get('/blog/{slug}', function ($slug) {

    $blog = DB::table('blogs')
        ->where('slug', $slug)
        ->where('status', 'published') 
        ->first();

    if (!$blog) {
        abort(404);
    }

    return view('blog-detail', compact('blog'));
});


// Services start  
Route::get('/services/ai', function () {
    return view('services.ai');
});
Route::get('/services/rag_solution', function () {
    return view('services.rag_solution');

});Route::get('/services/data_science', function () {
    return view('services.data_science');
});

Route::post('/contact', [ContactController::class, 'send']);

