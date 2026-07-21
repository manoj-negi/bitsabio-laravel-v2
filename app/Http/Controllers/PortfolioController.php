<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('status', true)
            ->latest()
            ->get();

        return view('portfolio', compact('portfolios'));
    }
}