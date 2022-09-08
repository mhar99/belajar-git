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

Route::get('/', function () {
    return view('login');
});

Route::post('proses_login', 'App\Http\Controllers\LoginController@proses_login')->name('proses_login');
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::resource('admin', AdminController::class);
});