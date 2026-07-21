<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GoogleReviewController;
use App\Http\Controllers\InvoicePdfController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('home');    
})->name('home');

Route::get('/about', function () {
    return view('about-us');
})->name('about-us');

Route::get('/portfolio', [PortfolioController::class, 'index'])
    ->name('portfolio');

// Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])
//     ->name('portfolio.details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/blogs', [PostController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [PostController::class, 'showBlog']);

Route::get('/training', [PostController::class, 'courses'])->name('courses');
Route::get('/training/{slug}', [PostController::class, 'showCourse'])->name('content.showCourse');

Route::get('/services', [PostController::class, 'services'])->name('services');
Route::get('/service/{slug}', [PostController::class, 'showService'])->name('content.showService');


// Route::get('/services', function () {
//     return view('services');
// })->name('services');

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

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
// Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::get('/unsubscribe/{email}', [SubscriberController::class, 'unsubscribe'])->name('unsubscribe');

// sitetmap route 
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/google-reviews', [GoogleReviewController::class, 'index']);
Route::view('privacy-policy','legal.privacy-policy');

Route::get('/invoice/{invoice}/pdf',[InvoicePdfController::class, 'download'])->name('invoice.pdf');

Route::get('/internForm', function () {
    return view('internForm');
});Route::post('/internForm', [InternController::class, 'store'])
    ->name('intern.store');