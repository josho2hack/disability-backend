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
    return view('index');
})->name('root');

// Route::get('/verify', function () {
//     return view('verify');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
//Route::get('/logout', 'HomeController@logout');

Route::get('/user-login', 'HomeController@user_login');
Route::get('/admin-login', 'HomeController@admin_login');
Route::get('/audit-login', 'HomeController@audit_login');
Route::get('/approve-login', 'HomeController@approve_login');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@insert_address');
Route::get('/profile/address', 'ProfileController@address');
Route::get('/profile/edit_address', 'ProfileController@edit_address');
Route::post('/profile/edit_address', 'ProfileController@update_address');
Route::get('/profile/edit', 'ProfileController@edit_profile');
Route::post('/profile/edit', 'ProfileController@update_profile');
Route::resources(['substitute' => 'SubstituteController']);
Route::get('doc', function(){return view('document');});
Route::resources(['form-receive' => 'Form\FormreceiveController']);
Route::get('form-receive/receive/pdf', 'Form\FormreceiveController@pdf_receive');
Route::resources(['form-borrow' => 'Form\FormborrowController']);
Route::get('/tutorial', 'ManualController@index');
Route::get('/object', 'ObjectController@index');
//pdf
Route::get('pdf/{id}', 'PDFController@pdf');




Route::get('activity', 'EventController@index');
Route::get('activity/add', 'EventController@add');
Route::post('activity', 'EventController@insert');

Route::get('fileupload', 'FileController@index');
Route::get('fileupload/add', 'FileController@add');
Route::post('fileupload', 'FileController@insert');

// Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
// Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

Route::get('/subgroup/{id}/avatar', 'Admin\SubGroupController@avatar');

Route::get('dashboard', 'Admin\AdminController@index')->name('dashboard');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin');
    Route::get('assets/dashboard', 'Admin\AssetController@dashboard')->name('assets.dashboard');
    Route::get('assets/selected/{cate}', 'Admin\AssetController@selected')->name('assets.selected');
    Route::get('assets/subselected/{sub}', 'Admin\AssetController@subselected')->name('assets.sub.selected');
    Route::get('users/option', 'Admin\UserController@option')->name('users.option');
    Route::put('users/optionupdate', 'Admin\UserController@optionupdate')->name('users.optionupdate');
    Route::resources([
        'assets' => 'Admin\AssetController',
        'maingroups' => 'Admin\MainGroupController',
        'subgroups' => 'Admin\SubGroupController',
        'users' => 'Admin\UserController',
    ]);


    Route::namespace('Admin')->name('admin.')->group(function () {
        Route::resource('news', 'NewsController');
    });

    Route::resource('surveys', 'SurveyController', ['as' => 'admin']);
    Route::resource('surveys/{id}/questions', 'QuestionController', ['as' => 'admin']);
    Route::post('surveys/{id}/questions/updates', 'QuestionController@updates')->name('admin.questions.updates');
});
