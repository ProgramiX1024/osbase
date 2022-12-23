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

Route::get('/', 'App\Http\Controllers\PageController@Home');
Route::get('/privacy-policy', 'App\Http\Controllers\PageController@PrivacyPolicy');
Route::get('/terms', 'App\Http\Controllers\PageController@Terms');
Route::get('/system/{os}', 'App\Http\Controllers\PageController@SystemView');
Route::get('/timers', 'App\Http\Controllers\PageController@Timers');
Route::get('/about-us', 'App\Http\Controllers\PageController@AboutUs');
Route::get('/search', 'App\Http\Controllers\PageController@Search');
Route::get('/money', 'App\Http\Controllers\PageController@Crowdfunding');
Route::get('/download/{id}', 'App\Http\Controllers\DownloadController@Download');

Route::get('language/{locale}', function ($locale) {
	session(['locale' => $locale]);
	return redirect('/');
});


Route::get('/admin', 'App\Http\Controllers\AdminController@AdminRedirect');

Route::get('/admin/login', 'App\Http\Controllers\AdminController@LoginPage');
Route::post('/admin/login/check', 'App\Http\Controllers\AdminController@LoginCheck');

Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@Dashboard')->middleware('logged');

Route::get('/admin/systems', 'App\Http\Controllers\AdminController@Systems')->middleware('logged');
Route::get('/admin/systems/edit/{id}', 'App\Http\Controllers\AdminController@SystemsEdit')->middleware('logged');
Route::get('/admin/systems/new', 'App\Http\Controllers\AdminController@SystemsAdd')->middleware('logged');

Route::get('/admin/images', 'App\Http\Controllers\AdminController@Images')->middleware('logged');
Route::get('/admin/images/{id}', 'App\Http\Controllers\AdminController@ImagesSystem')->middleware('logged');
Route::get('/admin/images/edit/{id}', 'App\Http\Controllers\AdminController@ImagesEdit')->middleware('logged');
Route::get('/admin/images/new/{id}', 'App\Http\Controllers\AdminController@ImagesAdd')->middleware('logged');

route::get('/admin/action/system/delete', 'App\Http\Controllers\AdminActionsController@SystemDelete')->middleware('logged');
route::post('/admin/action/system/add', 'App\Http\Controllers\AdminActionsController@SystemAdd')->middleware('logged');
route::post('/admin/action/system/edit', 'App\Http\Controllers\AdminActionsController@SystemEdit')->middleware('logged');
route::post('/admin/action/image/add', 'App\Http\Controllers\AdminActionsController@ImageAdd')->middleware('logged');
route::post('/admin/action/image/edit', 'App\Http\Controllers\AdminActionsController@ImageEdit')->middleware('logged');
route::get('/admin/action/image/delete', 'App\Http\Controllers\AdminActionsController@ImageDelete')->middleware('logged');