<?php

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

//Auth::routes();

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('cms/dashboard', ['as' => 'admin.home', 'uses' => 'AdminHomeController@index']);


// User Login Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// User Registration Routes...
Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@register']);

// User Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('password/email', ['as' => 'password.email',  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@reset']);
Route::post('password/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);

// Admin Login Routes...
Route::get('cms/admin_login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
Route::post('cms/admin_login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@login']);
Route::post('cms/admin_logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);

// Admin Registration Routes...
Route::get('cms/admin_register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
Route::post('cms/admin_register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@register']);

// Admin Password Reset Routes...
Route::get('cms/admin_password/reset/{token?}', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
Route::post('cms/admin_password/email', ['as' => 'admin.password.email',  'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
Route::post('cms/admin_password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ResetPasswordController@reset']);
Route::post('cms/admin_password/reset', ['as' => 'admin.password.request', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);

// Force cms request to login
Route::get('cms', function()
{
	return redirect('cms/admin_login');
})->middleware('guest');
