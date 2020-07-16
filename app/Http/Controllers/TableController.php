<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller{
    public function RenderExample(String $name){
        return view('hello', ['name' => $name]);
    }
}