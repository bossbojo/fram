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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/login', 'Backend\AuthController@toLogin');
// Route::post('/login', 'Backend\AuthController@checkLogin');
Route::post('/register', 'Backend\AuthController@AuthRegister');
Route::post('login', [ 'as' => 'login', 'uses' => 'Backend\AuthController@checkLogin']);


Route::group(['middleware' => ['auth']], function() {
    Route::resource('home', 'Backend\PangControlController');
    Route::resource('agriculturist', 'Backend\AgriculturistController');

});


// Route::get('/home', 'HomeController@index')->name('home');

