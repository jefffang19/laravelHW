<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function() {
    return view('search');
})->name('serach_rating');

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/display/{name}','TableController@RenderExample')->name('render_example');

Route::get('/movies/{user_id}', 'TableController@testSelectMovie')->name('render_movies_example');

Route::get('/movies', 'TableController@RenderMovie');

//post method require you to edit VerifyCsrfToken.php in middleware
Route::post('/ratings/insert', 'TableController@insertRating')->name('insert_rating');

Route::post('/ratings/delete', 'TableController@deleteRating')->name('delete_rating');

Route::post('/ratings/update', 'TableController@updateRating')->name('update_rating');