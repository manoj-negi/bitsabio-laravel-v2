<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GoogleReviewController extends Controller
{
    public function index()
   {
    $response = Http::get(
        'https://maps.googleapis.com/maps/api/place/details/json',
        [
            'place_id' => env('GOOGLE_PLACE_ID'),
            'fields' => 'name,rating,user_ratings_total,reviews',
            'key' => env('GOOGLE_MAPS_API_KEY'),
        ]
    );

    dd($response->json());
}
}