<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;
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

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

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

