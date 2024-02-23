<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food\Food;
use App\Models\Review;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch the first 4 food items where the category is 'Breakfast'
        $breakfastFoods = Food::where('category', 'Breakfast')->take(4)->get();
        $lunchFoods = Food::where('category', 'Lunch')->take(4)->get();
        $dinnerFoods = Food::where('category', 'Dinner')->take(4)->get();
        $reviews = Review::all();
    
        // Pass the fetched breakfast foods to the 'home' view
        return view('home', compact('breakfastFoods','lunchFoods','dinnerFoods','reviews'));
    }
    
}
