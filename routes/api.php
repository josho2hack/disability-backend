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
Route::get('user', function () {
    return User::all();
    //return new UserCollection(User::all());
});

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
    Route::get('users', function () {
        return UserResource::collection(User::all());
        //return new UserCollection(User::all());
    })->middleware('admin');
    Route::get('user/{id}', function ($id) {
        return new UserResource(User::find($id));
    });
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
