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
//Route::get('/logout', 'HomeController@logout');

Route::get('/user-login', 'HomeController@user_login');
//Route::get('/register', 'HomeController@register')->name('register');


Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@insert_address');
Route::get('/profile/address', 'ProfileController@address');
Route::get('/profile/edit_address', 'ProfileController@edit_address');
Route::post('/profile/edit_address', 'ProfileController@update_address');
Route::get('/profile/edit', 'ProfileController@edit_profile');
Route::post('/profile/edit', 'ProfileController@update_profile');
Route::resources(['form-borrow' => 'Form\FormborrowController']);
Route::get('/object', 'ObjectController@index');

Route::get('activity', 'EventController@index');
Route::get('activity/add', 'EventController@add');
Route::post('activity', 'EventController@insert');

Route::get('fileupload', 'FileController@index');
Route::get('fileupload/add', 'FileController@add');
Route::post('fileupload', 'FileController@insert');

Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

Route::get('/subgroup/{id}/avatar', 'Admin\SubGroupController@avatar');

Route::prefix('admin')->group(function () {
    Route::get('', 'Admin\AdminController@index')->name('admin');
    Route::get('assets/dashboard', 'Admin\AssetController@dashboard')->name('assets.dashboard');
    Route::resources([
        'assets' => 'Admin\AssetController',
        'maingroups' => 'Admin\MainGroupController',
        'subgroups' => 'Admin\SubGroupController',
    ]);


    Route::namespace('Admin')->name('admin.')->group(function() {
        Route::resource('news', 'NewsController');
    });

    Route::resource('surveys', 'SurveyController', ['as' => 'admin']);
    Route::resource('surveys/{id}/questions', 'QuestionController', ['as' => 'admin']);
    Route::post('surveys/{id}/questions/updates', 'QuestionController@updates')->name('admin.questions.updates');
});
