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

Route::get('/', 'App\Http\Controllers\SiteController@home')->name('site');



Route::get('/posts/atividades', 'App\Http\Controllers\PostsController@lista_atividades')->name('posts.atividades');
Route::get('/posts/dicas', 'App\Http\Controllers\PostsController@lista_dicas')->name('posts.dicas');
Route::get('/post/single/{id}', 'App\Http\Controllers\PostsController@show')->name('post.single');


Route::post('/associate/cadastrar', 'App\Http\Controllers\AssociateController@store')->name('associate.salvar');

Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    // =================== Posts ============================
Route::resource('posts', 'App\Http\Controllers\PostsController', ['except' => ['show']]);

// =================== Associates ============================
Route::resource('associates', 'App\Http\Controllers\AssociateController', ['except' => ['store']]);
Route::get('associate/status/{id}', 'App\Http\Controllers\AssociateController@status')->name('associates.status.change');

});

// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
// });


// =================== Email ============================

Route::post('/send-contact-email', 'App\Http\Controllers\ContactController@store')->name('contact-email');