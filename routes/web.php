<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\JqueryController;
use App\Http\Controllers\TypeheadController;
use App\Http\Controllers\UserController;

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

// Route::controller(SearchController::class)->group(function(){
//     Route::get('demo-search', 'index');
//     Route::get('autocomplete', 'autocomplete')->name('autocomplete');
// });
// Route::controller(JqueryController::class)->group(function(){
//     Route::get('demo-search', 'index');
//     Route::get('autocomplete', 'autocomplete')->name('autocomplete');
// });
Route::controller(TypeheadController::class)->group(function(){
    Route::get('demo-search', 'index');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
});
Route::get('users', [UserController::class, 'index']);
