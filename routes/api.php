<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('rss', 'API\RssController@getNews');

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

// Route::get('user', function () {
//     return User::with('roles')->get();
// });

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('users', 'API\UserController@store')->middleware('admin');
    Route::get('users', 'API\UserController@getAll')->middleware('admin');
    Route::get('users/{id}', 'API\UserController@getById')->middleware('admin');
    Route::put('users/{id}', 'API\UserController@update')->middleware('admin');
    Route::delete('users/{id}', 'API\UserController@delete')->middleware('admin');

    Route::post('assets', 'API\AssetController@store')->middleware('admin');
    Route::get('assets', 'API\AssetController@getAll')->middleware('admin');
    Route::get('assets/{id}', 'API\AssetController@getById')->middleware('admin');
    Route::put('assets/{id}', 'API\AssetController@update')->middleware('admin');
    Route::delete('assets/{id}', 'API\AssetController@delete')->middleware('admin');
});

// Route::middleware('auth:api')->get('user', function (Request $request) {
//     return $request->user();
// });

// route::get('test',  function (request $request) {
//     return response()->json(['hello laravel']);
// });


/*
Route::middleware(['cors','api'])->group(function () {
    Route::post('post', 'PostController@create');
    Route::get('post', 'PostController@read');
    Route::put('post/{id}', 'PostController@update');
    Route::delete('post/{id}', 'PostController@delete');

    Route::post('comment', 'CommentController@create');
    Route::put('comment/{id}', 'CommentController@update');
    Route::delete('comment/{id}', 'CommentController@delete');
});
*/
