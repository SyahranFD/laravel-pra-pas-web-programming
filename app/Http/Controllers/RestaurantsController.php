<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function index()
    {
        return view('restaurant.all', [
            'title'=> 'restaurant',
            'restaurants'=> restaurant::all(),
        ]);
    }

    public function show($restaurant)
    {
        return view('restaurant.detail', [
            'title'=> 'detail-restaurant',
            'restaurant' => restaurant::find($restaurant),
        ]);
    }
}
