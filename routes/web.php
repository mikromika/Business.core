<?php

Route::get('/', function () {
    return view('welcome');
});

/// public view for posts-index

Route::get('/posts/public', 'PostController@all');

// ------------------------------------------------------
// Auth::routes(); Are

// Authentication Routes...
Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
  'as' => '',
  'uses' => 'Auth\RegisterController@register'
]);
// -----------------
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/links', 'LinkController@index')->name('links');
Route::post('/links', 'LinkController@store')->name('save');
//----------------------------------
// Profile
Route::get('/bio/{profile}', 'ProfileController@index');
Route::get('/bio/', 'ProfileController@getprofile')->name('profile_dashboard');
//Route::get('/bio/index', 'ProfileController@index')->name('index');
//--------------------------------
// Business area
//Route::get('/business', '\\Business\Controllers\BusinessController@index')->name('company_index');
//Route::get('/business/add', '\\Business\Controllers\BusinessController@create');
//Route::post('/business/add', '\\Business\Controllers\BusinessController@store');



//----------------------------------
//Route::get('/posts-index', 'PostController@index');
Route::get('/posts', 'PostController@index')->name('list_posts');
Route::group(['prefix' => 'posts'], function () {
Route::get('/drafts', 'PostController@drafts')
        ->name('list_drafts')
        ->middleware('auth');
Route::get('/show/{id}', 'PostController@show')
        ->name('show_post');
Route::get('/create', 'PostController@create')
        ->name('create_post')
        ->middleware('can:create-post');
Route::post('/create', 'PostController@store')
        ->name('store_post')
        ->middleware('can:create-post');
Route::get('/edit/{post}', 'PostController@edit')
        ->name('edit_post')
        ->middleware('can:update-post,post');
Route::post('/edit/{post}', 'PostController@update')
        ->name('update_post')
        ->middleware('can:update-post,post');
    // using get to simplify
Route::get('/publish/{post}', 'PostController@publish')
        ->name('publish_post')
        ->middleware('can:publish-post');
});

//----------------------------------

//  Profile, Not in use yet
// Route::get('profile', [
//  'as' => 'admin.profile',
//  'uses' => 'Controllers\Admin\UsersController@getProfile'
// ]);
