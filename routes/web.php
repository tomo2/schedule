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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// 管理者
Route::prefix('admin')
->middleware('can:admin')
->group(function(){
    Route::get('index', function () {
        dd('admin');
    });
});

// 一般ユーザー
Route::middleware('can:common')
->group(function(){
    Route::get('index', function () {
        dd('common');
    });
});