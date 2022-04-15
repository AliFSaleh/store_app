<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/table',function(){
    return view ('table-data');
});
Route::get('/insert',function(){
    return view ('insert');
});


//a route for the test
Route::get('/test',function(){
    return view ('fooooortest');
});

Route::get('/{page}', [AdminController::class, 'index']);
