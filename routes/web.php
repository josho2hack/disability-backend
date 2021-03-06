<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

// Route::get('', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('', 'HomeController@allLogin')->name('root');
Route::get('shownews/{id}', 'HomeController@show_news');

// Route::get('index', 'HomeController@allLogin');

// Route::get('/verify', function () {
//     return view('verify');
// });


Route::get('welcome', 'HomeController@welcome');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified','approved');
//Route::get('/logout', 'HomeController@logout');

Route::get('/user-login', 'HomeController@user_login')->name('user-login');
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
Route::resource('substitute' , 'SubstituteController');
Route::get('doc', function(){return view('document');});
Route::get('/tutorial', 'ManualController@index');
Route::get('/practice', 'PracticeController@index');
Route::get('/practice2', 'PracticeController@index2');
Route::post('/practice/subgroup', 'PracticeController@getsubgroup');
Route::post('/practice/category', 'PracticeController@getcategory');
Route::post('/practice', 'PracticeController@index');
Route::post('/practice/add', 'PracticeController@add');
Route::get('/practice/index', 'PracticeController@home');
Route::get('/practice/{id}', 'PracticeController@view');
Route::get('/object', 'ObjectController@index');
//form
Route::resource('form-receive' , 'Form\FormreceiveController');
Route::get('form-receive/receive/pdf', 'Form\FormreceiveController@pdf_receive');
Route::resource('form-borrow' , 'Form\FormborrowController');
Route::get('borrow/send_auditor/{id}' , 'Form\FormborrowController@send_auditor');
Route::post('form-borrow/getNo' , 'Form\FormborrowController@get_number');
Route::post('form-borrow/getData' , 'Form\FormborrowController@get_data');
Route::post('form-borrow/getcategory' , 'Form\FormborrowController@getcategory');
Route::post('form-borrow/getassets' , 'Form\FormborrowController@getassets');
//pdf
Route::get('pdf/{id}', 'Form\FormborrowController@pdf');

Route::resource('garuntees', 'GarunteeController');

Route::prefix('auditor')->middleware('auth')->group(function () {
    Route::resource('audits', 'Auditor\AuditFormBorrowController');
    Route::get('audits/form/send', 'Auditor\AuditFormBorrowController@send');
    Route::get('audits/form/send_approver/{id}', 'Auditor\AuditFormBorrowController@send_approver');
    Route::get('documents/{id}', 'Auditor\AuditFormBorrowController@documents');
    Route::get('pdf/{id}', 'Auditor\AuditFormBorrowController@pdf');
});

Route::get('activity', 'EventController@index');
Route::get('activity/add', 'EventController@add');
Route::post('activity', 'EventsController@store');

Route::resource('events', 'EventsController');
Route::resource('eventcategories', 'EventCategoryController');

//fullcalender
Route::get('calendar','FullCalendarUserController@index');
Route::get('calendar/show','FullCalendarUserController@show');
Route::post('calendar/update','FullCalendarUserController@update');

//calender
Route::get('fullcalendar','FullCalendarController@index');
Route::get('fullcalendar/show','FullCalendarController@show');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');

Route::get('fileupload', 'FileController@index');
Route::get('fileupload/add', 'FileController@add');
Route::get('downloads', 'FileController@show')->name('downloads');
Route::post('fileupload', 'FileController@insert');

// Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
// Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

Route::get('/subgroup/{id}/avatar', 'Admin\SubGroupController@avatar');
Route::get('/time', function(){
    $dt = new Carbon();
    $dt->settings([
        'yearOverflow' => false,
    ]);
    echo show_date($dt);
    echo formatDateThai($dt);
    echo $dt->copy()->addYearsNoOverflow(543)->locale('th')->isoFormat('LLLL');
    echo $dt->locale('th')->isoFormat('LLLL');
});
Route::get('dashboard', 'Admin\AdminController@index')->name('dashboard');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin');
    Route::get('assets/dashboard', 'Admin\AssetController@dashboard')->name('assets.dashboard');
    Route::get('assets/selected/{cate}', 'Admin\AssetController@selected')->name('assets.selected');
    Route::get('assets/subselected/{sub}', 'Admin\AssetController@subselected')->name('assets.sub.selected');
    Route::get('assets/getCates/{id}', 'Admin\AssetController@getCates');
    Route::get('users/option', 'Admin\UserController@option')->name('users.option');
    Route::put('users/optionupdate', 'Admin\UserController@optionupdate')->name('users.optionupdate');
    Route::get('users/selected/{role}', 'Admin\UserController@selected')->name('users.selected');
    Route::resources([
        'assets' => 'Admin\AssetController',
        'maingroups' => 'Admin\MainGroupController',
        'subgroups' => 'Admin\SubGroupController',
        'users' => 'Admin\UserController'
    ]);

    Route::namespace('Admin')->name('admin.')->group(function () {
        Route::resource('news', 'NewsController');
    });

    Route::resource('surveys', 'SurveyController', ['as' => 'admin']);
    Route::resource('surveys/{id}/questions', 'QuestionController', ['as' => 'admin']);
    Route::post('surveys/{id}/questions/updates', 'QuestionController@updates')->name('admin.questions.updates');

    Route::resource('contracts', 'Admin\Form13Controller');
    Route::get('approved', 'Admin\Form13Controller@approved')->name('admin');
    Route::get('disapproved', 'Admin\Form13Controller@disapproved')->name('admin');
    Route::get('disapproved/{id}', 'Admin\Form13Controller@show_disapproved')->name('show_disapproved');
    Route::get('garuntees/{id}', 'Admin\Form13Controller@garuntees')->name('garuntees');

});

Route::prefix('approve')->middleware('auth')->group(function () {
    Route::get('', 'Approve\Form07Controller@index')->name('approve');

    Route::resources([
        'form07' => 'Approve\Form07Controller',
        'form09' => 'Approve\Form09Controller',
        'form10' => 'Approve\Form10Controller'
    ]);
});
