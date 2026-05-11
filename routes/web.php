<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('home');    
})->name('home');

Route::get('/about', function () {
    return view('about-us');
})->name('about-us');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');   
})->name('portfolio');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
    
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Services start  
Route::get('/services/ai', function () {
    return view('services.ai');
});

Route::get('/services/rag_solution', function () {
    return view('services.rag_solution');

});

Route::get('/services/data_science', function () {
    return view('services.data_science');
});
    
Route::get('/services/ai-ml', function () {
    return view('services.ai-ml');
});
Route::get('/services/web-app',function(){
    return view('services.web-app');
});
Route::get('/services/ai-solution',function(){
    return view('services.ai-solution');

});
Route::get('/services/ui-ux',function(){
    return view('services.ui-ux');
});

Route::get('/services/digital-marketing',function(){
    return view('services.digital-marketing');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])
    ->name('subscribe');

Route::get('/unsubscribe/{email}', [SubscriberController::class, 'unsubscribe'])
    ->name('unsubscribe');

// sitetmap route 
Route::get('/sitemap.xml', [SitemapController::class, 'index']);