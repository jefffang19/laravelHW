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

    public function insertRating(Request $request){
        $rating = new Rating;
        $rating->user_id = $request->input('user_id');
        //dd($rating);
        $rating->movie_id = $request->input('movie_id');
        $rating->rating = $request->input('rating');
        $rating->save();
        /*
        $tmp = Rating::where('user_id', $rating->user_id)->get();

        return $tmp;*/
    }

    public function deleteRating(Request $request){
        $rating = Rating::where('user_id', $request->input('user_id'))->where('movie_id', $request->input('movie_id'));
        $rating->delete();
    }

    public function updateRating(Request $request){
        $rating = Rating::where('user_id', $request->input('user_id'))->where('movie_id', $request->input('movie_id'))->update(['rating' => $request->input('rating')]);
    }
}