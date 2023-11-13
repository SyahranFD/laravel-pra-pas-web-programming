<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function index()
    {
        return view('restaurant.all', [
            'title'=> 'restaurant',
            'restaurants'=> Restaurant::all(),
        ]);
    }

    public function show($restaurant)
    {
        return view('restaurant.detail', [
            'title'=> 'detail-restaurant',
            'restaurant' => Restaurant::find($restaurant),
        ]);
    }
}
