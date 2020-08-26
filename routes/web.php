<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/verify', function () {
    return view('verify');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

Route::prefix('admin')->group(function () {
    Route::get('','Admin\AdminController@index')->name('admin');
    Route::prefix('assets')->group(function(){
        Route::get('','Admin\AssetController@index')->name('assets');
        Route::get('list','Admin\AssetController@list')->name('assetslist');
        Route::get('{id}','Admin\AssetController@index');
        Route::post('{id}','Admin\AssetController@index');
        Route::post('update/{id}','Admin\AssetController@index');
        Route::post('delete/{id}','Admin\AssetController@index');
        Route::get('maingroup','Admin\AssetController@index');
        Route::get('maingroup/list','Admin\AssetController@list');
        Route::get('maingroup/{id}','Admin\AssetController@index');
        Route::post('maingroup/{id}','Admin\AssetController@index');
        Route::post('maingroup/update/{id}','Admin\AssetController@index');
        Route::post('maingroup/delete/{id}','Admin\AssetController@index');
        Route::get('subgroup','Admin\AssetController@index');
        Route::get('subgroup/list','Admin\AssetController@list');
        Route::get('subgroup/{id}','Admin\AssetController@index');
        Route::post('subgroup/{id}','Admin\AssetController@index');
        Route::post('subgroup/update/{id}','Admin\AssetController@index');
        Route::post('subgroup/delete/{id}','Admin\AssetController@index');
    });
});
