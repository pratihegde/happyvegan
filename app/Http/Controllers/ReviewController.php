<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('image')->store('public/assets/reviews');

        Review::create([
            'client_name' => $request->client_name,
            'review' => $request->review,
            'profession' => $request->profession,
            'image' => $path

        ]);

        return back()->with('success', 'Review submitted successfully.');
    }

    public function index()
    {
        $reviews = Review::all();
        return view('home', compact('reviews'));
    }

    
}