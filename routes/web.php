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

Route::get('', function () {
    return view('welcome');
})->name('root');

Route::get('/verify', function () {
    return view('verify');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

Route::get('/user-login', 'HomeController@user_login');
Route::get('/register', 'HomeController@register');
Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@insert');
Route::get('/profile/add', 'ProfileController@add');
Route::resources(['form-borrow' => 'Form\FormborrowController']);



Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

Route::get('/subgroup/{id}/avatar', 'Admin\SubGroupController@avatar');
Route::get('/subgroup/{id}/avatar', 'Admin\SubGroupController@avatar');
Route::prefix('admin')->group(function () {
    Route::get('', 'Admin\AdminController@index')->name('admin');
    Route::get('assets/dashboard', 'Admin\AssetController@dashboard')->name('assets.dashboard');
    Route::resources([
        'assets' => 'Admin\AssetController',
        'maingroups' => 'Admin\MainGroupController',
        'subgroups' => 'Admin\SubGroupController'
    ]);
});

Route::get('news', 'NewsController@index');
Route::get('news/add', 'NewsController@add');
Route::post('news', 'NewsController@insert');

Route::get('activity', 'EventController@index');
Route::get('activity/add', 'EventController@add');
Route::post('activity', 'EventController@insert');

Route::get('fileupload', function () { return view('fileupload.index'); });
Route::get('fileupload/add', function () { return view('fileupload.add'); });