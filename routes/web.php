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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','BackendController@blank');
Route::get('login','BackendController@login');
Route::get('register','BackendController@register');
Route::get('forgotpass','BackendController@forgotpass');

Route::resource('products', 'productController');