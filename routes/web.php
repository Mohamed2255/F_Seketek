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

Route::group(['middleware' => ['is_admin']], function () {
//admin
Route::get('admin/dashboard','UserController@home');
//edite
Route::get('users/edit/{user}','UserController@edit');
Route::post('users/update/{user}','UserController@update');
//delete
Route::get('users/delete/{user}','UserController@delete');
//show
Route::get('/users/show/{id}','UserController@show');
//messages
Route::get('admin/messages','MessageController@messages');
//read message
Route::get('admin/read/{message}','MessageController@read');
//delete message
Route::get('admin/delete/{message}','MessageController@delete');

});



Route::group(['middleware' => ['is_user']], function () {
//profile
Route::get('/users/profile','UserController@profile');
});






//register
Route::get('users/register','UserController@registerform')->name('register');
Route::post('users/handleregister','UserController@handleregister');
//login
Route::get('users/login','UserController@loginform')->name('login');
Route::post('users/handlelogin','UserController@handlelogin');
//logout
Route::get('users/logout','UserController@logout');
//message
Route::get('contact','MessageController@contact');
Route::post('message/store','MessageController@store');
//about
Route::get('about','UserController@about');

Route::get('/', function () {
    return view('welcome');
});



