<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Http\Resources\RatingResource;
use App\Http\Resources\MovieResource;

class TableController extends Controller{
    public function RenderExample(String $name){
        return view('hello', ['name' => $name]);
    }

    public function testSelectMovie(Request $request){
        $userid = 5;
        $movies = Rating::where('user_id', 5)->get();
        return RatingResource::collection($movies);
    }
}