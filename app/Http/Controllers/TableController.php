<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Http\Resources\RatingResource;
use App\Http\Resources\MovieResource;

class TableController extends Controller{
    public function RenderExample($name){
        return view('hello')->with(array('name'=> $name,'name2'=>'jeff'));
    }

    public function RenderMovie(Request $request){
        $userid = $request->input('user_id');
        $movies = Rating::where('user_id', $userid)->get();
        return RatingResource::collection($movies);
    }

    public function testSelectMovie($id){
        $movies = Rating::where('user_id', $id)->get();
        return view('showData', ['data' => RatingResource::collection($movies)]);
    }
}