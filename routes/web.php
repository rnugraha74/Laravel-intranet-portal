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

Auth::routes();
Route::get('admin_login','AdminAuth\LoginController@showLoginForm')
Route::post('admin_login','AdminAuth\LoginController@login');
Route::post('admin_logout','AdminAuth\LoginController@logout');
Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
Route::get ('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin_register','AdminAuth\RegisterController@register');
admin_
Route::get('/home', 'HomeController@index');
Route::get('/admin_home', 'AdminHomeController@index');
